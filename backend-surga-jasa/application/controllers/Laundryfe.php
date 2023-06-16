<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laundryfe extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model("ModelLaundry");
	}

	public function index()
	{		
        $data['data1'] = $this->ModelLaundry->getData1(); // Menampung 3 hasil query
        $data['data2'] = $this->ModelLaundry->getData2(); // Menampung 3 hasil query
        $data['data3'] = $this->ModelLaundry->getData3(); // Menampung 3 hasil query

		$this->load->view('laundryfe/listlaundry', $data);

	}
    public function amalalaundry()
	{	
		$data['laundry'] = $this->ModelLaundry->getWhereamala(); // Menampung 1 hasil query	
		$this->load->view('laundryfe/amalalaundry', $data);
	}
    public function phlaundry()
	{		
		$data['laundry'] = $this->ModelLaundry->getWhereph(); // Menampung 1 hasil query
		$this->load->view('laundryfe/phlaundry', $data);

	}
    public function sblaundry()
	{	
		$data['laundry'] = $this->ModelLaundry->getWheresb(); // Menampung 1 hasil query	 
		$this->load->view('laundryfe/sblaundry', $data);

	}

}