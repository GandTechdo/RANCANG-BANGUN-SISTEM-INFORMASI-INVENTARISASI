<?php

class Data extends CI_Controller{

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
       $data['data'] = $this->data_model->tampil_data('data')->result();
       $data['data'] = $this->data_model->tampil_data('data')->result();
       $this->load->view('templates_administrator/header');
       $this->load->view('templates_administrator/sidebar');
       $this->load->view('administrator/data',$data);
       $this->load->view('templates_administrator/footer'); 
	}

    public function detail($id)
    {
    	$data['detail'] = $this->data_model->ambil_id_data($id);
    	$this->load->view('templates_administrator/header');
    	$this->load->view('templates_administrator/sidebar');
    	$this->load->view('administrator/data_detail', $data);
    	$this->load->view('templates_administrator/footer');
    }

    public function search(){
      $keyword = $this->input->post('keyword');
      $data['data']=$this->data_model->get_keyword($keyword);
     $this->load->view('templates_administrator/header');
      $this->load->view('templates_administrator/sidebar');
      $this->load->view('administrator/data', $data);
      $this->load->view('templates_administrator/footer');
    }

      public function update ($id)
      {
        $where= array('id' => $id);
        $data['data'] = $this->data_model->edit_data($where, 'data')-> result();
       $this->load->view('templates_administrator/header');
       $this->load->view('templates_administrator/sidebar');
       $this->load->view('administrator/update',$data);
       $this->load->view('templates_administrator/footer');
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

      $this->data_model->update_data($where, $data,'data');
      $this->session->set_flashdata('pesan','<div class="alert alert-success alert_dismissible fade show" role="alert"> Data Koleksi Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>');
      redirect('administrator/data');

    }

    public function hapus($id)
    {
      $where = array('id' => $id);
      $this->data_model->hapus_data($where, 'data');
      $this->session->set_flashdata('pesan','<div class="alert alert-success alert_dismissible fade show" role="alert"> Data Koleksi Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>');
      redirect ('administrator/data');
    }

    public function tambah_data(){
      $data['data']= $this->data_model->tampil_data('data')->result();
      $this->load->view('templates_administrator/header');
       $this->load->view('templates_administrator/sidebar');
       $this->load->view('administrator/data_form',$data);
       $this->load->view('templates_administrator/footer');
    }
    public function tambah_data_aksi()
    {
      $this->_rules();
      if ($this->form_validation->run() == FALSE)
    {
      $this->tambah_data();
    }else{ 
         $no_inv    = $this->input->post('no_inv');
         $nama_koleksi    = $this->input->post('nama_koleksi');
         $jenis_koleksi    = $this->input->post('jenis_koleksi');
         $asal_daerah    = $this->input->post('asal_daerah');
         $perolehan    = $this->input->post('perolehan');
         $tahun_perolehan    = $this->input->post('tahun_perolehan');
         $ukuran    = $this->input->post('ukuran');
         
           $data = array(
            'no_inv' => $this->input->post('no_inv',TRUE),
            'nama_koleksi' => $this->input->post('nama_koleksi',TRUE),
            'jenis_koleksi'=> $this->input->post('jenis_koleksi',TRUE),
            'asal_daerah' => $this->input->post('asal_daerah',TRUE),
            'perolehan' => $this->input->post('perolehan',TRUE),
            'tahun_perolehan' => $this->input->post('tahun_perolehan',TRUE),
            'ukuran' => $this->input->post('ukuran',TRUE),
            'id_session' => md5($this->input->post('id_session',TRUE)),

          );
      }

    $this->data_model->insert_data('data');
    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Koleksi Berhasil Ditambahkan!
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>');
    redirect('administrator/data');

  }
  public function _rules()
  {
    $this->form_validation->set_rules('no_inv','no_inv','required',['required' => 'NO Inv wajib diisi!']);
    $this->form_validation->set_rules('nama_koleksi','nama_koleksi','required',['required' => 'nama koleksi wajib diisi!']);
    $this->form_validation->set_rules('jenis_koleksi','jenis_koleksi','required',['required' => 'jenis koleksi wajib diisi!']);
    $this->form_validation->set_rules('asal_daerah','asal_daerah','required',['required' => 'asal daerah wajib diisi!']);
  } 
  
}
