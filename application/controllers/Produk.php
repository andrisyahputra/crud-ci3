<?php

class Produk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['judul'] = 'Halaman Produk';



		// paginatioon
		if ($this->input->post('cari')) {
			$data['cari'] = $this->input->post('cari');
			$this->session->set_userdata('cari', $data['cari']);
		} else {
			$data['cari']  = $this->session->userdata('cari');
		}

		$this->db->like('nama_produk', $data['cari']);
		$this->db->or_like('harga_produk', $data['cari']);
		$this->db->from('produk');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		// var_dump($config['total_rows']);
		// die;
		$config['per_page'] = 12;

		$this->pagination->initialize($config);

		// $data['produks'] = $this->Produk_model->getAllProduk();
		$data['start'] = $this->uri->segment(3);
		$data['produks'] = $this->Produk_model->getPerProduk($config['per_page'], $data['start'], $data['cari']);


		// if ($this->input->post('cari')) {
		// $data['produks'] = $this->Produk_model->cariProduk();
		// }

		$this->load->view('templates/header', $data);
		$this->load->view('produk/index', $data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{

		$data['judul'] = 'Halaman Detail Produk';
		$data['produk'] = $this->Produk_model->getProduk($id);
		$this->load->view('templates/header', $data);
		$this->load->view('produk/detail', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{

		$data['judul'] = 'Halaman Tambah Produk';
		$this->form_validation->set_rules('nama_produk', 'Nama Wajib Isi', 'required');
		$this->form_validation->set_rules('stok_produk', 'Stok Wajib Isi', 'required');
		$this->form_validation->set_rules('harga_produk', 'Harga Wajib Isi', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('produk/tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Produk_model->tambahDataProduk();
			$this->session->set_flashdata('flash', 'Data Ditambahkan');
			redirect('produk');
		}
	}
	public function ubah($id)
	{

		$data['judul'] = 'Halaman ubah Produk';
		$data['produk'] = $this->Produk_model->getProduk($id);

		$this->form_validation->set_rules('nama_produk', 'Nama Wajib Isi', 'required');
		$this->form_validation->set_rules('stok_produk', 'Stok Wajib Isi', 'required');
		$this->form_validation->set_rules('harga_produk', 'Harga Wajib Isi', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('produk/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Produk_model->ubahDataProduk($id);
			$this->session->set_flashdata('flash', 'Data Diubah');
			redirect('produk');
		}
	}

	public function hapus($id)
	{
		$this->Produk_model->hapusDataProduk($id);
		$this->session->set_flashdata('flash', 'Data dihapus');
		redirect('produk');
	}
}
