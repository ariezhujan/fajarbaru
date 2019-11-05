<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_page extends CI_Controller {

	public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_data');
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'),$this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
	}

	/**
	 * Redirect if needed, otherwise display the user list
	 */
	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('admin/auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
			$this->data['title'] = $this->lang->line('index_heading');
			
			// set the flash data error message if there is one
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$data['users'] = $this->ion_auth->users()->result();			
			//USAGE NOTE - you can do more complicated queries like this
			//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();
			
			foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}
			//$data['page_action'] = $this->M_data->tampil_data($user->id,'action_page')->result();
			$data['header'] = $this->M_data->tampil_to_form_ASC($user->id,1,1,'home1')->row();
			$data['product_category'] = $this->M_data->tampil_to_form_ASC($user->id,1,2,'product_category')->result();
			$data['application_field'] = $this->M_data->tampil_to_form_ASC($user->id,1,3,'aplication_field')->result();
			$data['our_advan'] = $this->M_data->tampil_to_form_ASC($user->id,1,4,'our_advantages')->result();
			$data['our_partner'] = $this->M_data->tampil_to_form_ASC($user->id,1,5,'our_partner')->result();
			$data['address'] = $this->M_data->tampil_to_form_ASC($user->id,1,6,'address')->result();
			$data['contact'] = $this->M_data->tampil_to_form_ASC($user->id,1,6,'contact')->result();
			$data['maps'] = $this->M_data->tampil_to_form_ASC($user->id,1,6,'maps')->result();
			$data['contact3'] = $this->M_data->tampil_to_form_ASC($user->id,7,3,'contact3')->row();
			$data['content'] = 'admin/home_page';
			$this->load->view('admin/master', $data);
		}
	}

	public function action()
	{

		if ($this->uri->segment(4) == 'home1') {
			if (!$this->ion_auth->logged_in())
				{
					// redirect them to the login page
					redirect('admin/auth/login', 'refresh');
				}
			else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
				{
					// redirect them to the home page because they must be an administrator to view this
					show_error('You must be an administrator to view this page.');
				}
			else
				{
					$this->data['title'] = $this->lang->line('index_heading');
					
					// set the flash data error message if there is one
					$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

					//list the users
					$data['users'] = $this->ion_auth->users()->result();			
					//USAGE NOTE - you can do more complicated queries like this
					//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();
					
					foreach ($data['users'] as $k => $user)
					{
						$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
					}
					$data['home1'] = $this->M_data->tampil_field('home1')->result();
					$data['content'] = 'admin/homepage/home1';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
		}
		elseif($this->uri->segment(4) == 'application_field') {
			if (!$this->ion_auth->logged_in())
				{
					// redirect them to the login page
					redirect('admin/auth/login', 'refresh');
				}
			else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
				{
					// redirect them to the home page because they must be an administrator to view this
					show_error('You must be an administrator to view this page.');
				}
			else
				{
					$this->data['title'] = $this->lang->line('index_heading');
					
					// set the flash data error message if there is one
					$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

					//list the users
					$data['users'] = $this->ion_auth->users()->result();			
					//USAGE NOTE - you can do more complicated queries like this
					//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();
					
					foreach ($data['users'] as $k => $user)
					{
						$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
					}
					$data['application_field'] = $this->M_data->tampil_to_form($user->id,1,3,'aplication_field')->result();
					$data['content'] = 'admin/homepage/application_field';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
		}
		elseif ($this->uri->segment(4) == 'our_partner' ) {
			if (!$this->ion_auth->logged_in())
				{
					// redirect them to the login page
					redirect('admin/auth/login', 'refresh');
				}
			else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
				{
					// redirect them to the home page because they must be an administrator to view this
					show_error('You must be an administrator to view this page.');
				}
			else
				{
					$this->data['title'] = $this->lang->line('index_heading');
					
					// set the flash data error message if there is one
					$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

					//list the users
					$data['users'] = $this->ion_auth->users()->result();			
					//USAGE NOTE - you can do more complicated queries like this
					//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();
					
					foreach ($data['users'] as $k => $user)
					{
						$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
					}
					$data['our_partner'] = $this->M_data->tampil_to_form($user->id,1,5,'our_partner')->result();
					$data['content'] = 'admin/homepage/our_partner';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'product_category' ) {
			if (!$this->ion_auth->logged_in())
				{
					// redirect them to the login page
					redirect('admin/auth/login', 'refresh');
				}
			else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
				{
					// redirect them to the home page because they must be an administrator to view this
					show_error('You must be an administrator to view this page.');
				}
			else
				{
					$this->data['title'] = $this->lang->line('index_heading');
					
					// set the flash data error message if there is one
					$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

					//list the users
					$data['users'] = $this->ion_auth->users()->result();			
					//USAGE NOTE - you can do more complicated queries like this
					//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();
					
					foreach ($data['users'] as $k => $user)
					{
						$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
					}
					$data['product_category'] = $this->M_data->tampil_to_form($user->id,1,2,'product_category')->result();
					$data['content'] = 'admin/homepage/product_category';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'our_advantages' ) {
			if (!$this->ion_auth->logged_in())
				{
					// redirect them to the login page
					redirect('admin/auth/login', 'refresh');
				}
			else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
				{
					// redirect them to the home page because they must be an administrator to view this
					show_error('You must be an administrator to view this page.');
				}
			else
				{
					$this->data['title'] = $this->lang->line('index_heading');
					
					// set the flash data error message if there is one
					$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

					//list the users
					$data['users'] = $this->ion_auth->users()->result();			
					//USAGE NOTE - you can do more complicated queries like this
					//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();
					
					foreach ($data['users'] as $k => $user)
					{
						$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
					}
					$data['our_advantages'] = $this->M_data->tampil_to_form($user->id,1,4,'our_advantages')->result();
					$data['content'] = 'admin/homepage/our_advantages';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'address' ) {
			if (!$this->ion_auth->logged_in())
				{
					// redirect them to the login page
					redirect('admin/auth/login', 'refresh');
				}
			else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
				{
					// redirect them to the home page because they must be an administrator to view this
					show_error('You must be an administrator to view this page.');
				}
			else
				{
					$this->data['title'] = $this->lang->line('index_heading');
					
					// set the flash data error message if there is one
					$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

					//list the users
					$data['users'] = $this->ion_auth->users()->result();			
					//USAGE NOTE - you can do more complicated queries like this
					//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();
					
					foreach ($data['users'] as $k => $user)
					{
						$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
					}
					$data['address'] = $this->M_data->tampil_to_form($user->id,1,6,'address')->result();
					$data['contact'] = $this->M_data->tampil_to_form($user->id,1,6,'contact')->result();
					$data['maps'] = $this->M_data->tampil_to_form($user->id,1,6,'maps')->result();
					$data['content'] = 'admin/homepage/address';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
				//echo $this->uri->segment(4);
		}else{
			echo "Fail!";
		}
	}

	######################################DEBUGING UPLOAD#################################################################
	/*public function uploadImage() 
		{
			$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		    $config['upload_path']          = './upload/dashboard/';
		    $config['allowed_types']        = 'gif|jpg|png';
		    //$config['encrypt_name']         = true;
		    $config['max_size']             = 9024; // 1MB
		    $this->load->library('upload', $config);
		    $file1 = $_FILES["fl1"]["name"];
		    $file2 = $_FILES["fl2"]["name"];
		    $file3 = $_FILES["fl3"]["name"];
		   	if ( (!$this->upload->do_upload('fl1')) + (!$this->upload->do_upload('fl2')) + (!$this->upload->do_upload('fl3')) )
                {
                        $error = array('error' => $this->upload->display_errors());

                       var_dump($error); //$this->load->view('upload_form', $error);
                }
                else
                {
                        $data = [
									'id_page' => $this->input->post('page'),
									'id_sub_page' => $this->input->post('sub'), 
									'content' => $this->input->post('content'),
									'conveyorfile'  => $file1,
									'tankmixerfile' => $file2,
									'formulasifile' => $file3,
									'update_at' => date("Y-m-d H:i:s"),
									];
								$this->M_data->update_to_form($user->id,2,$data,'action_page');
                        var_dump($data); //$this->load->view('upload_form', $error);
                        echo "<br>";
                        echo $file1;
                        echo "<br>";
                        echo $file2;
                        echo "<br>";
                        echo $file3;
                }
		}*/

#################################################END DEBUGING UPLOAD ########################################################



	public function home1(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
			if ($user->id) {
				$data['users'] = $this->ion_auth->users()->result();
				foreach ($data['users'] as $k => $user)
					{
						$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
		            }
        	$file = $this->input->post("field");
			if ($user->id) {
				$this->session->set_flashdata('message', $this->ion_auth->messages());
		    			$file1 = time().$_FILES["field2"]['name'];
					    $config['upload_path']          = './upload/dashboard/';
					    $config['allowed_types']        = 'gif|jpg|png';
					    $config['file_name']            = $file1;
					    $config['max_size']             = 19024; // 1MB
					    $this->load->library('upload', $config);
					    $this->upload->initialize($config); 
					     //$file1 = $_FILES["field2".$i]["name"];
						   	if ( (!$this->upload->do_upload('field2')) )
				                {
				                    $error = array('error' => $this->upload->display_errors());
				                    var_dump($error); //$this->load->view('upload_form', $error);
				                }
			                else
			                {
		                        $data = [
									'id_user' => $this->ion_auth->get_user_id(),
									'id_page' => $this->input->post('page'),
									'id_sub_page' => $this->input->post('sub'),
									'text'  => $this->input->post('field1'),
									'file'  => $file1,
									'create_at' => date("Y-m-d H:i:s"),
									];
									$this->M_data->input_data($data,'home1');
									$this->session->set_flashdata('data','Data baru berhasil di input..');
			                }
					redirect('admin/home_page/action/home1/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}

	public function home1_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/dashboard/';
			    $config['allowed_types']        = 'gif|jpg|png';
			    $config['file_name']            = $file1;
			    $config['max_size']             = 9024; // 1MB
			    $this->load->library('upload', $config);
			    $this->upload->initialize($config); 
			   	if ( (!$this->upload->do_upload('field2')) )
	                {
	                    $error = array('error' => $this->upload->display_errors());
	                    var_dump($error); //$this->load->view('upload_form', $error);
	                }
	                else
	                {
	                        $data = [
								'text'  => $this->input->post('field1'),
								'file'  => $file1,
								'update_at' => date("Y-m-d H:i:s"),
								];
								$input = $this->input->post("id");
								$data1['home1'] = $this->M_data->tampil_data_controller($input,'home1')->result();
						        foreach ($data1['home1'] as $k => $file)
								{
									$data1['home1'][$k]= $this->M_data->tampil_data_controller($input,'home1')->result();
					            }
					            unlink("./upload/dashboard/$file->file");
								$this->M_data->update_data($id,$data,'home1');
								$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/home_page/action/home1/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function home1_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['home1'] = $this->M_data->tampil_data_controller($input,'home1')->result();
	        foreach ($data1['home1'] as $k => $file)
			{
				$data1['home1'][$k]= $this->M_data->tampil_data_controller($input,'home1')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,1,1,'home1')->result()){
						$where = $input;
						unlink("./upload/dashboard/$file->file");
						$this->M_data->hapus_data($where,'home1');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/home_page/action/home1/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function product_category(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$data['users'] = $this->ion_auth->users()->result();
			foreach ($data['users'] as $k => $user)
				{
					$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
	            }
        	$file = $this->input->post("field");
			if ($user->id) {
				$this->session->set_flashdata('message', $this->ion_auth->messages());
					$field = $this->input->post('page');
					if(!empty($field)){
		    		for ($i=1; $i <= $file ; $i++) { 
		    			$file1 = time().$i.$_FILES["field2".$i]['name'];
					    $config['upload_path']          = './upload/dashboard/';
					    $config['allowed_types']        = 'gif|jpg|png';
					    $config['file_name']            = $file1;
					    $config['max_size']             = 9024; // 1MB
					    $this->load->library('upload', $config);
					    $this->upload->initialize($config); 
					     //$file1 = $_FILES["field2".$i]["name"];
						   	if ( (!$this->upload->do_upload('field2'.$i)) )
				                {
				                    $error = array('error' => $this->upload->display_errors());
				                    var_dump($error); //$this->load->view('upload_form', $error);
				                }
			                else
			                {
	                            $data = [
								'id_user' => $this->ion_auth->get_user_id(),
								'id_page' => $this->input->post('page'),
								'id_sub_page' => $this->input->post('sub'),
								'text'  => $this->input->post('field1'.$i),
								'file'  => $file1,
								'create_at' => date("Y-m-d H:i:s"),
								];
								$this->M_data->input_data($data,'product_category');
								$this->session->set_flashdata('data','Data baru berhasil di input..');	
				                }
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }				
					redirect('admin/home_page/action/product_category/', 'refresh');
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}

	public function product_category_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field1"]['name'];
			    $config['upload_path']          = './upload/dashboard/';
			    $config['allowed_types']        = 'gif|jpg|png';
			    $config['file_name']            = $file1;
			    $config['max_size']             = 9024; // 1MB
			    $this->load->library('upload', $config);
			    $this->upload->initialize($config); 
			   	if ( (!$this->upload->do_upload('field1')) )
	                {
	                    $error = array('error' => $this->upload->display_errors());
	                    var_dump($error); //$this->load->view('upload_form', $error);
	                }
	                else
	                {
	                        $data = [
								'text'  => $this->input->post('field2'),
								'file'  => $file1,
								'update_at' => date("Y-m-d H:i:s"),
								];
								$input = $this->input->post("id");
								$data1['product_category'] = $this->M_data->tampil_data_controller($input,'product_category')->result();
						        foreach ($data1['product_category'] as $k => $file)
								{
									$data1['product_category'][$k]= $this->M_data->tampil_data_controller($input,'product_category')->result();
					            }
					            unlink("./upload/dashboard/$file->file");
								$this->M_data->update_data($id,$data,'product_category');
								$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/home_page/action/product_category/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function product_category_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['product_category'] = $this->M_data->tampil_data_controller($input,'product_category')->result();
	        foreach ($data1['product_category'] as $k => $file)
			{
				$data1['product_category'][$k]= $this->M_data->tampil_data_controller($input,'product_category')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,1,2,'product_category')->result()){
						$where = $input;
						unlink("./upload/dashboard/$file->file");
						$this->M_data->hapus_data($where,'product_category');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/home_page/action/product_category/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function application_field_add_data(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}
		
		if($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->post("field");
			$input1 = $this->input->post("field1");
			$idpage = $this->input->post('page');
			$idsubpage = $this->input->post('sub');
			if (!empty($input1)) {
				for ($i=0; $i < count($input) ; $i++) { 
					$data = 
					[
						'id_user' => $this->ion_auth->get_user_id(),
						'id_page' => $idpage[$i],
						'id_sub_page' => $idsubpage[$i],
						'industry_category' => $input1[$i],
						'create_at' => date("Y-m-d H:i:s"),
					];
					//print_r($data);
					$insert = $this->M_data->input_data($data,'aplication_field');
				}
			}else{
				$this->session->set_flashdata('data','Data yang Anda memasukan kosong..'); 
			}

				redirect('admin/home_page/action/application_field', 'refresh');
		}else{
	    	echo "fail";	
		}
	}

	public function application_field_edit_data(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}
		if($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->post("id");
			$input1 = $this->input->post("field1");
			$input2 = $this->input->post("field2");
			$input3 = $this->input->post("field3");
			$input4 = $this->input->post("field4");
			$input5 = $this->input->post("field5");
				if ($this->M_data->tampil_to_form($user->id,1,3,'aplication_field')->result()){
						$data = [
							//'id' => $input,
							'industry_category' => $input1	,
							'conveyor_system' => $input2,
							'tanki_mixer' => $input3,
							'formulasi_system' => $input4,
							'customized_system' => $input5,
							'update_at' => date("Y-m-d H:i:s"),
							];
							$this->M_data->update_data($input,$data,'aplication_field');
							redirect('admin/home_page/action/application_field', 'refresh');
						echo $input;
				}else{
					echo "Fail";
				}
				redirect('admin/home_page/action/application_field', 'refresh');
		}else{
	    	echo "fail";	
		}
	}

	public function application_field_hapus_data(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}
		
		if($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,1,3,'aplication_field')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'aplication_field');
						redirect('admin/home_page/action/application_field', 'refresh');
						$this->session->set_flashdata('data','Hapus data berhasil..');
						//echo $input;
				}else{
					echo "Fail";
				}
				redirect('admin/home_page/action/application_field', 'refresh');
		}else{
	    	echo "fail";	
		}
	}


	public function our_advantages(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
        $file = $this->input->post("field");
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
				$field = $this->input->post('page');
				if(!empty($field)){
		    		for ($i=0; $i < $file ; $i++) { 
					   
                        $data = [
							'id_user' => $this->ion_auth->get_user_id(),
							'id_page' => $this->input->post('page'),
							'id_sub_page' => $this->input->post('sub'),
							'file'  =>  $this->input->post('field1')[$i],
							'create_at' => date("Y-m-d H:i:s"),
							];
							$this->M_data->input_data($data,'our_advantages');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/Home_page/action/our_advantages/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function our_advantages_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
                $data = [
					'file'  => $this->input->post('field1'),
					'update_at' => date("Y-m-d H:i:s"),
					];
					$this->M_data->update_data($id,$data,'our_advantages');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/Home_page/action/our_advantages/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

	public function our_advantages_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,1,4,'our_advantages')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'our_advantages');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/home_page/action/our_advantages/', 'refresh');
		} else {
			echo "Fail !!";
		}
		
	}


	public function our_partner(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$data['users'] = $this->ion_auth->users()->result();
			foreach ($data['users'] as $k => $user)
				{
					$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
	            }
        $file = $this->input->post("field");
			if ($user->id) {
				$this->session->set_flashdata('message', $this->ion_auth->messages());
					$field = $this->input->post('page');
					if(!empty($field)){
		    		for ($i=1; $i <= $file ; $i++) { 
		    			$file1 = time().$i.$_FILES["field1".$i]['name'];
					    $config['upload_path']          = './upload/dashboard/';
					    $config['allowed_types']        = 'gif|jpg|png';
					    $config['file_name']            = $file1;
					    $config['max_size']             = 9024; // 1MB
					    $this->load->library('upload', $config);
					    $this->upload->initialize($config); 
					     //$file1 = $_FILES["field2".$i]["name"];
						   	if ( (!$this->upload->do_upload('field1'.$i)) )
				                {
				                    $error = array('error' => $this->upload->display_errors());
				                    var_dump($error); //$this->load->view('upload_form', $error);
				                }
			                else
			                {
			                        $data = [
										'id_user' => $this->ion_auth->get_user_id(),
										'id_page' => $this->input->post('page'),
										'id_sub_page' => $this->input->post('sub'),
										'file'  => $file1,
										'create_at' => date("Y-m-d H:i:s"),
										];
										$this->M_data->input_data($data,'our_partner');
										$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/home_page/action/our_partner/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function our_partner_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field1"]['name'];
			    $config['upload_path']          = './upload/dashboard/';
			    $config['allowed_types']        = 'gif|jpg|png';
			    $config['file_name']            = $file1;
			    $config['max_size']             = 9024; // 1MB
			    $this->load->library('upload', $config);
			    $this->upload->initialize($config); 
			   	if ( (!$this->upload->do_upload('field1')) )
	                {
	                    $error = array('error' => $this->upload->display_errors());
	                    var_dump($error); //$this->load->view('upload_form', $error);
	                }
	                else
	                {
	                        $data = [
								'file'  => $file1,
								'update_at' => date("Y-m-d H:i:s"),
								];
								$input = $this->input->post("id");
								$data1['our_partner'] = $this->M_data->tampil_data_controller($input,'our_partner')->result();
						        foreach ($data1['our_partner'] as $k => $file)
								{
									$data1['our_partner'][$k]= $this->M_data->tampil_data_controller($input,'our_partner')->result();
					            }
					            unlink("./upload/dashboard/$file->file");
								$this->M_data->update_data($id,$data,'our_partner');
								$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/home_page/action/our_partner/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function our_partner_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['our_partner'] = $this->M_data->tampil_data_controller($input,'our_partner')->result();
	        foreach ($data1['our_partner'] as $k => $file)
			{
				$data1['our_partner'][$k]= $this->M_data->tampil_data_controller($input,'our_partner')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,1,5,'our_partner')->result()){
						$where = $input;
						unlink("./upload/dashboard/$file->file");
						$this->M_data->hapus_data($where,'our_partner');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/home_page/action/our_partner/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}


	public function address(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
        $file = $this->input->post("field");
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
				$field = $this->input->post('page');
				if(!empty($field)){
		    		for ($i=0; $i < $file ; $i++) { 
                        $data = [
							'id_user' => $this->ion_auth->get_user_id(),
							'id_page' => $this->input->post('page'),
							'id_sub_page' => $this->input->post('sub'),
							'kota'  =>  $this->input->post('field1')[$i],
							'alamat'  =>  $this->input->post('field2')[$i],
							'create_at' => date("Y-m-d H:i:s"),
							];
							$this->M_data->input_data($data,'address');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
					redirect('admin/Home_page/action/address/', 'refresh');
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}

	public function address_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
                $data = [
					'kota'  =>  $this->input->post('field1'),
					'alamat'  =>  $this->input->post('field2'),
					'update_at' => date("Y-m-d H:i:s"),
					];
					$this->M_data->update_data($id,$data,'address');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/Home_page/action/address/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function address_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,1,6,'address')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'address');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/home_page/action/address/', 'refresh');
		} else {
			echo "Fail !!";
		}
		
	}


	public function contact(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
        $file = $this->input->post("field");
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
				$field = $this->input->post('page');
				if(!empty($field)){
		    		for ($i=0; $i < $file ; $i++) { 
					   
                        $data = [
							'id_user' => $this->ion_auth->get_user_id(),
							'id_page' => $this->input->post('page'),
							'id_sub_page' => $this->input->post('sub'),
							'contact'  =>  $this->input->post('field1')[$i],
							'number'  =>  $this->input->post('field2')[$i],
							'create_at' => date("Y-m-d H:i:s"),
							];
							$this->M_data->input_data($data,'contact');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/Home_page/action/address/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function contact_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
                $data = [
					'contact'  =>  $this->input->post('field1'),
					'number'  =>  $this->input->post('field2'),
					'update_at' => date("Y-m-d H:i:s"),
					];
					$this->M_data->update_data($id,$data,'contact');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/Home_page/action/address/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function contact_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,6,'contact')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'contact');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/home_page/action/address/', 'refresh');
		} else {
			echo "Fail !!";
		}
		
	}


	public function maps(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
        $file = $this->input->post("field");
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
				$field = $this->input->post('page');
				$file1 = $this->input->post('field1');

				if(!empty($field)){
		    		for ($i=0; $i < $file ; $i++) { 
                        $data = [
							'id_user' => $this->ion_auth->get_user_id(),
							'id_page' => $this->input->post('page'),
							'id_sub_page' => $this->input->post('sub'),
							'maps'  => htmlspecialchars_decode($file1),
							'create_at' => date("Y-m-d H:i:s"),
							];
							$this->M_data->input_data($data,'maps');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/Home_page/action/address/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function maps_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
                $data = [
					'maps'  =>  $this->input->post('field1'),
					'update_at' => date("Y-m-d H:i:s"),
					];
					$this->M_data->update_data($id,$data,'maps');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/Home_page/action/address/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function maps_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,1,6,'maps')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'maps');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/home_page/action/address/', 'refresh');
		} else {
			echo "Fail !!";
		}
		
	}
	


	
}

/* End of file Home_page.php */
/* Location: ./application/controllers/admin/Home_page.php */