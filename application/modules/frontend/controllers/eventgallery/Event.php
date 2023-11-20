<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller {
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
					'sub_menunya' => 'Event Calendar',
					'sub_menunya2' => '',
					'event' => $this->db->order_by('id_event','DESC')->get('event'),
				);
		$this->load->view('partial/header', $data);
		$this->load->view('partial/header2', $data);
		$this->load->view('eventgallery/event');
		$this->load->view('partial/footer');
	}

	public function detail($slug)
    {
        $data = array(
                    'title' => 'Event & Gallery',
					'menunya' => 'Event & Gallery',
					'sub_menunya' => 'Event Calendar',
					'sub_menunya2' => '',
                    'datanya' => $this->db->where('slug_event', $slug)->get('event')->row(),
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('eventgallery/event_detail');
        $this->load->view('partial/footer');
    }
}
