<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulasi extends CI_Controller {
	public function index()
	{
		$data['content'] = 'formulasi';
		$this->load->view('master', $data);
	}
}
