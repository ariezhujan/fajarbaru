<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulasi_page extends CI_Controller {

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
			$data['formulasi1'] = $this->M_data->tampil_to_form_ASC($user->id,5,1,'formulasi1')->result();
			$data['formulasi2'] = $this->M_data->tampil_to_form_ASC($user->id,5,2,'formulasi2')->result();
			$data['formulasi3'] = $this->M_data->tampil_to_form_ASC($user->id,5,3,'formulasi3')->result();
			$data['formulasi4'] = $this->M_data->tampil_to_form_ASC($user->id,5,4,'formulasi4')->result();
			$data['formulasi5'] = $this->M_data->tampil_to_form_ASC($user->id,5,5,'formulasi5')->result();
			$data['formulasi6'] = $this->M_data->tampil_to_form_ASC($user->id,5,6,'formulasi6')->result();
			$data['formulasi7'] = $this->M_data->tampil_to_form_ASC($user->id,5,7,'formulasi7')->result();
			$data['formulasi8'] = $this->M_data->tampil_to_form_ASC($user->id,5,8,'formulasi8')->result();
			$data['formulasi9left'] = $this->M_data->tampil_to_form_ASC($user->id,5,9,'formulasi9left')->result();
			$data['formulasi9right'] = $this->M_data->tampil_to_form_ASC($user->id,5,9,'formulasi9right')->result();
			$data['formulasi10left'] = $this->M_data->tampil_to_form_ASC($user->id,5,10,'formulasi10left')->result();
			$data['formulasi10right'] = $this->M_data->tampil_to_form_ASC($user->id,5,10,'formulasi10right')->result();
			$data['content'] = 'admin/formulasi_page';
			$this->load->view('admin/master', $data);
		}
	}

	public function action()
	{
		if ($this->uri->segment(4) == 'formulasi1') {
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
					$data['formulasi1'] = $this->M_data->tampil_to_form($user->id,5,1,'formulasi1')->result();
					$data['content'] = 'admin/formulasi/formulasi1';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
		}
		elseif ($this->uri->segment(4) == 'formulasi2' ) {
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
					$data['formulasi2'] = $this->M_data->tampil_to_form($user->id,5,2,'formulasi2')->result();
					$data['content'] = 'admin/formulasi/formulasi2';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'formulasi3' ) {
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
					$data['formulasi3'] = $this->M_data->tampil_to_form($user->id,5,3,'formulasi3')->result();
					$data['content'] = 'admin/formulasi/formulasi3';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'formulasi4' ) {
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
					$data['formulasi4'] = $this->M_data->tampil_to_form($user->id,5,4,'formulasi4')->result();
					$data['content'] = 'admin/formulasi/formulasi4';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'formulasi5' ) {
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
					$data['formulasi5'] = $this->M_data->tampil_to_form($user->id,5,5,'formulasi5')->result();
					$data['content'] = 'admin/formulasi/formulasi5';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'formulasi6' ) {
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
					$data['formulasi6'] = $this->M_data->tampil_to_form($user->id,5,6,'formulasi6')->result();
					$data['content'] = 'admin/formulasi/formulasi6';
					$this->load->view('admin/master', $data);
				}
			}
			elseif ($this->uri->segment(4) == 'formulasi7' ) {
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
					$data['formulasi7'] = $this->M_data->tampil_to_form($user->id,5,7,'formulasi7')->result();
					$data['content'] = 'admin/formulasi/formulasi7';
					$this->load->view('admin/master', $data);
				}
			}
			elseif ($this->uri->segment(4) == 'formulasi8' ) {
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
					$data['formulasi8'] = $this->M_data->tampil_to_form($user->id,5,8,'formulasi8')->result();
					$data['content'] = 'admin/formulasi/formulasi8';
					$this->load->view('admin/master', $data);
				}
			}
			elseif ($this->uri->segment(4) == 'formulasi9left' ) {
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
					$data['formulasi9left'] = $this->M_data->tampil_to_form($user->id,5,9,'formulasi9left')->result();
					$data['content'] = 'admin/formulasi/formulasi9left';
					$this->load->view('admin/master', $data);
				}
			}
			elseif ($this->uri->segment(4) == 'formulasi9right' ) {
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
					$data['formulasi9right'] = $this->M_data->tampil_to_form($user->id,5,9,'formulasi9right')->result();
					$data['content'] = 'admin/formulasi/formulasi9right';
					$this->load->view('admin/master', $data);
				}
			}
			elseif ($this->uri->segment(4) == 'formulasi10left' ) {
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
					$data['formulasi10left'] = $this->M_data->tampil_to_form($user->id,5,10,'formulasi10left')->result();
					$data['content'] = 'admin/formulasi/formulasi10left';
					$this->load->view('admin/master', $data);
				}
			}
			elseif ($this->uri->segment(4) == 'formulasi10right' ) {
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
					$data['formulasi10right'] = $this->M_data->tampil_to_form($user->id,5,10,'formulasi10right')->result();
					$data['content'] = 'admin/formulasi/formulasi10right';
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


	public function formulasi1(){
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
					    $config['upload_path']          = './upload/formulasi/';
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
								$this->M_data->input_data($data,'formulasi1');
								$this->session->set_flashdata('data','Data baru berhasil di input..');
		                }
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
					redirect('admin/formulasi_page/action/formulasi1/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}

	public function formulasi1_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/formulasi/';
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
								$data1['formulasi1'] = $this->M_data->tampil_data_controller($input,'formulasi1')->result();
						        foreach ($data1['formulasi1'] as $k => $file)
								{
									$data1['formulasi1'][$k]= $this->M_data->tampil_data_controller($input,'formulasi1')->result();
					            }
					            unlink("./upload/formulasi/$file->file");
								$this->M_data->update_data($id,$data,'formulasi1');
								$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/formulasi_page/action/formulasi1/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function formulasi1_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['formulasi1'] = $this->M_data->tampil_data_controller($input,'formulasi1')->result();
	        foreach ($data1['formulasi1'] as $k => $file)
			{
				$data1['formulasi1'][$k]= $this->M_data->tampil_data_controller($input,'formulasi1')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,5,1,'formulasi1')->result()){
						$where = $input;
						unlink("./upload/formulasi/$file->file");
						$this->M_data->hapus_data($where,'formulasi1');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi1/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function formulasi2(){
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
							$this->M_data->input_data($data,'formulasi2');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    			//echo $this->input->post('field1')[$i];
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/formulasi_page/action/formulasi2/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function formulasi2_edit(){
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
					$this->M_data->update_data($id,$data,'formulasi2');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/formulasi_page/action/formulasi2/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function formulasi2_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,5,2,'formulasi2')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'formulasi2');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi2/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function formulasi3(){
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
							$this->M_data->input_data($data,'formulasi3');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    			//echo $this->input->post('field1')[$i];
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/formulasi_page/action/formulasi3/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function formulasi3_edit(){
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
					$this->M_data->update_data($id,$data,'formulasi3');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/formulasi_page/action/formulasi3/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function formulasi3_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,5,3,'formulasi3')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'formulasi3');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi3/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function formulasi4(){
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
					    $config['upload_path']          = './upload/formulasi/';
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
									$this->M_data->input_data($data,'formulasi4');
									$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/formulasi_page/action/formulasi4/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function formulasi4_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/formulasi/';
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
							$data1['formulasi4'] = $this->M_data->tampil_data_controller($input,'formulasi4')->result();
					        foreach ($data1['formulasi4'] as $k => $file)
							{
								$data1['formulasi4'][$k]= $this->M_data->tampil_data_controller($input,'formulasi4')->result();
				            }
				            unlink("./upload/formulasi/$file->file");
							$this->M_data->update_data($id,$data,'formulasi4');
							$this->session->set_flashdata('data','Update data berhasil..');		
	                }
				redirect('admin/formulasi_page/action/formulasi4/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}


		public function formulasi4_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['formulasi4'] = $this->M_data->tampil_data_controller($input,'formulasi4')->result();
	        foreach ($data1['formulasi4'] as $k => $file)
			{
				$data1['formulasi4'][$k]= $this->M_data->tampil_data_controller($input,'formulasi4')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,5,4,'formulasi4')->result()){
						$where = $input;
						unlink("./upload/formulasi/$file->file");
						$this->M_data->hapus_data($where,'formulasi4');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi4/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function formulasi5(){
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
					    $config['upload_path']          = './upload/formulasi/';
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
									$this->M_data->input_data($data,'formulasi5');
									$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/formulasi_page/action/formulasi5/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function formulasi5_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/formulasi/';
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
							$data1['formulasi5'] = $this->M_data->tampil_data_controller($input,'formulasi5')->result();
					        foreach ($data1['formulasi5'] as $k => $file)
							{
								$data1['formulasi5'][$k]= $this->M_data->tampil_data_controller($input,'formulasi5')->result();
				            }
				            unlink("./upload/formulasi/$file->file");
							$this->M_data->update_data($id,$data,'formulasi5');
							$this->session->set_flashdata('data','Update data berhasil..');		
	                }
				redirect('admin/formulasi_page/action/formulasi5/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}


		public function formulasi5_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['formulasi5'] = $this->M_data->tampil_data_controller($input,'formulasi5')->result();
	        foreach ($data1['formulasi5'] as $k => $file)
			{
				$data1['formulasi5'][$k]= $this->M_data->tampil_data_controller($input,'formulasi5')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,5,5,'formulasi5')->result()){
						$where = $input;
						unlink("./upload/formulasi/$file->file");
						$this->M_data->hapus_data($where,'formulasi5');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi5/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function formulasi6(){
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
							$this->M_data->input_data($data,'formulasi6');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    			//echo $this->input->post('field1')[$i];
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/formulasi_page/action/formulasi6/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function formulasi6_edit(){
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
					$this->M_data->update_data($id,$data,'formulasi6');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/formulasi_page/action/formulasi6/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function formulasi6_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,5,6,'formulasi6')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'formulasi6');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi6/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function formulasi7(){
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
							$this->M_data->input_data($data,'formulasi7');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    			//echo $this->input->post('field1')[$i];
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/formulasi_page/action/formulasi7/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function formulasi7_edit(){
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
					$this->M_data->update_data($id,$data,'formulasi7');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/formulasi_page/action/formulasi7/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function formulasi7_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,5,7,'formulasi7')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'formulasi7');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi7/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}
	

	public function formulasi8(){
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
							$this->M_data->input_data($data,'formulasi8');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    			//echo $this->input->post('field1')[$i];
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/formulasi_page/action/formulasi8/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function formulasi8_edit(){
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
					$this->M_data->update_data($id,$data,'formulasi8');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/formulasi_page/action/formulasi8/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function formulasi8_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,5,8,'formulasi8')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'formulasi8');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi8/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}


	public function formulasi9left(){
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
					    $config['upload_path']          = './upload/formulasi/';
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
									$this->M_data->input_data($data,'formulasi9left');
									$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/formulasi_page/action/formulasi9left/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function formulasi9left_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/formulasi/';
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
							$data1['formulasi9left'] = $this->M_data->tampil_data_controller($input,'formulasi9left')->result();
					        foreach ($data1['formulasi9left'] as $k => $file)
							{
								$data1['formulasi9left'][$k]= $this->M_data->tampil_data_controller($input,'formulasi9left')->result();
				            }
				            unlink("./upload/formulasi/$file->file");
							$this->M_data->update_data($id,$data,'formulasi9left');
							$this->session->set_flashdata('data','Update data berhasil..');		
	                }
				redirect('admin/formulasi_page/action/formulasi9left/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}


		public function formulasi9left_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['formulasi9left'] = $this->M_data->tampil_data_controller($input,'formulasi9left')->result();
	        foreach ($data1['formulasi9left'] as $k => $file)
			{
				$data1['formulasi9left'][$k]= $this->M_data->tampil_data_controller($input,'formulasi9left')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,5,9,'formulasi9left')->result()){
						$where = $input;
						unlink("./upload/formulasi/$file->file");
						$this->M_data->hapus_data($where,'formulasi9left');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi9left/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}

	public function formulasi9right(){
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
					    $config['upload_path']          = './upload/formulasi/';
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
									$this->M_data->input_data($data,'formulasi9right');
									$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/formulasi_page/action/formulasi9right/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function formulasi9right_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/formulasi/';
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
							$data1['formulasi9right'] = $this->M_data->tampil_data_controller($input,'formulasi9right')->result();
					        foreach ($data1['formulasi9right'] as $k => $file)
							{
								$data1['formulasi9right'][$k]= $this->M_data->tampil_data_controller($input,'formulasi9right')->result();
				            }
				            unlink("./upload/formulasi/$file->file");
							$this->M_data->update_data($id,$data,'formulasi9right');
							$this->session->set_flashdata('data','Update data berhasil..');		
	                }
				redirect('admin/formulasi_page/action/formulasi9right/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}


		public function formulasi9right_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['formulasi9right'] = $this->M_data->tampil_data_controller($input,'formulasi9right')->result();
	        foreach ($data1['formulasi9right'] as $k => $file)
			{
				$data1['formulasi9right'][$k]= $this->M_data->tampil_data_controller($input,'formulasi9right')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,5,9,'formulasi9right')->result()){
						$where = $input;
						unlink("./upload/formulasi/$file->file");
						$this->M_data->hapus_data($where,'formulasi9right');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi9right/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}


	public function formulasi10left(){
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
					    $config['upload_path']          = './upload/formulasi/';
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
									$this->M_data->input_data($data,'formulasi10left');
									$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/formulasi_page/action/formulasi10left/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function formulasi10left_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/formulasi/';
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
							$data1['formulasi10left'] = $this->M_data->tampil_data_controller($input,'formulasi10left')->result();
					        foreach ($data1['formulasi10left'] as $k => $file)
							{
								$data1['formulasi10left'][$k]= $this->M_data->tampil_data_controller($input,'formulasi10left')->result();
				            }
				            unlink("./upload/formulasi/$file->file");
							$this->M_data->update_data($id,$data,'formulasi10left');
							$this->session->set_flashdata('data','Update data berhasil..');		
	                }
				redirect('admin/formulasi_page/action/formulasi10left/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}


		public function formulasi10left_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['formulasi10left'] = $this->M_data->tampil_data_controller($input,'formulasi10left')->result();
	        foreach ($data1['formulasi10left'] as $k => $file)
			{
				$data1['formulasi10left'][$k]= $this->M_data->tampil_data_controller($input,'formulasi10left')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,5,10,'formulasi10left')->result()){
						$where = $input;
						unlink("./upload/formulasi/$file->file");
						$this->M_data->hapus_data($where,'formulasi10left');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi10left/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}


	public function formulasi10right(){
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
					    $config['upload_path']          = './upload/formulasi/';
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
									$this->M_data->input_data($data,'formulasi10right');
									$this->session->set_flashdata('data','Data baru berhasil di input..');
										
			                }
			    
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/formulasi_page/action/formulasi10right/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
		
	}

	public function formulasi10right_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/formulasi/';
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
							$data1['formulasi10right'] = $this->M_data->tampil_data_controller($input,'formulasi10right')->result();
					        foreach ($data1['formulasi10right'] as $k => $file)
							{
								$data1['formulasi10right'][$k]= $this->M_data->tampil_data_controller($input,'formulasi10right')->result();
				            }
				            unlink("./upload/formulasi/$file->file");
							$this->M_data->update_data($id,$data,'formulasi10right');
							$this->session->set_flashdata('data','Update data berhasil..');		
	                }
				redirect('admin/formulasi_page/action/formulasi10right/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}


		public function formulasi10right_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['formulasi10right'] = $this->M_data->tampil_data_controller($input,'formulasi10right')->result();
	        foreach ($data1['formulasi10right'] as $k => $file)
			{
				$data1['formulasi10right'][$k]= $this->M_data->tampil_data_controller($input,'formulasi10right')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,5,10,'formulasi10right')->result()){
						$where = $input;
						unlink("./upload/formulasi/$file->file");
						$this->M_data->hapus_data($where,'formulasi10right');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/formulasi_page/action/formulasi10right/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}

	
}

/* End of file Formulasi_page.php */
/* Location: ./application/controllers/admin/Home_page.php */