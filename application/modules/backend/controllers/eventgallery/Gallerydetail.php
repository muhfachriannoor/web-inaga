<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallerydetail extends MY_Controller {
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

	public function index($slug_galeri,$id_galeri)
	{
		$select_cli = $this->db->get_where('gallery', array('id_galeri' => $id_galeri));
        $row_cli    = $select_cli->row();

		$data = array(
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Gallery',
					'sub_menunya2' => '',
					'nama_galeri' => $row_cli->nama_galeri,
					'slug_galeri' => $slug_galeri,
					'id_galeri' => $id_galeri,
					'datanya' => $this->db->where('id_galeri', $id_galeri)->order_by('id_galeri_detail', 'DESC')->get('gallery_details'),
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('eventgallery/gallerydetail/index');
		$this->load->view('partial/footer');
	}

	public function up($slug_galeri,$id_galeri)
	{
		$select_cli = $this->db->get_where('gallery', array('id_galeri' => $id_galeri));
        $row_cli    = $select_cli->row();

		$this->form_validation->set_rules('nama_galeri_detail','Name','required');
		$this->form_validation->set_rules('deskripsi_galeri_detail','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_galeri_detail']['name']))
		{
			$this->form_validation->set_rules('foto_galeri_detail','Foto','required');
		}

		if($this->form_validation->run() != false){
			$nama_galeri_detail 		= $this->input->post('nama_galeri_detail');
			$deskripsi_galeri_detail 	= $this->input->post('deskripsi_galeri_detail');

			$data = array(
						'nama_galeri_detail' => $nama_galeri_detail,
						'deskripsi_galeri_detail' => $deskripsi_galeri_detail,
						'id_galeri' => $id_galeri,
					);
			if (!empty($_FILES['foto_galeri_detail']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/gallery/gallery_detail/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 900;
            	$config['min_height'] = 540;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_galeri_detail')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Event & Gallery',
								'menunya' => 'Event & Gallery',
								'sub_menunya' => 'Gallery',
								'sub_menunya2' => '',
								'nama_galeri' => $row_cli->nama_galeri,
								'slug_galeri' => $slug_galeri,
								'id_galeri' => $id_galeri,
								'datanya' => $this->db->where('id_galeri', $id_galeri)->order_by('id_galeri_detail', 'DESC')->get('gallery_details'),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('eventgallery/gallerydetail/index',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto_galeri_detail'] = $image['file_name'];
	                $execute = $this->db->insert('gallery_details',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/eventgallery/gallery/'.$slug_galeri.'/'.$id_galeri);
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/eventgallery/gallery/'.$slug_galeri.'/'.$id_galeri);
					}
	            }
	        }
		}else{
			$data = array(
						'menunya' => 'Event & Gallery',
						'sub_menunya' => 'Gallery',
						'sub_menunya2' => '',
						'nama_galeri' => $row_cli->nama_galeri,
						'slug_galeri' => $slug_galeri,
						'id_galeri' => $id_galeri,
						'datanya' => $this->db->where('id_galeri', $id_galeri)->order_by('id_galeri_detail', 'DESC')->get('gallery_details'),
						'error' => ''
					);
			$this->load->view('partial/header', $data);
			$this->load->view('eventgallery/gallerydetail/index');
			$this->load->view('partial/footer');
		}
	}

	public function delete($slug_galeri,$id_galeri,$id_galeri_detail)
	{
		$select_cli = $this->db->get_where('gallery_details', array('id_galeri_detail' => $id_galeri_detail));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/gallery/gallery_detail/'.$row_cli->foto_galeri_detail);
      
        $execute = $this->db->delete('gallery_details',array('id_galeri_detail' => $id_galeri_detail));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/eventgallery/gallery/'.$slug_galeri.'/'.$id_galeri);
			
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/eventgallery/gallery/'.$slug_galeri.'/'.$id_galeri);
		}	
	}
}
