<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  defined('BASEPATH') OR exit('No direct script access allowed');

     class OlahragaModel extends CI_Model {
              
        public function getAllOlahraga() {

	    // $this->db->select('*');
	    // $this->db->from('data_barang');

	    // return $this->db->get()->result_array();

        return $this->db->query("SELECT * FROM data_barang")->result_array();
        
        }

        public function getSupplierData() {
            return $this->db->query("SELECT * FROM suplier_user")->result_array();
        }

        public function getAllProduksi() {
            return $this->db->query("SELECT * FROM produksi")->result_array();
        }

        
        public function getAllProduksiStok() {
            return $this->db->query("SELECT * FROM produksi_tambah")->result_array();
        }

        public function getAllCostumerOrder() {
            return $this->db->query("SELECT * FROM costumer_order")->result_array();
        }
        public function getAllCostumerOrderStok() {
            return $this->db->query("SELECT * FROM co_stok")->result_array();
        }
        public function getAllCostumerOrderUser() {
            return $this->db->query("SELECT * FROM co_user")->result_array();
        }
        
        public function getAllAkun() {
            return $this->db->query("SELECT * FROM user")->result_array();
        }

        public function getAllBom() {

       
        return $this->db->query("
        SELECT bom.id_barang, bom.jenis_bom, bom.no_dokumen, bom.tanggal,bom.ambil_barang, 
        data_barang.kode_material,data_barang.nama_material
        FROM bom, data_barang
        WHERE bom.kode_material=data_barang.kode_material;
        
        ")->result_array();
        
        }

         

        public function userAccessDashboard() {
            if($this->session->userdata('user_session') != true) {
                $this->session->set_flashdata('alert', true);
                $this->session->set_flashdata('alert-class', 'alert-info');
                $this->session->set_flashdata('alert-message', '');
                // $this->session->set_flashdata('alert-message', 'Harap masuk terlebih dahulu');
                redirect('login');
            } 
        }

        public function UserSession() 
        {
            $table = 'user';
            $checkAuth['id_user'] = $this->session->userdata('id_user');

            $this->load->model('Query');
            $checkAuth = $this->Query->getDataWith($table, $checkAuth);

            if($checkAuth->num_rows() != 0) {
                foreach($checkAuth->result() as $data) :

                    $data_account['id_user'] = $data->id_user;
                    $data_account['nama'] = $data->nama;
                    $data_account['username'] = $data->username;
                    $data_account['password'] = $data->password;
                    $data_account['level'] = $data->level;
                    $data_account['status'] = $data->status;
                    
                endforeach;

                $data_account['user_session'] = true;
                $this->session->set_userdata($data_account);
            }

            else {
                $data_account['user_session'] = false;
                $this->session->set_userdata($data_account);
            }
        }

      }
