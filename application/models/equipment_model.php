<?php
class Equipment_Model extends CI_Model
{
 function register($id_number)
 {
   $this->db->select('*');
   $this->db->from('equipment_maintenance');
   $this->db->where('id_number',$id_number);
   

   $this->db->limit(1);

   $query = $this->db-> get();

   if($query-> num_rows()== 1){
     return $query->result();
   }
   else{
     return false;
   }
 }
}
?>
