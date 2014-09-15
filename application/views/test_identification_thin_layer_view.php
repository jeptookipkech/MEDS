<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>MEDS</title>
  <link rel="icon" href="" />
  <link href="<?php echo base_url().'style/core.css';?>" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url().'style/forms.css';?>" rel="stylesheet" type="text/css" />
   
  <link href="<?php echo base_url().'style/jquery.tooltip.css';?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'style/jquery-ui.css';?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'style/demo_table.css';?>" rel="stylesheet" type="text/css"/>
  
  <!-- bootstrap reference links  
  <link href="<?php echo base_url().'bootstrap/css/bootstrap-theme.css.map';?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'bootstrap/css/bootstrap-theme.min.css';?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'bootstrap/css/bootstrap.css.map'; ?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'bootstrap/css/bootstrap-theme.css';?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'bootstrap/css/bootstrap.min.css';?>" rel="stylesheet" type="text/css"/>  
   -->
  <!-- bootstrap reference library -->
  <link href="<?php echo base_url().'bootstrap/css/bootstrap.css'; ?>" rel="stylesheet" type="text/css"/>

  <script src="<?php echo base_url().'js/jquery.js';?>"></script>
  <script src="<?php echo base_url().'js/jquery-ui.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/tabs.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/jquery.validate.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'tinymce/tinymce.min.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/equationstwo.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/equipmentinfo.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/datepicker.js';?>"></script>
  
  
  <!-- bootstrap reference library -->
  <script src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/Jquery-datatables/jquery.dataTables.js';?>"></script>
  <script>
   $(document).ready(function() {
    /* Init DataTables */
    $('#list').dataTable({
     "sScrollY":"270px",
     "sScrollX":"100%"
    });
     tinymce.init({
    selector: "textarea"
   });
   });
  </script>
  <style type="text/css">
  #reagent{
     width:150px;   
    }
  </style>
  </head>
  <body>
      <?php
   $user=$this->session->userdata;
   $test_request_id=$user['logged_in']['test_request_id'];
   $user_type_id=$user['logged_in']['user_type'];
   $user_id=$user['logged_in']['id'];
   $department_id=$user['logged_in']['department_id'];
   $acc_status=$user['logged_in']['acc_status'];
   $id_temp=1;
   //var_dump($user);
   if(empty($user['logged_in']['id'])) {
       
      redirect('login','location');  //loads the login page in current page div

      echo '<meta http-equiv=refresh content="0;url=base_url();login">'; 

       }
  ?>
 <div id="header"> 
  <div id="logo" style="padding:8px;color: #0000ff;" align="center"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="35px" width="40px"/><b>MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</b></div>
  <div id="log_bar">
  <table  border="0" cellpadding="2px" align="center" width="100%">
      <tr>
        
        <td style="border-bottom: solid 1px #c4c4ff;padding:4px;text-align: center;background-color: #ffffff;" width="20px">
           <img src="<?php echo base_url().'images/icons/user_blue.png';?>" height="25px" width="24px">
        </td>
       <td style="border-bottom: solid 1px #c4c4ff;padding:2px;text-align: left;background-color: #ffffff;" width="130px">
          <?php 
           echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);
         ?> 
       </td>
         <td height="10px"  style="border-bottom: solid 1px #c4c4ff;padding:8px;background-color: #ffffff;"></td>
        <td style="border-bottom: solid 1px #c4c4ff;padding:4px;background-color: #ffffff;" width="200px"></td>
         <td style="background-color:#ffffff;border-bottom: solid 1px #c4c4ff;padding:2px;" >
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> 
              <?php 
               echo($user['logged_in']['role']);
              ?> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url().'account_settings/index/'.$test_request_id.'/'.$user_type_id.'/'.$user_id.'/'.$department_id;?>"><i class="icon-wrench"></i> Settings <img src="<?php echo base_url().'images/icons/settings2.png';?>" height="20px" width="20px"></a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url().'home/logout'?>"><i class="icon-share"></i>Logout</b> <img src="<?php echo base_url().'images/icons/door.png';?>" height="25px" width="25px"></a></li>
            </ul>
          </div>
        </td>
      </tr>
  </table> 
  </div>
