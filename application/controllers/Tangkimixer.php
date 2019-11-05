<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tangkimixer extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
	public function index()
	{
		$data['tangkimixer1'] = $this->M_data->tampil_to_frontpage(4,1,'tangkimixer1')->row();
		$data['tangkimixer2'] = $this->M_data->tampil_to_frontpage(4,2,'tangkimixer2')->result();
		$data['tangkimixer3'] = $this->M_data->tampil_to_frontpage(4,3,'tangkimixer3')->result();
		$data['tangkimixer4'] = $this->M_data->tampil_to_frontpage(4,4,'tangkimixer4')->result();
		$data['tangkimixer5left'] = $this->M_data->tampil_to_frontpage(4,5,'tangkimixer5left')->result();
		$data['tangkimixer5right'] = $this->M_data->tampil_to_frontpage(4,5,'tangkimixer5right')->result();
		$data['tangkimixer6left'] = $this->M_data->tampil_to_frontpage(4,6,'tangkimixer6left')->result();
		$data['tangkimixer6right'] = $this->M_data->tampil_to_frontpage(4,6,'tangkimixer6right')->result();
		$data['content'] = 'tangkimixer';
		$this->load->view('master',$data);
	}
}
