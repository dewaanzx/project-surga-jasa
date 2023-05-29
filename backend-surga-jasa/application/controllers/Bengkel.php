<?php


class Bengkel extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelBengkel");
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$dataBengkel = $this->ModelBengkel->getAll();
		$data = array(
			"bengkel" => $dataBengkel
		);
		$this->load->view('content/bengkel/v_list_bengkel', $data);
		$this->load->view('templates/footer');
	}

//	untuk me load tampilan form tambah bengkel
	public function tambah()
	{
		$this->load->view("content/bengkel/v_add_bengkel");
	}

	public function insert()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$data = array(
			"nama_bengkel" => $this->input->post("nama_bengkel")
		);
		$id = $this->ModelBengkel->insertGetId($data);
		redirect('bengkel');
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$bengkel = $this->ModelBengkel->getByPrimaryKey($id);
		$data = array(
			"bengkel" => $bengkel,
		);
		$this->load->view('content/bengkel/v_update_bengkel', $data);
	}

	public function update()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$id = $this->input->post('id_bengkel');
		$data = array(
			"nama_bengkel" => $this->input->post('nama_bengkel')
		);
		$this->ModelBengkel->update($id, $data);
		redirect('bengkel');
		$this->load->view('templates/footer');
	}

	public function delete()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$id = $this->input->post('id_bengkel');
		$this->ModelBengkel->delete($id);
		redirect('bengkel');
		$this->load->view('templates/footer');
	}
}
