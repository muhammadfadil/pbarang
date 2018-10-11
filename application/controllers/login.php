<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Login extends CI_Controller{
		
		function masuk(){
			$this->load->view("Vi_login");

		}
		function kehome(){
			$this->load->view("Vi_home");
		}
		function login_validation()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			if($this->form_validation->run())
			{
				//benar
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				// model function
				$this->load->model('mo_login');
				if($this->mo_login->cek_login($username,$password))
				{
					$session_data = array(
						'username' => $username
						);
					$this->session->set_userdata($session_data);
					redirect(base_url().'login/sukses');
				}
				else 
				{
					$this->session->set_flashdata('error','Username atau password salah.');
					redirect(base_url().'login/masuk');
				}
			}
			else
			{
				//salah
				$this->masuk();
			}
		}
		function sukses(){
			if($this->session->userdata('username') !='')
			{
				//echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';
				redirect(base_url().'login/kehome');  
			}
			else
			{
				redirect(base_url().'login/masuk');
			}
		}
		function keluar()
		{
			$this->session->unset_userdata('username');
			redirect(base_url().'login/masuk');
		}
	}