<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
    }

	public function index()
	{
		$data = array(
					'title' => 'Beranda',
					'menunya' => 'Beranda',
					'sub_menunya' => '',
					'sub_menunya2' => '',
					'banner' => $this->db->order_by('id_banner','DESC')->get('banner'),
					'member' => $this->db->order_by('id_member','DESC')->get('members'),
					'news1' => $this->db->order_by('id_berita','DESC')->limit(1)->get('news')->row(),
					'news2' => $this->db->order_by('id_berita','DESC')->limit(3,1)->get('news'),
					'infographics' => $this->db->get('infographics')->row(),
					'adsspace' => $this->db->get('adsspace')->row(),
					'gallery' => $this->db->order_by('id_galeri','DESC')->get('gallery'),
					'event' => $this->db->order_by('id_event','DESC')->get('event')->row(),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('home/index');
		$this->load->view('partial/footer');
	}
}
