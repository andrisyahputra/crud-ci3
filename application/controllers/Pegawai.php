<?php

class Pegawai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pegawai_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = 'Halaman Data Pegawai';

		// paginatioon
		if ($this->input->post('cari')) {
			$data['cari'] = $this->input->post('cari');
			// $this->session->set_userdata('cari', $data['cari']);
		} else {
			$data['cari'] = null;
			// $data['cari']  = $this->session->userdata('cari');
		}

		$this->db->like('nama', $data['cari']);
		$this->db->or_like('nip', $data['cari']);
		$this->db->or_like('jk', $data['cari']);
		$this->db->from('tb_pegawai');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		// var_dump($config['total_rows']);
		// die;
		$config['per_page'] = 12;


		$this->pagination->initialize($config);


		$data['start'] = $this->uri->segment(3);
		$data['pegawai'] = $this->Pegawai_model->getPerPegawai($config['per_page'], $data['start'], $data['cari']);


		$this->load->view('templates/header', $data);
		$this->load->view('pegawai/index', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{

		$data['judul'] = 'Halaman Tambah Pegawai';
		$this->form_validation->set_rules('nama', 'Nama Wajib Isi', 'required');
		$this->form_validation->set_rules('nip', 'Nip Wajib Isi', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin Wajib Isi', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('pegawai/tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Pegawai_model->tambahDataPegawai();
			$this->session->set_flashdata('flash', 'Data Ditambahkan');
			redirect('pegawai');
		}
	}
	public function ubah($id)
	{

		$data['judul'] = 'Halaman Ubah Pegawai';
		$data['pegawai'] = $this->Pegawai_model->getPegawai($id);

		$this->form_validation->set_rules('nama', 'Nama Wajib Isi', 'required');
		$this->form_validation->set_rules('nip', 'Nip Wajib Isi', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin Wajib Isi', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('pegawai/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Pegawai_model->ubahDataPegawai($id);
			$this->session->set_flashdata('flash', 'Data Diubah');
			redirect('pegawai');
		}
	}
	public function hapus($id)
	{
		$this->Pegawai_model->hapusDataPegawai($id);
		$this->session->set_flashdata('flash', 'Data dihapus');
		redirect('pegawai');
	}
	public function detail($id)
	{

		$data['judul'] = 'Halaman Detail Pegawai';
		$data['pegawai'] = $this->Pegawai_model->getPegawai($id);
		$this->load->view('templates/header', $data);
		$this->load->view('pegawai/detail', $data);
		$this->load->view('templates/footer');
	}
}
