<?php

class ModelLaundry extends CI_Model {
	var $table = "laundry";
	var $primaryKey = "id_laundry";

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

	public function getWhereamala() {
		$this->db->select('*');
		$this->db->from('laundry');
		$this->db->where('nama_laundry','Amala Laundry');
		$query = $this->db->get();
		return $query->row();
	}
	public function getWhereph() {
		$this->db->select('*');
		$this->db->from('laundry');
		$this->db->where('nama_laundry','P H Laundry');
		$query = $this->db->get();
		return $query->row();
	}
	public function getWheresb() {
		$this->db->select('*');
		$this->db->from('laundry');
		$this->db->where('nama_laundry','Sorcha Laundry Kosambi');
		$query = $this->db->get();
		return $query->row();
	}

	// end of gate 1 data

	// get 3 data

	public function getData1() {
        $this->db->select('*');
        $this->db->from('laundry');
        $this->db->where('nama_laundry','Amala Laundry');
        $query = $this->db->get();

        return $query->result(); // Mengembalikan hasil query dalam bentuk array objek
    }

    public function getData2() {
        $this->db->select('*');
        $this->db->from('laundry');
        $this->db->where('nama_laundry','P H Laundry');
        $query = $this->db->get();

        return $query->result(); // Mengembalikan hasil query dalam bentuk array objek
    }

    public function getData3() {
        $this->db->select('*');
        $this->db->from('laundry');
        $this->db->where('nama_laundry','Sorcha Laundry Kosambi');
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