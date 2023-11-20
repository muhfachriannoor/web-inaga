<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stakeholder extends MY_Controller {
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
					'sub_menunya' => 'Stakeholder Directory',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_stakeholder', 'DESC')->get('stakeholder'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/stakeholder/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Stakeholder Directory',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/stakeholder/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('nama_stakeholder','Name','required');
		$this->form_validation->set_rules('kategori','Category','required|callback_select_validate');
		$this->form_validation->set_rules('link_website','Category','required');
		$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto']['name']))
		{
			$this->form_validation->set_rules('foto','Foto','required');
		}

		if($this->form_validation->run() != false){
			$nama_stakeholder 	= $this->input->post('nama_stakeholder');
			$kategori 			= $this->input->post('kategori');
			$link_website 		= $this->input->post('link_website');
			$description 		= $this->input->post('description');
			$data = array(
						'nama_stakeholder' => $nama_stakeholder,
						'kategori' => $kategori,
						'link_website' => $link_website,
						'description' => $description,
					);
			if (!empty($_FILES['foto']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/stakeholder/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 500;
            	$config['min_height'] = 500;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Geothermal Business',
								'sub_menunya' => 'Stakeholder Directory',
								'sub_menunya2' => '',
							);
					$this->load->view('partial/header', $test);
					$this->load->view('geothermalbusiness/stakeholder/create',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto'] = $image['file_name'];
	                $execute = $this->db->insert('stakeholder',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/geothermalbusiness/stakeholder');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/geothermalbusiness/stakeholder');
					}
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Stakeholder Directory',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalbusiness/stakeholder/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Stakeholder Directory',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('stakeholder',array('id_stakeholder' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/stakeholder/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('stakeholder', array('id_stakeholder' => $id));
        $row_cli    = $select_cli->row();

      	$this->form_validation->set_rules('nama_stakeholder','Name','required');
		$this->form_validation->set_rules('kategori','Category','required|callback_select_validate');
		$this->form_validation->set_rules('link_website','Category','required');
		$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_stakeholder 	= $this->input->post('nama_stakeholder');
			$kategori 			= $this->input->post('kategori');
			$link_website 		= $this->input->post('link_website');
			$description 		= $this->input->post('description');
			$data = array(
						'nama_stakeholder' => $nama_stakeholder,
						'kategori' => $kategori,
						'link_website' => $link_website,
						'description' => $description,
					);

	        if(!empty($_FILES['foto']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/stakeholder/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $config['min_width'] = 500;
            	$config['min_height'] = 500;
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Geothermal Business',
								'sub_menunya' => 'Stakeholder Directory',
								'sub_menunya2' => '',
								'datanya' => $this->db->get_where('stakeholder',array('id_stakeholder' => $id))->row(),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('geothermalbusiness/stakeholder/update',$error);
					$this->load->view('partial/footer');
	            }else{
	                unlink('./asset/backend/upload/stakeholder/'.$row_cli->foto);
	                $image    				= $this->upload->data();
	                $data['foto'] 	= $image['file_name'];

					$execute = $this->db->update('stakeholder',$data,array('id_stakeholder' => $id));
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/geothermalbusiness/stakeholder');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Tidak bisa mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/geothermalbusiness/stakeholder');
					}
	            }
	        }else{
	        	$execute = $this->db->update('stakeholder',$data,array('id_stakeholder' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/geothermalbusiness/stakeholder');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/geothermalbusiness/stakeholder');
				}
	        }
		}else{
			$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Stakeholder Directory',
					'sub_menunya2' => '',
					'error' => '',
					'datanya' => $this->db->get_where('stakeholder',array('id_stakeholder' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalbusiness/stakeholder/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('stakeholder', array('id_stakeholder' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/stakeholder/'.$row_cli->foto);
      
        $execute = $this->db->delete('stakeholder',array('id_stakeholder' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalbusiness/stakeholder');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalbusiness/stakeholder');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Stakeholder Directory',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('stakeholder',array('id_stakeholder' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/stakeholder/detail');
		$this->load->view('partial/footer');
	}

	function select_validate()
	{
		$kategori = $this->input->post('kategori');
		if($kategori == 'none') {
			$this->form_validation->set_message('select_validate', 'Select Category!');
			return false;
		}else{
			return true;
		}
	}
}
