<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
    }

	public function index($sub_menunya)
	{
		if ($sub_menunya == 'IIGCE') {
        	$kategori = 'IIGCE Techninal Paper';
     	} else if ($sub_menunya == 'General') {
        	$kategori = 'General Paper & Presentation';
      	} else if ($sub_menunya == 'References') {
        	$kategori = 'References';
      	} else if ($sub_menunya == 'API') {
        	$kategori = 'API News Magazine';
      	}

		$data = array(
					'title' => $kategori,
					'menunya' => 'Library',
					'sub_menunya' => $kategori,
					'sub_menunya2' => '',
					'library' => $this->db->where('kategori_library', $kategori)->order_by('id_library', 'DESC')->get('library'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('partial/header2', $data);
		$this->load->view('library/index');
		$this->load->view('partial/footer');
	}
}
