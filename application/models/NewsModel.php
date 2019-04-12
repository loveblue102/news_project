<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/21/2019
 * Time: 10:05 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsModel extends My_Model
{
	protected $table = 'news';
	protected $primary_key = 'news_id';
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function getHotNews($from,$offset,$news_kind){
		if ($news_kind != ''){
			$this->db->where('news_kind',$news_kind);
		}
		$this->db->where('news_status',"Đã Đăng");
		$this->db->order_by("news_id", "desc");
		$this->db->limit($from,$offset);
		$query = $this->db->get('news');
		$query = $query->result_array();
		return $query;
	}

	public function getCategoryId($category_id){
		$this->db->select('*');
		$this->db->where('category_id', $category_id);
		$this->db->order_by("news_id", "desc");
		$data = $this->db->get('news');
		return $data->result_array();
	}
	public function totalNews($category_id){
		$this->db->select('*');
		$this->db->where('category_id', $category_id);
		$query = $this->db->get($this->table);
		return $query->num_rows();
	}
	public function sameNews($category_id){
		$this->db->select('*');
		$this->db->where('category_id', $category_id);
		$this->db->offset('news_id','desc');
		$this->db->limit(3);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}
	public function paginate($id, $perpage, $offset)
	{
		$this->db->where('category_id', $id);
		$this->db->limit($perpage, $offset);
		$data = $this->db->get('news');
		$data = $data->result_array();
		return $data;
	}
	public function paginateNews( $perpage, $offset)
	{

		$this->db->where(' news_status !=','Chờ Duyệt');
		$this->db->where(' news_status !=','Ẩn');
		$this->db->order_by('news_kind','desc');
		$this->db->order_by('news_id','desc');
		$this->db->limit($perpage, $offset);
		$data = $this->db->get('news');
		$data = $data->result_array();
		return $data;
	}
	public function paginateMyNews( $user_id,$perpage, $offset)
	{

		$this->db->where('user_id',$user_id);
		$this->db->order_by('news_kind','desc');
		$this->db->order_by('news_id','desc');
		$this->db->limit($perpage, $offset);
		$data = $this->db->get('news');
		$data = $data->result_array();
		return $data;
	}
	public function paginateCategoryNews( $category,$perpage, $offset)
	{
		$this->db->where('category_id ',$category);
		$this->db->where(' news_status !=','Chờ Duyệt');
		$this->db->where(' news_status !=','Ẩn');
		$this->db->order_by('news_kind','desc');
		$this->db->order_by('news_id','desc');
		$this->db->limit($perpage, $offset);
		$data = $this->db->get('news');
		$data = $data->result_array();
		return $data;
	}
	public function pagiNews( $user_id,$category,$perpage, $offset)
	{
		$this->db->where('category_id ',$category);
		$this->db->where('user_id',$user_id);
		$this->db->order_by('news_kind','desc');
		$this->db->order_by('news_id','desc');
		$this->db->limit($perpage, $offset);
		$data = $this->db->get('news');
		$data = $data->result_array();
		return $data;
	}
	public function paginateMod($user_id, $perpage, $offset)
	{
		$this->db->where('user_id', $user_id);
		$this->db->limit($perpage, $offset);
		$data = $this->db->get('news');
		$data = $data->result_array();
		return $data;
	}
	public function getNewsStatus($name)
	{
		$this->db->select($name);
		$this->db->distinct($name);
		$this->db->from('news');
		$query = $this->db->get();
		$query = $query->result_array();
		return $query;
	}
	public function numRowsNews(){
		$this->db->where('news_status != ','Chờ Duyệt');
		$this->db->where('news_status != ','Ẩn');
		$query = $this->db->get('news');
		return $query->num_rows();
	}
	public function numRowsMyNews($user_id){
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('news');
		return $query->num_rows();
	}
	public function numRowsCategoryNews($category){
		$this->db->where('news_status != ','Chờ Duyệt');
		$this->db->where('news_status != ','Ẩn');
		$this->db->where('category_id ',$category);
		$query = $this->db->get('news');
		return $query->num_rows();
	}
	public function numMyNews($category,$user_id){
		$this->db->where('user_id ',$user_id);
		$this->db->where('category_id ',$category);
		$query = $this->db->get('news');
		return $query->num_rows();
	}




}

/* End of file .php */
