<?php

class User extends CI_Controller{

 function __construct(){
    parent::__construct();

    if (!isset($this->session->userdata['username'])){
      $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                             Maaf Anda Belum Login        
                              <button type="button" class="close" data-dismiss="true">&times;</span>
                              </button>
                              </div>');
      redirect('administrator/auth');
    }
  }

	public function index()
	{
		$data['user'] = $this->user_model->tampil_data('user')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/daftar_users',$data);
		$this->load->view('templates_administrator/footer');
	} 

	public function tambah_user()
	{
		$data  = array(
			'username'    => set_value('username'),
			'password'    => set_value('password'),
			'email'   	  => set_value('email'),
			'level'		  => set_value('level'),
			'bocker'     => set_value('blocker'),
		);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/user_form',$data);
		$this->load->view('templates_administrator/footer');


	}	
	public function tambah_user_aksi()
	{
		$this->ruler();

		if($this->form_validation->run() == FALSE)
		{
			$this->tambah_user();
		}else{
			$data  = array(
				'username' => $this->input->post('username',TRUE),
				'password' => md5($this->input->post('password',TRUE)),
				'email'    => $this->input->post('email',TRUE),
				'level'    => $this->input->post('level',TRUE),
				'blocker'   => $this->input->post('blocker',TRUE),
				'id_session'  => md5($this->input->post('id_session',TRUE)),
			);
		}
		$this->user_model->insert_data('user');
    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> Data User Berhasil Ditambahkan!
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>');
    redirect('administrator/user');
	}
	public function _rules()
  {
    $this->form_validation->set_rules('username','username','required',['required' => 'username wajib diisi!']);
    $this->form_validation->set_rules('password','password','required',['required' => 'password wajib diisi!']);
    $this->form_validation->set_rules('email','email','required',['required' => 'email wajib diisi!']);
    $this->form_validation->set_rules('level','level','required',['required' => 'level wajib diisi!']);
    $this->form_validation->set_rules('blocker','blocker','required',['required' => 'bloker wajib diisi!']);
}
     public function update_aksi()
    {
      $id        = $this->input->post('id');
      $no_inv      = $this->input->post('no_inv');
      $nama_koleksi        = $this->input->post('nama_koleksi');
      $jenis_koleksi        = $this->input->post('jenis_koleksi');
      $asal_daerah       = $this->input->post('asal_daerah');
      $ket_tempat       = $this->input->post('ket_tempat');
      $id_session       = $this->input->post('id_session');

      $data = array(
        'no_inv' => $no_inv,
        'nama_koleksi' => $nama_koleksi,
        'jenis_koleksi' => $jenis_koleksi,
        'asal_daerah' => $asal_daerah,
      );

      $where = array(
     'id' => $id
      );

      $this->user_model->update_user($where, $user,'user');
      $this->session->set_flashdata('pesan','<div class="alert alert-success alert_dismissible fade show" role="alert"> Data Koleksi Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>');
      redirect('administrator/data');

  }
	public function hapus($id)
    {
      $where = array('id' => $id);
      $this->user_model->hapus_user($where, 'user');
      $this->session->set_flashdata('pesan','<div class="alert alert-success alert_dismissible fade show" role="alert"> Data Koleksi Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>');
      redirect ('administrator/user');
  }
}