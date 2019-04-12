<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
//		echo 'did';
//		$session = $this->session->userdata('login');
//		var_dump($session);
//		die();
		$session = $this->session->userdata('loginadmin');
//		var_dump($session);
		if ($session == NULL) {
			header("location:" . base_url()."admin");
		} else {
			$user = $this->UserModel->numRows();
			$news = $this->NewsModel->numRows();
			$category = $this->CategoryNewsModel->numRows();
			$comment = $this->CommentModel->numRows();

			view('admin.Home',compact('user','news','category','comment'));
		}

		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
