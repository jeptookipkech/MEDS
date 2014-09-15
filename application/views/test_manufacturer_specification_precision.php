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
   });
  </script>
  
  </head
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
  ?>
  <div id="header"> 
   <div id="logo" style="padding:8px;color: #0000ff;" align="left"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="32px" width="40px"/>MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</div>
  </div>
  <div id="log_bar" class="subdivider">
  <table bgcolor="f2f2f2" border="0" cellpadding="8px" align="center" width="100%">
      <tr>
        <td style="border-bottom: solid 1px #c4c4ff;padding:8px;background-color: #ffffff;" width="200px"><a href="<?php echo base_url().'account_settings/index/'.$test_request_id.'/'.$user_type_id.'/'.$user_id.'/'.$department_id;?>"><img src="<?php echo base_url().'images/icons/settings2.png';?>" height="20px" width="20px"></h6>Account Settings</h6></a></td>
        <td style="border-bottom: solid 1px #c4c4ff;padding:8px;text-align: center;background-color: #ffffff;" width="20px">
           <img src="<?php echo base_url().'images/user.png';?>" height="25px" width="24px">
        </td>
       <td style="border-bottom: solid 1px #c4c4ff;padding:8px;text-align: center;" height="10px" width="130px"><h6><b>
          <?php 
           echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);
         ?> 
       </b></h6>
       </td>
         <td height="10px"  style="border-bottom: solid 1px #c4c4ff;padding:8px;background-color: #ffffff;"><h6>
          <?php 
             echo("Logged in as <b>".$user['logged_in']['role']);
            ?></h6>
        </td>
         <td style="border-bottom: solid 1px #c4c4ff;text-align: right;background-color: #ffffff;" >
         <a href="<?php echo base_url().'home/logout'?>"><h6><b>Logout</b><img src="<?php echo base_url().'images/icons/exit.png';?>" height="25px" width="25px"><img src="<?php echo base_url().'images/icons/door.png';?>" height="25px" width="25px"></h6></a>
        </td>
      </tr>
  </table> 
  </div>
   <?php 
    echo "<div id='system_nav'";
      if($user['logged_in']['user_type'] !=6 && $user['logged_in']['user_type'] !=8){
       echo"style='display:none'";
      }
      else{
       echo "style='display:block;'>";
      }
     ?>
     <a href="<?php echo base_url().'user_accounts/Get';?>" class="system_nav system_nav_link ">User Accounts</a>
     <a href="<?php echo base_url().'client_list/Get';?>" class="system_nav system_nav_link">Client List</a>
    </div>
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==6 && $user['logged_in']['department_id'] ==0){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link active">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
        <a href="<?php echo base_url().'complaints_list/records';?>" class="sub_menu sub_menu_link first_link">Complaints</a>
        <a href="<?php echo base_url().'coa_list/records';?>"class="sub_menu sub_menu_link first_link">Certificate of Analysis</a>
        <a href="<?php echo base_url().'finance/index';?>" class="sub_menu sub_menu_link first_link">Finance/Client Billing</a>
    </div>
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==7 && $user['logged_in']['department_id'] ==1){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
    </div>
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==6 && $user['logged_in']['department_id'] ==8){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link active">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
        <a href="<?php echo base_url().'complaints_list/records';?>"class="sub_menu sub_menu_link first_link">Complaints</a>
        <a href="<?php echo base_url().'coa_list/records';?>"class="sub_menu sub_menu_link first_link">Certificate of Analysis</a>
        <a href="<?php echo base_url().'finance/index';?>" class="sub_menu sub_menu_link first_link">Finance/Client Billing</a>
    </div>
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==5 && $user['logged_in']['department_id'] ==3){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
    </div>
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==5 && $user['logged_in']['department_id'] ==2){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
    </div>    
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==5 && $user['logged_in']['department_id'] ==4){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
    </div>
    <div id="form_wrapper_lists">
     <div id="account_lists">
    <?php echo form_open('test_dissolution/worksheet_hplc', array('id'=>'test_dissolution_view'));?>

    <table width="950" bgcolor="#c4c4ff" border="0" cellpadding="4px" align="center">
     
    </tr>   
    <tr>
        <td colspan="4"  align="center" style="padding:8px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"></td>
    </tr>
    <tr>
       <td align="left" style="padding: 10px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;"><b>Standards and Samples</b></td>     
       <td colspan="3" align="left" style="padding: 10px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;">Standard: as directed in assay preparation <br/> Sample: as directed in assay preparation</td>
    </tr>
      
      <tr><td><b></b></td><td><b>Standard</b></td><td><b>Sample</b></td></tr>
   
      <tr>
        <td align="center"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;">1.</td>
        <td style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="standard_1"></td>
        <td colspan = "2"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="sample_1"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;">2.</td>
        <td style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="standard_2"></td>
        <td colspan = "2"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="sample_2"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;">3.</td>
        <td style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="standard_3"></td>
        <td colspan = "2"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="sample_3"></td>
      <tr>
        <td align="center"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;">4.</td>
        <td style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="standard_4"></td>
        <td colspan = "2"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="sample_4"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;">5.</td>
        <td style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="standard_5"></td>
        <td colspan = "2"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="sample_5"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;">6.</td>
        <td style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="standard_6"></td>
        <td colspan = "2"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="sample_6"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;">Average</td>
        <td style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="standard_avg"></td>
        <td colspan = "2"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="sample_avg"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;">SD</td>
        <td style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="standard_sd"></td>
        <td colspan = "2"style="padding: 8px;border-bottom: dotted 1px #bfbfbf;"><input type = "text" name ="sample_sd"></td>
      <tr>
        <td align="center"style="padding: 8px;border-bottom: solid 1px #bfbfbf;">RSD</td>
        <td style="padding: 8px;border-bottom: solid 1px #bfbfbf;"><input type = "text" name ="standard_rsd"></td>
        <td colspan = "2"style="padding: 8px;border-bottom: solid 1px #bfbfbf;"><input type = "text" name ="sample_rsd"></td>
      </tr>
      <tr> <td align="center"colspan ="6" style="padding: 8px;padding: 8px;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> </td>
      </tr>
       <tr>
        <td align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;"><b>Acceptance Criteria</b></td>
        <td align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;"><b>Results </b></td>        
        <td align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;"><b>Comments</b></td>
      </tr>
      <tr>      
        <td align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="precision_acceptance_criteria"> </td></td> 
        <td align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type ="text" name="precision_results"> </td></td> 
        <td align="center"colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="precision_comments"> </td> </td>        
      </tr> 
       <tr>      
        <td align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="precision_acceptance_criteria_2"> </td></td> 
        <td align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type ="text" name="precision_results_2"> </td></td> 
        <td align="center"colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="precision_comments_2"> </td> </td>        
      </tr>              
      <tr> <td align="center"colspan ="8" style="padding: 8px;padding: 8px;background-color: #e8e8ff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
        <b> <u>For Certificate of Analysis use</u> </b> 
      </td>
      </tr>
      <tr>
        <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Method Used</td></tr><tr>
        <td colspan = "8" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;"> <textarea rows ="4" cols = "90" name ="coa_method_used"></textarea></td>
      </tr>
      <tr>
        <td align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Results </td></tr><tr>
        <td colspan = "8"style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <textarea cols ="90" rows="4" name="coa_results"></textarea> </td>  
         </tr>
      <tr>      
        <td align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Specifications</td></tr><tr>
        <td colspan = "8"style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <textarea cols ="90" rows="4" name="coa_specification"></textarea> </td>
      </tr>
      <tr>
        <td style ="padding: 8px;"colspan = "8" align ="center"> <input type ="submit" name ="save_dissolution_hplc" value ="Save Dissolution Data"></td>
      </tr>
    </table>
   </form> 
 </div>
</div>
  </body>
  </html>