<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Form extends CI_Controller {  
  

    public function index()  
    {  
        $this->login();  
    }  
  //-----------------------------------------------------------------------------LOG IN FUNCTION
    public function login()  
    {  
        $this->load->view('userlogin');  
    }
  //-----------------------------------------------------------------------FUNCTION userRegister 
    public function userRegister()
	{
        
	  $this->load->view('userregister');		 		
	}
  //-------------------------------------------------------------------------FUNCTION userSignup 
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
      $this->load->library('form_validation');
      $email = $this->input->post('email');
      $this->load->model('loginmodel');
          if ($this->loginmodel->validate_usersignup($email)){
          //this array is used to get fetch data from the view page.  
            $data = array(  
              'username'  => $this->input->post('username'),  
            //	'gender'    => $this->input->post('gender'),
              'contact'   => $this->input->post('contact'),  
              'email'     => $this->input->post('email'),  
              'password'  => ($this->input->post('password')),  
              'city'      => $this->input->post('city'),  
              
              );  
          //insert data into database table.  
            $this->db->insert('tbl_users',$data);  
            redirect("Form");  
            }
            else{	
            echo '<script>alert("Email already registered")</script>';
            $this->userRegister();
            }  
		} 
    else
    {	            
    $this->userRegister();
    }  
 
	}
  //-----------------------------------------------------------------------------------FUNCTION login_action 
  public function login_action()  
  {  

      $this->load->library('form_validation');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $this->load->model('loginmodel');
        
      if($this->loginmodel->validate_user($email,$password))
     {

     if(isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] = $email;
      $this->car_av_btn();
      }else {
      $_SESSION['counter'] = 0;
      $this->login();
     }          

    } else {
    echo '<script>alert("Invalid email/password")</script>';
    $this->load->view('userlogin');
   }      
  }


    //----------------------------------------------------------------------------------AVAILABLE CARS FUNCTION
    public function car_av_btn()  
    { 
      
      if (isset($_SESSION['counter']))
      {
      $this->load->view('inc/header2');      
      $this->load->model('loginmodel');        
      $result['data']=$this->loginmodel->car_av_user();
      $this->load->view('upload/car_av',$result);	
      }
      elseif (!isset($_SESSION['counter'])){
        $this->load->view('inc/header');      
        $this->load->model('loginmodel');        
        $result['data']=$this->loginmodel->car_av_user();
        $this->load->view('upload/car_av',$result);	
      }
       
    }

    //-------------------------------------------------------------------------------REQUEST BOOKING FUNCTION
    public function booked()
    {
    if(!$this->input->post('id') == 0){

    //this array is used to get fetch data from the page.  
    $data = array(  
      'email'   =>$this->input->post('id'),
      'date'    => $this->input->post('date'),  
      'day'     => $this->input->post('day'),
      'vnumber' => $this->input->post('vnumber')   
      );   
    //insert data into database table.  
        if($this->db->insert('booked',$data)){
          $this->load->view('inc/header');
          $this->load->view('booksuccess');	}
        
        else{
        echo'data not inserted';}
    }  
    elseif($this->input->post('id') == 0)
    {redirect('Form');}
   
    }


}  
?>  