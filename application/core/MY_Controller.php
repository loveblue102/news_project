<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/22/2019
 * Time: 4:14 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->helper('cookie');
		//load session
		$this->load->library('session');
		$this->load->model('NewsModel');
		$this->load->model('CategoryNewsModel');
		$this->load->model('CommentModel');
		$this->load->model('PerModel');
		$this->load->model('PerDetailModel');
		$this->load->model('UserModel');
		$this->load->model('PostModel');


	}
	public function Layout()
	{
		$arrParent = $this->CategoryNewsModel->fetchAllParent();
		foreach ($arrParent as $key => $value){
			$arrParent[$key]["number_parent"] = $this->NewsModel->totalNews($value["category_id"]);
			$arr = $this->CategoryNewsModel->fetchAllId($value['category_id']);
			if( $arr != Null){
				$arrParent["$key"]["category_child"] = $arr;
				foreach ($arr as $keys => $rows){
					$arrParent[$key]["category_child"][$keys]["number"] = $this->NewsModel->totalNews($rows["category_id"]);
				}


			}

		}
		return $arrParent;
	}

	public function CategoryNews($param){
		foreach ($param as $key => $value){
			$categorySlide = $this->CategoryNewsModel->getById($value['category_id']);
			if($categorySlide['category_parent_id'] == 0){
				$param["$key"]["categorySlide"] = $categorySlide["category_name"];
				$param["$key"]["categorySlideId"] = $categorySlide["category_id"];
			}else{

				$categoryParent = $this->CategoryNewsModel->getById($categorySlide['category_parent_id']);
				$param["$key"]["categorySlide"] = $categorySlide["category_name"];
				$param["$key"]["categorySlideId"] = $categorySlide["category_id"];
				$param["$key"]["categoryParent"] = $categoryParent["category_name"];
				$param["$key"]["categoryParentId"] = $categoryParent["category_id"];
			}

		}
		return $param;
	}


}

/* End of file Controllername.php */
