<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
	public function index()
	{
		$data['service1'] = $this->M_data->tampil_to_frontpage(6,1,'service1')->row();
		$data['service2'] = $this->M_data->tampil_to_frontpage(6,2,'service2')->result();
		$data['service3'] = $this->M_data->tampil_to_frontpage(6,3,'service3')->result();
		$data['service4'] = $this->M_data->tampil_to_frontpage(6,4,'service4')->result();
		$data['service5'] = $this->M_data->tampil_to_frontpage(6,5,'service5')->result();
		$data['service6'] = $this->M_data->tampil_to_frontpage(6,6,'service6')->result();
		$data['service7'] = $this->M_data->tampil_to_frontpage(6,7,'service7')->result();
		$data['content'] = 'service';
		$this->load->view('master', $data);
	}
}
