<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
 	}

 	 function auth($name,$password)
    {
        $password1 = sha1($password);
        $this->db->where('email',$name);
        $this->db->where('password',$password1);
        $this->db->where('status',1);
        $this->db->where('email_verify_status',1);
        $query = $this->db->get('users');
        if($query->num_rows()==1)
        {
            foreach ($query->result() as $row)
            {
                $data = array(
                    'email'                 =>   $row->email,
                    'name'                  =>   $row->name,
                    'tfa_status'            =>   $row->tfa_status,
                    'tfa_key'               =>   $row->tfa_key,
                    'kyc_status'            =>   $row->kyc_status,
                    'user_id'               =>   $row->id,
                    'ip_address'            =>   $_SERVER['REMOTE_ADDR']
                );
            }

            $this->insertlogindetail($data['user_id']);


            if(($name==$data['email'])) {
            $this->session->set_userdata($data);
            return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
        
    }


    function signup($name,$email,$password,$pin)
    {
    	$data = array( 
				'name'	      =>  $name, 
				'email'       =>  $email,
				'password'    =>  sha1($password),
				'ip_address'  =>  $_SERVER['REMOTE_ADDR'],
				'pin'         =>  sha1($pin) 
			);
    	$this->db->insert('users', $data);
    	$userid=$this->db->insert_id();
    	return $userid;
    }

    function insertlogindetail($user_id)
    {
    	$ip = $_SERVER['REMOTE_ADDR'];
    	$data = array( 
				'user_id'	      =>  $user_id, 
				'ip_address'      =>  $ip 
			);

		$this->db->insert('login_detail', $data);
    }

	

}


?>