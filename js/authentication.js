   
    $(document).ready(function(){
            $( "#applicant_name" ).autocomplete({
                source: function(request, response) {
                    $.ajax({ url: "http://localhost/MEDS/test_request/suggestions",
                    data: { term: $("#applicant_name").val()},
                    dataType: "json",
                    type: "POST",
                    success: function(data){
                    $.each(data,function(i,jsondata){
                        $("#id").val(jsondata.id)
                        $("#applicant_name").val(jsondata.applicant_name)
                        $("#applicant_address").val(jsondata.applicant_address)
                        $("#applicant_reference_number").val(jsondata.applicant_ref_number)
			$("#authorizing_name").val(jsondata.authorizing_name)
                        
                    });
                    response(data);
                    }
                });
            },
            minLength: 2,
		
                Delay : 200
            });
	    
   
	
        $('#applicant_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#applicant_name_1').show();
             $('#applicant_name_r').hide();
          }else{
             $('#applicant_name_r').show();
            $('#applicant_name_1').hide();
          }
        })
        $( '#applicant_address' ).autocomplete()
             $('#applicant_address').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#applicant_address_1').show();
             $('#applicant_address_r').hide();
          }else{
             $('#applicant_address_r').show();
            $('#applicant_address_1').hide();
          }
        })
        $('#active_ingredients').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#active_ingredients_1').show();
            $('#active_ingredients_r').hide();
          }else{
            $('#active_ingredients_1').hide();
            $('#active_ingredients_r').show();
          }
        })
        $('#manufacturer_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#manufacturer_name_1').show();
            $('#manufacturer_name_r').hide();
          }else{
            $('#manufacturer_name_1').hide();
            $('#manufacturer_name_r').show();
          }
        })
        $('#manufacturer_address').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#manufacturer_address_1').show();
            $('#manufacturer_address_r').hide();
          }else{
            $('#manufacturer_address_1').hide();
            $('#manufacturer_address_r').show();
          }
        })
        $('#brand_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#brand_name_1').show();
            $('#brand_name_r').hide();
          }else{
            $('#brand_name_1').hide();
            $('#brand_name_r').show();
          }
        })
        $('#marketing_authorization_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#marketing_authorization_number_1').show();
            $('#marketing_authorization_number_r').hide();
          }else{
            $('#marketing_authorization_number_1').hide();
            $('#marketing_authorization_number_r').show();
          }
        })
        $('#batch_lot_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#batch_lot_number_1').show();
            $('#batch_lot_number_r').hide();
          }else{
            $('#batch_lot_number_1').hide();
            $('#batch_lot_number_r').show();
          }
        })
        $('#date_of_manufacture').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#date_of_manufacture_1').show();
            $('#date_of_manufacture_r').hide();
          }else{
            $('#date_of_manufacture_1').hide();
            $('#date_of_manufacture_r').show();
          }
        })
        $('#expiry_retest_date').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#expiry_retest_date_1').show();
            $('#expiry_retest_date_r').hide();
          }else{
            $('#expiry_retest_date_1').hide();
            $('#expiry_retest_date_r').show();
          }
        })
        $('#storage_conditions').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#storage_conditions_1').show();
            $('#storage_conditions_r').hide();
          }else{
            $('#storage_conditions_1').hide();
            $('#storage_conditions_r').show();
          }
        })
        $('#quantity_submitted').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#quantity_submitted_1').show();
            $('#quantity_submitted_r').hide();
          }else{
            $('#quantity_submitted_1').hide();
            $('#quantity_submitted_r').show();
          }
        })
        $('#applicant_reference_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#applicant_reference_number_1').show();
            $('#applicant_reference_number_r').hide();
          }else{
            $('#applicant_reference_number_1').hide();
            $('#applicant_reference_number_r').show();
          }
        })
        $('#sample_source').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#sample_source_1').show();
            $('#sample_source_r').hide();
          }else{
            $('#sample_source_1').hide();
            $('#sample_source_r').show();
          }
        })
        $('#authorizing_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#authorizing_name_1').show();
            $('#authorizing_name_r').hide();
          }else{
            $('#authorizing_name_1').hide();
            $('#authorizing_name_r').show();
          }
        })
        $('#designation').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#designation_1').show();
            $('#designation_r').hide();
          }else{
            $('#designation_1').hide();
            $('#designation_r').show();
          }
        });
        
        $('#newData').click(function(){
         $('.field').each(function(){
             $(this).val("");               
            });   
        });
  
        $('#submit').click(function(){         
            count =0;
            $('.field').each(function(){
             if ($.trim(this.value)=="")
               count ++;
            });
            if(count>0){
              alert(count+'Fields Not filled')
               return false;
            }else{
              
            $.ajax({
                type:"post",
                url:"<?php echo base_url();?>test_request/save",
                data:$('#test_request_form').serialize(),
                success:function(data){
                    data='Success';
                    alert(data);
                },
                error:function(){
                   alert('an error occured'); 
                }
                
            })
           
            }
           
        })
    });
    
