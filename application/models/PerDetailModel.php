<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/18/2019
 * Time: 11:34 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class PerDetailModel extends My_Model
{
	protected $table = 'permission_detail';
	protected $primary_key = 'per_detail_id';
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function fetchAllId($id)
	{
		$this->db->select('*');
		$this->db->where('per_id', $id);
		$data = $this->db->get($this->table);
		// var_dump($data);
		$data = $data->result_array();
		return $data;
	}
	public function fetchPerDetail($per_id)
	{
		$this->db->select('*');
		$this->db->where('per_id', $per_id);
		$data = $this->db->get('permission_detail');
		// var_dump($data);
		$data = $data->result_array();
		return $data;
	}



}

/* End of file .php */
