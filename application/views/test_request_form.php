<script>
       
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
       
        $('#batch_lot_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#batch_lot_number_1').show();
            $('#batch_lot_number_r').hide();
          }else{
            $('#batch_lot_number_1').hide();
            $('#batch_lot_number_r').show();
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
        
        $('#quantity_submitted').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#quantity_submitted_1').show();
            $('#quantity_submitted_r').hide();
          }else{
            $('#quantity_submitted_1').hide();
            $('#quantity_submitted_r').show();
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
        })
	$('#lab_reg_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#lab_reg_number_1').show();
            $('#lab_reg_number_r').hide();
          }else{
            $('#lab_reg_number_1').hide();
            $('#lab_reg_number_r').show();
          }
        })
  $('#reference_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#reference_number_1').show();
            $('#reference_number_r').hide();
          }else{
            $('#reference_number_1').hide();
            $('#reference_number_r').show();
          }
        })
	$('#findings_comment').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#findings_comment_1').show();
            $('#findings_comment_r').hide();
          }else{
            $('#findings_comment_1').hide();
            $('#findings_comment_r').show();
          }
        });
        
        $('#refresh').click(function(){
         $('.field').each(function(){
             $(this).val("");               
            });   
        });
  
        $('#submit_m').click(function(){         
            count =0;
            $('.field').each(function(){
             if ($.trim(this.value)=="")
               count ++;
            });
            if(count>0){
              alert(count+' fields not filled')
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
  <h4 class="modal-title" id="meds">MEDS Analysis Test Request Form</h4>
</div>
<?php echo validation_errors(); ?>
<?php echo form_open('test_request/save',array('id'=>'test_request_form'));?>
<table bgcolor="#c4c4ff" width="100%"  border="0" cellpadding="8px" align="center">
  <input type="hidden" id="id" value="<?php echo"$user_type_id";?>" class="id" name="id"/>
  <input type="hidden" id="id" value="<?php echo"$user_id";?>" class="id" name="user_id"/>
	<input type="hidden" id="test_req" value="<?php echo"$test_request_id";?>"name="test_req"/>
	<tr>
    <td colspan="8" style="padding:8px;text-align:center;">
      <table class="" width="100%"  cellpadding="8px" align="center" border="0"> 
          <tr>
              <td rowspan="2" style="padding:4px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="80px" width="90px"/></td>
              <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>Document: Form</b></td>
              <td width="150px" height="25px" colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;color:#000000;"><b>REFERENCE NUMBER</b></td>
              <td colspan="3" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">
                <input type="text" id="reference_number" name="reference_number" class="fieldc"/>
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
	
<div class="modal-body">
<tr>
        <td colspan="8" style="text-align:right;padding:8px;border-bottom: solid 10px #c4c4ff;color:#0000fb;background-color:#ffffff;"><input class="btn" type="button" name="newDataC" id="newDataC" value="Refresh"/></td>
    </tr>
    <tr>
        <td height="25px" colspan="2" style="padding:4px;background-color:#ffffff;">Name of Applicant</td>
        <td height="25px" colspan="6" style="padding:4px;background-color:#ffffff;text-align:left;"><input type="text" id="applicant_name" class="field" size="80" name="applicant_name"/><span id="applicant_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png'?>" height="10px" width="10px"></span><span id="applicant_name_r" style="color:red; display:none">Fill in this field</span></td>
    </tr>
    <tr>
        <td height="25px" colspan="2" style="padding:4px;background-color:#ffffff;">Address of Applicant</td>
        <td height="25px" colspan="6" style="padding:4px;background-color:#ffffff;text-align:left;"><input type="text" class="field" size="80"  id="applicant_address" name="applicant_address" value=""/><span id="applicant_address_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="applicant_address_r" style="color:red; display:none">Fill in this field</span></td>
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
                  <td height="25px" colspan="4" style="padding:4px;text-align:left;"><input type="text"  class="field" size="80" name="active_ingredients" id="active_ingredients"><span id="active_ingredients_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="active_ingredients_r" style="color:red; display:none">Fill this</span></td>
              </tr>
              <tr>
                  <td height="25px" width="200px" style="padding:4px;text-align: left;">Label Claim</td>
                  <td height="25px" colspan="4" style="padding:4px;text-align:left;"><input type="text" class="field" size="80" name="lable_claim" id="lable_claim"><span id="lable_claim_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="lable_claim_r" style="color:red; display:none">Fill this</span></td>
              </tr>
               <tr>
                  <td height="25px" style="padding:4px;text-align: left;">Dosage From</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="field" name="dosage_from"  id="dosage_from"/><span id="dosage_from_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="dosage_from_r" style="color:red; display:none">Fill this</span></td>
                  <td style="padding:4px;"></td>
                  <td height="25px" style="padding:4px;text-align: left;">Strength or Concentration</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="field" name="strength_concentration"  id="strength_concentration"/><span id="strength_concentration_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="strength_concentration_r" style="color:red; display:none">Fill this</span></td>
              </tr>
              <tr>    
                  <td height="25px" style="padding:4px;text-align: left;">Pack Size</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="field" id="pack_size" name="pack_size"/><span id="pack_size_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="pack_size_r" style="color:red; display:none">Fill this</span></td>
                  <td style="padding:4px;"></td>
                  <td height="25px" style="padding:4px;text-align: left;">Name of Manufacturer</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="field" name="manufacturer_name"  id="manufacturer_name"/><span id="manufacturer_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="manufacturer_name_r" style="color:red; display:none">Fill this</span></td>
              </tr>
              <tr>    
                  <td height="25px" style="padding:4px;text-align: left;">Address of Manufacturer</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="field" id="manufacturer_address" name="manufacturer_address"/><span id="manufacturer_address_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="manufacturer_address_r" style="color:red; display:none">Fill this</span></td>
                  <td height="25px" style="padding:4px;"></td>
                  <td height="25px" style="padding:4px;text-align: left;">Brand Name</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="field" name="brand_name" id="brand_name"><span id="cbrand_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="brand_name_r" style="color:red; display:none">Fill this</span></td>
              </tr>
              <tr>   
                  <td height="25px" style="padding:4px;text-align: left;">Marketing Authorization Number</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text"  id="marketing_authorization_number" name="marketing_authorization_number"></td>
                  <td style="padding:4px;"></td>
                  <td height="25px" style="padding:4px;text-align: left;">Batch/Lot Number</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="field" name="batch_lot_number" id="batch_lot_number"><span id="batch_lot_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="batch_lot_number_r" style="color:red; display:none">Fill this</span></td>
              </tr>
              <tr>
                  <td height="25px" style="padding:4px;text-align: left;">Date of Manufacture</td>
                  <td height="25px" style="padding:4px;text-align: left;"><input type="text" class="datepicker" name="date_of_manufacture" id="datepicker"><span id="date_of_manufacture_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="date_of_manufacture_r" style="color:red; display:none">Fill this</span></td>
                  <td style="padding:4px;"></td>
                  <td style="padding:4px;text-align: left;">Expiry/Retest Date</td>
                  <td style="padding:4px;text-align: left;"><input type="text" class="field datepicker" id="" name="expiry_retest_date"><span id="expiry_retest_date_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="expiry_retest_date_r" style="color:red; display:none">Fill this</span></td>
              <tr>
              </tr>
                  <td style="padding:4px;text-align:left;">Quantity Submitted</td>
                  <td colspan="2" style="padding:4px;text-align:left;"><input type="text" class="field" id="quantity_submitted" name="quantity_submitted"><span id="quantity_submitted_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="quantity_submitted_r" style="color:red; display:none">Fill this</span>
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
                  <td style="padding:4px;text-align:left;"><input type="text" id="storage_conditions" name="storage_conditions"></td>
              </tr>
                  <td style="padding:4px;text-align: left;">Applicant's Reference Number</td>
                  <td colspan="4" style="padding:4px;text-align: left;"><input type="text" id="applicant_reference_number" name="applicant_reference_number"></td>
              </tr>
              <tr>
                  <td height="25px" style="padding:4px;text-align:left;">Sample Source</td>
                  <td height="25px" colspan="4" style="padding:4px;text-align:left;"><textarea rows="1" cols="80" class="field" id="sample_source" name="sample_source"></textarea><span id="csample_source_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="csample_source_r" style="color:red; display:none">Fill this</span></td>
              </tr>
          </table>
        </td>
    </tr>
      <tr>
        <td height="25px" colspan="8" style="padding:8px;background-color:#ffffff;border-bottom:solid 10px #c4c4ff;"><b>Reason for Requesting Analysis</b> (Tick as appropriate)</td>
      </tr>
      <tr>
          <td colspan="8" style="padding:4px;background-color:#ffffff;"><input type='radio' checked="checked" name='reason' id='compliance_testing' value="Compliance Testing">Compliance Testing</td>
      </tr>
      <tr>
          <td colspan="8" style="padding:4px;background-color:#ffffff;"><input type='radio' name='reason' id='investigative_testing' value="Investigative Testing">Investigative Testing</td>
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
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='identifications' id='identification' value='1'></td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">vii.</td>
                  <td>Dissolution</td>
                  <td style="border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='dissolution' id='dissolution' value='7'></td>
                </tr>
                <tr>
                  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">ii.</td>
                  <td>Friability</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='friability' id='friability' value='2'></td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">viii.</td>
                  <td>Assay</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='assay' id='assay' value='8'></td>
                </tr>
                <tr>
                  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">iii.</td>
                  <td>Disintegration</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='disintergration' id='disintergration' value='3'></td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">ix.</td>
                  <td>Content Uniformity</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='content_uniformity' id='content_uniformity' value='9'></td>
                </tr>
                <tr>
                  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">iv.</td>
                  <td>ph(Acidity/Alkalinity)</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='ph_alkalinity_acidity' id='ph_alkalinity_acidity' value='4'></td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">x.</td>
                  <td>Full Monograph</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='full_monograph' id='full_monograph' value='10'></td>
                </tr>
                 <tr>
                  <td style="padding:4px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">v.</td>
                  <td>Related Substances</td>
                  <td style="padding:4px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='related_substances' id='related_substances' value='5'></td>
                  <td style="padding:4px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">xi.</td>
                  <td>Uniformity of Dosage</td>
                  <td style="padding:4px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='uniformity_of_dosage' id='uniformity_of_dosage' value='11'></td>
                </tr>
                <tr>
                  <td style="padding:4px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">vi</td>
                  <td>Weight Variation/Mass Uniformity</td>
                  <td style="padding:4px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='weight_variation_mass_uniformity' id='weight_variation_mass_uniformity' value='6'></td>
                  <td style="padding:4px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">xii.</td>
                  <td>Karl Fisher</td>
                  <td style="padding:4px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='karl_fisher' id='karl_fisher' value='12'></td>
                </tr>
                <tr>
                  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;"></td>
                  <td></td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"></td>
                  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">xiii.</td>
                  <td>Microbiology</td>
                  <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='microbiology' id='microbiology' value='13'></td>
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
            <td colspan="8" style="padding:4px;text-align:left;background-color:#ffffff;"><input type='radio' checked="checked" name='specification' id='usp' value='USP'>USP</td>
          </tr>
          <tr>
            <td colspan="8" style="padding:4px;text-align:left;background-color:#ffffff;"><input type='radio' name='specification' id='bp' value='BP'>BP</td>
          </tr>
          <tr>
            <td colspan="8" style="padding:4px;text-align:left;background-color:#ffffff;"><input type='radio' name='specification' id='european_pharmacopeia' value='European Pharmacopoeia'>European Pharmacopoeia</td>
          </tr>
          <tr>
            <td colspan="8" style="padding:4px;text-align:left;background-color:#ffffff;"><input type='radio' name='specification' id='international_pharmacopeia' value='International Pharmacopoeia'>International Pharmacopoeia</td>
          </tr>
          <tr>
              <td colspan="8" style="padding:4px;text-align:left;background-color:#ffffff;"><input type='radio' name='specification' id='manufacturers_specs' value='Manufacturer's Specifications'>Manufacturer's Specifications</td>
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
          <td height="25px" style="padding:4px;background-color:#ffffff;"><input type="text" class="field" id="authorizing_name" name="authorizing_name"/><span id="authorizing_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="authorizing_name_r" style="color:red; display:none">Fill this</span></td>
          <td height="25px" style="padding:4px;text-align:right;background-color:#ffffff;">Designation:</td>
          <td height="25px" colspan="5" style="padding:4px;background-color:#ffffff;"><input type="text" class="field" id="designation" name="designation"/><span id="designation_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="designation_r" style="color:red; display:none">Fill this</span></td>
      </tr>
      <tr>
          <td height="25px" width="120px" style="padding:4px;text-align:left;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;">Lab Registration No</td>
          <td height="25px" colspan="7" style="padding:4px;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;"><input type="text" class="field" id="lab_reg_number" name="lab_reg_number"/><span id="lab_reg_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="lab_reg_number_r" style="color:red; display:none">Fill this</span></td>
          <input type="hidden" id="creceived_by" name="creceived_by" value="<?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?>"/>
      </tr>
      <tr>
        <td height="25px" colspan="8" width="120px" style="padding:4px;text-align:left;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;"><b>Comments</b> <span id="findings_comment_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="findings_comment_r" style="color:red; display:none">Fill this</span></td>
      </tr>
      <tr>
        <td height="25px" colspan="8" style="padding:4px;background-color:#ffffff;"><textarea rows="3" cols="130" type="text" class="field" id="findings_comment" name="findings_comment"/></textarea></td>  
      </tr>
      <div class="modal-footer">
        <tr>
          <td height="25px" style="padding:4px;background-color:#ffffff;border-top: solid 1px #bfbfbf;text-align: center;" colspan="8" ><input type="submit" name="submit" id="submit" value="Submit"></td>
        </tr>
      </div>
    </table>
  </div>
</form>
</div>
</div>  