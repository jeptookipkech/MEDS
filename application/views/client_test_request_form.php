<script>
       
    $(document).ready(function(){
            $( "#capplicant_name" ).autocomplete({
                source: function(request, response) {
                    $.ajax({ url: "http://localhost/MEDS/test_request/suggestions",
                    data: { term: $("#capplicant_name").val()},
                    dataType: "json",
                    type: "POST",
                    success: function(data){
                    $.each(data,function(i,jsondata){
                        $("#id").val(jsondata.id)
                        $("#capplicant_name").val(jsondata.capplicant_name)
                        $("#capplicant_address").val(jsondata.capplicant_address)
                        $("#capplicant_reference_number").val(jsondata.capplicant_ref_number)
			                  $("#cauthorizing_name").val(jsondata.cauthorizing_name)
                        
                    });
                    response(data);
                    }
                });
            },
            minLength: 2,
		
                Delay : 200
            });
	    
   
	
        $('#capplicant_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#capplicant_name_1').show();
             $('#capplicant_name_r').hide();
          }else{
             $('#capplicant_name_r').show();
            $('#capplicant_name_1').hide();
          }
        })
        $( '#capplicant_address' ).autocomplete()
             $('#capplicant_address').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#capplicant_address_1').show();
             $('#capplicant_address_r').hide();
          }else{
             $('#capplicant_address_r').show();
            $('#capplicant_address_1').hide();
          }
        })
        $('#cactive_ingredients').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cactive_ingredients_1').show();
            $('#cactive_ingredients_r').hide();
          }else{
            $('#cactive_ingredients_1').hide();
            $('#cactive_ingredients_r').show();
          }
        })
        $('#clable_claim').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#clable_claim_1').show();
            $('#clable_claim_r').hide();
          }else{
            $('#clable_claim_1').hide();
            $('#clable_claim_r').show();
          }
        })
         $('#cstrength_concentration').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cstrength_concentration_1').show();
            $('#cstrength_concentration_r').hide();
          }else{
            $('#cstrength_concentration_1').hide();
            $('#cstrength_concentration_r').show();
          }
        })
        $('#cdosage_from').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cdosage_from_1').show();
            $('#cdesignation_r').hide();
          }else{
            $('#cdosage_from_1').hide();
            $('#cdosage_from_r').show();
          }
        })
        $('#cpack_size').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cpack_size_1').show();
            $('#cpack_size_r').hide();
          }else{
            $('#cpack_size_1').hide();
            $('#cpack_size_r').show();
          }
        })

        $('#cmanufacturer_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cmanufacturer_name_1').show();
            $('#cmanufacturer_name_r').hide();
          }else{
            $('#cmanufacturer_name_1').hide();
            $('#cmanufacturer_name_r').show();
          }
        })
        $('#cmanufacturer_address').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cmanufacturer_address_1').show();
            $('#cmanufacturer_address_r').hide();
          }else{
            $('#cmanufacturer_address_1').hide();
            $('#cmanufacturer_address_r').show();
          }
        })
        $('#cbrand_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cbrand_name_1').show();
            $('#cbrand_name_r').hide();
          }else{
            $('#cbrand_name_1').hide();
            $('#cbrand_name_r').show();
          }
        })
       
        $('#cbatch_lot_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cbatch_lot_number_1').show();
            $('#cbatch_lot_number_r').hide();
          }else{
            $('#cbatch_lot_number_1').hide();
            $('#cbatch_lot_number_r').show();
          }
        })
        
        $('#cexpiry_retest_date').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cexpiry_retest_date_1').show();
            $('#cexpiry_retest_date_r').hide();
          }else{
            $('#cexpiry_retest_date_1').hide();
            $('#cexpiry_retest_date_r').show();
          }
        })
         $('#cdate_of_manufacture').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cdate_of_manufacture_1').show();
            $('#cdate_of_manufacture_r').hide();
          }else{
            $('#cdate_of_manufacture_1').hide();
            $('#cdate_of_manufacture_r').show();
          }
        })
        
        $('#cquantity_submitted').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cquantity_submitted_1').show();
            $('#cquantity_submitted_r').hide();
          }else{
            $('#cquantity_submitted_1').hide();
            $('#cquantity_submitted_r').show();
          }
        })
        $('#csample_source').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#csample_source_1').show();
            $('#csample_source_r').hide();
          }else{
            $('#csample_source_1').hide();
            $('#csample_source_r').show();
          }
        })
       
        $('#cauthorizing_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cauthorizing_name_1').show();
            $('#cauthorizing_name_r').hide();
          }else{
            $('#cauthorizing_name_1').hide();
            $('#cauthorizing_name_r').show();
          }
        })
        $('#cdesignation').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cdesignation_1').show();
            $('#cdesignation_r').hide();
          }else{
            $('#cdesignation_1').hide();
            $('#cdesignation_r').show();
          }
        })
	      $('#clab_reg_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#clab_reg_number_1').show();
            $('#clab_reg_number_r').hide();
          }else{
            $('#clab_reg_number_1').hide();
            $('#clab_reg_number_r').show();
          }
        })
        $('#creference_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#creference_number_1').show();
            $('#creference_number_r').hide();
          }else{
            $('#creference_number_1').hide();
            $('#creference_number_r').show();
          }
        })
	      $('#cfindings_comment').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#cfindings_comment_1').show();
            $('#cfindings_comment_r').hide();
          }else{
            $('#cfindings_comment_1').hide();
            $('#cfindings_comment_r').show();
          }
        });
        
        $('#newDataC').click(function(){
         $('.fieldc').each(function(){
             $(this).val("");               
            });   
        });
  
        $('#submit_c').click(function(){         
            count =0;
            $('.fieldc').each(function(){
             if ($.trim(this.value)=="")
               count ++;
            });
            if(count>0){
              alert(count+' fields not filled')
               return false;
            }else{
              
            $.ajax({
                type:"post",
                url:"<?php echo base_url();?>client_request/save",
                data:$('#client_test_request_form').serialize(),
                success:function(data){
                    data='Success';
                    alert(data);
                },
                //error:function(){
                   //alert('an error occured'); 
                //}
                
            })
            }
        })
    });
    

