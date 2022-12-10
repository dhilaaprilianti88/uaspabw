<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
class Crud_donatur extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$this->load->view('admin/index');
        
	}

    function lihatdonatur(){
		$data['tb_donasi'] = $this->m_data->tampil_donasi()->result();
		$this->load->view('admin/donatur',$data);
	}

    // function tambahdonatur(){
	// 	$this->load->view('admin/tambah_donatur');
    // }

    // function tambahdonatur_aksi(){
    //     $id_donatur = $this->input->post('id_donatur');
    //     $nama_donatur = $this->input->post('nama_donatur');
    //     $nohp = $this->input->post('nohp');
    //     $alamat = $this->input->post('alamat');

	// 	$data = array(
	// 		'nama_donatur' => $nama_donatur,
    //         'nohp' => $nohp,
    //         'alamat' => $alamat,
	// 		);
	// 	$this->m_data->input_donatur($data,'tb_donatur');
	// 	redirect('crud_donatur/lihatdonatur');
	// }

    // function hapusdonatur($id_donatur){
	// 	$where = array('id_donatur' => $id_donatur);
	// 	$this->m_data->hapus_donatur($where,'tb_donatur');
	// 	redirect('crud_donatur/lihatdonatur');
	// }

    // function editdonatur($id_donatur){
	// 	$where = array('id_donatur' => $id_donatur);
	// 	$data['tb_donatur'] = $this->m_data->edit_donatur($where,'tb_donatur')->result();
	// 	$this->load->view('admin/edit_donatur',$data);
	// }

	// function updatedonatur(){
	// 	$id_donatur = $this->input->post('id_donatur');
    //     $nama_donatur = $this->input->post('nama_donatur');
    //     $nohp = $this->input->post('nohp');
    //     $alamat = $this->input->post('alamat');

	// 	$data = array(
	// 		'nama_donatur' => $nama_donatur,
    //         'nohp' => $nohp,
    //         'alamat' => $alamat
	// 		);
     
    //     $where = array(
    //         'id_donatur' => $id_donatur
    //     );
     
    //     $this->m_data->update_donatur($where,$data,'tb_donatur');
    //     redirect('crud_donatur/lihatdonatur');
    // }

}