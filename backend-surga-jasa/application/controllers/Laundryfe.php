<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laundryfe extends CI_Controller
{
	public function index()
	{		
		$this->load->view('laundryfe/listlaundry');

	}
    public function amalalaundry()
	{		
		$this->load->view('laundryfe/amalalaundry');

	}
    public function phlaundry()
	{		
		$this->load->view('laundryfe/phlaundry');

	}
    public function sblaundry()
	{		
		$this->load->view('laundryfe/sblaundry');

	}

}