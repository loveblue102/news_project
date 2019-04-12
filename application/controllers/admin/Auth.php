<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/5/2019
 * Time: 9:17 AM
 */
//session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$session = $this->session->userdata('loginadmin');
		if ($session != NULL) {
			header("location:" . base_url() . "admin/Home");
		} else {
			view('admin.Login');
		}

	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'min_length[8]|required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == TRUE) {
			$arr = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);
			$result = $this->UserModel->checkLogin($arr);
			if ($result == TRUE) {
				//dang nhap thanh cong thi xet sang bang permission
				$email = $arr["email"];
				$ss = $this->UserModel->fetchOne($email);
				$ss = $ss[0];
				$arrPer = $this->PerModel->getById($ss['per_id']);
				$arrPerDetail = $this->PerDetailModel->fetchAllId($ss['per_id']);
				if($arrPer['per_name'] == 'admin' || $arrPer['per_name'] == 'mod' ) {
					$session = array_merge($ss, $arrPer);
					$session["notification"]=$this->PostModel->checkNumRows();
						$session["per"] = $arrPerDetail;
					$this->session->set_userdata('loginadmin',$session);
					if ($this->input->post('remember') == "on") {
						set_cookie('email', $this->input->post('email'), 180 * 24 * 60 * 60);
						set_cookie('password', $this->input->post('password'), 180 * 24 * 60 * 60);
//						var_dump($this->input->cookie('email')) ;
//						die('ok');
					}
					header('location:' . base_url() . 'admin/Home');
				}else{
						$arr['message'] = 'UserName Hoac Password Khong Ton Tai';
						view('admin.Login', $arr);
				}
			} else {
				$arr['message'] = 'UserName Hoac Password Khong Ton Tai';
				view('admin.Login', $arr);
			}

		} else {
			$arr['message'] = 'Nhap thong tin khong hop le.Moi nhap lai';
			view('admin.Login', $arr);
		}

	}

	public function logout()
	{
		$session = $this->session->userdata('loginadmin');
		if (isset($session)) {
			$ss = $this->session->unset_userdata('loginadmin');
//			var_dump($ss);
//			die();
			header("location:" . base_url()."admin");
		}
	}
}
//new controller_auth();
/* End of file Controllername.php */
