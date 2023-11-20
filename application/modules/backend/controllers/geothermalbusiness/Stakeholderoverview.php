<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stakeholderoverview extends MY_Controller {
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
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Stakeholder Overview',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_stakeholder_overview', 'DESC')->get('stakeholder_overview'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/stakeholderoverview/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Stakeholder Overview',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/stakeholderoverview/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('text_overview','Text Overview','required');
		$this->form_validation->set_message('required', 'Wajib diisi');


		if($this->form_validation->run() != false){
			$text_overview 	= $this->input->post('text_overview');
			$data = array(
						'text_overview' => $text_overview,
					);
			
            $execute = $this->db->insert('stakeholder_overview',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalbusiness/stakeholder-overview');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalbusiness/stakeholder-overview');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Stakeholder Overview',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalbusiness/stakeholderoverview/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Stakeholder Overview',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('stakeholder_overview',array('id_stakeholder_overview' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/stakeholderoverview/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
      	$this->form_validation->set_rules('text_overview','Text Overview','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$text_overview 	= $this->input->post('text_overview');
			$data = array(
						'text_overview' => $text_overview,
					);
			$execute = $this->db->update('stakeholder_overview',$data,array('id_stakeholder_overview' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalbusiness/stakeholder-overview');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalbusiness/stakeholder-overview');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Stakeholder Overview',
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('stakeholde_overviewr',array('id_stakeholder_overview' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalbusiness/stakeholderoverview/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $execute = $this->db->delete('stakeholder_overview',array('id_stakeholder_overview' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalbusiness/stakeholder-overview');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalbusiness/stakeholder-overview');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Stakeholder Overview',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('stakeholder_overview',array('id_stakeholder_overview' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/stakeholderoverview/detail');
		$this->load->view('partial/footer');
	}
}
