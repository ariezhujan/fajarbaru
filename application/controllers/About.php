<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
	public function index()
	{
		$data['header'] = $this->M_data->tampil_to_frontpage(2,1,'header')->row();
		$data['about1'] = $this->M_data->tampil_to_frontpage(2,2,'about1')->result();
		$data['about2'] = $this->M_data->tampil_to_frontpage(2,3,'about2')->result();
		$data['about3'] = $this->M_data->tampil_to_frontpage(2,4,'about3')->result();
		$data['content'] = 'admin/about_page';
		$data['content'] = 'about';
		
		$this->load->view('master', $data);
	}
}
