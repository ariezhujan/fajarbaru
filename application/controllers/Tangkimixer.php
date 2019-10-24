<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tangkimixer extends CI_Controller {
	public function __construct()
	 {
	   parent::__construct();
	   $this->load->helper('url');
	 }
	public function index()
	{
		$data['content'] = 'tangkimixer';
		$this->load->view('master',$data);
	}
}
