<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __Construct()
			{
				parent::__Construct();
				$this->load->model('model_home');
				$this->load->library('form_validation');
				
			}
	public function index()
	{
		$data['judul']= 'Halaman Beranda';
		$this->load->view('temp/header',$data);
		$this->load->view('home/index');
		$this->load->view('temp/footer');
	}
	public function login()
	{
		$data['judul']= 'Halaman Login';
		$this->load->view('temp/header',$data);
		$this->load->view('home/login');
		$this->load->view('temp/footer');
	}
	public function ceklogin()
		{
			if(isset($_POST['masuk']))
			{
				$handphone = $this->input->post('handphone',true);
				$password = $this->input->post('password',true);
		 		$cek = $this->model_home->proseslogin( $handphone, $password);	
		 		$hasil= count($cek);

		 		if($hasil> 0)
		 			{
		 			//$data = $this->db->get_where('tbl_user',array('handphone'=>$handphone, 'password'=> $password))->row();

		 			//if($data == TRUE)
		 			//{
		 				$this->session->set_userdata(array('handphone'=>$handphone));
		 				redirect('home/kuisioner',$data);
		 			}else
		 			{
		 				$this->session->set_flashdata('salah','Data Yang Di Masukan Salah !!');
		 				redirect('home/login');
		 			}
			}
		}
	
 
	public function daftar()
	{
		$data['judul']= 'Halaman Daftar';

		//validation form
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('perusahaan','Perusahaan','required|trim');
		$this->form_validation->set_rules('umur','Umur','required|trim');
		$this->form_validation->set_rules('jenis_kelamin','Jenis_kelamin','required|trim');
		$this->form_validation->set_rules('pendidikan_terakhir','Pendidikan_terakhir','required|trim');
		$this->form_validation->set_rules('pekerjaan_utama','Pekerjaan_utama','required|trim');
		$this->form_validation->set_rules('handphone','Handphone','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		//kondisi
		if($this->form_validation->run()== FALSE)
		{
				$this->load->view('temp/header',$data);
				$this->load->view('home/daftar');
				$this->load->view('temp/footer');
		}else
		{
			$this->model_home->daftar();
			$this->session->set_flashdata('pesan', 'Selamat Anda Berhasil mendaftar!');
			redirect('home/login');
		}
	
	}
	public function kuisioner()
	{
		//validation form

		$this->form_validation->set_rules('nilai1','Nilai1','required');
		$this->form_validation->set_rules('nilai2','Nilai2','required');
		$this->form_validation->set_rules('nilai3','Nilai3','required');
		$this->form_validation->set_rules('nilai4','Nilai4','required');
		$this->form_validation->set_rules('nilai5','Nilai5','required');
		$this->form_validation->set_rules('nilai6','Nilai6','required');
		$this->form_validation->set_rules('nilai7','Nilai7','required');
		$this->form_validation->set_rules('nilai8','Nilai8','required');
		$this->form_validation->set_rules('nilai9','Nilai9','required');
		$this->form_validation->set_rules('nilai10','Nilai10','required');
		$this->form_validation->set_rules('nilai11','Nilai11','required');
		$this->form_validation->set_rules('nilai12','Nilai12','required');
		$this->form_validation->set_rules('nilai13','Nilai13','required');
		$this->form_validation->set_rules('nilai14','Nilai14','required');
		$this->form_validation->set_rules('saran','Saran');
		//kondisi
		if($this->form_validation->run()== FALSE)
		{		
			$data['judul']= 'Halaman Kuisioner';
			$this->load->view('home/kuisioner',$data);
			$this->load->view('temp/footer');
		}else
		{
			$this->model_home->kuisioner();
			$this->session->set_flashdata('pesan', 'Terima Kasih Telah Mengisi Kuisioner!');
			redirect('home');
		}
	
	}
}

