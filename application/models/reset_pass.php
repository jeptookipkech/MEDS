<?php
class Reset_Pass extends CI_Model
{
    function Reset_Pass()
    {
      parent::__construct();
    }
 function email($email)
 {
   $this->db->select('*');
   $this->db->from('user');
   $this->db->where('email',$email);

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
 function reset_email($email){
    $password='123456';
    $acc_status='2';
    $data = array(
        
        'password'=>md5($password),
        'acc_status'=>$acc_status
    );
    $this->db->update('user', $data,array('email' => $email));
     redirect('home','refresh');
 }
}
?>
