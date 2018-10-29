<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Login extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('mo_login');
		}
		function masuk(){
			$this->load->view("Vi_login");

		}
		function kehome(){
			$this->load->view("Vi_home");
		}
		function login_validation()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
			'username' => $username,
			'password' => $password
			);
			$cek = $this->mo_login->cek_login("tbl_login",$where)->num_rows();
			if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
			}else{
				echo "Username dan password salah !";
			}
		}
		function keluar()
		{
			$this->session->sess_destroy();
			redirect(base_url().'login/masuk');
		}
	}