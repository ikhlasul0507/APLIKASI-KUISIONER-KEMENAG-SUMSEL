<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __Construct()
			{
				parent::__Construct();
				$this->load->model('model_home');
				$this->load->library('form_validation');
			}
	public function index()
	{
		$data['judul']= 'Halaman Admin';
		$this->load->view('temp/header',$data);
		$this->load->view('admin/index');
		$this->load->view('temp/footer');
	}
	public function tambah()
	{
		$data['judul']= 'Halaman Tambah Data Admin';

		//validation form
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		//kondisi
		if($this->form_validation->run()== FALSE)
		{
				$this->load->view('admin/header',$data);
				$this->load->view('admin/tambah');
				$this->load->view('admin/footer');
		}else
		{
			$this->model_home->daftaradmin();
			$this->session->set_flashdata('pesan', 'Selamat Anda Berhasil mendaftar!');
			redirect('admin/konten');
		}
	}
	public function konten()
	{
		$data['admin']= $this->model_home->getAlladmin();
		$data['judul']= 'Halaman Konten';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/konten',$data);
		$this->load->view('admin/footer');
	
	}
	public function hapus($id_admin)
			{
				$this->model_home->hapusDataAdmin($id_admin);
				$this->session->set_flashdata('flash',' Data Berhasil Dihapus !');
				redirect('admin/konten');
			}
	public function hapus_pengguna($id_user)
			{
				$this->model_home->hapusDatauser($id_user);
				$this->session->set_flashdata('flash',' Data Berhasil Dihapus !');
				redirect('admin/pengguna');
			}
	public function hapus_kuisioner($id_kuisioner)
			{
				$this->model_home->hapusDatakuisioner($id_kuisioner);
				$this->session->set_flashdata('flash',' Data Berhasil Dihapus !');
				redirect('admin/kuisioner');
			}
	public function ubah($id_admin)
			{
				$data['judul']='From data ubah Admin';
				$data['admin']= $this->model_home->getAdminById($id_admin);

				$this->form_validation->set_rules('username','Username','required|trim');
				$this->form_validation->set_rules('password','Password','required|trim');

				if($this->form_validation->run()== FALSE)
				{
				$this->load->view('admin/header',$data);
				$this->load->view('admin/ubah');
				$this->load->view('admin/footer');
			}else{
				$this->model_home->ubahDataAdmin($id_admin);
				$this->session->set_flashdata('flash',' Data Berhasil Diubah !');
				redirect('admin/konten');
			}
			}
	public function pengguna()
	{
		$data['judul']= 'Halaman Pengguna';

		$this->load->library('pagination');
		//config
				$config['base_url']= 'http://localhost/app-kemenag/admin/pengguna/index';
				$config['total_rows']= $this->model_home->countAllPengguna();
				$config['per_page']= 5;
				$config['num_links']= 3;
		//styling

				$config['full_tag_open']= '<nav>
  						<ul class="pagination justify-content-center">';
				$config['full_tag_close']= '</ul></nav>';

				$config['first_link']= 'First';
				$config['first_tag_open']= '<li class="page-item">';
				$config['first_tag_close']= '</li>';

				$config['last_link']= 'Last';
				$config['last_tag_open']= '<li class="page-item">';
				$config['last_tag_close']= '</li>';

				$config['next_link']= '&raquo';
				$config['next_tag_open']= '<li class="page-item">';
				$config['next_tag_close']= '</li>';

				$config['prev_link']= '&laquo';
				$config['prev_tag_open']= '<li class="page-item">';
				$config['prev_tag_close']= '</li>';

				$config['cur_tag_open']= '<li class="page-item active"><a class="page-link" href="#">';
				$config['cur_tag_close']= '</a></li>';

				$config['num_tag_open']= '<li class="page-item">';
				$config['num_tag_close']= '</li>';

				$config['attributes']= array('class'=> 'page-link');

				//inittialize
				$this->pagination->initialize($config);


				//segment pada link uri di web browser ppada folder berapa
				$data['start'] = $this->uri->segment(4);
				$data['pengguna']= $this->model_home->getPengguna( $config['per_page'], $data['start']);

		
				$this->load->view('admin/header',$data);
				$this->load->view('admin/pengguna',$data);
				$this->load->view('admin/footer');
	
	}
	public function kuisioner()
	{
		$data['judul']= 'Halaman Kuisioner';

		$this->load->library('pagination');
		//config
				$config['base_url']= 'http://localhost/app-kemenag/admin/kuisioner/index';
				$config['total_rows']= $this->model_home->countAllKuisioner();
				$config['per_page']= 10;
				$config['num_links']= 3;
		//styling

				$config['full_tag_open']= '<nav>
  						<ul class="pagination justify-content-center">';
				$config['full_tag_close']= '</ul></nav>';

				$config['first_link']= 'First';
				$config['first_tag_open']= '<li class="page-item">';
				$config['first_tag_close']= '</li>';

				$config['last_link']= 'Last';
				$config['last_tag_open']= '<li class="page-item">';
				$config['last_tag_close']= '</li>';

				$config['next_link']= '&raquo';
				$config['next_tag_open']= '<li class="page-item">';
				$config['next_tag_close']= '</li>';

				$config['prev_link']= '&laquo';
				$config['prev_tag_open']= '<li class="page-item">';
				$config['prev_tag_close']= '</li>';

				$config['cur_tag_open']= '<li class="page-item active"><a class="page-link" href="#">';
				$config['cur_tag_close']= '</a></li>';

				$config['num_tag_open']= '<li class="page-item">';
				$config['num_tag_close']= '</li>';

				$config['attributes']= array('class'=> 'page-link');

				//inittialize
				$this->pagination->initialize($config);


				//segment pada link uri di web browser ppada folder berapa
				$data['start'] = $this->uri->segment(4);
				$data['kuisioner']= $this->model_home->getKuisioner( $config['per_page'], $data['start']);

		
				$this->load->view('admin/header',$data);
				$this->load->view('admin/kuisioner',$data);
				$this->load->view('admin/footer');
		// query memanggil function duatable di mode	
	}
	public function pertanyaan()
	{
		$data['judul']= 'Halaman Konten';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/pertanyaan');
		$this->load->view('admin/footer');
	}
	public function ceklogin()
		{
			if(isset($_POST['masuk']))
			{
				$username = $this->input->post('username',true);
				$password = $this->input->post('password',true);
				// boros oooo
		 		$cek = $this->model_home->prosesloginadmin( $username, $password);	
		 		$hasil= count($cek);

		 		if($hasil> 0)
		 			{
		 			//$data = $this->db->get_where('tbl_admin',array('username'=>$username, 'password'=> $password))->row();
		 			$this->session->set_userdata(array('username'=>$username));
		 				redirect('admin/konten',$data);
		 			//if($data == TRUE)
		 			//{
		 				
		 			}else
		 			{
		 				
		 				redirect('admin');
		 			}
		 	}
		}
		
	public function logout()
	{
    $this->session->sess_destroy();
    redirect('admin');
     }

    public function export_excel_pengguna()
    {
    	// $data['pengguna']= $this->model_home->getAllpengguna();

    	// require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
    	// require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

    	// $objPHPExcel = new PHPExcel();

    	// $objPHPExcel->getProperties()->setCreator('Kemenag');
    	// $objPHPExcel->getProperties()->setLastModifiedBy("Kemenag");
    	// $objPHPExcel->getProperties()->setTitle("Data Index Kepuasan Masyarakat");
    	// $objPHPExcel->getProperties()->setSubject("");
    	// $objPHPExcel->getProperties()->setDescription("");

    	// $objPHPExcel->setActiveSheetIndex(0);

    	// $objPHPExcel->getActiveSheet()->setCellValue('A1','Nomor');
    	// $objPHPExcel->getActiveSheet()->setCellValue('B1','Nama');
    	// $objPHPExcel->getActiveSheet()->setCellValue('C1','Perusahaan');
    	// $objPHPExcel->getActiveSheet()->setCellValue('D1','Umur');
    	// $objPHPExcel->getActiveSheet()->setCellValue('E1','Jenis Kelamin');
    	// $objPHPExcel->getActiveSheet()->setCellValue('F1','Pendidikan Terakhir');
    	// $objPHPExcel->getActiveSheet()->setCellValue('G1','Pekerjaan Utama');
    	// $objPHPExcel->getActiveSheet()->setCellValue('H1','Handphone');
    	// $objPHPExcel->getActiveSheet()->setCellValue('I1','Password');

    	// $baris=2;
    	// $x=1;
    	// foreach ($pengguna as $pgn){

    	// 	$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris, $x);
    	// 	$objPHPExcel->getActiveSheet()->setCellValue("B".$baris, $pgn->nama);
    	// 	$objPHPExcel->getActiveSheet()->setCellValue('C'.$baris, $pgn->perusahaan);
    	// 	$objPHPExcel->getActiveSheet()->setCellValue('D'.$baris, $pgn->umur);
    	// 	$objPHPExcel->getActiveSheet()->setCellValue('E'.$baris, $pgn->jenis_kelamin);
    	// 	$objPHPExcel->getActiveSheet()->setCellValue('F'.$baris, $pgn->pendidikan_terakhir);
    	// 	$objPHPExcel->getActiveSheet()->setCellValue('G'.$baris, $pgn->pekerjaan_utama);
    	// 	$objPHPExcel->getActiveSheet()->setCellValue('H'.$baris, $pgn->handphone);
    	// 	$objPHPExcel->getActiveSheet()->setCellValue('I'.$baris, $pgn->password);

    	// 	$x++;
    	// 	$baris++;
    	// }

    	// $filename="Data Index Kepuasan Pengunjung.xlsx";//.//date("d-m-Y-H-i-s").'.xlsx';

    	// $objPHPExcel->getActiveSheet()->setTitle("Data IKM");

    	// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    	// header('Content-Disposition: attachment;filename="'.$filename.'"');
    	// header('Cache-Control:max-age-0');

    	// $writer=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
    	// $writer->save('php://output');

    	// exit;
    	  $data = array( 'title' => 'Laporan Excel | Index Kepuasan Masyarakat','pengguna' => $this->model_home->getAllpengguna());
 
           $this->load->view('admin/export_excel_pengguna',$data);
    }
    public function export_excel_kuisioner()
    {
    	$data = array( 'title' => 'Laporan Excel | Index Kepuasan Masyarakat','kuisioner' => $this->model_home->getAllkuisioner());
 
           $this->load->view('admin/export_excel_kuisioner',$data);
    }
 
}