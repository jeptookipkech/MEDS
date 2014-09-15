<?php
class User extends CI_Model
{
 function login($username,$password,$user_type)
 {
   $this->db->select('*');
   $this->db->from('user');
   $this->db->where('username',$username);
   $this->db->where('password',MD5($password));
   $this->db->where('user_type', $user_type);

   $this->db->limit(1);

   $query = $this->db-> get();

   if($query-> num_rows()== 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>
