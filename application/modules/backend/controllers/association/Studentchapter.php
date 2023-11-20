<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studentchapter extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        if($this->session->userdata('logged') == FALSE)
        {
        	$alert =
				'<div class="notification is-danger">
					Login Dulu!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
            redirect('login');
        }
        if($this->session->userdata('akses') != '1')
        {
        	$alert =
				'<div class="box-header">
			      <div class="alert alert-warning alert-dismissible">
			            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			            <h4><i class="icon fa fa-warning"></i> Gagal!</h4>
			            Tidak boleh mengakses!
			      </div>
			    </div>';
			$session = $this->session->set_flashdata('alert', $alert);
            redirect('backend');
        }
    }

	public function index()
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'Student Chapter',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_student', 'DESC')->get('studentchapter'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/studentchapter/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'Student Chapter',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/studentchapter/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('nama_student','Name','required');
		$this->form_validation->set_rules('deskripsi_student','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_student']['name']))
		{
			$this->form_validation->set_rules('foto_student','Foto','required');
		}

		if($this->form_validation->run() != false){
			$nama_student 		= $this->input->post('nama_student');
			$deskripsi_student 	= $this->input->post('deskripsi_student');
			$data = array(
						'nama_student' => $nama_student,
						'deskripsi_student' => $deskripsi_student,
					);
			if (!empty($_FILES['foto_student']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/studentchapter/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 300;
            	$config['min_height'] = 300;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_student')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Association',
								'sub_menunya' => 'Student Chapter',
								'sub_menunya2' => '',
							);
					$this->load->view('partial/header', $test);
					$this->load->view('association/studentchapter/create',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto_student'] = $image['file_name'];
	                $execute = $this->db->insert('studentchapter',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/studentchapter');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/studentchapter');
					}
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'Student Chapter',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/studentchapter/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'Student Chapter',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('studentchapter',array('id_student' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/studentchapter/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('studentchapter', array('id_student' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('nama_student','Name','required');
		$this->form_validation->set_rules('deskripsi_student','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_student 		= $this->input->post('nama_student');
			$deskripsi_student 	= $this->input->post('deskripsi_student');
			$data = array(
						'nama_student' => $nama_student,
						'deskripsi_student' => $deskripsi_student,
					);

	        if(!empty($_FILES['foto_student']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/studentchapter/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 300;
            	$config['min_height'] = 300;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_student')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Association',
								'sub_menunya' => 'Student Chapter',
								'sub_menunya2' => '',
								'datanya' => $this->db->get_where('studentchapter',array('id_student' => $id))->row(),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('association/studentchapter/update',$error);
					$this->load->view('partial/footer');
	            }else{
	                unlink('./asset/backend/upload/studentchapter/'.$row_cli->foto_student);
	                $image    				= $this->upload->data();
	                $data['foto_student'] 	= $image['file_name'];

					$execute = $this->db->update('studentchapter',$data,array('id_student' => $id));
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/studentchapter');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Tidak bisa mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/studentchapter');
					}
	            }
	        }else{
	        	$execute = $this->db->update('studentchapter',$data,array('id_student' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/association/studentchapter');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/association/studentchapter');
				}
	        }
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'Student Chapter',
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('studentchapter',array('id_student' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/studentchapter/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('studentchapter', array('id_student' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/studentchapter/'.$row_cli->foto_student);
      
        $execute = $this->db->delete('studentchapter',array('id_student' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/studentchapter');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/studentchapter');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'Student Chapter',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('studentchapter',array('id_student' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/studentchapter/detail');
		$this->load->view('partial/footer');
	}
}
