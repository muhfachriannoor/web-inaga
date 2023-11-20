<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theboard extends MY_Controller {
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
					'sub_menunya' => 'The Board',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_board', 'DESC')->get('theboard'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/theboard/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'The Board',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/theboard/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('tanggal','tanggal','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_board']['name']))
		{
			$this->form_validation->set_rules('foto_board','Foto','required');
		}

		if($this->form_validation->run() != false){
			$tanggal = $this->input->post('tanggal');
			$data = array();
			if (!empty($_FILES['foto_board']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/theboard/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 900;
            	$config['min_height'] = 540;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_board')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Association',
								'sub_menunya' => 'The Board',
								'sub_menunya2' => '',
							);
					$this->load->view('partial/header', $test);
					$this->load->view('association/theboard/create',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto_board'] = $image['file_name'];
	                $execute = $this->db->insert('theboard',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/theboard');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/theboard');
					}
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'The Board',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/theboard/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'The Board',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('theboard',array('id_board' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/theboard/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('theboard', array('id_board' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('tanggal','tanggal','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$tanggal = $this->input->post('tanggal');
			$data = array();
	        if(!empty($_FILES['foto_board']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/theboard/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 900;
            	$config['min_height'] = 540;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_board')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Association',
								'sub_menunya' => 'The Board',
								'sub_menunya2' => '',
								'datanya' => $this->db->get_where('theboard',array('id_board' => $id))->row(),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('association/theboard/update',$error);
					$this->load->view('partial/footer');
	            }else{
	                unlink('./asset/backend/upload/theboard/'.$row_cli->foto_board);
	                $image    				= $this->upload->data();
	                $data['foto_board'] 	= $image['file_name'];

					$execute = $this->db->update('theboard',$data,array('id_board' => $id));
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/theboard');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Tidak bisa mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/theboard');
					}
	            }
	        }else{
	        	$execute = $this->db->update('theboard',$data,array('id_board' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/association/theboard');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/association/theboard');
				}
	        }
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'The Board',
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('theboard',array('id_board' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/theboard/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('theboard', array('id_board' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/theboard/'.$row_cli->foto_board);
      
        $execute = $this->db->delete('theboard',array('id_board' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/theboard');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/theboard');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'The Board',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('theboard',array('id_board' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/theboard/detail');
		$this->load->view('partial/footer');
	}
}
