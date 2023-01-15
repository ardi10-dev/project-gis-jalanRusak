<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {
	function __construct()
	{
		parent::__construct();
                $this->load->model('m_model');
           
	}
	
	public function index()
	{
		$data =array(

			'bencana' => $this->m_model->data_bencana(),
			
		);
		$this->load->view('utama',$data, FALSE);
	}
	function search()
    {
        $lokasi=$this->input->post("search");
        $data['bencana'] = $this->m_model->getByIdSearch($lokasi);
        $this->load->view("Search", $data);
    }
}
