<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visionmission extends MY_Controller {
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
					'sub_menunya2' => 'Vision & Mission',
					'datanya' => $this->db->order_by('id_visi', 'DESC')->get('visionmission'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/visionmission/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'Vision & Mission',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/visionmission/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('visimisi','Vision & Mission','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$visimisi 	= $this->input->post('visimisi');
			$data = array(
						'visimisi' => $visimisi,
					);
            $execute = $this->db->insert('visionmission',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/visionmission');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/visionmission');
			}
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'Vision & Mission',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/aboutus/visionmission/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'Vision & Mission',
					'datanya' => $this->db->get_where('visionmission',array('id_visi' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/visionmission/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('visionmission', array('id_visi' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('visimisi','Vision & Mission','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$visimisi 	= $this->input->post('visimisi');
			$data = array(
						'visimisi' => $visimisi,
					);
			$execute = $this->db->update('visionmission',$data,array('id_visi' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/visionmission');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/visionmission');
			}
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'Vision & Mission',
					'error' => '',
					'datanya' => $this->db->get_where('visionmission',array('id_visi' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/aboutus/visionmission/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('visionmission', array('id_visi' => $id));
        $row_cli    = $select_cli->row();
      
        $execute = $this->db->delete('visionmission',array('id_visi' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/aboutus/visionmission');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/aboutus/visionmission');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'Vision & Mission',
					'datanya' => $this->db->get_where('visionmission',array('id_visi' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/visionmission/detail');
		$this->load->view('partial/footer');
	}
}