</div>
    <div id="form_wrapper">
     <div id="forms">
    <?php echo form_open('test_identification/worksheet_thin_layer', array('id'=>'test_thin_layer_view'));?>

    <table width="950" class="table_form" border="0" cellpadding="4px" align="center">
     <input type="hidden" name ="assignment" value ="<?php echo $assignment;?>"><input type="hidden" name ="test_request" value ="<?php echo $test_request;?>">
      <input type="hidden" name ="analyst" value ="<?php echo $user['logged_in']['fname']." ".$user['logged_in']['lname'];?>"> 
      <tr>
        <td colspan="8"  style="padding: 8px;text-align:right;background-color:#fdfdfd;padding:8px;border-bottom:solid 1px #bfbfbf;"><a href="<?php echo base_url().'test/index/'.$assignment.'/'.$test_request?>"><img src="<?php echo base_url().'images/icons/assign.png';?>" height="20px" width="20px">Back to Test Lists</a></td>
    </tr>
    <tr>
      <td colspan ="8" style="padding:8px;">
       <table width="100%" class="table_form" bgcolor="#c4c4ff" cellpadding="8px" border="0" align ="center">
         <tr>
            <td colspan ="2" style="padding:4px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="80px" width="90px"/></td>
            <td colspan="4" style="padding:4px;color:#0000ff;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;">MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</td>
        </tr>
        <tr>    
            <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Document: Analytical Worksheet</td>
            <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;">Title: <?php echo $results['active_ingredients'];?> <?php echo $results['test_specification'] ;?></td>
            <td height="25px" colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;color:#000000;">REFERENCE NUMBER</td>
            <td colspan="" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><input type="text" id="reference_number" name="reference_number" class="field"/><span id="reference_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="reference_number_r" style="color:red; display:none">Fill this field</span></td>
        </tr>
        <tr>
              <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-left:solid 1px #bfbfbf;">EFFECTIVE DATE: <?php echo date("d/m/Y")?></td>
              <td colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-left:solid 1px #bfbfbf;">ISSUE/REV 2/2</td>
              <td height="25px"colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">SUPERSEDES: 2/1</td>
              <td height="25px" colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">PAGE 1 of 1</td>
        </tr>
        <tr>
              <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">SERIAL No.</td>
              <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><input type="text" name="serial_number"></input></td>
              <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;">Batch/Lot No.</td>
              <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><?php echo $results['batch_lot_number'] ;?></td>          
        </tr>
        <tr>
              <td height="25px" colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;">Form Authorized By:</td>
              <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?></td>
              <td colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">USER TYPE</td>
              <td colspan="" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><?php echo $user['logged_in']['role'];?></td>
        </tr> 
       </table>   
        </td>
     </tr>
     <tr>
      <td colspan="8" align="center" style="padding:8px;">
        <table border="0" align="center" class="table_form" cellpadding="8px" width="100%">
            <tr>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Registration Number: <?php echo $results['laboratory_number'];?></td>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Request Date: <?php echo $results['date_time'];?></td>
            </tr>
            <tr>
              <td colspan="8" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Label Claim: <?php echo $results['active_ingredients'];?></td>
            </tr>
            <tr>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Brand Name: <?php echo $results['brand_name'];?></td>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Method/Specifications: <?php echo $results['test_specification'];?></td>
            </tr>
            <tr>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Manufacturer Details:<br><br> <?php echo $results['manufacturer_name'];?><br><?php echo $results['manufacturer_address'];?></td>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Clients Details:<br><br> <?php echo $results['applicant_name'];?><br><?php echo $results['applicant_address'];?> </td>
            </tr>
            <tr>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Manufacturer Date: <?php echo $results['date_manufactured'];?></td>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Expiry Date: <?php echo $results['expiry_date'];?></td>
            </tr>
            <tr>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Analysis Start Date: <?php echo date("d/m/Y")?></td>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Analysis End Date: <input type="text" value="<?php echo date("d/m/Y");?>"></td>
            </tr>
        </table>
      </td>
     </tr>  
    <tr> 
          <td colspan ="8" align="center" style="text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;"> MEDS Identification by Thin Layer Chromatography Test Form</td>
    </tr>
    <tr>
        <td colspan="2"align="center" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Equipment Number:</td>
        <td colspan = "" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
            <select id ="equipment_make" name="equipment_make">
              <option selected></option>
               <?php
               foreach($query_e as $equipment):
              ?>
               
               <option value="<?php echo $equipment['id_number'];?>" data-equipmentid="<?php echo $equipment['description']; ?>"><?php echo $equipment['id_number'];?></option>
                <?php
                endforeach
                ?> 
              
            </select>
         </td>    
      
        <td colspan=""align="center" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Equipment Make:</td>
        <td colspan = "4" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type = "text" name = "balance_number" id ="equipmentid" size="40"></td>
      </tr>   
    <tr>
        <td colspan = "8"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;color: #0000fb;"><b>Weight of Sample taken</b></td>
    </tr>
    <tr>
        <td colspan = "3" align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of sample + container (g)</td>
        <td colspan = "5" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_weight_container" id ="sample_weight_container"> </td>
    </tr>
    <tr>
        <td colspan = "3" align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of container (g) </td>
        <td colspan = "5" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_container" id ="sample_container"> </td>
    </tr>
    <tr>
        <td colspan = "3" align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of sample (g)</td>
        <td colspan = "5" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_weight" id ="sample_weight" > </td>
    </tr>   
    <tr>  
        <td colspan = "8" align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Dilution</td>
    </tr>
    <tr>
        <td colspan ="8" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <textarea rows ="4" cols ="50" name ="sample_dilution"></textarea></td>
      </tr>
      <tr>  
        <td colspan ="8"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Standards</td>
      </tr>
      <tr>
        <td align="center" colspan ="2" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Standard Description:</td>
        <td colspan = "4" align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">          
          <select id="standard_description" name="standard_description" >
              <option selected></option>
               <?php
               foreach($sql_standards as $s_name):
              ?>
               
               <option value="<?php  echo $s_name['item_description'];?>"data-idno="<?php  echo $s_name['reference_number'];?>" data-lotno="<?php  echo $s_name['batch_number'];?>"data-potency="<?php  echo $s_name['potency'];?>"><?php  echo $s_name['item_description'];?></option>
                <?php
                endforeach
                ?>
            </select>
        </td>        
    </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Potency:</td>
        <td colspan = "" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="potency" id="potency"> </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Lot No.:</td>
        <td colspan = "" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="lot_no" id="lot_no"> </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">ID No.:</td>
        <td colspan = "" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="id_no" id ="id_no"> </td>
      </tr>
       <tr>
        <td colspan = "2" align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard + container (g)</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_container" id ="standard_container"> </td>
      </tr>        
      <tr>
        <td colspan = "2"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of container (g) </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="container" id ="container"> </td>
      </tr>        
      <tr>  
        <td colspan = "2"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard (g)</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight" id ="standard_weight_1" > </td>
      </tr>
      <tr>
        <td align="left" colspan ="8" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>PREPARATION OF TEST REAGENTS</b> </td>
      </tr>
      <tr>
        <td align="left"colspan ="2" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Reagent Description:</td>
        <td colspan="" align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
          <select id="reagent" name="reagent_1" >
              <option selected></option>
               <?php
               foreach($sql_reagents as $s_name):
              ?>
               
               <option value="<?php  echo $s_name['item_description'];?>"><?php  echo $s_name['item_description'];?></option>
                <?php
                endforeach
                ?>
            </select></td>
        </tr>
       <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of reagent + container (g)</td>         
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="reagent_weight_container_1" id ="reagent_weight_container_1"> </td>  
      </tr>
      <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of container (g) </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="reagent_container_1" id ="reagent_container_1"> </td>
      </tr>
      <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of reagent (g)</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="reagent_weight_1" id ="reagent_weight_1"> </td>
      <tr>
        <td align="left" colspan ="8" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>Mobile Phase Preparation</b></td>
      </tr>
       <tr>
        <td colspan = "8"align="center"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols="80" rows="4" name = "mobile_phase"></textarea></td>
      </tr>       
      <tr>
        <td align="left" colspan ="8" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>From chromatograms</b></td>
      </tr>
       <tr>
        <td colspan="8" style="padding:8px;border-bottom:solid 1px #c4c4ff;">
          <table border="0" width="100%" class="table_form" cellpadding="8px" align="center">              
          <tr>        
            <td colspan = "8" align = "center"style="padding: 12px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;color:#0000fb;"> Calculate the Rf value of the substance or Rr value of substance against reference substance </td>
          </tr>
          <tr>        
            <td colspan = "3" align = "right"style="padding: 12px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;color:#0000fb;"><b> Rf value</b> = </td>
            <td colspan = "5" align = "left"style="padding: 12px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;color:#0000fb;"><u>Distance moved by the substance (mm)</u><br/>Distance of solvent front (mm)</td>
          </tr>
          <tr>        
            <td colspan = "3" align = "right"style="padding: 12px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;color:#0000fb;"><b> Rr value</b> = </td>
            <td colspan = "5" align = "left"style="padding: 12px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;color:#0000fb;"><u>Rf value of sample</u><br/>Rf value of standard</td>
          </tr>          
          </table>
        </td>
       </tr> 
      <tr>
        <td colspan ="6">
           <table border="0" align="center" class ="inner_table" cellpadding="8px" width="80%">             
            <tr>
              <td align="center"></td>
              <td align="center">Standard 1</td>
              <td align="center">Standard 2</td>
              <td align="center">Sample 1</td>
              <td align="center"><input type="text" name="impurity_1" id="impurity_1" placeholder ="Impurity"></td>
              <td align="center"><input type="text" name="impurity_2" id="impurity_2" placeholder ="Impurity"></td>
            </tr>
         
            <tr>
              <td align="center"style="padding: 8px;">Distance of solvent front (mm)</td>
              <td style="padding: 8px;"><input type = "text" name ="solvent_std_1" id ="solvent_std_1"></td>
              <td style="padding: 8px;"><input type = "text" name ="solvent_std_2" id ="solvent_std_2"></td >
              <td style="padding: 8px;"><input type = "text" name ="solvent_sample" id="solvent_sample"></td>
              <td style="padding: 8px;"><input type = "text" name ="solvent_impurity_1" id ="solvent_impurity_1"></td>
              <td style="padding: 8px;"><input type = "text" name ="solvent_impurity_2" id ="solvent_impurity_2"></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">Distance moved by the substance (mm)</td>
              <td style="padding: 8px;"><input type = "text" name ="substance_std_1" id ="substance_std_1" </td>
              <td style="padding: 8px;"><input type = "text" name ="substance_std_2" id ="substance_std_2"></td>
              <td style="padding: 8px;"><input type = "text" name ="substance_sample" id="substance_sample"></td>
              <td style="padding: 8px;"><input type = "text" name ="substance_impurity_1" id ="substance_impurity_1"></td>
              <td style="padding: 8px;"><input type = "text" name ="substance_impurity_2" id ="substance_impurity_2"></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">Rf Value</td>
              <td style="padding: 8px;"><input type = "text" name ="rf_std_1" id ="rf_std_1"></td>
              <td style="padding: 8px;"><input type = "text" name ="rf_std_2" id ="rf_std_2"></td>
              <td style="padding: 8px;"><input type = "text" name ="rf_sample" id="rf_sample"></td>
              <td style="padding: 8px;"><input type = "text" name ="rf_impurity_1" id ="rf_impurity_1"></td>
              <td style="padding: 8px;"><input type = "text" name ="rf_impurity_2" id ="rf_impurity_2"></td>
            </tr>

            <tr>
              <td align="center"style="padding: 8px;">Rr value</td>
              <td style="padding: 8px;"><input type = "text" name ="rr_value" id ="rr_value"></td>
            </tr>
            </td>
           </table>
        </td>
      </tr>          
       <tr>
        <td colspan = "8"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;"><b>Acceptance Criteria</b></td>
       </tr>
      <tr> 
        <td colspan = "8" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols ="50" rows="3" name="acceptance_criteria"></textarea> </td>
      </tr>
      <tr> 
        <td colspan = "8"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;"><b>Results</b> </td>
       </tr>
      <tr> 
        <td colspan = "8"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <textarea cols ="50" rows="3" name="results"></textarea> </td>  
      </tr>
      <tr>      
        <td colspan = "8"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;"><b>Comments</b></td>
       </tr>
      <tr> 
        <td colspan = "8"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <textarea cols ="90" rows="3" name="comment"></textarea> </td>
      </tr>           
     <tr>
        <td colspan="8" align="left"  style="padding:8px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><b>Conclusion</b></td>
      </tr>
      <tr>
        <td colspan="8" style="padding:8px;border-bottom:solid 1px #c4c4ff;">
          <table border="0" width="100%" class="table_form" cellpadding="8px" align="center">
            <tr>    
              <td style="border-bottom:dottted 1px #c4c4ff;padding:8px;text-align:center;"><input type="text" name="choice" id = "choice" ></input></td>
            </tr>
          </table>
         </tr>
         <tr>
       <td colspan="8" style="padding:8px;">
        <table border="0" class="table_form" width="100%" cellpadding="8px" align="center">
          <tr>
            <td style="background-color:#ededfd;border-bottom: dotted 1px #c4c4ff;padding:8px;text-align:cente;">Done by: <input type="hidden" id="done_by" name="done_by" value="<?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?>"><?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?></td>
            <td style="background-color:#ededfd;border-bottom: dotted 1px #c4c4ff;padding:8px;text-align:right;">Date conducted: <input type="hidden"  id="date" name="date_done" value="<?php echo date("d/m/Y")?>"><?php echo date("d/M/Y")?></td>
          </tr>
          <tr>
            <td style="border-bottom: dotted 1px #c4c4ff;padding:4px;text-align:left;">Approved by: 
             <select id="name" name="name" >
            <option selected></option>
             <?php
             foreach($sql_approved as $user):
            ?>
             <option value="<?php  echo $user['fname'];?>"><?php  echo $user['fname'], "&nbsp;",$user['lname'];?></option>
              <?php
              endforeach
              ?>
          </select></td>
            <td style="border-bottom: dotted 1px #c4c4ff;padding:4px;text-align:right;">Date: <input type="text"  id="datepicker" name="date" size="10"></td>
          </tr>
          <tr>
            <td colspan="2" style="padding:4px;">Further Comments:</td>
          </tr>
          <tr>
            <td colspan="2" style="padding:4px;text-align:center;"><textarea cols="140" rows="5" name ="further_comments"></textarea></td>
          </tr>
        </table>
      </td>
    </tr>
      <tr>
        <td style ="padding: 8px;"colspan = "8" align ="center"> <input type ="submit" class="btn" name ="save_thin_layer" value ="Submit"></td>
      </tr>
    </table>
   </form> 
 </div>
</div>
  </body>
  </html>