<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Cart extends CI_Controller {  
  

    public function index()  
    {  
        $this->available();  
    } 

  // LOG IN FUNCTION----------------------------------
    public function available()  
    {  
        $this->load->view('car_available');  
    }


  // MAIN PAGE AFTER AGENCY LOGIN--------------------------------------------
    public function main_agency()  
    {  
        $this->load->view('inc/header'); 
        $this->load->view('agencymain');  
    }


  // UPLOAD CAR FUNCTION
    public function upload()  
    { 
        $this->load->view('inc/header');  
        $this->load->view('upload/dashboard');  
        $this->load->library('table');
        $this->load->helper('html');


        $query = $this->db->query('SELECT * FROM products');
        echo $this->table->generate($query);
        
    }


    public function addcar()
	{
        $this->load->view('inc/header');    
        $this->load->view('upload/add');
	}

    public function caradded()
	{
        $this->load->view('inc/header.php');      
      //  $this->load->view('upload/add');
  
		//this array is used to get fetch data from the view page.  
		$data = array(  
			'vmodel'   => $this->input->post('vmodel'),  
			'vnumber'  => $this->input->post('vnumber'),  
			'seat'     => $this->input->post('seat'),  
			'rent'     => $this->input->post('rent'),  
			);  
		//insert data into database table.  
        $this->db->insert('products',$data);

        redirect("Cart/upload");

	}

    

  // VIEW BOOKING FUNCTION
    public function view_booking()  
    {  
    $this->load->view('agency');  
    }

    
   public function viewdashboard()  
    {  
        $this->db->select();
    }  

    public function i()
    {
            $data = array(			
            'vmodel'   => $this->input->post('vmodel'),  
		      	'vnumber'  => $this->input->post('vnumber'),  
		      	'seat'     => $this->input->post('seat'),  
		      	'rent'     => $this->input->post('rent'),  
             );

            $this->db->select('products',$data);
    }
  
  

 
  

  /*  public function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('Main/login');  
    }  
  */
}  
?>  