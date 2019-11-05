<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
	public function index()
	{
		$data['header'] = $this->M_data->tampil_to_frontpage(1,1,'home1')->row();
		$data['product_category'] = $this->M_data->tampil_to_frontpage(1,2,'product_category')->result();
		$data['application_field'] = $this->M_data->tampil_to_frontpage(1,3,'aplication_field')->result();
		$data['our_advan'] = $this->M_data->tampil_to_frontpage(1,4,'our_advantages')->result();
		$data['our_partner'] = $this->M_data->tampil_to_frontpage(1,5,'our_partner')->result();
		$data['address'] = $this->M_data->tampil_to_frontpage(1,6,'address')->result();
		$data['contact'] = $this->M_data->tampil_to_frontpage(1,6,'contact')->result();
		$data['maps'] = $this->M_data->tampil_to_frontpage(1,6,'maps')->result();
		$data['contact3'] = $this->M_data->tampil_to_frontpage(7,3,'contact3')->row();
		$data['content'] = 'home';
		$this->load->view('master', $data);
	}
}
