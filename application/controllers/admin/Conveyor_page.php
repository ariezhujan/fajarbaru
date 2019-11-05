<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conveyor_page extends CI_Controller {

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
			$data['conveyor1'] = $this->M_data->tampil_to_form_ASC($user->id,3,1,'conveyor1')->row();
			$data['conveyor2'] = $this->M_data->tampil_to_form_ASC($user->id,3,2,'conveyor2')->result();
			$data['conveyor3'] = $this->M_data->tampil_to_form_ASC($user->id,3,3,'conveyor3')->result();
			$data['conveyor4'] = $this->M_data->tampil_to_form_ASC($user->id,3,4,'conveyor4')->result();
			$data['conveyor5'] = $this->M_data->tampil_to_form_ASC($user->id,3,5,'conveyor5')->result();
			$data['conveyor6left'] = $this->M_data->tampil_to_form_ASC($user->id,3,6,'conveyor6left')->result();
			$data['conveyor6right'] = $this->M_data->tampil_to_form_ASC($user->id,3,6,'conveyor6right')->result();
			$data['conveyor7left'] = $this->M_data->tampil_to_form_ASC($user->id,3,7,'conveyor7left')->result();
			$data['conveyor7right'] = $this->M_data->tampil_to_form_ASC($user->id,3,7,'conveyor7right')->result();
			$data['content'] = 'admin/conveyor_page';
			$this->load->view('admin/master', $data);
		}
	}

	public function action()
	{
		if ($this->uri->segment(4) == 'conveyor1') {
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
					$data['conveyor1'] = $this->M_data->tampil_to_form($user->id,3,1,'conveyor1')->result();
					$data['content'] = 'admin/conveyor/conveyor1';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
		}
		elseif ($this->uri->segment(4) == 'conveyor2' ) {
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
					$data['conveyor2'] = $this->M_data->tampil_to_form($user->id,3,2,'conveyor2')->result();
					$data['content'] = 'admin/conveyor/conveyor2';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'conveyor3' ) {
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
					$data['conveyor3'] = $this->M_data->tampil_to_form($user->id,3,3,'conveyor3')->result();
					$data['content'] = 'admin/conveyor/conveyor3';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'conveyor4' ) {
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
					$data['conveyor4'] = $this->M_data->tampil_to_form($user->id,3,4,'conveyor4')->result();
					$data['content'] = 'admin/conveyor/conveyor4';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'conveyor5' ) {
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
					$data['conveyor5'] = $this->M_data->tampil_to_form($user->id,3,5,'conveyor5')->result();
					$data['content'] = 'admin/conveyor/conveyor5';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'conveyor6left' ) {
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
					$data['conveyor6left'] = $this->M_data->tampil_to_form_ASC($user->id,3,6,'conveyor6left')->result();
					$data['content'] = 'admin/conveyor/conveyor6left';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'conveyor6right' ) {
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
					$data['conveyor6right'] = $this->M_data->tampil_to_form_ASC($user->id,3,6,'conveyor6right')->result();
					$data['content'] = 'admin/conveyor/conveyor6right';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}elseif ($this->uri->segment(4) == 'conveyor7left' ) {
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
					$data['conveyor7left'] = $this->M_data->tampil_to_form_ASC($user->id,3,7,'conveyor7left')->result();
					$data['content'] = 'admin/conveyor/conveyor7left';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'conveyor7right' ) {
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
					$data['conveyor7right'] = $this->M_data->tampil_to_form_ASC($user->id,3,7,'conveyor7right')->result();
					$data['content'] = 'admin/conveyor/conveyor7right';
					$this->load->view('admin/master', $data);
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


	public function conveyor1(){
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
					    $config['upload_path']          = './upload/conveyor/';
					    $config['allowed_types']        = 'gif|jpg|png';
					    $config['file_name']            = $file1;
					    $config['max_size']             = 9024; // 1MB
					    $this->load->library('upload', $config);
					    $this->upload->initialize($config); 
					   	if ( (!$this->upload->do_upload('field2')) )
			                {
			                    $error = array('error' => $this->upload->display_errors());
			                    var_dump($error); 
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
							$this->M_data->input_data($data,'conveyor1');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
		                }
				 }else{
			        $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			     }
					redirect('admin/conveyor_page/action/conveyor1/', 'refresh');
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function conveyor1_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/conveyor/';
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
								$data1['conveyor1'] = $this->M_data->tampil_data_controller($input,'conveyor1')->result();
						        foreach ($data1['conveyor1'] as $k => $file)
								{
									$data1['conveyor1'][$k]= $this->M_data->tampil_data_controller($input,'conveyor1')->result();
					            }
					            unlink("./upload/conveyor/$file->file");
								$this->M_data->update_data($id,$data,'Conveyor1');
								$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/conveyor_page/action/conveyor1/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function conveyor1_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['conveyor1'] = $this->M_data->tampil_data_controller($input,'conveyor1')->result();
	        foreach ($data1['conveyor1'] as $k => $file)
			{
				$data1['conveyor1'][$k]= $this->M_data->tampil_data_controller($input,'conveyor1')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,3,1,'Conveyor1')->result()){
						$where = $input;
						unlink("./upload/conveyor/$file->file");
						$this->M_data->hapus_data($where,'Conveyor1');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/conveyor_page/action/conveyor1/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}


		public function conveyor2(){
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
							'create_at' => date("Y-m-d H:i:s"),
							];
							$this->M_data->input_data($data,'conveyor2');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    			//echo $this->input->post('field1')[$i];
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/conveyor_page/action/conveyor2/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function conveyor2_edit(){
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
					$this->M_data->update_data($id,$data,'conveyor2');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/conveyor_page/action/conveyor2/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function conveyor2_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,3,2,'conveyor2')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'conveyor2');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/conveyor_page/action/conveyor2/', 'refresh');
		} else {
			echo "Fail !!";
		}
		
	}



	public function conveyor3(){
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
					    $config['upload_path']          = './upload/conveyor/';
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
										$this->M_data->input_data($data,'conveyor3');
										$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/conveyor_page/action/conveyor3/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function conveyor3_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/conveyor/';
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
							$data1['conveyor3'] = $this->M_data->tampil_data_controller($input,'conveyor3')->result();
					        foreach ($data1['conveyor3'] as $k => $file)
							{
								$data1['conveyor3'][$k]= $this->M_data->tampil_data_controller($input,'conveyor3')->result();
				            }
				            unlink("./upload/conveyor/$file->file");
							$this->M_data->update_data($id,$data,'conveyor3');
							$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/conveyor_page/action/conveyor3/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}


		public function conveyor3_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['conveyor3'] = $this->M_data->tampil_data_controller($input,'conveyor3')->result();
	        foreach ($data1['conveyor3'] as $k => $file)
			{
				$data1['conveyor3'][$k]= $this->M_data->tampil_data_controller($input,'conveyor3')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,3,3,'conveyor3')->result()){
						$where = $input;
						unlink("./upload/conveyor/$file->file");
						$this->M_data->hapus_data($where,'conveyor3');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/conveyor_page/action/conveyor3/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function conveyor4(){
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
					    $config['upload_path']          = './upload/conveyor/';
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
										$this->M_data->input_data($data,'conveyor4');
										$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/conveyor_page/action/conveyor4/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}


	public function conveyor4_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/conveyor/';
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
							$data1['conveyor4'] = $this->M_data->tampil_data_controller($input,'conveyor4')->result();
					        foreach ($data1['conveyor4'] as $k => $file)
							{
								$data1['conveyor4'][$k]= $this->M_data->tampil_data_controller($input,'conveyor4')->result();
				            }
				            unlink("./upload/conveyor/$file->file");
							$this->M_data->update_data($id,$data,'conveyor4');
							$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/conveyor_page/action/conveyor4/', 'refresh');
			}else {
				echo "FALSE";
			}
		}

		public function conveyor4_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['conveyor4'] = $this->M_data->tampil_data_controller($input,'conveyor4')->result();
	        foreach ($data1['conveyor4'] as $k => $file)
			{
				$data1['conveyor4'][$k]= $this->M_data->tampil_data_controller($input,'conveyor4')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,3,4,'conveyor4')->result()){
						$where = $input;
						unlink("./upload/conveyor/$file->file");
						$this->M_data->hapus_data($where,'conveyor4');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/conveyor_page/action/conveyor4/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}




	public function conveyor5(){
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
							'create_at' => date("Y-m-d H:i:s"),
							];
							$this->M_data->input_data($data,'conveyor5');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    			//echo $this->input->post('field1')[$i];
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/conveyor_page/action/conveyor5/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function conveyor5_edit(){
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
					$this->M_data->update_data($id,$data,'conveyor5');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/conveyor_page/action/conveyor5/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function conveyor5_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,3,5,'conveyor5')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'conveyor5');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/conveyor_page/action/conveyor5/', 'refresh');
		} else {
			echo "Fail !!";
		}
		
	}





	public function conveyor6left(){
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
					    $config['upload_path']          = './upload/conveyor/';
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
										$this->M_data->input_data($data,'conveyor6left');
										$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/conveyor_page/action/conveyor6left/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function conveyor6left_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/conveyor/';
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
							$data1['conveyor6left'] = $this->M_data->tampil_data_controller($input,'conveyor6left')->result();
					        foreach ($data1['conveyor6left'] as $k => $file)
							{
								$data1['conveyor6left'][$k]= $this->M_data->tampil_data_controller($input,'conveyor6left')->result();
				            }
				            unlink("./upload/conveyor/$file->file");
							$this->M_data->update_data($id,$data,'conveyor6left');
							$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/conveyor_page/action/conveyor6left/', 'refresh');
			}else {
				echo "FALSE";
			}
		}

		public function conveyor6left_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['conveyor6left'] = $this->M_data->tampil_data_controller($input,'conveyor6left')->result();
	        foreach ($data1['conveyor6left'] as $k => $file)
			{
				$data1['conveyor6left'][$k]= $this->M_data->tampil_data_controller($input,'conveyor6left')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,3,6,'conveyor6left')->result()){
						$where = $input;
						unlink("./upload/conveyor/$file->file");
						$this->M_data->hapus_data($where,'conveyor6left');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/conveyor_page/action/conveyor6left/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}

	public function conveyor6right(){
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
					    $config['upload_path']          = './upload/conveyor/';
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
										$this->M_data->input_data($data,'conveyor6right');
										$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/conveyor_page/action/conveyor6right/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function conveyor6right_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/conveyor/';
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
							$data1['conveyor6right'] = $this->M_data->tampil_data_controller($input,'conveyor6right')->result();
					        foreach ($data1['conveyor6right'] as $k => $file)
							{
								$data1['conveyor6right'][$k]= $this->M_data->tampil_data_controller($input,'conveyor6right')->result();
				            }
				            unlink("./upload/conveyor/$file->file");
							$this->M_data->update_data($id,$data,'conveyor6right');
							$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/conveyor_page/action/conveyor6right/', 'refresh');
			}else {
				echo "FALSE";
			}
		}

		public function conveyor6right_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['conveyor6right'] = $this->M_data->tampil_data_controller($input,'conveyor6right')->result();
	        foreach ($data1['conveyor6right'] as $k => $file)
			{
				$data1['conveyor6right'][$k]= $this->M_data->tampil_data_controller($input,'conveyor6right')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,3,6,'conveyor6right')->result()){
						$where = $input;
						unlink("./upload/conveyor/$file->file");
						$this->M_data->hapus_data($where,'conveyor6right');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/conveyor_page/action/conveyor6right/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}


	public function conveyor7left(){
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
					    $config['upload_path']          = './upload/conveyor/';
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
										$this->M_data->input_data($data,'conveyor7left');
										$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/conveyor_page/action/conveyor7left/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function conveyor7left_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/conveyor/';
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
							$data1['conveyor7left'] = $this->M_data->tampil_data_controller($input,'conveyor7left')->result();
					        foreach ($data1['conveyor7left'] as $k => $file)
							{
								$data1['conveyor7left'][$k]= $this->M_data->tampil_data_controller($input,'conveyor7left')->result();
				            }
				            unlink("./upload/conveyor/$file->file");
							$this->M_data->update_data($id,$data,'conveyor7left');
							$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/conveyor_page/action/conveyor7left/', 'refresh');
			}else {
				echo "FALSE";
			}
		}

		public function conveyor7left_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['conveyor7left'] = $this->M_data->tampil_data_controller($input,'conveyor7left')->result();
	        foreach ($data1['conveyor7left'] as $k => $file)
			{
				$data1['conveyor7left'][$k]= $this->M_data->tampil_data_controller($input,'conveyor7left')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,3,7,'conveyor7left')->result()){
						$where = $input;
						unlink("./upload/conveyor/$file->file");
						$this->M_data->hapus_data($where,'conveyor7left');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/conveyor_page/action/conveyor7left/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}


	public function conveyor7right(){
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
					    $config['upload_path']          = './upload/conveyor/';
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
										$this->M_data->input_data($data,'conveyor7right');
										$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/conveyor_page/action/conveyor7right/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function conveyor7right_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/conveyor/';
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
							$data1['conveyor7right'] = $this->M_data->tampil_data_controller($input,'conveyor7right')->result();
					        foreach ($data1['conveyor7right'] as $k => $file)
							{
								$data1['conveyor7right'][$k]= $this->M_data->tampil_data_controller($input,'conveyor7right')->result();
				            }
				            unlink("./upload/conveyor/$file->file");
							$this->M_data->update_data($id,$data,'conveyor7right');
							$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/conveyor_page/action/conveyor7right/', 'refresh');
			}else {
				echo "FALSE";
			}
		}

		public function conveyor7right_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['conveyor7right'] = $this->M_data->tampil_data_controller($input,'conveyor7right')->result();
	        foreach ($data1['conveyor7right'] as $k => $file)
			{
				$data1['conveyor7right'][$k]= $this->M_data->tampil_data_controller($input,'conveyor7right')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,3,7,'conveyor7right')->result()){
						$where = $input;
						unlink("./upload/conveyor/$file->file");
						$this->M_data->hapus_data($where,'conveyor7right');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/conveyor_page/action/conveyor7right/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}

	

	
}

/* End of file Conveyor_page.php */
/* Location: ./application/controllers/admin/Home_page.php */