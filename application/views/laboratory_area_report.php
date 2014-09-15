<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<title>Lab Reports</title>
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="http://code.highcharts.com/highcharts.js"></script>
		<script src="http://code.highcharts.com/modules/exporting.js"></script>-->
		
		<link href="<?php echo base_url().'style/core.css';?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url().'bootstrap/css/bootstrap.css'; ?>" rel="stylesheet" type="text/css"/>

		<script src="<?php echo base_url().'js/jquery-1.9.1.js';?>"></script>
		<script src="<?php echo base_url().'highcharts/js/highcharts.js';?>"></script>
		<script src="<?php echo base_url().'highcharts/js/highcharts-more.js';?>"></script>
		<script>
			$(function() {
				$('#container').highcharts({
					chart:{
						type: 'column'
					},
					title : {
						text : 'Laboratory Area Weekly Temperature Summary',
						x : -20 //center
					},
					subtitle : {
						text : 'Source: MEDS.com',
						x : -20
					},
					xAxis : {
						title : {
							text : 'Weeks'
						},
						categories : <?php echo $categories;?>
					},
					yAxis : {
						title : {
							text : 'Temperature( °C)'
						},
						plotLines : [{
							value : 0,
							width : 1,
							color : '#808080'
						}]
					},
					tooltip : {
						valueSuffix : '°C'
					},
					legend : {
						layout : 'vertical',
						align : 'right',
						verticalAlign : 'middle',
						borderWidth : 0
					},
					series :<?php echo $my_series;?>
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
		<div id="link" style="text-align:right;padding:8px;border-bottom: solid 1px #c4c4ff;">
		 <a href="<?php echo base_url().'temperature_humidity_list/records/3';?>"><img src="<?php echo base_url().'images/icons/view.png';?>" height="20px" width="20px">Back to Laboratory Temperature & Humidity List</a>
		</div>
		<div id="container" style="padding-top:120px; width:100%; height:400px;"></div>
	</body>
</html>