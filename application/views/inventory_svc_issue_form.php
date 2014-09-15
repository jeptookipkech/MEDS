
<div id="analysis_request" class="analysis_request" >
    <?php echo validation_errors(); ?>  
    <?php echo form_open('inventory_svc_issue/save/');?>

    <table class="table_form" width="950px" height="250px" bgcolor="#c4c4ff" border="0" cellpadding="4px" align="center">
        <td><input type="hidden" name="item_name" value="<?php echo $item_name;?>"/></td>
        <td><input type="hidden" name="id" value="<?php echo $id;?>"/></td>
        <tr>
      <td colspan="4" style="text-align:right;background-color:#ffffff;text-color:#00ff00;"><a href="<?php echo base_url().'inventory_standard_vial_card_record/Get/'.$id.'/'.$item_name;?>"><img src="<?php echo base_url().'images/icons/back.png'?>" height="20px" wieght="20px"><b>Back</b></a></td>
	</tr>
	<tr>
	    <td colspan="4" align="center" style="text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #d5d5ff;color: #0000fb;background-color: #e8e8ff;">
                <b><h3>Inventory Record Form</h3></b>
            </td>
	</tr>
	<tr>
	    <td height="5px" width="450px" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Issued By</b></td>
	    <td style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" name="issued_by" /></td>
	    <td height="5px" width="450px" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Quantity Issued</b></td>
	    <td style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" name="quantity_issued" /></td>

	</tr>
	<tr>
	    <td height="5px" width="450px" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Issued To</b></td>
	    <td style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" name="issued_to" /></td>
	    <td height="5px" width="450px" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Balance</b></td>
	    <td style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" name="balance" /></td>
	    
	</tr>
	
	<tr>
	    <td  style="background-color:#ffffff;text-align: center;" colspan="4" ><input type="submit" name="submit_i" value="Submit"></td>
	</tr>
    </table>
</div>
</div>
</body>
</html>