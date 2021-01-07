<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_ruang extends CI_Controller {
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
        
        }
    }
    public function index(){
        $data['ruang'] = $this->Model_ruang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/Data_ruang', $data);
        $this->load->view('templates_admin/footer');
    }
    

    public function edit($id){
        $where = array('id_ruang' =>$id);
        $data['ruang'] = $this->Model_ruang->edit_ruang($where, 'tb_ruang')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/edit_ruang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id = $this->input->post('id_ruang');
        $pj_ruang = $this->input->post('pj_ruang');
        $no_tlp = $this->input->post('no_tlp');
        $alamat = $this->input->post('alamat');
        
        $data = array(
            'no_tlp' => $no_tlp,
            'alamat' => $alamat
        );
        $where = array(
            'id_ruang' => $id
        );
        $this->Model_ruang->update_data($where,$data, 'tb_ruang');
        
        redirect('Admin/Data_ruang/index');
        

    }

    public function hapus($id){
        $where = array('id_ruang' => $id);
        $this->Model_ruang->hapus_data($where, 'tb_ruang');

        redirect('Admin/Data_ruang/index');
    }

    
}

/* End of file Data_ruang.php */

?>