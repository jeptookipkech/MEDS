<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory_Record extends CI_Controller {
	function __construct()
	{
	  parent::__construct();
	}
	
	function GeTAll(){
        
        $this->load->model('inventory_recordsmodel');
	
        $data['query'] = 
        $this->inventory_recordsmodel->inventory_record_list_getall();
	
        $this->load->view('inventory_records',$data);
    
    }
function Get(){
    
    $data['id'] = $this->uri->segment(3);
    $data['item_name'] = $this->uri->segment(4);
     
    $data['sql'] = $this->db->get_where('inventory', array('reagent_id' => $data['id']))->result_array();
    
    $query= $this->db->get_where('reagents_inventory_record', array('id' => $data['id']));
    $results=$query->result_array();
     /*
    echo "<pre>";
    print_r($results[0]);
    echo "</pre>";
    die();
    */
    $data['query']=$results[0];
   
    //$data['sql']=$this->db->get_where('reagents',array(''=>$data['']))->result_array();
    $this->load->view('inventory_records',$data );
    
    
}

function print_inventory_records(){
  $data['id'] = $this->uri->segment(3);
  $data['item_name'] = $this->uri->segment(4);
     
  $sql = $this->db->get_where('inventory', array('reagent_id' => $data['id']));
    
  $query= $this->db->get_where('reagents_inventory_record', array('id' => $data['id']));
  $results=$query->result_array();
  $results_sql = $sql->result_array();
    
   /*echo "<pre>";
   print_r($results[0]);
   print_r($results_sql[0]);
    echo "</pre>";
    die();*/
    
  $query=$results[0];
  $query_sql=$results_sql[0];
   
  $this->load->library('mpdf/mpdf');
  $print = "";
  $i=1;
  //Reagents record
  $print.='<table width="580" border="0" align="center" bgcolor="e8e8ff">

      <tr>
          <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Card Number</b></td>
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Batch Number</b></td>         
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Certificate Number</b></td>
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Description</b></td>
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Current Quantity</b></td>
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>MSDS (Material Saftey Data Sheet)</b></td>
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Expiry Date</b></td>
      </tr>';
            foreach($results as $row){
              
           // if($i==2){
                 
                $print .="<tr>";
            //} 
             $print .=' <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;background-color: #62ff62;">'.$row['card_number'].'</td>';
             $print .=' <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;background-color: #62ff62;">'.$row['batch_number'].'</td>';
             $print .=' <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;background-color: #62ff62;">'.$row['certificate_number'].'</td>';
             $print .=' <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;background-color: #62ff62;">'.$row['item_description'].'</td>';
             $print .='<td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;background-color: #62ff62;">'.$row['quantity'].'</td>';
             $print .='<td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;background-color: #62ff62;">'.$row['msds'].'</td>';
             $print .=' <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;background-color: #62ff62;">'.$row['expiry_date'].'</td>';
            

            $print .="</tr>";
            }

  $print .="</table>";
  //Space between records
  $print.='<table width="580" border="0" align="center" bgcolor="e8e8ff"> <tr> </tr></table>';

  //Second record
    $print.='<table width="580" border="0" align="center" bgcolor="e8e8ff">

      <tr>
          <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Card Number</b></td>
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Batch Number</b></td>         
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Certificate Number</b></td>
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Description</b></td>
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Current Quantity</b></td>
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>MSDS (Material Saftey Data Sheet)</b></td>
         <td height="20px" style="text-align: center;border-bottom: solid 1px #c0c0c0;border-right: solid 1px #c0c0c0;"><b>Expiry Date</b></td>
      </tr>';
            foreach($results_sql as $row){
              
           // if($i==2){
                 
                $print .="<tr>";
            //} 
             
             $print .=' <td style="border-right: dotted 1px #c0c0c0;text-align: center;border-bottom: solid 1px #c0c0c0;">'.$i.'</td>';
             $print .='  <td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row['requisition'].'</td>';
             $print .='   <td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row['lpo'].'</td>';
             $print .='  <td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row['received_by'].'</td>';
             $print .='  <td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row['issued_by'].'</td>';
             $print .='  <td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row['quantity_issued'].'</td>';
             $print .=' <td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row['balance'].'</td>';
             $print .='   <td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row['date_time'].'</td>';
                    
            

            $print .="</tr>";
            }

  $print .="</table>";
  echo $print;
  die;
  $this->load->library('mpdf/mpdf');// Load the library
  $this->mpdf->WriteHTML($print); // Output the results in the browser
  $this->mpdf->Output($filename,'D'); //bring up "Save as Dialog"
                
}
}
?>