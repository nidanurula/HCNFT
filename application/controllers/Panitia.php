<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia extends CI_Controller {
	public function index()
	{
		$this->load->view('Panitia/index');
	}

	public function pertandingan()
	{
		$this->load->view('Panitia/pertandingan');
	}

	public function mulaiPertandingan()
	{
		$this->load->view('Panitia/mulai-pertandingan');
	}

	public function hasilPertandingan()
	{
		$this->load->view('Panitia/hasil-pertandingan');
	}

}
