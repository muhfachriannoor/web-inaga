<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends MY_Controller {
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
					'sub_menunya' => 'Member',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_member', 'DESC')->get('members'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/member/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'Member',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/member/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('nama_member','Name','required');
		$this->form_validation->set_rules('deskripsi_member','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_member']['name']))
		{
			$this->form_validation->set_rules('foto_member','Foto','required');
		}

		if($this->form_validation->run() != false){
			$nama_member 		= $this->input->post('nama_member');
			$deskripsi_member 	= $this->input->post('deskripsi_member');
			$data = array(
						'nama_member' => $nama_member,
						'deskripsi_member' => $deskripsi_member,
					);
			if (!empty($_FILES['foto_member']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/member/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 300;
            	$config['min_height'] = 300;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_member')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Association',
								'sub_menunya' => 'Member',
								'sub_menunya2' => '',
							);
					$this->load->view('partial/header', $test);
					$this->load->view('association/member/create',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto_member'] = $image['file_name'];
	                $execute = $this->db->insert('members',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/member');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/member');
					}
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'Member',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/member/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'Member',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('members',array('id_member' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/member/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('members', array('id_member' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('nama_member','Name','required');
		$this->form_validation->set_rules('deskripsi_member','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_member 		= $this->input->post('nama_member');
			$deskripsi_member 	= $this->input->post('deskripsi_member');
			$data = array(
						'nama_member' => $nama_member,
						'deskripsi_member' => $deskripsi_member,
					);

	        if(!empty($_FILES['foto_member']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/member/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 300;
            	$config['min_height'] = 300;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_member')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Association',
								'sub_menunya' => 'Member',
								'sub_menunya2' => '',
								'datanya' => $this->db->get_where('members',array('id_member' => $id))->row(),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('association/member/update',$error);
					$this->load->view('partial/footer');
	            }else{
	                unlink('./asset/backend/upload/member/'.$row_cli->foto_member);
	                $image    				= $this->upload->data();
	                $data['foto_member'] 	= $image['file_name'];

					$execute = $this->db->update('members',$data,array('id_member' => $id));
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/member');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Tidak bisa mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/association/member');
					}
	            }
	        }else{
	        	$execute = $this->db->update('members',$data,array('id_member' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/association/member');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/association/member');
				}
	        }
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'Member',
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('members',array('id_member' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/member/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('members', array('id_member' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/member/'.$row_cli->foto_member);
      
        $execute = $this->db->delete('members',array('id_member' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/member');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/member');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'Member',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('members',array('id_member' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/member/detail');
		$this->load->view('partial/footer');
	}
}
