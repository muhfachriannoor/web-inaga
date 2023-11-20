<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatedregulation extends MY_Controller {
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
		$regulation = $this->db->join('category_related_regulation', 'related_regulation.id_kategori_related = category_related_regulation.id_kategori_related', 'inner')->order_by('related_regulation.id_related_regulation','ASC')->get('related_regulation');
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Related Regulation',
					'sub_menunya2' => '',
					'category' => $this->db->order_by('id_kategori_related', 'DESC')->get('category_related_regulation'),
					'regulation' => $regulation,
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/relatedregulation/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Related Regulation',
					'sub_menunya2' => '',
					'pdf_ind_error' => '',
					'pdf_eng_error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/relatedregulation/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('id_kategori_related','Category','required|callback_select_validate');
		$this->form_validation->set_rules('nama_regulation_ind','Regulation name','required');
		$this->form_validation->set_rules('nama_regulation_eng','Regulation name','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_regulation_ind 	 	= $this->input->post('nama_regulation_ind');
			$nama_regulation_eng 	 	= $this->input->post('nama_regulation_eng');
			$id_kategori_related 	= $this->input->post('id_kategori_related');

			$data = array(
						'nama_regulation_ind' => $nama_regulation_ind,
						'nama_regulation_eng' => $nama_regulation_eng,
						'id_kategori_related' => $id_kategori_related,
					);
			$error = array(
            			'pdf_ind_error' => '',
            			'pdf_eng_error' => '',
        			);
			if (!empty($_FILES['pdf_ind']['name'])) {
				$config = array();
	            $config['upload_path'] = './asset/backend/upload/regulation/relatedregulation/IND/';
	            $config['allowed_types'] = 'pdf';
	            $this->load->library('upload', $config, 'pdf_ind');
	            $this->pdf_ind->initialize($config);
	            $pdf_ind = $this->pdf_ind->do_upload('pdf_ind');
	            if ($pdf_ind) {
	            	$file = $this->pdf_ind->data();
	                $data['pdf_ind'] = $file['file_name'];
	            } else {
	            	$error['pdf_ind_error'] = $this->pdf_ind->display_errors();
	            }
			}
			if (!empty($_FILES['pdf_eng']['name'])) {
				$config = array();
	            $config['upload_path'] = './asset/backend/upload/regulation/relatedregulation/ENG/';
	            $config['allowed_types'] = 'pdf';
	            $this->load->library('upload', $config, 'pdf_eng');
	            $this->pdf_eng->initialize($config);
	            $pdf_eng = $this->pdf_eng->do_upload('pdf_eng');
	            if ($pdf_eng) {
	            	$file = $this->pdf_eng->data();
	                $data['pdf_eng'] = $file['file_name'];
	            } else {
	            	$error['pdf_eng_error'] = $this->pdf_eng->display_errors();
	            }
			}
			if($error['pdf_ind_error'] != '' OR $error['pdf_eng_error'] != '') {
	        	$stop = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Related Regulation',
					'sub_menunya2' => '',
				);
				$this->load->view('partial/header',$stop);
				$this->load->view('geothermalbusiness/relatedregulation/create',$error);
				$this->load->view('partial/footer');
			}else{
				$execute = $this->db->insert('related_regulation',$data);
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/geothermalbusiness/relatedregulation');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/geothermalbusiness/relatedregulation');
				}
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Related Regulation',
					'sub_menunya2' => '',
					'pdf_ind_error' => '',
					'pdf_eng_error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalbusiness/relatedregulation/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Related Regulation',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('related_regulation',array('id_related_regulation' => $id))->row(),
					'pdf_ind_error' => '',
					'pdf_eng_error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/relatedregulation/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('related_regulation', array('id_related_regulation' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('id_kategori_related','Category','required|callback_select_validate');
		$this->form_validation->set_rules('nama_regulation_ind','Regulation name','required');
		$this->form_validation->set_rules('nama_regulation_eng','Regulation name','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_regulation_ind 	 	= $this->input->post('nama_regulation_ind');
			$nama_regulation_eng 	 	= $this->input->post('nama_regulation_eng');
			$id_kategori_related 	= $this->input->post('id_kategori_related');

			$data = array(
						'nama_regulation_ind' => $nama_regulation_ind,
						'nama_regulation_eng' => $nama_regulation_eng,
						'id_kategori_related' => $id_kategori_related,
					);
			$error = array(
            			'pdf_ind_error' => '',
            			'pdf_eng_error' => '',
        			);
			if (!empty($_FILES['pdf_ind']['name'])) {
				$config = array();
	            $config['upload_path'] = './asset/backend/upload/regulation/relatedregulation/IND/';
	            $config['allowed_types'] = 'pdf';
	            $this->load->library('upload', $config, 'pdf_ind');
	            $this->pdf_ind->initialize($config);
	            $pdf_ind = $this->pdf_ind->do_upload('pdf_ind');
	            if ($pdf_ind) {
	            	unlink('./asset/backend/upload/regulation/relatedregulation/IND/'.$row_cli->pdf_ind);
	            	$file = $this->pdf_ind->data();
	                $data['pdf_ind'] = $file['file_name'];
	            } else {
	            	$error['pdf_ind_error'] = $this->pdf_ind->display_errors();
	            }
			}
			if (!empty($_FILES['pdf_eng']['name'])) {
				$config = array();
	            $config['upload_path'] = './asset/backend/upload/regulation/relatedregulation/ENG/';
	            $config['allowed_types'] = 'pdf';
	            $this->load->library('upload', $config, 'pdf_eng');
	            $this->pdf_eng->initialize($config);
	            $pdf_eng = $this->pdf_eng->do_upload('pdf_eng');
	            if ($pdf_eng) {
	            	unlink('./asset/backend/upload/regulation/relatedregulation/ENG/'.$row_cli->pdf_eng);
	            	$file = $this->pdf_eng->data();
	                $data['pdf_eng'] = $file['file_name'];
	            } else {
	            	$error['pdf_eng_error'] = $this->pdf_eng->display_errors();
	            }
			}
			if($error['pdf_ind_error'] != '' OR $error['pdf_eng_error'] != '') {
	        	$stop = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Geothermal Regulation',
					'sub_menunya2' => '',
				);
				$this->load->view('partial/header',$stop);
				$this->load->view('geothermalbusiness/relatedregulation/update',$error);
				$this->load->view('partial/footer');
			}else{
				$execute = $this->db->update('related_regulation',$data,array('id_related_regulation' => $id));
				if($execute == TRUE) {
					$alert =
						'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Sukses!</h4>
							Berhasil mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/geothermalbusiness/relatedregulation');
				}else{
					$alert =
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
							Tidak bisa mengubah data!
						</div>';
					$session = $this->session->set_flashdata('alert', $alert);
					redirect('backend/geothermalbusiness/relatedregulation');
				}
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Related Regulation',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('related_regulation',array('id_related_regulation' => $id))->row(),
					'pdf_ind_error' => '',
					'pdf_eng_error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalbusiness/relatedregulation/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
		$select_cli = $this->db->get_where('related_regulation', array('id_related_regulation' => $id));
        $row_cli    = $select_cli->row();
        unlink('./asset/backend/upload/regulation/relatedregulation/IND/'.$row_cli->pdf_ind);
        unlink('./asset/backend/upload/regulation/relatedregulation/ENG/'.$row_cli->pdf_eng);

        $execute = $this->db->delete('related_regulation',array('id_related_regulation' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalbusiness/relatedregulation');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/geothermalbusiness/relatedregulation');
		}
	}

	public function detail($id)
	{
		$regulation = $this->db->join('category_related_regulation', 'related_regulation.id_kategori_related = category_related_regulation.id_kategori_related', 'inner')->where('related_regulation.id_related_regulation', $id)->order_by('related_regulation.id_related_regulation','ASC')->get('related_regulation')->row();
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Related Regulation',
					'sub_menunya2' => '',
					'datanya' => $regulation,
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/relatedregulation/detail');
		$this->load->view('partial/footer');
	}

	public function create2()
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Related Regulation',
					'sub_menunya2' => '',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/relatedregulation/create2');
		$this->load->view('partial/footer');
	}

	public function up2()
	{
		$this->form_validation->set_rules('nama_kategori','Category Name','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_kategori 	= $this->input->post('nama_kategori');
			$data = array(
						'nama_kategori' => $nama_kategori,
					);
            $execute = $this->db->insert('category_related_regulation',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalbusiness/relatedregulation');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalbusiness/relatedregulation');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Related Regulation',
					'sub_menunya2' => '',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalbusiness/relatedregulation/create2');
			$this->load->view('partial/footer');
		}
	}

	public function update2($id)
	{
		$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Related Regulation',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('category_related_regulation',array('id_kategori_related' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('geothermalbusiness/relatedregulation/update2');
		$this->load->view('partial/footer');
	}

	public function down2($id)
	{
		$this->form_validation->set_rules('nama_kategori','Category Name','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$nama_kategori 	= $this->input->post('nama_kategori');
			$data = array(
						'nama_kategori' => $nama_kategori,
					);
			$execute = $this->db->update('category_related_regulation',$data,array('id_kategori_related' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalbusiness/relatedregulation');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert2', $alert);
				redirect('backend/geothermalbusiness/relatedregulation');
			}
		}else{
			$data = array(
					'menunya' => 'Geothermal Business',
					'sub_menunya' => 'Related Regulation',
					'sub_menunya2' => '',
					'datanya' => $this->db->get_where('category_related_regulation',array('id_kategori_related' => $id))->row(),
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('geothermalbusiness/relatedregulation/update2');
			$this->load->view('partial/footer');
		}
	}

	public function delete2($id)
	{
        $execute = $this->db->delete('category_related_regulation',array('id_kategori_related' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert2', $alert);
			redirect('backend/geothermalbusiness/relatedregulation');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert2', $alert);
			redirect('backend/geothermalbusiness/relatedregulation');
		}
	}

	function select_validate()
	{
		$id_kategori_related = $this->input->post('id_kategori_related');
		if($id_kategori_related == 'none') {
			$this->form_validation->set_message('select_validate', 'Select Category!');
			return false;
		}else{
			return true;
		}
	}
}