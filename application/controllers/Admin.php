<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public $tabelUser = 'user';
	public $tabelPeserta = "peserta";
	public $tabelJadwal = 'jadwal';
	public $tabelTim = 'tim';

	public function __construct()
    {
				
		parent::__construct();
		$this->load->model('crud_m');
    }

	public function index()
	{
		$this->load->view('Admin/index');
	}
	public function jadwalPage()
	{
		$this->load->view('Admin/page-jadwal');
	}
	public function panitia(){
		$idkot = $this->input->post('kota');
		$where = array(
				'idkota' => $idkot
				);

		$data['nilai']=$this->crud_m->ambilData($this->tabelUser,$where);
		$this->load->view('Admin/page-panitia',$data);
	}
	public function aksiUpdatePanitia($id){
		$where = array(
    	'id' => $id
    	);
    	$query = $this->crud_m->ambilData($this->tabelUser,$where);
		$row = $query->row();
		$data = array(
          "id" => $row->id,
    	  "username" => $row->username,
    	  "password" => $row->password,
    	  "namaUser" => $row->namaUser,
    	  "tgllahirUser" => $row->id_divisi,
		  "alamatUser" => $row->level,
		  "notelpUser" => $row->notelpUser
    	);
		$this->load->view('Admin/page-panitia-edit', $data);
	}
    public function aksiDeletePanitia($username){
		$where = array(
		    'username' => $username
		    );
		$this->crud_m->deleteData($this->tabelUser,$where);
		redirect('Admin/panitia');
	}
	public function aksiAddPanitia(){
		$namaUserV = $this->input->post('namaUser');
		$tgllahirUserV = $this->input->post('tgllahirUser');
		$alamatUserV = $this->input->post('alamatUser');
		$statusV = $this->input->post('status');
		$notelpUserV = $this->input->post('notelpUser');
		$idkotaV = $this->input->post('idkota');
		$usernameV = $this->input->post('username');
		$passwordV = $this->input->post('password');

		$data = array(
		  "namaUser" => $namaUserV,
		  "tgllahirUser" => $tgllahirUserV,
		  "alamatUser" => $alamatUserV,
		  "status" => $statusV,
		  "notelpUser" => $notelpUserV,
		  "idkota" => $idkotaV,
		  "username" => $usernameV,
		  "password" => $passwordV
		  );

		$this->crud_m->insertData($this->tabelUser,$data);
		redirect('admin/panitia');
	}

	public function peserta(){
		$idkot = $this->input->post('kota');
		$where = array(
				'idkota' => $idkot
				);

		$data['nilai']=$this->crud_m->ambilData($this->tabelPeserta,$where);
		$this->load->view('Admin/page-peserta',$data);
	}
	public function aksiUpdatePeserta($idPeserta){
		$where = array(
    	'idPeserta' => $idPeserta
    	);
    	$query = $this->crud_m->ambilData($this->tabelPeserta,$where);
		$row = $query->row();
		$data = array(
          "idPeserta" => $row->idPeserta,
    	  "namaPendaftar" => $row->namaPendaftar,
    	  "email" => $row->email,
    	  "notelpPeserta" => $row->notelpPeserta,
    	  "noIdentitas" => $row->noIdentitas,
		  "posisi" => $row->posisi,
		  "asalSekolah" => $row->asalSekolah,
		  "idkota" => $row->idkota,
		  "ikutSerta" => $row->ikutSerta,
		  "namaTim" => $row->namaTim
    	);
		$this->load->view('Admin/page-panitia-edit', $data);
	}
	public function aksiDeletePeserta($id){
		$where = array(
		    'idPeserta' => $id
		    );
		$this->crud_m->deleteData($this->tabelPeserta,$where);
		redirect('Admin/peserta');
	}

	public function jadwal(){
		$idkot = $this->input->post('kota');
		$where = array(
				'idkota' => $idkot
				);

		$data['nilai']=$this->crud_m->ambilData($this->tabelJadwal,$where);
		$this->load->view('Admin/page-jadwal',$data);
	}
	public function aksiUpdateJadwal($idPeserta){
		$where = array(
    	'idPeserta' => $idPeserta
    	);
    	$query = $this->crud_m->ambilData($this->tabelPeserta,$where);
		$row = $query->row();
		$data = array(
          "idPeserta" => $row->idPeserta,
    	  "namaPendaftar" => $row->namaPendaftar,
    	  "email" => $row->email,
    	  "notelpPeserta" => $row->notelpPeserta,
    	  "noIdentitas" => $row->noIdentitas,
		  "posisi" => $row->posisi,
		  "asalSekolah" => $row->asalSekolah,
		  "idkota" => $row->idkota,
		  "ikutSerta" => $row->ikutSerta,
		  "namaTim" => $row->namaTim
    	);
		$this->load->view('Admin/page-panitia-edit', $data);
	}
	public function aksiDeleteJadwal($id){
		$where = array(
		    'idPeserta' => $id
		    );
		$this->crud_m->deleteData($this->tabelPeserta,$where);
		redirect('Admin/peserta');
	}

	public function tim(){
		$idkot = $this->input->post('kota');
		$where = array(
				'idkota' => $idkot
				);

		$data['nilai']=$this->crud_m->ambilData($this->tabelTim,$where);
		$this->load->view('Admin/page-tim',$data);
	}
	public function detailTim(){
		$this->load->view('Admin/page-detail-tim');
	}
	public function aksiUpdateTim($idPeserta){
		$where = array(
    	'idPeserta' => $idPeserta
    	);
    	$query = $this->crud_m->ambilData($this->tabelPeserta,$where);
		$row = $query->row();
		$data = array(
          "idPeserta" => $row->idPeserta,
    	  "namaPendaftar" => $row->namaPendaftar,
    	  "email" => $row->email,
    	  "notelpPeserta" => $row->notelpPeserta,
    	  "noIdentitas" => $row->noIdentitas,
		  "posisi" => $row->posisi,
		  "asalSekolah" => $row->asalSekolah,
		  "idkota" => $row->idkota,
		  "ikutSerta" => $row->ikutSerta,
		  "namaTim" => $row->namaTim
    	);
		$this->load->view('Admin/page-panitia-edit', $data);
	}


}