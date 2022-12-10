<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
class Crud_donasi extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$this->load->view('admin/index');
        
	}

    function lihatdonasi(){
		$data['tb_donasi'] = $this->m_data->tampil_donasi()->result();
		$this->load->view('admin/donasi',$data);
	}
    
	function tambahdonasi(){
		$this->load->view('admin/tambah_donasi');
    }

    function tambahdonasi_aksi(){
		$config['upload_path']          = './barangdonasi/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gb_depan'))
        {
                echo "Gagal Tambah";
        } 
        else
        {
			$gb_depan = $this->upload->data();
			$gb_depan = $gb_depan['file_name'];

			$id_donasi = $this->input->post('id_donasi', TRUE);
			$tanggal_donasi = $this->input->post('tanggal_donasi', TRUE);
			$nama_donatur = $this->input->post('nama_donatur', TRUE);
			$nohp = $this->input->post('nohp', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$id_barang = $this->input->post('id_barang', TRUE);
			$jenis_barang = $this->input->post('jenis_barang', TRUE);
			$nama_barang = $this->input->post('nama_barang', TRUE);	

			$data = array(
				'tanggal_donasi' => $tanggal_donasi,
				'nama_donatur' => $nama_donatur,
				'nohp' => $nohp,
				'alamat' => $alamat,
				'id_barang' => $id_barang,
				'jenis_barang' => $jenis_barang,
				'nama_barang' => $nama_barang,
				'gb_depan' => $gb_depan
				);

				$this->m_data->input_donasi($data,'tb_donasi');
                $this->session->set_flashdata('pesan' , '<div class="alert alert-success" role ="alert">Data berhasil Ditambah!/div>');
                redirect('userview/thanks');
			}
		}


    function hapusdonasi($id_donasi){
		$where = array('id_donasi' => $id_donasi);
		$this->m_data->hapus_donasi($where,'tb_donasi');
		redirect('admin/crud_donasi/lihatdonasi');
	}

    function editdonasi($id_donasi){
		$where = array('id_donasi' => $id_donasi);
		$data['tb_donasi'] = $this->m_data->edit_donasi($where,'tb_donasi')->result();
		$this->load->view('admin/edit_donasi',$data);
	}

	public function mpdf()
    {
    $mpdf = new \Mpdf\Mpdf();
	$datadonasi = $this->m_data->tampil_donasi()->result();
	$data = $this->load->view('admin/mpdfdonasi',['tb_donasi' => $datadonasi], TRUE);
    $mpdf->WriteHTML($data);
    $mpdf->Output();
    }
}