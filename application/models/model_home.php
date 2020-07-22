<?php 

class model_home extends CI_model{

	public function daftar()
	{
		$data=[
			"nama" => $this->input->post('nama', true),
			"perusahaan" => $this->input->post('perusahaan',true),
			"umur" => $this->input->post('umur',true),
			"jenis_kelamin" => $this->input->post('jenis_kelamin',true),
			"pendidikan_terakhir" => $this->input->post('pendidikan_terakhir',true),
			"pekerjaan_utama" => $this->input->post('pekerjaan_utama',true),
			"handphone" => $this->input->post('handphone',true),
			"password" => $this->input->post('password',true)
		];
		//query untuk insert kedalam database
		$this->db->insert('tbl_user', $data);
	}
	public function daftaradmin()
	{
		$data=[
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password',true)
		];
		//query untuk insert kedalam database
		$this->db->insert('tbl_admin', $data);
	}
	public function proseslogin($handphone,$password)
	{
		$this->db->where('handphone',$handphone);
		$this->db->where('password',$password);
		return $this->db->get('tbl_user')->row();
	}

	public function prosesloginadmin($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('tbl_admin')->row();
	}
	public function kuisioner()
	{
		$data=[
			"nama" => $this->input->post('nama', true),
			"handphone" => $this->input->post('handphone', true),
			"nilai1" => $this->input->post('nilai1', true),
			"nilai2" => $this->input->post('nilai2', true),
			"nilai3" => $this->input->post('nilai3', true),
			"nilai4" => $this->input->post('nilai4', true),
			"nilai5" => $this->input->post('nilai5', true),
			"nilai6" => $this->input->post('nilai6', true),
			"nilai7" => $this->input->post('nilai7', true),
			"nilai8" => $this->input->post('nilai8', true),
			"nilai9" => $this->input->post('nilai9', true),
			"nilai10" => $this->input->post('nilai10', true),
			"nilai11" => $this->input->post('nilai11', true),
			"nilai12" => $this->input->post('nilai12', true),
			"nilai13" => $this->input->post('nilai13', true),
			"nilai14" => $this->input->post('nilai14', true),
			"saran" => $this->input->post('saran', true)
		];
		//query untuk insert kedalam database
		$this->db->insert('tbl_kuisioner', $data);
	}
	public function getAlladmin()
		{
			$this->db->order_by('id_admin', 'DESC');
			return $this->db->get('tbl_admin')->result_array();
			
		}
	public function hapusDataAdmin($id_admin)
		{
			$this->db->where('id_admin', $id_admin);
			$this->db->delete('tbl_admin');
		}
	public function hapusDatauser($id_user)
		{
			$this->db->where('id_user', $id_user);
			$this->db->delete('tbl_user');
		}
	public function hapusDatakuisioner($id_kuisioner)
		{
			$this->db->where('id_kuisioner', $id_kuisioner);
			$this->db->delete('tbl_kuisioner');
		}			
	public function getAdminById($id_admin)
		{
			return $this->db->get_where('tbl_admin',['id_admin'=>  $id_admin])->row_array();
		}
	public function ubahDataAdmin($id_admin)
		{
			$data=[
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password',true)
			];
			$this->db->where('id_admin', $this->input->post('id_admin'));
			$this->db->update('tbl_admin', $data);
		}
	public function getAllpengguna()
		{
	 		return $this->db->get('tbl_user')->result_array();
			
	 	}
	public function getPengguna( $limit, $start)
	{
		$this->db->order_by('id_user', 'DESC');
		return $this->db->get('tbl_user', $limit, $start)->result_array();
	}
	public function countAllPengguna()
	{
		return $this->db->get('tbl_user')->num_rows();
	}
	//kuisioner
	public function getAllkuisioner()
		{
	 		return $this->db->get('tbl_kuisioner')->result_array();
			
	 	}
	public function getKuisioner( $limit, $start)
	{
		$this->db->order_by('id_kuisioner', 'DESC');
		return $this->db->get('tbl_kuisioner', $limit, $start)->result_array();
	}
	public function countAllKuisioner()
	{
		return $this->db->get('tbl_kuisioner')->num_rows();
	}

}