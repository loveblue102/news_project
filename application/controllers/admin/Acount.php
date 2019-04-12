<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/19/2019
 * Time: 3:51 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Acount extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function ListAcount()
	{
		$session = $this->session->userdata('loginadmin');
//		var_dump($session);
		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "acount") {
					$check = explode(',', $value["check_action"]);
					if (in_array(1, $check) || in_array(9, $check)) {
						//khung
						$config['total_rows'] = $this->UserModel->numRows();//tat ca ban ghi
						$config['per_page'] = 6;//moi trang co bao nhieu ban ghi
						$config['num_links'] = 2;//hien thi trc
						$config['next_link'] = 'Next »';
						$config['prev_link'] = '« Prev';
						$config['base_url'] = base_url() . 'admin/Acount/ListAcount';
						$config['uri_segment'] = 4;
						$this->pagination->initialize($config);
						$offset = ($this->uri->segment(4) == '') ? 0 : ($this->uri->segment(4));
						$data = $this->PerModel->Acount($config['per_page'], $offset);
						foreach ($data as $key => $value){
							$PerDetail = $this->PerDetailModel->fetchAllId($value["per_id"]);
							$data[$key]["PerDetail"] = $PerDetail;
						}
						view('admin.Acount',compact('data','session'));
						//end khung
					}
				}
			}
		}
	}
	public function Add()
	{
		$session = $this->session->userdata('loginadmin');
		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "acount") {
					$check = explode(',', $value["check_action"]);
					if (in_array(2, $check) || in_array(9, $check)) {
						//khung
						$formAction = base_url() . "admin/Acount/DoAdd";
						view('admin.AddAcount',compact('formAction'));
						//end khung
					}
				}
			}
		}
	}
	public function DoAdd()
	{
		$session = $this->session->userdata('loginadmin');
		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "acount") {
					$check = explode(',', $value["check_action"]);
					if(in_array(2, $check) || in_array(9, $check)) {
						//khung
						$arrPer = array(
							'per_name' => $this->input->post('per')
						);
						$config = array();
						//thuc mục chứa file
						$config['upload_path'] = "./asset/upload";
//						echo $config["upload_path"];
//						die();
						//Định dạng file được phép tải
						$config['allowed_types'] = 'jpg|png|gif';
						//Dung lượng tối đa
						$config['max_size'] = '5000';
						//Chiều rộng tối đa
						$config['max_width'] = '1028';
						//Chiều cao tối đa
						$config['max_height'] = '1028';
						//load thư viện upload
						$this->load->library('upload', $config);
						//thuc hien upload
						if ($this->upload->do_upload('image')) {
							//chua mang thong tin upload thanh con
							$data = $this->upload->data();
						}
						$id = $this->PerModel->insert($arrPer);
						$arr = array(
							'username' => $this->input->post('name'),
							'email' => $this->input->post('email'),
							'fullname' => $this->input->post('fullname'),
							'password' => md5($this->input->post('password')),
							'user_image' => isset($data["file_name"]) ? $data["file_name"] : "",
							'per_id' => $id
						);
						$this->UserModel->insert($arr);
						if($this->input->post('acount') != ''){
							$arrAcount = array(
								'action_code' => 'acount',
								'check_action' => $this->input->post('acount'),
								'per_id' => $id
							);
							$arrAcount["check_action"] = implode(",",$arrAcount["check_action"]);
							$this->PerDetailModel->insert($arrAcount);
						}
						if($this->input->post('news') != '') {
							$arrNews = array(
								'action_code' => 'news',
								'check_action' => $this->input->post('news'),
								'per_id' => $id
							);
							$arrNews["check_action"] = implode(",", $arrNews["check_action"]);
							$this->PerDetailModel->insert($arrNews);
						}
						if($this->input->post('category') != '') {
							$arrCategory = array(
								'action_code' => 'category_news',
								'check_action' => $this->input->post('category'),
								'per_id' => $id
							);
							$arrCategory["check_action"] = implode(",", $arrCategory["check_action"]);
							$this->PerDetailModel->insert($arrCategory);
						}
						if($this->input->post('post') != '') {
							$arrPost = array(
								'action_code' => 'post',
								'check_action' => $this->input->post('post'),
								'per_id' => $id
							);
							$arrPost["check_action"] = implode(",", $arrPost["check_action"]);
							$this->PerDetailModel->insert($arrPost);
						}
						if($this->input->post('comment') != '') {
							$arrComment = array(
								'action_code' => 'comment',
								'check_action' => $this->input->post('comment'),
								'per_id' => $id
							);
							$arrComment["check_action"] = implode(",", $arrComment["check_action"]);
							$this->PerDetailModel->insert($arrComment);
						}
						if($this->input->post('my') != '') {
							$arrMy = array(
								'action_code' => 'my_news',
								'check_action' => $this->input->post('my'),
								'per_id' => $id
							);
							$arrMy["check_action"] = implode(",", $arrMy["check_action"]);
							$this->PerDetailModel->insert($arrMy);
						}
						header('location:'.base_url().'admin/Acount/ListAcount');
						//end khung
					}
				}
			}
		}
	}
	public function Edit($per_id)
	{
		$session = $this->session->userdata('loginadmin');
		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "acount") {
					$check = explode(',', $value["check_action"]);
					if (in_array(3, $check) || in_array(9, $check)) {
						//khung
						$formAction = base_url() . "admin/Acount/DoEdit/".$per_id;
						$per = $this->PerModel->getById($per_id);
						$user = $this->UserModel->fetchPer($per_id);
						$perDetail = $this->PerDetailModel->fetchPerDetail($per_id);
						view('admin.AddAcount',compact('formAction','per','user','perDetail'));
						//end khung
					}
				}
			}
		}
	}
	public function DoEdit($per_id)
	{
		$session = $this->session->userdata('loginadmin');

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "acount") {
					$check = explode(',', $value["check_action"]);
					if (in_array(3, $check) || in_array(9, $check)) {
						//khung
						$arrPer = array(
							'per_name' => $this->input->post('per')
						);
						$config = array();
						//thuc mục chứa file
						$config['upload_path'] = "./asset/upload";
//						echo $config["upload_path"];
//						die();
						//Định dạng file được phép tải
						$config['allowed_types'] = 'jpg|png|gif';
						//Dung lượng tối đa
						$config['max_size'] = '5000';
						//Chiều rộng tối đa
						$config['max_width'] = '1028';
						//Chiều cao tối đa
						$config['max_height'] = '1028';
						//load thư viện upload
						$this->load->library('upload', $config);
						//thuc hien upload
						if ($this->upload->do_upload('image')) {
							//chua mang thong tin upload thanh con
							$data = $this->upload->data();
						}
						$this->PerModel->update($arrPer,$per_id);
						$users = $this->UserModel->fetchPer($per_id);
						$img = $users[0]["user_image"];
						if($this->input->post('password') == ''){
							$password = $users[0]["password"];
						}else{
							$password = md5($this->input->post('password'));
						}
						$arr = array(
							'username' => $this->input->post('name'),
							'email' => $this->input->post('email'),
							'fullname' => $this->input->post('fullname'),
							'password' => $password,
							'user_image' => isset($data["file_name"]) ? $data["file_name"] : $img,
							'per_id' => $per_id
						);
						$this->UserModel->update($arr,$users[0]["user_id"]);
						$perDetail = $this->PerDetailModel->fetchPerDetail($per_id);
//						var_dump($per_detail);
						if($this->input->post('acount') != ''){
							$arrAcount = array(
								'action_code' => 'acount',
								'check_action' => $this->input->post('acount'),
								'per_id' => $per_id
							);
							$arrAcount["check_action"] = implode(",",$arrAcount["check_action"]);
							$acount = false;
							foreach ($perDetail as $rows){
								if($rows["action_code"] == 'acount'){
									$this->PerDetailModel->update($arrAcount,$rows["per_detail_id"]);
									$acount = true;
								}
							}
							if($acount == false){
								$this->PerDetailModel->insert($arrAcount);
							}
//							$this->PerDetailModel->insert($arrAcount);
						}
						if($this->input->post('news') != '') {
							$arrNews = array(
								'action_code' => 'news',
								'check_action' => $this->input->post('news'),
								'per_id' => $per_id
							);
							$arrNews["check_action"] = implode(",", $arrNews["check_action"]);
							$post = false;
							foreach ($perDetail as $rows){
								if($rows["action_code"] == 'news'){
									$this->PerDetailModel->update($arrNews,$rows["per_detail_id"]);
									$post = true;
								}
							}
							if(post == false){
									$this->PerDetailModel->insert($arrNews);
							}
//							$this->PerDetailModel->insert($arrNews);
						}
						if($this->input->post('category') != '') {
							$arrCategory = array(
								'action_code' => 'category_news',
								'check_action' => $this->input->post('category'),
								'per_id' => $per_id
							);
							$arrCategory["check_action"] = implode(",", $arrCategory["check_action"]);
//							$this->PerDetailModel->insert($arrCategory);
							$category = false;
							foreach ($perDetail as $rows){
								if($rows["action_code"] == 'category_news'){
									$this->PerDetailModel->update($arrCategory,$rows["per_detail_id"]);
									$category =true;
								}
							}
							if($category == false){
									$this->PerDetailModel->insert($arrCategory);
							}
						}
						if($this->input->post('post') != '') {
							$arrPost = array(
								'action_code' => 'post',
								'check_action' => $this->input->post('post'),
								'per_id' => $per_id
							);
							$arrPost["check_action"] = implode(",", $arrPost["check_action"]);
							$post = false;
//							$this->PerDetailModel->insert($arrPost);
							foreach ($perDetail as $rows){
								if($rows["action_code"] == 'post'){
									$this->PerDetailModel->update($arrPost,$rows["per_detail_id"]);
									$post = true;
								}
							}
							if ($post == false){
								$this->PerDetailModel->insert($arrPost);
							}
						}
						if($this->input->post('comment') != '') {
							$arrComment = array(
								'action_code' => 'comment',
								'check_action' => $this->input->post('comment'),
								'per_id' => $per_id
							);
							$arrComment["check_action"] = implode(",", $arrComment["check_action"]);
//							$this->PerDetailModel->insert($arrComment);
							$comment = false;
							foreach ($perDetail as $rows){
								if($rows["action_code"] == 'comment'){
									$this->PerDetailModel->update($arrComment,$rows["per_detail_id"]);
									$comment = true;
								}
							}
							if($comment == false){
								$this->PerDetailModel->insert($arrComment);
							}
						}
						if($this->input->post('my') != '') {
							$arrMy = array(
								'action_code' => 'my_news',
								'check_action' => $this->input->post('my'),
								'per_id' => $per_id
							);
							$arrMy["check_action"] = implode(",", $arrMy["check_action"]);
//							$this->PerDetailModel->insert($arrMy);
							$my = false;
							foreach ($perDetail as $rows){
								if($rows["action_code"] == 'my_news'){
									$this->PerDetailModel->update($arrMy,$rows["per_detail_id"]);
									$my = true;
								}
							}
							if($my == false){
								$this->PerDetailModel->insert($arrMy);
							}
						}
						header('location:'.base_url().'admin/Acount/ListAcount');
						//end khung
					}
				}
			}

		}


	}
	public function Delete($per_id)
	{
		$session = $this->session->userdata('loginadmin');
		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "acount") {
					$check = explode(',', $value["check_action"]);
					if (in_array(4, $check) || in_array(9, $check)) {
						//khung
//
						$user = $this->UserModel->fetchPer($per_id);
						$perDetail = $this->PerDetailModel->fetchPerDetail($per_id);
						$this->PerModel->delete($per_id);
						$this->UserModel->delete($user[0]["user_id"]);
						foreach ($perDetail as $rows){
							$this->PerDetailModel->delete($rows["per_detail_id"]);
						}
						header('location:'.base_url().'admin/Acount/ListAcount');
						//end khung
					}
				}
			}
		}
	}
}
