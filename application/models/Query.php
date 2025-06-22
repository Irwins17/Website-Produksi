<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Query extends CI_Model 
{
    public function getData($table) 
    {
        return $this->db->get($table);
    }

    public function getDataWith($table, $payload)
    {
        return $this->db->get_where($table, $payload);
    }

    public function addData($table, $payload)
    {
       $this->db->insert($table, $payload);
       $this->db->select('transaction_id');
       $this->db->from('transactions');
       $this->db->order_by('date', 'DESC');
       $this->db->limit(1);

       return $this->db->get()->result_array();
    }

    public function editData($table, $where, $payload)
	{
		$this->db->where($where);
		$this->db->update($table, $payload);
	}

	public function deleteData($table, $id)
	{
		$this->db->where($id);
		$this->db->delete($table);
    }
    
    public function joinTable($table1, $table2, $where) {
        $this->db->select('*');
		$this->db->from($table1);
		$this->db->join($table2, $where);

		return $this->db->get();
    }

    public function orderBy($table, $field, $par) {
        $this->db->from($table);
        $this->db->order_by($field, $par);
        $query = $this->db->get(); 
        return $query;
    }
}