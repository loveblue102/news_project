<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/22/2019
 * Time: 10:52 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		$slide = $this->NewsModel->getHotNews(3,0,"Hot");
		$slide = $this->CategoryNews($slide);
		$hot = $this->NewsModel->getHotNews(3,3,"Hot");
		$hot = $this->CategoryNews($hot);
		$new = $this->NewsModel->getHotNews(6,0,"");
		$new = $this->CategoryNews($new);
		$maxCategory = $this->CategoryNewsModel->fetchMaxParent();
		$maxCategory = $maxCategory[0];
		$newHome = $this->NewsModel->getCategoryId($maxCategory['category_id']);
		foreach ($newHome as $key => $value){
			$newHome["$key"]["maxCategory"] = $maxCategory;
		}
		$arrParent = $this->Layout();
		view('Home',compact('arrParent','slide','hot','new','newHome'));
	}

}

/* End of file Controllername.php */
