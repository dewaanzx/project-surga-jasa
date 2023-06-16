<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bengkelfe extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model("ModelBengkel");
	}

	public function index()
	{		
		$data['data1'] = $this->ModelBengkel->getData1(); 
        $data['data2'] = $this->ModelBengkel->getData2(); 
        $data['data3'] = $this->ModelBengkel->getData3(); 

		$this->load->view('bengkelfe/listbengkel');

	}
    public function dayabengkel()
	{		
		$this->load->view('bengkelfe/dayabengkel');

	}
    public function ditechbengkel()
	{		
		$this->load->view('bengkelfe/ditechbengkel');

	}
    public function lotechbengkel()
	{		
		$this->load->view('bengkelfe/lotechbengkel');

	}

}
