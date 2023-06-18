<?php

class ModelCatering extends CI_Model {
	var $table = "catering";
	var $primaryKey = "id_catering";

	public function insert($data) {
		return $this->db->insert($this->table, $data);
	}

	public function insertGetId($data) {
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function getAll() {
		return $this->db->get($this->table)->result();
	}

	// get 1 data

	public function getWheredyummy() {
		$this->db->select('*');
		$this->db->from('catering');
		$this->db->where('nama_catering','D Yummy Catering');
		$query = $this->db->get();
		return $query->row();
	}
	public function getWheremami() {
		$this->db->select('*');
		$this->db->from('catering');
		$this->db->where('nama_catering','Mami Catering');
		$query = $this->db->get();
		return $query->row();
	}
	public function getWheresoewardono() {
		$this->db->select('*');
		$this->db->from('catering');
		$this->db->where('nama_catering','Soewardono Catering');
		$query = $this->db->get();
		return $query->row();
	}

	// end of gate 1 data

	// get 3 data

	public function getData1() {
        $this->db->select('*');
        $this->db->from('catering');
        $this->db->where('nama_catering','D Yummy Catering');
        $query = $this->db->get();

        return $query->result(); // Mengembalikan hasil query dalam bentuk array objek
    }

    public function getData2() {
        $this->db->select('*');
        $this->db->from('catering');
        $this->db->where('nama_catering','Mami Catering');
        $query = $this->db->get();

        return $query->result(); // Mengembalikan hasil query dalam bentuk array objek
    }

    public function getData3() {
        $this->db->select('*');
        $this->db->from('catering');
        $this->db->where('nama_catering','Soewardono Catering');
        $query = $this->db->get();

        return $query->result(); // Mengembalikan hasil query dalam bentuk array objek
    }

	// end of 3 data

	public function getByPrimaryKey($id) {
		$this->db->where($this->primaryKey, $id);
		return $this->db->get($this->table)->row();
	}

	public function update($id, $data) {
		$this->db->where($this->primaryKey, $id);
		return $this->db->update($this->table, $data);
	}

    public function delete($id)
    {
        return $this->db->where($this->primaryKey, $id)->delete($this->table);
    }

}