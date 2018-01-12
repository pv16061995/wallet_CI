<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home_modal extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->library('');
		$this->load->database();
		$this->load->library(array('session', 'form_validation'));

		
	}
	// public function listing()
	// {
		
	// 	$query = $this->db->query("select * from users")->result();


	// }

}


?>