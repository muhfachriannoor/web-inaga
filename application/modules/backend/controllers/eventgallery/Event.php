<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller {
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
					'sub_menunya' => 'Event',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_event', 'DESC')->get('event'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('eventgallery/event/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Event',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('eventgallery/event/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('nama_event','Name','required');
		$this->form_validation->set_rules('mulaiberakhir','Start End','required');
		$this->form_validation->set_rules('lokasi_event','Location','required');
		$this->form_validation->set_rules('deskripsi_event','Description','required');
		$this->form_validation->set_rules('website','Start End');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_event']['name']))
		{
			$this->form_validation->set_rules('foto_event','Foto','required');
		}

		if($this->form_validation->run() != false){
			$nama_event 		= $this->input->post('nama_event');
			$mulaiberakhir 		= $this->input->post('mulaiberakhir');
			$lokasi_event 		= $this->input->post('lokasi_event');
			$deskripsi_event 	= $this->input->post('deskripsi_event');
			$website 			= $this->input->post('website');

			//slug
			$text = trim($nama_event);
			$text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
			$text = strtolower(trim($text));
			$text = str_replace(' ', '-', $text);
			$text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
			$slug_event	= $text;

			//potong event mulai berakhir
			$potong 		= explode('-', $mulaiberakhir);

			$mulai 			= date('Y-m-d',strtotime($potong[0]));
			$jam1 			= date('h:i:s',strtotime($potong[0]));
			$mulai_event 	= $mulai.' '.$jam1;

			$berakhir 		= date('Y-m-d',strtotime($potong[1]));
			$jam2 			= date('h:i:s',strtotime($potong[1]));
			$berakhir_event = $berakhir.' '.$jam2;

			$data = array(
						'nama_event' => $nama_event,
						'mulai_event' => $mulai_event,
						'berakhir_event' => $berakhir_event,
						'lokasi_event' => $lokasi_event,
						'website_event' => $website,
						'deskripsi_event' => $deskripsi_event,
						'slug_event' => $slug_event,
					);
			if (!empty($_FILES['foto_event']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/event/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 900;
            	$config['min_height'] = 540;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_event')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Event & Gallery',
								'sub_menunya' => 'Event',
								'sub_menunya2' => '',
							);
					$this->load->view('partial/header', $test);
					$this->load->view('eventgallery/event/create',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto_event'] = $image['file_name'];
	                $execute = $this->db->insert('event',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/eventgallery/event');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/eventgallery/event');
					}
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Event',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('eventgallery/event/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Event',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('event',array('id_event' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('eventgallery/event/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('event', array('id_event' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('nama_event','Name','required');
		$this->form_validation->set_rules('mulaiberakhir','Start End','required');
		$this->form_validation->set_rules('lokasi_event','Location','required');
		$this->form_validation->set_rules('deskripsi_event','Description','required');
		$this->form_validation->set_rules('website','Start End');
		$this->form_validation->set_message('required', 'Wajib diisi');
		
		if($this->form_validation->run() != false){
			$nama_event 		= $this->input->post('nama_event');
			$mulaiberakhir 		= $this->input->post('mulaiberakhir');
			$lokasi_event 		= $this->input->post('lokasi_event');
			$deskripsi_event 	= $this->input->post('deskripsi_event');
			$website 			= $this->input->post('website');

			//slug
			$text = trim($nama_event);
			$text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
			$text = strtolower(trim($text));
			$text = str_replace(' ', '-', $text);
			$text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
			$slug_event	= $text;

			//potong event mulai berakhir
			$potong 		= explode('-', $mulaiberakhir);

			$mulai 			= date('Y-m-d',strtotime($potong[0]));
			$jam1 			= date('h:i:s',strtotime($potong[0]));
			$mulai_event 	= $mulai.' '.$jam1;

			$berakhir 		= date('Y-m-d',strtotime($potong[1]));
			$jam2 			= date('h:i:s',strtotime($potong[1]));
			$berakhir_event = $berakhir.' '.$jam2;

			$data = array(
						'nama_event' => $nama_event,
						'mulai_event' => $mulai_event,
						'berakhir_event' => $berakhir_event,
						'lokasi_event' => $lokasi_event,
						'website_event' => $website,
						'deskripsi_event' => $deskripsi_event,
						'slug_event' => $slug_event,
					);

	        if(!empty($_FILES['foto_event']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/event/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 900;
            	$config['min_height'] = 540;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_event')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Event & Gallery',
								'sub_menunya' => 'Event',
								'sub_menunya2' => '',
								'datanya' => $this->db->get_where('event',array('id_event' => $id))->row(),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('eventgallery/event/update',$error);
					$this->load->view('partial/footer');
	            }else{
	                unlink('./asset/backend/upload/event/'.$row_cli->foto_event);
	                $image    				= $this->upload->data();
	                $data['foto_event'] 	= $image['file_name'];

					$execute = $this->db->update('event',$data,array('id_event' => $id));
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/eventgallery/event');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Tidak bisa mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/eventgallery/event');
					}
	            }
	        }else{
	        	$execute = $this->db->update('event',$data,array('id_event' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/eventgallery/event');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/eventgallery/event');
				}
	        }
		}else{
			$data = array(
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Event',
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('event',array('id_event' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('eventgallery/event/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('event', array('id_event' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/event/'.$row_cli->foto_event);
      
        $execute = $this->db->delete('event',array('id_event' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/eventgallery/event');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/eventgallery/event');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Event',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('event',array('id_event' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('eventgallery/event/detail');
		$this->load->view('partial/footer');
	}
}
