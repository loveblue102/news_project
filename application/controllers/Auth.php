<?php
/**
 * Created by PhpStorm.
 * User: AnhTrung
 * Date: 3/25/2019
 * Time: 3:49 PM
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function index()
	{
		$arrParent = $this->Layout();
		view('Auth',compact('arrParent'));
	}
	public function Login()
	{

		$arrParent = $this->Layout();
		$this->form_validation->set_rules('email', 'Email', 'min_length[9]|required');
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
//				var_dump($ss);
				$ss = $ss[0];
				$arrPer = $this->PerModel->getById($ss['per_id']);

				if($arrPer['per_name'] == 'admin' || $arrPer['per_name'] == 'mod' ) {
					$this->session->set_userdata('login', array_merge($ss, $arrPer));
					header('location:' . base_url());
				}else{
					$arr['message'] = 'UserName Hoac Password Khong Ton Tai';
//					echo "dang loi o day nay";
////					die();
					view('Auth',compact('arr','arrParent'));
				}
			} else {
				$arr['message'] = 'UserName Hoac Password Khong Ton Tai';
//				echo "cung dang loi o day nay";
//				var_dump($arr);
//				die();
				view('Auth',compact('arr','arrParent'));
			}

		} else {
			$arr['message'] = 'Nhap thong tin khong hop le.Moi nhap lai';
			view('Auth', compact('arr','arrParent'));
		}

	}

	public function Logout()
	{
		$session = $this->session->userdata('login');
		if (isset($session)) {
			$ss = $this->session->unset_userdata('login');
//			var_dump($ss);
//			die();
			header("location:" . base_url());
		}
	}

}

/* End of file Controllername.php */
