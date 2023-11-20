<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {
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
					'menunya' => 'News',
					'sub_menunya' => '',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_berita', 'DESC')->get('news'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('news/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'News',
					'sub_menunya' => '',
					'sub_menunya2' => '',
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('news/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		
		$this->form_validation->set_rules('judul_berita','Judul Berita','required');
		$this->form_validation->set_rules('text_berita','Text','required');
		$this->form_validation->set_rules('penulis','Author','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_berita']['name']))
		{
			$this->form_validation->set_rules('foto_berita','Foto','required');
		}

		if($this->form_validation->run() != false){
			$judul_berita 	= $this->input->post('judul_berita');
			$tanggal_berita = date('Y-m-d');
			$text_berita 	= $this->input->post('text_berita');

			$text = trim($judul_berita);
			$text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
			$text = strtolower(trim($text));
			$text = str_replace(' ', '-', $text);
			$text = $text_ori = preg_replace('/\-{2,}/', '-', $text);

			$slug_berita 	= $text;
			$penulis 		= $this->input->post('penulis');

			$data = array(
						'judul_berita' => $judul_berita,
						'tanggal_berita' => $tanggal_berita,
						'text_berita' => $text_berita,
						'penulis' => $penulis,
						'slug_berita' => $slug_berita,
					);
			if (!empty($_FILES['foto_berita']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/news/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 900;
            	$config['min_height'] = 540;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_berita')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'News',
								'sub_menunya' => '',
								'sub_menunya2' => '',
							);
					$this->load->view('partial/header', $test);
					$this->load->view('news/create',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto_berita'] = $image['file_name'];
	                $execute = $this->db->insert('news',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/news/');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/news/');
					}
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'News',
					'sub_menunya' => '',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('news/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'News',
					'sub_menunya' => '',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('news',array('id_berita' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('news/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('news', array('id_berita' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('judul_berita','Judul Berita','required');
		$this->form_validation->set_rules('text_berita','Text','required');
		$this->form_validation->set_rules('penulis','Author','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$judul_berita 	= $this->input->post('judul_berita');
			$tanggal_berita = date('Y-m-d');
			$text_berita 	= $this->input->post('text_berita');

			$text = trim($judul_berita);
			$text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
			$text = strtolower(trim($text));
			$text = str_replace(' ', '-', $text);
			$text = $text_ori = preg_replace('/\-{2,}/', '-', $text);

			$slug_berita 	= $text;
			$penulis 		= $this->input->post('penulis');

			$data = array(
						'judul_berita' => $judul_berita,
						'tanggal_berita' => $tanggal_berita,
						'text_berita' => $text_berita,
						'penulis' => $penulis,
						'slug_berita' => $slug_berita,
					);

	        if(!empty($_FILES['foto_berita']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/news/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 900;
            	$config['min_height'] = 540;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_berita')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'News',
								'sub_menunya' => '',
								'sub_menunya2' => '',
								'datanya' => $this->db->get_where('news',array('id_berita' => $id))->row(),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('news/update',$error);
					$this->load->view('partial/footer');
	            }else{
	                unlink('./asset/backend/upload/news/'.$row_cli->foto_berita);
	                $image    				= $this->upload->data();
	                $data['foto_berita'] 	= $image['file_name'];

					$execute = $this->db->update('news',$data,array('id_berita' => $id));
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/news/');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Tidak bisa mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/news/');
					}
	            }
	        }else{
				$execute = $this->db->update('news',$data,array('id_berita' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/news/');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/news/');
				}
	        }
		}else{
			$data = array(
					'menunya' => 'News',
					'sub_menunya' => '',
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('news',array('id_berita' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('news/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
		$select_cli = $this->db->get_where('news', array('id_berita' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/news/'.$row_cli->foto_berita);
      
        $execute = $this->db->delete('news',array('id_berita' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/news');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/news');
		}
	}

	public function detail($id)
	{
		$query = $this->db->where('news.id_berita',$id)->get('news');
		$data = array(
					'menunya' => 'News',
					'sub_menunya' => '',
					'sub_menunya2' => '',
					'datanya' => $query->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('news/detail');
		$this->load->view('partial/footer');
	}
}
