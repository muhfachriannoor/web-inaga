<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends MY_Controller {
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
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Indonesia Geothermal Story',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_nzte', 'DESC')->get('nzte_story'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('nzte/story/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Indonesia Geothermal Story',
					'sub_menunya2' => '',
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('nzte/story/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('description_nzte','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');


		if($this->form_validation->run() != false){
			$description_nzte 	= $this->input->post('description_nzte');

			$data = array(
						'description_nzte' => $description_nzte,
					);

            $execute = $this->db->insert('nzte_story',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/nzte/story');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/nzte/story');
			}
		}else{
			$data = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Indonesia Geothermal Story',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('nzte/story/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Indonesia Geothermal Story',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('nzte_story',array('id_nzte' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('nzte/story/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$this->form_validation->set_rules('description_nzte','Text','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$description_nzte 	= $this->input->post('description_nzte');

			$data = array(
						'description_nzte' => $description_nzte,
					);

			$execute = $this->db->update('nzte_story',$data,array('id_nzte' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/nzte/story');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/nzte/story');
			}
		}else{
			$data = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Indonesia Geothermal Story',
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('nzte_story',array('id_nzte' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('nzte/story/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $execute = $this->db->delete('nzte_story',array('id_nzte' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/nzte/story');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/nzte/story');
		}
	}

	public function detail($id)
	{
		$query = $this->db->where('id_nzte',$id)->get('nzte_story');
		$data = array(
					'menunya' => 'NZTE',
					'sub_menunya' => 'New Zealand Indonesia Geothermal Story',
					'sub_menunya2' => '',
					'datanya' => $query->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('nzte/story/detail');
		$this->load->view('partial/footer');
	}
}
