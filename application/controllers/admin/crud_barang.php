<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
class Crud_barang extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$this->load->view('admin/index'); 
	}

    function lihatbarang(){
		$data['tb_barang'] = $this->m_data->tampil_barang()->result();
		$this->load->view('admin/barang',$data);
	}

    function tambahbarang(){
		$this->load->view('admin/tambah_barang');
    }

    function tambahbarang_aksi(){

        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000; 

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('photo_barang'))
        {
                echo "Gagal Tambah";
        }
        else
        {
                $photo_barang = $this->upload->data();
                $photo_barang = $photo_barang['file_name'];
                $id_barang = $this->input->post('id_barang', TRUE);
                $nama_barang = $this->input->post('nama_barang', TRUE);
                $jenis_barang = $this->input->post('jenis_barang', TRUE);
                $id_penerima = $this->input->post('id_penerima', TRUE);
                $deskripsi = $this->input->post('deskripsi', TRUE);

                $data = array(
                    'id_barang' =>$id_barang,
                    'nama_barang' => $nama_barang,
                    'jenis_barang' => $jenis_barang,
                    'id_penerima' => $id_penerima,
                    'deskripsi' => $deskripsi,
                    'photo_barang' => $photo_barang,
                    );
                $this->m_data->input_barang($data,'tb_barang');
                $this->session->set_flashdata('pesan' , '<div
                class="alert alert-success" role ="alert">
                Data berhasil Ditambah!
                </div>');
                redirect('admin/crud_barang/lihatbarang');
        }
 
		
	}

    function hapusbarang($id_barang){
		$where = array('id_barang' => $id_barang);
		$this->m_data->hapus_barang($where,'tb_barang');
		redirect('admin/crud_barang/lihatbarang');
	}

    function editbarang($id_barang){
		$where = array('id_barang' => $id_barang);
		$data['tb_barang'] = $this->m_data->edit_barang($where,'tb_barang')->result();
		$this->load->view('admin/edit_barang',$data);
	}

    // public function updatebarang()
    // {
    //     $rules = $this->validate([
    //         'id_barang'=>'required',
    //         'nama_barang' => 'required',
    //         'jenis_barang' => 'required',
    //         'id_penerima' => 'required',
    //         'deskripsi' => 'required',
    //         'photo_barang' => 'is_image[photo_barang]|max_size[photo_barang,2048]|mime_in[photo_barang,image/jpg,image/jpeg,image/png]|ext_in[photo_barang,jpg,jpeg,png]',
    //     ]);
    //     if (!$rules) {
    //         session()->setFlashdata('error', 'Data tanaman gagal diubah');
    //         return redirect()->back()->withInput();
    //     }

    //     $gambar = $this->request->getFile('photo_barang');
    //     if ($gambar->getError() == 4) {
    //         $namaGambar = $this->request->getPost('oldPict');
    //     } else {
    //         $gambar = $this->request->getFile('photo_barang');
    //         $namaGambar = $gambar->getRandomName();
    //         $gambar->move(WRITEPATH.'../gambar',$namaGambar);
    //         // $this->db->table('uplant')->update($id,[
    //         //     'nama_tanaman'=>$this->request->getPost('nama_tanaman'),
    //         //     'jenis'=>$this->request->getPost('jenis'),
    //         //     'nama_ilmiah'=>$this->request->getPost('nama_ilmiah'),
    //         //     'gambar_tanaman'=>$namaGambar
    //         // ]);
    //         // unlink(WRITEPATH . '../../../public/uplant-main/assets/img' . $this->request->getPost('oldPict'));
    //     }
		
	// 	$this->tb_barang->update($id_barang, [
    //         'nama_barang' => $this->request->getPost('nama_barang'),
    //         'jenis_barang' => $this->request->getPost('jenis_barang'),
    //         'id_penerima' => $this->request->getPost('id_penerima'),
    //         'deskripsi' => $this->request->getPost('deskripsi'),
    //         'photo_barang' => $namaGambar,
    //     ]);

    //     $this->m_data->input_barang($data,'tb_barang');

    //     return redirect()->to(site_url('crud_barang'))->with('success', 'Data berhasil diubah');
    // }
}