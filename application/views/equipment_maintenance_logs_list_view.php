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
  <script>
   $(document).ready(function() {
    /* Init DataTables */
    $('#list').dataTable({
     "sScrollY":"270px",
     "sScrollX":"100%"
    });
   });
  </script>
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
   <div id="logo" style="padding:8px;color: #0000ff;" align="center"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="35px" width="40px"/>MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</div>
 
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
         <td height="10px"  style="border-bottom: solid 1px #c4c4ff;padding:8px;background-color: #ffffff;">
          
        </td>
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
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="current sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
        <!-- <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a> -->
        <a href="<?php echo base_url().'complaints_list/records';?>" class="sub_menu sub_menu_link first_link">Complaints</a>
        <a href="<?php echo base_url().'coa_list/records';?>"class="sub_menu sub_menu_link first_link">Certificate of Analysis</a>
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
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="current sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
        <!-- <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a> -->
        <a href="<?php echo base_url().'complaints_list/records';?>"class="sub_menu sub_menu_link first_link">Complaints</a>
        <a href="<?php echo base_url().'coa_list/records';?>"class="sub_menu sub_menu_link first_link">Certificate of Analysis</a>
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
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="current sub_menu sub_menu_link first_link">Equipment</a>
        <!-- <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a> -->
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
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="current sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
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
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="current sub_menu sub_menu_link first_link">Equipment</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
    </div>
   <div id="form_wrapper_lists">
    <div id="account_lists" style="display: block" name="menu">
            <table class="rl_header" border="0" bgcolor="#ffffff" width="100%" cellpadding="8px" align="center">
                
                <tr>
                    <td align="center" style=";border-bottom: solid 10px #c4c4ff;color: #0000fb;background-color: #e8e8ff;"><h5>Equipment Maintenance Logs</h5></td>
                </tr>
                <tr>
                    <td class="subdivider" style="padding:4px;text-align:right;background-color:#ffffff;text-color:#00ff00;"><a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"><img src="<?php echo base_url().'images/icons/back.png'?>" height="20px" width="20px">Back</a></td>
                </tr>
            </table>
        <table id="list" class="list_view_header" width="100%" cellpadding="4px">
            <thead bgcolor="#efefef">
                <tr>
                    <th style="border-right: dotted 1px #ddddff;" align="center"></th>   
                    <th style="border-right: dotted 1px #ddddff;" align="center">Updated Id</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Old Id</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Updated Description</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Old Description</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Updated Manufacturer</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Old Manufacturer</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Updated Serial No</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Old Serial No</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Updated Model</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Old Model</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Updated Requirement</th>    
                    <th style="border-right: dotted 1px #ddddff;" align="center">Old Requirement</th>    
                    <th style="border-right: dotted 1px #ddddff;" align="center">Updated Date</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Old Date</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Updated Status</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Old Status</th>
                    <th  align="center">Edited By</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Action</th>
                </tr>
            </thead>
            
            <tbody>        
            <?php
            
                $i=1;
                foreach($query as $row):
                        
                if($i==0){
                     
                    echo"<tr>";
                }
            ?>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#e1ffe1;"><?php echo $i;?>.</td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#f0fff0;"><?php if($row['new_id_number']==""){echo"No Previous Data";}elseif($row['new_id_number']=="NULL"){echo"No Previous Data";}elseif($row['new_id_number']=="0"){echo"Not Yet Set";}else{echo $row['old_id_number'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#ffffff;"><?php if($row['old_id_number']==""){echo"No Previous Data";}elseif($row['old_id_number']=="NULL"){echo"No Previous Data";}elseif($row['old_id_number']=="0"){echo"Not Yet Set";}else{echo $row['old_id_number'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#e1ffe1;"><?php if($row['new_description']==""){echo "No Previous Data";}elseif($row['new_description']=="NULL"){echo"No Previous Data";}elseif($row['new_description']=="0"){echo"Not Yet Set";}else{echo $row['new_description'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#f0fff0;"><?php if($row['old_description']==""){echo "No Previous Data";}elseif($row['old_description']=="NULL"){echo"No Previous Data";}elseif($row['old_description']=="0"){echo"Not Yet Set";}else{echo $row['old_description'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#ffffff;"><?php if($row['new_manufacturer']==""){echo "No Previous Data";}elseif($row['new_manufacturer']=="NULL"){echo"No Previous Data";}elseif($row['new_manufacturer']=="0"){echo"Not Yet Set";}else{echo $row['new_manufacturer'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#e1ffe1;"><?php if($row['old_manufacturer']==""){echo "No Previous Data";}elseif($row['old_manufacturer']=="NULL"){echo"No Previous Data";}elseif($row['old_manufacturer']=="0"){echo"Not Yet Set";}else{echo $row['old_manufacturer'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#f0fff0;"><?php if($row['new_serial_number']==""){echo "No Previous Data";}elseif($row['new_serial_number']=="NULL"){echo"No Previous Data";}elseif($row['new_serial_number']=="0"){echo"Not Yet Set";}else{echo $row['new_serial_number'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#ffffff;"><?php if($row['old_serial_number']==""){echo "No Previous Data";}elseif($row['old_serial_number']=="NULL"){echo"No Previous Data";}elseif($row['old_serial_number']=="0"){echo"Not Yet Set";}else{echo $row['old_serial_number'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#e1ffe1;"><?php if($row['new_model']==""){echo "No Previous Data";}elseif($row['new_model']=="NULL"){echo"No Previous Data";}elseif($row['new_model']=="0"){echo"Not Yet Set";}else{echo $row['new_model'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#f0fff0;"><?php if($row['old_model']==""){echo "No Previous Data";}elseif($row['old_model']=="NULL"){echo"No Previous Data";}elseif($row['old_model']=="0"){echo"Not Yet Set";}else{echo $row['old_model'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#ffffff;"><?php if($row['new_maintenance_requirement']==""){echo"Not Yet Set";}elseif($row['new_maintenance_requirement']=="NULL"){echo"No Previous Data";}elseif($row['new_maintenance_requirement']=="0"){echo"Not Yet Set";}else{echo $row['new_maintenance_requirement'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#e1ffe1;"><?php if($row['old_maintenance_requirement']==""){echo"Not Yet Set";}elseif($row['old_maintenance_requirement']=="NULL"){echo"No Previous Data";}elseif($row['old_maintenance_requirement']=="0"){echo"Not Yet Set";}else{echo $row['old_maintenance_requirement'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#e1ffe1;"><?php if($row['new_date']==""){echo"No Previous Data";}elseif($row['new_date']=="NULL"){echo"No Previous Data";}elseif($row['new_date']=="0"){echo"Not Yet Set";}else{echo $row['new_date'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#f0fff0;"><?php if($row['old_date']==""){echo"No Previous Data";}elseif($row['old_date']=="NULL"){echo"No Previous Data";}elseif($row['old_date']=="0"){echo"Not Yet Set";}else{echo $row['old_date'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#e1ffe1;"><?php if($row['new_status']==""){echo"No Previous Data";}elseif($row['new_status']=="NULL"){echo"No Previous Data";}elseif($row['new_status']=="0"){echo"Not Yet Set";}elseif($row['old_status']=="0"){echo"In Use";}elseif($row['old_status']=="1"){echo"Scheduled for Maintenance/Calibration";}elseif($row['old_status']=="2"){echo"Damaged/Withdrawn";}else{echo $row['new_status'];}?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;background-color:#f0fff0;"><?php if($row['old_status']==""){echo"No Previous Data";}elseif($row['old_status']=="NULL"){echo"No Previous Data";}elseif($row['old_status']=="0"){echo"In Use";}elseif($row['old_status']=="1"){echo"Scheduled for Maintenance/Calibration";}elseif($row['old_status']=="2"){echo"Damaged/Withdrawn";}else{echo $row['old_status'];}?></td>
                    <td style="text-align: center;border-bottom: solid 1px #c0c0c0;background-color:#ffffff;"><?php echo $row['old_who'];?></td>
                    <td style="text-align: center;border-bottom: solid 1px #c0c0c0;background-color:#e1ffe1;"><?php echo $row['action'];?></td>

            <?php             
                $i++;
            ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div> 
</div>
</body>
</html>