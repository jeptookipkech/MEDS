<script>
    $(document).ready(function() {
        /* Init DataTables */
        $('#list').dataTable({
            "sScrollY":"270px",
            "sScrollX":"100%"
        });
        
    });
 </script>
<table class="table_form"  bgcolor="#c4c4ff" width="950px" height="30px" border="0" cellpadding="4px" align="center">
    <tr>
	     <td colspan="5" width="100%" style="border-top: solid 1px #bfbfbf;border-left: solid 1px #bfbfbf;border-right: solid 1px #bfbfbf;text-align:center;background-color:#e8e8ff;border-bottom: solid 8px #c4c4ff;color: #0000fb;"><h5>Performance Schedule</h5></td>
	 </tr>
   </table>
<div id="p">
<table id="list" class="list_view_header" width="950px" align="center" bgcolor="#ffffff" cellpadding="4px">
    <thead bgcolor="#efefef">
        <tr>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">No</th>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">Maintenance Requirement</th>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">Maintenance Interval</th>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">Maintenance Specification</th>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">Maintenance Start Date</th>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">Next Maintenance Date</th>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">Action</th>
        </tr>
    </thead>
    <tbody>
     <?php
       $i=1;
        if (is_array($sql))
                foreach($sql as $row):
       
     ?>
     <tr>
      <?php
      
      ?>
        <td style="border-right: dotted 1px #c0c0c0;text-align: center;border-bottom: solid 1px #c0c0c0;" width="20px"><?php echo $i;?>.</td>
        <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $row['requirement'];?></td>
        <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $row['interval'];?></td>
        <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $row['specification'];?></td>
        <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $row['start_date'];?></td>
        <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $row['next_date'];?></td>
        <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php //echo if($query['status'];==0){echo"Done";}else if($query['status'];==1){echo"Pending";})?></td>
        
        <?php
          $i++;
        ?>
        </tr>
           <?php endforeach; ?>   
       </tbody>           
</table>
</div>