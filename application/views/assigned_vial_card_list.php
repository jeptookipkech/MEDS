    <table id="list" class="list_view_header" width="100%" cellpadding="4px">
        <thead bgcolor="#efefef">
            <tr>
                <th style="border-right: solid 1px #ddddff;" align="center"></th>
                <th style="border-right: solid 1px #ddddff;" align="center">ID</th>
                <th style="border-right: solid 1px #ddddff;" align="center">Item</th>
                <th style="border-right: solid 1px #ddddff;" align="center">Batch</th>
                <th style="border-right: solid 1px #ddddff;" align="center">Source</th>
                <th style="border-right: solid 1px #ddddff;" align="center">Units</th>
                <th style="border-right: solid 1px #ddddff;" align="center">Location</th>
                <th style="border-right: solid 1px #ddddff;" align="center">Type</th>
                <th style="border-right: solid 1px #ddddff;" align="center">Expiry Date</th>
                <th style="border-right: solid 1px #ddddff;" align="center">Re-Order</th>
                <th colspan="2" style="border-right: solid 1px #ddddff;" align="center">Date</th>
                
            </tr>
        </thead>
        <tbody>
           <?php
            $i=1;
            //var_dump($query);
            
                
            if($i==0){
             
            echo"<tr>";
            }
            ?>  
            
                <td style="border-right: dotted 1px #c0c0c0;text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $i; ?></td>
                <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $query['id_number'];?></td>
                <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $query['item'];?></td>
                <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $query['batch_number'];?></td>
                <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $query['source'];?></td>
                <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $query['units'];?></td>
                <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $query['location'];?></td>
                <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $query['type'];?></td>
                <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $query['expiry_date'];?></td>
                <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $query['reorder'];?></td>
                <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo $query['date_received'];?></td>
                <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"></td>
            <?php
         
            $i++;
            
            ?>
            </tr>

        </tbody>
    </table>