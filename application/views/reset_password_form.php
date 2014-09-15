<!DOCTYPE html">
<html>
<head>
	<title>MEDS System Password Reset</title>
	<link rel="icon" href="" />
	<link href="<?php echo base_url().'style/forms.css'?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url().'style/core.css'?>" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url().'js/jquery-1.9.1.js';?>"></script>
	<script src="<?php echo base_url().'js/jquery-ui.js';?>"></script>
	<script>
		$(document).ready(function(){        
		    $('#email').change('live',function(){
		      if ($.trim(this.value)!=""){
			$('#email_1').show();
			$('#email_r').hide();
		      }else{
			$('#email_1').hide();
			$('#email_r').show();
		      }
		    });
		    $('#reset').click(function(){         
			count =0;
			$('.field').each(function(){
			   if ($.trim(this.value)=="")
			   count ++;
			});
			if(count>0){
			  alert(count+'All fields on this form are MANDATORY ')
			   return false;
			}else{
			  
			$.ajax({
			    type:"post",
			    url:"<?php echo base_url();?>reset_password",
			    data:$('#reset_password_form').serialize(),
			    success:function(data){
				redirect_url = "<?php echo base_url();?>reset_password",
				data='Success';
				window.location.href = redirect_url;
			    },
			    error:function(){
			       //alert('an error occured'); 
			    }
			    
			})
			}
			})
		})
	</script>
</head>
<body>
	<div id="header"> 
		<div id="logo" style="color: #0000ff;text-align: center;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="70px" width="90px"/></br><p><b>MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</b></p></div>
	</div>
	<div id="login_form">
		<?php echo validation_errors(); ?>
		<?php echo form_open('email_send',array('id'=>'reset_password_form'));?>
   
			<table class="table_form" bgcolor="eeeeee" align="center" border="0" width="450px" height="100px" cellpadding="8px">
				<tr>
                                    <td colspan="3" height="20px" style="background-color:#ffffff;text-align: center;"><a>An email will be sent to you with your new Password.</a></td>
                                </tr>
				<tr>
                                    <td style="text-align: center;background-color:#eeeeee;border-right:"><img src="<?php echo base_url().'images/icons/email.png'?>" height="34px" width="34px"></td>
                                    <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-left: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;"><b>Email</b></td>
                                    <td style="background-color:#ffffff;border-right: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;">
                                    <input type="text" size="30" name="email" id="email" class="field"><span id="email_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="email_r" style="color:white;background-color:red;padding:4px;display:none">field required</span>
                                    </td>
				</tr>
				<tr>
                                    <td colspan="3" style="text-align:right;background-color:#ffffff;">
                                            <input type="submit" class="button " name="reset" id="reset" value="Reset">
                                    </td>
				</tr>
			</table>
		</form>
	</div>
	<div id="footer">
		<hr>
		<p style="text-align:center;">MEDS &#169; 2013<p>
	</div>
	
</body>
</html>