<?php


class Queries extends CI_MODEL {


/*	public function getRoles()
	{
       
        $roles = $this->db->get('tbl_roles');  	 	
        if($roles->num_rows() > 0){
            return $roles->result();

        }
		
	}
*/    
	public function registerAdmin($data)
	{
       return$this->db->insert('tbl_agency', $data);

    }
    public function chkAdminExist($data)
	{
        $chkAdmin=$this->db->where(['sno'=> '1'])
                       ->get('tbl_agency');
        if($chkAdmin->num_rows() > 0)
        {
            return $chkAdmin->num_rows();
        }

    }
	
    public function adminExist($email, $password)
	{
        $chkAdmin=$this->db->where(['email'=>$email, 'password'=>$password])
                       ->get('tbl_agency');
        if($chkAdmin->num_rows() > 0)
        {
            return $chkAdmin->row();
        }

    }
	
	

}
?>