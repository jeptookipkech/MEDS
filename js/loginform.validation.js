$(document).ready(function(){        
        $('#username').change('live',function(){
          if ($.trim(this.value)!=""){
      $('#username_1').show();
      $('#username_r').hide();
          }else{
      $('#username_1').hide();
      $('#username_r').show();
          }
        })
        $('#password').change('live',function(){
          if ($.trim(this.value)!=""){
      $('#password_1').show();
      $('#password_r').hide();
          }else{
      $('#password_1').hide();
      $('#password_r').show();
          }
        })
        $('#level').change('live',function(){
          if ($.trim(this.value)!=""){
      $('#level_1').show();
      $('#level_r').hide();
          }else{
      $('#level_1').hide();
      $('#level_r').show();
          }
        });
        $('#register').click(function(){         
      count =0;
      $('.field').each(function(){
         if ($.trim(this.value)=="")
         count ++;
      });
      if(count>0){
        alert(count+'  Fields Have Not yet been filled, All fields on this form are MANDATORY ')
         return false;
      }else{
        
      $.ajax({
          type:"post",
          url:"<?php echo base_url();?>verification",
          data:$('#login').serialize(),
          success:function(data){
        redirect_url = "<?php echo base_url();?>home",
        data='Success';
        window.location.href = redirect_url;
          },
          error:function(){
             //alert('an error occured'); 
          }
          
      })
      }
      })
    });