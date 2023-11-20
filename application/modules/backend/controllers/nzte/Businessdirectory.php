<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Businessdirectory extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
        if($this->session->userdata('logged') == FALSE)
        {
        	$alert =
				'<div class="notification is-danger">
					Login Dulu!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
            redirect('login');
        } 
    }

	public function index()
	{
		$data = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Geothermal Business Directory',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_directory', 'DESC')->get('nzte_directory'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('nzte/directory/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Geothermal Business Directory',
					'sub_menunya2' => '',
					'foto_error' => '',
					'logo_error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('nzte/directory/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('company_name','Company name','required');
		$this->form_validation->set_rules('website','Link Website','required');
		$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_rules('contact_name','Description','required');
		// $this->form_validation->set_rules('contact_position','Description','required');
		$this->form_validation->set_rules('contact_number','Description','required');
		$this->form_validation->set_rules('contact_email','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto']['name']))
		{
			$this->form_validation->set_rules('foto','Foto','required');
		}

		if (empty($_FILES['logo']['name']))
		{
			$this->form_validation->set_rules('logo','Logo','required');
		}

		if($this->form_validation->run() != false){
			$company_name 		= $this->input->post('company_name');
			$website 			= $this->input->post('website');
			$description 		= $this->input->post('description');
			$contact_name 		= $this->input->post('contact_name');
			$contact_position 	= $this->input->post('contact_position');
			$contact_number 	= $this->input->post('contact_number');
			$contact_email 		= $this->input->post('contact_email');

			$data = array(
						'company_name' => $company_name,
						'website' => $website,
						'description' => $description,
						'contact_name' => $contact_name,
						'contact_position' => $contact_position,
						'contact_number' => $contact_number,
						'contact_email' => $contact_email,
					);

	        $error = array(
            			'foto_error' => '',
            			'logo_error' => '',
        			);
			if (!empty($_FILES['foto']['name'])) {
				$config = array();
	            $config['upload_path'] = './asset/backend/upload/directory/picture/';
	            $config['allowed_types'] = 'jpg|jpeg|png';
	            $config['min_width'] = 900;
            	$config['min_height'] = 540;
	            $this->load->library('upload', $config, 'foto');
	            $this->foto->initialize($config);
	            $foto = $this->foto->do_upload('foto');
	            if ($foto) {
	            	// unlink('./asset/backend/upload/library/cover/'.$row_cli->foto);
	            	$data_foto = $this->foto->data();
	                $data['foto'] = $data_foto['file_name'];
	            } else {
	            	$error['foto_error'] = $this->foto->display_errors();
	            }
			}
			if (!empty($_FILES['logo']['name'])) {
				$config = array();
	            $config['upload_path'] = './asset/backend/upload/directory/logo/';
	            $config['allowed_types'] = 'jpg|jpeg|png';
	            $config['min_width'] = 400;
            	$config['min_height'] = 400;
	            $this->load->library('upload', $config, 'logo');
	            $this->logo->initialize($config);
	            $logo = $this->logo->do_upload('logo');
	            if ($logo) {
	            	// unlink('./asset/backend/upload/library/pdf/'.$row_cli->logo);
	            	$data_pdf = $this->logo->data();          
	                $data['logo'] = $data_pdf['file_name'];
	            } else {
	            	$error['logo_error'] = $this->logo->display_errors();
	            }
			}
			if($error['foto_error'] != '' OR $error['logo_error'] != '') {
	        	$stop = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Geothermal Business Directory',
					'sub_menunya2' => '',
				);
				$this->load->view('partial/header',$stop);
				$this->load->view('nzte/directory/create',$error);
				$this->load->view('partial/footer');
			}else{
				$execute = $this->db->insert('nzte_directory',$data);
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/nzte/directory');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/nzte/directory');
				}
			}
		}else{
			$data = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Geothermal Business Directory',
					'sub_menunya2' => '',
					'foto_error' => '',
					'logo_error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('nzte/directory/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Geothermal Business Directory',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('nzte_directory',array('id_directory' => $id))->row(),
					'foto_error' => '',
					'logo_error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('nzte/directory/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('nzte_directory', array('id_directory' => $id));
        $row_cli    = $select_cli->row();

		$this->form_validation->set_rules('company_name','Company name','required');
		$this->form_validation->set_rules('website','Link Website','required');
		$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_rules('contact_name','Description','required');
		// $this->form_validation->set_rules('contact_position','Description','required');
		$this->form_validation->set_rules('contact_number','Description','required');
		$this->form_validation->set_rules('contact_email','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$company_name 		= $this->input->post('company_name');
			$website 			= $this->input->post('website');
			$description 		= $this->input->post('description');
			$contact_name 		= $this->input->post('contact_name');
			$contact_position 	= $this->input->post('contact_position');
			$contact_number 	= $this->input->post('contact_number');
			$contact_email 		= $this->input->post('contact_email');

			$data = array(
						'company_name' => $company_name,
						'website' => $website,
						'description' => $description,
						'contact_name' => $contact_name,
						'contact_position' => $contact_position,
						'contact_number' => $contact_number,
						'contact_email' => $contact_email,
					);

	        $error = array(
            			'foto_error' => '',
            			'logo_error' => '',
        			);
			if (!empty($_FILES['foto']['name'])) {
				$config = array();
	            $config['upload_path'] = './asset/backend/upload/directory/picture/';
	            $config['allowed_types'] = 'jpg|jpeg|png';
	            $config['min_width'] = 900;
            	$config['min_height'] = 540;
	            $this->load->library('upload', $config, 'foto');
	            $this->foto->initialize($config);
	            $foto = $this->foto->do_upload('foto');
	            if ($foto) {
	            	unlink('./asset/backend/upload/directory/picture/'.$row_cli->foto);
	            	$data_foto = $this->foto->data();
	                $data['foto'] = $data_foto['file_name'];
	            } else {
	            	$error['foto_error'] = $this->foto->display_errors();
	            }
			}
			if (!empty($_FILES['logo']['name'])) {
				$config = array();
	            $config['upload_path'] = './asset/backend/upload/directory/logo/';
	            $config['allowed_types'] = 'jpg|jpeg|png';
	            $config['min_width'] = 400;
            	$config['min_height'] = 400;
	            $this->load->library('upload', $config, 'logo');
	            $this->logo->initialize($config);
	            $logo = $this->logo->do_upload('logo');
	            if ($logo) {
	            	unlink('./asset/backend/upload/directory/logo/'.$row_cli->logo);
	            	$data_pdf = $this->logo->data();          
	                $data['logo'] = $data_pdf['file_name'];
	            } else {
	            	$error['logo_error'] = $this->logo->display_errors();
	            }
			}
			if($error['foto_error'] != '' OR $error['logo_error'] != '') {
	        	$stop = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Geothermal Business Directory',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('nzte_directory',array('id_directory' => $id))->row(),
				);
				$this->load->view('partial/header',$stop);
				$this->load->view('nzte/directory/update',$error);
				$this->load->view('partial/footer');
			}else{
				$execute = $this->db->update('nzte_directory',$data,array('id_directory' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/nzte/directory');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/nzte/directory');
				}
			}
		}else{
			$data = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Geothermal Business Directory',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('nzte_directory',array('id_directory' => $id))->row(),
					'foto_error' => '',
					'logo_error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('nzte/directory/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
		$select_cli = $this->db->get_where('nzte_directory', array('id_directory' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/directory/picture/'.$row_cli->foto);
        unlink('./asset/backend/upload/directory/logo/'.$row_cli->logo);

        $execute = $this->db->delete('nzte_directory',array('id_directory' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/nzte/directory');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/nzte/directory');
		}
	}

	public function detail($id)
	{
		$query = $this->db->where('id_directory',$id)->get('nzte_directory');
		$data = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Geothermal Business Directory',
					'sub_menunya2' => '',
					'datanya' => $query->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('nzte/directory/detail');
		$this->load->view('partial/footer');
	}
}
