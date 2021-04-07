<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
       parent::__construct(); 

        $this->load->library('form_validation');

        $this->load->model('user_model');
    }
    public function login()
    {
         $this->load->view('login');
    }
     public function reg()
    {
         $this->load->view('reg');
    }
    public function login_submit()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('login');
        }else{
           $user=$this->user_model->login_check();
           // var_dump($user);die();
            if ($user) {
                
                $users=$this->input->post('email');
                $this->session->set_userdata("users",$users);
                // var_dump($this->session->has_userdata('users'));
                // echo ($this->session->userdata('users'));die(); // it's print session value 
                // var_dump($this->session->unset_userdata('users')); // it's unset session value
                redirect(site_url('')); 

            }else {
                $this->session->set_flashdata('errors', "Email or password wrong");
                // $this->load->view('login');
                redirect(site_url('login'));
            }
 
         }
    }

    public function regis()
    {
    	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[admin.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('reg');
        }else{
        	$result=$this->user_model->add();
        	if($result){
        		$users=$this->input->post('email');
                $this->session->set_userdata("users",$users);
                redirect(site_url('/'));
        	}
        }
    }
}

