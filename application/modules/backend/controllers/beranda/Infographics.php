<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infographics extends MY_Controller {
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
					'menunya' => 'Beranda',
					'sub_menunya' => 'Info Graphics',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_infografis', 'DESC')->get('infographics'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('beranda/infographics/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Beranda',
					'sub_menunya' => 'Info Graphics',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('beranda/infographics/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('nama_infografis','Name Info Graphics','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_infografis']['name']))
		{
			$this->form_validation->set_rules('foto_infografis','Foto','required');
		}

		if($this->form_validation->run() != false){
			$nama_infografis 	= $this->input->post('nama_infografis');
			$data = array(
						'nama_infografis' => $nama_infografis,
					);
			if (!empty($_FILES['foto_infografis']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/infographics/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 400;
            	$config['min_height'] = 400;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_infografis')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Beranda',
								'sub_menunya' => 'Info Graphics',
								'sub_menunya2' => '',
							);
					$this->load->view('partial/header', $test);
					$this->load->view('beranda/infographics/create',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto_infografis'] = $image['file_name'];
	                $execute = $this->db->insert('infographics',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/beranda/infographics');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/beranda/infographics');
					}
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'Beranda',
					'sub_menunya' => 'Info Graphics',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('beranda/infographics/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Beranda',
					'sub_menunya' => 'Info Graphics',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('infographics',array('id_infografis' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('beranda/infographics/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('infographics', array('id_infografis' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('nama_infografis','Name Info Graphics','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_infografis 	= $this->input->post('nama_infografis');
			$data = array(
						'nama_infografis' => $nama_infografis,
					);
	        if(!empty($_FILES['foto_infografis']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/infographics/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 400;
            	$config['min_height'] = 400;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_infografis')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Beranda',
								'sub_menunya' => 'Info Graphics',
								'sub_menunya2' => '',
								'datanya' => $this->db->get_where('infographics',array('id_infografis' => $id))->row(),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('beranda/infographics/update',$error);
					$this->load->view('partial/footer');
	            }else{
	                unlink('./asset/backend/upload/infographics/'.$row_cli->foto_infografis);
	                $image    				= $this->upload->data();
	                $data['foto_infografis'] 	= $image['file_name'];

					$execute = $this->db->update('infographics',$data,array('id_infografis' => $id));
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/beranda/infographics');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Tidak bisa mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/beranda/infographics');
					}
	            }
	        }else{
	        	$execute = $this->db->update('infographics',$data,array('id_infografis' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/beranda/infographics');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/beranda/infographics');
				}
	        }
		}else{
			$data = array(
					'menunya' => 'Beranda',
					'sub_menunya' => 'Info Graphics',
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('infographics',array('id_infografis' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('beranda/infographics/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('infographics', array('id_infografis' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/infographics/'.$row_cli->foto_infografis);
      
        $execute = $this->db->delete('infographics',array('id_infografis' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/beranda/infographics');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/beranda/infographics');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Beranda',
					'sub_menunya' => 'Info Graphics',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('infographics',array('id_infografis' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('beranda/infographics/detail');
		$this->load->view('partial/footer');
	}
}
