<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends MY_Controller {
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
    }

	public function index()
	{
		$data = array(
					'menunya' => 'Beranda',
					'sub_menunya' => 'Dashboard',
					'sub_menunya2' => '',
					'members' => $this->db->count_all('members'),
					'news' => $this->db->count_all('news'),
					'nzte_directory' => $this->db->count_all('nzte_directory'),
					'event' => $this->db->count_all('event'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('index');
		$this->load->view('partial/footer');
	}
}
