<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('utility_helper');
        $this->load->model('Auth_model');
	}
	
	public function index()
	{
        $this->sign_up();
    }



    public function sign_up()
    {
       $this->load->view('signup');   
    }



     public function registeration()
        {
            
            $name = $this->input->post('name');
            $email = $this->input->post('username');
            $password = $this->input->post('password');
            $pin=$this->input->post('pin');
            if($this->Auth_model->signup($name,$email,$password,$pin))
            {
                redirect('index.php');
            }
            else
            {
                $this->session->set_flashdata('error', 'Please enter correct username and password');
                redirect('index.php/signup');
            }
            
        }

}


?>