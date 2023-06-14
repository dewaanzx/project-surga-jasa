<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bengkelfe extends CI_Controller
{
	public function index()
	{		
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