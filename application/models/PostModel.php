<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/18/2019
 * Time: 10:27 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class PostModel extends My_Model
{
	protected $table = 'news';
	protected $primary_key = 'news_id';
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function PostNews(){
			$this->db->where('news_status','Chờ Duyệt');
			$this->db->or_where('news_status','Ẩn');
			$query = $this->db->get($this->table);
			return $query->result_array();
	}
	public function numRowsPost(){
		$this->db->where('news_status ','Chờ Duyệt');
		$this->db->or_where('news_status ','Ẩn');
		$query = $this->db->get_where('news');
		return $query->num_rows();
	}
	public function checkNumRows(){
		$this->db->where('news_status ','Chờ Duyệt');
		$query = $this->db->get_where('news');
		return $query->num_rows();
	}
	public function paginatePost( $perpage, $offset)
	{

		$this->db->where(' news_status ','Chờ Duyệt');
		$this->db->or_where(' news_status ','Ẩn');
		$this->db->order_by('news_kind','desc');
		$this->db->order_by('news_id','desc');
		$this->db->limit($perpage, $offset);
		$data = $this->db->get('news');
		$data = $data->result_array();
		return $data;
	}

}

/* End of file .php */
