<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {
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
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_business', 'DESC')->get('geothermal_business'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/main/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/main/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('description_business','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$description_business 	= $this->input->post('description_business');
			$data = array(
						'description_business' => $description_business,
					);
			
            $execute = $this->db->insert('geothermal_business',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalbusiness/main');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalbusiness/main');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalbusiness/main/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('geothermal_business',array('id_business' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/main/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
        $this->form_validation->set_rules('description_business','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$description_business 	= $this->input->post('description_business');
			$data = array(
						'description_business' => $description_business,
					);

			$execute = $this->db->update('geothermal_business',$data,array('id_business' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalbusiness/main');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalbusiness/main');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('geothermal_business',array('id_business' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalbusiness/main/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $execute = $this->db->delete('geothermal_business',array('id_business' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalbusiness/main');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalbusiness/main');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('geothermal_business',array('id_business' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/main/detail');
		$this->load->view('partial/footer');
	}
}
