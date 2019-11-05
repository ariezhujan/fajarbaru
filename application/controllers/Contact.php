<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
	public function index()
	{
		$data['contact1'] = $this->M_data->tampil_to_frontpage(7,1,'contact1')->row();
		$data['contact2'] = $this->M_data->tampil_to_frontpage(7,2,'contact2')->result();
		$data['contact3'] = $this->M_data->tampil_to_frontpage(7,3,'contact3')->row();
		$data['contact4'] = $this->M_data->tampil_to_frontpage(7,4,'contact4')->result();
		$data['maps'] = $this->M_data->tampil_to_frontpage(1,6,'maps')->result();
		$data['content'] = 'contact';
		$this->load->view('master', $data);
	}
}
