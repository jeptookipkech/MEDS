<div id="analysis_request" class="analysis_request" >
   <form action="<?php echo base_url().'calibration_requirement_list/save';?>" method="POST" >
    <table class="table_form" width="950px" bgcolor="#f0f0ff" height="450px" border="0" cellpadding="4px" align="center">
        <tr>
            <td colspan="3" style="text-align:right;background-color:#ffffff;text-color:#00ff00;"><a href="<?php echo base_url().'calibration_requirement_records/Get';?>"><img src="<?php echo base_url().'images/icons/back.png'?>" height="20px" wieght="20px"><b>Back</b></a></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;">
                <b><h3>Calibration Requirement List Form</h3></b>
            </td>
        </tr>
        <tr>
            <td height="5px" align="center" style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;"><b>1.</b></td>
            <td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><b>ID Number</b></td>
            <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" size="50" name="id_number"></td>
        </tr>
        <tr>
            <td height="5px" align="center" style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;"><b>2.</b></td>
            <td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><b>Description</b></td>
            <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><textarea rows="4" cols="50" name="description"></textarea></td>
        </tr>
        <tr>
            <td height="5px" align="center"  style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;"><b>3.</b></td>
            <td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><b>Manufacturer</b></td>
             <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" size="50" name="manufacturer"/></td>
        </tr>
          <tr>
            <td height="5px" align="center"  style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;"><b>5.</b></td>
            <td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><b>Model</b></td>
            <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" size="50"name="model"></td>
        </tr>
        <tr>
            <td height="5px" align="center" style="background-color:#ffffff;background-color:#ffffff;border-right: dotted 1px #bfbfbf;"><b>4.</b></td>
            <td height="5px" width="450px" align="left"  style="background-color:#ffffff;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><b>Serial Number</b></td>
            <td style="background-color:#ffffff;background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" size="50" name="serial_number"></td>
        </tr>
      
        <tr>
            <td height="5px" align="center"  style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;"><b>6.</b></td>
            <td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><b>Calibration/Verification ION Requirement</b></td>
            <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" size="50" name="calibration_verification_requirement"/></td>
        </tr>
        <tr>
            <td height="5px" align="center"  style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;"><b>7.</b></td>
            <td height="5px" width="450px" align="left" style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><b>Calibration/Verification Frequency</b></td>
            <td style="background-color:#ffffff;border-left: dashed 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" size="50"  name="calibration_verification_frequency"/></td>
        </tr>
        
        <tr>
            <td  style="background-color:#ffffff;text-align: center;" colspan="4" ><input type="submit" name="submit_c" value="Submit"></td>
        </tr>
    </table>
    </form>
</div>