<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tender extends MY_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
        $this->load->library('pagination');
    }

    public function index()
    {
        $tender = $this->db->join('geothermal_workingarea', 'tender.id_workingarea = geothermal_workingarea.id_workingarea', 'inner')->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->group_by('geothermal_workingarea.id_province')->order_by('tender.id_tender','ASC')->get('tender');
        $data = array(
                    'title' => 'Tender',
                    'menunya' => 'Geothermal Potency',
                    'sub_menunya' => 'Geothermal Working Area',
                    'sub_menunya2' => 'Tender',
                    'potency' => $this->db->order_by('id_potency','DESC')->get('geothermal_potency')->row(),
                    'tender' => $tender,
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('geothermalpotency/tender');
        $this->load->view('partial/footer');
    }
}