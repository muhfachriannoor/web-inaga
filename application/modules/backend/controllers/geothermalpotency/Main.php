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
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'datanya' => $this->db->order_by('id_potency', 'DESC')->get('geothermal_potency'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/main/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/main/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('text_overview_resources','Overview Geothermal Resources','required');
		$this->form_validation->set_rules('text_overview_workingarea','Overview Geothermal Working Area','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if (empty($_FILES['foto_map']['name']))
		{
			$this->form_validation->set_rules('foto_map','Foto','required');
		}

		if($this->form_validation->run() != false){
			$text_overview_resources 	= $this->input->post('text_overview_resources');
			$text_overview_workingarea 	= $this->input->post('text_overview_workingarea');
			$data = array(
						'text_overview_resources' => $text_overview_resources,
						'text_overview_workingarea' => $text_overview_workingarea,
					);
			if (!empty($_FILES['foto_map']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/map/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_map')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Geothermal Potency',
								'sub_menunya' => 'Main Page',
								'sub_menunya2' => '',
							);
					$this->load->view('partial/header', $test);
					$this->load->view('geothermalpotency/main/create',$error);
					$this->load->view('partial/footer');
	            }else{
	                $image = $this->upload->data();
	                $foto = $data['foto_map'] = $image['file_name'];
	                $execute = $this->db->insert('geothermal_potency',$data);
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil menambahkan data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/geothermalpotency/main');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Gagal Menambahkan Data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/geothermalpotency/main');
					}
	            }
	        }
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/main/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('geothermal_potency',array('id_potency' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/main/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('geothermal_potency', array('id_potency' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('text_overview_resources','Overview Geothermal Resources','required');
		$this->form_validation->set_rules('text_overview_workingarea','Overview Geothermal Working Area','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$text_overview_resources 	= $this->input->post('text_overview_resources');
			$text_overview_workingarea 	= $this->input->post('text_overview_workingarea');
			$data = array(
						'text_overview_resources' => $text_overview_resources,
						'text_overview_workingarea' => $text_overview_workingarea,
					);

	        if(!empty($_FILES['foto_map']['name'])) {
	            $config['upload_path'] = './asset/backend/upload/map/';
	            $config['allowed_types'] = 'jpg|png|jpeg|';
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_map')) {
	                $error = array('error' => $this->upload->display_errors());
	            	$test = array(
								'menunya' => 'Geothermal Potency',
								'sub_menunya' => 'Main Page',
								'sub_menunya2' => '',
								'datanya' => $this->db->get_where('geothermal_potency',array('id_potency' => $id))->row(),
							);
					$this->load->view('partial/header', $test);
					$this->load->view('geothermalpotency/main/update',$error);
					$this->load->view('partial/footer');
	            }else{
	                unlink('./asset/backend/upload/map/'.$row_cli->foto_map);
	                $image    				= $this->upload->data();
	                $data['foto_map'] 	= $image['file_name'];

					$execute = $this->db->update('geothermal_potency',$data,array('id_potency' => $id));
					if($execute == TRUE) {
						$alert =
							'<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Sukses!</h4>
								Berhasil mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/geothermalpotency/main');
					}else{
						$alert =
							'<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
								Tidak bisa mengubah data!
							</div>';
						$session = $this->session->set_flashdata('alert', $alert);
						redirect('backend/geothermalpotency/main');
					}
	            }
	        }else{
	        	$execute = $this->db->update('geothermal_potency',$data,array('id_potency' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/geothermalpotency/main');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/geothermalpotency/main');
				}
	        }
		}else{
			$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('geothermal_potency',array('id_potency' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalpotency/main/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('geothermal_potency', array('id_potency' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/map/'.$row_cli->foto_map);
      
        $execute = $this->db->delete('geothermal_potency',array('id_potency' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/main');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalpotency/main');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Geothermal Potency',
					'sub_menunya' => 'Main Page',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('geothermal_potency',array('id_potency' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalpotency/main/detail');
		$this->load->view('partial/footer');
	}
}
