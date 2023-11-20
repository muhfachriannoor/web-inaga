<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatedregulations extends MY_Controller {
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
                    'sub_menunya' => 'Related Regulations',
                    'sub_menunya2' => '',
                    'category1' => $this->db->order_by('id_kategori_related','DESC')->get('category_related_regulation'),
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('geothermalbusiness/relatedregulations');
        $this->load->view('partial/footer');
    }
}