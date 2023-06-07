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
        $this->load->view('content/laundry/laundry');
        $this->load->view('templates/footer');
	}
    public function tambah(){
        $data['title'] ='Laundry';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('content/laundry/laundryAdd');
        $this->load->view('templates/footer');
    }

	public function ubah($id) {
		$laundry = $this->ModelLaundry->getByPrimaryKey($id);
		$data = array(
			"laundry" => $laundry
		);
        $data['title'] ='Laundry';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('content/laundry/laundryUpdate');
        $this->load->view('templates/footer');
	}

	public function insert() 
    { 
        $nama = $this->input->post('nama_laundry');
        $alamat = $this->input->post('alamat_laundry');
		$telepon = $this->input->post('no_hp_laundry');
		$deskripsi = $this->input->post('deskripsi_laundry');
		$gambar = $_FILES['gambar'];
		if (!empty($gambar['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Upload Gagal";
				die();
			} else {
				$gambar = $this->upload->data('file_name');
			}
		} else {
			$gambar = ''; // Atur nilai variabel $gambar menjadi string kosong jika tidak ada gambar yang diunggah
		}
		
		$data = array(
			'nama_laundry' => $nama,
			'alamat_laundry' => $alamat,
			'no_hp_laundry' => $telepon,
			'gambar' => $gambar,
			'deskripsi_laundry' => $deskripsi
			
		);
		
		$this->ModelLaundry->insertGetId($data);
		redirect('laundry');
		
    } 

    public function update() 
    { 
        $id = $this->input->post('id_laundry'); 
		$nama = $this->input->post('nama_laundry');
		$alamat = $this->input->post('alamat_laundry');
		$telepon = $this->input->post('no_hp_laundry');
		$deskripsi = $this->input->post('deskripsi_laundry');
        $gambar =  $_FILES['gambar'];
        if($gambar=''){}else{
            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this ->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')){
				$gambar= $_POST['gambar'];
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }
        $data = array( 
			'nama_laundry'=>$nama,
            'alamat_laundry'=>$alamat,
			'no_hp_laundry'=>$telepon,
			'gambar' =>$gambar,
			'deskripsi_laundry' =>$deskripsi
            
        ); 
    
        echo var_dump($data); 
        echo var_dump($id); 
        $this->ModelLaundry->update($id, $data); 
        redirect('laundry'); 
    } 
 
    public function delete() 
    { 
        $id = $this->input->post('id_laundry'); 
        $this->ModelLaundry->delete($id); 
        redirect('laundry'); 
    } 
}