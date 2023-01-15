<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct()
	{
		parent::__construct();
                $this->load->library('form_validation');

	}

	public function index()
	{
		$this->load->view('login');
	}
	public function ProsesLogin(){
		$user=$this->input->post('username') ;
		$pass=$this->input->post('password') ;
		
		$user=$this->db->get_where('users',['username'=>$user])->row_array();

		if ($user) {
			if (password_verify($pass,$user['password'])) {
				$data=[
					'nama' =>$user['namaLengkap'],
					'username' =>$user['username'],
					'password' =>$user['password'],
					'status' =>$user['status'],
					'idusers' =>$user['idUsers'],
				];
				$this->session->set_userdata($data);

				echo 2;
			} else {
				echo 0;
			}
			
		} else {
			echo 1;
		}
		

	}
	public function logoutProses(){
        $this->session->sess_destroy();
        redirect('login');
    }
	


	
	
}
