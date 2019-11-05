<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_page extends CI_Controller {

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
			$data['service1'] = $this->M_data->tampil_to_form_ASC($user->id,6,1,'service1')->row();
			$data['service2'] = $this->M_data->tampil_to_form_ASC($user->id,6,2,'service2')->result();
			$data['service3'] = $this->M_data->tampil_to_form_ASC($user->id,6,3,'service3')->result();
			$data['service4'] = $this->M_data->tampil_to_form_ASC($user->id,6,4,'service4')->result();
			$data['service5'] = $this->M_data->tampil_to_form_ASC($user->id,6,5,'service5')->result();
			$data['service6'] = $this->M_data->tampil_to_form_ASC($user->id,6,6,'service6')->result();
			$data['service7'] = $this->M_data->tampil_to_form_ASC($user->id,6,7,'service7')->result();
			$data['content'] = 'admin/service_page';
			$this->load->view('admin/master', $data);
		}
	}

	public function action()
	{
		if ($this->uri->segment(4) == 'service1') {
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
					$data['service1'] = $this->M_data->tampil_to_form($user->id,6,1,'service1')->result();
					$data['content'] = 'admin/service/service1';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
		}
		elseif ($this->uri->segment(4) == 'service2' ) {
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
					$data['service2'] = $this->M_data->tampil_to_form($user->id,6,2,'service2')->result();
					$data['content'] = 'admin/service/service2';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'service3' ) {
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
					$data['service3'] = $this->M_data->tampil_to_form($user->id,6,3,'service3')->result();
					$data['content'] = 'admin/service/service3';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'service4' ) {
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
					$data['service4'] = $this->M_data->tampil_to_form($user->id,6,4,'service4')->result();
					$data['content'] = 'admin/service/service4';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'service5' ) {
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
					$data['service5'] = $this->M_data->tampil_to_form($user->id,6,5,'service5')->result();
					$data['content'] = 'admin/service/service5';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'service6' ) {
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
					$data['service6'] = $this->M_data->tampil_to_form($user->id,6,6,'service6')->result();
					$data['content'] = 'admin/service/service6';
					$this->load->view('admin/master', $data);
				}
			}
			elseif ($this->uri->segment(4) == 'service7' ) {
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
					$data['service7'] = $this->M_data->tampil_to_form($user->id,6,7,'service7')->result();
					$data['content'] = 'admin/service/service7';
					$this->load->view('admin/master', $data);
				}
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
		    $config['upload_path']          = './upload/conveyor/';
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


	public function service1(){
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
		    			$file1 = time().$_FILES["field2"]['name'];
					    $config['upload_path']          = './upload/service/';
					    $config['allowed_types']        = 'gif|jpg|png';
					    $config['file_name']            = $file1;
					    $config['max_size']             = 9024; // 1MB
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
									$this->M_data->input_data($data,'service1');
									$this->session->set_flashdata('data','Data baru berhasil di input..');
			                }
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
					redirect('admin/service_page/action/service1/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}

	public function service1_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/service/';
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
								$data1['service1'] = $this->M_data->tampil_data_controller($input,'service1')->result();
						        foreach ($data1['service1'] as $k => $file)
								{
									$data1['service1'][$k]= $this->M_data->tampil_data_controller($input,'service1')->result();
					            }
					            unlink("./upload/service/$file->file");
								$this->M_data->update_data($id,$data,'service1');
								$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/service_page/action/service1/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function service1_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['service1'] = $this->M_data->tampil_data_controller($input,'service1')->result();
	        foreach ($data1['service1'] as $k => $file)
			{
				$data1['service1'][$k]= $this->M_data->tampil_data_controller($input,'service1')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,5,1,'service1')->result()){
						$where = $input;
						unlink("./upload/service/$file->file");
						$this->M_data->hapus_data($where,'service1');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/service_page/action/service1/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function service2(){
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
							'text'  =>  $this->input->post('field1')[$i],
							'file'  =>  $this->input->post('field2')[$i],
							'create_at' => date("Y-m-d H:i:s"),
							];
							$this->M_data->input_data($data,'service2');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    			//echo $this->input->post('field1')[$i];
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/service_page/action/service2/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function service2_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
                $data = [
					'text'  =>  $this->input->post('field1'),
					'file'  =>  $this->input->post('field2'),
					'update_at' => date("Y-m-d H:i:s"),
					];
					$this->M_data->update_data($id,$data,'service2');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/service_page/action/service2/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function service2_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,6,2,'service2')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'service2');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/service_page/action/service2/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function service3(){
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
					    $config['upload_path']          = './upload/service/';
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
									'file'  => $file1,
									'create_at' => date("Y-m-d H:i:s"),
									];
									$this->M_data->input_data($data,'service3');
									$this->session->set_flashdata('data','Data baru berhasil di input..');
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
					redirect('admin/service_page/action/service3/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}

	public function service3_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/service/';
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
								'file'  => $file1,
								'update_at' => date("Y-m-d H:i:s"),
								];
								$input = $this->input->post("id");
								$data1['service3'] = $this->M_data->tampil_data_controller($input,'service3')->result();
						        foreach ($data1['service3'] as $k => $file)
								{
									$data1['service3'][$k]= $this->M_data->tampil_data_controller($input,'service3')->result();
					            }
					            unlink("./upload/service/$file->file");
								$this->M_data->update_data($id,$data,'service3');
								$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/service_page/action/service3/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function service3_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['service3'] = $this->M_data->tampil_data_controller($input,'service3')->result();
	        foreach ($data1['service3'] as $k => $file)
			{
				$data1['service3'][$k]= $this->M_data->tampil_data_controller($input,'service3')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,5,1,'service3')->result()){
						$where = $input;
						unlink("./upload/service/$file->file");
						$this->M_data->hapus_data($where,'service3');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/service_page/action/service3/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function service4(){
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
							'text'  =>  $this->input->post('field1')[$i],
							'file'  =>  $this->input->post('field2')[$i],
							'create_at' => date("Y-m-d H:i:s"),
							];
							$this->M_data->input_data($data,'service4');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    			//echo $this->input->post('field1')[$i];
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/service_page/action/service4/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function service4_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
                $data = [
					'text'  =>  $this->input->post('field1'),
					'file'  =>  $this->input->post('field2'),
					'update_at' => date("Y-m-d H:i:s"),
					];
					$this->M_data->update_data($id,$data,'service4');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/service_page/action/service4/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function service4_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,6,4,'service4')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'service4');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/service_page/action/service4/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}


	public function service5(){
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
                    $data = [
						'id_user' => $this->ion_auth->get_user_id(),
						'id_page' => $this->input->post('page'),
						'id_sub_page' => $this->input->post('sub'),
						'text'  =>  $this->input->post('field1'),
						'create_at' => date("Y-m-d H:i:s"),
						];
						$this->M_data->input_data($data,'service5');
						$this->session->set_flashdata('data','Data baru berhasil di input..');
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/service_page/action/service5/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function service5_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
                $data = [
					'text'  =>  $this->input->post('field1'),
					'update_at' => date("Y-m-d H:i:s"),
					];
					$this->M_data->update_data($id,$data,'service5');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/service_page/action/service5/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function service5_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,6,5,'service5')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'service5');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/service_page/action/service5/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}


	public function service6(){
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
                    $data = [
						'id_user' => $this->ion_auth->get_user_id(),
						'id_page' => $this->input->post('page'),
						'id_sub_page' => $this->input->post('sub'),
						'text'  =>  $this->input->post('field1'),
						'create_at' => date("Y-m-d H:i:s"),
						];
						$this->M_data->input_data($data,'service6');
						$this->session->set_flashdata('data','Data baru berhasil di input..');
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/service_page/action/service6/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function service6_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
                $data = [
					'text'  =>  $this->input->post('field1'),
					'update_at' => date("Y-m-d H:i:s"),
					];
					$this->M_data->update_data($id,$data,'service6');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/service_page/action/service6/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function service6_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,6,6,'service6')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'service6');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/service_page/action/service6/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function service7(){
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
	                $data = [
						'id_user' => $this->ion_auth->get_user_id(),
						'id_page' => $this->input->post('page'),
						'id_sub_page' => $this->input->post('sub'),
						'text'  =>  $this->input->post('field1'),
						'create_at' => date("Y-m-d H:i:s"),
						];
						$this->M_data->input_data($data,'service7');
						$this->session->set_flashdata('data','Data baru berhasil di input..');
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/service_page/action/service7/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function service7_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
                $data = [
					'text'  =>  $this->input->post('field1'),
					'update_at' => date("Y-m-d H:i:s"),
					];
					$this->M_data->update_data($id,$data,'service7');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/service_page/action/service7/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function service7_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,6,7,'service7')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'service7');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/service_page/action/service7/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}


	
}

/* End of file service_page.php */
/* Location: ./application/controllers/admin/Home_page.php */