<?php


class Bengkel extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelBengkel");
		if(!$this->session->userdata('email')){
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Login Terlebih Dahulu.
			</div>');
			redirect('Auth');
		}
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$dataBengkel = $this->ModelBengkel->getAll();
		$data = array(
			"bengkel" => $dataBengkel
		);
		$data['title'] ='Bengkel';
		$this->load->view('content/bengkel/v_list_bengkel', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view("content/bengkel/v_add_bengkel");
		$data['title'] ='Bengkel';
		$this->load->view('templates/footer');
	}
	
	public function insert()
	{
		$nama_bengkel = $this->input->post('nama_bengkel', TRUE);
        $no_hp_bengkel = $this->input->post('no_hp_bengkel', TRUE);
		$alamat_bengkel = $this->input->post('alamat_bengkel', TRUE);
        $deskripsi_bengkel = $this->input->post('deskripsi_bengkel', TRUE);
						
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
			'nama_bengkel' => $nama_bengkel,
            'no_hp_bengkel' => $no_hp_bengkel,
			'alamat_bengkel' => $alamat_bengkel,
            'deskripsi_bengkel' => $deskripsi_bengkel,
			'gambar' => $gambar
		);
		
		$this->ModelBengkel->insertGetId($data);
		redirect('bengkel');
	}

	public function ubah($id)
	{

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');

		$bengkel = $this->ModelBengkel->getByPrimaryKey($id);
		$data = array(
			"bengkel" => $bengkel,
		);
		$this->load->view('content/bengkel/v_update_bengkel', $data);
		$data['title'] ='Bengkel';
		$this->load->view('templates/footer');

	}

	public function update()
	{
		$nama_bengkel = $this->input->post('nama_bengkel', TRUE);
        $no_hp_bengkel = $this->input->post('no_hp_bengkel', TRUE);
		$alamat_bengkel = $this->input->post('alamat_bengkel', TRUE);
        $deskripsi_bengkel = $this->input->post('deskripsi_bengkel', TRUE);
						
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
			'nama_bengkel' => $nama_bengkel,
            'no_hp_bengkel' => $no_hp_bengkel,
			'alamat_bengkel' => $alamat_bengkel,
            'deskripsi_bengkel' => $deskripsi_bengkel,
			'gambar' => $gambar
		);		
		$this->ModelBengkel->update($id, $data);
		redirect('bengkel');
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
