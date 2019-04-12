<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/25/2019
 * Time: 8:44 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}

	public function Category($category_id)
	{
		$arrParent = $this->Layout();
		$arrCategory = $this->CategoryNewsModel->getById($category_id);
		if ($arrCategory["category_parent_id"] != 0) {
			$arrCategoryParent = $this->CategoryNewsModel->getById($arrCategory["category_parent_id"]);
			$arrCategory["parent"] = $arrCategoryParent["category_name"];
		}
//		$listNews = $this->NewsModel->getCategoryId($arrCategory["category_id"]);
		$config['total_rows'] = $this->NewsModel->totalNews($category_id);//tat ca ban ghi
		$config['per_page'] = 4;//moi trang co bao nhieu ban ghi
		$config['num_links'] = 2;//hien thi trc
		$config['next_link'] = 'Next »';
		$config['prev_link'] = '« Prev';
		$config['base_url'] = base_url() . 'News/Category/' . $category_id;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);
		$offset = ($this->uri->segment(4) == '') ? 0 : $this->uri->segment(4);
		$data = $this->NewsModel->paginate($category_id, $config['per_page'], $offset);
//		var_dump($data);
		view('News', compact('arrCategory', 'arrParent', 'data'));

	}

	public function NewsDetail($news_id)
	{

		$arrParent = $this->Layout();
		$param = $this->NewsModel->getById($news_id);
		$categorySlide = $this->CategoryNewsModel->getById($param['category_id']);
		if ($categorySlide['category_parent_id'] == 0) {
			$param["categorySlide"] = $categorySlide["category_name"];
			$param["categorySlideId"] = $categorySlide["category_id"];
		} else {
			$categoryParent = $this->CategoryNewsModel->getById($categorySlide['category_parent_id']);
			$param["categorySlide"] = $categorySlide["category_name"];
			$param["categorySlideId"] = $categorySlide["category_id"];
			$param["categoryParent"] = $categoryParent["category_name"];
			$param["categoryParentId"] = $categoryParent["category_id"];
		}
		$arrSame = $this->NewsModel->sameNews($param["category_id"]);
//

		$comment = $this->CommentModel->fetchAllParent($param["news_id"]);
		foreach ($comment as $key => $value){
			$user = $this->UserModel->getById($value["user_id"]);
			$commentChild = $this->CommentModel->fetAllChild($value["comment_id"]);
//			var_dump($commentChild);
				$comment["$key"]["username"] = $user["username"];
				$comment["$key"]["user_image"] = $user["user_image"];
			if( $commentChild != Null){
				$comment["$key"]["repcomment"] = $commentChild;
				foreach ($commentChild as $keys => $rows){
					$userChild = $this->UserModel->getById($rows["user_id"]);
					$comment["$key"]["repcomment"][$keys]["child"] = $userChild;
				}


			}
		}


//			die();
		view('NewsDetails', compact('arrParent', 'arrSame', 'param', 'comment'));
	}


	public function Ajax()
	{
		$comment_content = $this->input->post('comment');
		$news_id = $this->input->post('comment_id');
		$user = $this->session->userdata('login');
//		$comment = json_encode($comment);
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$data = array(
			'comment_content' => $comment_content,
			'news_id' => $news_id,
			'user_id' => $user["user_id"],
			'comment_date' => date('Y-m-d'),
			'comment_rep_id' => '0'
		);
		$insert_id = $this->CommentModel->insert($data);

		echo "<div class=\"comment-content d-flex\" id=\"comment-content\" >
<div class=\"comment-author\">
									<img src=" . base_url() . "asset/upload/" . $user["user_image"] . ' ' . "alt=\"author\">
								</div>
								<div class=\"comment-meta\">
									<a href=\"#\" class=\"comment-date\">" . date('d-m-Y') . "</a>
									<h6>" . $user["username"]
			. "</h6>
									<p>" . $data['comment_content'] . "</p>
									<div class=\"d-flex align-items-center\">
										<a href=\"#\" class=\"reply\" data-id=".$insert_id." id=\"reply\">Reply</a>
									</div>
									<div class=\"d-flex align-items-center comment-content d-flex\">
										<form action=\"\" id='frm".$insert_id."' class='frm".$insert_id."' method=\"post\" style='width: 100%;display: none'>
											<input type=\"hidden\" id=\"comment_rep_parent\" name=\"comment_id\" value=" . $insert_id . ">
											<input type=\"hidden\" id=\"news_rep_id\" name=\"comment_id\" value=" . $data["news_id"] . ">
											<div class=\"post-author d-flex align-items-center\" style=\"border-top: 0px\">
									<textarea class=\"form-control comment_rep".$insert_id."\"  name=\"comment_rep\" id=\"comment_rep\" cols=\"30\"
											  rows=\"10\" ></textarea>
											</div>
											<input value=\"Post Comment\" data-id=".$insert_id." type=\"submit\" name=\"ajax_id\" id=\"ajax_id\"
												   class=\"btn mag-btn mt-30 d-flex pull-right ajax_id\"
												   style=\"margin-top: 0px !important;margin-bottom: 25px;\">
										</form>
									</div>
									
								</div>
								
								</div>
								<div class=\"\" id=\"comment-content" . $insert_id . "\" >

								</div>
								";
	}

	public function AjaxRep()
	{
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$comment_rep_parent = $this->input->post('comment_rep_parent');
		$f = $this->input->post('f');
		$comment_rep = $this->input->post('comment_rep');
		$news_rep_id = $this->input->post('news_rep_id');
		$user = $this->session->userdata('login');
		$data = array(
			'comment_content' => $comment_rep,
			'news_id' => $news_rep_id,
			'user_id' => $user["user_id"],
			'comment_date' => date('Y-m-d'),
			'comment_rep_id' => $comment_rep_parent
		);
		$this->CommentModel->insert($data);
		echo "
		<ol class=\"children\">
								<li class=\"single_comment_area\">
									<div class=\"comment-content d-flex\">
										<div class=\"comment-author\">
											<img src=" . base_url() . "asset/upload/" . $user["user_image"] . " alt=\"author\">
										</div>
										<div class=\"comment-meta\">
											<a href=\"#\" class=\"comment-date\">" . date('d-m-Y') . "</a>
											<h6>" . $user["username"] . "</h6>
											<p>" . $data['comment_content'] . "</p>
										</div>
									</div>
								</li>
							</ol>
		";
	}

	public function LoadMore()
	{
		$page = $this->input->get('page');
		$news_id = $this->input->get('news_id');
		$limit = 6;
		$start = ($page - 1)*$limit;
		$comment = $this->CommentModel->getAllParent($news_id,$limit,$start);
		$count = count($comment);
		$all = $this->CommentModel->allRows($news_id);
		foreach ($comment as $key => $value){
			$user = $this->UserModel->getById($value["user_id"]);
			$commentChild = $this->CommentModel->fetAllChild($value["comment_id"]);
//			var_dump($commentChild);
			$comment["$key"]["username"] = $user["username"];
			$comment["$key"]["user_image"] = $user["user_image"];
			if( $commentChild != Null){
				$comment["$key"]["repcomment"] = $commentChild;
				foreach ($commentChild as $keys => $rows){
					$userChild = $this->UserModel->getById($rows["user_id"]);
					$comment["$key"]["repcomment"][$keys]["child"] = $userChild;
				}


			}
		}
		$arrComment = array('data'=> $comment,'all'=>$all,'result' => $limit*$page);
		echo json_encode($arrComment);
	}

}
/* End of file Controllername.php */
