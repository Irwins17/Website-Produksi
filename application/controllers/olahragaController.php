<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

     class olahragaController extends CI_Controller {
     
      function __construct()
      {
          parent::__construct();
          $this->load->model("OlahragaModel");
      }
  
              
      public function databarang(){

      $data['olahraga'] = $this->OlahragaModel->getAllOlahraga();
      $this->load->view('olahragaView',$data);

      }
      

      public function overview() {
        $this->load->view('overview');
      }
      public function insert_data() 
      {
          
          $id_user = $this->input->post("id_user");
          $id_order = $this->input->post("id_order");
          date_default_timezone_set('Asia/Jakarta');
          $order_date = date('Y-m-d');
          $company = $this->input->post("company");
          $sender = $this->input->post("sender");
          $destination = $this->input->post("destination");
          $weight = $this->input->post("weight");

          $data = array(
              "id_user" => $id_user,
              "id_order" => $id_order,
              "order_date" => $order_date,
              "company" => $company,
              "sender" => $sender,
              "destination" => $destination,
              "weight" => $weight,
          );

          $this->UserModel->input($data,'order');
          redirect('report');
    }
      }