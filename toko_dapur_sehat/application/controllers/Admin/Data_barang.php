<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan' ,'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        
        redirect('Auth/login');
        $this->load->model('Model_ruang');
        $this->load->model('Model_barang');
        }
    }
    public function index(){
        $data['barang'] = $this->Model_barang->tampil_data()->result();
        $data['ruang'] = $this->Model_ruang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/Data_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    

    public function tambah_aksi(){
        $kode_barang=$this->input->post('kode_barang');
        $nama_barang=$this->input->post('nama_barang');
        $jumlah=$this->input->post('jumlah');
        $satuan=$this->input->post('satuan');
        $id_ruang=$this->input->post('id_ruang');
        $keadaan=$this->input->post('keadaan');
        $keterangan=$this->input->post('keterangan');

        $data = array(
            'kode_barang'=>$kode_barang,
            'nama_barang'=>$nama_barang,
            'jumlah'=>$jumlah,
            'satuan'=>$satuan,
            'id_ruang'=>$id_ruang,
            'keadaan'=>$keadaan,
            'keterangan'=>$keterangan

        );

        $this->Model_barang->tambah_barang($data, 'tb_barang');
        redirect('Admin/Data_barang/index');

    }

    public function edit($id){
        $where = array('id_barang' =>$id);
        $data['barang'] = $this->Model_barang->edit_barang($where, 'tb_barang')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id = $this->input->post('id_barang');
        $kode_barang=$this->input->post('kode_barang');
        $nama_barang=$this->input->post('nama_barang');
        $jumlah=$this->input->post('jumlah');
        $satuan=$this->input->post('satuan');
        $id_ruang=$this->input->post('id_ruang');
        $keadaan=$this->input->post('keadaan');
        $keterangan=$this->input->post('keterangan');
        
        $data = array(
            'kode_barang'=>$kode_barang,
            'nama_barang'=>$nama_barang,
            'jumlah'=>$jumlah,
            'satuan'=>$satuan,
            'id_ruang'=>$id_ruang,
            'keadaan'=>$keadaan,
            'keterangan'=>$keterangan
            

        );
        $where = array(
            'id_barang' => $id
        );
        $this->Model_barang->update_data($where,$data, 'tb_barang');
        
        redirect('Admin/Data_barang/index');
        

    }

    public function hapus($id){
        $where = array('id_barang' => $id);
        $this->Model_barang->hapus_data($where, 'tb_barang');

        redirect('Admin/Data_barang/index');
    }

    
}

/* End of file Data_barang.php */

?>