<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->library('session');
		$this->load->helper('utility_helper');
		$this->load->model('Auth_model');
	}
	
	public function index()
	{
        $this->sign_in();
    }


	public function sign_in()
    {
       $this->load->view('login');   
    }

    

     public function login()
        {
            
            $name = $this->input->post('username');
            $password = $this->input->post('password');
            if($this->Auth_model->auth($name, $password))
            {
                redirect('index.php/dashboard');
            }
            else
            {
                $this->session->set_flashdata('error', 'Please enter correct username and password');
                redirect('index.php');

            }
            
        }

}


?>