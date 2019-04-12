<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/21/2019
 * Time: 10:06 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryNewsModel extends My_Model
{
	protected $table = 'category_news';
	protected $primary_key = 'category_id';
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function fetchAllParent()
	{
		$this->db->select('*');
		$this->db->where('category_parent_id', 0);
		$data = $this->db->get('category_news');
		$data = $data->result_array();
		return $data;
	}

	public function fetchAllId($category_id)
	{
		$this->db->select('*');
		$this->db->where('category_parent_id', $category_id);
		$data = $this->db->get('category_news');
		$data = $data->result_array();
		return $data;
	}
	public function fetchMaxParent()
	{
		$this->db->select('*');
		$this->db->where('category_parent_id', 0);
		$this->db->order_by("category_id", "desc");
		$data = $this->db->get('category_news');
		$data = $data->result_array();
		return $data;
	}

}

/* End of file .php */
