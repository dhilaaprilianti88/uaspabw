<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
    function index(){
		$this->load->view('admin/index');     
	}
 
	function aksi_login(){
		$name = $this->input->post('name');
		$password = $this->input->post('password');
		$where = array(
			'name' => $name,
			'password' => sha1($password)
			);

		$cek = $this->m_data->cek_login("users",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $name,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('admin_digi');
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}