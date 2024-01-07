<?php

class Pegawai_model extends CI_Model
{
	public function getPerPegawai($limit, $start, $cari = null)
	{
		if ($cari) {
			$this->db->like('nama', $cari);
			$this->db->or_like('nip', $cari);
			$this->db->or_like('jk', $cari);
		}
		$this->db->order_by('id', 'DESC');
		return  $this->db->get('tb_pegawai', $limit, $start)->result_array();
	}
	public function tambahDataPegawai()
	{
		$data = [
			"nama" => $this->input->post("nama", true),
			"nip" => $this->input->post("nip", true),
			"jk" => $this->input->post("jk", true),
		];

		$this->db->insert('tb_pegawai', $data);
	}

	public function getPegawai($id)
	{

		return  $this->db->get_where('tb_pegawai', ['id' => $id])->row_array();
	}
	public function ubahDataPegawai($id)
	{
		$data = [
			"nama" => $this->input->post("nama", true),
			"nip" => $this->input->post("nip", true),
			"jk" => $this->input->post("jk", true),
		];

		$this->db->where('id', $id);
		$this->db->update('tb_pegawai', $data);
	}
	public function hapusDataPegawai($id)
	{

		// $this->db->where('id', $id);
		$this->db->delete('tb_pegawai', ['id' => $id]);
	}
}
