<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/19/2019
 * Time: 3:59 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}

	public function ListPost()
	{


		$session = $this->session->userdata('loginadmin');

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {

				if ($value["action_code"] == "post") {
					$check = explode(',', $value["check_action"]);

					if (in_array(1, $check) || in_array(9, $check)) {
						//khung


//						 $this->PostModel->PostNews();
						$config['total_rows'] = $this->PostModel->numRowsPost();
						$config['per_page'] = 6;//moi trang co bao nhieu ban ghi
						$config['num_links'] = 2;//hien thi trc
						$config['next_link'] = 'Next »';
						$config['prev_link'] = '« Prev';
						$config['base_url'] = base_url() . 'admin/Post/ListPost';
						$config['uri_segment'] = 4;
						$this->pagination->initialize($config);
						$offset = ($this->uri->segment(4) == '') ? 0 : $this->uri->segment(4);


						$data = $this->PostModel->paginatePost($config['per_page'], $offset);
						$data = $this->CategoryNews($data);
						foreach ($data as $key => $value) {
							$user = $this->UserModel->getById($value["user_id"]);
							$data[$key]["username"] = $user["username"];
						}
						view('admin.Post', compact('data','session'));
						//end khung
					}
				}
			}

		}


	}

	public function PostDetails($news_id)
	{
		$session = $this->session->userdata('loginadmin');
//		var_dump($session);

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "post") {
					$check = explode(',', $value["check_action"]);
					if (in_array(1, $check) || in_array(9, $check)) {
						//khung
						$PostDetails = $this->NewsModel->getById($news_id);

						$PostDetails["username"] = $this->UserModel->getById($PostDetails["user_id"])["username"];
						$category = $this->CategoryNewsModel->getById($PostDetails["category_id"]);

						if($category['category_parent_id'] == 0){
							$PostDetails["category_name"] = $category["category_name"];
						}else{
							$categoryParent = $this->CategoryNewsModel->getById($category['category_parent_id']);
							$PostDetails["category_name"] = $category["category_name"];
							$PostDetails["category_parent"] = $categoryParent["category_name"];
						}
						view('admin.PostDetails',compact('PostDetails','session'));
						//end khung
					}
				}
			}
		}
	}

	public function Check($news_id)
	{

		$session = $this->session->userdata('loginadmin');
//		var_dump($session);

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "post") {
					$check = explode(',', $value["check_action"]);
					if (in_array(5, $check) || in_array(9, $check)) {

						$data = array(
							'news_status' => 'Đã Đăng'
						);
						$this->NewsModel->update($data, $news_id);
						$PostDetails = $this->NewsModel->getById($news_id);

						$PostDetails["username"] = $this->UserModel->getById($PostDetails["user_id"])["username"];
						$category = $this->CategoryNewsModel->getById($PostDetails["category_id"]);

						if($category['category_parent_id'] == 0){
							$PostDetails["category_name"] = $category["category_name"];
						}else{
							$categoryParent = $this->CategoryNewsModel->getById($category['category_parent_id']);
							$PostDetails["category_name"] = $category["category_name"];
							$PostDetails["category_parent"] = $categoryParent["category_name"];
						}
						view('admin.PostDetails',compact('PostDetails','data','session'));
					}
				}
			}
		}

	}
	public function Delete($news_id)
	{

		$session = $this->session->userdata('loginadmin');
//		var_dump($session);

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "post") {
					$check = explode(',', $value["check_action"]);
					if (in_array(4, $check) || in_array(9, $check)) {
						//khung
						$data = $this->NewsModel->getById($news_id);
						if(file_exists("./asset/upload/".$data["news_image"])){
							//xoa file
							unlink("./asset/upload/".$data["news_image"]);
						}
						$this->NewsModel->delete($news_id);
						header('location:'.base_url().'admin/Post/ListPost');
						//end khung
					}
				}
			}

		}


	}
	public function Edit($news_id)
	{

		$session = $this->session->userdata('loginadmin');
//		var_dump($session);

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "news") {
					$check = explode(',', $value["check_action"]);
					if (in_array(3, $check) || in_array(9, $check)) {
						//khung
						$data = $this->NewsModel->getById($news_id);
//						var_dump($data);
						$category = $this->Layout();
						$status = $this->NewsModel->getNewsStatus('news_status');
						$kind = $this->NewsModel->getNewsStatus('news_kind');
						$formAction = base_url() . "admin/Post/DoEdit/".$news_id;
						view('admin.EditPost', compact('category', 'status', 'kind', 'formAction','data'));
						//end khung
					}
				}
			}

		}
	}
	public function DoEdit($news_id)
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
						$arrNews = $this->NewsModel->getById($news_id);
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
						if ($this->upload->do_upload('img')) {
							//chua mang thong tin upload thanh con
							$data = $this->upload->data();
						}
						$arr = array(
							'user_id' => $session["user_id"],
							'category_id' => $this->input->post('category'),
							'news_title' => $this->input->post('title'),
							'news_content' => $this->input->post('content'),
							'news_description' => $this->input->post('description'),
							'news_image' => isset($data["file_name"]) ? $data["file_name"] : $arrNews["news_image"] ,
							'news_status' => $this->input->post('status'),
							'news_kind' => $this->input->post('kind')
						);
						if(isset($data["file_name"]) && file_exists("./asset/upload/".$arrNews["news_image"])){
							//xoa file
							unlink("./asset/upload/".$arrNews["news_image"]);
						}
						$this->NewsModel->update($arr,$news_id);
						header('location:' . base_url() . 'admin/Post/ListPost');
						//end khung
					}
				}
			}

		}


	}


}


/* End of file Controllername.php */
