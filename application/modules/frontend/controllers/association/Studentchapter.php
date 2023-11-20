<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studentchapter extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
    }

	public function index()
	{
		$data = array(
					'title' => 'Student Chapter',
					'menunya' => 'Association',
					'sub_menunya' => 'Student Chapter',
					'sub_menunya2' => '',
					'studentchapter' => $this->db->order_by('id_student','DESC')->get('studentchapter'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('partial/header2', $data);
		$this->load->view('association/studentchapter');
		$this->load->view('partial/footer');
	}
}
