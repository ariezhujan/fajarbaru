<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
	public function index()
	{
		$data['content'] = 'service';
		$this->load->view('master', $data);
	}
}
