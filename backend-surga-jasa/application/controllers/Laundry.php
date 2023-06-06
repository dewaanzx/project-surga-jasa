<?php

class Laundry extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("ModelLaundry");
	}

	public function index() {
		$listLaundry = $this->ModelLaundry->getAll();
		$data = array(
			"laundry" => $listLaundry
		);
        $data['title'] ='Laundry';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('laundry');
        $this->load->view('templates/footer');
	}
    public function tambah(){
        $data['title'] ='Laundry';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('laundryAdd');
        $this->load->view('templates/footer');
    }

	public function update($id) {
		$laundry = $this->ModelLaundry->getByPrimaryKey($id);
		$data = array(
			"laundry" => $laundry
		);
        $data['title'] ='Laundry';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('laundry');
        $this->load->view('templates/footer');
	}

	// public function proses_update() {
	// 	$id = $this->input->post("id");
	// 	$aboutUs = array(
	// 		"id" => $this->input->post("id"),
	// 		"nama" => $this->input->post("nama"),
	// 		"visi" => $this->input->post("visi"),
	// 		"misi" => $this->input->post("misi"),
	// 		"alamat" => $this->input->post("alamat"),
	// 		"sejarah" => $this->input->post("sejarah"),
	// 	);
	// 	$id = $this->ModelLaundry->update($id, $aboutUs);
	// 	if ($id > 0) {
	// 		$uploadGambar = $this->uploadGambar("logo");

	// 		if ($uploadGambar["result"] == "success") {
	// 			$dataUpdate = array(
	// 				"logo" => $uploadGambar["file"]["file_name"],
	// 			);
	// 			$this->ModelLaundry->update($id,$dataUpdate);
	// 		}
	// 	}
	// 	redirect("aboutUs");
	// }

	// public function uploadGambar($field) {
	// 	$config = array(
	// 		"upload_path" => "upload/images/",
	// 		"allowed_types" => "jpg|jpeg|png",
	// 		"max_size" => "5000",
	// 		"remove_space" => true,
	// 		"encrypt_name" => true
	// 	);
	// 	$this->load->library("upload", $config);
	// 	if ($this->upload->do_upload($field)) {
	// 		$result = array("result" => "success", "file" => $this->upload->data(), "error" => "");
	// 		return $result;
	// 	} else {
	// 		$result = array("result" => "failed", "file" => "", "error" => $this->upload->display_errors());
	// 		return $result;
	// 	}
	// }
}