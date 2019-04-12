<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/19/2019
 * Time: 10:26 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}

	public function ListComment($news_id)
	{
		$session = $this->session->userdata('loginadmin');
		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			$check = false;
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "comment") {
					$check = explode(',', $value["check_action"]);
					if (in_array(1, $check) || in_array(9, $check)) {
						//khung
						$comment = $this->CommentModel->fetchAllParent($news_id);
						foreach ($comment as $key => $rows) {
							$comment_rep = $this->CommentModel->fetAllChild($rows["comment_id"]);
							$user = $this->UserModel->getById($rows["user_id"]);
							$comment[$key]["username"] = $user["username"];
							if (isset($comment_rep)) {
								$comment[$key]["comment_child"] = $comment_rep;
							}
						}
						foreach ($comment as $key => $rows) {
							if (isset($rows["comment_child"])) {
								foreach ($rows["comment_child"] as $keys => $row) {
									$users = $this->UserModel->getById($row["user_id"]);
//									var_dump($users);
									$comment[$key]['comment_child'][$keys]["username"] = $users["username"];
								}
							}
							//end khung
						}
						view('admin.Comment', compact('comment','session'));
					}
				}

			}


		}

	}
	public function delete($comment_id,$news_id)
	{
		$session = $this->session->userdata('loginadmin');
		if ($session == NULL) {
			header("location:" . base_url() . "admin");
		} else {
			//admin
			$check = false;
			foreach ($session["per"] as $value) {
				if ($value["action_code"] == "comment") {
					$check = explode(',', $value["check_action"]);
					if (in_array(4, $check) || in_array(9, $check)) {
						//khung
						$comment = $this->CommentModel->getById($comment_id);
//						var_dump($comment);
						if($comment["comment_rep_id"] != 0){
							$this->CommentModel->delete($comment_id);
						}else{
							$commentChild = $this->CommentModel->fetAllChild($comment["comment_id"]);
							$this->CommentModel->delete($comment_id);
							foreach ($commentChild as $value){
								$this->CommentModel->delete($value["comment_id"]);
							}
						}
						header('location:'.base_url().'admin/Comment/ListComment/'.$news_id);
//
							//end khung


					}
				}

			}


		}

	}

}

/* End of file Controllername.php */
