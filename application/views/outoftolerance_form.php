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
  
  <!-- bootstrap reference library -->
  <link href="<?php echo base_url().'bootstrap/css/bootstrap.css'; ?>" rel="stylesheet" type="text/css"/>

  <script src="<?php echo base_url().'js/jquery.js';?>"></script>
  <script src="<?php echo base_url().'js/jquery-ui.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/tabs.js';?>"></script>
  
  <!-- bootstrap reference library -->
  <script src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/Jquery-datatables/jquery.dataTables.js';?>"></script>
  <script>
     function calc(){
      var total = document.getElementById('standard_reading').value - document.getElementById('instrument_reading').value;
      document.getElementById('deviation').value = total;
       }
  </script>
  <script>
    $(document).ready(function(){
  
        $('#ref_no').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#ref_no_1').show();
            $('#ref_no_r').hide();
          }else{
            $('#ref_no_1').hide();
            $('#ref_no_r').show();
          }
        })
    $('#standard_reading').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#standard_reading_1').show();
            $('#standard_reading_r').hide();
          }else{
            $('#standard_reading_1').hide();
            $('#standard_reading_r').show();
          }
        })
        $('#instrument_reading').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#instrument_reading_1').show();
            $('#instrument_reading_r').hide();
          }else{
            $('#instrument_reading_1').hide();
            $('#instrument_reading_r').show();
          }
        })
  $('#deviation').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#deviation_1').show();
            $('#deviation_r').hide();
          }else{
            $('#deviation_1').hide();
            $('#deviation_r').show();
          }
        })
  $('#specification_limits').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#specification_limits_1').show();
            $('#specification_limits_r').hide();
          }else{
            $('#specification_limits_1').hide();
            $('#specification_limits_r').show();
          }
        })
  $('#equipment_used').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#equipment_used_1').show();
            $('#equipment_used_r').hide();
          }else{
            $('#equipment_used_1').hide();
            $('#equipment_used_r').show();
          }
        })
  $('#comments').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#comments_1').show();
            $('#comments_r').hide();
          }else{
            $('#comments_1').hide();
            $('#comments_r').show();
          }
        })
  $('#conducted_by').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#conducted_by_1').show();
            $('#conducted_by_r').hide();
          }else{
            $('#conducted_by_1').hide();
            $('#conducted_by_r').show();
          }
        });
  $('#save_outoftolerance').click(function(){         
            count =0;
            $('.fieldout').each(function(){
               if ($.trim(this.value)=="")
               count ++;
            });
            if(count >0){
              alert( count+' All field as on this form are MANDATORY ')
               return false;
            }else{
              
            $.ajax({
                type:"post",
                url:"<?php echo base_url();?>outoftolerance/submit",
                data:$('#outoftolerance_form').serialize(),
                success:function(data){
        redirect_url = "<?php echo base_url();?>outoftolerance_list/index"
                    data='Success';
                    window.location.href = redirect_url;
                },
                //error:function(){
                  // alert('an error occured'); 
               //}
            })
            }
            })
    })
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
        <a href="<?php echo base_url().'home';?>"class="current sub_menu sub_menu_link first_link active">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
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
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
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
        <a href="<?php echo base_url().'home';?>"class="current sub_menu sub_menu_link first_link">Analysis Test Request</a>
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
        <a href="<?php echo base_url().'home';?>"class="current sub_menu sub_menu_link first_link">Analysis Test Request</a>
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
        <a href="<?php echo base_url().'home';?>"class="current sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
    </div>
