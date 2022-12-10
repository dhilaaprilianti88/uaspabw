<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}

    function index(){
		$this->load->view('admin/index');     
	}

//---------------------------------------data penerima start------------------------------------//

    function welcome(){
        $data['penerima'] = $this->m_data->tampil_data()->result();
        $this->load->view('admin/welcome',$data);
    }

    function lihat(){
		$data['penerima'] = $this->m_data->tampil_data()->result();
		$this->load->view('admin/lihat',$data);
	}

    function tambah(){
		$this->load->view('admin/input');
    }

    function tambah_aksi(){
        $id = $this->input->post('id');
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $kecamatan = $this->input->post('kecamatan');
        $alamat = $this->input->post('alamat');
        $nohprt = $this->input->post('nohprt');
 
		$data = array(
			'nik' => $nik,
            'nama' => $nama,
            'kecamatan' => $kecamatan,
			'alamat' => $alamat,
            'nohprt' => $nohprt
			);
		$this->m_data->input_data($data,'penerima');
		redirect('admin/crud/lihat');
	}

    function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'penerima');
		redirect('admin/crud/lihat');
	}

    function edit($id){
		$where = array('id' => $id);
		$data['penerima'] = $this->m_data->edit_data($where,'penerima')->result();
		$this->load->view('admin/edit',$data);
	}

    function update(){
        $id = $this->input->post('id');
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $kecamatan = $this->input->post('kecamatan');
        $alamat = $this->input->post('alamat');
        $nohprt = $this->input->post('nohprt');
     
        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'kecamatan' => $kecamatan,
			'alamat' => $alamat,
            'nohprt' => $nohprt
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->m_data->update_data($where,$data,'penerima');
        redirect('admin/crud/lihat');
    }

    function upload()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $upload_status = $this->uploadDoc();
            if($upload_status!=false){
                $inputFileName = 'assets/uploads/imports/'.$upload_status;
                $inputTileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
                $reader =  \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputTileType);
                $spreadsheet = $reader->load($inputFileName);
                $sheet = $spreadsheet->getSheet(0);
                $count_Rows = 0;

                foreach($sheet->getRowIterator() as $row)
                {
                    $id = $spreadsheet->getActiveSheet()->getCell('A'.$row->getRowIndex());
                    $nik = $spreadsheet->getActiveSheet()->getCell('B'.$row->getRowIndex());
                    $nama = $spreadsheet->getActiveSheet()->getCell('C'.$row->getRowIndex());
                    $kecamatan = $spreadsheet->getActiveSheet()->getCell('D'.$row->getRowIndex());
                    $alamat = $spreadsheet->getActiveSheet()->getCell('E'.$row->getRowIndex());
                    $nohprt = $spreadsheet->getActiveSheet()->getCell('F'.$row->getRowIndex());
                    $data = array(
                        'id' => $id,
                        'nik' => $nik,
                        'nama' => $nama,
                        'kecamatan' => $kecamatan,
                        'alamat' => $alamat,
                        'nohprt' => $nohprt,
                    );

                    $this->db->insert('penerima',$data);
                    $count_Rows++;
                }
                $this->session->set_flashdata('success','Successsfully Data Imported');
                redirect('admin/crud/lihat');
                
            }else{
                $this->session->set_flashdata('error','file is not uploaded');
                redirect('admin/crud/lihat');
            }

        }else{
            $this->load->view('admin/v_upload');
        }
	}

    function uploadDoc()
    {
        $uploadPath = 'assets/uploads/imports/';
        if(!is_dir($uploadPath)){
            mkdir($uploadPath,0777,TRUE);
        }
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'csv|xlsx|xls';
        $config['max_size'] = 1000000;
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('upload_excel')){
            $fileData = $this->upload->data();
            return $fileData['file_name'];
        }else{
            return false;
        }
    }

    function download(){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        foreach(range('A','G') as $coulumID){
            $spreadsheet->getActiveSheet()->getColumnDimension($coulumID)->setAutosize(true);
        }
        $sheet->setCellValue('A1','ID');
        $sheet->setCellValue('B1','NIK');
        $sheet->setCellValue('C1','NAMA');
        $sheet->setCellValue('D1','KECAMATAN');
        $sheet->setCellValue('E1','ALAMAT');
        $sheet->setCellValue('F1','NO HP RT');

        $penerima = $this->db->query("SELECT * FROM penerima")->result_array();
        $x=2;
        foreach($penerima as $row){
            $sheet->setCellValue('A'.$x, $row['id']);
            $sheet->setCellValue('B'.$x, $row['nik']);
            $sheet->setCellValue('C'.$x, $row['nama']);
            $sheet->setCellValue('D'.$x, $row['kecamatan']);
            $sheet->setCellValue('E'.$x, $row['alamat']);
            $sheet->setCellValue('F'.$x, $row['nohprt']);
            $x++;
        }
        $writer = new Xlsx($spreadsheet);
        $fileName='penerima_digihelp_export.xlsx';
        // $writer->save($fileName); 

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'.$fileName.'"');
        $writer->save('php://output');
    }

    function chart()
    {
        $data = ['content'=>'welcome']; 
        $this->load->view('admin/index', $data);
    }

    public function mpdf()
    {
    $mpdf = new \Mpdf\Mpdf();
	$databarang = $this->m_data->tampil_data()->result();
	$data = $this->load->view('admin/mpdf',['penerima' => $databarang], TRUE);
    $mpdf->WriteHTML($data);
    $mpdf->Output();
    }
}