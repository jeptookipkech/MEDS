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
       <?php echo validation_errors(); ?>
      <?php echo form_open('friability/save',array('id'=>'friability_view'));?>
        <table width="75%" class="table_form" border="0" cellpadding="4px" align="center">
        <input type="hidden" name="tr_id" value="<?php echo $query['tr'];?>"></input>
        <input type="hidden" name="assignment_id" value="<?php echo $request[0]['a'];?>"></input>
        <tr>
            <td colspan="8" style="text-align:right;padding:8px;backgroun-color:#fffff;border-bottom:solid 1px #bfbfbf;"><a href="<?php echo base_url().'test/index/'.$request[0]['a'].'/'.$query['tr'];?>"><img src="<?php echo base_url().'images/icons/view.png';?>" height="25px" width="25px">Back To Test Lists</a></td>
        </tr>
        <tr>
          <td colspan="8" align="center" style="padding:8px;">
            <table border="0" align="center" cellpadding="8px" width="100%" >
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
            </table>
          </td>
        </tr>
            <tr>
              <td colspan="4" height="25px" align="center" style="padding:8px;border-bottom: solid 10px #c4c4ff;color: #0000fb;background-color: #ffffff;"><h5>Friability Test</h5></td>
            </tr>
            
            <tr>
              <td colspan="4"  align="center" style="padding:8px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"></td>
            </tr>
            <tr>
                <td colspan="0" height="25px" align="center" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">Time in Friability Tester</td>
                <td colspan="0" height="25px" align="left" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="time"></td>
                <td colspan="0" height="25px" align="center" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">Number of Revolutions</td>
                <td colspan="0" height="25px" align="center" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="revolutions"></td>
            </tr>
            <tr>
                <td  width="25%" colspan="0" height="20px" align="center" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><b>Description</b></td>
                <td  width="25%" colspan="0" height="20px" align="center" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><b>Before Rotation</b></td>
                <td  width="25%" colspan="2" height="20px" align="center" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><b>After Rotation</b></td>
            </tr>
            <tr>
                <td  colspan="0" height="25px" align="center" style="padding:4px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">Weight of 20tablets and container(g)</td>
                <td  colspan="0" height="25px" align="center" style="padding:4px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="w_tablets_containers_bf_rotation"></td>
                <td  colspan="2" height="25px" align="center" style="padding:4px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="w_tablets_containers_af_rotation"></td>
            </tr>
            <tr>
                <td colspan="0" height="25px" align="center" style="padding:4px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">weight of container(g)</td>
                <td colspan="0" height="25px" align="center" style="padding:4px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="w_container_bf_rotation"></td>
                <td colspan="2" height="25px" align="center" style="padding:4px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="w_container_af_rotation"></td>
            </tr>
            <tr>
                <td colspan="0" height="25px" align="center" style="padding:4px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">Weight of tablets/capsules(g)</td>
                <td colspan="0" height="25px" align="center" style="padding:4px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="w_tablets_bf_rotation"></td>
                <td colspan="2" height="25px" align="center" style="padding:4px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="w_tablets_af_rotation"></td> 
            </tr>
            <tr>
              <td colspan="4" height="25px" align="center" style="padding:8px;border-bottom: solid 5px #c4c4ff;color: #0000fb;background-color: #ffffff;"></td>
            </tr>
            <tr>
                <td colspan="0" height="25px" align="right" style="padding:4px;border-bottom: solid 5px #c4c4ff;color: #0000fb;background-color: #ffffff;">% Loss in Weight(friability)=</td>
                <td colspan="0" height="25px" align="center" style="padding:8px;border-bottom: solid 5px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="loss_in_weight"></td>
                <td colspan="2" height="25px" align="center" style="padding:4px;border-bottom: solid 5px #c4c4ff;color: #0000fb;background-color: #ffffff;"></td>
            </tr>
            <tr>
                <td colspan="0" height="25px" align="left" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">Acceptance Criteria</td>
                <td colspan="0" height="25px" align="left" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">Actual</td>
                <td colspan="2" height="25px" align="left" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">Comment</td>
            </tr>
            <tr>
               <td colspan="0" height="25px" align="left" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">%Loss in Weight</td>
                <td colspan="0" height="25px" align="left" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="actual"></td>
                <td colspan="2" height="25px" align="left" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="comment"></td>
            </tr>
           <tr>
              <td colspan="4" align="center"  style="padding:8px;border-bottom: solid 10px #c4c4ff;color: #0000fb;background-color: #ffffff;">Results of Analysis</td>
            </tr>
            <tr>
              <td align="center" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">Specifications</td>
              <td colspan="0" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="specification" size="50"></input></td>
              <td align="center" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">Method Used</td>
              <td style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><input type="text" name="method" ></input></td>
            </tr>
            <tr>
              <td  align="left"colspan="4" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;">Results</textarea></td>
            </tr>
            <tr>
              <td  align="center"colspan="4" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><textarea cols="160" rows="4" name="results"></textarea></td>
            </tr>
            <tr>
                <td  height="25px" style="padding:4px;background-color:#ffffff;border-top: solid 1px #bfbfbf;text-align: center;" colspan="4" ><input class="btn" type="submit" name="submit" id="submit" value="Submit"></td>
            </tr>
       </table>
      </form>
</div>
</div>
</body>
</html>

