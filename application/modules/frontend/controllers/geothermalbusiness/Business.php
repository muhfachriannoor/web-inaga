<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data = array(
                    'title' => 'Geothermal Business',
                    'menunya' => 'Geothermal Business',
                    'sub_menunya' => '',
                    'sub_menunya2' => '',
                    'business' => $this->db->order_by('id_business','DESC')->get('geothermal_business')->row(),
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('geothermalbusiness/index');
        $this->load->view('partial/footer');
    }
}