<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('template/header');
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }

    public function login() {
        $this->load->view('template/header');
        $this->load->view('home/login');
        $this->load->view('template/footer');
    }

    public function signup() {
        $this->load->view('template/header');
        $this->load->view('home/signup');
        $this->load->view('template/footer');
    }
    
    public function registration() {
        
        $validation_rules = [
			'name' => ['field' => 'name', 'label' => 'Name', 'rules' => 'trim|required'],
			'phone' => ['field' => 'phone', 'label' => 'Phone', 'rules' => 'trim|required|min_length[11]|max_length[11]|is_unique[users.phone]'],
			'password' => ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required|min_length[5]|max_length[16]', 'required' => 'You must provide a %s.'],
			'con_password' => ['field' => 'con_password', 'label' => 'Confirm Password', 'rules' => 'trim|required|matches[password]'],
			'email' => ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required'],
		];

		$this->form_validation->set_rules($validation_rules);

		if($this->form_validation->run() == FALSE){
			$this->signup();
		}
		else {
			$form_data = array(
				'name' => $this->input->post('name'),
				'phone' => $this->input->post('phone'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email'),
				'gender' => $this->input->post('gender')
			);

			$this->HomeModel->registration($form_data);

			$this->session->set_flashdata('message', '<div class="alert alert-success"><button class="close" data-dismiss="alert">&times;</button><strong>Success!</strong> Account Created Successfully.</div>');
			redirect('login');
		}
    }

    public function check_user() {
    	
    	$phone = $this->input->post('phone');
		$password = $this->input->post('password');

		$this->form_validation->set_rules("phone", "Phone", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");

		if($this->form_validation->run() == FALSE){
			$this->login();
		}
		else{

			$result = $this->HomeModel->check_user($phone, $password);

			if($result){
				redirect('/');
			}
			else{
				if($this->session->userdata('phone')!=""){
					redirect('/');
				}
				else{

					$this->session->set_flashdata('message', '<div class="alert alert-danger"><button class="close" data-dismiss="alert">&times;</button><strong></strong>Phone or Password Wrong</div>');
					$this->login();
				}
			}
		}
    }

  	public function logout(){ // Log Out Method for a User

		$newdata = array(
			'id'  => '',
			'name'  => '',
			'phone'    => '',
			'logged_in'  => FALSE
		);

		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		redirect('login');
	} // End of logout

	public function profile() {
		$data['user'] = $this->HomeModel->profile($this->session->userdata('id'));

		$this->load->view('template/header');
        $this->load->view('home/profile', $data);
        $this->load->view('template/footer');
	}

	public function profile_edit() {
		$data['user'] = $this->HomeModel->profile($this->session->userdata('id'));

		$this->load->view('template/header');
        $this->load->view('home/profile_edit', $data);
        $this->load->view('template/footer');
	}

}