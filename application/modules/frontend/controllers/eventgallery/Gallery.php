<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
    }

	public function index()
	{
		$data = array(
					'title' => 'Event & Gallery',
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Gallery',
					'sub_menunya2' => '',
					'gallery' => $this->db->order_by('id_galeri','DESC')->get('gallery'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('partial/header2', $data);
		$this->load->view('eventgallery/gallery');
		$this->load->view('partial/footer');
	}

	public function detail($slug)
    {
        $data = array(
                    'title' => 'Event & Gallery',
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Gallery',
					'sub_menunya2' => '',
                    'datanya' => $this->db->join('gallery_details', 'gallery.id_galeri = gallery_details.id_galeri', 'inner')->order_by('gallery_details.id_galeri_detail','DESC')->where('gallery.slug_galeri', $slug)->get('gallery'),
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('eventgallery/gallery_detail');
        $this->load->view('partial/footer');
    }
}