<div id="form_wrapper_lists">
<div id="account_lists" style="display: block;" name="menu">
    <?php echo validation_errors();?>
    <?php echo form_open('outoftolerance/submit', array('id'=>'outoftolerance_form'));?>
    <table width="1022px" bgcolor="#c4c4ff" border="0" cellpadding="8px" align="center">
        
        <tr>
            <td colspan="4"  style="text-align:right;background-color:#fdfdfd;border-left:0px solid gray;border-right:0px solid gray;border-right:0px solid gray;border-bottom:0px solid gray;border-left:0px solid gray;padding:8px;"><a href="<?php echo base_url().'outoftolerance_list/records'?>"><img src="<?php echo base_url().'images/icons/back.png';?>" height="20px" width="20px"><b>Back</b></a></td>
        </tr>
        <tr>
	    <td rowspan="2" style="text-align:center;background-color:#ffffff;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="70px" width="90px"/></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>DOCUMENT: Form</b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;color:#0000fb;"><b>TITLE: OUT OF TOLERANCE FORM</b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>REFERENCE:</b></td>
	</tr>
	<tr>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>EFFECTIVE DATE: <?php echo date("d/m/Y")?></b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>REVISION NUMBER</b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>PAGE 1 of 1</b></td>
	</tr>
	<tr>
	    <td style="text-align:center;background-color:#ffffff;"><b>Form Authorized By:</b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?></td>
	    <input type="hidden" name="user" value="<?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?>">
            <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>USER TYPE</b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><?php echo("<b>".$user['logged_in']['role']);?></td>
	</tr>
        
    </table>
    <table width="950px" bgcolor="#c4c4ff" align ="center" cellpadding="8px">
        <thead bgcolor="#efefef">
            <tr>
                <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">No.</th>
                <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">ID Number</th>
                <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Serial Number</th>
                <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Equipment</th>  
                <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Date Acquired</th>
                <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Last Calibration</th>
                <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Location</th>
                <th colspan='2' style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Calibration Interval</th>
            </tr>
        </thead>
        <tb <?php
          $i = 1;
          //Query the db as an array
          foreach ($query as $row): 

                
        
          ?>
          <tr>
               <input type="hidden" name="equipment_id" value="<?php echo $row->id;?>">
              <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0;color:#00ff00;"><?php echo $i;?>.</td>
              <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><?php echo $row->id_number;?></td>
              <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><?php echo $row->serial_number;?></td>
              <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><?php echo $row->description;?></td>
              <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><?php echo substr($row->date,0,-8);?></td>
              <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><?php echo $row->calibration_start;?></td>
              <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><?php echo $row->location;?></td>
              <td colspan='2' style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><?php echo $row->calibration_interval_start;?></td>                
          <?php $i++; ?>
          </tr>
          <?php endforeach; ?> 
        </tbody>
        
        <tr>
            <td colspan="8" align="center" style="border-bottom: solid 10px #c4c4ff;color: #0000fb;background-color: #e8e8ff;"><h4>Out Of Tolerance Notification Form</h4>
            </td>
        </tr>
         <tr>
            <td colspan="8" align="center" style="text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;"><h4>SECTION A</h4></td>
        </tr>    
         <tr>
            <td colspan = "2" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Reference Number</b></td>
            <td colspan = "6"style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
                <input type = "text" size="50" name ="ref_no" id="ref_no" class="fieldout">
                <span id="ref_no_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                <span id="ref_no_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>

            
        </tr>       
        <tr>
            <td colspan="8" align="center" style="text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;"><h4>SECTION B</h4>
            </td>
        </tr>
        <tr>
            <td colspan ="8" align="center" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><h4>Data Collected From The Calibration</h4>
            </td>
        </tr>
        <tr>
            <td align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Standard reading</td>
            <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
              <input type="text" name="standard_reading" onChange="calc()" id="standard_reading" class="fieldout">
              <span id="standard_reading_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
              <span id="standard_reading_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>

            <td align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Instrument reading</td>
            <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
              <input type="text" name="instrument_reading" onChange="calc()" id="instrument_reading" class="fieldout">
              <span id="instrument_reading_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
              <span id="instrument_reading_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>

            <td align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Deviation</td>
            <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
              <input type="text" name="deviation" id="deviation" class="fieldout">
              <span id="deviation_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
              <span id="deviation_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>

            <td align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Specification limits</td>
            <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
              <input type="text" name="specification_limits" onChange="calc()" id="specification_limits" class="fieldout">
              <span id="specification_limits_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
              <span id="specification_limits_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>
        </tr>
        <tr>          
            <td align="left" colspan ="8" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><h4>State of the instruments</h4></td>
        </tr>
        <tr>
            <td colspan ="1" align="right" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"style="border-right:solid 1px #f2f2f2;text-align:center;">a.)</td>
            <td colspan ="7" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"style="border-right:solid 1px #f2f2f2;text-align:center;">
                <input type='radio' name='instrument_state' id='instrument_state' value='The test instrument was adjusted to meet specifications.'>The test instrument was adjusted to meet specifications.
            </td>
        </tr>
        <tr>
            <td colspan ="1" align="right" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"style="border-right:solid 1px #f2f2f2;text-align:center;">b.)</td>
            <td colspan ="7" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"style="border-right:solid 1px #f2f2f2;text-align:center;">
                <input type='radio' name='instrument_state' id='instrument_state' value='The test instrument is not adjustable and needs repair.'>The test instrument is not adjustable and needs repair.</td>
        </tr>
        <tr>
            <td colspan ="1" align="right" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"style="border-right:solid 1px #f2f2f2;text-align:center;">c.)</td>
            <td colspan ="7" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"style="border-right:solid 1px #f2f2f2;text-align:center;">
                <input type='radio' name='instrument_state' id='instrument_state' value='The test instrument is not adjustable or repairable and has been removed from service.'>The test instrument is not adjustable or repairable and has been removed from service.</td>
        </tr>
        <tr>
            <td colspan="8" align="center" style="text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;"><h4>SECTION C</h4></td>
        </tr>
        <tr>
            <td colspan="2" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Name of Person Reporting</td>
            <td colspan="2" style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
                <input type="text" name="reporter" id="reporter" value="<?php  echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?>"/>
            </td>
            <td colspan="2" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">How was the Equipment Used?</td>
            <td colspan="2" style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
                <input type="text" name="equipment_used" id="equipment_used" class="fieldout"/>
                <span id="equipment_used_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                <span id="equipment_used_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>
        </tr>
        <tr>
            <td align="left" colspan ="8" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Comments</td>
        </tr>
        <tr>
            <td align="center" colspan ="8" style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
                <textarea rows="6" cols="100" name="comments" id="comments" class="fieldout"></textarea>
                <span id="comments_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                <span id="comments_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>      
        </tr>
        <tr>
            <td colspan="4" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Assesment Conducted by</td>
            <td colspan="4" style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
              <input type="text" name="conducted_by" id="conducted_by" class="fieldout"/>
              <span id="conducted_by_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
              <span id="conducted_by_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>
            
        </tr>
        <tr>
            <td colspan="8" style="text-align:center;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
              <input type = "submit" name = "save_outoftolerance" id ="save_outoftolerance" value ="Save">
            </td>
        </tr>
    </table>
</form>
</div>
</div>
</body>
</hmtl>
