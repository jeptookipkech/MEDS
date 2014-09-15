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
  <link href="datatables/extensions/Tabletools/css/dataTables.tableTools.css" type="text/css" rel="stylesheet"/>
  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css"> -->
  <link rel="stylesheet" href="<?php echo base_url().'jquery-ui.css';?>">
  
  
  <!-- bootstrap reference library -->
  <link href="<?php echo base_url().'bootstrap/css/bootstrap.css'; ?>" rel="stylesheet" type="text/css"/>

  <script src="<?php echo base_url().'js/jquery.js';?>"></script>
  <script src="<?php echo base_url().'js/jquery-1.11.0.js';?>"></script>
  <script src="<?php echo base_url().'js/jquery.js';?>"></script>
  <script src="<?php echo base_url().'js/jquery-ui.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/tabs.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/Jquery-datatables/jquery.dataTables.js';?>"></script>
  <script src="datatables/extensions/Tabletools/js/dataTables.tableTools.js" type="text/javascript"></script>
  <script src="datatables/extensions/Tabletools/js/ZeroClipboard.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/datepicker.js';?>"></script>
  
  <!-- bootstrap reference library -->
  <script src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>
  
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
   if(empty($user['logged_in']['id'])) {
       
      redirect('login','location');  //1. loads the login page in current page div

      echo '<meta http-equiv=refresh content="0;url=base_url();login">'; //3 doesn't work

    }
  ?>
  <div id="header"> 
   <div id="logo" style="padding:8px;color: #0000ff;" align="center"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="35px" width="40px"/>MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</div>
  <div id="log_bar">
  <table  cellpadding="2px" align="center" width="100%">
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
        <a href="<?php echo base_url().'coapresentation/mypresentation.pdf';?>"class="sub_menu sub_menu_link first_link">Certificate of Analysis</a>
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
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="current sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
        <!-- <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a> -->
        <a href="<?php echo base_url().'complaints_list/records';?>"class="sub_menu sub_menu_link first_link">Complaints</a>
        <a href="<?php echo base_url().'coapresentation/mypresentation.pdf';?>"class="sub_menu sub_menu_link first_link">Certificate of Analysis</a>
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
        <!-- <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a> -->
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
        <!-- <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a> -->
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
    </div>
  <div id="form_wrapper_lists">
    <div id="account_lists" style="display: block;" name="menu">
      <table  class="subdivider" border="0" bgcolor="#ffffff"  width="100%" cellpadding="8px" align="center">
          
          <tr>
             <td align ="right">
                  <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>" class="sub_menu sub_menu_link first_link"><img src="<?php echo base_url().'images/icons/equipmentinuse.png';?>" height="20px" width ="20px">Equipment In Use</a>
                  <a href="<?php echo base_url().'equipment_maintenance_records/getDamaged';?>" class=" sub_menu sub_menu_link first_link"><img src="<?php echo base_url().'images/icons/withdrawn.png';?>" height="20px" width ="20px">Withdrawn/Damaged Equipment</a>
                  <a href="<?php echo base_url().'equipment_maintenance_records/getmaintenance_calibration';?>" class="current sub_menu sub_menu_link first_link"><img src="<?php echo base_url().'images/icons/maintenance.png';?>" height="20px" width ="20px">Equipment Scheduled for Maintenance/Calibration</a>
              </td>
              <td aling="left" width="120px"
                  <?php
                     if($user['logged_in']['user_type'] ==0 && $user['logged_in']['department_id'] ==0){
                      echo "style='display:block;background-color:#ffffff;text-color:#00ff00;'";
                      } else if($user['logged_in']['user_type'] ==8 || $user['logged_in']['user_type'] !=0){
                       echo"style='display:none;'";
                     }
                  ?>>
               <a href="<?php echo base_url().'columns/Get';?>"><b>Columns</b></a>
              </td>
             
              <td align="right"<?php
                  if($user['logged_in']['user_type'] ==6  || $user['logged_in']['user_type'] ==5 && $user['logged_in']['department_id'] ==2 ){
                   echo "style='padding:8px;display:block;background-color:#ffffff;text-color:#00ff00;'";
                   } else{
                    echo"style='display:none;'";
                  }
               ?>>
             <a data-target="#equipment_form" class="btn" role="button" data-toggle="modal"><img src="<?php echo base_url().'images/icons/add_field.png'?>" height="10px" width="10px">Add Equipment</a>
             <a href="<?php echo base_url().'equipment_report/index';?>"><img src="<?php echo base_url().'images/icons/reports.png';?>" height="25px" width ="25px">Reports</a>
             </td>
          </tr>
      </table>
      <table width="100%">
          <tr>
            <td colspan="2" align="center" style="border-bottom: solid 10px #c4c4ff;color: #0000fb;background-color: #e8e8ff;"><h5>Equipment Records Scheduled for Maintenance/Calibration</h5></td>
          </tr>
      </table>
      <table id="list" class="list_view_header" width="100%"  border='0'cellpadding="4px">
            <thead bgcolor="#efefef">
                <tr>
                    <th style="border-right: dotted 1px #ddddff;" align="center"></th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Id Number</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Description</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Manufacturer</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Serial No</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Model</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Comments</th>
                    <th style="border-right: dotted 1px #ddddff;" align="center">Date</th>
                    <th
                    <?php
                     if($user['logged_in']['user_type'] ==5 && $user['logged_in']['department_id'] ==3){
                       echo "  style='text-align:center;'Action";
                     }else{
                       echo " style='display:none;'";
                     }
                     ?>>
                    </th>
                    <th
                    <?php
                     if($user['logged_in']['user_type'] ==5  && $user['logged_in']['department_id'] ==2){
                       echo "  style='text-align:center;'Action";
                     }else{
                       echo " style='display:none;'";
                     }
                     ?>>
                    </th>
                    <th
                    <?php
                     if($user['logged_in']['user_type'] ==6  && $user['logged_in']['department_id'] ==0){
                       echo "  style='text-align:center;'Action";
                     }else{
                       echo " style='display:none;'";
                     }
                     ?>>
                    </th>
                   
             
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
                    <td style="border-right: dotted 1px #c0c0c0;text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $i; ?>.</td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;" ><?php echo $row->id_number;?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->description;?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->manufacturer;?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->serial_number;?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->model;?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->comments;?></td>
                    <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo substr($row->date,0,-8);?></td>
                    <td 
                     <?php
                     if($user['logged_in']['user_type'] ==5 && $user['logged_in']['department_id'] ==3){
                        echo "style='display:block;text-align: center;'";
                     }else{
                          echo "style='display:none;'";
                     }
                     ?>><a href="<?php echo base_url().'outoftolerance/index/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/ot.png';?>" height="20px" width="20px"/>Out of Tolerance</a>&nbsp;
                     </td>
                     <td 
                     <?php
                     if($user['logged_in']['user_type'] ==5  && $user['logged_in']['department_id'] ==2){
                       echo "style='display:block;text-align: center;'";
                     }else{
                       echo " style='display:none;'";
                     }
                     ?>>
                     <a href="<?php echo base_url().'update_equipment_maintenance_record/Update/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/edit.png';?>" height="20px" width="20px"/>Edit</a>&nbsp;
                     <a href="<?php echo base_url().'view_equipment_maintenance_logs/logs/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/view.png';?>" height="20px" width="20px"/>Log</a>&nbsp;
                     <a href="<?php echo base_url().'maintenance/index/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/c_m.png';?>" height="20px" width="20px"/>Calibration & Maintenance</a>
                    </td>
                    <td
                     <?php
                     if($user['logged_in']['user_type'] ==6  && $user['logged_in']['department_id'] ==0){
                       echo " style='display:block;text-align: center;'";
                     }else{
                       echo " style='display:none;'";
                     }
                     ?>>
                     <a href="<?php echo base_url().'update_equipment_maintenance_record/Update/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/edit.png';?>" height="20px" width="20px"/>Edit</a>&nbsp;
                     <a href="<?php echo base_url().'view_equipment_maintenance_logs/logs/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/view.png';?>" height="20px" width="20px"/>Log</a>&nbsp;
                     <a href="<?php echo base_url().'maintenance/index/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/c_m.png';?>" height="20px" width="20px"/>Calibration & Maintenance</a>
                     </td>
                <?php
                $i++;
                ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div id="scheduled_equipment_form" class="modal fade" role="dialog" aria-labelledby="equipment" aria-hidden="true"><?php include_once "application/views/equipment_maintenance_form.php";?></div>    
    <div id="equipment" name="menu" style="display:none;"><?php include_once "application/views/equipment_maintenance_form.php";?></div>
    <div id="performance" name="menu" style="display:none;"><?php include_once "application/views/performance_form.php";?></div>  
    <div id="calibration" name="menu" style="display:none;"><?php include_once "application/views/calibration_form.php";?></div>  
    
</div>
</body>
</html>