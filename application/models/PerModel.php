<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/18/2019
 * Time: 10:27 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class PerModel extends My_Model
{
	protected $table = 'permission';
	protected $primary_key = 'per_id';
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}

	public function Acount($perpage, $offset)
	{
		$this->db->select('*');
		$this->db->from('permission');
		$this->db->join('users', 'users.per_id = permission.per_id');
		$this->db->limit($perpage, $offset);
		$data = $this->db->get();
		$data = $data->result_array();
		return $data;
	}
	public function fetchOne($per_name)
	{
		$this->db->select('*');
		$this->db->where('per_name', $per_name);
		$data = $this->db->get('permission');
		$data = $data->result_array();
		return $data;
	}

}

/* End of file .php */
