<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
class Userview extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$this->load->view('userindex');
        
	}
 
    function causes(){
		$data['tb_barang'] = $this->m_data->tampil_barang()->result();
		$this->load->view('usercauses', $data);
	}
 
	function donate($id_barang){
		$where = array('id_barang' => $id_barang);
		$data['tb_barang'] = $this->m_data->edit_barang($where, 'tb_barang')->result();
		$this->load->view('userdonate',$data);
	}

    // function donasi($id_barang){
	// 	$id_barang = $this->input->post('id_barang', TRUE);
	// 	$nama_barang = $this->input->post('nama_barang', TRUE);
	// 	$jenis_barang = $this->input->post('jenis_barang', TRUE);
	// 	$id_penerima = $this->input->post('id_penerima', TRUE);

    //     $data = array(
	// 		'id_barang' =>$id_barang,
	// 		'nama_barang' => $nama_barang,
	// 		'jenis_barang' => $jenis_barang,
	// 		'id_penerima' => $id_penerima,

    //     );
     
    //     $where = array(
    //         'id_barang' => $id_barang
    //     );
	// 	$data['tb_barang']=$this->m_data->query($where)->result();
	// 	$this->load->view('userdonate', $data);
        
	// }

    function thanks(){
		$this->load->view('userthanks');
        
	}


}   