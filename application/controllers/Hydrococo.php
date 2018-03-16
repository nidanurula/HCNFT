<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hydrococo extends CI_Controller {
	public $tabelUser = 'user';

	public function __construct()
    {
				parent::__construct();
				$this->load->model('crud_m');
    }

	public function index()
	{
		$this->load->view('page-login');
	}

	public function login()
	{
		$tbl='user';
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);

		$hsl=$this->crud_m->ceklogin($tbl,$where);
		$cek = $this->db->get_where('user',array('username' => $username, 'password' => $password))->row();
		$valid=false;

		foreach($hsl->result() as $h){
			$this->session->set_userdata('username',$h->username);
			$this->session->set_userdata('namaUser',$h->namaUser);

			$valid=true;
		}
		if($valid){
			if($cek->username == "admin"){
				redirect('Hydrococo/admin_index');
			}else{
				redirect('Hydrococo/panitia_index');
			}
		}else{
			$this->load->view('page-login');
			echo "<div style='padding-top:1cm;color:red;'><b><center>Password/Username salah</center></b></div>";
		}
	}

	public function panitia_index(){
		$this->load->view('Panitia/index');
	}

	public function admin_index(){
		$this->load->view('Admin/index');
	}
}
