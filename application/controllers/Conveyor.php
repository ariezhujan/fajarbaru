<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conveyor extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
	public function index()
	{
		$data['conveyor1'] = $this->M_data->tampil_to_frontpage(3,1,'conveyor1')->row();
		$data['conveyor2'] = $this->M_data->tampil_to_frontpage(3,2,'conveyor2')->result();
		$data['conveyor3'] = $this->M_data->tampil_to_frontpage(3,3,'conveyor3')->result();
		$data['conveyor4'] = $this->M_data->tampil_to_frontpage(3,4,'conveyor4')->result();
		$data['conveyor5'] = $this->M_data->tampil_to_frontpage(3,5,'conveyor5')->result();
		$data['conveyor6left'] = $this->M_data->tampil_to_frontpage(3,6,'conveyor6left')->result();
		$data['conveyor6right'] = $this->M_data->tampil_to_frontpage(3,6,'conveyor6right')->result();
		$data['conveyor7left'] = $this->M_data->tampil_to_frontpage(3,7,'conveyor7left')->result();
		$data['conveyor7right'] = $this->M_data->tampil_to_frontpage(3,7,'conveyor7right')->result();
		$data['content'] = 'conveyor';
		$this->load->view('master', $data);
	}
}
