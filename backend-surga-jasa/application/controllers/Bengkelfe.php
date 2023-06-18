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

		$this->load->view('bengkelfe/listbengkel', $data);

	}

	public function lotechbengkel()
	{		
		$data['bengkel'] = $this->ModelBengkel->getWherelotech();
		$this->load->view('bengkelfe/lotechbengkel', $data);

	}

    public function dayabengkel()
	{		
		$data['bengkel'] = $this->ModelBengkel->getWheredaya();
		$this->load->view('bengkelfe/dayabengkel', $data);

	}

    public function ditechbengkel()
	{		
		$data['bengkel'] = $this->ModelBengkel->getWhereditech();
		$this->load->view('bengkelfe/ditechbengkel', $data );

	}

    

}
