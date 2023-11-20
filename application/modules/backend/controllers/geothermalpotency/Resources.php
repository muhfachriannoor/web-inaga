<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends MY_Controller {
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
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Resources',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('nama_island', 'ASC')->get('island'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/resources/index');
		$this->load->view('partial/footer');
	}

	public function island($island)
	{
		$test 	= $this->db->get_where('island',array('nama_island' => $island))->row();
		$query 	= $this->db->join('district', 'geothermal_resources.id_district = district.id_district', 'inner')->join('province', 'district.id_province = province.id_province', 'inner')->join('island', 'province.id_island = island.id_island', 'inner')->order_by('district.id_district','ASC')->where('geothermal_resources.id_island', $test->id_island)->get('geothermal_resources');
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Resources',
					'sub_menunya2' => '',
					'datanya' => $query,
					'island' => $island,
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/resources/island');
		$this->load->view('partial/footer');
	}

	public function create($island)
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Resources',
					'sub_menunya2' => '',
					'island' => $island,
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/resources/create');
		$this->load->view('partial/footer');
	}

	public function up($island)
	{
		$this->form_validation->set_rules('id_island','Island','required|callback_select_validate');
		$this->form_validation->set_rules('id_province','Province','required|callback_select_validate2');
		$this->form_validation->set_rules('id_district','District','required|callback_select_validate3');
		$this->form_validation->set_rules('index_no','Index No.','required');
		$this->form_validation->set_rules('field_name','Field Name','required');
		$this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_island 		= $this->input->post('id_island');
			$id_province 	= $this->input->post('id_province');
			$id_district 	= $this->input->post('id_district');
			$index_no 		= $this->input->post('index_no');
			$field_name 	= $this->input->post('field_name');
			$status 		= $this->input->post('status');
			$data = array(
						'id_island' => $id_island,
						'id_province' => $id_province,
						'id_district' => $id_district,
						'index_no' => $index_no,
						'field_name' => $field_name,
						'status' => $status,
					);
			
            $execute = $this->db->insert('geothermal_resources',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/resources/island/'.$island);
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/resources/island/'.$island);
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Resources',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/resources/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($island,$id)
	{
		$test 	= $this->db->get_where('island',array('nama_island' => $island))->row();
		$query 	= $this->db->join('district', 'geothermal_resources.id_district = district.id_district', 'inner')->join('province', 'district.id_province = province.id_province', 'inner')->join('island', 'province.id_island = island.id_island', 'inner')->order_by('district.id_district','ASC')->where('geothermal_resources.id_resources', $id)->get('geothermal_resources')->row();
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Resources',
					'sub_menunya2' => '',
					'datanya' => $query,
					'island' => $island,
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/resources/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
        $this->form_validation->set_rules('id_island','Island','required|callback_select_validate');
		$this->form_validation->set_rules('id_province','Province','required|callback_select_validate2');
		$this->form_validation->set_rules('id_district','District','required|callback_select_validate3');
		$this->form_validation->set_rules('index_no','Index No.','required');
		$this->form_validation->set_rules('field_name','Field Name','required');
		$this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_island 		= $this->input->post('id_island');
			$id_province 	= $this->input->post('id_province');
			$id_district 	= $this->input->post('id_district');
			$index_no 		= $this->input->post('index_no');
			$field_name 	= $this->input->post('field_name');
			$status 		= $this->input->post('status');
			$data = array(
						'id_island' => $id_island,
						'id_province' => $id_province,
						'id_district' => $id_district,
						'index_no' => $index_no,
						'field_name' => $field_name,
						'status' => $status,
					);

			$execute = $this->db->update('geothermal_resources',$data,array('id_resources' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/resources');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/resources');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Resources',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('geothermal_resources',array('id_resources' => $id))->row(),
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/resources/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $execute = $this->db->delete('geothermal_resources',array('id_resources' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/resources');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/resources');
		}
	}

	public function detail($id)
	{
		$query 	= $this->db->join('district', 'geothermal_resources.id_district = district.id_district', 'inner')->join('province', 'district.id_province = province.id_province', 'inner')->join('island', 'province.id_island = island.id_island', 'inner')->order_by('district.id_district','ASC')->where('geothermal_resources.id_resources', $id)->get('geothermal_resources')->row();
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Resources',
					'sub_menunya2' => '',
					'datanya' => $query,
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/resources/detail');
		$this->load->view('partial/footer');
	}

	function select_validate()
	{
		$id_island = $this->input->post('id_island');
		if($id_island == 'none') {
			$this->form_validation->set_message('select_validate', 'Select Island!');
			return false;
		}else{
			return true;
		}
	}

	function select_validate2()
	{
		$id_province = $this->input->post('id_province');
		if($id_province == 'none') {
			$this->form_validation->set_message('select_validate2', 'Select Province!');
			return false;
		}else{
			return true;
		}
	}

	function select_validate3()
	{
		$id_district = $this->input->post('id_district');
		if($id_district == 'none') {
			$this->form_validation->set_message('select_validate3', 'Select District!');
			return false;
		}else{
			return true;
		}
	}
}
