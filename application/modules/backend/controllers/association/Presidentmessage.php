<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presidentmessage extends MY_Controller {
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
					'sub_menunya2' => 'President Message',
					'datanya' => $this->db->order_by('id_message', 'DESC')->get('presidentmessage'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/presidentmessage/index');
		$this->load->view('partial/footer');
	}

	public function create()
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'President Message',
					'error' => ''
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/presidentmessage/create');
		$this->load->view('partial/footer');
	}

	public function up()
	{
		$this->form_validation->set_rules('message','Text','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$message 	= $this->input->post('message');
			$data = array(
						'message' => $message,
					);
            $execute = $this->db->insert('presidentmessage',$data);
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil menambahkan data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/presidentmessage');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Gagal Menambahkan Data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/presidentmessage');
			}
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'President Message',
					'error' => '',
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/aboutus/presidentmessage/create');
			$this->load->view('partial/footer');
		}
	}

	public function update($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'President Message',
					'datanya' => $this->db->get_where('presidentmessage',array('id_message' => $id))->row(),
					'error' => '',
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/presidentmessage/update');
		$this->load->view('partial/footer');
	}

	public function down($id)
	{
		$select_cli = $this->db->get_where('presidentmessage', array('id_message' => $id));
        $row_cli    = $select_cli->row();

        $this->form_validation->set_rules('message','Text','required');
		$this->form_validation->set_message('required', 'Wajib diisi');

		if($this->form_validation->run() != false){
			$message 	= $this->input->post('message');
			$data = array(
						'message' => $message,
					);
			$execute = $this->db->update('presidentmessage',$data,array('id_message' => $id));
			if($execute == TRUE) {
				$alert =
					'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Sukses!</h4>
						Berhasil mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/presidentmessage');
			}else{
				$alert =
					'<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
						Tidak bisa mengubah data!
					</div>';
				$session = $this->session->set_flashdata('alert', $alert);
				redirect('backend/association/aboutus/presidentmessage');
			}
		}else{
			$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'President Message',
					'error' => '',
					'datanya' => $this->db->get_where('presidentmessage',array('id_message' => $id))->row(),
				);
			$this->load->view('partial/header', $data);
			$this->load->view('association/aboutus/presidentmessage/update');
			$this->load->view('partial/footer');
		}
	}

	public function delete($id)
	{
        $select_cli = $this->db->get_where('presidentmessage', array('id_message' => $id));
        $row_cli    = $select_cli->row();
      
        $execute = $this->db->delete('presidentmessage',array('id_message' => $id));
		if($execute == TRUE) {
			$alert =
				'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Berhasil menghapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/aboutus/presidentmessage');
		}else{
			$alert =
				'<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Gagal!</h4>
					Tidak bisa hapus data!
				</div>';
			$session = $this->session->set_flashdata('alert', $alert);
			redirect('backend/association/aboutus/presidentmessage');
		}
	}

	public function detail($id)
	{
		$data = array(
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => 'President Message',
					'datanya' => $this->db->get_where('presidentmessage',array('id_message' => $id))->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('association/aboutus/presidentmessage/detail');
		$this->load->view('partial/footer');
	}
}