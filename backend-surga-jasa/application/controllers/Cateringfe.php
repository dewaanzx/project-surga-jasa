<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cateringfe extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model("ModelCatering");
	}

	public function index()
	{	
		$data['data1'] = $this->ModelCatering->getData1(); // Menampung 3 hasil query
        $data['data2'] = $this->ModelCatering->getData2(); // Menampung 3 hasil query
        $data['data3'] = $this->ModelCatering->getData3(); // Menampung 3 hasil query
		
		$this->load->view('cateringfe/listcatering', $data);

	}
    public function dyummycatering()
	{	
		$data['catering'] = $this->ModelCatering->getWheredyummy(); // Menampung 1 hasil query
		$this->load->view('cateringfe/dyummycatering', $data);

	}
    public function mamicatering()
	{		
		$data['catering'] = $this->ModelCatering->getWheremami(); // Menampung 1 hasil query
		$this->load->view('cateringfe/mamicatering', $data);

	}
    public function soewardonocatering()
	{		
		$data['catering'] = $this->ModelCatering->getWheresoewardono(); // Menampung 1 hasil query
		$this->load->view('cateringfe/soewardonocatering', $data);

	}

}