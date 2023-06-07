<?php

class Catering extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("ModelCatering");
	}

	public function index() {
		$listCatering = $this->ModelCatering->getAll();
		$data = array(
			"catering" => $listCatering
		);
        $data['title'] ='Catering';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('content/catering/catering');
        $this->load->view('templates/footer');
	}
    public function tambah(){
        $data['title'] ='Catering';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('content/catering/cateringAdd');
        $this->load->view('templates/footer');
    }

	public function ubah($id) {
		$catering = $this->ModelCatering->getByPrimaryKey($id);
		$data = array(
			"catering" => $catering
		);
        $data['title'] ='Catering';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('content/catering/cateringUpdate');
        $this->load->view('templates/footer');
	}

	public function insert() 
    { 
        $nama = $this->input->post('nama_catering');
        $alamat = $this->input->post('alamat_catering');
		$telepon = $this->input->post('no_hp_catering');
		$deskripsi = $this->input->post('deskripsi_catering');
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
			'nama_catering' => $nama,
			'alamat_catering' => $alamat,
			'no_hp_catering' => $telepon,
			'gambar' => $gambar,
			'deskripsi_catering' => $deskripsi
			
		);
		
		$this->ModelCatering->insertGetId($data);
		redirect('catering');
		
    } 

    public function update() 
    { 
        $id = $this->input->post('id_catering'); 
		$nama = $this->input->post('nama_catering');
		$alamat = $this->input->post('alamat_catering');
		$telepon = $this->input->post('no_hp_catering');
		$deskripsi = $this->input->post('deskripsi_catering');
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
			'nama_catering'=>$nama,
            'alamat_catering'=>$alamat,
			'no_hp_catering'=>$telepon,
			'gambar' =>$gambar,
			'deskripsi_catering' =>$deskripsi
            
        ); 
    
        echo var_dump($data); 
        echo var_dump($id); 
        $this->ModelCatering->update($id, $data); 
        redirect('catering'); 
    } 
 
    public function delete() 
    { 
        $id = $this->input->post('id_catering'); 
        $this->ModelCatering->delete($id); 
        redirect('catering'); 
    } 
}