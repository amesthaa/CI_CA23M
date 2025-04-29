<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berita extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Berita_model');
    }
    public function index(){
        $data['berita']=$this->Berita_model->get_all_berita();
        $this->load->view('templates/header');
        $this->load->view('berita/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['berita']=$this->Berita_model->get_all_berita();
        $this->load->view('templates/header');
        $this->load->view('berita/form_berita',$data);
        $this->load->view('templates/footer');
    }
    public function insert(){
        $judul=$this->input->post('judul');
        $kategori=$this->input->post('kategori');
        $headline=$this->input->post('headline');
        $isi=$this->input->post('isi');
        $pengirim=$this->input->post('pengirim');    

        $data=array(
            'judul'=>$judul,
            'kategori'=>$kategori,
            'headline'=>$headline,
            'isi'=>$isi,
            'pengirim'=>$pengirim
        );
        $result=$this->Berita_model->insert_berita($data);

        if($result){
            $this->session->set_flashdata('success','Berita berhasil disimpan');
            redirect('berita');
        }else{
            $this->session->set_flashdata('error','Berita gagal disimpan');
            redirect('berita');
        }
    }
    public function edit($idberita){
        $data['berita']=$this->Berita_model->get_berita_by_id($idberita);
        $this->load->view('templates/header');
        $this->load->view('berita/edit_berita', $data);
        $this->load->view('templates/footer');
    }
    public function update($id){
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('headline', 'headline', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');
        $this->form_validation->set_rules('pengirim', 'pengirim', 'required');

        if ($this->form_validation->run()=== FALSE){
            $this->index($id);
        }else{
            $data=[
                'judul'=>$this->input->post('judul'),
                'kategori'=>$this->input->post('kategori'),
                'headline'=>$this->input->post('headline'),
                'isi'=>$this->input->post('isi'),
                'pengirim'=>$this->input->post('pengirim')
            ];
            $this->Berita_model->update_berita($id,$data);
            redirect('berita');
        }
    }
    public function hapus($idberita){
        $this->Berita_model->delete_berita($idberita);
        redirect('berita');
    }
}