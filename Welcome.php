<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function home(){
		$this->load->view('siswa/home');
	}

	// public function login()
	// {
	// 	$data['jurusan'] = "RPL";
	// 	$data['kelas'] = '12';
	// 	$this->load->view('login', $data);
	// }

	// public function tambah()
	// {
	// 	$this->load->view('siswa/TambahSiswa');
	// }

	public function siswa()
	{
		$this->load->database();
		$data ['siswa'] = $this->db->get('tbDataSiswa')->result_array();

		
		$this->load->view('siswa/home', $data);
	}

	function insertSiswa()
	{ $this->load->database();

		$data = array(
			'nis' => $this->input->post('nis'),
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas')
		);

		$this->db->insert('tbDataSiswa', $data);
		redirect('welcome/home');

	}
	function hapusSiswa($nis)
	{
		$this->db->where('nis', $nis);
		$this->db->delete('tbDataSiswa');

		redirect('welcome/home');
	}

	function isidata()
	{
		$this->load->view('siswa/form_isidata');
	}

	function update($nis)
	{
		$this->load->database();

		$data = array(
			'nama' =>$this->input->post('nama'),
			'kelas' =>$this->input->post('kelas')
		);
		$this->db->where('nis', $nis);
		$this->db->update('tbDataSiswa', $data);
		redirect('welcome/home');
	}

	function updatedata($nis)
	{
		 $this->db->where('nis', $nis); 
		 $data ['siswa']= $this->db->get('tbDataSiswa')->row_array();
		// var_dump( $data['siswa']);
		$this->load->view('siswa/form_update',$data);
	}
}
	// function get_update($nis)
	// {
	// 	$query = $this->db->get_where('welcome', array('nis' => $nis));
	// 	return $query;
	// }

	// function update($nis, $nama, $kelas)
	// {
	// 	$data = array(
	// 		'nama' => $nama,
	// 		'kelas' => $kelas

	// 	);
	// 	$this->db->where('nis', $nis);
	// 	$this->db->update('welcome', $data);
	// }
		





