<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conveyor extends CI_Controller {
	public function index()
	{
		$data['content'] = 'conveyor';
		$this->load->view('master', $data);
	}
}
