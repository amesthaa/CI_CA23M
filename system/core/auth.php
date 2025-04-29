<?php
defned('BASEPATH') OR exit ('No direct script access allowed');

class Auth extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    public function register(){
        $this->load->view('templates/header');
        $this->load->view('auth/register');
        $this->load->view('templates/footer');
    }

    public function progress_register(){
        $this->load->validation->set_rules('username','username','required|is_unique[users.username]');
        $this->load->validation->set_rules('password','password','required|min_length[6]');
        $this->load->validation->set_rules('confirm_password','Konfirmasi password','required|matches[password]');
        $this->load->validation->set_rules('role','role','required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('auth/register');
            $this->load->view('templates/footer');
        }else{
            $data =[
                'username'=>$this->input->post('username');
                'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' =>$this->input->post('role');
            ];

            if($this->User_model->insert_user($data)){
                $this->session->set_flashdata('success','Pendaftaran berhasil silahkan login');
                redirect('auth/login');
            }else{
                    $this->session->set_flashdata('error','Pendaftaran Gagal Coba Lagi');
                    redirect('auth/register');
            }
        }
        }
    }


    

}
?>