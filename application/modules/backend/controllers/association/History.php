<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends MY_Controller {
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
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'sejarah' => $this->db->order_by('id_sejarahapi', 'DESC')->get('sejarah_api'),
					'objective' => $this->db->order_by('id_objective', 'DESC')->get('objective'),
					'president' => $this->db->order_by('id_president', 'DESC')->get('president'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/history/index');
		$this->load->view('partial/footer');
	}

	//History of API
	public function create()
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/history/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('text_sejarah','Text','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$text_sejarah 	= $this->input->post('text_sejarah');
			$data = array(
						'text_sejarah' => $text_sejarah,
					);
            $execute = $this->db->insert('sejarah_api',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/history');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/history');
			}
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/aboutus/history/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'datanya' => $this->db->get_where('sejarah_api',array('id_sejarahapi' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/history/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('sejarah_api', array('id_sejarahapi' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('text_sejarah','Text','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$text_sejarah 	= $this->input->post('text_sejarah');
			$data = array(
						'text_sejarah' => $text_sejarah,
					);
			$execute = $this->db->update('sejarah_api',$data,array('id_sejarahapi' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/history');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/history');
			}
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'error' => '',
					'datanya' => $this->db->get_where('sejarah_api',array('id_sejarahapi' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/aboutus/history/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('sejarah_api', array('id_sejarahapi' => $id));
        $row_cli    = $select_cli->row();
      
        $execute = $this->db->delete('sejarah_api',array('id_sejarahapi' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/aboutus/history');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/aboutus/history');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'datanya' => $this->db->get_where('sejarah_api',array('id_sejarahapi' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/history/detail');
		$this->load->view('partial/footer');
	}

	//Objective
	public function create2()
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/history/create2');
		$this->load->view('partial/footer');
	}

	public function up2()
	{
		$this->form_validation->set_rules('text_objective','Text','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$text_objective 	= $this->input->post('text_objective');
			$data = array(
						'text_objective' => $text_objective,
					);
            $execute = $this->db->insert('objective',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/association/aboutus/history');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/association/aboutus/history');
			}
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/aboutus/history/create2');
			$this->load->view('partial/footer');
		}
	}

	public function update2($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'datanya' => $this->db->get_where('objective',array('id_objective' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/history/update2');
		$this->load->view('partial/footer');
	}

	public function down2($id)
	{
		$select_cli = $this->db->get_where('objective', array('id_objective' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('text_objective','Text','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$text_objective 	= $this->input->post('text_objective');
			$data = array(
						'text_objective' => $text_objective,
					);
			$execute = $this->db->update('objective',$data,array('id_objective' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/association/aboutus/history');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/association/aboutus/history');
			}
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'error' => '',
					'datanya' => $this->db->get_where('objective',array('id_objective' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/aboutus/history/update2');
			$this->load->view('partial/footer');
		}
	}

	public function delete2($id)
	{
        $select_cli = $this->db->get_where('objective', array('id_objective' => $id));
        $row_cli    = $select_cli->row();
      
        $execute = $this->db->delete('objective',array('id_objective' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert2', $alert);
			redirect('backend/association/aboutus/history');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert2', $alert);
			redirect('backend/association/aboutus/history');
		}
	}

	public function detail2($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'datanya' => $this->db->get_where('objective',array('id_objective' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/history/detail2');
		$this->load->view('partial/footer');
	}

	//President
	public function create3()
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/history/create3');
		$this->load->view('partial/footer');
	}

	public function up3()
	{
		$this->form_validation->set_rules('nama','Name','required');
		$this->form_validation->set_rules('masa_jabatan','Term of office','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_president']['name']))
		{
			$this->form_validation->set_rules('foto_president','Foto','required');
		}

		if($this->form_validation->run() != false){
			$nama 			= $this->input->post('nama');
			$masa_jabatan 	= $this->input->post('masa_jabatan');
			$data = array(
						'nama_president' => $nama,
						'masa_jabatan' => $masa_jabatan,
					);
			if (!empty($_FILES['foto_president']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/president/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 300;
            	$config['min_height'] = 300;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_president')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Association',
								'sub_menunya' => 'About Us',
								'sub_menunya2' => 'History',
							);
					$this->load->view('partial/header', $test);
					$this->load->view('association/aboutus/history/create3',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto_president'] = $image['file_name'];
	                $execute = $this->db->insert('president',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert3', $alert);
						redirect('backend/association/aboutus/history');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert3', $alert);
						redirect('backend/association/aboutus/history');
					}
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/aboutus/history/create3');
			$this->load->view('partial/footer');
		}
	}

	public function update3($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'datanya' => $this->db->get_where('president',array('id_president' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/history/update3');
		$this->load->view('partial/footer');
	}

	public function down3($id)
	{
		$select_cli = $this->db->get_where('president', array('id_president' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('nama','Name','required');
		$this->form_validation->set_rules('masa_jabatan','Term of office','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama 			= $this->input->post('nama');
			$masa_jabatan 	= $this->input->post('masa_jabatan');
			$data = array(
						'nama_president' => $nama,
						'masa_jabatan' => $masa_jabatan,
					);

	        if(!empty($_FILES['foto_president']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/president/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 300;
            	$config['min_height'] = 300;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_president')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Association',
								'sub_menunya' => 'About Us',
								'sub_menunya2' => 'History',
								'datanya' => $this->db->get_where('president',array('id_president' => $id))->row(),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('association/aboutus/history/update3',$error);
					$this->load->view('partial/footer');
	            }else{
	                unlink('./asset/backend/upload/president/'.$row_cli->foto_president);
	                $image    					= $this->upload->data();
	                $data['foto_president'] 	= $image['file_name'];

					$execute = $this->db->update('president',$data,array('id_president' => $id));
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert3', $alert);
						redirect('backend/association/aboutus/history');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Tidak bisa mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert3', $alert);
						redirect('backend/association/aboutus/history');
					}
	            }
	        }else{
	        	$execute = $this->db->update('president',$data,array('id_president' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert3', $alert);
					redirect('backend/association/aboutus/history');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert3', $alert);
					redirect('backend/association/aboutus/history');
				}
	        }
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'Hisotry',
					'error' => '',
					'datanya' => $this->db->get_where('president',array('id_president' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/aboutus/history/update3');
			$this->load->view('partial/footer');
		}
	}

	public function delete3($id)
	{
        $select_cli = $this->db->get_where('president', array('id_president' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/president/'.$row_cli->foto_president);
      
        $execute = $this->db->delete('president',array('id_president' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert3', $alert);
			redirect('backend/association/aboutus/history');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert3', $alert);
			redirect('backend/association/aboutus/history');
		}
	}

	public function detail3($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'History',
					'datanya' => $this->db->get_where('president',array('id_president' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/history/detail3');
		$this->load->view('partial/footer');
	}
}
