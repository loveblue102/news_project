<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My_Model extends CI_Model{
    protected $table;
    protected $primary_key;

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }


    public function getAll()
    {

		$query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function getById($id)
    {
        $query = $this->db->get_where($this->table, array($this->primary_key => $id));
        return $query->first_row('array');
    }

    public function insertId($data = array())
    {
        $insert = $this->db->insert($this->table, $data);
		return ($insert)?$this->db->insert_id():false;
    }
	public function insert($data = array())
	{
		$insert = $this->db->insert($this->table, $data);
		if ($insert) {
			return $this->db->insert_id();
		}
		else {
			return false;
		}
	}

    public function update($data = array(), $id)
    {
        $update = $this->db->update($this->table, $data, array("$this->primary_key"=>$id));
        return $update ? true : false;
    }

    public function delete($id)
    {
        $delete = $this->db->delete($this->table, array("$this->primary_key"=>$id));
        return $delete ? true : false;
    }

    public function checkUnique($where){
    	//kt ton tai
        $query = $this->db->get_where($this->table, $where);
        return ($query->num_rows() >= 1) ? false : true;
    }
	public function numRows(){
		$query = $this->db->get_where($this->table);
		return $query->num_rows();
	}


}
