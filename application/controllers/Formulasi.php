<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
	public function index()
	{
		$data['formulasi1'] = $this->M_data->tampil_to_frontpage(5,1,'formulasi1')->result();
		$data['formulasi2'] = $this->M_data->tampil_to_frontpage(5,2,'formulasi2')->result();
		$data['formulasi3'] = $this->M_data->tampil_to_frontpage(5,3,'formulasi3')->result();
		$data['formulasi4'] = $this->M_data->tampil_to_frontpage(5,4,'formulasi4')->result();
		$data['formulasi5'] = $this->M_data->tampil_to_frontpage(5,5,'formulasi5')->result();
		$data['formulasi6'] = $this->M_data->tampil_to_frontpage(5,6,'formulasi6')->result();
		$data['formulasi7'] = $this->M_data->tampil_to_frontpage(5,7,'formulasi7')->result();
		$data['formulasi8'] = $this->M_data->tampil_to_frontpage(5,8,'formulasi8')->result();
		$data['formulasi9left'] = $this->M_data->tampil_to_frontpage(5,9,'formulasi9left')->result();
		$data['formulasi9right'] = $this->M_data->tampil_to_frontpage(5,9,'formulasi9right')->result();
		$data['formulasi10left'] = $this->M_data->tampil_to_frontpage(5,10,'formulasi10left')->result();
		$data['formulasi10right'] = $this->M_data->tampil_to_frontpage(5,10,'formulasi10right')->result();
		$data['content'] = 'formulasi';
		$this->load->view('master', $data);
	}
}
