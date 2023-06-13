<?php

class Bengkel extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("ModelBengkel");
	}

	public function index() {
		$listBengkel = $this->ModelBengkel->getAll();
		$data = array(
			"bengkel" => $listBengkel
		);
        $data['title'] ='Bengkel';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('content/bengkel/v_list_bengkel');
        $this->load->view('templates/footer');
	}
    public function tambah(){
        $data['title'] ='Bengkel';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('content/bengkel/v_add_bengkel');
        $this->load->view('templates/footer');
    }

	public function ubah($id) {
		$bengkel = $this->ModelBengkel->getByPrimaryKey($id);
		$data = array(
			"bengkel" => $bengkel
		);
        $data['title'] ='Bengkel';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('content/bengkel/v_update_bengkel');
        $this->load->view('templates/footer');
	}

	public function insert() 
    { 
        $nama = $this->input->post('nama_bengkel');
        $alamat = $this->input->post('alamat_bengkel');
		$telepon = $this->input->post('no_hp_bengkel');
		$deskripsi = $this->input->post('deskripsi_bengkel');
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
			'nama_bengkel' => $nama,
			'alamat_bengkel' => $alamat,
			'no_hp_bengkel' => $telepon,
			'gambar' => $gambar,
			'deskripsi_bengkel' => $deskripsi
			
		);
		
		$this->ModelBengkel->insertGetId($data);
		redirect('bengkel');
		
    } 

    public function update() 
    { 
        $id = $this->input->post('id_bengkel'); 
		$nama = $this->input->post('nama_bengkel');
		$alamat = $this->input->post('alamat_bengkel');
		$telepon = $this->input->post('no_hp_bengkel');
		$deskripsi = $this->input->post('deskripsi_bengkel');
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
			'nama_bengkel'=>$nama,
            'alamat_bengkel'=>$alamat,
			'no_hp_bengkel'=>$telepon,
			'gambar' =>$gambar,
			'deskripsi_bengkel' =>$deskripsi
            
        ); 
    
        echo var_dump($data); 
        echo var_dump($id); 
        $this->ModelBengkel->update($id, $data); 
        redirect('bengkel'); 
    } 
 
    public function delete()  
    { 
        $id = $this->input->post('id_bengkel'); 
        $this->ModelBengkel->delete($id); 
        redirect('bengkel'); 
    } 
}
