<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tender extends MY_Controller {
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
		$query 	= $this->db->join('geothermal_workingarea', 'tender.id_workingarea = geothermal_workingarea.id_workingarea', 'inner')->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->group_by('geothermal_workingarea.id_province')->order_by('tender.id_tender','ASC')->get('tender');
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => 'Tender',
					'datanya' => $query,
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/tender/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => 'Tender',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/tender/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('id_province','Province','required|callback_select_validate');
		$this->form_validation->set_rules('gwa_name','GWA name','required|callback_select_validate2');
		$this->form_validation->set_rules('location','Disctrict Location','required');
		$this->form_validation->set_rules('potency','Potency','required');
		$this->form_validation->set_rules('development_plan','Development Plan','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_workingarea 	= $this->input->post('gwa_name');
			$location 			= $this->input->post('location');
			$potency 			= $this->input->post('potency');
			$development_plan 	= $this->input->post('development_plan');
			$data = array(
						'id_workingarea' => $id_workingarea,
						'location' => $location,
						'potency' => $potency,
						'development_plan' => $development_plan,
					);
            $execute = $this->db->insert('tender',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea/tender');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea/tender');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => 'Tender',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/workingarea/tender/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$datanya = $this->db->get_where('tender',array('id_tender' => $id))->row();
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => 'Tender',
					'datanya' => $datanya,
					'data_workingarea' => $this->db->get_where('geothermal_workingarea',array('id_workingarea' => $datanya->id_workingarea))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/tender/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
        $this->form_validation->set_rules('id_province','Province','required|callback_select_validate');
		$this->form_validation->set_rules('gwa_name','GWA name','required|callback_select_validate2');
		$this->form_validation->set_rules('location','Disctrict Location','required');
		$this->form_validation->set_rules('potency','Potency','required');
		$this->form_validation->set_rules('development_plan','Development Plan','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_workingarea 	= $this->input->post('gwa_name');
			$location 			= $this->input->post('location');
			$potency 			= $this->input->post('potency');
			$development_plan 	= $this->input->post('development_plan');
			$data = array(
						'id_workingarea' => $id_workingarea,
						'location' => $location,
						'potency' => $potency,
						'development_plan' => $development_plan,
					);
			$execute = $this->db->update('tender',$data,array('id_tender' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea/tender');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea/tender');
			}
		}else{
			$datanya = $this->db->get_where('tender',array('id_tender' => $id))->row();
			$data = array(
						'menunya' => 'Geothermal Potency',
						'sub_menunya' => 'Geothermal Working Area',
						'sub_menunya2' => 'Tender',
						'datanya' => $datanya,
						'data_workingarea' => $this->db->get_where('geothermal_workingarea',array('id_workingarea' => $datanya->id_workingarea))->row(),
						'error' => '',
					);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/tender/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $execute = $this->db->delete('tender',array('id_tender' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/workingarea/tender');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/workingarea/tender');
		}
	}

	public function detail($id)
	{
		$query 	= $this->db->join('geothermal_workingarea', 'tender.id_workingarea = geothermal_workingarea.id_workingarea', 'inner')->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->where('tender.id_tender',$id)->get('tender')->row();
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => 'Tender',
					'datanya' => $query,
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/tender/detail');
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

	function select_validate2()
	{
		$gwa_name = $this->input->post('gwa_name');
		if($gwa_name == 'none') {
			$this->form_validation->set_message('select_validate2', 'Select GWA Name!');
			return false;
		}else{
			return true;
		}
	}
}
