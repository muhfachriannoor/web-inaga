<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data = array(
                    'title' => 'NZTE',
                    'menunya' => 'NZTE',
                    'sub_menunya' => '',
                    'sub_menunya2' => '',
                    'nzte' => $this->db->order_by('id_nzte','DESC')->get('nzte_story')->row(),
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('nzte/story');
        $this->load->view('partial/footer');
    }
}