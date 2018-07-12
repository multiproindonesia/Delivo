<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {



public function Index()
{
        
        $this->load->view('Pages/Login');  
}

    function user_login_process(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');        
        $where = array(
            'username' => $username,            
            );
        $check1 = $this->M_login->cek_login("login_user",$where)->num_rows();
        if ($check1 > 0 ) {
            $data = $this->M_login->cek_login("login_user",$where)->row();
            if (password_verify($password, $data->password)) {
                        $data_session = array(
                                        'username' =>$data->username,
                                        'status'=>$data->status,
                                        'level'=>$data->level
                                        );
                        $this->session->set_userdata($data_session);
                        date_default_timezone_set('Asia/Jakarta');
                        $date = array('log_in'=>date('m/d/Y h:i:s a', time()));
                        $where= array('username'=>$username);
                        $this->M_login->inputtime($where,$date);
                        redirect('Home');
                    } else {
                        $this->session->set_flashdata('error_msg','Password Salah'); 
                        redirect('Login');
                    }
        }else{
            $this->session->set_flashdata('error_msg','Username Tidak Terdaftar'); 
            redirect('Login');
        }
        
       
 
   
}
 function logout(){
    date_default_timezone_set('Asia/Jakarta');
        $date = array('log_out'=>date('m/d/Y h:i:s a', time()));
                        $where= array('nrk'=>$this->session->userdata('username'));
                        $this->M_login->inputtime($where,$date);
        $this->session->sess_destroy();
        redirect('Home');
    }
}