<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
    }

	public function index()
	{
		$data = array(
					'title' => 'About Us',
					'menunya' => 'Association',
					'sub_menunya' => 'About Us',
					'sub_menunya2' => '',
					'history' => $this->db->get('sejarah_api')->row(),
					'objective' => $this->db->get('objective')->row(),
					'visionmission' => $this->db->get('visionmission')->row(),
					'current' => $this->db->get('currentprogram')->row(),
					'presidentmessage' => $this->db->get('presidentmessage')->row(),
					'presidentapi' => $this->db->get('president'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('partial/header2', $data);
		$this->load->view('association/aboutus');
		$this->load->view('partial/footer');
	}
}
