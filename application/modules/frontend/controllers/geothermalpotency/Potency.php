<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Potency extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
        $this->load->library('pagination');
    }

    public function index()
    {
        $workingarea = $this->db->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->group_by('geothermal_workingarea.id_province')->limit(2)->order_by('geothermal_workingarea.id_province','ASC')->get('geothermal_workingarea');
        $data = array(
                    'title' => 'Geothermal Potency',
                    'menunya' => 'Geothermal Potency',
                    'sub_menunya' => '',
                    'sub_menunya2' => '',
                    'potency' => $this->db->order_by('id_potency','DESC')->get('geothermal_potency')->row(),
                    'island' => $this->db->order_by('nama_island','ASC')->get('island'),
                    'workingarea' => $workingarea,
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('geothermalpotency/index');
        $this->load->view('partial/footer');
    }
}