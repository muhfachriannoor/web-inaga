<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data = array(
                    'title' => 'Geothermal Resources',
                    'menunya' => 'Geothermal Potency',
                    'sub_menunya' => 'Geothermal Resources',
                    'sub_menunya2' => '',
                    'potency' => $this->db->order_by('id_potency','DESC')->get('geothermal_potency')->row(),
                    'island' => $this->db->order_by('nama_island','ASC')->get('island'),
                    'link_island' => '',
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('geothermalpotency/resources');
        $this->load->view('partial/footer');
    }

    public function island($island)
    {
        $data = array(
                    'title' => 'Geothermal Resources',
                    'menunya' => 'Geothermal Potency',
                    'sub_menunya' => 'Geothermal Resources',
                    'sub_menunya2' => '',
                    'potency' => $this->db->order_by('id_potency','DESC')->get('geothermal_potency')->row(),
                    'island' => $this->db->order_by('nama_island','ASC')->get('island'),
                    'link_island' => $island,
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('geothermalpotency/resources');
        $this->load->view('partial/footer');
    }
}