<?php


class ModelBengkel extends CI_Model
{

	var $table = "bengkel";
	var $primaryKey = "id_bengkel";


	//function untuk get all data bengkel

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}


	// function untuk get data by primary_key

	public function getByPrimaryKey($id)
	{
		$this->db->where($this->primaryKey, $id);
		return $this->db->get($this->table)->row();
	}

	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function insertGetId($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	// get 1 data
	public function getWherelotech() {
		$this->db->select('*');
		$this->db->from('bengkel');
		$this->db->where('nama_bengkel','Bengkel Lotech');
		$query = $this->db->get();
		return $query->row();
	}
	public function getWheredaya() {
		$this->db->select('*');
		$this->db->from('bengkel');
		$this->db->where('nama_bengkel','Bengkel Daya');
		$query = $this->db->get();
		return $query->row();
	}
	public function getWhereditech() {
		$this->db->select('*');
		$this->db->from('bengkel');
		$this->db->where('nama_bengkel','Bengkel Ditech');
		$query = $this->db->get();
		return $query->row();
	}
	

	// end of gate 1 data

	// get 3 data

	public function getData1() {
        $this->db->select('*');
        $this->db->from('bengkel');
        $this->db->where('nama_bengkel','Bengkel Lotech');
        $query = $this->db->get();

        return $query->result(); // Mengembalikan hasil query dalam bentuk array objek
    }

	public function getData2() {
        $this->db->select('*');
        $this->db->from('bengkel');
        $this->db->where('nama_bengkel','Bengkel Daya');
        $query = $this->db->get();

        return $query->result(); // Mengembalikan hasil query dalam bentuk array objek
    }

    public function getData3() {
        $this->db->select('*');
        $this->db->from('bengkel');
        $this->db->where('nama_bengkel','Bengkel Ditech');
        $query = $this->db->get();

        return $query->result(); // Mengembalikan hasil query dalam bentuk array objek
    }

    

	// end of 3 data

	public function update($id, $data) {
		$this->db->where($this->primaryKey, $id);
		return $this->db->update($this->table, $data);
	}

	public function delete($id)
	{
		return $this->db->where($this->primaryKey, $id)->delete($this->table);
	}

}
