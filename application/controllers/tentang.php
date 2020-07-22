<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public function index()
	{
	$data['judul']= 'Halaman Tentang';
	$this->load->view('temp/header',$data);
	$this->load->view('tentang/index');
	$this->load->view('temp/footer');
	}
}

