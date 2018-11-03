<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Login extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('mo_login');
		}
		function masuk(){
			$this->load->view("Vi_login");

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
				echo "<script>alert('Username dan password salah!');history.go(-1);</script>";
			}
		}
		function keluar()
		{
			$this->session->sess_destroy();
			redirect(base_url().'login/masuk');
		}
	}