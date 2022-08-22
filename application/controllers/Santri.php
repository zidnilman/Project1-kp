<?php

class Santri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Santri_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['judul'] = 'Daftar Santri';
		$data['santri'] = $this->Santri_model->getAllSantri();
		
		// load library
		$this->load->library('pagination');
		
		// ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword'); 
		} else {
			$data['keyword'] = null;
		}

		// config
		$this->db->like('nama', $data['keyword']);
        $this->db->or_like('kamar', $data['keyword']);
        $this->db->or_like('nis', $data['keyword']);
        $this->db->from('datasantri');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 7;
		
		// initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['santri'] = $this->Santri_model->getSantri($config['per_page'], $data['start'], $data['keyword']);

		$this->load->view('templates/header', $data);
		$this->load->view('santri/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Santri';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nis', 'NIS', 'required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('santri/tambah');
			$this->load->view('templates/footer');
		} else {

			$this->Santri_model->tambahDataSantri();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('santri');
		}
	}
	public function hapus($id)
	{
		$this->Santri_model->hapusDataSantri($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('santri');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Santri';
		$data['santri'] = $this->Santri_model->getSantriById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('santri/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Santri';
		$data['santri'] = $this->Santri_model->getSantriById($id);
		$data['kamar'] = ['1 (Pa)', '1 (Pi)', '2 (Pa)', '2 (Pi)', '3 (Pa)', '3 (Pi)', '4 (Pa)', '4 (Pi)', '5 (Pa)', '5 (Pi)', '6 (Pa)', '6 (Pi)', '7 (Pa)', '7 (Pi)', '8 (Pa)', '8 (Pi)', '9 (Pa)', '9 (Pi)', '10(Pa)', '10(Pi)', '11 (Pa)', '11 (Pi)'];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nis', 'NIS', 'required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('santri/ubah', $data);
			$this->load->view('templates/footer');
		} else {

			$this->Santri_model->ubahDataSantri();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('santri');
		}
	}
}
