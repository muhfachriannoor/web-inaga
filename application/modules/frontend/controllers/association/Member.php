<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
    }

	public function index()
	{
		$data = array(
					'title' => 'Member',
					'menunya' => 'Association',
					'sub_menunya' => 'Member',
					'sub_menunya2' => '',
					'member' => $this->db->order_by('id_member','DESC')->get('members'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('partial/header2', $data);
		$this->load->view('association/member');
		$this->load->view('partial/footer');
	}
}
