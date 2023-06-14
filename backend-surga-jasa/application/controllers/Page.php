<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function index()
	{		
		$this->load->view('home');

	}
	public function services()
	{		
		$this->load->view('services');

	}
	public function team()
	{		
		$this->load->view('team');

	}
	public function contacts()
	{		
		$this->load->view('contacts');

	}

}