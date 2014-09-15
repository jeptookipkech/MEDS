<?php
class Coa extends CI_Controller{
	public function Coa(){
		parent::__construct();
	} 

	function index(){
		$this->load->view('coa_view');

	}

	function view(){
		$id = $this->uri->segment(3);
		$sql = "SELECT * FROM test_request WHERE id = '$id'";
		$query = $this->db->query($sql);
		$results = $query->result_array();
		$data['query_tr'] = $results[0];

		// $sql_coa = "SELECT * FROM coa WHERE test_request_id = '$id'";
		// $query_coa = $this->db->query($sql_coa)	;
		// $data['query_coa'] = $query_coa->result_array();
		// $results_c = $query_coa->result_array();
		// $data['query_coa_c'] = $results_c[0];

     $data['query_coa']=
    $this->db->select('*')->get_where('coa', array('test_request_id' => $id))->result_array();
    

		$this->load->view('coa_view', $data);
	}
	function submit(){			

		$this->load->model('coa_model');

		if ($this->input->post('save_coa')) {
			$this->coa_model->process();
		}
	}
	function coa_pdf(){
    	$id = $this->uri->segment(3);
		$sql = "SELECT * FROM test_request WHERE id = '$id'";
		$query = $this->db->query($sql);
		$results = $query->result_array();
		$query_tr = $results[0];

		$sql_coa = "SELECT * FROM coa WHERE test_request_id = '$id'";
		$query_coa = $this->db->query($sql_coa)	;
		$query_coa = $query_coa->result_array();
		//$results_c = $query_coa->result_array();
		//$data['query_coa_c'] = $results_c[0];

   // print_r($results);
     //Information for letterhead
    $user=$this->session->userdata;
     $test_request_id=$user['logged_in']['test_request_id'];
     $user_type_id=$user['logged_in']['user_type'];
     $user_id=$user['logged_in']['id'];
     $department_id=$user['logged_in']['department_id'];
     $acc_status=$user['logged_in']['acc_status'];


  $this->load->library('mpdf/mpdf');
  $print = "";
  $i=1;

  $img=base_url().'images/meds_logo.png';// MEDS Logo 

  $print.='<table width="980" align="center" style ="font-family: Sans-Serif; color: #191970;">
  <tr>
            
            <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>Document:Official Form</b></td>
            <td width="150px" height="25px" colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;color:#000000;"><b>REFERENCE NUMBER</b></td>
            <td colspan="" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">
              <input type="hidden" id="reference_number" name="reference_number" class="field"/>
              
            </td>
        </tr>
        <tr>
            <td colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>EFFECTIVE DATE: '.date("d/m/Y").'</b></td>
            <td height="25px"colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><b>REVISION NUMBER</b></td>
            <td height="25px" colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>PAGE 1 of 1</b></td>
        </tr>
        <tr>
            <td width="150px" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><b>Form Authorized By:</b></td>
            <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><b>'.$user['logged_in']['fname']." ".$user['logged_in']['lname'].'</b></td>
            <td colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><b>USER TYPE</b></td>
            <td colspan="" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">'.$user['logged_in']['role'].'</td>
        </tr>
        <tr>
          <td colspan="4" style="padding:8px;border-bottom: solid 1px #c4c4ff;border-right: solid 1px #c4c4ff;color: #0000fb;background-color: #c4c4ff;"></td>
        </tr>
        <tr>        
        <td colspan="6" align="center" 
        style="text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;">
        <h4><b>Certificate of Analysis Form</b></h4></td>
      </tr>';
      

  $print.='<td width = "250px"align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>REGISTRATION NUMBER:</u></td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type="text" name="reg_no"></td>
      <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>Request Date:</u></td>';
  $print.='<td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'. $query_tr['date_time'].'</td>
          <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>Test Date:</u></td>
           <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'.$query_coa_c['date_tested'].'</td></tr>';

  $print.='<tr><td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>NAME OF PRODUCT:</u></td>
       <td colspan="5" style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'. $query_tr['active_ingredients'] .'</td></tr>';

  $print.='<tr>
        <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>CLIENT:</u></td>
        <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type="text" name="client"></td>       
        <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>MANUFACTURER:</u></td>
        <td colspan="4" style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'.$query_tr['manufacturer_name'].'</td>
    </tr>';
  $print.='<tr><td colspan="6"style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>LABEL CLAIM:<b></td></tr>
    <tr><td colspan="6" style ="padding:8px;"><textarea cols ="70" rows ="3" name ="label_claim"></textarea></td></tr>';

  $print.='<tr><td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Batch Number:</td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?'.$query_tr['batch_lot_number'].'</td>
      <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Manufactured:</td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'. $query_tr['date_manufactured'].'</td>
      <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Expires:</td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'. $query_tr['expiry_date'].'</td></tr>';

  $print.='<tr>
      <td align= "center" colspan ="6" style="padding:8px;text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;">
        <h4><u>RESULTS OF ANALYSIS</u></h2></td>      
    </tr>
    <tr>
      <td colspan="6"align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Appearance:</b></td>
    </tr>
    <tr><td colspan="6" style ="padding:8px;"><textarea name ="appearance" cols ="70" rows ="3"></textarea></td></tr>';
  $print.='<tr>
      <td colspan="6">
      <table width="950px" bgcolor="#c4c4ff" border="0" cellpadding="4px" align="center">
        <thead>
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></th>     
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">TEST</th>
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">METHOD</th> 
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">SPECIFICATIONS</th>  
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">RESULTS</th>
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">REMARKS</th>     

        </thead>
        <tbody>';
  $print.='<tr>
      <td colspan="6"align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>CONCLUSION:*<b></td> 
    </tr>
    <tr><td colspan="6" style ="padding:8px;"><textarea name ="conclusions" cols ="70" rows ="3"></textarea></td></tr>
    <tr>
         <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">PREPARED BY:</td>
         <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>'.$query_coa_c['analyst'].'</b><br/>Laboratory Analyst</td>
         <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">REVIEWED BY:</td>
         <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>'. $user['logged_in']['fname']." ".$user['logged_in']['lname'].'</b><br/>Laboratory Supervisor</td>         
         <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">APPROVED BY:</td>
         <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Quality Assurance Manager</td>         
      </tr>';
  
      

  $print .="</table>";
  echo $print;
  die;
  $this->load->library('mpdf/mpdf');// Load the library
  $this->mpdf->WriteHTML($print); // Output the results in the browser
  $this->mpdf->Output($filename,'D'); //bring up "Save as Dialog"

  }
}
?>