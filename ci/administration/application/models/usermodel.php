<?php

Class Usermodel extends CI_Model
{
    public function getinviteuser()
    {
        $q = $this->db->query("select * from user_invitation");
        
        $result = $q->result();
        return $result;
    }

}

?>

