<?php  
  
class Loginmodel extends CI_Model {  
     //---------------------------------------------------------------------------------VALIDATE USER
    public function validate_user($email,$password){

        $q = $this->db->where(['email'=> $email , 'password' => $password,])
                      ->get('tbl_users');
        
        
        if($q->num_rows() ==1)
        {
            session_start();
  

            return True;
            
        }
        else
        {
            return False;
        }
    
    }
         //------------------------------------------------------------------------VALIDATE USER Signup
         public function validate_usersignup($email){

            $q = $this->db->where(['email'=> $email])
                          ->get('tbl_users');
            
            
            if($q->num_rows() ==0)
            {
                return True;
            }
            else
            {
                return False;
            }
        
        }
        
    //-----------------------------------------------------------------------------------VALIDATE AGENCY
    public function validate_agency($aemail,$apassword)
    {

        $q = $this->db->where(['aemail'=> $aemail , 'apassword' => $apassword,])
                       ->get('tbl_agency');
        
        
        if($q->num_rows()==1)
        {
            return True;
        }
        else
        {
            return False;
        }
    
    }
    //------------------------------------------------------------------------VALIDATE AGENCY Signup
    public function validate_agencysignup($aemail){

        $q = $this->db->where(['aemail'=> $aemail])
                      ->get('tbl_agency');
            
            
        if($q->num_rows() ==0)
        {
            return True;
        }
        else
        {
            return False;
        }
        
    }    

    //------------------------------------------------------------------------------SHOW VEHICLE RECORDS
    function vehicle_records()
    {
      $q=$this->db->get("products");
      return $q->result();
    }
    
    //--------------------------------------------------------------------------------DELETE CAR RECORDS 
    public function del($id)
    {
    return $this->db->delete('products',['id'=>$id]);
    }


    //------------------------------------------------------------------------SHOW AVAILABLE CARS TO BOOK
    function car_av_user()
    {
        
        $q=$this->db->get("products");
        return $q->result();
        
    }
    //------------------------------------------------------------------------------SHOW BOOKED RECORDS
    function book_records()
    {
        $q=$this->db->get("booked");
        return $q->result();
    }
    //------------------------------------------------------------------------------SEARCH FUNCTION
    function search($vnumber)
    {
        $q=$this->db->where(['vnumber'=> $vnumber])
                    ->get("booked");
        return $q->result();
    }
    //------------------------------------------------------------------------------EDIT RECORD FUNCTION
    public function edit()
    {
    $id = $this->input->get('id');
    $this->db->where('id', $id);
    $query = $this->db->get('products');
    if($query->num_rows() > 0){
        return $query->row();
    }else{
        return false;
    }
    }

    //------------------------------------------------------------------------------UPDATED RECORD
    public function updated($id,$data)
    {
     //   $id = $this->input->get('id');
//        $this->db->where(['id'=> $id]);
  //      $query = $this->db->get('products');
    //    if($query->num_rows() > 0){
   //         return $query->row();
  //      }else{
      //      return false;
    //    }

        return $this->db->update('products',$data,['id'=>$id]);

    }
           
}  
?>  