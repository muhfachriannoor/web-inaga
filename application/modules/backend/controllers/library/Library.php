<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends MY_Controller {
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

	public function index($sub_menunya)
	{
		if ($sub_menunya == 'IIGCE') {
        	$kategori = 'IIGCE Techninal Paper';
     	} else if ($sub_menunya == 'General') {
        	$kategori = 'General Paper & Presentation';
      	} else if ($sub_menunya == 'References') {
        	$kategori = 'References';
      	} else if ($sub_menunya == 'API') {
        	$kategori = 'API News Magazine';
      	}

		$data = array(
					'menunya' => 'Library',
					'sub_menunya' => $sub_menunya,
					'sub_menunya2' => '',
					'datanya' => $this->db->where('kategori_library', $kategori)->order_by('id_library', 'DESC')->get('library'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('library/index');
		$this->load->view('partial/footer');
	}

	public function create($sub_menunya)
	{
		$data = array(
					'menunya' => 'Library',
					'sub_menunya' => $sub_menunya,
					'sub_menunya2' => '',
					'foto_error' => '',
					'pdf_error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('library/create');
		$this->load->view('partial/footer');
	}

	public function up($sub_menunya)
	{
		
		$this->form_validation->set_rules('nama_library','Nama Library','required');
		$this->form_validation->set_rules('kategori_library','Category','required');
		$this->form_validation->set_rules('tanggal_library','Date','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_library']['name']))
		{
			$this->form_validation->set_rules('foto_library','Foto','required');
		}

		if (empty($_FILES['pdf_library']['name']))
		{
			$this->form_validation->set_rules('pdf_library','File PDF','required');
		}

		if($this->form_validation->run() != false){
			$nama_library 	 	= $this->input->post('nama_library');
			$kategori_library 	= $this->input->post('kategori_library');
			$tanggal_library 	= date('Y-m-d',strtotime($this->input->post('tanggal_library')));

			$data = array(
						'nama_library' => $nama_library,
						'kategori_library' => $kategori_library,
						'tanggal_library' => $tanggal_library,
					);

			if (!empty($_FILES['foto_library']['name']) AND !empty($_FILES['pdf_library']['name'])) {
				$config = array();
	            $config['upload_path'] = './asset/backend/upload/library/cover/';
	            $config['allowed_types'] = 'jpg|jpeg|png';
	            $config['min_width'] = 200;
            	$config['min_height'] = 250;
	            $this->load->library('upload', $config, 'foto_library');
	            $this->foto_library->initialize($config);
	            $foto_library = $this->foto_library->do_upload('foto_library');

				$config = array();
	            $config['upload_path'] = './asset/backend/upload/library/pdf/';
	            $config['allowed_types'] = 'pdf';
	            $this->load->library('upload', $config, 'pdf_library');
	            $this->pdf_library->initialize($config);
	            $pdf_library = $this->pdf_library->do_upload('pdf_library');

	            if($foto_library AND $pdf_library) {
	            	$data_foto = $this->foto_library->data();
	                $data['foto_library'] = $data_foto['file_name'];

				    $data_pdf = $this->pdf_library->data();          
	                $data['pdf_library'] = $data_pdf['file_name'];

	                $execute = $this->db->insert('library',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/library/'.$sub_menunya);
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/library/'.$sub_menunya);
					}
	            }else{
	            	$error = array(
	                			'foto_error' => $this->foto_library->display_errors(),
	                			'pdf_error' => $this->pdf_library->display_errors(),
	            			);
	            	$stop = array(
								'menunya' => 'Library',
								'sub_menunya' => $sub_menunya,
								'sub_menunya2' => '',
							);
					$this->load->view('partial/header', $stop);
					$this->load->view('library/create',$error);
					$this->load->view('partial/footer');
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'Library',
					'sub_menunya' => $sub_menunya,
					'sub_menunya2' => '',
					'foto_error' => '',
					'pdf_error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('library/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($sub_menunya,$id)
	{
		$data = array(
					'menunya' => 'Library',
					'sub_menunya' => $sub_menunya,
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('library',array('id_library' => $id))->row(),
					'foto_error' => '',
					'pdf_error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('library/update');
		$this->load->view('partial/footer');
	}

	public function down($sub_menunya,$id)
	{
		$select_cli = $this->db->get_where('library', array('id_library' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('nama_library','Nama Library','required');
        $this->form_validation->set_rules('kategori_library','Category','required');
		$this->form_validation->set_rules('tanggal_library','Date','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_library 	 	= $this->input->post('nama_library');
			$kategori_library 	= $this->input->post('kategori_library');
			$tanggal_library 	= date('Y-m-d',strtotime($this->input->post('tanggal_library')));

			$data = array(
						'nama_library' => $nama_library,
						'kategori_library' => $kategori_library,
						'tanggal_library' => $tanggal_library,
					);
			$error = array(
            			'foto_error' => '',
            			'pdf_error' => '',
        			);
			if (!empty($_FILES['foto_library']['name'])) {
				$config = array();
	            $config['upload_path'] = './asset/backend/upload/library/cover/';
	            $config['allowed_types'] = 'jpg|jpeg|png';
	            $config['min_width'] = 200;
            	$config['min_height'] = 250;
	            $this->load->library('upload', $config, 'foto_library');
	            $this->foto_library->initialize($config);
	            $foto_library = $this->foto_library->do_upload('foto_library');
	            if ($foto_library) {
	            	unlink('./asset/backend/upload/library/cover/'.$row_cli->foto_library);
	            	$data_foto = $this->foto_library->data();
	                $data['foto_library'] = $data_foto['file_name'];
	            } else {
	            	$error['foto_error'] = $this->foto_library->display_errors();
	            }
			}
			if (!empty($_FILES['pdf_library']['name'])) {
				$config = array();
	            $config['upload_path'] = './asset/backend/upload/library/pdf/';
	            $config['allowed_types'] = 'pdf';
	            $this->load->library('upload', $config, 'pdf_library');
	            $this->pdf_library->initialize($config);
	            $pdf_library = $this->pdf_library->do_upload('pdf_library');
	            if ($pdf_library) {
	            	unlink('./asset/backend/upload/library/pdf/'.$row_cli->pdf_library);
	            	$data_pdf = $this->pdf_library->data();          
	                $data['pdf_library'] = $data_pdf['file_name'];
	            } else {
	            	$error['pdf_error'] = $this->pdf_library->display_errors();
	            }
			}
			if($error['foto_error'] != '' OR $error['pdf_error'] != '') {
	        	$stop = array(
					'menunya' => 'Library',
					'sub_menunya' => $sub_menunya,
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('library',array('id_library' => $id))->row(),
				);
				$this->load->view('partial/header',$stop);
				$this->load->view('library/update',$error);
				$this->load->view('partial/footer');
			}else{
				$execute = $this->db->update('library',$data,array('id_library' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/library/'.$sub_menunya);
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/library/'.$sub_menunya);
				}
			}
		}else{
			$data = array(
					'menunya' => 'Library',
					'sub_menunya' => $sub_menunya,
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('library',array('id_library' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('library/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($sub_menunya,$id)
	{
		$select_cli = $this->db->get_where('library', array('id_library' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/library/cover/'.$row_cli->foto_library);
        unlink('./asset/backend/upload/library/pdf/'.$row_cli->pdf_library);
      
        $execute = $this->db->delete('library',array('id_library' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/library/'.$sub_menunya);
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/library/'.$sub_menunya);
		}
	}

	public function detail($sub_menunya,$id)
	{
		$query = $this->db->where('id_library',$id)->get('library');
		$data = array(
					'menunya' => 'Library',
					'sub_menunya' => $sub_menunya,
					'sub_menunya2' => '',
					'datanya' => $query->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('library/detail');
		$this->load->view('partial/footer');
	}
}
