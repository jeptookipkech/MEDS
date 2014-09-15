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
  </div>
  <div id="log_bar" class="subdivider">
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
    </div>
    <div id="form_wrapper_lists">
     <div id="account_lists">
      <?php echo validation_errors(); ?>
      <?php echo form_open('assay/save',array('id'=>'assay_view'));?>
       <table width="100%" cellpadding="8px" border="0" align="center">
          <tr>
            <td style="text-align:right;padding:4px;backgroun-color:#fffff;border-bottom:solid 1px #bfbfbf;"><a href="<?php echo base_url().'test/index/'.$request[0]['a'].'/'.$query['tr'];?>"><img src="<?php echo base_url().'images/icons/back.png';?>" height="25px" width="20px">Back</a></td>
          </tr>
       </table>
       <table width="75%" border="0" class="table_form" cellpadding="4px" align="center">
        <input type="hidden" name="tr_id" value="<?php echo $query['tr'];?>"></input>
        <input type="hidden" name="assignment_id" value="<?php echo $request[0]['a'];?>"></input>
          <tr>
              <td rowspan="0" style="border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="80px" width="90px"/></td>
              <td colspan="7" style="padding:4px;color:#0000ff;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;">MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</td>
          </tr>
          <tr>    
              <td colspan="0" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Document: Analytical Worksheet</td>
              <td colspan="4" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;">Title: <?php echo $query['active_ingredients']." "." ".$query['test_specification'];?></td>
              <td height="25px" colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;color:#000000;">REFERENCE NUMBER</td>
              <td colspan="0" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><?php echo $query['reference_number'];?></td>
          </tr>
          <tr>
                <td colspan="0" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-left:solid 1px #bfbfbf;">EFFECTIVE DATE: <?php echo date("d/m/Y")?></td>
                <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-left:solid 1px #bfbfbf;">ISSUE/REV 2/2</td>
                <td height="25px"colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">SUPERSEDES: 2/1</td>
                <td height="25px" colspan="3" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">PAGE 1 of 1</td>
            </tr>
            <tr>
                <td colspan="0" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">SERIAL No.</td>
                <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><input type="text" name="serial_number"></input></td>
                <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;">Batch/Lot No.</td>
                <td colspan="3" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><?php echo $query['batch_lot_number']?></input></td>
                
            </tr>
            <tr>
              <td colspan="8" align="center" style="padding:8px;background-color: #c4c4ff;border-right:solid 1px#c4c4ff;"></td>
            </tr>
            <tr>
              <td colspan="8" align="center" style="padding:4px;border-bottom: solid 1px #c4c4ff;border-top: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><h5>Content uniformity Test By Titration</h5></td>
            </tr>
            <tr>
              <td colspan="8" align="left" style="padding:8px;border-bottom: solid 1px #c4c4ff;border-top: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">
                <a href="<?php echo base_url().'content_uniformity/worksheet/'.$request[0]['a'].'/'.$query['tr'];?>"class="mid_sub_menu mid_sub_menu_link first_link">By HPLC</a>
                <a href="<?php echo base_url().'content_uniformity/worksheet_uv/'.$request[0]['a'].'/'.$query['tr'];?>"class="mid_sub_menu mid_sub_menu_link first_link">By UV</a>
                <a href="<?php echo base_url().'content_uniformity/worksheet_titration/'.$request[0]['a'].'/'.$query['tr'];?>"class="current mid_sub_menu mid_sub_menu_link first_link ">By Titration</a>
                <a href="<?php echo base_url().'content_uniformity/worksheet_karl_fisher/'.$request[0]['a'].'/'.$query['tr'];?>"class="mid_sub_menu mid_sub_menu_link first_link ">By Karl Fisher</a></td>
            </tr>
            <tr>
              <td colspan="8" style="padding:8px;border-bottom:dotted 1px #c4c4ff;">
              <table align="center" border="0" cellpadding="8px">
                <tr>
                  <td colspan="0" height="25px" style="text-align:left;padding:8px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;color:#000;">Balance Make</td>
                  <td colspan="0" height="25px" style="text-align:left;padding:8px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;color:#000;"><input name="balance" type="text" size="40"></input></td>
                  <td colspan="0" height="25px" align="center" style="text-align:center;padding:8px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;color:#000;">ID Number</td>
                  <td colspan="0" height="25px" align="center" style="text-align:left;padding:8px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;color:#000;"><input name="number" type="text" size="30"></input></td>
                </tr>
              </table>
              </td>
            </tr>  
            <tr>
              <td colspan="8" height="25px" align="left" style="padding:8px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><b>Standardization of 0.1M Perchloric acid using potassium hydrogen phthalate</b></td>
            </tr>
            <tr>
              <td colspan="8">
                <table border="0" cellpadding="8px" align="center">
                   <tr>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;"></td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">Weight 1</td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">Weight 2</td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">weight 3</td>
                  </tr>
                  <tr>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      Weight of Sample + Container(g)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_three"></td>
                  </tr>
                  <tr>
                      <td colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      Weight of Container(g)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_three"></td>
                      
                  </tr>
                  <tr>
                      <td colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      Weight of Sample(g)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_three"></td>
                      
                  </tr>
                </table>
                </td>
            </tr>
            <tr>
              <td colspan="8" height="25px" align="left" style="padding:8px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><b>Titration Volumes</b></td>
            </tr>
            <tr>
              <td colspan="8">
                <table border="0" cellpadding="8px" align="center">
                   <tr>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;"></td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">Weight 1</td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">Weight 2</td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">weight 3</td>
                  </tr>
                  <tr>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      Final Burette Volume(ml)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_three"></td>
                  </tr>
                  <tr>
                      <td colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      Initial Burette Volume(ml)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_three"></td>
                      
                  </tr>
                  <tr>
                      <td colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                     Volume Used(ml)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_three"></td>
                      
                  </tr>
                </table>
                </td>
            </tr>
            <tr>
                <td colspan="8" style="padding:8px;border-bottom:solid 1pf #c4c4ff;">
                  <table border="0" cellpadding="8px" align="center">
                    <tr>
                      <td style="color:#0000ff;padding:8px;">Calculation of Factor =</td>
                      <td style="color:#0000ff;padding:8px;border-bottom:solid 1px #c4c4ff;"></td>
                      <td style="color:#0000ff;padding:8px;border-bottom:solid 1px #c4c4ff;">Weight Taken</td>
                    </tr>
                    <tr>
                      <td style="color:#0000ff;padding:8px;"></td>
                      <td colspan="2" style="color:#0000ff;text-align:center;">Volume Used x Equivalent Weight</td>
                    </tr>
                  </table>
                </td>
            </tr>
            <tr>
              <td  colspan="8" style="color:#0000ff;padding:8px;border-bottom:dotted 1px #c4c4ff;"><b>Calculation of Determinations</b></td>
            </tr>
            <tr>
              <td colspan="8" style="padding:8px;">
                <table border="0" cellpadding="8" align="center">
                  <tr>
                    <td  style="color:#0000ff;padding:8px;border-bottom:dotted 1px #c4c4ff;">Determination 1 &nbsp;<input type="text" name="determination_one"></input></td>
                    <td  style="color:#0000ff;padding:8px;border-bottom:dotted 1px #c4c4ff;">Determination 2 &nbsp;<input type="text" name="determination_two"></input></td>
                    <td  style="color:#0000ff;padding:8px;border-bottom:dotted 1px #c4c4ff;">Determination 3 &nbsp;<input type="text" name="determination_three"></input></td>
                  </tr>
                  <tr>
                    <td colspan="3" style="color:#0000ff;padding:8px;">Average % &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="average"></input></td>
                  </tr>
                  <tr>
                    <td colspan="6" style="color:#0000ff;padding:8px;">SD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sd"></input></td>
                  </tr>
                  <tr>
                    <td colspan="6" style="color:#0000ff;padding:8px;">RSD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="rsd"></input></td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
                <td colspan="8" style="padding:8px;">
                  <table border="0" cellpadding="8px" align="center">
                    <tr>
                      <td colspan="2" style="color:#0000ff;padding:8px;border-bottom:solid 1px #c4c4ff;"><b>Acceptance Criteria</b></td>
                      <td style="color:#0000ff;padding:8px;border-bottom:solid 1px #c4c4ff;"><b>Results</b></td>
                      <td style="color:#0000ff;padding:8px;border-bottom:solid 1px #c4c4ff;"><b>Comment</b></td>
                    </tr>
                    <tr>
                      <td>Factor</td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                    </tr>
                    <tr>
                      <td>SD</td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                    </tr>
                    <tr>
                      <td>RSD</td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                    </tr>
                  </table>
                </td>
            </tr>
            <tr>
              <td colspan="8"  align="left" style="padding:8px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><b>Weight of Sample taken (g)</b></td>
            </tr>
            <tr>
              <td colspan="8">
                <table border="0" cellpadding="8px" align="center">
                   <tr>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;"></td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">Weight 1</td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">Weight 2</td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">weight 3</td>
                  </tr>
                  <tr>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      Weight of Sample + container(g)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_three"></td>
                  </tr>
                  <tr>
                      <td colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      Weight of Container(g)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_three"></td>
                      
                  </tr>
                  <tr>
                      <td colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      Weight of Sample(g)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_three"></td>
                      
                  </tr>
                </table>
                </td>
            </tr>
            <tr>
              <td colspan="8" height="25px" align="left" style="padding:8px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><b>Titration Volumes</b></td>
            </tr>
            <tr>
              <td colspan="8">
                <table border="0" cellpadding="8px" align="center">
                   <tr>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;"></td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">Weight 1</td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">Weight 2</td>
                      <td  colspan="0" align="center" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">weight 3</td>
                  </tr>
                  <tr>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      Final Burette Volume(ml)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_sc_three"></td>
                  </tr>
                  <tr>
                      <td colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      Initial Burette Volume(ml)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_c_three"></td>
                      
                  </tr>
                  <tr>
                      <td colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                     Volume Used(ml)</td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_one"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_two"></td>
                      <td  colspan="0" height="25px" align="left" style="color:#000;padding:8px;border-bottom: dotted 1px #c4c4ff;background-color: #ffffff;">
                      <input type="text" name="w_s_three"></td>
                      
                  </tr>
                </table>
                </td>
            </tr>
            <tr>
              <td colspan="8" height="25px" align="left" style="padding:8px;border-bottom: dotted 1px #c4c4ff;color: #000;background-color: #ffffff;"><b>Calculations</b></td>
            </tr>
            <tr>
                <td colspan="8" style="padding:8px;border-bottom:solid 1pf #c4c4ff;">
                  <table border="0" cellpadding="8px" align="center">
                    <tr>
                      <td style="color:#0000ff;padding:8px;"></td>
                      <td style="color:#0000ff;padding:8px;border-bottom:solid 1px #c4c4ff;">Vol. Used x Factor x Equivalent WT x Average WT x 100 =</td>
                      <td style="color:#0000ff;padding:8px;">%</td>
                    </tr>
                    <tr>
                      <td colspan="2" style="color:#0000ff;text-align:center;">Label Claim x WT Taken</td>
                    </tr>
                  </table>
                </td>
            </tr>
            <tr>
              <td  colspan="8" style="color:#0000ff;padding:8px;border-bottom:dotted 1px #c4c4ff;"><b>Calculation of Determinations</b></td>
            </tr>
            <tr>
              <td colspan="8" style="padding:8px;">
                <table border="0" cellpadding="8" align="center">
                  <tr>
                    <td  style="color:#0000ff;padding:8px;border-bottom:dotted 1px #c4c4ff;">Determination 1 &nbsp;<input type="text" name="determination_one"></input></td>
                    <td  style="color:#0000ff;padding:8px;border-bottom:dotted 1px #c4c4ff;">Determination 2 &nbsp;<input type="text" name="determination_two"></input></td>
                    <td  style="color:#0000ff;padding:8px;border-bottom:dotted 1px #c4c4ff;">Determination 3 &nbsp;<input type="text" name="determination_three"></input></td>
                  </tr>
                  <tr>
                    <td colspan="3" style="color:#0000ff;padding:8px;">Average % &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="average"></input></td>
                  </tr>
                  <tr>
                      <td colspan="6" style="color:#0000ff;padding:8px;">Equivalent To &nbsp;<input type="text" name="equivalent_to"></input></td>
                    </tr>
                  <tr>
                    <td colspan="6" style="color:#0000ff;padding:8px;">SD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sd"></input></td>
                  </tr>
                  <tr>
                    <td colspan="6" style="color:#0000ff;padding:8px;">RSD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="rsd"></input></td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
                <td colspan="8" style="padding:8px;">
                  <table border="0" width="80%" cellpadding="8px" align="center">
                    <tr>
                      <td colspan="2" style="color:#0000ff;padding:8px;border-bottom:solid 1px #c4c4ff;"><b>Acceptance Criteria</b></td>
                      <td style="color:#0000ff;padding:8px;border-bottom:solid 1px #c4c4ff;"><b>Results</b></td>
                      <td style="color:#0000ff;padding:8px;border-bottom:solid 1px #c4c4ff;"><b>Comment</b></td>
                    </tr>
                    <tr>
                      <td>Content</td>
                      <td style="color:#0000ff;padding:8px;">95.0 to 105.0% of the stated amount</input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                    </tr>
                    <tr>
                      <td>SD</td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                    </tr>
                    <tr>
                      <td>RSD</td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                      <td style="color:#0000ff;padding:8px;"><input type="text" name=""></input></td>
                    </tr>
                  </table>
                </td>
            </tr>
            <tr>
              <td colspan="8" align="left"  style="padding:8px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><b>Reagents</b></td>
            </tr>
            <tr>
                <td colspan="8" style="padding:8px;">
                  <table border="0" cellpadding="8px" align="center">
                    <tr>
                      <td style="text-align:center;color:#0000ff;padding:8px;">Test</td>
                      <td style="text-align:center;color:#0000ff;padding:8px;">Chemical/Reagent</td>
                      <td style="text-align:center;color:#0000ff;padding:8px;">Batch No.</td>
                      <td style="text-align:center;color:#0000ff;padding:8px;">Manufacturer</td>
                    </tr>
                    <tr>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                    </tr>
                    <tr>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                    </tr>
                    <tr>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                    </tr>
                    <tr>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                    </tr>
                    <tr>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                    </tr>
                    <tr>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                      <td style="border-bottom:dottted 1px #c4c4ff;"><input type="" name=""></input></td>
                    </tr>
                  </table>
                </td>
            </tr>
            <tr>
              <td colspan="8" align="left"  style="padding:8px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><b>Conclusion</b></td>
            </tr>
             <tr>
              <td colspan="8" style="padding:8px;border-bottom:dotted 1px #c4c4ff;">
                <table border="0" width="30%" cellpadding="8px" align="center">
                  <tr>    
                    <td style="border-bottom:dottted 1px #c4c4ff;padding:8px;text-align:right;">PASS</input></td>
                    <td style="border-bottom:dottted 1px #c4c4ff;padding:8px;text-align:left;"><input type="radio" name="choice" value="pass"></input></td>
                    <td style="border-bottom:dottted 1px #c4c4ff;padding:8px;text-align:right;">FAIL</input></td>
                    <td style="border-bottom:dottted 1px #c4c4ff;padding:8px;text-align:left;"><input type="radio" name="choice" value="fail"></input></td>
                  </tr>
                </table>
            </tr>
            <tr>
                <td  height="25px" style="padding:4px;background-color:#ffffff;border-top: solid 1px #bfbfbf;text-align: center;" colspan="8" ><input class="btn" type="submit" name="submit" id="submit" value="Submit"></td>
            </tr>
       </table>
      </form>
</div>
</div>
</body>
</html>
