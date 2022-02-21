<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Formb extends CI_Controller {  
  

    public function index()  
    {  
        $this->login();  
    }  
  //--------------------------------------------------------------------------------FUNCTION AGENCY login 
    public function login()  
    {  
        
        $this->load->view('agencylogin');  
    }
  //------------------------------------------------------------------------FUNCTION  agencyRegister 
    public function agencyRegister()
	{
      $this->load->view('inc/header');  
	  $this->load->view('agencyregister');		 		
	}
  //--------------------------------------------------------------------------FUNCTION agencySignup 
    public function agencySignup()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

        //	$this->form_validation->set_rules('agencyname', 'agencyname', 'required');
        //	$this->form_validation->set_rules('gender', 'GENDER', 'required');
        //	$this->form_validation->set_rules('contact', 'CONTACT', 'required');
    	$this->form_validation->set_rules('aemail', 'aemail', 'required');
		$this->form_validation->set_rules('apassword', 'apassword', 'required',
				array('required' => 'You must provide a %s.')
		);
		
        //	$this->form_validation->set_rules('city', 'ENTER CITY', 'required');  

		if ($this->form_validation->run() == TRUE)
		{
            $this->load->library('form_validation');
            $aemail = $this->input->post('aemail');
            $this->load->model('loginmodel');
            if ($this->loginmodel->validate_agencysignup($aemail)){ 
		//this array is used to get fetch data from the view page.  
		$data = array(  
		//	'agencyname'  => $this->input->post('agencyname'),  
		//	'gender'      => $this->input->post('gender'),
		//	'contact'     => $this->input->post('contact'),  
			'aemail'      => $this->input->post('aemail'),  
			'apassword'   => ($this->input->post('apassword')),  
		//	'city'        => $this->input->post('city'),  
			
			);  
		//insert data into database table.  
		$this->db->insert('tbl_agency',$data);  

		redirect("Formb");  
		} 
		else
        {	
            echo '<script>alert("Email already registered")</script>';
            $this->agencyRegister();
        }  
    } 
    else
    {	
        
        $this->agencyRegister();
    }    
	}
    //------------------------------------------------------------------------FUNCTION login_action 
    public function login_action()  
    {  
        $this->load->library('form_validation');
        $aemail = $this->input->post('aemail');
        $apassword = $this->input->post('apassword');
        $this->load->model('loginmodel');
        
       if($this->loginmodel->validate_agency($aemail,$apassword))
       {
          
        if( isset( $_SESSION['counter'] ) ) {
            $_SESSION['counter'] = $aemail;
         }else {
            $_SESSION['counter'] = "NOT AVAILABLE";
         } 
          redirect('Cart/main_agency');

        } else
         {
            echo '<script>alert("Invalid email/password")</script>';
            $this->load->view('agencylogin');
       }      
    }

  
}  
?>  