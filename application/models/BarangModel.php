<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

     class BarangModel extends CI_Model {

     
        public function tambah_data_barang($namaTable, $field) //namaTable = ikuti database, filed = object $data
        {
          $this->db->insert($namaTable, $field);
        }

        public function get_where_data_table($table, $field)
        {
          return $this->db->get_where($table, $field);
        }

        public function get_join_data_table($table1, $table2, $field)
        {
          $this->db->select('*');
          $this->db->from($table1);
          $this->db->join($table2, $field);
          return $this->db->get();
        }

  public function update_data_table($table, $id, $field)
  {
    $this->db->where($id);
    $this->db->update($table, $field);
  }

  public function update_data_table2($table, $id, $field2)
  {
    $this->db->where($id);
    $this->db->update($table, $field2);
  }
        public function hapus_data($table, $id)
        {
          $this->db->where($id);
          $this->db->delete($table);
        }

  public function get_join_data_table2($table1, $table2,$table3, $field,$field2)
  {
    $this->db->select('*');
    $this->db->from($table1);
    $this->db->join($table2,$field);
    $this->db->join($table3,$field2);
    return $this->db->get();
  }
       
        function update_data($id_barang, $field){
		$this->db->where('id_barang', $id_barang);
		$this->db->update('data_barang', $field);
	}	

  function update_data_bom($id_barang, $field){
		$this->db->where('id_barang', $id_barang);
		$this->db->update('bom', $field);
	}

  function update_data_suplier_user($id_barang, $field){
		$this->db->where('id_suplier2', $id_barang);
		$this->db->update('suplier_user', $field);
	}	

  function update_data_produksi($id_barang, $field){
		$this->db->where('id_barang', $id_barang);
		$this->db->update('produksi', $field);
	}

  function update_data_StokProduksi($id_barang, $field){
		$this->db->where('id_barang', $id_barang);
		$this->db->update('produksi_tambah', $field);
	}	

  function update_data_ProduksiSortir($id_barang, $field){
		$this->db->where('id_barang', $id_barang);
		$this->db->update('produksi_sortir', $field);
	}	
  
  function update_data_CostumerOrder($id_barang, $field){
		$this->db->where('id_barang', $id_barang);
		$this->db->update('costumer_order', $field);
	}	
  
  function update_data_Co_keluar($id_barang, $field){
		$this->db->where('id_barang', $id_barang);
		$this->db->update('co_keluar', $field);
	}	
  
  function update_data_Co_user($id_barang, $field){
		$this->db->where('id_customer', $id_barang);
		$this->db->update('co_user', $field);
	}	
        public function get_data_barang($field)
        {
          return $this->db->get_where('data_barang', $field);
        }

        public function get_data_bom($field)
        {
          return $this->db->get_where('bom', $field);
        }

        public function get_data_suplier($field)
        {
          return $this->db->get_where('suplier', $field);
        }

        public function get_data_suplier_user($field)
        {
          return $this->db->get_where('suplier_user', $field);
        }
        public function get_data_produksi($field)
        {
          return $this->db->get_where('produksi', $field);
        }
        public function get_data_StokProduksi($field)
        {
          return $this->db->get_where('produksi_tambah', $field);
        }
        public function get_data_ProduksiSortir($field)
        {
          return $this->db->get_where('produksi_sortir', $field);
        }
        public function get_data_CostumerOrder($field)
        {
          return $this->db->get_where('costumer_order', $field);
        }
        
        public function get_data_Co_keluar($field)
        {
          return $this->db->get_where('co_keluar', $field);
        }
        public function get_data_Co_user($field)
        {
          return $this->db->get_where('co_user', $field);
        }
      }