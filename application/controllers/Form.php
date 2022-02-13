<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Form extends CI_Controller {  
  

    public function index()  
    {  
        $this->login();  
    }  
  // LOG IN FUNCTION----------------------------------
    public function login()  
    {  
        $this->load->view('userlogin');  
    }
  //userRegister FUNCTION-------------------------------
    public function userRegister()
	{
        
	//$this->load->model('queries');
	//$roles=$this->queries->getRoles();
    //$this->load->view('userregister', ['roles'=>$roles]);
	  $this->load->view('userregister');		 		
	}
  //userSignup FUNCTION--------------------------------------------------------
    public function userSignup()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

        //	$this->form_validation->set_rules('username', 'Username', 'required');
        //	$this->form_validation->set_rules('gender', 'GENDER', 'required');
        //	$this->form_validation->set_rules('contact', 'CONTACT', 'required');
        //	$this->form_validation->set_rules('email', 'EMAIL', 'required');
		$this->form_validation->set_rules('password', 'PASSWORD', 'required',
				array('required' => 'You must provide a %s.')
		);
		
        //	$this->form_validation->set_rules('city', 'ENTER CITY', 'required');  

		if ($this->form_validation->run() == TRUE)
		{
		//this array is used to get fetch data from the view page.  
		$data = array(  
			'username'  => $this->input->post('username'),  
		//	'gender'    => $this->input->post('gender'),
			'contact'   => $this->input->post('contact'),  
			'email'     => $this->input->post('email'),  
			'password'  => sha1($this->input->post('password')),  
			'city'      => $this->input->post('city'),  
			
			);  
		//insert data into database table.  
		$this->db->insert('tbl_users',$data);  

		redirect("Form");  
		} 
		else
		{	
			$this->userRegister();
		}   
	}
    //login_action FUNCTION----------------------------------------------------------------------
    public function login_action()  
    {  
        $this->load->library('form_validation','fv');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('loginmodel');
        
       if($this->loginmodel->validate_user($email,$password))
       {
            
            redirect("Cart");
        } else {
            redirect('Form/invalid');
       }      
    }
    
  
  
  
  
    public function data()  
    {  
        if ($this->session->userdata('currently_logged_in'))   
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
  
        $this->form_validation->set_rules('username', 'Username', 'trim|xss_clean|is_unique[signup.username]');  
  
        $this->form_validation->set_rules('password', 'Password', 'required|trim');  
  
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');  
  
        $this->form_validation->set_message('is_unique', 'username already exists');  
  
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
            $this->form_validation->set_message('validation', 'Incorrect username/password.');  
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