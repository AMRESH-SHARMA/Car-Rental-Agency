<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Cart extends CI_Controller {  
  

    public function index()  
    {  
        $this->available();  
    } 

  //----------------------------------------------------------------------------------INDEX PAGE
    public function available()  
    {  
        $this->load->view('inc/header');
        $this->load->view('upload/car_av');   
    }


  //------------------------------------------------------------------MAIN PAGE AFTER AGENCY LOGIN
    public function main_agency()  
    {  
        $this->load->view('inc/header'); 
        $this->load->view('agencymain');  
    }


  //-----------------------------------------------------------------------------UPLOAD CAR FUNCTION
    public function upload()  
    { 
   
      $this->load->view('inc/header2');      
      $this->load->model('loginmodel');        
      $result['data']=$this->loginmodel->vehicle_records();
      $this->load->view('upload/dashboard',$result);	
     
    }

  //--------------------------------------------------------------------------------ADD CAR FUNCTION
    public function add_car()
	{
        $this->load->view('inc/header');    
        $this->load->view('upload/add');
	}

    //-----------------------------------------------------------------------------CAR  ADDED FUNCTION
    public function car_added()
    {
          $this->load->view('inc/header.php');      
    
      //this array is used to get fetch data from the page.  
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

    //-----------------------------------------------------------------------------DELETE CAR FUNCTION
    public function del_car()
    {

      $this->load->view('inc/header');    
      $id=$this->input->post('id');
      $this->load->model('loginmodel');
         if($this->loginmodel->del($id))
         {
          return redirect('cart/upload');   
         }

    }
  //----------------------------------------------------------------------------------EDIT CAR FUNCTION
  public function edit_car()
	{
      $this->load->view('inc/header');    
      $id=$this->input->post('id');
      $data = array(  
        'id' => $this->input->post('id'),
        'vmodel'   => $this->input->post('vmodel'),  
        'vnumber'  => $this->input->post('vnumber'),  
        'seat'     => $this->input->post('seat'),  
        'rent'     => $this->input->post('rent'),  
        );
      $this->load->view('upload/edit',$data);

	}


  //--------------------------------------------------------------------------------CAR UPDATED FUNCTION
  public function car_updated()
  {
    $this->load->view('inc/header');    
    $id=$this->input->post('id');
    $data = array(  
      'vmodel'   => $this->input->post('vmodel'),  
      'vnumber'  => $this->input->post('vnumber'),  
      'seat'     => $this->input->post('seat'),  
      'rent'     => $this->input->post('rent'),  
      );
        $this->load->model('loginmodel');
        if($this->loginmodel->updated($id,$data))
        {
          return redirect('cart/upload');   
        }
  }


  //------------------------------------------------------------------------------VIEW BOOKING FUNCTION
  public function view_booked()  
  {  
    $this->load->view('inc/header2');  
    $this->load->model('loginmodel');        
    $result['data']=$this->loginmodel->book_records();
    $this->load->view('upload/booked',$result);	
  }
  //------------------------------------------------------------------------------VIEW BOOKING FUNCTION
  public function search()  
  {  
    $this->load->view('inc/header2');
    $vnumber = $this->input->post('vnumber');  
    $this->load->model('loginmodel');        
    $result['data']=$this->loginmodel->search($vnumber);
    $this->load->view('upload/search',$result);	
  }


 }
?>  