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
   $(document).ready(function() {
    /* Init DataTables */
    $('#list').dataTable({
     "pagingType": "full_numbers",
     "sScrollY":"350px",
     "sScrollX":"100%",
     "iDisplayLength": 100,
     "bSort": false
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
    <div id="form_wrapper_lists">
      <div id="account_lists">
        <input type="hidden" id="assignment_" value="<?php echo $query['a'];?>">
        <input type="hidden" id="test_request_id" value="<?php echo $request[0]['tr'];?>">
        
         <table class="subdivider" border="0" bgcolor="#ffffff" width="100%" cellpadding="8px" align="center">
           <tr>
             <td align="right" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><a href="<?php echo base_url().'home';?>"><img src="<?php echo base_url().'images/icons/assign.png';?>" height="20px" width="20px">Back To Assigned Test Requests</a></td>
           </tr>
            <tr>
             <td  align="center" style="border-bottom: solid 5px #c4c4ff;color: #0000fb;background-color: #ffffff;"><h5><?php echo "Product Name".$request[0]['active_ingredients']." "."Samples Issued"." ".$query['sample_issued']?></h5></td>
           </tr>
        </table>
        <table id="list" border="0" width="100%" bgcolor="#ffffff" cellpadding="4px">
          <thead bgcolor="#efefef">
            <tr>
              <th style="text-align:left;padding:4px;background-color:#ffffff;border-top: solid 1px #ddddff;"><input type="checkbox" class="">Single Components</th>
              <th style="text-align:left;padding:4px;background-color:#ffffff;border-top: solid 1px #ddddff;"><input type="checkbox" class="">Two Components</th>
              <th colspan="3"style="text-align:right;padding:4px;background-color:#ffffff;border-top: solid 1px #ddddff;"><a class="reagents" href="<?php echo base_url().'assay/assay_reagents/'.$query['a'].'/'.$request[0]['tr'];?>">Test's Reagents</a></th>
              </tr>
            <tr>
                <th style="text-align:center;border-right: dotted 1px #ddddff;">Test Name</th>
                <th style="text-align:center;border-right: dotted 1px #ddddff;">Monograph</th>
                <th style="text-align:center;border-right: dotted 1px #ddddff;">Specify Components</th>
                <th style="text-align:center;border-right: dotted 1px #ddddff;">View Worksheet</th>
                <th style="text-align:center;border-right: dotted 1px #ddddff;background-color:#ffeea0;">Status</th>
            </tr>
            
          </thead>
          <tbody>
            
          <?php
            if($request[0]['assay']==0 || $request[0]['assay']=="" || $request[0]['assay']=="NULL" ){
             
           }else{
            ?>
            <tr>
                <td style="text-align:center;padding:4px; background-color:#ffffff;border-top: solid 1px #ddddff;"><b>Assay Tests</b></td>
                <td style="text-align:left;padding:4px;background-color:#ffffff;border-top: solid 1px #ddddff;"></td>
                <td style="text-align:center;padding:4px; background-color:#ffffff;border-top: solid 1px #ddddff;"><a href="<?php echo base_url().'assay/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>"></a></td>
                <td style="text-align:center;padding:4px; background-color:#ffffff;border-top: solid 1px #ddddff;"><a href="<?php echo base_url().'assay/worksheet/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>"></a></td>
              <td 
                <?php 
                      if(empty($hplc_internal_method)){
                    
                          echo"style='text-align:center;padding:4px;border-bottom:solid 1px #bfbfbf; background-color:#ffffff;border-top: solid 1px #ddddff;'>";
                          echo "";
                     }else{
                         echo"style='text-align:center;padding:4px;background-color:#ffffff;border-bottom:solid 1px #bfbfbf;border-top: solid 1px #ddddff;'>";
                         echo "";
                     }?>
                </td>
            </tr>

            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_hplc_internal_method)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_hplc_internal_method_single_component/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                      <a href="<?php echo base_url().'assay/view_monograph_hplc_internal_method_single_component/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>
                     <?php
                     }
                     ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_monograph_hplc_internal_method)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Internal Method Single Component
                     <?php     
                     }elseif(!empty($assay_hplc_internal_method)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Internal Method Single Component has been Conducted 
                     <?php     
                     }
                     else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_internal_method_single_component/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">Hplc Internal Method Single Component</a> 
                <?php
                }
                ?>
                </td>
                 <td
                 <?php 
                      if(empty($hplc_internal_method)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_hplc_internal_method_single_component/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
              <td
                <?php 
                      if(empty($hplc_internal_method)){
                        echo"style='text-align:center;padding:4px;border-top:bottom 1px #bfbfbf;background-color:#ffeea0;'>";
                        echo "Not Done";
                          
                     }else if (!empty($hplc_internal_method)){
                         echo"style='text-align:center;padding:4px;border-top:solid 1px #bfbfbf;background-color:#98ff98;'>";
                         echo "Complete"; 
                     }?> 
                </td>
            </tr>


            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_hplc_internal_method)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                      <a href="<?php echo base_url().'assay/view_monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>
                     <?php
                     }
                     ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_monograph_hplc_internal_method)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Internal Method Two Components
                     <?php     
                     }elseif(!empty($assay_hplc_internal_method)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Internal Method Two Components has been Conducted 
                     <?php     
                     }
                     else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_internal_method_two_components/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">Hplc Internal Method Two Components</a> 
                <?php
                }
                ?>
                </td>
                 <td
                 <?php 
                      if(empty($hplc_internal_method)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_hplc_internal_method_two_components/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
              <td
                <?php 
                      if(empty($hplc_internal_method)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if (!empty($hplc_internal_method)){
                         echo"style='text-align:center;padding:4px;border-bottom:solid 1px #bfbfbf;background-color:#98ff98;'>";
                         echo "Complete"; 
                     }?> 
                </td>
            </tr>


            <tr>
                <td style="text-align:center;padding:4px;"></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_hplc_area_method_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_area_method_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                     ?>
                      <a href="<?php echo base_url().'assay/view_monograph_hplc_area_method_single_component/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>
                    <?php
                     }
                    ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_monograph_hplc_area_method_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Area Method Single Component
                     <?php     
                     }else if(!empty($assay_hplc_area_method_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Area Method Single Component Has Been Conducted 
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_area_method_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">Hplc Area Method Single Component</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_hplc_area_method_single_component)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_hplc_area_method_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
                <td 
                <?php 
                      if(empty($assay_hplc_area_method_single_component)){
                        echo "style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($assay_hplc_area_method_single_component[0]['test_status']==1){
                         echo "style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>
                </td>
            </tr>

            <tr>
                <td style="text-align:center;padding:4px;"></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_hplc_area_method_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_area_method_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                          
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                     ?>
                      <a href="<?php echo base_url().'assay/view_monograph_area_method_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">View Monograph</a>
                    <?php
                    }
                    ?>
                </td>
                 <td
                 <?php 
                      if(!empty($assay_hplc_area_method_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Area Method Two Components
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_area_method_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Hplc Area Method Two Components</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_hplc_area_method_two_components)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_hplc_area_method_two_components/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
                <td
                <?php 
                      if(empty($assay_hplc_area_method_two_components)){
                        echo "style='text-align:center;padding:4px;background-color:#ffeea0;border-top:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if($assay_hplc_area_method_two_components[0]['test_status']==1){
                         echo "style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?> 
              </td>
            </tr>

            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_hplc_area_method_two_components_dif_methods)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_hplc_area_method_two_components_dif_methods/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                          
                  <?php       
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                     ?>
                      <a href="<?php echo base_url().'assay/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>
                     <?php
                      }
                     ?> 
                </td>
                <td
                 <?php 
                      if(empty($assay_hplc_area_method_two_components_different_methods)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Area Method Two Components Different Methods
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_area_method_two_components_different_methods/'.$query['a'].'/'.$request[0]['tr'];?>">Hplc Area Method Two Components Different Methods</a>
                <?php
                }
                ?>
                </td>
                 <td
                 <?php 
                      if(empty($assay_hplc_area_method_two_components_different_methods)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
                <td
                <?php 
                      if(empty($assay_hplc_area_method_two_components_different_methods)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($assay_hplc_area_method_two_components_different_methods[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>  
                </td>
            </tr>

            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_hplc_area_method_oral_liquids_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_hplc_area_method_two_oral_liquids_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                          
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                         ?>
                         <a href="<?php echo base_url().'assay//'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>
                     <?php
                     }
                     ?>
                </td>
                <td
                 <?php 
                      if(!empty($assay_hplc_area_method_oral_liquids_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Area Method Oral Liquids Single Component
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_oral_liquids_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">Hplc Area Method Oral Liquids Single Component</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_hplc_area_method_oral_liquids_single_components)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
                <td
                <?php 
                      if(empty($assay_hplc_area_method_oral_liquids_single_components)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($assay_hplc_area_method_oral_liquids_single_components[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>   
                </td>
            </tr> 

            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_hplc_area_method_oral_liquids_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_hplc_area_method_two_oral_liquids_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                          
                  <?php       
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                     ?>
                      <a href="<?php echo base_url().'assay//'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>
                    <?php
                      }
                    ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_hplc_area_method_oral_liquids_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Area Method Oral Liquids Two Components
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_oral_liquids_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Hplc Area Method Oral Liquids Two Components</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_hplc_area_method_oral_liquids_two_components)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
                <td
                <?php 
                      if(empty($assay_hplc_area_method_oral_liquids_two_components)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($assay_hplc_area_method_oral_liquids_two_components[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?> 
                </td>
            </tr>

            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_hplc_area_method_powder_for_oral_liquids)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_hplc_area_method_powder_for_oral_liquids/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                          
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                     ?>
                     <a href="<?php echo base_url().'assay//'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>
                    <?php
                    }
                    ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_monograph_hplc_area_method_powder_for_oral_liquids)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Area Method Powder for Oral Liquids
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_powder_for_oral_liquids/'.$query['a'].'/'.$request[0]['tr'];?>">Hplc Area Method Powder for Oral Liquids</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_hplc_area_method_powder_for_oral_liquids)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
                <td
                <?php 
                      if(empty($assay_hplc_area_method_powder_for_oral_liquids)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($assay_hplc_area_method_powder_for_oral_liquids[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?> 
                </td>
            </tr>

            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_hplc_area_method_injection_powder_single_comp)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_hplc_area_method_injection_powder_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                          
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                     ?>
                     <a href="<?php echo base_url().'assay//'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>
                     <?php
                     }
                     ?> 
                </td>
                <td
                 <?php 
                      if(empty($assay_monograph_hplc_area_method_injection_powder_single_comp)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Area Method Injection Powder Single Component
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_injection_powder_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">Hplc Area Method Injection Powder Single Component</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_hplc_area_method_injection_powder_single_component)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
                <td
                <?php 
                      if(empty($assay_hplc_area_method_injection_powder_single_component)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($assay_hplc_area_method_injection_powder_single_component[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?> 
                </td>
            </tr>

            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_hplc_area_method_injection_powder_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_hplc_area_method_injection_powder_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                          
                  <?php       
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                     ?>
                     <a href="<?php echo base_url().'assay//'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>
                    <?php
                    }
                    ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_hplc_area_method_injection_powder_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Hplc Area Method Injection Powder Two Components
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_injection_powder_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Hplc Area Method Injection powder Two Components</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_hplc_area_method_injection_powder_two_components)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_hplc_area_method_injection_powder_two_components)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($assay_hplc_area_method_injection_powder_two_components[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?> 
                </td>
            </tr>

            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_titration)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_titration/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                          
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                     ?>
                     <a href="<?php echo base_url().'assay/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>
                    <?php
                    }
                    ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_monograph_titration)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Assay General Titration
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_titration/'.$query['a'].'/'.$request[0]['tr'];?>">Assay General Titration</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_titration)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td
                <?php 
                      if(empty($assay_titration)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($assay_titration[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>  
                </td>
            </tr>


             <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_titration)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_indometric_titration/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                          
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                     ?>
                     <a href="<?php echo base_url().'assay/monograph_indometric_titration/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>&nbsp;&nbsp;
                     <a href="<?php echo base_url().'test_vs_solution/index/'.$query['a'].'/'.$request[0]['tr'];?>">Volumetric Solution</a>
                    <?php
                    }
                    ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_monograph_indometric_titration)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Indometric Titration
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_indometric_titration/'.$query['a'].'/'.$request[0]['tr'];?>">Assay Indometric Titration</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_indometric_titration)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td
                <?php 
                      if(empty($assay_indometric_titration)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($assay_indometric_titration[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>  
                </td>
            </tr>

            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_ultraviolet_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_ultraviolet_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                      <a href="<?php echo base_url().'assay/monograph_ultraviolet_single_component_view/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a> 
                    <?php
                    }
                    ?>
                </td>
                 <td
                 <?php 
                      if(empty($assay_monograph_ultraviolet_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          (UV) ultraviolet Single Component
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_ultravioletv_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">(UV) ultraviolet Single Component</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_ultraviolet_single_component)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_single_component_view/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
                <td
                <?php 
                      if(empty($assay_ultraviolet_single_component)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($assay_ultraviolet_single_component[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?> 
                </td>
            </tr>
            
            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($assay_monograph_ultraviolet_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'assay/monograph_ultraviolet_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                      <a href="<?php echo base_url().'assay/monograph_ultraviolet_two_components_view/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a> 
                    <?php
                    }
                    ?>
                </td>
                 <td
                 <?php 
                      if(empty($assay_monograph_ultraviolet_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          (UV) ultraviolet Two Components
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/worksheet_ultravioletv_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">(UV) ultraviolet Two Components</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($assay_ultraviolet_two_components)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'assay/full_worksheet_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">view worksheet</a>
                <?php
                }
                ?>
                </td>
                <td
                <?php 
                      if(empty($assay_ultraviolet_two_components)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($assay_ultraviolet_two_components[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?> 
                </td>
            </tr>
           <?php  
           }
           ?>
        
           <?php
            if($request[0]['content_uniformity']==0 || $request[0]['content_uniformity']=="" || $request[0]['content_uniformity']=="NULL" ){
             
           }else{
            ?>
            <tr>
                <td style="text-align:center;padding:4px; background-color:#ffffff;"><b>Uniformity Tests</b></a></td>
                <td style="text-align:center;padding:4px; background-color:#ffffff;"><a href="<?php echo base_url().'content_uniformity/monograph/'.$query['a'].'/'.$request[0]['tr'];?>"></a></td>
                <td style="text-align:center;padding:4px; background-color:#ffffff;"><a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>"></a></td>
                <td style="text-align:center;padding:4px; background-color:#ffffff;"><a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>"></a></td>
                <td 
                <?php 
                      if(empty($content_uniformity_hplc)){
                    
                          echo"style='text-align:center;padding:4px;border-bottom:solid 1px #bfbfbf; background-color:#ffffff;border-top: solid 1px #ddddff;'>";
                          echo "";
                     }else{
                         echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;border-top: solid 1px #ddddff;'>";
                         echo "";
                     }?>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($uniformity_monograph_weight_variation_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'content_uniformity/weight_variation_single_component_monograph/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                      <a href="<?php echo base_url().'content_uniformity/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>&nbsp;&nbsp;
                      <a href="<?php echo base_url().'content_uniformity/worksheet_uniformity_of_dosage_unit_single_component/'.$query['a'].'/'.$request[0]['tr'];?>"> Uniformity of Dosage Unit Single Component</a> 
                    <?php
                    }
                    ?>
                </td>
                <td
                 <?php 
                      if(!empty($weight_variation_hplc_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Weight Variation HPLC Single Component
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet_weight_variation_single/'.$query['a'].'/'.$request[0]['tr'];?>"> Weight Variation HPLC Single Component</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($weight_variation_hplc_single_component)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td 
                <?php 
                      if(empty($weight_variation_hplc_single_component)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($weight_variation_hplc_single_component[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;padding:4px;"></td>
                <td 
                  <?php 
                      if(empty($uniformity_monograph_weight_variation_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'content_uniformity/weight_variation_two_components_monograph/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                      <a href="<?php echo base_url().'assay/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>&nbsp;&nbsp;
                      <a href="<?php echo base_url().'content_uniformity/worksheet_uniformity_of_dosage_unit_two_components/'.$query['a'].'/'.$request[0]['tr'];?>"> Uniformity of Dosage Unit Two Components</a>  
                    <?php
                    }
                    ?>
                </td>
                 <td
                 <?php 
                      if(!empty($weight_variation_hplc_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Weight Variation Hplc Two Components
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">Weight Variation Hplc Two Components</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($weight_variation_hplc_two_components)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td 
                <?php 
                      if(empty($weight_variation_hplc_two_components)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($weight_variation_hplc_two_components[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>
                </td>
            </tr>
            
            <tr>
                <td style="text-align:center;padding:4px;"></td>
                <td 
                  <?php 
                      if(empty($uniformity_monograp_content_uniformity_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'content_uniformity/monograph_content_uniformity_hplc_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                      <a href="<?php echo base_url().'assay/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a> 
                    <?php
                    }
                    ?>
                </td>
                <td
                 <?php 
                      if(!empty($content_uniformity_hplc_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Content Uniformity Hplc Single Component
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">Content Uniformity Hplc Single Component</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($content_uniformity_hplc_single_component)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td 
                <?php 
                      if(empty($content_uniformity_hplc_single_component)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($content_uniformity_hplc_single_component[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>
                </td>
            </tr>
            
            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($uniformity_monograp_content_uniformity_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                  ?>
                      <a href="<?php echo base_url().'content_uniformity/monograph_content_uniformity_hplc_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                          
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>  
                    <a href="<?php echo base_url().'assay/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>
    
                    <?php
                    }
                    ?>
                </td>
                <td
                 <?php 
                      if(empty($uniformity_monograp_content_uniformity_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Content Uniformity Hplc Two Components
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">Content Uniformity Hplc Two Components</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($weight_variation_hplc_two_components)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td 
                <?php 
                      if(empty($content_uniformity_hplc_two_components)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($content_uniformity_hplc_two_components[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;padding:4px;"></td>
                <td 
                  <?php 
                      if(empty($uniformity_monograp_content_uniformity_titra_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'content_uniformity/monograph_content_uniformity_titration_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                      <a href="<?php echo base_url().'assay/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a> 
                    <?php
                    }
                    ?>
                </td>
                <td
                 <?php 
                      if(empty($uniformity_monograp_content_uniformity_titra_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Content Uniformity Titration Single Component
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">Content Uniformity Titration Single Component</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($content_uniformity_titration_single_component)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td 
                <?php 
                      if(empty($content_uniformity_titration_single_component)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($content_uniformity_titration_single_component[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td 
                  <?php 
                      if(empty($uniformity_monograp_content_uniformity_titra_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'content_uniformity/monograph_content_uniformity_titration_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                      <a href="<?php echo base_url().'content_uniformity/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a> 
                    <?php
                    }
                    ?>
                </td>
                <td
                 <?php 
                      if(empty($uniformity_monograp_content_uniformity_titra_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Content Uniformity Titration Two Components
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">Content Uniformity Titration Two Components</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($content_uniformity_titration_two_components)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td 
                <?php 
                      if(empty($content_uniformity_titration_two_components)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($content_uniformity_titration_two_components[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;padding:4px;"></td>
                <td 
                  <?php 
                      if(empty($uniformity_monograp_content_uniformity_uv_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'content_uniformity/monograph_content_uniformity_uv_single_component/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                      <a href="<?php echo base_url().'content_uniformity/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>&nbsp;&nbsp;
                      <a href="<?php echo base_url().'content_uniformity/uniformity_of_dosage_unit_single_component_uv_single_wavelength/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">Uniformity of Dosage Unit Single Component (UV) Single Wavelength</a> 
                    <?php
                    }
                    ?>
                </td>
                <td
                 <?php 
                      if(empty($uniformity_monograp_content_uniformity_uv_single_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Content Uniformity UV Single Component
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">Content Uniformity UV Single Component</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($content_uniformity_uv_single_component)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td 
                <?php 
                      if(empty($content_uniformity_uv_single_component)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($content_uniformity_uv_single_component[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;padding:4px;"></td>
                <td 
                  <?php 
                      if(empty($uniformity_monograp_content_uniformity_uv_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'content_uniformity/monograph_content_uniformity_uv_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                      <a href="<?php echo base_url().'content_uniformity/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">View Monograph</a>&nbsp;&nbsp;
                      <a href="<?php echo base_url().'content_uniformity/monograph_hplc_internal_method/'.$query['a'].'/'.$request[0]['tr'].'/'.$request[0]['test_type_id'];?>">Uniformity of Dosage Unit Two Components (UV) Single Wavelength</a>  
                    <?php
                    }
                    ?>
                </td>
                <td
                 <?php 
                      if(empty($uniformity_monograp_content_uniformity_uv_two_components)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Content Uniformity UV Two Components
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">Content Uniformity UV Two Components</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($content_uniformity_uv_two_components)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'content_uniformity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td 
                <?php 
                      if(empty($content_uniformity_uv_two_components)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($content_uniformity_uv_two_components[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?>
                </td>
            </tr>

            <?php
           }
           ?>

             <?php 
            if($request[0]['friability']==0 || $request[0]['friability']=="" || $request[0]['friability']=="NULL" ){
                    
             }else{
            ?>
            <tr>
              <td style="text-align:center;padding:4px;background-color:#ffffff;"><b>Friability</b></td>
              <td style='text-align:left;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
            </tr>
            <tr>
              <td style="text-align:center;padding:4px;"></td>
              <td 
                  <?php 
                      if(empty($friability_monograph)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'friability/monograph/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>  
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                     <a href="<?php echo base_url().'friability/friability_monograph/'.$query['a'].'/'.$request[0]['tr'];?>">view Monograph</a>
                    <?php
                    }
                    ?>
              </td>
              <td
                 <?php 
                      if(empty($friability_monograph)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Frability 
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'friability/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">Frability</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($uniformity_of_dosage_unit_single_component_uv)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'uniformity_of_dosage/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td
               <?php 
                      if(empty($friability)){
                        echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                        echo "Not Done";
                          
                     }else if ($friability[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;background-color:#98ff98;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete"; 
                     }?> 
              </td>
            </tr>
            <?php
           }
           ?>
            <?php
            if($request[0]['ph_alkalinity']==0 || $request[0]['ph_alkalinity']=="" || $request[0]['ph_alkalinity']=="NULL" ){
              
             }else{
              ?>
              <tr>
                <td style="text-align:center;padding:4px;background-color:#ffffff;"><b>pH Alkalinity</b></td>
                <td style='text-align:left;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
              </tr>
              <tr>
                <td style="text-align:center;padding:4px;"><b></b></a></td>
                <td 
                  <?php 
                      if(empty($ph_alkalinity_monograph)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          <a href="<?php echo base_url().'ph_alkalinity/monograph/'.$query['a'].'/'.$request[0]['tr'];?>">Please Fill The Monograph</a>  
                  <?php       
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                    ?>
                     <a href="<?php echo base_url().'ph_alkalinity/ph_alkalinity_monograph/'.$query['a'].'/'.$request[0]['tr'];?>">view Monograph</a>
                    <?php
                    }
                    ?>
              </td>
              <td
                 <?php 
                      if(empty($ph_alkalinity_monograph)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          ?>
                          Specify pH Alkalinity Components
                     <?php     
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'ph_alkalinity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">pH Alkalinity</a>
                <?php
                }
                ?>
                </td>
                <td
                 <?php 
                      if(empty($ph_alkalinity)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          ?>
                          view worksheet
                     <?php     
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                   ?>
                     <a href="<?php echo base_url().'ph_alkalinity/worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a>
                <?php
                }
                ?>
              </td>
              <td
                <?php 
                      if(empty($ph_alkalinity)){
                        echo"style='text-align:center;padding:4px;'>";
                        echo "Not Done";
                          
                     }else if ($ph_alkalinity[0]['test_status']==1){
                         echo"style='text-align:center;padding:4px;'>";
                         echo "Complete"; 
                     }?>  
                </td>
            </tr>
            <?php    
             }
             ?>

           <?php
            if($request[0]['identification']==0 || $request[0]['identification']==""){
              
             }else{
              ?>
               <tr>
                <td style="text-align:center;padding:4px;background-color:#ffffff;"><b>Identification</b></td>
                <td style='text-align:left;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
               </tr>
               <tr>
                    <td style="text-align:center;padding:4px;"><b></b></td>
                    <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/monograph_assay/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                    <td 
                    <?php 
                      if(empty($monograph_identification_assay)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Please Fill The Assay Monograph First";
                     }else{
                      ?>
                       style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_identification/index/'.$query['a'].'/'.$request[0]['tr'];?>">Assay</a></td>
                     <?php   
                     }
                     ?>
                    <td <?php 
                      if(empty($identification_assay)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                         style='text-align:center;padding:4px;'><a href='<?php echo base_url().'test_identification/view_worksheet/'.$query['a'].'/'.$request[0]['tr'];?>'>View Worksheet</a>
                     <?php   
                     }
                     ?>
                    </td>
                    <td 
                      <?php 
                      if(empty($identification_assay)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                         echo "Complete";
                     }?>                     
                    </td>
              </tr>
              <tr>
                    <td style="text-align:center;padding:4px;"></td>
                    <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/monograph_uv/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                    <td 
                    <?php 
                      if(empty($monograph_identification_uv)){
              
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Please Fill The UV Monograph First";
                     }else{
                      ?>
                        style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_identification/index_uv/'.$query['a'].'/'.$request[0]['tr'];?>">UV</a></td>
                     <?php   
                     }
                     ?>
                    <td 
                    <?php 
                      if(empty($identification_uv)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                         style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/view_worksheet_uv/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                     <?php   
                     }
                     ?>                    
                    <td 
                      <?php 
                      if(empty($identification_uv)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                         echo "Complete";
                     }?>
                     
                    </td>
              </tr>
              <tr>
                    <td style="text-align:center;padding:4px;"></td>
                    <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/monograph_infrared/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                    <td 
                      <?php 
                      if(empty($monograph_identification_infrared)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Please Fill The Infrared Monograph First";
                  
                     }else{
                      ?>
                        style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_identification/index_infrared/'.$query['a'].'/'.$request[0]['tr'];?>">Infrared</a></td>
                     <?php   
                     }
                     ?>
                    <td 
                    <?php 
                      if(empty($identification_infrared)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                         style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/view_worksheet_infrared/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                     <?php   
                     }
                     ?>                    
                    <td 
                      <?php 
                      if(empty($identification_infrared)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                         echo "Complete";
                     }?>
                     
                    </td>
              </tr>
              <tr>
                    <td style="text-align:center;padding:4px;"></td>
                    <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/monograph_thin_layer/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                    <td 
                    <?php 
                      if(empty($monograph_identification_thin_layer)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Please Fill The Thin Layer Chromatography Monograph First";
                     }else{
                      ?>
                    style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_identification/index_thin_layer/'.$query['a'].'/'.$request[0]['tr'];?>">Thin Layer Chromatography</a></td>
                     <?php   
                     }
                     ?>
                    <td 
                    <?php 
                      if(empty($identification_thin_layer)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                        style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/view_worksheet_thin_layer/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                     <?php   
                     }
                     ?>
                    
                    <td 
                      <?php 
                      if(empty($identification_thin_layer)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                         echo "Complete";
                     }?>
                     
                    </td>
              </tr>
              <tr>
                    <td style="text-align:center;padding:4px;"></td>
                    <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/monograph_hplc/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                    <td 
                    <?php 
                      if(empty($monograph_identification_hplc)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Please Fill The Identification by HPLC Monograph First";

                     }else{
                      ?>
                       style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_identification/index_hplc/'.$query['a'].'/'.$request[0]['tr'];?>">Identification by HPLC</a></td>
                     <?php   
                     }
                     ?>
                    <td 
                    <?php 
                      if(empty($identification_hplc)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                        style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/view_worksheet_hplc/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                     <?php   
                     }
                     ?>
                    <td 
                      <?php 
                      if(empty($identification_hplc)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                         echo "Complete";
                     }?>
                     
                    </td>
              </tr>
              <tr>
                    <td style="text-align:center;padding:4px;"></td>
                    <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/monograph_chemical/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                    <td 
                    <?php 
                      if(empty($monograph_identification_chemical_method)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Please Fill The Chemical Method Monograph First";
                      
                     }else{
                      ?>
                      style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/index_chemical/'.$query['a'].'/'.$request[0]['tr'];?>">Chemical Method</a></td>
                     <?php   
                     }
                     ?>
                    <td 
                    <?php 
                      if(empty($identification_chemical_method)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                       style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/view_worksheet_chemical/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                     <?php   
                     }
                     ?>
                    <td 
                      <?php 
                      if(empty($identification_chemical_method)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:left;padding:4px;'>";
                         echo "Complete";
                     }?>
                     
                    </td>
              </tr>
              <tr>
                    <td style="text-align:center;padding:4px;"></td>
                    <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/monograph_tlc/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                    <td 
                    <?php 
                      if(empty($monograph_identification_tlc)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Please Fill The TLC Monograph First";
                     }else{
                      ?>
                    style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_identification/index_tlc/'.$query['a'].'/'.$request[0]['tr'];?>">TLC</a></td>
                     <?php   
                     }
                     ?>
                    <td
                    <?php 
                      if(empty($identification_tlc)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                    style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_identification/view_worksheet_tlc/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a></td>
                     <?php   
                     }
                     ?> 
                    <td 
                      <?php 
                      if(empty($identification_tlc)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;'>";
                         echo "Complete";
                     }?>
                     
                    </td>
              </tr>
              <?php
             }
             ?>
             <?php
            if($request[0]['disintegration']==0 || $request[0]['disintegration']=="" || $request[0]['disintegration']=="NULL" ){
             
           }else{
          ?>
           <tr>
                <td style="text-align:center;padding:4px;background-color:#ffffff;"><b>Disintegration</b></td>
                <td style='text-align:left;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
           </tr>
           <tr>
                <td style="text-align:center;padding:4px;"><b></b></a></td>
                <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_disintergration/monograph/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                <td 
                 <?php 
                      if(empty($monograph_disintegration)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Specify Components";
                     }else{
                      ?>
                      style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_disintergration/index/'.$query['a'].'/'.$request[0]['tr'];?>">Specify Components</a></td>
                     <?php   
                     }
                     ?>
                <td 
                <?php 
                      if(empty($query_six)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                        style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_disintergration/view_worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                     <?php   
                     }
                     ?> 
              <td 
                <?php 
                      if(empty($query_six)){
                    
                          echo"style='text-align:center;padding:4px;background-color:#eed6ff;border-bottom:solid 1px #bfbfbf;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete";
                     }?>
                </td>
            </tr>
           <?php
           }
           ?>

           <?php
            if($request[0]['dissolution']==0 || $request[0]['dissolution']=="" || $request[0]['dissolution']=="NULL" ){
             
           }else{
            ?>
            <tr>
                <td style="text-align:center;padding:4px;background-color:#ffffff;"><b>Dissolution</b></td>
                <td style='text-align:left;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
               </tr>
            <tr>
                <td style="text-align:center;padding:4px;"><b></b></a></td>
                <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_dissolution/monograph_uv/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                <td 
                <?php 
                      if(empty($monograph_diss_uv)){
                          echo"style='text-align:left;padding:4px;color:#000;background-color:#ffffff;'>";
                          echo "Please Fill The By UV Monograph First";
                          
                     }else{
                      ?>
                        style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_dissolution/index/'.$query['a'].'/'.$request[0]['tr'];?>">By UV</a></td>
                     <?php   
                     }
                     ?>
                <td 
                <?php 
                      if(empty($diss_uv)){
                    
                          echo"style='text-align:center;padding:4px;border-bottom:solid 1px #bfbfbf;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                     style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_dissolution/view_worksheet_uv/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                     <?php   
                     }
                     ?>
              <td 
                <?php 
                      if(empty($diss_uv)){
                    
                          echo"style='text-align:center;padding:4px;background-color:#eed6ff;border-bottom:solid 1px #bfbfbf;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete";
                     }?>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_dissolution/monograph_delayed_release/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                <td 
                <?php 
                      if(empty($monograph_dissolution_delayed)){
                           echo"style='text-align:left;padding:4px;color:#000;background-color:#ffffff;'>";
                          echo "Please Fill The Delayed Release Tablets Monograph First";
                          
                     }else{
                      ?>
                      style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_dissolution/index_delayed_release/'.$query['a'].'/'.$request[0]['tr'];?>">Delayed Release Tablets</a></td>
                     <?php   
                     }
                     ?>
                <td 
                <?php 
                      if(empty($dissolution_delayed)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                     style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_dissolution/view_worksheet_delayed_release/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                     <?php   
                     }
                     ?>
              <td 
                <?php 
                      if(empty($dissolution_delayed)){
                    
                          echo"style='text-align:center;padding:4px;background-color:#eed6ff;border-bottom:solid 1px #bfbfbf;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete";
                     }?>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_dissolution/monograph_enteric_coated/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                <td 
                 <?php 
                      if(empty($monograph_dissolution_enteric_coated)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Enteric Coated Tablets";
                     }else{
                      ?>
                      style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_dissolution/index_enteric_coated/'.$query['a'].'/'.$request[0]['tr'];?>">Enteric Coated Tablets</a></td>
                     <?php   
                     }
                     ?>
                <td 
                <?php 
                      if(empty($dissolution_enteric_coated)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                      style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_dissolution/view_worksheet_enteric_coated/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                     <?php   
                     }
                     ?>
              <td 
                <?php 
                      if(empty($dissolution_enteric_coated)){
                    
                          echo"style='text-align:center;padding:4px;background-color:#eed6ff;border-bottom:solid 1px #bfbfbf;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete";
                     }?>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_dissolution/monograph_normal_hplc/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                <td  
                 <?php 
                      if(empty($monograph_dissolution_normal_hplc)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Normal Tablets";
                     }else{
                      ?>
                      style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_dissolution/index_normal/'.$query['a'].'/'.$request[0]['tr'];?>">Normal Tablets</a></td>
                     <?php   
                     }
                     ?>
                <td 
                <?php 
                      if(empty($dissolution_normal_hplc)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                      ?>
                       style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_dissolution/view_worksheet_normal/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                     <?php   
                     }
                     ?>
              <td 
                <?php 
                      if(empty($dissolution_normal_hplc)){
                    
                          echo"style='text-align:center;padding:4px;background-color:#eed6ff;border-bottom:solid 1px #bfbfbf;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete";
                     }?>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;padding:4px;"></a></td>
                <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_dissolution/monograph_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                <td 
                <?php 
                      if(empty($monograph_dissolution_two_component)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Two Component Tablets";
                     }else{
                      ?>
                      style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_dissolution/index_two_components/'.$query['a'].'/'.$request[0]['tr'];?>">Two Component Tablets</a></td>
                     <?php   
                     }
                     ?>
                <td 
                <?php 
                      if(empty($dissolution_two_component)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "Not Yet Done";
                     }else{
                         ?>
                      style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_dissolution/view_worksheet_two_component/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                      <?php
                      }
                     ?>
                <td 
                <?php 
                      if(empty($dissolution_two_component)){
                    
                          echo"style='text-align:center;padding:4px;background-color:#eed6ff;border-bottom:solid 1px #bfbfbf;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete";
                     }?>
                </td>
            </tr>
           <?php  
           }
           ?>
           <?php
            if($request[0]['water_method']==0 || $request[0]['water_method']=="" || $request[0]['water_method']=="NULL" ){
             
           }else{
          ?>
          <tr>
                <td style="text-align:center;padding:4px;background-color:#ffffff;"><b>Karl Fisher (Water Method)</b></td>
                <td style='text-align:left;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
           </tr>
           <tr>                
                <td style="text-align:center;padding:4px;"><b></b></a></td>
                <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_water/monograph/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                <td <?php 
                      if(empty($monograph_water_method)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Specify Components";
                     }else{
                      ?>
                      style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_water/index/'.$query['a'].'/'.$request[0]['tr'];?>">Specify Components</a>
                     <?php   
                     }
                     ?>
                <td 
                <?php 
                      if(empty($query_ten)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                         ?>
                        style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_water/view_worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a></td>
                      <?php
                      }
                     ?>
              <td 
                <?php 
                      if(empty($query_ten)){
                    
                          echo"style='text-align:center;padding:4px;background-color:#eed6ff;border-bottom:solid 1px #bfbfbf;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete";
                     }?>
                </td>
            </tr>
           <?php
           }
           ?>
           <?php
            if($request[0]['disintegration']==0 || $request[0]['disintegration']=="" || $request[0]['disintegration']=="NULL" ){
             
           }else{
          ?>
           <?php
           }
           ?>
           <?php
            if($request[0]['loss_drying']==0 || $request[0]['loss_drying']=="" || $request[0]['loss_drying']=="NULL" ){
             
           }else{
          ?>
          <tr>
                <td style="text-align:center;padding:4px;background-color:#ffffff;"><b>Loss on Drying</b></td>
                <td style='text-align:left;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
           </tr>
           <tr>
                <td style="text-align:center;padding:4px;"><b></b></a></td>
                <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_loss_drying/monograph/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                <td 
                <?php 
                      if(empty($monograph_loss_drying)){
                    
                          echo"style='text-align:left;padding:4px;'>";
                          echo "Specify Components";
                     }else{
                      ?>
                        style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_loss_drying/index/'.$query['a'].'/'.$request[0]['tr'];?>">Specify Components</a></td>
                     <?php   
                     }
                     ?>
                <td 
                <?php 
                      if(empty($query_twelve)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                         ?>
                      style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_loss_drying/view_worksheet/'.$query['a'].'/'.$request[0]['tr'];?>">View Worksheet</a></td>
                      <?php
                      }
                      ?>
                <td 
                <?php 
                      if(empty($query_twelve)){
                    
                          echo"style='text-align:center;padding:4px;background-color:#eed6ff;border-bottom:solid 1px #bfbfbf;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete";
                     }?>
                </td>
            </tr>
           <?php
           }
           ?>
           <?php
            if($request[0]['related_substances']==0 || $request[0]['related_substances']=="" || $request[0]['related_substances']=="NULL" ){
             
           }else{
          ?>
          <tr>
                <td style="text-align:center;padding:4px;background-color:#ffffff;"><b>Related Substances</b></td>
                <td style='text-align:left;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
                <td style='text-align:center;padding:4px;background-color:#ffffff;'></td>
           </tr>
           <tr>
                <td style="text-align:center;padding:4px;"><b></b></a></td>
                <td style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_related_substances/monograph/'.$query['a'].'/'.$request[0]['tr'];?>">Monograph</a></td>
                <td 
                <?php 
                      if(empty($monograph_related_substances)){
                    
                          echo"style='text-align:loss_drying;padding:4px;'>";
                          echo "Specify Components";
                     }else{
                      ?>
                      style="text-align:left;padding:4px;"><a href="<?php echo base_url().'test_related_substances/index/'.$query['a'].'/'.$request[0]['tr'];?>">Specify Components</a></td>
                     <?php   
                     }
                     ?>
                <td 
                 <?php 
                      if(empty($query_eleven)){
                    
                          echo"style='text-align:center;padding:4px;'>";
                          echo "View Worksheet";
                     }else{
                         ?>
                      style="text-align:center;padding:4px;"><a href="<?php echo base_url().'test_related_substances/view_worksheet_related_substances/'.$query['a'].'/'.$request[0]['tr'];?>">view worksheet</a></td>
                      <?php
                      }
                      ?>
              <td 
                <?php 
                      if(empty($query_eleven)){
                    
                          echo"style='text-align:center;padding:4px;background-color:#eed6ff;border-bottom:solid 1px #bfbfbf;'>";
                          echo "Not Yet Done";
                     }else{
                         echo"style='text-align:center;padding:4px;background-color:#ffeea0;border-bottom:solid 1px #bfbfbf;'>";
                         echo "Complete";
                     }?>
                </td>
            </tr> 
           <?php
           }
           ?>
            </tbody>           
          </table>
      </div>
    </div>
  </body>
</html>