<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/21/2019
 * Time: 10:06 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class CommentModel extends My_Model
{
	protected $table = 'comment';
	protected $primary_key = 'comment_id';
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function fetchOne($id)
	{
		$this->db->select('*');
		$this->db->where('news_id', $id);
		$data = $this->db->get('comment',6);
		// var_dump($data);
		$data = $data->result_array();
		return $data;
	}
	public function getCommentReload($page,$news_id){
		$offset = 6*$page;
		$limit = 6;
		$this->db->select('*');
		$this->db->where('news_id',$news_id);
		$result = $this->db->get('comment',$offset ,$limit)->result_array();
		return $result;
	}
	public function fetchAllParent($news_id)
	{
		$this->db->select('*');
		$this->db->where('comment_rep_id', '0');
		$this->db->where('news_id', $news_id);
		$this->db->order_by("comment_id", "desc");
		$data = $this->db->get('comment',6);
		$data = $data->result_array();
		return $data;
	}
	public function fetAllChild($comment_id){
		$this->db->select('*');
		$this->db->where('comment_rep_id', $comment_id);
		$this->db->order_by("comment_id", "desc");
		$data = $this->db->get('comment');
		return $data->result_array();
	}
	public function getAllParent($news_id,$limit = null, $start=0)
	{
		if ($limit != null)
		{
			$this->db->limit($limit,$start);
		}
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->where('comment_rep_id', '0');
		$this->db->where('news_id', $news_id);
		$this->db->order_by("comment_id", "desc");
		$data = $this->db->get();
		$data = $data->result_array();
		return $data;
	}
	public function allRows($news_id){
		$this->db->where('comment_rep_id',0);
		$this->db->where('news_id',$news_id);
		$query = $this->db->get('comment');
		return $query->num_rows();
	}


}

/* End of file .php */
