<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_page extends CI_Controller {

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
			$data['contact1'] = $this->M_data->tampil_to_form_ASC($user->id,7,1,'contact1')->row();
			$data['contact2'] = $this->M_data->tampil_to_form_ASC($user->id,7,2,'contact2')->result();
			$data['contact3'] = $this->M_data->tampil_to_form_ASC($user->id,7,3,'contact3')->row();
			$data['contact4'] = $this->M_data->tampil_to_form_ASC($user->id,7,4,'contact4')->result();
			$data['maps'] = $this->M_data->tampil_to_form_ASC($user->id,1,6,'maps')->result();
			$data['content'] = 'admin/contact_page';
			$this->load->view('admin/master', $data);
		}
	}

	public function action()
	{
		if ($this->uri->segment(4) == 'contact1') {
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
					$data['contact1'] = $this->M_data->tampil_to_form($user->id,7,1,'contact1')->result();
					$data['content'] = 'admin/contact/contact1';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
		}
		elseif ($this->uri->segment(4) == 'contact2' ) {
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
					$data['contact2'] = $this->M_data->tampil_to_form($user->id,7,2,'contact2')->result();
					$data['content'] = 'admin/contact/contact2';
					$this->load->view('admin/master', $data);
					//echo $field->conveyor_system;
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'contact3' ) {
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
					$data['contact3'] = $this->M_data->tampil_to_form($user->id,7,3,'contact3')->result();
					$data['content'] = 'admin/contact/contact3';
					$this->load->view('admin/master', $data);
				}
				//echo $this->uri->segment(4);
		}
		elseif ($this->uri->segment(4) == 'contact4' ) {
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
					$data['contact4'] = $this->M_data->tampil_to_form($user->id,7,4,'contact4')->result();
					$data['content'] = 'admin/contact/contact4';
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


	public function contact1(){
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
					    $config['upload_path']          = './upload/contact/';
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
									$this->M_data->input_data($data,'contact1');
									$this->session->set_flashdata('data','Data baru berhasil di input..');
			                }
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
					redirect('admin/contact_page/action/contact1/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}

	public function contact1_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
			    $file1 = time().$_FILES["field2"]['name'];
			    $config['upload_path']          = './upload/contact/';
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
								$data1['contact1'] = $this->M_data->tampil_data_controller($input,'contact1')->result();
						        foreach ($data1['contact1'] as $k => $file)
								{
									$data1['contact1'][$k]= $this->M_data->tampil_data_controller($input,'contact1')->result();
					            }
					            unlink("./upload/contact/$file->file");
								$this->M_data->update_data($id,$data,'contact1');
								$this->session->set_flashdata('data','Update data berhasil..');
								
	                }
			redirect('admin/contact_page/action/contact1/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function contact1_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
			$data1['contact1'] = $this->M_data->tampil_data_controller($input,'contact1')->result();
	        foreach ($data1['contact1'] as $k => $file)
			{
				$data1['contact1'][$k]= $this->M_data->tampil_data_controller($input,'contact1')->result();
            }
				if ($this->M_data->tampil_to_form($user->id,7,1,'contact1')->result()){
						$where = $input;
						unlink("./upload/contact/$file->file");
						$this->M_data->hapus_data($where,'contact1');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/contact_page/action/contact1/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function contact2(){
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
							$this->M_data->input_data($data,'contact2');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    			//echo $this->input->post('field1')[$i];
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/contact_page/action/contact2/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function contact2_edit(){
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
					$this->M_data->update_data($id,$data,'contact2');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/contact_page/action/contact2/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function contact2_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,7,2,'contact2')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'contact2');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/contact_page/action/contact2/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function contact3(){
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
							'phone'  =>  $this->input->post('field1'),
							'whatsapp'  =>  $this->input->post('field2'),
							'email'  =>  $this->input->post('field3'),
							'create_at' => date("Y-m-d H:i:s"),
							];
							$this->M_data->input_data($data,'contact3');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/contact_page/action/contact3/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function contact3_edit(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$id = $this->input->post('id');
                $data = [
					'phone'  =>  $this->input->post('field1'),
					'whatsapp'  =>  $this->input->post('field2'),
					'email'  =>  $this->input->post('field3'),
					'update_at' => date("Y-m-d H:i:s"),
					];
					$this->M_data->update_data($id,$data,'contact3');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/contact_page/action/contact3/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function contact3_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,7,3,'contact3')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'contact3');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/contact_page/action/contact3/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}



	public function contact4(){
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
							$this->M_data->input_data($data,'contact4');
							$this->session->set_flashdata('data','Data baru berhasil di input..');
			    			//echo $this->input->post('field1')[$i];
					}
				 }else{
			              $this->session->set_flashdata('data','Data yang Anda memasukan kosong..');
			      }
				
					redirect('admin/contact_page/action/contact4/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}else {
			echo "FALSE";
		}
	}


	public function contact4_edit(){
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
					$this->M_data->update_data($id,$data,'contact4');
					$this->session->set_flashdata('data','Update data berhasil..');
					redirect('admin/contact_page/action/contact4/', 'refresh');
				
			}else {
				echo "FALSE";
			}
		}

		public function contact4_remove(){
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
		if ($user->id) {
			//echo $user->id;
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$input = $this->input->get("id");
				if ($this->M_data->tampil_to_form($user->id,7,4,'contact4')->result()){
						$where = $input;
						$this->M_data->hapus_data($where,'contact4');
						$this->session->set_flashdata('data','Hapus data berhasil..');
				}
				redirect('admin/contact_page/action/contact4/', 'refresh');
		} else {
			echo "Fail !!";
		}
	}


	
}

/* End of file service_page.php */
/* Location: ./application/controllers/admin/Home_page.php */