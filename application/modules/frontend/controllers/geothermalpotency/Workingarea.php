<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workingarea extends MY_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
        $this->load->library('pagination');
    }

    public function index()
    {
        $workingarea = $this->db->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->group_by('geothermal_workingarea.id_province')->order_by('geothermal_workingarea.id_province','ASC')->get('geothermal_workingarea');
        $data = array(
                    'title' => 'Geothermal Working Area',
                    'menunya' => 'Geothermal Potency',
                    'sub_menunya' => 'Geothermal Working Area',
                    'sub_menunya2' => '',
                    'potency' => $this->db->order_by('id_potency','DESC')->get('geothermal_potency')->row(),
                    'workingarea' => $workingarea,
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('geothermalpotency/workingarea');
        $this->load->view('partial/footer');
    }
}