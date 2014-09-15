<script>
       function calcref(){
      var total = document.getElementById('ref_min_temp').value - document.getElementById('ref_standard_min_temp').value;
      document.getElementById('ref_min_temp_corrected').value = total;
       }
       function calc2ref(){
      var total = document.getElementById('ref_max_temp').value - document.getElementById('ref_standard_max_temp').value;
      document.getElementById('ref_max_temp_corrected').value = total;
       }
 
  $(document).ready(function(){
  
        
  $('#ref_min_temp').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#ref_min_temp_g').show();
            $('#ref_min_temp_r').hide();
          }else{
            $('#ref_min_temp_g').hide();
            $('#ref_min_temp_r').show();
          }
        })
        
  
  $('#ref_max_temp').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#ref_max_temp_g').show();
            $('#ref_max_temp_r').hide();
          }else{
            $('#ref_max_temp_g').hide();
            $('#ref_max_temp_r').show();
          }
        })
  $('#ref_standard_min_temp').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#ref_standard_min_temp_g').show();
            $('#ref_standard_min_temp_r').hide();
          }else{
            $('#ref_standard_min_temp_g').hide();
            $('#ref_standard_min_temp_r').show();
          }
        })
        
  
  $('#ref_standard_max_temp').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#ref_standard_max_temp_g').show();
            $('#ref_standard_max_temp_r').hide();
          }else{
            $('#ref_standard_max_temp_g').hide();
            $('#ref_standard_max_temp_r').show();
          }
        })
  $('#ref_equipment_used').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#ref_equipment_used_g').show();
            $('#ref_equipment_used_r').hide();
          }else{
            $('#ref_equipment_used_g').hide();
            $('#ref_equipment_used_r').show();
          }
        })
  $('#ht_date').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#ht_date_g').show();
            $('#ht_date_r').hide();
          }else{
            $('#ht_date_g').hide();
            $('#ht_date_r').show();
          }
        });
  $('#save_humidtempref').click(function(){         
            count =0;
            $('.fieldref').each(function(){
               if ($.trim(this.value)=="")
               count ++;
            });
            if(count >0){
              alert( count+'  field(s) are not filled.')
               return false;
            }else{
              
            $.ajax({
                type:"post",
                url:"<?php echo base_url();?>temperature_humidity/submit",
                data:$('#refrigerator_form').serialize(),
                success:function(data){
                redirect_url = "<?temperature_humidity_list/records/'.$id_temp"
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
<?php
   $user=$this->session->userdata;
   $test_request_id=$user['logged_in']['test_request_id'];
   $user_type_id=$user['logged_in']['user_type'];
   $user_id=$user['logged_in']['id'];
   $department_id=$user['logged_in']['department_id'];
   $acc_status=$user['logged_in']['acc_status'];
   $id_temp=5;
   $var_min_temp=-1;
   $var_max_temp=5;
   //var_dump($user);
  ?>
<?php echo validation_errors();?>
<?php echo form_open('temperature_humidity/submit',array('id'=>'refrigerator_form'));?>
  
  <table  width="950px" class="table_form" bgcolor="#c4c4ff" border="0" cellpadding="4px" align="center" >
     <input type="hidden" name="ht_location" value="5">
     <input type="hidden" name ="user" value ="<?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?>">
                <tr>
      <td colspan="6"  style="text-align:right;background-color:#fdfdfd;padding:8px;"><a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"><img src="<?php echo base_url().'images/icons/back.png';?>" height="20px" width="20px"><b>Back</b></a></td>
    </tr>
    <tr>
      <td colspan = "6" align ="center" style="border-bottom: solid 10px #c4c4ff;color: #0000fb;background-color: #e8e8ff;"> 
        <h4>Humidity and Temperature</h4>
      </td>
    </tr>
    <tr>
      <td align="center" colspan="6" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
      <a href="javascript:slide('freezer');" class="sub_menu sub_menu_link first_link"><b>Freezer</b></a>
      <a href="javascript:slide('sample_store');" class="sub_menu sub_menu_link first_link"><b>Sample Stores</b></a>
      <a href="javascript:slide('laboratory_area');" class="sub_menu sub_menu_link first_link"><b>Laboratory Working Area</b></a>
      <a href="javascript:slide('instrument_room');" class="sub_menu sub_menu_link first_link"><b>Instrument Room</b></a>
      <a href="javascript:slide('refrigerator_form');" class="current sub_menu sub_menu_link first_link"><b>Refrigerator</b></a>
            </td>
    </tr>
    <tr>
      <td style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Date</td>
      <td colspan ="2"style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
      <input type ="date" name ="ht_date" id ="ht_date" class ="fieldref">
      <span id="ht_date_g" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
      <span id="ht_date_r" style="color:white;background-color:red;padding:4px;display:none">field required</span>
      </td>
      <td style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Equipment Used</td>
      <td colspan ="2" style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
          <input type="text" id="ref_equipment_used" name ="ref_equipment_used" class ="fieldref" >
          <span id="ref_equipment_used_g" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
          <span id="ref_equipment_used_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>
    </tr>
    <tr>
      <td colspan ="6" align ="center" style="padding:12px;text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 1px #f0f0ff;color: #0000fb;"><b>Temperature</b></td>
    </tr>

    <tr>
        <td colspan="8" style="padding:8px;border-bottom:solid 1px #c4c4ff;">
          <table border="0" width="80%" class="table_form" cellpadding="8px" align="center">            
            <tr>
            <td colspan ="6" align ="center" style="padding:8px;text-align:center;padding-right:40px;border-bottom: solid 1px #f0f0ff;color:#0000fb;">
              Standard Temperature Limit: 2 to 8C
            </td>
            </tr>                        
          </table>
        </td>
      </tr>
    <tr>      
      <td style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Minimum Temperature</td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
        <input type "text" name ="ref_min_temp"  id ="ref_min_temp" class ="fieldref" >
        <span id="ref_min_temp_g" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
        <span id="ref_min_temp_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>

      <td style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Correction Factor</td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
        <input type="text" id="ref_standard_min_temp" onChange="calcref()" name ="ref_standard_min_temp" class ="fieldref">
            <span id="ref_standard_min_temp_g" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
            <span id="ref_standard_min_temp_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>

      <td style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Minimum Temperature Corrected</td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
        <input type ="text" name ="ref_min_temp_corrected" id ="ref_min_temp_corrected" >
        </td>
    </tr>
    <tr>
      <td style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Maximum Temperature  </td>     
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
        <input type ="text" name ="ref_max_temp" id ="ref_max_temp" class ="fieldref" > 
        <span id="ref_max_temp_g" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
        <span id="ref_max_temp_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>

      <td style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Correction Factor</td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
        <input type="text" id="ref_standard_max_temp" name ="ref_standard_max_temp" onChange="calc2ref()" class ="fieldref">
            <span id="ref_standard_max_temp_g" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
            <span id="ref_standard_max_temp_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>
      
  
      <td style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Maximum Temperature Corrected</td> 
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
        <input type ="text" name ="ref_max_temp_corrected" id ="ref_max_temp_corrected" >
        </td>
    </tr>
    
    <tr>
      <td colspan="6" style="padding:8px;text-align:center;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
        <input type = "submit" class="btn" name ="save_humidtemp" id ="save_humidtempref" value ="Submit">
      </td>
  
    </tr>
  
  </table>
  </form>