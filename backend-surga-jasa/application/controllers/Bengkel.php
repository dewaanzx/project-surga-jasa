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

	public function tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view("content/bengkel/v_add_bengkel");
		$this->load->view('templates/footer');

//	untuk me load tampilan form tambah bengkel
	public function tambah()
	{
		$this->load->view("content/bengkel/v_add_bengkel");

	}

	public function insert()
	{

		$config['upload_path']          = './gambar/';
                $config['allowed_types']        = "jpg|jpeg|png";
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                	echo "gagal di tambah";
                }
                    {
                        $gambar = $this->upload->data();
                        $gambar = $gambar['file_name'];
                        $nama_bengkel = $this->input->post('nama_bengkel', TRUE);
                        $no_hp_bengkel = $this->input->post('no_hp_bengkel', TRUE);
						$alamat_bengkel = $this->input->post('alamat_bengkel', TRUE);
                        $deskripsi_bengkel = $this->input->post('deskripsi_bengkel', TRUE);
                

                        $data = array(
                            'nama_bengkel' => $nama_bengkel,
                            'no_hp_bengkel' => $no_hp_bengkel,
							'alamat_bengkel' => $alamat_bengkel,
                            'deskripsi_bengkel' => $deskripsi_bengkel,
                            'gambar' => $gambar
                            );
                            
							$id = $this->ModelBengkel->insertGetId($data);
                            $this->session->set_flashdata('pesan', '<div
                            class="alert alert-success" role="alert">
                            Data berhasil DiTambah!
                            </div>');
                            redirect('bengkel');
							
                        }
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

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');

		$bengkel = $this->ModelBengkel->getByPrimaryKey($id);
		$data = array(
			"bengkel" => $bengkel,
		);
		$this->load->view('content/bengkel/v_update_bengkel', $data);

		$this->load->view('templates/footer');

	}

	public function update()
	{

		$config['upload_path']          = './gambar/';
                $config['allowed_types']        = "jpg|jpeg|png";
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                	echo "gagal di tambah";
                }
                    {
						$gambar = $this->upload->data();
                        $gambar = $gambar['file_name'];
                        $nama_bengkel = $this->input->post('nama_bengkel', TRUE);
                        $no_hp_bengkel = $this->input->post('no_hp_bengkel', TRUE);
						$alamat_bengkel = $this->input->post('alamat_bengkel', TRUE);
                        $deskripsi_bengkel = $this->input->post('deskripsi_bengkel', TRUE);
						$id = $this->input->post("id_bengkel");

                        $data = array(
                            'nama_bengkel' => $nama_bengkel,
                            'no_hp_bengkel' => $jabatan_bengkel,
							'alamat_bengkel' => $alamat_bengkel,
                            'deskripsi_bengkel' => $deskripsi_bengkel,
                            'gambar' => $gambar
                            );
                        
							$id = $this->ModelBengkel->update($id, $data);
                            $this->session->set_flashdata('pesan', '<div
                            class="alert alert-success" role="alert">
                            Data berhasil DiTambah!
                            </div>');
                            redirect('bengkel');
							
                        }

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
