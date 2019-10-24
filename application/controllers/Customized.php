<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customized extends CI_Controller {
	public function __construct()
	 {
	   parent::__construct();
	   $this->load->helper('url');
	 }
	public function index()
	{
		$data['content'] = 'customized';
		$this->load->view('master',$data);
	}
}
