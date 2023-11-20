<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workingarea extends MY_Controller {
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
		$query 	= $this->db->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->group_by('geothermal_workingarea.id_province')->order_by('geothermal_workingarea.id_province','ASC')->get('geothermal_workingarea');
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => '',
					'datanya' => $query,
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/workingarea/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/workingarea/create');
		$this->load->view('partial/footer');
	}

	public function up($island)
	{
		$this->form_validation->set_rules('id_province','Province','required|callback_select_validate');
		$this->form_validation->set_rules('gwa_name','GWA name','required');
		$this->form_validation->set_rules('developer','Developer','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_province 	= $this->input->post('id_province');
			$gwa_name 		= $this->input->post('gwa_name');
			$developer 		= $this->input->post('developer');
			$data = array(
						'id_province' => $id_province,
						'gwa_name' => $gwa_name,
						'developer' => $developer,
					);
            $execute = $this->db->insert('geothermal_workingarea',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/workingarea/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('geothermal_workingarea',array('id_workingarea' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/workingarea/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
        $this->form_validation->set_rules('id_province','Province','required|callback_select_validate');
		$this->form_validation->set_rules('gwa_name','GWA name','required');
		$this->form_validation->set_rules('developer','Developer','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_province 	= $this->input->post('id_province');
			$gwa_name 		= $this->input->post('gwa_name');
			$developer 		= $this->input->post('developer');
			$data = array(
						'id_province' => $id_province,
						'gwa_name' => $gwa_name,
						'developer' => $developer,
					);
			$execute = $this->db->update('geothermal_workingarea',$data,array('id_workingarea' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('geothermal_workingarea',array('id_workingarea' => $id))->row(),
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/workingarea/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $execute = $this->db->delete('geothermal_workingarea',array('id_workingarea' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/workingarea');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/workingarea');
		}
	}

	public function detail($id)
	{
		$query = $this->db->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->order_by('geothermal_workingarea.id_province','ASC')->where('id_workingarea',$id)->get('geothermal_workingarea')->row();
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => '',
					'datanya' => $query,
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/workingarea/detail');
		$this->load->view('partial/footer');
	}


	function select_validate()
	{
		$id_province = $this->input->post('id_province');
		if($id_province == 'none') {
			$this->form_validation->set_message('select_validate', 'Select Province!');
			return false;
		}else{
			return true;
		}
	}
}
