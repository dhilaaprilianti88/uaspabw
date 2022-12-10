<?php 
 
class M_data extends CI_Model{
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function tampil_data(){
		return $this->db->get('penerima');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

//-------------------------------------DONATUR START-------------------------------//
	function tampil_donatur(){
		return $this->db->get('tb_donatur');
	}

	function input_donatur($data,$table){
		$this->db->insert($table,$data);
	}
 
	function edit_donatur($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_donatur($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
 
	function hapus_donatur($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	//-------------------------------------BARANG START-------------------------------//
	function tampil_barang(){
		return $this->db->get('tb_barang');
	} 

	function input_barang($data,$table){
		$this->db->insert($table,$data);
	}
 
	function edit_barang($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_barang($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
 
	function hapus_barang($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	// function query($where){ DISINI YAAAAAAAAA QUERY YAAAA
	// 	$this->db->where($where);
	// 	return $this->db->query('SELECT * FROM tb_barang FULL JOIN penerima ON id_penerima = penerima.id;');
	// }

//-------------------------------------BARANG START-------------------------------//
function tampil_donasi(){
	return $this->db->get('tb_donasi');
}

function input_donasi($data,$table){
	$this->db->insert($table,$data);
}

function edit_donasi($where,$table){		
	return $this->db->get_where($table,$where);
}

function update_donasi($where,$data,$table){
	$this->db->where($where);
	$this->db->update($table,$data);
}

function hapus_donasi($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}

}