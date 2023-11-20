<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stakeholder extends MY_Controller {
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
                    'sub_menunya' => 'Stakeholder Directory',
                    'sub_menunya2' => '',
                    'overview' => $this->db->order_by('id_stakeholder_overview','DESC')->get('stakeholder_overview')->row(),
                    'category' => 'Overview',
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('geothermalbusiness/stakeholder');
        $this->load->view('partial/footer');
    }

    public function category($category)
    {
        if($category == 'Overview'){
            $kategori = 'Overview';
        }elseif($category == 'State-owned-Geothermal-Dev') {
            $kategori = 'State-owned Geothermal Dev';
        }elseif($category == 'Private-Developer') {
            $kategori = 'Private Developer';
        }elseif($category == 'Utility-Offtaker') {
             $kategori = 'Utility/Offtaker';
        }elseif($category == 'Nation-Government') {
             $kategori = 'Nation Government';
        }elseif($category == 'Financial-Institution') {
             $kategori = 'Financial Institution';
        }elseif($category == 'University') {
             $kategori = 'University';
        }elseif($category == 'Association') {
             $kategori = 'Association';
        }
        $data = array(
                    'title' => 'Geothermal Business',
                    'menunya' => 'Geothermal Business',
                    'sub_menunya' => 'Stakeholder Directory',
                    'sub_menunya2' => '',
                    'stakeholder' => $this->db->where('kategori',$kategori)->order_by('id_stakeholder','DESC')->get('stakeholder'),
                    'overview' => $this->db->order_by('id_stakeholder_overview','DESC')->get('stakeholder_overview')->row(),
                    'category' => $kategori,
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('geothermalbusiness/stakeholder');
        $this->load->view('partial/footer');
    }
}