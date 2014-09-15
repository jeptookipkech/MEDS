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
  <script src="<?php echo base_url().'datatables/extensions/Tabletools/js/dataTables.tableTools.js';?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'datatables/extensions/Tabletools/js/ZeroClipboard.js" type="text/javascript';?>"></script>
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
        <a href="<?php echo base_url().'home';?>"class="current sub_menu sub_menu_link first_link active">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
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
        <a href="<?php echo base_url().'home';?>"class="current sub_menu sub_menu_link first_link">Analysis Test Request</a>
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
        <a href="<?php echo base_url().'home';?>"class="current sub_menu sub_menu_link first_link active">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
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
        <a href="<?php echo base_url().'home';?>"class="current sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment</a>
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
        <a href="<?php echo base_url().'home';?>"class="current sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
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
        <a href="<?php echo base_url().'home';?>"class="current sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
    </div>
    <div id="form_wrapper_lists">
     <div id="account_lists" id="account_lists">
       <table class="subdivider" border="0" bgcolor="#ffffff" width="100%" cellpadding="8px" align="center">
        <tr>
            <td height="25px" align="center"
            <?php
            if($user['logged_in']['user_type'] ==8 || $user['logged_in']['user_type'] ==6 ||$user['logged_in']['user_type'] ==7){
             echo "style='display:block;'";
             }else{
                 echo"style='display:none;'"; 
              }
            ?>>
            <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link"><img src="<?php echo base_url().'images/icons/circle_orange.png';?>" height="20px" width="20px">Unassigned Test Requests</a>
            <a href="<?php echo base_url().'test_request_list/GetA/'.$test_request_id.'/'.$user_type_id.'/'.$department_id;?>"class="current sub_menu sub_menu_link first_link"><img src="<?php echo base_url().'images/icons/assign.png';?>" height="20px" width="20px">Assigned Test Requests</a>
            <a href="<?php echo base_url().'test_request_list/GetC/'.$test_request_id.'/'.$user_type_id.'/'.$department_id;?>"class="sub_menu sub_menu_link first_link"><img src="<?php echo base_url().'images/icons/tick.png';?>" height="20px" width="20px">Completed Test Requests</a>
            <!-- <a href="<?php echo base_url().'test_request_list/GetQ/'.$test_request_id.'/'.$user_type_id.'/'.$department_id;?>"class="sub_menu sub_menu_link first_link"><img src="<?php echo base_url().'images/icons/ot.png';?>" height="20px" width="20px">Quarantined Test Requests</a> -->
            <div id="add"
             <?php
             if($user['logged_in']['user_type'] ==7 && $user['logged_in']['department_id'] ==1 ){
                   echo "style='display:block;text-align:right;text-color:#00ff00;'";
                }else{
                   echo "style='display:none;'";
                }
             ?>
             ><a data-target="#test_request" role="button" class="sub_menu sub_menu_link first_link" data-toggle="modal"><img src="<?php echo base_url().'images/icons/add_field.png'?>" height="10px" width="10px">Add MEDS Request</a>&nbsp;&nbsp;  
              <a data-target="#clients_request" role="button" class="sub_menu sub_menu_link first_link" data-toggle="modal"><img src="<?php echo base_url().'images/icons/add_field.png'?>" height="10px" width="10px">Add Client Request</a>
            </div>
            </td>
        </tr>
      </table>
      <table width="100%">
          <tr>
           <td align="center" style="border-bottom: solid 10px #c4c4ff;color: #0000fb;background-color: #e8e8ff;"><h5>Assigned Analysis Test Request</h5></td>
          </tr>
      </table>
      <table id="list" class="list_view_header" width="100%" bgcolor="#ffffff" cellpadding="4px">
              <thead bgcolor="#efefef">
              <tr>
               <tr>
                  <th style="text-align:center;border-right: dotted 1px #ddddff;"></th>
                  <th style="text-align:center;border-right: dotted 1px #ddddff;">Lab Reg.No</th>
                  <th style="text-align:center;border-right: dotted 1px #ddddff;">Batch No</th>
                  <th style="text-align:center;border-right: dotted 1px #ddddff;">Sample Name</th>
                  <th style="text-align:center;border-right: dotted 1px #ddddff;">Client</th>
                  <th
                  <?php 
                    if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
                      echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                    }else{
                      echo"style='display:none;'";
                    }
                  ?> 
                  >Quantity Submitted</th>
                  <th 
                  <?php
                      if($user['logged_in']['user_type']==5||$user['logged_in']['user_type']==7){
                        echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                      }else{
                        echo"style='display:none;'";    
                      }
                    ?>
                  >Quantity Remaining</th>
                  <th 
                  <?php
                      if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
                        echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                      }else{
                        echo"style='display:none;'";    
                      }
                    ?>
                  >Quantity Issued</th>
                  <th
                    <?php
                      if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
                        echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                      }else{
                        echo"style='display:none;'";    
                      }
                    ?>
                  >Assigned</th>
                  <th
                    <?php
                      if($user['logged_in']['user_type']==5){
                        echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                      }else{
                        echo"style='display:none;'";    
                      }
                    ?>
                  >Issued By</th>
                  <th 
                  <?php 
                    if($user['logged_in']['user_type']==6){
                      echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                    }else{
                      echo"style='display:none;'";
                    }
                  ?>
                  >Qoute</th>
                  <th
                  <?php 
                    if($user['logged_in']['user_type']==6){
                      echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                    }else{
                      echo"style='display:none;'";
                    }
                  ?> 
                  >Print Label</th>
                  <th 
                  <?php
                    if($user['logged_in']['user_type']==6 && $user['logged_in']['department_id']==8){
                      echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                    }
                  ?>
                  >Worksheet</th>
                  <th 
                  <?php
                    if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
                      echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                    }else{
                      echo"style='display:none;'";
                    }
                  ?>
                  >Edit</th>
                  <th 
                  <?php
                    if($user['logged_in']['user_type']==6){
                      echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                    }else{
                      echo"style='display:none;'";
                    }
                  ?>
                  >Logs</th>
              </tr>
              </thead>
              <tbody>
              <?php
                $i=1;
                foreach ($query as $row):
                 
              ?>
              <tr>

              <td style="border-right: dotted 1px #c0c0c0;text-align: center;border-bottom: solid 1px #c0c0c0;" width="20px"><?php echo $i;?>.</td>
              <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->laboratory_number;?></td>
              <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->batch_lot_number;?></td>
              <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->active_ingredients;?></td>
              <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->applicant_name;?></td>
              <td
              <?php 
                if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
                  echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
                }else{
                  echo"style='display:none;'";
                }
              ?>
              ><?php echo $row->quantity_submitted;?></td>
              <td 
                <?php 
                if($user['logged_in']['user_type']==5||$user['logged_in']['user_type']==7){
                  echo"style='text-align: center;border-bottom: solid 1px #c0c0c0;'";
                }else{
                  echo"style='display:none;'";
                }
                ?>>
                <?php echo $row->quantity_remaining;?>
              </td>
              <td 
                <?php 
                if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
                  echo"style='text-align: center;border-bottom: solid 1px #c0c0c0;'";
                }else{
                  echo"style='display:none;'";
                }
                ?>>
                <?php echo $row->sample_issued;?>
              </td>
              <td
              <?php 
                if($user['logged_in']['user_type']==5){
                  echo"style='text-align: center;border-bottom: solid 1px #c0c0c0;'";
                }else{
                  echo"style='display:none;'";
                }
              ?>>
                <?php echo $row->assigner_name;?>
              </td>
              <td
              <?php 
                if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
                  echo"style='text-align: center;border-bottom: solid 1px #c0c0c0;'";
                }else{
                  echo"style='display:none;'";
                }
              ?>>
                <?php echo $row->analyst_name;?>
              </td>
              <td
                <?php 
                  if($user['logged_in']['user_type']==6){
                    echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
                  }else{
                    echo"style='display:none;'";
                  }
                ?>
              ><a href="<?php echo base_url().'quote_test_request/'.$row->tr;?>">Quote</a></td>
              <td
              <?php 
                if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==5){
                  echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
                }else{
                  echo"style='display:none;'";
                }
              ?>
              ><a href="<?php echo base_url().'/'.$row->tr;?>">Print</a></td>
              <td
              <?php
              if($user['logged_in']['user_type']==6){
                echo"style='display:block;'";
              }else{
                echo"style='display:none;'";
              }
              ?>>
                <a
                    <?php
                    if($row->assignment_name!="0"){
                        echo"style='display:block;text-align: center;'";
                    ?> href="<?php echo base_url().'worksheet/'.$row->tr;?>">Worksheet
                </a>
                    <?php
                    }elseif($row->assignment_name==0){
                    ?>
                <a
                    <?php
                        echo"style='display:block;text-align: center;'";
                    ?> href="<?php echo base_url().'assignment/index/'.$row->tr;?>">Assign
                </a>
                  <?php
                  }
                  ?>
              </td>
              <td
              <?php 
                if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
                  echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
                }else{
                  echo"style='display:none;'";
                }
              ?>
              ><a href="<?php echo base_url().'update_request_record/Update/'.$row->tr.'/'.$test_request_id.'/'.$user_type_id;?>">edit</a></td>
              <td
              <?php 
                if($user['logged_in']['user_type']==6){
                  echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
                }else{
                  echo"style='display:none;'";
                }
              ?>
              ><a href="<?php echo base_url().'view_logs/logs/'.$row->tr;?>">Log</a></td>
              <?php
                   $i++;
                 ?>
                 </tr>
                     <?php endforeach; ?>
            </tbody>           
      </table>
<div id="unassigned_test_requests" name="menu" style="display:none;"><?php include_once "application/views/unassigned_test_request_list.php";?></div>
<div id="test_request" class="modal fade" role="dialog" aria-labelledby="meds" aria-hidden="true"><?php include_once "application/views/test_request_form.php";?></div>  
<div id="clients_request" class="modal fade" role="dialog" aria-labelledby="client" aria-hidden="true"><?php include_once "application/views/client_test_request_form.php";?></div>

</div>
</div>
</body>
</html>
