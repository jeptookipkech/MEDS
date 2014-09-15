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
  
  <!-- bootstrap reference library -->
  <script src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/Jquery-datatables/jquery.dataTables.js';?>"></script>
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
  ?>
  <div id="header"> 
   <div id="logo" style="padding:8px;color: #0000ff;" align="left"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="32px" width="40px"/>MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</div>
  </div>
  <div id="log_bar" class="subdivider">
  <table bgcolor="f2f2f2" border="0" cellpadding="8px" align="center" width="100%">
      <tr>
        <td style="border-bottom: solid 1px #c4c4ff;padding:8px;background-color: #ffffff;" width="200px"><a href="<?php echo base_url().'account_settings/index/'.$test_request_id.'/'.$user_type_id.'/'.$user_id;?>"><img src="<?php echo base_url().'images/icons/settings2.png';?>" height="20px" width="20px"></h6>Account Settings</h6></a></td>
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
    <div id="analysis_request" class="analysis_request" >
    <table class="table_form"  bgcolor="#c4c4ff" width="950px" height="40px" border="0" cellpadding="4px" align="center">
       <input type="hidden" name="id" value="<?php echo $query['id'];?>">
	<tr>
    
    <td colspan="4" style="padding:4px;border-left: solid 1px #bfbfbf;border-right: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;border-bottom: solid 1px #bfbfbf;text-align:left;background-color:#ffffff;text-color:#00ff00;"><a href="<?php echo base_url().'maintenance/print_maintenance_records/'.$query['id'];?>"><img src="<?php echo base_url().'images/icons/pdf.png'?>" height="20px" wieght="20px">Print in PDF</a></td>
	    <td colspan="1" style="padding:4px;border-left: solid 1px #bfbfbf;border-right: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;border-bottom: solid 1px #bfbfbf;text-align:right;background-color:#ffffff;text-color:#00ff00;"><a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"><img src="<?php echo base_url().'images/icons/back.png'?>" height="20px" wieght="20px">Back</a></td>
	 </tr>
	<tr>
	    <td height="25px"  style="text-align: center;background-color:#ffffff;border-left: solid 1px #bfbfbf;border-right: solid  1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><b>ID Number</b></td>
	    <td height="25px"  style="text-align: center;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf; border-right: dotted 1px #bfbfbf;"><b>Description</b></td>
	    <td height="25px"  style="text-align: center;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf; border-right: dotted 1px #bfbfbf;"><b>Manufacturer</b></td>
	    <td height="25px"  style="text-align: center;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf; border-right: dotted 1px #bfbfbf;"><b>Serial Number</b></td>
	    <td height="25px"  style="text-align: center;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf; border-right: dotted 1px #bfbfbf;"><b>Model</b></td>     
	</tr>
	<tr>
      <td height="15px" style="padding:4px;text-align: center;border-left: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;background-color:#ffff40;"><?php echo $query['id_number'];?></td>
	    <td height="15px" style="padding:4px;text-align: center;border-left: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;background-color:#ffff40;"><?php echo $query['description'];?></td>
	    <td height="15px" style="padding:4px;text-align: center;border-left: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;background-color:#ffff40;"><?php echo $query['manufacturer'];?></td>
	    <td height="15px" style="padding:4px;text-align: center;border-left: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;background-color:#ffff40;"><?php echo $query['serial_number'];?></td>
	    <td height="15px" style="padding:4px;text-align: center;border-left: dotted 1px #bfbfbf;border-right: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;background-color:#ffff40;"><?php echo $query['model'];?></td>
  </tr>
	</table>
  <table class="table_form"  bgcolor="#c4c4ff" width="950px" height="20px" border="0" cellpadding="4px" align="center">
    <tr> 
	    <td colspan="2" height="20px" width="140px" style="padding:4px;text-align: right;background-color:#ffffff;border-bottom: solid 10px #bfbfbf;">
        <a class ="current" href="javascript:slide('maintenace_history');">Maintenance History</a>&nbsp;
        <a href="javascript:slide('calibration_history');">&nbsp;Calibration History</a>
      </td>
	    <td colspan="2" height='20px' width='280px'
	    <?php
	    if($user['logged_in']['user_type'] ==6 && $user['logged_in']['department_id'] ==0 ){
	       echo"style='display:none;'";
	    }else{
	       echo"style='padding:4px;display:block;text-align: right;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;'";
	    }
	    ?>><a class="current" href="javascript:slide('performance_form');">Schedule Maintenance&nbsp;</a><a href="javascript:slide('calibration_form');">|&nbsp;Schedule Calibration</a>
      </td>
	  </tr>
	</table>  
   <div id="performance_form" name="menu" style="display:none;"><?php include_once "application/views/performance_form.php";?></div>  
   <div id="calibration_form" name="menu" style="display:none;"><?php include_once "application/views/calibration_schedule_form.php";?></div>  
   <div id="maintenace_history" name="menu" style="display:block;"><?php include_once "application/views/performance_schedule_list.php";?></div>  
   <div id="calibration_history" name="menu" style="display:none;"><?php include_once "application/views/calibration_schedule_list.php";?></div>  
   
</form>
</div>
</div>
</body>
</html>