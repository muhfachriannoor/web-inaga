<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {
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
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Gallery',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_galeri', 'DESC')->get('gallery'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('eventgallery/gallery/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Gallery',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('eventgallery/gallery/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('nama_galeri','Name','required');
		$this->form_validation->set_rules('tanggal_galeri','Date','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_galeri']['name']))
		{
			$this->form_validation->set_rules('foto_galeri','Foto','required');
		}

		if($this->form_validation->run() != false){
			$nama_galeri 		= $this->input->post('nama_galeri');
			$tanggal_galeri 	= date('Y-m-d',strtotime($this->input->post('tanggal_galeri')));

			//slug
			$text = trim($nama_galeri);
			$text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
			$text = strtolower(trim($text));
			$text = str_replace(' ', '-', $text);
			$text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
			$slug_galeri = $text;

			$data = array(
						'nama_galeri' => $nama_galeri,
						'tanggal_galeri' => $tanggal_galeri,
						'slug_galeri' => $slug_galeri,
					);
			if (!empty($_FILES['foto_galeri']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/gallery/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 900;
            	$config['min_height'] = 540;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_galeri')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Event & Gallery',
								'sub_menunya' => 'Gallery',
								'sub_menunya2' => '',
							);
					$this->load->view('partial/header', $test);
					$this->load->view('eventgallery/gallery/create',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto_galeri'] = $image['file_name'];
	                $execute = $this->db->insert('gallery',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/eventgallery/gallery');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/eventgallery/gallery');
					}
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Gallery',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('eventgallery/gallery/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Gallery',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('gallery',array('id_galeri' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('eventgallery/gallery/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('gallery', array('id_galeri' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('nama_galeri','Name','required');
		$this->form_validation->set_rules('tanggal_galeri','Date','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_galeri 		= $this->input->post('nama_galeri');
			$tanggal_galeri 	= date('Y-m-d',strtotime($this->input->post('tanggal_galeri')));

			//slug
			$text = trim($nama_galeri);
			$text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
			$text = strtolower(trim($text));
			$text = str_replace(' ', '-', $text);
			$text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
			$slug_galeri = $text;

			$data = array(
						'nama_galeri' => $nama_galeri,
						'tanggal_galeri' => $tanggal_galeri,
						'slug_galeri' => $slug_galeri,
					);

	        if(!empty($_FILES['foto_galeri']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/gallery/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 900;
            	$config['min_height'] = 540;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_galeri')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Event & Gallery',
								'sub_menunya' => 'Gallery',
								'sub_menunya2' => '',
								'datanya' => $this->db->get_where('gallery',array('id_galeri' => $id))->row(),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('eventgallery/gallery/update',$error);
					$this->load->view('partial/footer');
	            }else{
	                unlink('./asset/backend/upload/gallery/'.$row_cli->foto_galeri);
	                $image    				= $this->upload->data();
	                $data['foto_galeri'] 	= $image['file_name'];

					$execute = $this->db->update('gallery',$data,array('id_galeri' => $id));
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/eventgallery/gallery');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Tidak bisa mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/eventgallery/gallery');
					}
	            }
	        }else{
	        	$execute = $this->db->update('gallery',$data,array('id_galeri' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/eventgallery/gallery');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/eventgallery/gallery');
				}
	        }
		}else{
			$data = array(
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Gallery',
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('gallery',array('id_galeri' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('eventgallery/gallery/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('gallery', array('id_galeri' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/gallery/'.$row_cli->foto_galeri);
      
        $execute = $this->db->delete('gallery',array('id_galeri' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/eventgallery/gallery');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/eventgallery/gallery');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Gallery',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('gallery',array('id_galeri' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('eventgallery/gallery/detail');
		$this->load->view('partial/footer');
	}
}
