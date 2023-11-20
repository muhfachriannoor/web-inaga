<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller {
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
		$query 	= $this->db->join('geothermal_workingarea', 'project.id_workingarea = geothermal_workingarea.id_workingarea', 'inner')->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->group_by('geothermal_workingarea.id_province')->order_by('project.id_project','ASC')->get('project');
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => 'Project & Activities',
					'datanya' => $query,
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/project/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => 'Project & Activities',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/project/create');
		$this->load->view('partial/footer');
	}

	function getgwaname()
	{
		$id 	= $this->input->post('province_id');
		$query  = $this->db->where('id_province', $id)->order_by('gwa_name', 'ASC')->get('geothermal_workingarea');
  		$output = '<option value="none" hidden="hidden">-- SELECT GWA NAME --</option>';
  		foreach($query->result() as $row) {
   			$output .= '<option value="'.$row->id_workingarea.'">'.$row->gwa_name.'</option>';
  		}
  		echo $output;
	}

	function getdeveloper()
	{
		$id 	= $this->input->post('gwa_name_id');
		$query  = $this->db->where('id_workingarea', $id)->get('geothermal_workingarea')->row();
		if($query == TRUE){
  			$output = '<input type="text" name="developer" id="developer_project" class="form-control" required="required" placeholder="Fill in the Developer.." value="'.$query->developer.'" readonly="readonly">';
  		}else{
  			$output = '<input type="text" name="developer" id="developer_project" class="form-control" required="required" placeholder="Fill in the Developer.." value="" readonly="readonly">';
  		}
  		echo $output;
	}

	public function up()
	{
		$this->form_validation->set_rules('id_province','Province','required|callback_select_validate');
		$this->form_validation->set_rules('gwa_name','GWA name','required|callback_select_validate2');
		$this->form_validation->set_rules('status','status','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_workingarea = $this->input->post('gwa_name');
			$status 		= $this->input->post('status');
			$data = array(
						'id_workingarea' => $id_workingarea,
						'status' => $status,
					);
            $execute = $this->db->insert('project',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea/project');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea/project');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => 'Project & Activities',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/workingarea/project/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$datanya = $this->db->get_where('project',array('id_project' => $id))->row();
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => 'Project & Activities',
					'datanya' => $datanya,
					'data_workingarea' => $this->db->get_where('geothermal_workingarea',array('id_workingarea' => $datanya->id_workingarea))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/project/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
        $this->form_validation->set_rules('id_province','Province','required|callback_select_validate');
		$this->form_validation->set_rules('gwa_name','GWA name','required|callback_select_validate2');
		$this->form_validation->set_rules('status','status','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_workingarea = $this->input->post('gwa_name');
			$status 		= $this->input->post('status');
			$data = array(
						'id_workingarea' => $id_workingarea,
						'status' => $status,
					);
			$execute = $this->db->update('project',$data,array('id_project' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea/project');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/workingarea/project');
			}
		}else{
			$datanya = $this->db->get_where('project',array('id_project' => $id))->row();
			$data = array(
						'menunya' => 'Geothermal Potency',
						'sub_menunya' => 'Geothermal Working Area',
						'sub_menunya2' => 'Project & Activities',
						'datanya' => $datanya,
						'data_workingarea' => $this->db->get_where('geothermal_workingarea',array('id_workingarea' => $datanya->id_workingarea))->row(),
						'error' => '',
					);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/project/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $execute = $this->db->delete('project',array('id_project' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/workingarea/project');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/workingarea/project');
		}
	}

	public function detail($id)
	{
		$query 	= $this->db->join('geothermal_workingarea', 'project.id_workingarea = geothermal_workingarea.id_workingarea', 'inner')->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->where('project.id_project',$id)->get('project')->row();
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Geothermal Working Area',
					'sub_menunya2' => 'Project & Activities',
					'datanya' => $query,
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/project/detail');
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
