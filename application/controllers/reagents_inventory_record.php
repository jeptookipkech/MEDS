<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reagents_Inventory_record extends CI_Controller {
	function __construct()
	{
	  parent::__construct();
	}
	
	function GeTAll(){
        
        $this->load->model('reagents_recordsmodel');
	
        $data['query'] = 
        $this->reagents_recordsmodel->reagents_record_list_getall();
	
        $this->load->view('reagents_inventory_records',$data);
    
    }
function Get(){
    $this->load->model('reagents_recordsmodel');
    
    $data['query'] =$this->reagents_recordsmodel->reagents_record_list_get();
	$this->load->view('reagents_inventory_records',$data);
    
}
function Exhausted (){
	$this->load->model('reagents_recordsmodel');
	
	$data['query'] = $this->reagents_recordsmodel->exhausted();
    $this->load->view('reagents_exhausted_records',$data);
}
function Damaged(){
	$this->load->model('reagents_recordsmodel');
	
	$data['query'] =  $this->reagents_recordsmodel->damaged();
    $this->load->view('reagents_damaged_records',$data);
}
function Expired(){
	$this->load->model('reagents_recordsmodel');

	$data['query'] = $this->reagents_recordsmodel->expired();
    $this->load->view('reagents_expired_records',$data);
}

function print_records(){
	$this->load->model('reagents_recordsmodel');
    
    $query =$this->reagents_recordsmodel->reagents_record_list_get();
	
	$this->load->library('mpdf/mpdf');
	$print = "";
	$i=1;
	//$print .="<table>";
	$print.='<table width="580" border="0" align="center" bgcolor="e8e8ff">

			<tr>
				<th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Number</th>				
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Batch Number</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Description</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">MSDS(Material Saftey Data Sheet)</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Certificate Number</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Card No</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Package Size</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Location</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Re-order</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Order Date</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Expiry Date</th>
			</tr>';
            foreach($query as $row){
              
            //if($i==0){
                 
                $print .="<tr>";
            //}	
            		$print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$i.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->batch_number.'</td>';
					$print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->item_description.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->msds.'</td>';
                  	$print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->certificate_number.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->card_number.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->package_size.$row->package_units.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->location.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->reorder_quantity.$row->reorder_units.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->date.'</td>' ;                    
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->expiry_date.'</td>' ;                    

                $i++;
                $print .="</tr>";
            }
	$print .="</table>";
	/*echo $print;
	die;
*/	$this->load->library('mpdf/mpdf');// Load the library
	$this->mpdf->WriteHTML($print);	// Output the results in the browser
	$this->mpdf->Output($filename,'D'); //bring up "Save as Dialog"
                
}
function print_exhausted_records(){
    $this->load->model('reagents_recordsmodel');    
    $query = $this->reagents_recordsmodel->exhausted();
    
    $this->load->library('mpdf/mpdf');
    $print = "";
    $i=1;
    //$print .="<table>";
    $print.='<table width="580" border="0" align="center" bgcolor="e8e8ff">

            <tr>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Number</th>              
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Batch Number</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Description</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">MSDS(Material Saftey Data Sheet)</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Certificate Number</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Card No</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Package Size</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Location</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Re-order</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Date</th>
            </tr>';
            foreach($query as $row){
              
            //if($i==0){
                 
                $print .="<tr>";
            //} 
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$i.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->batch_number.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->item_description.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->msds.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->certificate_number.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->card_number.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->package_size.$row->package_units.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->location.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->reorder_quantity.$row->reorder_units.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->date.'</td>' ;                    

                $i++;
                $print .="</tr>";
            }
    $print .="</table>";
    /*echo $print;
    die;
*/  $this->load->library('mpdf/mpdf');// Load the library
    $this->mpdf->WriteHTML($print); // Output the results in the browser
    $this->mpdf->Output($filename,'D'); //bring up "Save as Dialog"
                
}
function print_damaged_records(){
    $this->load->model('reagents_recordsmodel');
    
    $query =$this->reagents_recordsmodel->damaged();
    
    $this->load->library('mpdf/mpdf');
    $print = "";
    $i=1;
    //$print .="<table>";
    $print.='<table width="580" border="0" align="center" bgcolor="e8e8ff">

            <tr>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Number</th>              
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Batch Number</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Description</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">MSDS(Material Saftey Data Sheet)</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Certificate Number</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Card No</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Package Size</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Location</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Re-order</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Date</th>
            </tr>';
            foreach($query as $row){
              
            //if($i==0){
                 
                $print .="<tr>";
            //} 
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$i.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->batch_number.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->item_description.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->msds.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->certificate_number.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->card_number.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->package_size.$row->package_units.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->location.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->reorder_quantity.$row->reorder_units.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->date.'</td>' ;                    

                $i++;
                $print .="</tr>";
            }
    $print .="</table>";
    /*echo $print;
    die;
*/  $this->load->library('mpdf/mpdf');// Load the library
    $this->mpdf->WriteHTML($print); // Output the results in the browser
    $this->mpdf->Output($filename,'D'); //bring up "Save as Dialog"
                
}
function print_expired_records(){
    $this->load->model('reagents_recordsmodel');
    
    $query =$this->reagents_recordsmodel->expired();
    
    $this->load->library('mpdf/mpdf');
    $print = "";
    $i=1;
    //$print .="<table>";
    $print.='<table width="580" border="0" align="center" bgcolor="e8e8ff">

            <tr>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Number</th>              
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Batch Number</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Description</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">MSDS(Material Saftey Data Sheet)</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Certificate Number</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Card No</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Package Size</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Location</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Re-order</th>
                <th style="border-right: dotted 0.5px #000000;background-color:c4c4ff;" align="center">Date</th>
            </tr>';
            foreach($query as $row){
              
            //if($i==0){
                 
                $print .="<tr>";
            //} 
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$i.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->batch_number.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->item_description.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->msds.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->certificate_number.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->card_number.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->package_size.$row->package_units.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->location.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->reorder_quantity.$row->reorder_units.'</td>';
                    $print .='<td style="text-align: center;border-bottom: solid 1px #c0c0c0;">'.$row->date.'</td>' ;                    

                $i++;
                $print .="</tr>";
            }
    $print .="</table>";
    /*echo $print;
    die;
*/  $this->load->library('mpdf/mpdf');// Load the library
    $this->mpdf->WriteHTML($print); // Output the results in the browser
    $this->mpdf->Output($filename,'D'); //bring up "Save as Dialog"
                
}
}

?>