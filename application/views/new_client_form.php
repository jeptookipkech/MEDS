<script>
    $(document).ready(function(){
    
        $('#capplicant_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#capplicant_name_1').show();
            $('#capplicant_name_r').hide();
          }else{
            $('#capplicant_name_1').hide();
            $('#capplicant_name_r').show();
          }
        })
    $('#capplicant_address').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#capplicant_address_1').show();
            $('#capplicant_address_r').hide();
          }else{
            $('#capplicant_address_1').hide();
            $('#capplicant_address_r').show();
          }
        })
        $('#ctelephone').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#ctelephone_1').show();
            $('#ctelephone_r').hide();
          }else{
            $('#ctelephone_1').hide();
            $('#ctelephone_r').show();
          }
        })
    $('#cemail').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cemail_1').show();
            $('#cemail_r').hide();
          }else{
            $('#cemail_1').hide();
            $('#cemail_r').show();
          }
        })
    $('#clocation').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#clocation_1').show();
            $('#clocation_r').hide();
          }else{
            $('#clocation_1').hide();
            $('#clocation_r').show();
          }
        });
    $('#submitc').click(function(){         
            count =0;
            $('.fieldclient').each(function(){
               if ($.trim(this.value)=="")
               count ++;
            });
            if(count >0){
              alert( count+' All field as on this form are MANDATORY ')
               return false;
            }else{
              
            $.ajax({
                type:"post",
                url:"<?php echo base_url();?>add_client/Save",
                data:$('#new_client_form').serialize(),
                success:function(data){
            redirect_url = "<?php echo base_url();?>client_list/Get/"
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
<div id="analysis_request">
        <?php echo validation_errors(); ?>
        <?php echo form_open('add_client/Save', array('id'=>'new_client_form'));?>
       
        <table bgcolor="#c4c4ff" align="center" width="950px" border="0" cellpadding="4px">
            <tr>
                <td colspan="4" align="right" style="padding:8px;border-bottom: solid 1px #bfbfbf;background-color:#ffffff;"><a href="<?php echo base_url().'client_list/Get'; ?>"><img src="<?php echo base_url().'images/icons/back.png';?>" height="20px" width="20px">Back</a></td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="padding:8px;border-bottom: solid 1px #bfbfbf;color:#0000ff;background-color:#e8e8ff;">
                    <b><h4>New Client Form</h4></b>
                </td>
            </tr>
            <tr>
                <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf; border-right: dotted 1px #bfbfbf;"><b>Applicant Name</b></td>
                <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
                    <input type="text" name="applicant_name" class "fieldclient" id ="capplicant_name"></input>
                <span id="capplicant_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                <span id="capplicant_name_r" style="color:white;background-color:red;padding:4px;display:none">Field Required</span></td>

                <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf; border-right: dotted 1px #bfbfbf;"><b>Applicant Address</b></td>
                <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
                    <input type="text" name="applicant_address" class "fieldclient" id ="capplicant_address"></input>
                <span id="capplicant_address_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                <span id="capplicant_address_r" style="color:white;background-color:red;padding:4px;display:none">Field Required</span></td>
            </tr>
             <tr>
                <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf; border-right: dotted 1px #bfbfbf;"><b>Telephone</b></td>
                <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
                    <input type="text" name="telephone" class "fieldclient" id ="ctelephone"></input>
                <span id="ctelephone_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                <span id="ctelephone_r" style="color:white;background-color:red;padding:4px;display:none">Field Required</span>
            </td>
                <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf; border-right: dotted 1px #bfbfbf;"><b>Email</b></td>
                <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
                    <input type="text" name="email" class "fieldclient" id ="cemail"></input>
                <span id="cemail_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                <span id="cemail_r" style="color:white;background-color:red;padding:4px;display:none">Field Required</span></td>
            </tr>
            <tr>
                <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf; border-right: dotted 1px #bfbfbf;"><b>Location</b></td>
                <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
                    <input type="text" name="location" class "fieldclient" id ="clocation"></input>
                <span id="clocation_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                <span id="clocation_r" style="color:white;background-color:red;padding:4px;display:none">Field Required</span></td>

                <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf; border-right: dotted 1px #bfbfbf;"><b>Status</b></td>
                <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="radio" name="status" value="0">In-active<input type="radio" name="status" value="1"/>Active</td>
            </tr>
            <tr>
                <td  style="background-color:#ffffff;border-top: dotted 1px #bfbfbf;text-align: center;" colspan="4" ><input type="submit" name="submit" value="Submit" id ="submitc"></td>
            </tr>
        </table>
        </form>
</div>