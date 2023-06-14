<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kateringfe extends CI_Controller
{
	public function index()
	{		
		$this->load->view('kateringfe/listkatering');

	}
    public function dyummykatering()
	{		
		$this->load->view('kateringfe/dyummykatering');

	}
    public function mamikatering()
	{		
		$this->load->view('kateringfe/mamikatering');

	}
    public function soewardonokatering()
	{		
		$this->load->view('kateringfe/soewardonokatering');

	}

}