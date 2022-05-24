<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login');
		$this->session->sess_destroy();
	}
	public function cek_login(){
		$email = $this->input->post('email');
    	$pass = $this->input->post('password');

    	$data['user'] = $this->login_model->login($email,$pass);
    	if(!empty($data['user'])){
    		//Jika data tidak kosong
    		$this->session->set_flashdata('msg','
    			<section class ="" style="padding-top: 25px;">
                    <div class="container">
                        <div class="alert alert-success">
                            <h4>Berhasil </h4>
                            <p>Anda berhasil login.</p>
                        </div>
                    </div>
                </section>
    			');
    		//print_r($data);
    		$this->session->set_flashdata('url',base_url('dashboard'));
    		$this->session->set_userdata('username',$data['user'][0]->username);
    		$this->session->set_userdata('email',$data['user'][0]->email);
    		$this->session->set_userdata('role',$data['user'][0]->role_type);
			$this->session->set_userdata('kd_cb',$data['user'][0]->kd_cb);
			$this->session->set_userdata('kd_user',$data['user'][0]->id);
    		$this->load->view('berhasil_login');
    	}else{
    		//Jika data kosong
    		$this->session->set_flashdata('msg','
    			<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Email atau Password anda salah.</p>
                </div>
    			');
    		$this->session->set_flashdata('login','false');
    		$this->load->view('login');
    	}    	
	}
}
