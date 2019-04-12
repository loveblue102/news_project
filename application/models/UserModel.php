<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/18/2019
 * Time: 9:04 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends My_Model
{
	protected $table = 'users';
	protected $primary_key = 'user_id';
	public function __construct()
	{
		parent::__construct();

	}
	public function checkLogin($data){
		$query = $this->db->get_where('users', $data);
		return ($query->num_rows() == 1) ? true : false;
	}

	public function fetchOne($email)
	{
		$this->db->select('*');
		$this->db->where('email', $email);
		$data = $this->db->get('users');
		// var_dump($data);
		$data = $data->result_array();
		return $data;
	}
	public function fetchPer($per_id)
	{
		$this->db->select('*');
		$this->db->where('per_id', $per_id);
		$data = $this->db->get('users');
		// var_dump($data);
		$data = $data->result_array();
		return $data;
	}

}

/* End of file .php */
