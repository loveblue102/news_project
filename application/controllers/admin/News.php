<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/18/2019
 * Time: 3:05 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}

	public function ListNews()
	{
		$session = $this->session->userdata('loginadmin');
//		var_dump($session);
		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
//			$news = $this->NewsModel->getAll();
//			$news = $this->CategoryNews($news);
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "news") {
					$check = explode(',', $value["check_action"]);
					if (in_array(1, $check) || in_array(9, $check) ) {
						//khung
						$config['total_rows'] = $this->NewsModel->numRowsNews();//tat ca ban ghi
						$config['per_page'] = 6;//moi trang co bao nhieu ban ghi
						$config['num_links'] = 2;//hien thi trc
						$config['next_link'] = 'Next »';
						$config['prev_link'] = '« Prev';
						$config['base_url'] = base_url() . 'admin/News/ListNews';
						$config['uri_segment'] = 4;
						$this->pagination->initialize($config);
						$offset = ($this->uri->segment(4) == '') ? 0 : $this->uri->segment(4);
						$category = $this->Layout();
						$data = $this->NewsModel->paginateNews($config['per_page'], $offset);
						$data = $this->CategoryNews($data);

						view('admin.news', compact('data', 'category','session'));
						//end khung
					}
				}
			}

		}

	}

	public function AddNews()
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
					if (in_array(2, $check) || in_array(9, $check)) {
						//khung
						$category = $this->Layout();
						$status = $this->NewsModel->getNewsStatus('news_status');
						$kind = $this->NewsModel->getNewsStatus('news_kind');
						$formAction = base_url() . "admin/News/DoAddNews";
						view('admin.AddNews', compact('category', 'status', 'kind', 'formAction'));
						//end khung
					}
				}
			}

		}


	}

	public function DoAddNews()
	{
		$session = $this->session->userdata('loginadmin');

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "news") {
					$check = explode(',', $value["check_action"]);
					if (in_array(2, $check) || in_array(9, $check)) {
						//khung
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
							'news_image' => isset($data["file_name"]) ? $data["file_name"] : "",
							'news_status' => 'Chờ Duyệt',
							'news_kind' => $this->input->post('kind')
						);
						$this->NewsModel->insert($arr);
//						var_dump($this->input->post('status'));
//						die();
						header('location:' . base_url() . 'admin/News/ListNews');
						//end khung
					}
				}
			}

		}


	}

	public function Fillter()
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
					if (in_array(1, $check) || in_array(9, $check)) {
						//khung
						$categoryId = $this->input->post('category');
						if($categoryId == Null){
							$categoryId = $this->uri->segment(4);
						}
						$config['total_rows'] = $this->NewsModel->numRowsCategoryNews($categoryId);//tat ca ban ghi
//						echo $config['total_rows'];
						$config['per_page'] = 4;//moi trang co bao nhieu ban ghi
						$config['num_links'] = 3;//hien thi trc
						$config['use_page_numbers'] = TRUE;
						$config['next_link'] = 'Next »';
						$config['prev_link'] = '« Prev';
						$config['base_url'] = base_url() . 'admin/News/Fillter/'.$categoryId;
						$config['uri_segment'] = 5;
						$this->pagination->initialize($config);
						$offset = ($this->uri->segment(5) == '') ? 0 : ($this->uri->segment(5) - 1)* $config['per_page'];
//						$offset = $offset ;
						$data = $this->NewsModel->paginateCategoryNews($categoryId, $config['per_page'], $offset);
						$data = $this->CategoryNews($data);
						$category = $this->Layout();
						view('admin.news', compact('data', 'category','session'));

						//end khung
					}
				}
			}

		}


	}
	public function NewsDetails($news_id)
	{
		$session = $this->session->userdata('loginadmin');
//		var_dump($session);

		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "news") {
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
						view('admin.NewsDetails',compact('PostDetails','session'));
						//end khung
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
				if ($value["action_code"] == "news") {
					$check = explode(',', $value["check_action"]);
					if (in_array(4, $check) || in_array(9, $check)) {
						//khung
						$data = $this->NewsModel->getById($news_id);
						if(file_exists("./asset/upload/".$data["news_image"])){
							//xoa file
							unlink("./asset/upload/".$data["news_image"]);
						}
						$this->NewsModel->delete($news_id);
						header('location:'.base_url().'admin/News/ListNews');
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
						$category = $this->Layout();
						$status = $this->NewsModel->getNewsStatus('news_status');
						$kind = $this->NewsModel->getNewsStatus('news_kind');
						$formAction = base_url() . "admin/News/DoEdit/".$news_id;
						view('admin.AddNews', compact('category', 'status', 'kind', 'formAction','data','session'));
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
						header('location:' . base_url() . 'admin/News/ListNews');
						//end khung
					}
				}
			}

		}


	}


}

/* End of file Controllername.php */
