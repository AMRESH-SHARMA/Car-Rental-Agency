<?php  
  
class Loginmodel extends CI_Model {  
  
    public function validate_user($email,$password){

        $q = $this->db->where(['email'=> $email , 'password' => $password,])
                       ->get('tbl_users');
        
        
        if($q->num_rows() ==1)
        {
            return True;
        }
        else
        {
            return False;
        }
    
    }

    public function validate_agency($aemail,$apassword){

        $query = $this->db->where(['aemail'=> $aemail , 'apassword' => $apassword,])
                       ->get('tbl_agency');
        
        
        if($query->num_rows()==1)
        {
            return True;
        }
        else
        {
            return False;
        }
    
    }

    
      
}  
?>  