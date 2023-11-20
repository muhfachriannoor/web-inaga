<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theboard extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
    }

	public function index()
	{
		$data = array(
					'title' => 'The Board',
					'menunya' => 'Association',
					'sub_menunya' => 'The Board',
					'sub_menunya2' => '',
					'theboard' => $this->db->get('theboard')->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('partial/header2', $data);
		$this->load->view('association/theboard');
		$this->load->view('partial/footer');
	}
}
