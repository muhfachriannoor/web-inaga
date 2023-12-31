<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('tanggal_helper');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data = array(
                    'title' => 'News',
                    'menunya' => 'News',
                    'sub_menunya' => '',
                    'sub_menunya2' => '',
                    'news' => $this->db->order_by('id_berita','DESC')->get('news'),
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('news/index');
        $this->load->view('partial/footer');
    }

    public function detail($slug)
    {
        $query = $this->db->where('slug_berita', $slug)->get('news')->row();
        $data = array(
                    'title' => 'News',
                    'menunya' => 'News',
                    'sub_menunya' => $query->judul_berita,
                    'sub_menunya2' => '',
                    'datanya' => $query,
                );
        $this->load->view('partial/header', $data);
        $this->load->view('partial/header2', $data);
        $this->load->view('news/detail');
        $this->load->view('partial/footer');
    }

	// public function index()
	// {
 //        $config['base_url'] = site_url('berita/');
 //        $config['total_rows'] = $this->db->join('m_berita_kategori', 'm_berita.idKategori = m_berita_kategori.idKategori', 'inner')->count_all('m_berita');
 //        $config['per_page'] = 3;
 //        $config['uri_segment'] = 2;
 //        $choice = $config['total_rows'] / $config['per_page'];
 //        $config['num_links'] = floor($choice);
 //        $config['use_page_numbers'] = TRUE;

 //        if($this->input->get('filter') == '') {
 //        	$suffix = '';
 //        }else{
 //        	$suffix = '?' . http_build_query($_GET, '?', "&");
 //        }
 //        $config['suffix'] = $suffix;
 
 //      	$config['first_url'] 		= $config['base_url'].$config['suffix'];
 //        $config['next_link']        = 'Next Page';
 //        $config['prev_link']        = 'Previous';
 //        $config['full_tag_open']    = '<nav class="pagination" role="navigation" aria-label="pagination"><ul class="pagination-list">';
 //        $config['full_tag_close']   = '</ul></nav>';
 //        $config['num_tag_open']     = '<li class="pagination-link">';
 //        $config['num_tag_close']    = '</li>';
 //        $config['cur_tag_open']     = '<li><a class="pagination-link is-current" aria-current="page">';
 //        $config['cur_tag_close']    = '</a></li>';
 //        $config['next_tag_open']    = '<li class="pagination-link"><span>';
 //        $config['next_tagl_close']  = '</span></li>';
 //        $config['prev_tag_open']    = '<li class="pagination-link">';
 //        $config['prev_tagl_close']  = '</li>';
 //        $config['first_tag_open']   = '<li class="pagination-link"><span>';
 //        $config['first_tagl_close'] = '</span></li>';
 //        $this->pagination->initialize($config);

 //        $data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;
 
 //        $start = $data['page'];
 //        $limit = 3;
 //        $offset = $limit * ($start - 1);

 //        $filter = $this->input->get('filter');
 //        if($filter == ''):
 //        	$query = $this->db->join('m_berita_kategori', 'm_berita.idKategori = m_berita_kategori.idKategori', 'inner')->order_by('m_berita.idBerita', 'DESC')->get('m_berita', $limit, $offset);
 //        else:
 //        	$query = $this->db->join('m_berita_kategori', 'm_berita.idKategori = m_berita_kategori.idKategori', 'inner')->order_by('m_berita.idBerita', $filter)->get('m_berita', $limit, $offset);
 //        endif;

	// 	$data = array(
	// 				'title' => 'Berita',
	// 				'menunya' => 'Berita',
	// 				'sub_menunya' => 'Berita',
	// 				'berita' => $query,
	// 				'pagination' => $this->pagination->create_links(),
 //                    'kategori' => $this->db->get('m_berita_kategori'),
	// 			);
	// 	$this->load->view('partial/header', $data);
	// 	$this->load->view('partial/header2', $data);
	// 	$this->load->view('berita/index');
	// 	$this->load->view('partial/footer');
	// 	$this->load->view('partial/footer2');
	// }
}