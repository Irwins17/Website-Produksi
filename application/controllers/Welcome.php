<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
        public function login_frontend() {
            $this->load->view('login');
        }

        public function login_backend()
        {
            // validasi form
            // $this->form_validation->set_rules('username','username','required');
            // $this->form_validation->set_rules('password', 'password', 'required');

            // validasi form
            // if($this->form_validation->run() == true) {
                $table = 'user';
                $this->load->model('Query');
                $payload['username'] = $this->input->post('username');
                $payload['password'] = $this->input->post('password');
                
                $user_check = $this->Query->getDataWith($table, $payload);

                // if user exist
				// var_dump($user_check->num_rows());
                if($user_check->num_rows()) {

                    foreach($user_check->result() as $data) :

                        $data_account['id_user'] = $data->id_user;
                        $data_account['nama'] = $data->nama;
                        $data_account['username'] = $data->username;
                        $data_account['password'] = $data->password;
                        $data_account['level'] = $data->level;
                        $data_account['status'] = $data->status;
                        
                    endforeach;

                    $data_account['user_session'] = true;
					// var_dump("test"); Untuk mengecek apakah sudah bisa login 
                    $this->session->set_userdata($data_account);
                    $this->session->set_flashdata('alert', true);
                    $this->session->set_flashdata('alert-class', 'alert-success');
                    $this->session->set_flashdata('alert-message', 'Masuk sebagai '.$data_account['username']);
                    redirect('landing_page');
                }
                else {
					// var_dump("test");

                    $this->session->set_flashdata('alert', true);
                    $this->session->set_flashdata('alert-class', 'alert-danger');
                    $this->session->set_flashdata('alert-message', '<b>Nama pengguna</b> atau <b>Kata sandi</b> kurang tepat');
                    redirect('login');
                }
            // }

            // validasi form bila perlu

            // else {
            //     $this->session->set_flashdata('alert', true);
            //     $this->session->set_flashdata('alert-class', 'alert-primary');
            //     $this->session->set_flashdata('alert-message', 'Mohon lengkapi form pengisian');
            //     redirect('masuk');
            // }
        }

		public function logout() {
			$this->session->sess_destroy();
			redirect('login');
		}
}
