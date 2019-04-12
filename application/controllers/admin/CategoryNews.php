<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/18/2019
 * Time: 4:02 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryNews extends MY_Controller {
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function index()
	{
		$session = $this->session->userdata('loginadmin');
//		var_dump($session);

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "category_news") {
					$check = explode(',', $value["check_action"]);
					if (in_array(1, $check) || in_array(9, $check)) {
						//khung
						$category = $this->Layout();
//						var_dump($category);
						view('admin.CategoryNews',compact('category','session'));
						//end khung
					}
				}
			}

		}

	}

	public function Add()
	{
		$session = $this->session->userdata('loginadmin');
//		var_dump($session);

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "category_news") {
					$check = explode(',', $value["check_action"]);
					if (in_array(2, $check) || in_array(9, $check)) {
						//khung
						$category = $this->Layout();
						$formAction = base_url() . "admin/CategoryNews/DoAdd";
						view('admin.AddCategoryNews',compact('category','formAction'));
						//end khung
					}
				}
			}

		}
	}
	public function DoAdd()
	{
		$session = $this->session->userdata('loginadmin');
//		var_dump($session);

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "category_news") {
					$check = explode(',', $value["check_action"]);
					if (in_array(2, $check) || in_array(9, $check)) {
						//khung
						$data = array(
							'category_name' => $this->input->post('c_name'),
							'category_parent_id' => $this->input->post('category')
						);
//						var_dump($data);
//						die();
						$this->CategoryNewsModel->insert($data);
						header('location:'.base_url().'admin/CategoryNews');
						//end khung
					}
				}
			}

		}
	}
	public function Delete($category_id)
	{

		$session = $this->session->userdata('loginadmin');
//		var_dump($session);

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "category_news") {
					$check = explode(',', $value["check_action"]);
					if (in_array(4, $check) || in_array(9, $check)) {
						//khung
						$data = $this->CategoryNewsModel->getById($category_id);
//						var_dump($data);
						if($data["category_parent_id"] == 0){
							$arr = $this->CategoryNewsModel->fetchAllId($category_id);
							var_dump($arr);
							foreach ($arr as $value){
								$this->CategoryNewsModel->delete($category_id);
								$this->CategoryNewsModel->delete($value["category_id"]);
							}
						}else{
							$this->CategoryNewsModel->delete($category_id);
						}
//						$this->NewsModel->delete($category_id);
						header('location:'.base_url().'admin/CategoryNews');
						//end khung
					}
				}
			}

		}


	}
	public function Edit($category_id)
	{

		$session = $this->session->userdata('loginadmin');
//		var_dump($session);

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "category_news") {
					$check = explode(',', $value["check_action"]);
					if (in_array(3, $check) || in_array(9, $check)) {
						//khung
						$categoryEdit = $this->CategoryNewsModel->getById($category_id);
						$category = $this->Layout();
						$formAction = base_url() . "admin/CategoryNews/DoEdit/".$category_id;
						view('admin.AddCategoryNews',compact('category','formAction','categoryEdit'));
						//end khung
					}
				}
			}

		}


	}
	public function DoEdit($category_id)
	{
		$session = $this->session->userdata('loginadmin');

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "news") {
					$check = explode(',', $value["check_action"]);
					if (in_array(3, $check) || in_array(9, $check)) {
						//khung
						$data = array(
							'category_name' => $this->input->post('c_name')
						);
						$this->CategoryNewsModel->update($data,$category_id);
						header('location:'.base_url().'admin/CategoryNews');
						//end khung
					}
				}
			}

		}


	}

}

/* End of file Controllername.php */
