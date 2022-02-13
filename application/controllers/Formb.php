<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Formb extends CI_Controller {  
  

    public function index()  
    {  
        $this->login();  
    }  
  // LOG IN FUNCTION----------------------------------
    public function login()  
    {  
        $this->load->view('agencylogin');  
    }
  //agencyRegister FUNCTION-------------------------------
    public function agencyRegister()
	{
        
	//$this->load->model('queries');
	//$roles=$this->queries->getRoles();
    //$this->load->view('agencyregister', ['roles'=>$roles]);
	  $this->load->view('agencyregister');		 		
	}
  //agencySignup FUNCTION--------------------------------------------------------
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
		//this array is used to get fetch data from the view page.  
		$data = array(  
		//	'agencyname'  => $this->input->post('agencyname'),  
		//	'gender'    => $this->input->post('gender'),
		//	'contact'   => $this->input->post('contact'),  
			'aemail'     => $this->input->post('aemail'),  
			'apassword'  => sha1($this->input->post('apassword')),  
		//	'city'      => $this->input->post('city'),  
			
			);  
		//insert data into database table.  
		$this->db->insert('tbl_agency',$data);  

		redirect("Form");  
		} 
		else
		{	
			$this->agencyRegister();
		}   
	}
    //login_action FUNCTION----------------------------------------------------------------------
    public function login_action()  
    {  
        $this->load->library('form_validation','fv');
        $aemail = $this->input->post('aemail');
        $apassword = $this->input->post('apassword');
        $this->load->model('loginmodel');
        
       if($this->loginmodel->validate_agency($aemail,$apassword))
       {
            $this->load->view('suc');
        } else {
            redirect('Cart/main_agency');
       }      
    }
    
  
  
  
  
    public function data()  
    {  
        if ($this->session->agencydata('currently_logged_in'))   
        {  
            $this->load->view('data');  
        } else {  
            redirect('Form/invalid');  
        }  
    }  
  
    public function invalid()  
    {  
        $this->load->view('invalid');  
    }  
  

 /*   public function signin_validation()  
    {  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('agencyname', 'agencyname', 'trim|xss_clean|is_unique[signup.agencyname]');  
  
        $this->form_validation->set_rules('apassword', 'apassword', 'required|trim');  
  
        $this->form_validation->set_rules('capassword', 'Confirm apassword', 'required|trim|matches[apassword]');  
  
        $this->form_validation->set_message('is_unique', 'agencyname already exists');  
  
    if ($this->form_validation->run())  
        {  
            echo "Welcome, you are logged in.";  
         }   
            else {  
              
            $this->load->view('signin');  
        }  
    } 
*/ 
  
/*    public function validation()  
    {  
        $this->load->model('login_model');  
  
        if ($this->login_model->log_in_correctly())  
        {  
  
            return true;  
        } else {  
            $this->form_validation->set_message('validation', 'Incorrect agencyname/apassword.');  
            return false;  
        }  
    }  
  */
  /*  public function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('Main/login');  
    }  
  */
}  
?>  