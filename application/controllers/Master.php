<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function __construct()
	 {
	   parent::__construct();
	 }
	public function index()
	{
		$data['content'] = 'home';
		$this->load->view('master',$data);
	}
}
