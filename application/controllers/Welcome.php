<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
        
        $this->load->view('home');  
	
	}
	//--------------------------------------------------------------------------logout FUNCTION
	public function logout()
	{					 
		$this->load->view('session_ex');  
	}

}
?>