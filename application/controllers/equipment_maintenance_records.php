<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Equipment_Maintenance_Records extends CI_Controller {
    
  function Equipment_Maintenance_Records(){
   parent::__construct();
  }
  function index(){
    $this->load->helper(array('form'));
    $this->load->view('equipment_maintenance_form');
    //This method will have the credentials validation
  }
  
  function GetA(){
      if($this->session->userdata('logged_in')){
	
	$user=$this->session->userdata;
	$test_request_id=$user['logged_in']['test_request_id'];
	$user_type_id=$user['logged_in']['user_type'];
       
	$this->load->model('equipment_maintenancerecordmodel');
	  
	$data['query'] = 
	  $this->equipment_maintenancerecordmodel->equipment_maintenance_list_getall($test_request_id,$user_type_id);
	  $this->load->view('equipment_maintenance_recordview',$data);
     }
     else{
       //If no session, redirect to login page
       redirect('login');
     }    
  }
  function Get(){
      $this->load->model('equipment_maintenancerecordmodel');
      
      $data['query'] = 
	  $this->equipment_maintenancerecordmodel->equipment_maintenance_list_get();
	  
	  $this->load->view('equipment_maintenance_recordview',$data);
      
  }
  function getDamaged(){
      $this->load->model('equipment_maintenancerecordmodel');
      
      $data['query'] = 
	  $this->equipment_maintenancerecordmodel->equipment_maintenance_list_getdamaged();
	  
	  $this->load->view('withdrawn_damaged_equipmentlist',$data);
      
  }
  function getmaintenance_calibration(){
      $this->load->model('equipment_maintenancerecordmodel');
      
      $data['query'] = 
	  $this->equipment_maintenancerecordmodel->equipment_maintenance_list_getmaintenance_calibration();
	  
	  $this->load->view('schedulefor_maintenance_calibration',$data);
      
  }


function print_records(){
  $this->load->model('equipment_maintenancerecordmodel');

  $query = $this->equipment_maintenancerecordmodel->equipment_maintenance_list_get();
  /*echo $query;
  die;*/

  $this->load->library('mpdf/mpdf');
  $print = "";
  $i=1;

  $img=base_url().'images/meds_logo.png';// MEDS Logo 

  $print.='<table width="580" border="0" align="center" bgcolor="e8e8ff">
      <tr>
          <td><center><img style="vertical-align: top;" src='.$img.'/></center></td>
      </tr>
      <tr>
          <th style="border-right: dotted 1px #ddddff;" align="center">Record Number</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Id Number</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Description</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Manufacturer</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Serial No</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Model</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Critical/Non-Critical</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Locatio</th>
      </tr>';
            foreach($query as $row){
              
           // if($i==2){
                 
                $print .="<tr>";
            //} 
            $print .='<td style="border-right: dotted 1px #c0c0c0;text-align: center;border-bottom: solid 1px #c0c0c0;">'.$i.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;" >'.$row->id_number.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->description.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->manufacturer.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->serial_number.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->model.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">Critical</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->location.'</td>';                

            $i++;

            $print .="</tr>";
            }

  $print .="</table>";
 /* echo $print;
  die;*/
  $this->load->library('mpdf/mpdf');// Load the library
  $this->mpdf->WriteHTML($print); // Output the results in the browser
  $this->mpdf->Output($filename,'D'); //bring up "Save as Dialog"
                
}
function print_damaged_records(){
  $this->load->model('equipment_maintenancerecordmodel');
  $query = $this->equipment_maintenancerecordmodel->equipment_maintenance_list_getdamaged();

  $this->load->library('mpdf/mpdf');
  $print = "";
  $i=1;
  //$print .="<table>";
  $print.='<table width="580" border="0" align="center" bgcolor="e8e8ff">

      <tr>
          <th style="border-right: dotted 1px #ddddff;" align="center"></th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Id Number</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Description</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Manufacturer</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Serial No</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Model</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Critical/Non-Critical</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Locatio</th>
      </tr>';
            foreach($query as $row){
              
           // if($i==2){
                 
                $print .="<tr>";
            //} 
            $print .='<td style="border-right: dotted 1px #c0c0c0;text-align: center;border-bottom: solid 1px #c0c0c0;">'.$i.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;" >'.$row->id_number.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->description.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->manufacturer.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->serial_number.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->model.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">Critical</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->location.'</td>';                

            $i++;

            $print .="</tr>";
            }

  $print .="</table>";
  /*echo $print;
  die;*/
  $this->load->library('mpdf/mpdf');// Load the library
  $this->mpdf->WriteHTML($print); // Output the results in the browser
  $this->mpdf->Output($filename,'D'); //bring up "Save as Dialog"
                
}
function print_records_scheduled(){
  $this->load->model('equipment_maintenancerecordmodel');
  $query = $this->equipment_maintenancerecordmodel->equipment_maintenance_list_getmaintenance_calibration();

  $this->load->library('mpdf/mpdf');
  $print = "";
  $i=1;
  //$print .="<table>";
  $print.='<table width="580" border="0" align="center" bgcolor="e8e8ff">

      <tr>
          <th style="border-right: dotted 1px #ddddff;" align="center"></th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Id Number</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Description</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Manufacturer</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Serial No</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Model</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Critical/Non-Critical</th>
          <th style="border-right: dotted 1px #ddddff;" align="center">Locatio</th>
      </tr>';
            foreach($query as $row){
              
           // if($i==2){
                 
                $print .="<tr>";
            //} 
            $print .='<td style="border-right: dotted 1px #c0c0c0;text-align: center;border-bottom: solid 1px #c0c0c0;">'.$i.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;" >'.$row->id_number.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->description.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->manufacturer.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->serial_number.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->model.'</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">Critical</td>';
            $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->location.'</td>';                

            $i++;

            $print .="</tr>";
            }

  $print .="</table>";
 /* echo $print;
  die;*/
  $this->load->library('mpdf/mpdf');// Load the library
  $this->mpdf->WriteHTML($print); // Output the results in the browser
  $this->mpdf->Output($filename,'D'); //bring up "Save as Dialog"
                
}
}
?>