</script>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="client">Client Analysis Test Request Form</h4>
</div>
  <?php echo validation_errors(); ?>
  <?php echo form_open('client_request/save',array('id'=>'client_test_request_form'));?>
  <table class="" bgcolor="#c4c4ff" border="0" cellpadding="8px" align="center">
  <input type="hidden" id="id" value="<?php echo"$user_type_id";?>" class="id" name="id"/>
  <input type="hidden" id="id" value="<?php echo"$user_id";?>" class="id" name="id"/>
	<input type="hidden" id="test_req" value="<?php echo"$test_request_id";?>"name="test_req"/>
 <div class="modal-body">
  <tr>
    <td colspan="8" style="padding:8px;text-align:center;">
      <table class="" width="100%"  cellpadding="8px" align="center" border="0"> 
        	<tr>
              <td rowspan="2" style="padding:4px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="80px" width="90px"/></td>
              <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>Document: Form</b></td>
              <td width="150px" height="25px" colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;color:#000000;"><b>REFERENCE NUMBER</b></td>
              <td colspan="3" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">
                <input type="text" id="creference_number" name="creference_number" class="fieldc"/>
                <span id="creference_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                <span id="creference_number_r" style="color:red; display:none">Fill this field</span>
              </td>
          </tr>
          <tr>
              <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>EFFECTIVE DATE: <?php echo date("d/m/Y")?></b></td>
              <td height="25px"colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>REVISION NUMBER</b></td>
              <td height="25px" colspan="3" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>PAGE 1 of 1</b></td>
          </tr>
          <tr>
              <td width="150px" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><b>Form Authorized By:</b></td>
              <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><b><?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?></b></td>
              <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>USER TYPE</b></td>
              <td colspan="3" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><?php echo("<b>".$user['logged_in']['role']);?></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
        <td colspan="8" style="text-align:right;padding:8px;border-bottom: solid 10px #c4c4ff;color:#0000fb;background-color:#ffffff;"><input class="btn" type="button" name="newDataC" id="newDataC" value="Refresh"/></td>
    </tr>
    <tr>
        <td height="25px" colspan="2" style="padding:4px;background-color:#ffffff;">Name of Applicant</td>
        <td height="25px" colspan="6" style="padding:4px;background-color:#ffffff;text-align:left;"><input type="text" id="capplicant_name" class="fieldc" size="80" name="capplicant_name"/><span id="capplicant_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png'?>" height="10px" width="10px"></span><span id="capplicant_name_r" style="color:red; display:none">Fill in this field</span></td>
    </tr>
    <tr>
        <td height="25px" colspan="2" style="padding:4px;background-color:#ffffff;">Address of Applicant</td>
        <td height="25px" colspan="6" style="padding:4px;background-color:#ffffff;text-align:left;"><input type="text" class="fieldc" size="80"  id="capplicant_address" name="capplicant_address" value=""/><span id="capplicant_address_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="capplicant_address_r" style="color:red; display:none">Fill in this field</span></td>
    </tr>
    <tr>
        <td colspan="8" style="padding:4px;border-bottom:solid 1px #c4c4ff;background-color:#ffffff;text-align:left;"><b>Sample Description</b></td>
    </tr>
    <tr>
        <td height="25px" style="padding:8px;border-bottom:solid 10px #c4c4ff;background-color:#ffffff;text-align: center;text-align:left;" colspan="8"><b>(*Provide International Non-Proprietary Name of Active Ingredient'(s) if available)</b></td>
    </tr>
    <tr>
        <td colspan="8" style="padding:8px;text-align:center;border-bottom:solid 1px #c4c4ff;">
          <table  class="inner_table" width="100%"  cellpadding="8px" align="center" border="0">
              <tr>
                  <td height="25px" width="200px" style="padding:4px;text-align:left;">Active ingredient(s)</td>
                  <td height="25px" colspan="4" style="padding:4px;text-align:left;"><input type="text"  class="fieldc" size="80" name="cactive_ingredients" id="cactive_ingredients"><span id="cactive_ingredients_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cactive_ingredients_r" style="color:red; display:none">Fill this</span></td>
              </tr>
              <tr>
                  <td height="25px" width="200px" style="padding:4px;text-align: left;">Label Claim</td>
                  <td height="25px" colspan="4" style="padding:4px;text-align:left;"><input type="text" class="fieldc" size="80" name="clable_claim" id="clable_claim"><span id="clable_claim_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="clable_claim_r" style="color:red; display:none">Fill this</span></td>
              </tr>
               <tr>
                  <td height="25px" style="padding:4px;text-align: left;">Dosage From</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="fieldc" name="cdosage_from"  id="cdosage_from"/><span id="cdosage_from_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cdosage_from_r" style="color:red; display:none">Fill this</span></td>
                  <td style="padding:4px;"></td>
                  <td height="25px" style="padding:4px;text-align: left;">Strength or Concentration</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="fieldc" name="cstrength_concentration"  id="cstrength_concentration"/><span id="cstrength_concentration_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cstrength_concentration_r" style="color:red; display:none">Fill this</span></td>
              </tr>
              <tr>    
                  <td height="25px" style="padding:4px;text-align: left;">Pack Size</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="fieldc" id="cpack_size" name="cpack_size"/><span id="cpack_size_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cpack_size_r" style="color:red; display:none">Fill this</span></td>
                  <td style="padding:4px;"></td>
                  <td height="25px" style="padding:4px;text-align: left;">Name of Manufacturer</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="fieldc" name="cmanufacturer_name"  id="cmanufacturer_name"/><span id="manufacturer_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="manufacturer_name_r" style="color:red; display:none">Fill this</span></td>
              </tr>
              <tr>    
                  <td height="25px" style="padding:4px;text-align: left;">Address of Manufacturer</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="fieldc" id="cmanufacturer_address" name="cmanufacturer_address"/><span id="cmanufacturer_address_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cmanufacturer_address_r" style="color:red; display:none">Fill this</span></td>
                  <td height="25px" style="padding:4px;"></td>
                  <td height="25px" style="padding:4px;text-align: left;">Brand Name</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="fieldc" name="cbrand_name" id="cbrand_name"><span id="cbrand_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cbrand_name_r" style="color:red; display:none">Fill this</span></td>
              </tr>
              <tr>   
                  <td height="25px" style="padding:4px;text-align: left;">Marketing Authorization Number</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text"  id="cmarketing_authorization_number" name="cmarketing_authorization_number"></td>
                  <td style="padding:4px;"></td>
                  <td height="25px" style="padding:4px;text-align: left;">Batch/Lot Number</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="fieldc" name="cbatch_lot_number" id="cbatch_lot_number"><span id="cbatch_lot_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cbatch_lot_number_r" style="color:red; display:none">Fill this</span></td>
              </tr>
              <tr>
                  <td height="25px" style="padding:4px;text-align: left;">Date of Manufacture</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="date"  name="cdate_of_manufacture" id="cdate_of_manufacture"><span id="cdate_of_manufacture_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cdate_of_manufacture_r" style="color:red; display:none">Fill this</span></td>
                  <td style="padding:4px;"></td>
                  <td style="padding:4px;text-align: left;">Expiry/Retest Date</td>
                  <td style="padding:4px;text-align: left;"><input type="date" class="fieldc" id="cexpiry_retest_date" name="cexpiry_retest_date"><span id="cexpiry_retest_date_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cexpiry_retest_date_r" style="color:red; display:none">Fill this</span></td>
              <tr>
              </tr>
                  <td style="padding:4px;text-align:left;">Quantity Submitted</td>
                  <td colspan="2" style="padding:4px;text-align:left;"><input type="text" class="fieldc" id="cquantity_submitted" name="cquantity_submitted"><span id="cquantity_submitted_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="quantity_submitted_r" style="color:red; display:none">Fill this</span>
                    <select name="quantity_type">
                      <option>-------</option>
                      <option value="Tablets">Tablets</option>
                      <option value="Capsules">Capsules</option>
                      <option value="Syrup">Syrup</option>
                      <option value="Injections">Injections</option>
                      <option value="Suspensions">Suspensions</option>
                      <option value="Bottles">Bottles</option>
                    </select>
                  </td>
                  <td style="padding:4px;text-align:left;">Storage Conditions</td>
                  <td style="padding:4px;text-align:left;"><input type="text" id="cstorage_conditions" name="cstorage_conditions"></td>
              </tr>
                  <td style="padding:4px;text-align: left;">Applicant's Reference Number</td>
                  <td colspan="4" style="padding:4px;text-align: left;"><input type="text" id="capplicant_reference_number" name="capplicant_reference_number"></td>
              </tr>
              <tr>
                  <td height="25px" style="padding:4px;text-align:left;">Sample Source</td>
                  <td height="25px" colspan="4" style="padding:4px;text-align:left;"><textarea rows="1" cols="80" class="fieldc" id="csample_source" name="csample_source"></textarea><span id="csample_source_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="csample_source_r" style="color:red; display:none">Fill this</span></td>
              </tr>
          </table>
        </td>
    </tr>
      <tr>
        <td height="25px" colspan="8" style="padding:8px;background-color:#ffffff;border-bottom:solid 10px #c4c4ff;"><b>Reason for Requesting Analysis</b> (Tick as appropriate)</td>
      </tr>
      <tr>
          <td colspan="8" style="padding:4px;background-color:#ffffff;"><input type='radio' checked="checked" name='creason' id='compliance_testing' value="Compliance Testing">Compliance Testing</td>
      </tr>
      <tr>
          <td colspan="8" style="padding:4px;background-color:#ffffff;"><input type='radio' name='creason' id='investigative_testing' value="Investigative Testing">Investigative Testing</td>
      </tr>
	    <tr>
         <td height="25px" colspan="8" style="padding:4px;background-color:#ffffff;">Other(Please Specify)</td>
      </tr>
      <tr>
        <td height="25px" colspan="8" style="padding:4px;background-color:#ffffff;"><textarea rows="3" cols="130" name='other_reason' id='other_reason'></textarea></td>
      </tr>
      <tr>
        <td height="25px" colspan="8" style="padding:8px;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;"><b>Test(s) Required:</b> (Tick as appropriate)</td>
      </tr>
      <tr>
        <td colspan="8" style="padding:2px;background-color:#ffffff;">
            <table class ="inner_table" width="100%" cellpadding="8px" height="150px" align="center" border="0">
                <tr>
                    <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>No</b></td>
                    <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>Test</b></td>
                    <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>Requirement</b></td>
                    <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>No</b></td>
                    <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>Test</b></td>
                    <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>Requirement</b></td>
                </tr>
                <tr>
                  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">i.</td>
                  <td>Identification</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='cidentifications' id='cidentification' value='1'></td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">vii.</td>
                  <td>Dissolution</td>
                  <td style="border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='cdissolution' id='cdissolution' value='7'></td>
                </tr>
                <tr>
                  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">ii.</td>
                  <td>Friability</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='cfriability' id='cfriability' value='2'></td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">viii.</td>
                  <td>Assay</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='cassay' id='cassay' value='8'></td>
                </tr>
                <tr>
                  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">iii.</td>
                  <td>Disintegration</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='cdisintergration' id='cdisintergration' value='3'></td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">ix.</td>
                  <td>Content Uniformity</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='ccontent_uniformity' id='ccontent_uniformity' value='9'></td>
                </tr>
                <tr>
                  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">iv.</td>
                  <td>PH(Acidity/Alkalinity)</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='cph_alkalinity_acidity' id='cph_alkalinity_acidity' value='4'></td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">x.</td>
                  <td>Full Monograph</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='cfull_monograph' id='cfull_monograph' value='10'></td>
                </tr>
                 <tr>
                  <td style="padding:4px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">v.</td>
                  <td>Related Substances</td>
                  <td style="padding:4px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='crelated_substances' id='crelated_substances' value='5'></td>
                  <td style="padding:4px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">xi.</td>
                  <td>Uniformity of Dosage</td>
                  <td style="padding:4px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='cuniformity_of_dosage' id='cuniformity_of_dosage' value='11'></td>
                </tr>
                <tr>
                  <td style="padding:4px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">vi</td>
                  <td>Weight Variation/Mass Uniformity</td>
                  <td style="padding:4px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='cweight_variation_mass_uniformity' id='cweight_variation_mass_uniformity' value='6'></td>
                  <td style="padding:4px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">xii.</td>
                  <td>Karl Fisher</td>
                  <td style="padding:4px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='ckarl_fisher' id='ckarl_fisher' value='12'></td>
                </tr>
                <tr>
                  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;"></td>
                  <td></td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"></td>
                  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">xiii.</td>
                  <td>Microbiology</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='cmicrobiology' id='cmicrobiology' value='13'></td>
                </tr>
            </table>
        </td>
      </tr>
		  <tr>
        <td height="25px" colspan="8"  style="padding:4px;background-color:#ffffff;">Other(Please specify)</td>
      </tr>
    	<tr>
        <td colspan="8" style="padding:4px;background-color:#ffffff;"><textarea rows="3" cols="130" name="other_test" id="other_test" ></textarea></td>
    	</tr>
      <tr>
        <td height="25px" colspan="8" style="padding:4px;background-color:#ffffff;border-bottom:solid 10px #c4c4ff;"><b>Specifications to be used for testing:</b>(Tick as appropriate)</td>
      </tr>
      <tr>
       <td colspan="8" style="padding:8px;text-align:center;">
        <table class ="inner_table" width="100%"  cellpadding="8px" align="center" border="0">
          <tr>
            <td colspan="8" style="padding:4px;text-align:left;background-color:#ffffff;"><input type='radio' checked="checked" name='cspecification' id='usp' value='USP'>USP</td>
          </tr>
          <tr>
            <td colspan="8" style="padding:4px;text-align:left;background-color:#ffffff;"><input type='radio' name='cspecification' id='bp' value='BP'>BP</td>
          </tr>
          <tr>
            <td colspan="8" style="padding:4px;text-align:left;background-color:#ffffff;"><input type='radio' name='cspecification' id='european_pharmacopeia' value='European Pharmacopoeia'>European Pharmacopoeia</td>
          </tr>
          <tr>
            <td colspan="8" style="padding:4px;text-align:left;background-color:#ffffff;"><input type='radio' name='cspecification' id='international_pharmacopeia' value='International Pharmacopoeia'>International Pharmacopoeia</td>
          </tr>
          <tr>
              <td colspan="8" style="padding:4px;text-align:left;background-color:#ffffff;"><input type='radio' name='cspecification' id='manufacturers_specs' value='Manufacturer's Specifications'>Manufacturer's Specifications</td>
          </tr>
        	<tr>
            <td height="25px" colspan="8" style="text-align:left;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;">Other(Please specify)</td>
          </tr>
        	<tr>
        	    <td colspan="8" style="text-align:center;padding:4px;background-color:#ffffff;"><textarea rows="3" cols="130" id="other_specification" name="other_specification"></textarea></td>
        	</tr>
        </table>
        </td>
      </tr>
      </div>  
      <tr>
        <td height="25px" colspan="8" style="padding:2px;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;"><h6><b><p>Note:</b> If manufacturer's or 'other', please provide methods of analysis and specifications</p></h6></td>
      </tr>
      <tr>
        <td height="25px" colspan="8" style="padding:4px;background-color:#ffffff;border-bottom:solid 10px #c4c4ff;"><b>Details of person authorizing request for analysis</b></td>
      </tr>
      <tr>
          <td height="25px" style="padding:4px;background-color:#ffffff;">Name</td>
          <td height="25px" style="padding:4px;background-color:#ffffff;"><input type="text" class="fieldc" id="cauthorizing_name" name="cauthorizing_name"/><span id="cauthorizing_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cauthorizing_name_r" style="color:red; display:none">Fill this</span></td>
          <td height="25px" style="padding:4px;text-align:right;background-color:#ffffff;">Designation:</td>
          <td height="25px" colspan="5" style="padding:4px;background-color:#ffffff;"><input type="text" class="fieldc" id="cdesignation" name="cdesignation"/><span id="cdesignation_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cdesignation_r" style="color:red; display:none">Fill this</span></td>
      </tr>
      <tr>
          <td height="25px" width="120px" style="padding:4px;text-align:left;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;">Lab Registration No</td>
          <td height="25px" colspan="7" style="padding:4px;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;"><input type="text" class="fieldc" id="clab_reg_number" name="clab_reg_number"/><span id="clab_reg_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="clab_reg_number_r" style="color:red; display:none">Fill this</span></td>
    	    <input type="hidden" id="creceived_by" name="creceived_by" value="<?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?>"/>
    	</tr>
    	<tr>
        <td height="25px" colspan="8" width="120px" style="padding:4px;text-align:left;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;"><b>Comments</b> <span id="cfindings_comment_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="cfindings_comment_r" style="color:red; display:none">Fill this</span></td>
      </tr>
      <tr>
        <td height="25px" colspan="8" style="padding:4px;background-color:#ffffff;"><textarea rows="3" cols="130" type="text" class="fieldc" id="cfindings_comment" name="cfindings_comment"/></textarea></td>	
      </tr>
      <div class="modal-footer">
        <tr>
          <td height="25px" style="padding:4px;background-color:#ffffff;border-top: solid 1px #bfbfbf;text-align: center;" colspan="8" ><input type="submit" name="submit_c" id="submit_c" value="Submit"></td>
        </tr>
      </div>
    </table>
  </form>
  </div>
  </div> 