<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adsspace extends MY_Controller {
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
					'sub_menunya' => 'Ads Space',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_iklan', 'DESC')->get('adsspace'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('beranda/adsspace/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Beranda',
					'sub_menunya' => 'Ads Space',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('beranda/adsspace/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('nama_iklan','Name Ads Space','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_iklan']['name']))
		{
			$this->form_validation->set_rules('foto_iklan','Foto','required');
		}

		if($this->form_validation->run() != false){
			$nama_iklan 	= $this->input->post('nama_iklan');
			$data = array(
						'nama_iklan' => $nama_iklan,
					);
			if (!empty($_FILES['foto_iklan']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/adsspace/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 400;
            	$config['min_height'] = 400;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_iklan')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Beranda',
								'sub_menunya' => 'Ads Space',
								'sub_menunya2' => '',
							);
					$this->load->view('partial/header', $test);
					$this->load->view('beranda/adsspace/create',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto_iklan'] = $image['file_name'];
	                $execute = $this->db->insert('adsspace',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/beranda/adsspace');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/beranda/adsspace');
					}
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'Beranda',
					'sub_menunya' => 'Ads Space',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('beranda/adsspace/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Beranda',
					'sub_menunya' => 'Ads Space',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('adsspace',array('id_iklan' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('beranda/adsspace/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('adsspace', array('id_iklan' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('nama_iklan','Name Ads Space','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_iklan 	= $this->input->post('nama_iklan');
			$data = array(
						'nama_iklan' => $nama_iklan,
					);
	        if(!empty($_FILES['foto_iklan']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/adsspace/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 400;
            	$config['min_height'] = 400;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_iklan')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Beranda',
								'sub_menunya' => 'Ads Space',
								'sub_menunya2' => '',
								'datanya' => $this->db->get_where('adsspace',array('id_iklan' => $id))->row(),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('beranda/adsspace/update',$error);
					$this->load->view('partial/footer');
	            }else{
	                unlink('./asset/backend/upload/adsspace/'.$row_cli->foto_iklan);
	                $image    				= $this->upload->data();
	                $data['foto_iklan'] 	= $image['file_name'];

					$execute = $this->db->update('adsspace',$data,array('id_iklan' => $id));
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/beranda/adsspace');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Tidak bisa mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/beranda/adsspace');
					}
	            }
	        }else{
	        	$execute = $this->db->update('adsspace',$data,array('id_iklan' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/beranda/adsspace');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/beranda/adsspace');
				}
	        }
		}else{
			$data = array(
					'menunya' => 'Beranda',
					'sub_menunya' => 'Ads Space',
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('adsspace',array('id_iklan' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('beranda/adsspace/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('adsspace', array('id_iklan' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/adsspace/'.$row_cli->foto_iklan);
      
        $execute = $this->db->delete('adsspace',array('id_iklan' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/beranda/adsspace');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/beranda/adsspace');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Beranda',
					'sub_menunya' => 'Ads Space',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('adsspace',array('id_iklan' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('beranda/adsspace/detail');
		$this->load->view('partial/footer');
	}
}
