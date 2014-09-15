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
     <input type="hidden" name ="assignment" value ="<?php echo $assignment;?>"><input type="hidden" name ="test_request" value ="<?php echo $test_request;?>">
      <input type="hidden" name ="analyst" value ="<?php echo $user['logged_in']['fname']." ".$user['logged_in']['lname'];?>"> 
      <tr>
       <td colspan="8"  style="padding: 8px;text-align:right;background-color:#fdfdfd;padding:8px;"><a href="<?php echo base_url().'test/index/'.$assignment.'/'.$test_request?>"><img src="<?php echo base_url().'images/icons/back.png';?>" height="20px" width="20px"><b>Back</b></a></td>
    </tr>
     <tr>
        <td rowspan="2" colspan ="2" style="padding:4px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="80px" width="90px"/></td>
        <td colspan="6" style="padding:4px;color:#0000ff;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;">MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</td>
    </tr>
    <tr>    
        <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Document: Analytical Worksheet</td>
        <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;">Title: <?php echo $results['active_ingredients'];?> <?php echo $results['test_specification'] ;?></td>
        <td height="25px" colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;color:#000000;">REFERENCE NUMBER</td>
        <td colspan="3" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><input type="text" id="reference_number" name="reference_number" class="field"/><span id="reference_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="reference_number_r" style="color:red; display:none">Fill this field</span></td>
    </tr>
    <tr>
          <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-left:solid 1px #bfbfbf;">EFFECTIVE DATE: <?php echo date("d/m/Y")?></td>
          <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-left:solid 1px #bfbfbf;">ISSUE/REV 2/2</td>
          <td height="25px"colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">SUPERSEDES: 2/1</td>
          <td height="25px" colspan="3" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">PAGE 1 of 1</td>
    </tr>
    <tr>
          <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">SERIAL No.</td>
          <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><input type="text" name="serial_number"></input></td>
          <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;">Batch/Lot No.</td>
          <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><?php echo $results['batch_lot_number'] ;?></td>          
    </tr>
    <tr>
          <td height="25px" colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;">Form Authorized By:</td>
          <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?></td>
          <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">USER TYPE</td>
          <td colspan="3" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><?php echo $user['logged_in']['role'];?></td>
    </tr> 
    <tr> 
          <td colspan ="8" align="center" style="text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;"> MEDS Dissolution Test Form</td>
    </tr> 
      <tr>
        <td  colspan = "8" align= "center" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
          <a class=" sub_menu sub_menu_link first_link"href="<?php echo base_url().'test_dissolution/index_hplc/'.$assignment.'/'.$test_request?>"><b>HPLC</b>
          <a class=" sub_menu sub_menu_link first_link"href="<?php echo base_url().'test_dissolution/index/'.$assignment.'/'.$test_request?>"><b>UV</b>
          <a class=" sub_menu sub_menu_link first_link"href="<?php echo base_url().'test_dissolution/index_delayed_release/'.$assignment.'/'.$test_request?>"><b>Delayed Release</b>  
          <a class=" sub_menu sub_menu_link first_link"href="<?php echo base_url().'test_dissolution/index_enteric_coated/'.$assignment.'/'.$test_request?>"><b>Enteric Coated</b> 
          <a class=" sub_menu sub_menu_link first_link"href="<?php echo base_url().'test_dissolution/index_normal/'.$assignment.'/'.$test_request?>"><b>Normal HPLC</b> 
          <a class=" sub_menu sub_menu_link first_link"href="<?php echo base_url().'test_dissolution/index_two_components/'.$assignment.'/'.$test_request?>"><b>Two Components</b>     

        </td>
    </tr>   
    <tr>
        <td colspan="8"  align="center" style="padding:8px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"></td>
    </tr>
    <tr>
        <td colspan="2"align="center" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Balance Make:</td>
        <td colspan = "" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
            <select  name="balance_make">
              <option selected></option>
         <!--       <?php
               foreach($query_e as $equipment):
              ?>
               
               <option value=""><?php echo $equipment['model'];?></option>
                <?php
                endforeach
                ?> -->
              
            </select>
         </td>    
      
        <td colspan="2"align="center" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">ID Number:</td>
        <td colspan = "3" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
            <select  name="balance_number">
              <option selected></option>
         <!--       <?php
               foreach($query_e as $equipment):
              ?>
               
               <option value=""><?php echo $equipment['id_number'];?></option>
                <?php
                endforeach
                ?> -->
              
            </select>
         </td>
      </tr>
      <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;"><b>Standard Description:<b></td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;"><b>Standard 1:<b></td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;"><b>Standard 2:<b></td>
        
      </tr>
      <tr>
        <td align="center" colspan = "2" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_description"> </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Potency: <input type ="text" name="potency"></br> Lot No.:<input type ="text" name="lot_no"> ID No.:<input type ="text" name="id_no"> </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Potency: <input type ="text" name="potency_2"></br> Lot No.:<input type ="text" name="lot_no_2"> ID No.:<input type ="text" name="id_no_"> </td>
        <td colspan = "4"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
      </tr>
       <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard + container (g)</td>         
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="potency_standard_container"> </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="potency_standard_container_2"> </td>       
        <td colspan = "4"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
      </tr>
      <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of container (g) </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="potency_container"> </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="potency_container_2"> </td>
        <td colspan = "4"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
      </tr>
      <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard (g)</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_1"> </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_2"> </td>
        <td colspan = "2"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
      </tr> 
      <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Dilution</td>
        <td colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_dilution"> </td>
      </tr>          
      <tr>
        <td align="center"><b></b></td>
        <td align="center"><b>Retention Time (minutes)</b></td>
        <td align="center"><b>Peak Area</b></td>
        <td align="center"><b>Asymmetry</b></td>
        <td align="center"><b>Resolution</b></td>
      </tr>
   
      <tr>
        <td align="center"style="padding: 8px;">1.</td>
        <td style="padding: 8px;"><input type = "text" name ="difference_standard"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_11"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_12"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_13"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">2.</td>
        <td style="padding: 8px;"><input type = "text" name ="difference_standard_2"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_21"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_22"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_23"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">3.</td>
        <td style="padding: 8px;"><input type = "text" name ="difference_standard_3"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_31"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_32"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_33"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">4.</td>
        <td style="padding: 8px;"><input type = "text" name ="difference_standard_4"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_41"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_42"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_43"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">5.</td>
        <td style="padding: 8px;"><input type = "text" name ="difference_standard_5"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_51"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_52"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_53"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">6.</td>
        <td style="padding: 8px;"><input type = "text" name ="difference_standard_6"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_61"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_62"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_63"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">Average</td>
        <td style="padding: 8px;"><input type = "text" name ="difference_standard_avg"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s1_avg"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s2_avg"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s3_avg"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">SD</td>
        <td style="padding: 8px;"><input type = "text" name ="difference_standard_sd"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s1_sd"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s2_sd"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s3_sd"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">RSD</td>
        <td style="padding: 8px;"><input type = "text" name ="difference_standard_rsd"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s1_rsd"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s2_rsd"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s3_rsd"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">Acceptance Criteria</td>
        <td style="padding: 8px;">NMT 2.0%</td>
        <td style="padding: 8px;">NMT 2.0%</td>
        <td style="padding: 8px;">NMT 2.0%</td>
        <td style="padding: 8px;">NLT 5.0%</td>
        
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">Comment</td>
        <td style="padding: 8px;"><input type = "text" name ="difference_standard_comment"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s1_comment"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s2_comment"></td>
        <td style="padding: 8px;"><input type = "text" name ="difference_s3_comment"></td>
      </tr>
      <tr>
        <td align="left" colspan ="8" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>Chromatographic System</b></td>
      </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Equipment Make:</td>
        <td colspan = "3" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
            <select  name="equipment_make">
              <option selected></option>
         <!--       <?php
               foreach($query_e as $equipment):
              ?>
               
               <option value=""><?php echo $equipment['model'];?></option>
                <?php
                endforeach
                ?> -->
              
            </select>
         </td>    
      
        <td align="left" style="background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">ID Number:</td>
        <td colspan = "3" style="background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
            <select  name="equipment_number">
              <option selected></option>
         <!--       <?php
               foreach($query_e as $equipment):
              ?>
               
               <option value=""><?php echo $equipment['id_number'];?></option>
                <?php
                endforeach
                ?> -->
              
            </select>
         </td>
      </tr>
      <tr>
        <td align="left" colspan ="8" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>Mobile Phase Preparation</b></td>
      </tr>
       <tr>
        <td colspan = "8"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols="50" rows="4" name = "mobile_phase"></textarea></td>
      </tr>
      <tr>
        <td align="left" colspan ="8" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>The chromatographic conditions:</b></td>
      </tr>
      <tr>
        <td align="left" colspan ="8" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>Chromatographic System</b></td>
      </tr>
      <tr>
        <td rowspan = "2" colspan ="2"align="right" style="padding: 8px;background-color:#ffffff;border-right: solid 1px #bfbfbf;border-left: solid 1px #bfbfbf;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>A stainless steel column:</b></td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Name:</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="name"> </td>       
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Length:</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;border-right: solid 1px #bfbfbf;"> <input type ="text" name="length"> </td>       
      </tr> 
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Lot/Serial No.:</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="serial_no"> </td>       
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Manufacturer:</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;border-right: solid 1px #bfbfbf;"> <input type ="text" name="manufacturer"> </td>       
      </tr>
      <tr>
        <td colspan ="2"align="right" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Column Pressure:</td>
        <td colspan ="2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="column_pressure"> </td>       
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Column Oven Pressure:</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="column_oven_pressure"> </td>       
      </tr>
      <tr>
        <td colspan ="2"align="right" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Mobile Phase Flow rate:</td>
        <td colspan ="2"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="flow_rate"> </td>       
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Detection of Wavelength:</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="wavelength"> </td>       
      </tr>
       <tr>
        <td align="left" colspan ="8" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;color:#0000fb;" ><b>Reagent</b></td>
      </tr>
       <tr>
        <td colspan = "8"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols="50" rows="4" name = "std_prepaparation"></textarea></td>
      </tr>
      <tr>
        <td align = "center" colspan = "3"style="padding: 8px;" ><b>Requirements</b></td>
        <td align = "center" style="padding: 8px;"><b>Actual</b></td>
        <td align = "left" colspan = "6"style="padding: 8px;"><b>Comment</b></td>
      </tr>
      <tr>
        <td colspan ="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;">Apparatus:</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> <input type ="text" name="apparatus"> </td>        
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> <input type ="text" name="actual_apparatus"> </td>        
        <td colspan = "6"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> <input type ="text" name="apparatus_comment"> </td>
      </tr>
      <tr>
        <td colspan ="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Rotation:</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="rotation"> </td>        
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="actual_rotation"> </td>        
        <td colspan = "6"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="rotation_comment"> </td>
      </tr>
      <tr>
        <td colspan ="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Time:</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="time"> </td>        
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="actual_time"> </td>        
        <td colspan = "6"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="time_comment"> </td>
      </tr>
      <tr>
        <td colspan ="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Temperarture:</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="temperature"> </td>        
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="actual_temperature"> </td>        
        <td colspan = "6"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="temperature_comment"> </td>
      </tr>
      <tr>
        <td colspan = "8"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;color:#0000fb;"><b>Sample Preparation</b></td>
      </tr>
       <tr>
        <td colspan = "8"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols="50" rows="4" name = "sample_preparation"></textarea></td>
      </tr>
       <tr>
        <td colspan = "8"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;"><b>Weight of Standard</b></td>
      </tr>
       <tr>
        <td colspan = "8"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols="50" rows="4" name ="standard_weight"></textarea></td>
      </tr>
       <tr>
        <td colspan ="2"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Standard Description:</b></td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Standard 1:</b></td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Standard 2:</b></td>
        
      </tr>
      <tr>
        <td colspan = "2" align="center"  style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_description_3"> </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Potency: <input type ="text" name="potency_3"></br> Lot No.:<input type ="text" name="lot_no"> ID No.:<input type ="text" name="id_no"> </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Potency: <input type ="text" name="potency_4"></br> Lot No.:<input type ="text" name="lot_no"> ID No.:<input type ="text" name="id_no"> </td>
      </tr>
       <tr>
        <td colspan = "2" align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard + container (g)</td>         
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="potency_standard_container_3"> </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="potency_standard_container_4"> </td>       
      </tr>
      <tr>
        <td colspan = "2" align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of container (g) </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="potency_container_3"> </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="potency_container_4"> </td>
      </tr>
      <tr>
        <td colspan = "2" align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard (g)</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_3"> </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_4"> </td>
      </tr> 
      <tr>
        <td colspan ="2" align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;">Dilution</td>
        <td colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> <input type ="text" name="standard_dilution_2"> </td>
      </tr>         
      <tr>
        <td colspan = "8"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;"><b>Content:</b> <input type ="text" name="reagent_name"> nm</td>
      </tr>
      <tr>
        <td><b></b></td>
        <td align="center" style="padding: 8px;"><b>Std 1</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 1</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 2</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 3</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 4</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 5</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 6</b></td>
      </tr>
   
      <tr>
        <td align="center"style="padding: 8px;">1.</td>
        <td style="padding: 8px;"><input type = "text" name ="sample_1"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_1_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_1_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_1_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_1_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_1_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_1_s6"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">2.</td>
        <td style="padding: 8px;"><input type = "text" name ="sample_2"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_2_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_2_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_2_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_2_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_2_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_2_s6"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">3.</td>
        <td style="padding: 8px;"><input type = "text" name ="sample_3"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_3_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_3_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_3_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_3_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_3_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_3_s6"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">4.</td>
        <td style="padding: 8px;"><input type = "text" name ="sample_4"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_4_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_4_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_4_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_4_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_4_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_4_s6"></td>
      </tr>
       <tr>
        <td align="center"style="padding: 8px;">5.</td>
        <td style="padding: 8px;"><input type = "text" name ="sample_5"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_5_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_5_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_5_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_5_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_5_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="sample_5_s6"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">Average</td>
        <td style="padding: 8px;"><input type = "text" name ="avg"></td>
        <td style="padding: 8px;"><input type = "text" name ="avg_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="avg_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="avg_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="avg_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="avg_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="avg_s6"></td>
      </tr>
      <tr> 
        <td align="center"colspan ="8"style="padding: 8px;padding: 8px;background-color: #e8e8ff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> </td>
      </tr>
      <tr>        
        <td colspan = "8" align = "center"style="padding: 12px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;color:#0000fb;"> <u>PEAK OF SAMPLE (PKT) * WT OF STANDARD IN FINAL DILUTION * DILUTION FACTOR(DF) * 100 * POTENCY (P) </u> <br/> PEAK AREA OF STANDARD(PKSTD) * LABEL CLAIM (LC)</td>
      </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 1</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="determination_1">% LC </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 2</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="determination_2">% LC </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 3</td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="determination_3">% LC </td>
      </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 4</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="determination_4">% LC </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 5</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="determination_5">% LC </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 6</td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="determination_6">% LC </td>
      </tr> 
      <tr> 
        <td align="center"colspan ="8"style="padding: 8px;padding: 8px;background-color: #e8e8ff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> </td>
      </tr>
      <tr> 
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Average % </td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="average"></td>
    
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Equivalent to</td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="equivalent"></td>
      </tr>
       <tr> 
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Range </td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="range"></td>
      
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> RSD</td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="rsd"></td>
      </tr>
 
      <tr>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Acceptance Criteria</td>
        <td colspan = "3" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols ="50" rows="4" name="acceptance_criteria"></textarea></td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Results </td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <textarea cols="50" rows="4" name="results"></textarea> </td>  
      </tr>
      <tr>      
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Comments</td>
        <td colspan = "7"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <textarea cols ="90" rows="4" name="comment"></textarea> </td>
      </tr>
        <tr>
        <td colspan = "8"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Content: <input type ="text" name="second_reagent"> nm</td>
      </tr>
      <tr>
        <td><b></b></td>
        <td align="center" style="padding: 8px;"><b>Std 1</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 1</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 2</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 3</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 4</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 5</b></td>
        <td align="center" style="padding: 8px;"><b>Sample 6</b></td>
      </tr>
   
      <tr>
        <td align="center"style="padding: 8px;">1.</td>
        <td style="padding: 8px;"><input type = "text" name ="second_standard"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_1_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_1_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_1_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_1_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_1_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_1_s6"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">2.</td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_2"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_2_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_2_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_2_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_2_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_2_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_2_s6"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">3.</td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_3"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_3_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_3_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_3_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_3_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_3_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_3_s6"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">4.</td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_4"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_4_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_4_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_4_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_4_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_4_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_4_s6"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">5.</td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_5"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_5_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_5_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_5_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_5_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_5_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_5_s6"></td>
      </tr>
      <tr>
        <td align="center"style="padding: 8px;">Average</td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_avg"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_avg_s1"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_avg_s2"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_avg_s3"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_avg_s4"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_avg_s5"></td>
        <td style="padding: 8px;"><input type = "text" name ="second_sample_avg_s6"></td>
      </tr>
      <tr> 
        <td align="center"colspan ="8"style="padding: 8px;padding: 8px;background-color: #e8e8ff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> </td>
      </tr>
      <tr>        
        <td colspan = "8" align = "center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;color:#0000fb"> <u>PEAK OF SAMPLE (PKT) * WT OF STANDARD IN FINAL DILUTION * DILUTION FACTOR(DF) * 100 * POTENCY (P) </u> <br/> PEAK AREA OF STANDARD(PKSTD) * LABEL CLAIM (LC)</td>
      </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 1</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="second_determination_1">% LC </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 2</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="second_determination_2">% LC </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 3</td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="second_determination_3">% LC </td>
      </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 4</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="second_determination_4">% LC </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 5</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="second_determination_5">% LC </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 6</td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="second_determination_6">% LC </td>
      </tr> 
      <tr> <td align="center"colspan ="8" style="padding: 8px;padding: 8px;background-color: #e8e8ff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> </td>
      </tr>
            
      <tr> 
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Average % </td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="second_average"></td>
    
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Equivalent to</td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="second_equivalent"></td>
      </tr>
       <tr> 
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Range </td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="second_range"></td>
      
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> RSD</td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="second_rsd"></td>
      </tr> 
      <tr>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Acceptance Criteria</td>
        <td colspan = "3" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols ="50" rows="4" name="second_acceptance_criteria"></textarea></td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Results </td>
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <textarea cols="50" rows="4" name="second_results"></textarea> </td>  
      </tr>
      <tr>      
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Comments</td>
        <td colspan = "7"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <textarea cols ="90" rows="4" name="second_comment"></textarea> </td>
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