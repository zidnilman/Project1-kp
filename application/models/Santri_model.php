<?php

class Santri_model extends CI_Model
{
	public function getAllSantri()
	{
		return $this->db->get('datasantri')->result_array();
	}

	public function tambahDataSantri()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"kamar" => $this->input->post('kamar', true),
			"nis" => $this->input->post('nis', true)
		];

		$this->db->insert('datasantri', $data);
	}

	public function hapusDataSantri($id)
	{
		$this->db->delete('datasantri', ['id' => $id]);
	}

	public function getSantriById($id)
	{
		return $this->db->get_where('datasantri', ['id' => $id])->row_array();
	}

	public function ubahDataSantri()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"kamar" => $this->input->post('kamar', true),
			"nis" => $this->input->post('nis', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('datasantri', $data);
	}

	public function getSantri($limit, $start, $keyword= null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('kamar', $keyword);
            $this->db->or_like('nis', $keyword);
        }
        return $this->db->get('datasantri', $limit, $start)->result_array();
    }

	public function countAllSantri()
    {
        return $this->db->get('datasantri')->num_rows();
    }
}
