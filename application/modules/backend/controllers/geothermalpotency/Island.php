<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Island extends MY_Controller {
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
		$province = $this->db->join('island', 'province.id_island = island.id_island', 'inner')->order_by('province.id_province','ASC')->get('province');
		$district = $this->db->join('province', 'district.id_province = province.id_province', 'inner')->join('island', 'province.id_island = island.id_island', 'inner')->order_by('district.id_district','ASC')->get('district');
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'island' => $this->db->order_by('id_island', 'DESC')->get('island'),
					'province' => $province,
					'district' => $district,
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/island/index');
		$this->load->view('partial/footer');
	}

	//Island
	public function create()
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/island/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('nama_island','Island Name','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_island 	= $this->input->post('nama_island');
			$data = array(
						'nama_island' => $nama_island,
					);
            $execute = $this->db->insert('island',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/island');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/island');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/island/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('island',array('id_island' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/island/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
        $this->form_validation->set_rules('nama_island','Island Name','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_island 	= $this->input->post('nama_island');
			$data = array(
						'nama_island' => $nama_island,
					);
			$execute = $this->db->update('island',$data,array('id_island' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/island');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/geothermalpotency/island');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('island',array('id_island' => $id))->row(),
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/island/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $execute = $this->db->delete('island',array('id_island' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/island');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/island');
		}
	}

	//Province
	public function create2()
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/island/create2');
		$this->load->view('partial/footer');
	}

	public function up2()
	{
		$this->form_validation->set_rules('id_island','Island','required|callback_select_validate');
		$this->form_validation->set_rules('nama_province','Province Name','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_island 		= $this->input->post('id_island');
			$nama_province 	= $this->input->post('nama_province');
			$data = array(
						'id_island' => $id_island,
						'nama_province' => $nama_province,
					);
            $execute = $this->db->insert('province',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalpotency/island/');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalpotency/island/');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/island/create2');
			$this->load->view('partial/footer');
		}
	}

	public function update2($id)
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('province',array('id_province' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/island/update2');
		$this->load->view('partial/footer');
	}

	public function down2($id)
	{
		$this->form_validation->set_rules('id_island','Island','required|callback_select_validate');
		$this->form_validation->set_rules('nama_province','Province Name','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_island 		= $this->input->post('id_island');
			$nama_province 	= $this->input->post('nama_province');
			$data = array(
						'id_island' => $id_island,
						'nama_province' => $nama_province,
					);
			$execute = $this->db->update('province',$data,array('id_province' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalpotency/island');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalpotency/island');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('province',array('id_province' => $id))->row(),
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/island/update2');
			$this->load->view('partial/footer');
		}
	}

	public function delete2($id)
	{
        $execute = $this->db->delete('province',array('id_province' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert2', $alert);
			redirect('backend/geothermalpotency/island');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert2', $alert);
			redirect('backend/geothermalpotency/island');
		}
	}

	//President
	public function create3()
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/island/create3');
		$this->load->view('partial/footer');
	}

	public function up3()
	{
		$this->form_validation->set_rules('id_island','Island','required|callback_select_validate');
		$this->form_validation->set_rules('id_province','Province','required|callback_select_validate2');
		$this->form_validation->set_rules('nama_district','District Name','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_island 		= $this->input->post('id_island');
			$id_province 	= $this->input->post('id_province');
			$nama_district 	= $this->input->post('nama_district');
			$data = array(
						'id_province' => $id_province,
						'nama_district' => $nama_district,
					);
			$execute = $this->db->insert('district',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalpotency/island');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalpotency/island');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/island/create3');
			$this->load->view('partial/footer');
		}
	}

	public function update3($id)
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('district',array('id_district' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/island/update3');
		$this->load->view('partial/footer');
	}

	public function down3($id)
	{
        $this->form_validation->set_rules('id_island','Island','required|callback_select_validate');
		$this->form_validation->set_rules('id_province','Province','required|callback_select_validate2');
		$this->form_validation->set_rules('nama_district','District Name','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$id_island 		= $this->input->post('id_island');
			$id_province 	= $this->input->post('id_province');
			$nama_district 	= $this->input->post('nama_district');
			$data = array(
						'id_province' => $id_province,
						'nama_district' => $nama_district,
					);
			$execute = $this->db->update('district',$data,array('id_district' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalpotency/island');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalpotency/island');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Island, Province, District',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('district',array('id_district' => $id))->row(),
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/island/update3');
			$this->load->view('partial/footer');
		}
	}

	public function delete3($id)
	{
        $execute = $this->db->delete('district',array('id_district' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert3', $alert);
			redirect('backend/geothermalpotency/island');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert3', $alert);
			redirect('backend/geothermalpotency/island');
		}
	}

	function getprovince()
	{
		$id 	= $this->input->post('island_id');
		$query  = $this->db->where('id_island', $id)->order_by('nama_province', 'ASC')->get('province');
  		$output = '<option value="none" hidden="hidden">-- SELECT PROVINCE --</option>';
  		foreach($query->result() as $row) {
   			$output .= '<option value="'.$row->id_province.'">'.$row->nama_province.'</option>';
  		}
  		echo $output;
	}

	function getdistrict()
	{
		$id 	= $this->input->post('province_id');
		$query  = $this->db->where('id_province', $id)->order_by('nama_district', 'ASC')->get('district');
  		$output = '<option value="none" hidden="hidden">-- SELECT DISTRICT --</option>';
  		foreach($query->result() as $row) {
   			$output .= '<option value="'.$row->id_district.'">'.$row->nama_district.'</option>';
  		}
  		echo $output;
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
}
