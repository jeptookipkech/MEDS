
      function calculate_difference(){

      var sample_weight_one = (Math.abs(document.getElementById('weight_sample_container_one').value) - Math.abs(document.getElementById('weight_container_one').value));
      var sample_weight_two = (Math.abs(document.getElementById('weight_sample_container_two').value) - Math.abs(document.getElementById('weight_container_two').value));
      var sample_weight_three = (Math.abs(document.getElementById('weight_sample_container_three').value) - Math.abs(document.getElementById('weight_container_three').value));
      // var sample_weight_four = (Math.abs(document.getElementById('weight_sample_container_four').value) - Math.abs(document.getElementById('weight_container_four').value));
      // var sample_weight_five = (Math.abs(document.getElementById('weight_sample_container_five').value) - Math.abs(document.getElementById('weight_container_five').value));
      // var sample_weight_six = (Math.abs(document.getElementById('weight_sample_container_six').value) - Math.abs(document.getElementById('weight_container_six').value));
      
      document.getElementById('weight_sample_one').value = sample_weight_one.toFixed(5);
      document.getElementById('weight_sample_two').value = sample_weight_two.toFixed(5);
      document.getElementById('weight_sample_three').value = sample_weight_three.toFixed(5);
      // document.getElementById('weight_sample_four').value = sample_weight_four.toFixed(5);
      // document.getElementById('weight_sample_five').value = sample_weight_five.toFixed(5);
      // document.getElementById('weight_sample_six').value = sample_weight_six.toFixed(5);
      
      var s_weight_one = (Math.abs(document.getElementById('weight_reagent_container_one').value) - Math.abs(document.getElementById('weight_container_one_reagent').value));
      var s_weight_two = (Math.abs(document.getElementById('weight_reagent_container_two').value) - Math.abs(document.getElementById('weight_container_two_reagent').value));
      var s_weight_three = (Math.abs(document.getElementById('weight_reagent_container_three').value) - Math.abs(document.getElementById('weight_container_three_reagent').value));
      var s_weight_four = (Math.abs(document.getElementById('weight_reagent_container_four').value) - Math.abs(document.getElementById('weight_container_four_reagent').value));
      var s_weight_five = (Math.abs(document.getElementById('weight_reagent_container_five').value) - Math.abs(document.getElementById('weight_container_five_reagent').value));
      var s_weight_six = (Math.abs(document.getElementById('weight_reagent_container_six').value) - Math.abs(document.getElementById('weight_container_six_reagent').value));

      document.getElementById('weight_reagent_one').value = s_weight_one.toFixed(5);
      document.getElementById('weight_reagent_two').value = s_weight_two.toFixed(5);
      document.getElementById('weight_reagent_three').value = s_weight_three.toFixed(5);
      // document.getElementById('weight_reagent_four').value = s_weight_four.toFixed(5);
      // document.getElementById('weight_reagent_five').value = s_weight_five.toFixed(5);
      // document.getElementById('weight_reagent_six').value = s_weight_six.toFixed(5);

      }

      function calculate_reagent_difference(){
      
      var reagent_weight_one = (Math.abs(document.getElementById('weight_reagent_container_one').value) - Math.abs(document.getElementById('container_aone').value));
      var reagent_weight_two = (Math.abs(document.getElementById('weight_reagent_container_two').value) - Math.abs(document.getElementById('container_btwo').value));
      var reagent_weight_three = (Math.abs(document.getElementById('weight_reagent_container_three').value) - Math.abs(document.getElementById('container_three').value));
      var reagent_weight_four = (Math.abs(document.getElementById('weight_reagent_container_four').value) - Math.abs(document.getElementById('container_four').value));
      var reagent_weight_five = (Math.abs(document.getElementById('weight_reagent_container_five').value) - Math.abs(document.getElementById('container_five').value));
      var reagent_weight_six = (Math.abs(document.getElementById('weight_reagent_container_six').value) - Math.abs(document.getElementById('container_six').value));
      

      document.getElementById('weight_reagent_one').value = reagent_weight_one.toFixed(5);
      document.getElementById('weight_reagent_two').value = reagent_weight_two.toFixed(5);
      document.getElementById('weight_reagent_three').value = reagent_weight_three.toFixed(5);
      document.getElementById('weight_reagent_four').value = reagent_weight_four.toFixed(5);
      document.getElementById('weight_reagent_five').value = reagent_weight_five.toFixed(5);
      document.getElementById('weight_reagent_six').value = reagent_weight_six.toFixed(5); 
      }

      function calculate_sample_difference(){
      
      var weight_one = (Math.abs(document.getElementById('weight_standard_container_one').value) - Math.abs(document.getElementById('container_one').value));
      // var weight_two = (Math.abs(document.getElementById('weight_standard_container_two').value) - Math.abs(document.getElementById('container_two').value));
      
      document.getElementById('weight_standard_one').value = weight_one.toFixed(5); 
      // document.getElementById('weight_standard_two').value = weight_two.toFixed(5); 
      }
      
  
      function calculator_average(){
      
      var average_retention_time = (Math.abs(document.getElementById('retention_time_one').value) + Math.abs(document.getElementById('retention_time_two').value) + Math.abs(document.getElementById('retention_time_three').value) + Math.abs(document.getElementById('retention_time_four').value) + Math.abs(document.getElementById('retention_time_five').value) + Math.abs(document.getElementById('retention_time_six').value))/6;
      var average_peak_area= (Math.abs(document.getElementById('peak_area_one').value) + Math.abs(document.getElementById('peak_area_two').value) + Math.abs(document.getElementById('peak_area_three').value) + Math.abs(document.getElementById('peak_area_four').value) + Math.abs(document.getElementById('peak_area_five').value) + Math.abs(document.getElementById('peak_area_six').value))/6;
      var average_asymmetry = (Math.abs(document.getElementById('asymmetry_one').value) + Math.abs(document.getElementById('asymmetry_two').value) + Math.abs(document.getElementById('asymmetry_three').value) + Math.abs(document.getElementById('asymmetry_four').value) + Math.abs(document.getElementById('asymmetry_five').value) + Math.abs(document.getElementById('asymmetry_six').value))/6;
      var average_resolution = (Math.abs(document.getElementById('resolution_one').value) + Math.abs(document.getElementById('resolution_two').value) + Math.abs(document.getElementById('resolution_three').value) + Math.abs(document.getElementById('resolution_four').value) + Math.abs(document.getElementById('resolution_five').value) + Math.abs(document.getElementById('resolution_six').value))/6;
      // var average_relative_retention_time = (Math.abs(document.getElementById('relative_retention_time_one').value) + Math.abs(document.getElementById('relative_retention_time_two').value) + Math.abs(document.getElementById('relative_retention_time_three').value) + Math.abs(document.getElementById('relative_retention_time_four').value) + Math.abs(document.getElementById('relative_retention_time_five').value) + Math.abs(document.getElementById('relative_retention_time_six').value))/6;
       // + Math.abs(document.getElementById('d_four_p_lc').value) + Math.abs(document.getElementById('d_five_p_lc').value) + Math.abs(document.getElementById('d_six_p_lc').value)
       //var average_determination = (Math.abs(document.getElementById('d_one_p_lc').value) + Math.abs(document.getElementById('d_two_p_lc').value) + Math.abs(document.getElementById('d_three_p_lc').value))/3;
      
      var variance_retention_time=0;
      var variance_peak_area=0;
      var variance_asymmetry=0;
      var variance_resolution=0;
      //var variance_relative_retention_time=0;  

      var samples_retention_time = [Math.abs(document.getElementById('retention_time_one').value) , Math.abs(document.getElementById('retention_time_two').value) , Math.abs(document.getElementById('retention_time_three').value) , Math.abs(document.getElementById('retention_time_four').value) , Math.abs(document.getElementById('retention_time_five').value) , Math.abs(document.getElementById('retention_time_six').value)];
      var samples_peak_area= [Math.abs(document.getElementById('peak_area_one').value) , Math.abs(document.getElementById('peak_area_two').value) , Math.abs(document.getElementById('peak_area_three').value) , Math.abs(document.getElementById('peak_area_four').value) , Math.abs(document.getElementById('peak_area_five').value) , Math.abs(document.getElementById('peak_area_six').value)];
      var samples_asymmetry = [Math.abs(document.getElementById('asymmetry_one').value) , Math.abs(document.getElementById('asymmetry_two').value) , Math.abs(document.getElementById('asymmetry_three').value) , Math.abs(document.getElementById('asymmetry_four').value) , Math.abs(document.getElementById('asymmetry_five').value) , Math.abs(document.getElementById('asymmetry_six').value)];
      var samples_resolution = [Math.abs(document.getElementById('resolution_one').value) , Math.abs(document.getElementById('resolution_two').value) , Math.abs(document.getElementById('resolution_three').value) , Math.abs(document.getElementById('resolution_four').value) , Math.abs(document.getElementById('resolution_five').value) , Math.abs(document.getElementById('resolution_six').value)];
      //var samples_relative_retention_time = [Math.abs(document.getElementById('relative_retention_time_one').value) , Math.abs(document.getElementById('relative_retention_time_two').value) , Math.abs(document.getElementById('relative_retention_time_three').value) , Math.abs(document.getElementById('relative_retention_time_four').value) , Math.abs(document.getElementById('relative_retention_time_five').value) , Math.abs(document.getElementById('relative_retention_time_six').value)];
     

      document.getElementById('average_retention_time').value = average_retention_time.toFixed(5);
      document.getElementById('average_peak_area').value = average_peak_area.toFixed(5);
      document.getElementById('average_asymmetry').value = average_asymmetry.toFixed(5);
      document.getElementById('average_resolution').value = average_resolution.toFixed(5);
     // document.getElementById('average_relative_retention_time').value = average_relative_retention_time.toFixed(5);  
      

      for(var i=0;i<samples_retention_time.length; i++){
          variance_retention_time += Math.pow((samples_retention_time [i]-average_retention_time),2);         
      }
      for(var i=0;i<samples_peak_area.length; i++){
          variance_peak_area += Math.pow((samples_peak_area [i]-average_peak_area),2);    
      }
      for(var i=0;i<samples_asymmetry.length; i++){
          variance_asymmetry += Math.pow((samples_asymmetry [i]-average_asymmetry),2);    
      }
      for(var i=0;i<samples_resolution.length; i++){
          variance_resolution += Math.pow((samples_resolution [i]-average_resolution),2);   
      }
      // for(var i=0;i<samples_relative_retention_time.length; i++){
      //     variance_relative_retention_time += Math.pow((samples_relative_retention_time [i]-average_relative_retention_time),2);    
      // }

      var a=samples_retention_time.length;
      var b=samples_peak_area.length;
      var c=samples_asymmetry.length;
      var d=samples_resolution.length;
      //var e=samples_relative_retention_time.length;

      var standard_deviation_retention_time= Math.sqrt((variance_retention_time)/(a-1));
      var standard_deviation_peak_area= Math.sqrt((variance_peak_area)/(b-1));
      var standard_deviation_asymmetry= Math.sqrt((variance_asymmetry)/(c-1));
      var standard_deviation_resolution= Math.sqrt((variance_resolution)/(d-1));
      //var standard_deviation_relative_retention_time= Math.sqrt((variance_relative_retention_time)/(e-1));

      var rsd_retention_time=Math.abs((standard_deviation_retention_time/average_retention_time)*100);
      var rsd_peak_area=Math.abs((standard_deviation_peak_area/average_peak_area)*100);
      var rsd_asymmetry=Math.abs((standard_deviation_asymmetry/average_asymmetry)*100);
      var rsd_resolution=Math.abs((standard_deviation_resolution/average_resolution)*100);
      //var rsd_relative_retention_time=Math.abs((standard_deviation_relative_retention_time/average_relative_retention_time)*100);

      document.getElementById('average_retention_time').value = average_retention_time.toFixed(5);
      document.getElementById('average_peak_area').value = average_peak_area.toFixed(5);
      document.getElementById('average_asymmetry').value = average_asymmetry.toFixed(5);
      document.getElementById('average_resolution').value = average_resolution.toFixed(5);
      //document.getElementById('average_relative_retention_time').value = average_relative_retention_time.toFixed(5); 

      document.getElementById('standard_dev_retention_time').value = standard_deviation_retention_time.toFixed(5);
      document.getElementById('standard_dev_peak_area').value = standard_deviation_peak_area.toFixed(5);
      document.getElementById('standard_dev_asymmetry').value = standard_deviation_asymmetry.toFixed(5);
      document.getElementById('standard_dev_resolution').value = standard_deviation_resolution.toFixed(5);
      //document.getElementById('standard_dev_relative_retention_time').value = standard_deviation_relative_retention_time.toFixed(5);

      document.getElementById('rsd_retention_time').value = rsd_retention_time.toFixed(5);
      document.getElementById('rsd_peak_area').value = rsd_peak_area.toFixed(5);
      document.getElementById('rsd_asymmetry').value = rsd_asymmetry.toFixed(5);
      document.getElementById('rsd_resolution').value = rsd_resolution.toFixed(5);
      //document.getElementById('rsd_relative_retention_time').value = rsd_relative_retention_time.toFixed(5);
      var acc_retention_time=2;
      var acc_peak_area=2;
      var acc_asymmetry=2;
      var acc_resolution=5;


      var comment_a= new String();
      var comment_b= new String();
      var comment_c= new String();
      var comment_d= new String();
            

      if(rsd_retention_time==0 || rsd_retention_time==""){
            comment_a= "Ok";
            document.getElementById('comment_retention_time').value =comment_a;

      }else if(rsd_retention_time > acc_retention_time){
            comment_a= "Not Ok";
            document.getElementById('comment_retention_time').value =comment_a;

      }else{
            comment_a="OK";
            document.getElementById('comment_retention_time').value =comment_a;

      }

      if(rsd_peak_area==0 || rsd_peak_area==""){
            comment_b= "OK";
            document.getElementById('comment_peak_area').value =comment_b;

      }else if(rsd_peak_area > acc_peak_area ){
            comment_b= "Not Ok";
            document.getElementById('comment_peak_area').value =comment_b;

      }else{
            comment_b="Ok";
            document.getElementById('comment_peak_area').value =comment_b;

      }

      if(average_asymmetry==0 || average_asymmetry==""){
            comment_c= "Ok";
            document.getElementById('comment_asymmetry').value =comment_c;

      }else if(average_asymmetry > acc_asymmetry){
            comment_c= "Not Ok";
            document.getElementById('comment_asymmetry').value =comment_c;

      }else{
            comment_c="Ok";
            document.getElementById('comment_asymmetry').value =comment_c;
            
      }
      

      if(average_resolution==0 || average_resolution==""){
            comment_d= "Not Ok";
            document.getElementById('comment_resolution').value =comment_d;
      }else if(average_resolution < acc_resolution){
            comment_d= "Not Ok";
            document.getElementById('comment_resolution').value =comment_d;
      }else{
            comment_d="OK";
            document.getElementById('comment_resolution').value =comment_d;
      }     
      
      }

      function c2_calculator(){

      var c2_average_retention_time = (Math.abs(document.getElementById('c2_retention_time_one').value) + Math.abs(document.getElementById('c2_retention_time_two').value) + Math.abs(document.getElementById('c2_retention_time_three').value) + Math.abs(document.getElementById('c2_retention_time_four').value) + Math.abs(document.getElementById('c2_retention_time_five').value) + Math.abs(document.getElementById('c2_retention_time_six').value))/6;
      var c2_average_peak_area = (Math.abs(document.getElementById('c2_peak_area_one').value) + Math.abs(document.getElementById('c2_peak_area_two').value) + Math.abs(document.getElementById('c2_peak_area_three').value) + Math.abs(document.getElementById('c2_peak_area_four').value) + Math.abs(document.getElementById('c2_peak_area_five').value) + Math.abs(document.getElementById('c2_peak_area_six').value))/6;
      var c2_average_asymmetry = (Math.abs(document.getElementById('c2_asymmetry_one').value) + Math.abs(document.getElementById('c2_asymmetry_two').value) + Math.abs(document.getElementById('c2_asymmetry_three').value) + Math.abs(document.getElementById('c2_asymmetry_four').value) + Math.abs(document.getElementById('c2_asymmetry_five').value) + Math.abs(document.getElementById('c2_asymmetry_six').value))/6;
      var c2_average_resolution = (Math.abs(document.getElementById('c2_resolution_one').value) + Math.abs(document.getElementById('c2_resolution_two').value) + Math.abs(document.getElementById('c2_resolution_three').value) + Math.abs(document.getElementById('c2_resolution_four').value) + Math.abs(document.getElementById('c2_resolution_five').value) + Math.abs(document.getElementById('c2_resolution_six').value))/6;
      var c2_average_relative_retention_time = (Math.abs(document.getElementById('c2_relative_retention_time_one').value) + Math.abs(document.getElementById('c2_relative_retention_time_two').value) + Math.abs(document.getElementById('c2_relative_retention_time_three').value) + Math.abs(document.getElementById('c2_relative_retention_time_four').value) + Math.abs(document.getElementById('c2_relative_retention_time_five').value) + Math.abs(document.getElementById('c2_relative_retention_time_six').value))/6;
      var c2_average_determination = (Math.abs(document.getElementById('c2_d_one_p_lc').value) + Math.abs(document.getElementById('c2_d_two_p_lc').value) + Math.abs(document.getElementById('c2_d_three_p_lc').value) + Math.abs(document.getElementById('c2_d_four_p_lc').value) + Math.abs(document.getElementById('c2_d_five_p_lc').value) + Math.abs(document.getElementById('c2_d_six_p_lc').value))/6;
      
      var c2_samples_retention_time= [Math.abs(document.getElementById('c2_retention_time_one').value) , Math.abs(document.getElementById('c2_retention_time_two').value) , Math.abs(document.getElementById('c2_retention_time_three').value) , Math.abs(document.getElementById('c2_retention_time_four').value) , Math.abs(document.getElementById('c2_retention_time_five').value) , Math.abs(document.getElementById('c2_retention_time_six').value)];
      var c2_samples_peak_area= [Math.abs(document.getElementById('c2_peak_area_one').value) , Math.abs(document.getElementById('c2_peak_area_two').value) , Math.abs(document.getElementById('c2_peak_area_three').value) , Math.abs(document.getElementById('c2_peak_area_four').value) , Math.abs(document.getElementById('c2_peak_area_five').value) , Math.abs(document.getElementById('c2_peak_area_six').value)];
      var c2_samples_asymmetry= [Math.abs(document.getElementById('c2_asymmetry_one').value) , Math.abs(document.getElementById('c2_asymmetry_two').value) , Math.abs(document.getElementById('c2_asymmetry_three').value) , Math.abs(document.getElementById('c2_asymmetry_four').value) , Math.abs(document.getElementById('c2_asymmetry_five').value) , Math.abs(document.getElementById('c2_asymmetry_six').value)];
      var c2_samples_resolution= [Math.abs(document.getElementById('c2_resolution_one').value) , Math.abs(document.getElementById('c2_resolution_two').value) , Math.abs(document.getElementById('resolution_three').value) , Math.abs(document.getElementById('c2_resolution_four').value) , Math.abs(document.getElementById('c2_resolution_five').value) , Math.abs(document.getElementById('c2_resolution_six').value)];
      var c2_samples_relative_retention_time= [Math.abs(document.getElementById('c2_relative_retention_time_one').value) , Math.abs(document.getElementById('c2_relative_retention_time_two').value) , Math.abs(document.getElementById('c2_relative_retention_time_three').value) , Math.abs(document.getElementById('c2_relative_retention_time_four').value) , Math.abs(document.getElementById('c2_relative_retention_time_five').value) , Math.abs(document.getElementById('relative_retention_time_six').value)];
      var c2_samples_determination= [Math.abs(document.getElementById('c2_d_one_p_lc').value) , Math.abs(document.getElementById('c2_d_two_p_lc').value) , Math.abs(document.getElementById('c2_d_three_p_lc').value) , Math.abs(document.getElementById('c2_d_four_p_lc').value) , Math.abs(document.getElementById('c2_d_five_p_lc').value) , Math.abs(document.getElementById('c2_d_six_p_lc').value)];
       
      // var highest_value =Math.max.apply(Math,c2_samples_determination);  
      // var lowest_value =Math.min.apply(Math,c2_samples_determination);

      var c2_variance_retention_time=0;
      var c2_variance_peak_area=0;
      var c2_variance_asymmetry=0;
      var c2_variance_resolution=0;
      var c2_variance_relative_retention_time=0;      


      for(var i=0;i<c2_samples_retention_time.length; i++){
          c2_variance_retention_time += Math.pow((c2_samples_retention_time [i]-c2_average_retention_time),2);         
      }
      for(var i=0;i<c2_samples_peak_area.length; i++){
          c2_variance_peak_area += Math.pow((c2_samples_peak_area [i]-c2_average_peak_area),2);    
      }
      for(var i=0;i<c2_samples_asymmetry.length; i++){
          c2_variance_asymmetry += Math.pow((c2_samples_asymmetry [i]-c2_average_asymmetry),2);    
      }
      for(var i=0;i<c2_samples_resolution.length; i++){
          c2_variance_resolution += Math.pow((c2_samples_resolution [i]-c2_average_resolution),2);   
      }
      for(var i=0;i<c2_samples_relative_retention_time.length; i++){
          c2_variance_relative_retention_time += Math.pow((c2_samples_relative_retention_time [i]-c2_average_relative_retention_time),2);    
      }

      var a=c2_samples_relative_retention_time.length;
      var b=c2_samples_peak_area.length;
      var c=c2_samples_asymmetry.length;
      var d=c2_samples_resolution.length;
      var e=c2_samples_relative_retention_time.length;
      
      var c2_standard_deviation_retention_time= Math.sqrt((c2_variance_retention_time)/(a-1));
      var c2_standard_deviation_peak_area= Math.sqrt((c2_variance_peak_area)/(b-1));
      var c2_standard_deviation_asymmetry= Math.sqrt((c2_variance_asymmetry)/(c-1));
      var c2_standard_deviation_resolution= Math.sqrt((c2_variance_resolution)/(d-1));
      var c2_standard_deviation_relative_retention_time= Math.sqrt((c2_variance_relative_retention_time)/(e-1));

      var c2_rsd_retention_time=Math.abs((c2_standard_deviation_retention_time/c2_average_retention_time)*100);
      var c2_rsd_peak_area=Math.abs((c2_standard_deviation_peak_area/c2_average_peak_area)*100);
      var c2_rsd_asymmetry=Math.abs((c2_standard_deviation_asymmetry/c2_average_asymmetry)*100);
      var c2_rsd_resolution=Math.abs((c2_standard_deviation_resolution/c2_average_resolution)*100);
      var c2_rsd_relative_retention_time=Math.abs((c2_standard_deviation_relative_retention_time/c2_average_relative_retention_time)*100);
      // var rsd_determination=Math.abs((standard_deviation_determination/average_determination)*100);

      document.getElementById('c2_average_retention_time').value = c2_average_retention_time.toFixed(5);
      document.getElementById('c2_average_peak_area').value = c2_average_peak_area.toFixed(5);
      document.getElementById('c2_average_asymmetry').value = c2_average_asymmetry.toFixed(5);
      document.getElementById('c2_average_resolution').value = c2_average_resolution.toFixed(5);
      document.getElementById('c2_average_relative_retention_time').value = c2_average_relative_retention_time.toFixed(5); 

      // document.getElementById('determination_average').value = average_determination; 
      //document.getElementById('determination_sd').value = standard_deviation_determination;

      document.getElementById('c2_standard_dev_retention_time').value = c2_standard_deviation_retention_time.toFixed(5);
      document.getElementById('c2_standard_dev_peak_area').value = c2_standard_deviation_peak_area.toFixed(5);
      document.getElementById('c2_standard_dev_asymmetry').value = c2_standard_deviation_asymmetry.toFixed(5);
      document.getElementById('c2_standard_dev_resolution').value = c2_standard_deviation_resolution.toFixed(5);
      document.getElementById('c2_standard_dev_relative_retention_time').value = c2_standard_deviation_relative_retention_time.toFixed(5);

      document.getElementById('c2_rsd_retention_time').value = c2_rsd_retention_time.toFixed(5);
      document.getElementById('c2_rsd_peak_area').value = c2_rsd_peak_area.toFixed(5);
      document.getElementById('c2_rsd_asymmetry').value = c2_rsd_asymmetry.toFixed(5);
      document.getElementById('c2_rsd_resolution').value = c2_rsd_resolution.toFixed(5);
      document.getElementById('c2_rsd_relative_retention_time').value = c2_rsd_relative_retention_time.toFixed(5);
      // document.getElementById('c2_determination_rsd').value = rsd_determination;    
      }

     $(document).ready(function(){
        $('.retention_time').keyup(function() {
         
          var sum = 0;
          k = 0;
          i=0;
          var sum_rounded = 0;
          var sum1=0;
          var average = 0;
          var average_rounded = 0;
          var standard_deviation= 0;
          var variance= 0;
          var rsd= 0;
            data_carrier = [$('retention_time')];
          boxes = $(".retention_time").filter(function() {
              return (this.value.length);
          }).length;
           $('.retention_time').each(function(i,j) {
              sum += Number($(this).val());
              sum_rounded = sum.toFixed(5);
              average = sum_rounded / boxes;
              average_rounded = average.toFixed(5);
              //k += Math.pow((data_carrier[i]-average_rounded),2);
              k = data_carrier[i];
              
            
          });
           
         //  for(var i=0;i<data_carrier.length; i++){
           
         //   standard_deviation=Math.sqrt((variance)/boxes); 
         //   rsd=(standard_deviation/average_rounded)*100;
         //    //alert(variance)
         // }
         
          
          
          
          //$('input#utotals').val(sum1);
          $('.average_retention_time').val(average_rounded);
          $('.rsd_retention_time').val(k);
          $('.standard_dev_retention_time').val(standard_deviation);

      });

         
      });
      <!-- -->
      function calculator_two(){

      var average_retention_time = (Math.abs(document.getElementById('retention_time_one').value) + Math.abs(document.getElementById('retention_time_two').value) + Math.abs(document.getElementById('retention_time_three').value) + Math.abs(document.getElementById('retention_time_four').value) + Math.abs(document.getElementById('retention_time_five').value) + Math.abs(document.getElementById('retention_time_six').value))/6;
      var average_peak_area= (Math.abs(document.getElementById('peak_area_one').value) + Math.abs(document.getElementById('peak_area_two').value) + Math.abs(document.getElementById('peak_area_three').value) + Math.abs(document.getElementById('peak_area_four').value) + Math.abs(document.getElementById('peak_area_five').value) + Math.abs(document.getElementById('peak_area_six').value))/6;
      var average_asymmetry = (Math.abs(document.getElementById('asymmetry_one').value) + Math.abs(document.getElementById('asymmetry_two').value) + Math.abs(document.getElementById('asymmetry_three').value) + Math.abs(document.getElementById('asymmetry_four').value) + Math.abs(document.getElementById('asymmetry_five').value) + Math.abs(document.getElementById('asymmetry_six').value))/6;
      var average_resolution = (Math.abs(document.getElementById('resolution_one').value) + Math.abs(document.getElementById('resolution_two').value) + Math.abs(document.getElementById('resolution_three').value) + Math.abs(document.getElementById('resolution_four').value) + Math.abs(document.getElementById('resolution_five').value) + Math.abs(document.getElementById('resolution_six').value))/6;
      var average_relative_retention_time = (Math.abs(document.getElementById('relative_retention_time_one').value) + Math.abs(document.getElementById('relative_retention_time_two').value) + Math.abs(document.getElementById('relative_retention_time_three').value) + Math.abs(document.getElementById('relative_retention_time_four').value) + Math.abs(document.getElementById('relative_retention_time_five').value) + Math.abs(document.getElementById('relative_retention_time_six').value))/6;
      // var average_determination = (Math.abs(document.getElementById('d_one_p_lc').value) + Math.abs(document.getElementById('d_two_p_lc').value) + Math.abs(document.getElementById('d_three_p_lc').value) + Math.abs(document.getElementById('d_four_p_lc').value) + Math.abs(document.getElementById('d_five_p_lc').value) + Math.abs(document.getElementById('d_six_p_lc').value))/6;
      
      var samples_retention_time= [Math.abs(document.getElementById('retention_time_one').value), Math.abs(document.getElementById('retention_time_two').value) , Math.abs(document.getElementById('retention_time_three').value) , Math.abs(document.getElementById('retention_time_four').value) , Math.abs(document.getElementById('retention_time_five').value) , Math.abs(document.getElementById('retention_time_six').value)];
      var samples_peak_area= [Math.abs(document.getElementById('peak_area_one').value) , Math.abs(document.getElementById('peak_area_two').value) , Math.abs(document.getElementById('peak_area_three').value) , Math.abs(document.getElementById('peak_area_four').value) , Math.abs(document.getElementById('peak_area_five').value) , Math.abs(document.getElementById('peak_area_six').value)];
      var samples_asymmetry= [Math.abs(document.getElementById('asymmetry_one').value) , Math.abs(document.getElementById('asymmetry_two').value) , Math.abs(document.getElementById('asymmetry_three').value) , Math.abs(document.getElementById('asymmetry_four').value) , Math.abs(document.getElementById('asymmetry_five').value) , Math.abs(document.getElementById('asymmetry_six').value)];
      var samples_resolution= [Math.abs(document.getElementById('resolution_one').value) , Math.abs(document.getElementById('resolution_two').value) , Math.abs(document.getElementById('resolution_three').value) , Math.abs(document.getElementById('resolution_four').value) , Math.abs(document.getElementById('resolution_five').value) , Math.abs(document.getElementById('resolution_six').value)];
      var samples_relative_retention_time= [Math.abs(document.getElementById('relative_retention_time_one').value) , Math.abs(document.getElementById('relative_retention_time_two').value) , Math.abs(document.getElementById('relative_retention_time_three').value) , Math.abs(document.getElementById('relative_retention_time_four').value) , Math.abs(document.getElementById('relative_retention_time_five').value) , Math.abs(document.getElementById('relative_retention_time_six').value)];
      // var samples_determination= [Math.abs(document.getElementById('d_one_p_lc').value) , Math.abs(document.getElementById('d_two_p_lc').value) , Math.abs(document.getElementById('d_three_p_lc').value) , Math.abs(document.getElementById('d_four_p_lc').value) , Math.abs(document.getElementById('d_five_p_lc').value) , Math.abs(document.getElementById('d_six_p_lc').value)];
      
      var variance_retention_time=0;
      var variance_peak_area=0;
      var variance_asymmetry=0;
      var variance_resolution=0;
      var variance_relative_retention_time=0;
      var variance_determination=0;  

      // var sum = 0;
      // var sum1 = 0;
      // var average = 0;
      // var average_rounded = 0;

      // boxes = $(".retention_time").filter(function() {
      //           return (this.value.length);
      //       }).length;

      // $('.retention_time').each(function() {
      //           num = Number($(this).val());
      //           sum1 = sum.toFixed(5);
      //           average = sum1 / boxes;
      //           average_rounded = average.toFixed(5);
      //       });

      //       $('.average_retention_time').val(num);

         for(var i=0;i<samples_retention_time.length; i++){

           variance_retention_time += Math.pow((samples_retention_time [i]-average_retention_time),2);
         
         }
         for(var i=0;i<samples_peak_area.length; i++){
           variance_peak_area += Math.pow((samples_peak_area [i]-average_peak_area),2);
         
         }
          for(var i=0;i<samples_asymmetry.length; i++){
           variance_asymmetry += Math.pow((samples_asymmetry [i]-average_asymmetry),2);
         
         }
          for(var i=0;i<samples_resolution.length; i++){
           variance_resolution += Math.pow((samples_resolution [i]-average_resolution),2);
         
         }
          for(var i=0;i<samples_relative_retention_time.length; i++){
           variance_relative_retention_time += Math.pow((samples_relative_retention_time [i]-average_relative_retention_time),2);
         
         }

         // for(var i=0;i<samples_determination.length; i++){
         //   variance_determination += Math.pow((samples_determination [i]-average_determination),2);
         
         // }

          var standard_deviation_retention_time= Math.sqrt((variance_retention_time)/i);
          var standard_deviation_peak_area= Math.sqrt((variance_peak_area)/i);
          var standard_deviation_asymmetry= Math.sqrt((variance_asymmetry)/i);
          var standard_deviation_resolution= Math.sqrt((variance_resolution)/i);
          var standard_deviation_relative_retention_time= Math.sqrt((variance_relative_retention_time)/i);
          // var standard_deviation_determination= Math.sqrt((variance_determination)/i);

          var rsd_retention_time=Math.abs((standard_deviation_retention_time/average_retention_time)*100);
          var rsd_peak_area=Math.abs((standard_deviation_peak_area/average_peak_area)*100);
          var rsd_asymmetry=Math.abs((standard_deviation_asymmetry/average_asymmetry)*100);
          var rsd_resolution=Math.abs((standard_deviation_resolution/average_resolution)*100);
          var rsd_relative_retention_time=Math.abs((standard_deviation_relative_retention_time/average_relative_retention_time)*100);
          // var rsd_determination=Math.abs((standard_deviation_determination/average_determination)*100);

          document.getElementById('average_retention_time').value = average_retention_time.toFixed(5);
          document.getElementById('average_peak_area').value = average_peak_area.toFixed(5);
          document.getElementById('average_asymmetry').value = average_asymmetry.toFixed(5);
          document.getElementById('average_resolution').value = average_resolution.toFixed(5);
          document.getElementById('average_relative_retention_time').value = average_relative_retention_time.toFixed(5);  
          // document.getElementById('determination_average').value = average_determination;
          // document.getElementById('c2_determination_average').value = c2_average_determination;

          document.getElementById('standard_dev_retention_time').value = standard_deviation_retention_time.toFixed(5);
          document.getElementById('standard_dev_peak_area').value = standard_deviation_peak_area.toFixed(5);
          document.getElementById('standard_dev_asymmetry').value = standard_deviation_asymmetry.toFixed(5);
          document.getElementById('standard_dev_resolution').value = standard_deviation_resolution.toFixed(5);
          document.getElementById('standard_dev_relative_retention_time').value = standard_deviation_relative_retention_time.toFixed(5);          
          // document.getElementById('determination_sd').value = standard_deviation_determination;

          document.getElementById('rsd_retention_time').value = rsd_retention_time.toFixed(5);
          document.getElementById('rsd_peak_area').value = rsd_peak_area.toFixed(5);
          document.getElementById('rsd_asymmetry').value = rsd_asymmetry.toFixed(5);
          document.getElementById('rsd_resolution').value = rsd_resolution.toFixed(5);
          document.getElementById('rsd_relative_retention_time').value = rsd_relative_retention_time.toFixed(5);
          // document.getElementById('determination_rsd').value = rsd_determination;

      }
      
      function calc_avg_std(){

      var average = (Math.abs(document.getElementById('std_one').value) + Math.abs(document.getElementById('std_two').value) + Math.abs(document.getElementById('std_three').value) + Math.abs(document.getElementById('std_four').value) + Math.abs(document.getElementById('std_five').value))/5;
      //var c2_average = (Math.abs(document.getElementById('c2_std_one').value) + Math.abs(document.getElementById('c2_std_two').value) + Math.abs(document.getElementById('c2_std_three').value) + Math.abs(document.getElementById('c2_std_four').value) + Math.abs(document.getElementById('c2_std_five').value))/5;
      
      // var sample_one_average = (Math.abs(document.getElementById('c2_sample_one_a').value) + Math.abs(document.getElementById('c2_sample_one_b').value) + Math.abs(document.getElementById('c2_sample_one_c').value) + Math.abs(document.getElementById('c2_sample_one_d').value) + Math.abs(document.getElementById('c2_sample_one_e').value))/5;
      // var sample_two_average = (Math.abs(document.getElementById('c2_sample_two_a').value) + Math.abs(document.getElementById('c2_sample_two_b').value) + Math.abs(document.getElementById('c2_sample_two_c').value) + Math.abs(document.getElementById('c2_sample_two_d').value) + Math.abs(document.getElementById('c2_sample_two_e').value))/5;
      // var sample_three_average = (Math.abs(document.getElementById('c2_sample_three_a').value) + Math.abs(document.getElementById('c2_sample_three_b').value) + Math.abs(document.getElementById('c2_sample_three_c').value) + Math.abs(document.getElementById('c2_sample_three_d').value) + Math.abs(document.getElementById('c2_sample_three_e').value))/5;
      // var sample_four_average = (Math.abs(document.getElementById('c2_sample_four_a').value) + Math.abs(document.getElementById('c2_sample_four_b').value) + Math.abs(document.getElementById('c2_sample_four_c').value) + Math.abs(document.getElementById('c2_sample_four_d').value) + Math.abs(document.getElementById('c2_sample_four_e').value))/5;
      // var sample_five_average = (Math.abs(document.getElementById('c2_sample_five_a').value) + Math.abs(document.getElementById('c2_sample_five_b').value) + Math.abs(document.getElementById('c2_sample_five_c').value) + Math.abs(document.getElementById('c2_sample_five_d').value) + Math.abs(document.getElementById('c2_sample_five_e').value))/5;
      // var sample_six_average = (Math.abs(document.getElementById('c2_sample_six_a').value) + Math.abs(document.getElementById('c2_sample_six_b').value) + Math.abs(document.getElementById('c2_sample_six_c').value) + Math.abs(document.getElementById('c2_sample_six_d').value) + Math.abs(document.getElementById('c2_sample_six_e').value))/5;
      // var average_relative_time = (Math.abs(document.getElementById('c2_relative_one').value) + Math.abs(document.getElementById('c2_relative_two').value) + Math.abs(document.getElementById('c2_relative_three').value) + Math.abs(document.getElementById('c2_relative_four').value) + Math.abs(document.getElementById('c2_relative_five').value))/5;
      
      
      // document.getElementById('c2_sample_one_average').value= sample_one_average.toFixed(5);
      // document.getElementById('c2_sample_two_average').value= sample_two_average.toFixed(5);
      // document.getElementById('c2_sample_three_average').value= sample_three_average.toFixed(5);
      // document.getElementById('c2_sample_four_average').value= sample_four_average.toFixed(5);
      // document.getElementById('c2_sample_five_average').value= sample_five_average.toFixed(5);
      // document.getElementById('c2_sample_six_average').value= sample_six_average.toFixed(5);
      // document.getElementById('c2_relative_average').value = average_relative_time.toFixed(5);
      
      document.getElementById('std_average').value = average.toFixed(5);
      // document.getElementById('c2_std_average').value = c2_average.toFixed(5);

      }
  
      function calc_internal_std(){

      var average = (Math.abs(document.getElementById('internal_std_a_one').value) + Math.abs(document.getElementById('internal_std_a_two').value) + Math.abs(document.getElementById('internal_std_a_three').value) + Math.abs(document.getElementById('internal_std_a_four').value) + Math.abs(document.getElementById('internal_std_a_five').value))/5;
      document.getElementById('internal_std_a_average').value = average.toFixed(5);

      }
      function calc_internal_std_two(){

      var average = (Math.abs(document.getElementById('internal_std_b_one').value) + Math.abs(document.getElementById('internal_std_b_two').value) + Math.abs(document.getElementById('internal_std_b_three').value) + Math.abs(document.getElementById('internal_std_b_four').value) + Math.abs(document.getElementById('internal_std_b_five').value))/5;
      document.getElementById('internal_std_b_average').value = average.toFixed(5);

      }
      function calc_internal_std_three(){

      var average = (Math.abs(document.getElementById('internal_std_c_one').value) + Math.abs(document.getElementById('internal_std_c_two').value) + Math.abs(document.getElementById('internal_std_c_three').value) + Math.abs(document.getElementById('internal_std_c_four').value) + Math.abs(document.getElementById('internal_std_c_five').value))/5;
      document.getElementById('internal_std_c_average').value = average.toFixed(5);

      }
      function calc_internal_std_four(){

      var average = (Math.abs(document.getElementById('internal_std_d_one').value) + Math.abs(document.getElementById('internal_std_d_two').value) + Math.abs(document.getElementById('internal_std_d_three').value) + Math.abs(document.getElementById('internal_std_d_four').value) + Math.abs(document.getElementById('internal_std_d_five').value))/5;
      document.getElementById('internal_std_d_average').value = average.toFixed(5);

      }
      function calc_internal_std_five(){

      var average = (Math.abs(document.getElementById('internal_std_e_one').value) + Math.abs(document.getElementById('internal_std_e_two').value) + Math.abs(document.getElementById('internal_std_e_three').value) + Math.abs(document.getElementById('internal_std_e_four').value) + Math.abs(document.getElementById('internal_std_e_five').value))/5;
      document.getElementById('internal_std_e_average').value = average.toFixed(5);

      }
      function calc_internal_std_six(){

      var average = (Math.abs(document.getElementById('internal_std_f_one').value) + Math.abs(document.getElementById('internal_std_f_two').value) + Math.abs(document.getElementById('internal_std_f_three').value) + Math.abs(document.getElementById('internal_std_f_four').value) + Math.abs(document.getElementById('internal_std_f_five').value))/5;
      document.getElementById('internal_std_f_average').value = average.toFixed(5);

      }
      function calc_internal_std_seven(){

      var average = (Math.abs(document.getElementById('internal_std_g_one').value) + Math.abs(document.getElementById('internal_std_g_two').value) + Math.abs(document.getElementById('internal_std_g_three').value) + Math.abs(document.getElementById('internal_std_g_four').value) + Math.abs(document.getElementById('internal_std_g_five').value))/5;
      document.getElementById('internal_std_g_average').value = average.toFixed(5);

      }

      function calc_ratio_std(){

      var average = (Math.abs(document.getElementById('ratio_std_a_one').value) + Math.abs(document.getElementById('ratio_std_a_one').value) + Math.abs(document.getElementById('ratio_std_a_three').value) + Math.abs(document.getElementById('ratio_std_a_four').value) + Math.abs(document.getElementById('ratio_std_a_five').value))/5;
      document.getElementById('ratio_std_a_average').value = average.toFixed(5);

      }
      function calc_ratio_std_two(){

      var average = (Math.abs(document.getElementById('ratio_std_b_one').value) + Math.abs(document.getElementById('ratio_std_b_two').value) + Math.abs(document.getElementById('ratio_std_b_three').value) + Math.abs(document.getElementById('ratio_std_b_four').value) + Math.abs(document.getElementById('ratio_std_b_five').value))/5;
      document.getElementById('ratio_std_b_average').value = average.toFixed(5);

      }
      function calc_ratio_std_three(){

      var average = (Math.abs(document.getElementById('ratio_std_c_one').value) + Math.abs(document.getElementById('ratio_std_c_two').value) + Math.abs(document.getElementById('ratio_std_c_three').value) + Math.abs(document.getElementById('ratio_std_c_four').value) + Math.abs(document.getElementById('ratio_std_c_five').value))/5;
      document.getElementById('ratio_std_c_average').value = average.toFixed(5);

      }
      function calc_ratio_std_four(){

      var average = (Math.abs(document.getElementById('ratio_std_d_one').value) + Math.abs(document.getElementById('ratio_std_d_two').value) + Math.abs(document.getElementById('ratio_std_d_three').value) + Math.abs(document.getElementById('ratio_std_d_four').value) + Math.abs(document.getElementById('ratio_std_d_five').value))/5;
      document.getElementById('ratio_std_d_average').value = average.toFixed(5);

      }
      function calc_ratio_std_five(){

      var average = (Math.abs(document.getElementById('ratio_std_e_one').value) + Math.abs(document.getElementById('ratio_std_e_two').value) + Math.abs(document.getElementById('ratio_std_e_three').value) + Math.abs(document.getElementById('ratio_std_e_four').value) + Math.abs(document.getElementById('ratio_std_e_five').value))/5;
      document.getElementById('ratio_std_e_average').value = average.toFixed(5);

      }
      function calc_ratio_std_six(){

      var average = (Math.abs(document.getElementById('ratio_std_f_one').value) + Math.abs(document.getElementById('ratio_std_f_two').value) + Math.abs(document.getElementById('ratio_std_f_three').value) + Math.abs(document.getElementById('ratio_std_f_four').value) + Math.abs(document.getElementById('ratio_std_f_five').value))/5;
      document.getElementById('ratio_std_f_average').value = average.toFixed(5);

      }
      function calc_ratio_std_seven(){

      var average = (Math.abs(document.getElementById('ratio_std_g_one').value) + Math.abs(document.getElementById('ratio_std_g_two').value) + Math.abs(document.getElementById('ratio_std_g_three').value) + Math.abs(document.getElementById('ratio_std_g_four').value) + Math.abs(document.getElementById('ratio_std_g_five').value))/5;
      document.getElementById('ratio_std_g_average').value = average.toFixed(5);

      }
      function calc_avg_sample_one(){

      var average = (Math.abs(document.getElementById('sample_a_one').value) + Math.abs(document.getElementById('sample_a_two').value) + Math.abs(document.getElementById('sample_a_three').value) + Math.abs(document.getElementById('sample_a_four').value) + Math.abs(document.getElementById('sample_a_five').value))/5;
      document.getElementById('sample_a_average').value = average.toFixed(5);

      }
      function calc_avg_sample_two(){

      var average = (Math.abs(document.getElementById('sample_b_one').value) + Math.abs(document.getElementById('sample_b_two').value) + Math.abs(document.getElementById('sample_b_three').value) + Math.abs(document.getElementById('sample_b_four').value) + Math.abs(document.getElementById('sample_b_five').value))/5;
      document.getElementById('sample_b_average').value = average.toFixed(5);

      }
      function calc_avg_sample_three(){

      var average = (Math.abs(document.getElementById('sample_c_one').value) + Math.abs(document.getElementById('sample_c_two').value) + Math.abs(document.getElementById('sample_c_three').value) + Math.abs(document.getElementById('sample_c_four').value) + Math.abs(document.getElementById('sample_c_five').value))/5;
      document.getElementById('sample_c_average').value = average.toFixed(5);

      

      }
      function calc_avg_sample_four(){

      var average = (Math.abs(document.getElementById('sample_d_one').value) + Math.abs(document.getElementById('sample_d_two').value) + Math.abs(document.getElementById('sample_d_three').value) + Math.abs(document.getElementById('sample_d_four').value) + Math.abs(document.getElementById('sample_d_five').value))/5;
      document.getElementById('sample_d_average').value = average.toFixed(5);

      }
      function calc_avg_sample_five(){

      var average = (Math.abs(document.getElementById('sample_e_one').value) + Math.abs(document.getElementById('sample_e_two').value) + Math.abs(document.getElementById('sample_e_three').value) + Math.abs(document.getElementById('sample_e_four').value) + Math.abs(document.getElementById('sample_e_five').value))/5;
      document.getElementById('sample_e_average').value = average.toFixed(5);

      }
      function calc_avg_sample_six(){

      var average = (Math.abs(document.getElementById('sample_f_one').value) + Math.abs(document.getElementById('sample_f_two').value) + Math.abs(document.getElementById('sample_f_three').value) + Math.abs(document.getElementById('sample_f_four').value) + Math.abs(document.getElementById('sample_f_five').value))/5;
      document.getElementById('sample_f_average').value = average.toFixed(5);

      }
      function calc_avg_relative(){

      var average = (Math.abs(document.getElementById('relative_one').value) + Math.abs(document.getElementById('relative_two').value) + Math.abs(document.getElementById('relative_three').value) + Math.abs(document.getElementById('relative_four').value) + Math.abs(document.getElementById('relative_five').value))/5;
      document.getElementById('relative_average').value = average.toFixed(5);

      }
  
      <!---->
      // function c2_calc_avg_std(){

      // var average = (Math.abs(document.getElementById('c2_std_one').value) + Math.abs(document.getElementById('c2_std_two').value) + Math.abs(document.getElementById('c2_std_three').value) + Math.abs(document.getElementById('c2_std_four').value) + Math.abs(document.getElementById('c2_std_five').value))/5;
      // document.getElementById('c2_std_average').value = average;

      // }
      // function c2_calc_avg_sample_one(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_one').value) + Math.abs(document.getElementById('c2_sample_two_one').value) + Math.abs(document.getElementById('c2_sample_three_one').value) + Math.abs(document.getElementById('c2_sample_four_one').value) + Math.abs(document.getElementById('c2_sample_five_one').value))/5;
      // document.getElementById('c2_sample_one_average').value = average;

      // }
      // function c2_calc_avg_sample_two(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_two').value) + Math.abs(document.getElementById('c2_sample_two_two').value) + Math.abs(document.getElementById('c2_sample_three_two').value) + Math.abs(document.getElementById('c2_sample_four_two').value) + Math.abs(document.getElementById('c2_sample_five_two').value))/5;
      // document.getElementById('c2_sample_two_average').value = average;

      // }
      // function c2_calc_avg_sample_three(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_three').value) + Math.abs(document.getElementById('c2_sample_two_three').value) + Math.abs(document.getElementById('c2_sample_three_three').value) + Math.abs(document.getElementById('c2_sample_four_three').value) + Math.abs(document.getElementById('c2_sample_five_three').value))/5;
      // document.getElementById('c2_sample_three_average').value = average;

      // }
      // function c2_calc_avg_sample_four(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_four').value) + Math.abs(document.getElementById('c2_sample_two_four').value) + Math.abs(document.getElementById('c2_sample_three_four').value) + Math.abs(document.getElementById('c2_sample_four_four').value) + Math.abs(document.getElementById('c2_sample_five_four').value))/5;
      // document.getElementById('c2_sample_four_average').value = average;

      // }
      // function c2_calc_avg_sample_five(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_five').value) + Math.abs(document.getElementById('c2_sample_two_five').value) + Math.abs(document.getElementById('c2_sample_three_five').value) + Math.abs(document.getElementById('c2_sample_four_five').value) + Math.abs(document.getElementById('c2_sample_five_five').value))/5;
      // document.getElementById('c2_sample_five_average').value = average;

      // }
      // function c2_calc_avg_sample_six(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_six').value) + Math.abs(document.getElementById('c2_sample_two_six').value) + Math.abs(document.getElementById('c2_sample_three_six').value) + Math.abs(document.getElementById('c2_sample_four_six').value) + Math.abs(document.getElementById('c2_sample_five_six').value))/5;
      // document.getElementById('c2_sample_six_average').value = average;

      // }
      //  function c2_calc_avg_relative(){

      // var average = (Math.abs(document.getElementById('c2_relative_one').value) + Math.abs(document.getElementById('c2_relative_two').value) + Math.abs(document.getElementById('c2_relative_three').value) + Math.abs(document.getElementById('c2_relative_four').value) + Math.abs(document.getElementById('c2_relative_five').value))/5;
      // document.getElementById('c2_relative_average').value = average;

      // }
      
      <!---->
      function calc_determination(){

      var determination_one = (Math.abs(document.getElementById('d_one_pkt').value) * Math.abs(document.getElementById('d_one_wstd').value) * Math.abs(document.getElementById('d_one_awt').value) * 100 * Math.abs(document.getElementById('d_one_df').value) * Math.abs(document.getElementById('d_one_potency').value))/(Math.abs(document.getElementById('d_one_pkstd').value) * Math.abs(document.getElementById('d_one_wt').value) * Math.abs(document.getElementById('d_one_lc').value));
      var determination_two = (Math.abs(document.getElementById('d_two_pkt').value) * Math.abs(document.getElementById('d_two_wstd').value) * Math.abs(document.getElementById('d_two_awt').value) * 100 * Math.abs(document.getElementById('d_two_df').value) * Math.abs(document.getElementById('d_two_potency').value))/(Math.abs(document.getElementById('d_two_pkstd').value) * Math.abs(document.getElementById('d_two_wt').value) * Math.abs(document.getElementById('d_two_lc').value));
      var determination_three = (Math.abs(document.getElementById('d_three_pkt').value) * Math.abs(document.getElementById('d_three_wstd').value) * Math.abs(document.getElementById('d_three_awt').value) * 100 * Math.abs(document.getElementById('d_three_df').value) * Math.abs(document.getElementById('d_three_potency').value))/(Math.abs(document.getElementById('d_three_pkstd').value) * Math.abs(document.getElementById('d_three_wt').value) * Math.abs(document.getElementById('d_three_lc').value));
      // var determination_four = (Math.abs(document.getElementById('d_four_pkt').value) * Math.abs(document.getElementById('d_four_wstd').value) * Math.abs(document.getElementById('d_four_awt').value) * 100 * Math.abs(document.getElementById('d_four_df').value) * Math.abs(document.getElementById('d_four_potency').value))/(Math.abs(document.getElementById('d_four_pkstd').value) * Math.abs(document.getElementById('d_four_wt').value) * Math.abs(document.getElementById('d_four_lc').value));
      // var determination_five = (Math.abs(document.getElementById('d_five_pkt').value) * Math.abs(document.getElementById('d_five_wstd').value) * Math.abs(document.getElementById('d_five_awt').value) * 100 * Math.abs(document.getElementById('d_five_df').value) * Math.abs(document.getElementById('d_five_potency').value))/(Math.abs(document.getElementById('d_five_pkstd').value) * Math.abs(document.getElementById('d_five_wt').value) * Math.abs(document.getElementById('d_five_lc').value));
      // var determination_six = (Math.abs(document.getElementById('d_six_pkt').value) * Math.abs(document.getElementById('d_six_wstd').value) * Math.abs(document.getElementById('d_six_awt').value) * 100 * Math.abs(document.getElementById('d_six_df').value) * Math.abs(document.getElementById('d_six_potency').value))/(Math.abs(document.getElementById('d_six_pkstd').value) * Math.abs(document.getElementById('d_six_wt').value) * Math.abs(document.getElementById('d_six_lc').value));
      
      document.getElementById('d_one_p_lc').value = determination_one.toFixed(5);
      document.getElementById('d_two_p_lc').value = determination_two.toFixed(5);
      document.getElementById('d_three_p_lc').value = determination_three.toFixed(5);
      // document.getElementById('d_four_p_lc').value = determination_four.toFixed(5);
      // document.getElementById('d_five_p_lc').value = determination_five.toFixed(5);
      // document.getElementById('d_six_p_lc').value = determination_six.toFixed(5);

      var average_det= (Math.abs(document.getElementById('d_one_p_lc').value)+ Math.abs(document.getElementById('d_two_p_lc').value)+ Math.abs(document.getElementById('d_three_p_lc').value))/3;
      
      var determinations= [Math.abs(document.getElementById('d_one_p_lc').value), Math.abs(document.getElementById('d_two_p_lc').value), Math.abs(document.getElementById('d_three_p_lc').value)];
      
      var highest_value =Math.max.apply(Math,determinations);
      var lowest_value =Math.min.apply(Math,determinations);

      var variance_determinations=0; 
      
      for(var i=0;i<determinations.length; i++){
           variance_determinations += Math.pow((determinations [i]-average_det),2);       
      }

      var a=determinations.length;

      var determination_sd= Math.sqrt((variance_determinations)/(a-1));
      var determination_rsd=Math.abs((determination_sd/average_det)*100);
      
      document.getElementById('det_min').value = lowest_value.toFixed(2);
      document.getElementById('det_max').value = highest_value.toFixed(2);

      document.getElementById('nlt_min_tolerance_det').value = lowest_value.toFixed(2);
      document.getElementById('nlt_max_tolerance_det').value = highest_value.toFixed(2);

      document.getElementById('ngt_min_tolerance_det').value = lowest_value.toFixed(2);
      document.getElementById('ngt_max_tolerance_det').value = highest_value.toFixed(2);

      document.getElementById('range_min_tolerance_det').value = lowest_value.toFixed(2);
      document.getElementById('range_max_tolerance_det').value = highest_value.toFixed(2);

      document.getElementById('determination_average').value = average_det.toFixed(5);
      document.getElementById('determination_sd').value = determination_sd.toFixed(5);
      document.getElementById('determination_rsd').value = determination_rsd.toFixed(5);
      document.getElementById('results_determination_sd').value = determination_sd.toFixed(5);
      document.getElementById('results_determination_rsd').value = determination_rsd.toFixed(5);
      



      var equivalent_to = (Math.abs(document.getElementById('equivalent_to_lc').value)*average_det)/100; 
      document.getElementById('determination_equivalent_to').value = equivalent_to.toFixed(5);

      var min_tolerance=0;
      var max_tolerance=0;
      var new_min_tolerance_det=0;
      var new_max_tolerance_det=0;

      var comment_conclusion= new String();
      var comment_a= new String();
      var comment_b= new String();
      var comment_c= new String();

      min_tolerance=[document.getElementById('min_tolerance').value];
      max_tolerance=[document.getElementById('max_tolerance').value];

      new_min_tolerance_det=[document.getElementById('new_min_tolerance_det').value];
      new_max_tolerance_det=[document.getElementById('new_max_tolerance_det').value];
      
      

      if(min_tolerance==0 || min_tolerance==""){
            comment_a= "";
      }else if(min_tolerance < lowest_value || min_tolerance > highest_value || min_tolerance==0 || min_tolerance==""){
            comment_a= "Not Ok";
            comment_conclusion="Test Does Not Comply(Failed)";
             document.getElementById('test_conclusion').value =comment_conclusion;
      }else{
            comment_a="OK";
            comment_conclusion="Test Complies (Passed)";
            document.getElementById('test_conclusion').value =comment_conclusion;
      }
      
      if(max_tolerance==0 || max_tolerance==""){
            comment_b= "";
      }else if(max_tolerance < lowest_value || max_tolerance > highest_value){
            comment_b= "Not Ok";
            comment_conclusion="Test Does Not Comply(Failed)";
            document.getElementById('test_conclusion').value =comment_conclusion;
      }else{
            comment_b="OK";
            comment_conclusion="Test Complies (Passed)";
            document.getElementById('test_conclusion').value =comment_conclusion;
      }

      if(new_min_tolerance_det==0 || new_min_tolerance_det==""){
            comment_c= "";
      }else if(new_min_tolerance_det < lowest_value || new_min_tolerance_det > highest_value){
            comment_c= "Not Ok";
            comment_conclusion="Test Does Not Comply(Failed)";
            document.getElementById('test_conclusion').value =comment_conclusion;
      }else{
            comment_c="OK";
            comment_conclusion="Test Complies (Passed)";
            document.getElementById('test_conclusion').value =comment_conclusion;
      }
            document.getElementById('min_tolerance_comment').value =comment_c;
      if(new_max_tolerance_det==0 || new_max_tolerance_det==""){
            comment_c= "";
      }else if(new_max_tolerance_det < lowest_value || new_max_tolerance_det > highest_value){
            comment_c= "Not Ok";
            comment_conclusion="Test Does Not Comply(Failed)";
            document.getElementById('test_conclusion').value =comment_conclusion;
      }else{
            comment_c="OK";
            comment_conclusion="Test Complies (Passed)";
            document.getElementById('test_conclusion').value =comment_conclusion;
      }     
            document.getElementById('min_tolerance_comment').value =comment_a;
            document.getElementById('max_tolerance_comment').value =comment_b;
            document.getElementById('range_tolerance_comment').value =comment_c;

      }

      function calc_d_factor(){
            var dilution_factor= (Math.abs(document.getElementById('a').value) * Math.abs(document.getElementById('b').value))/(Math.abs(document.getElementById('factor').value));
            document.getElementById('d_factor').value =dilution_factor;
      }

      function calc_c2_determination(){

      var c2_determination_one = (Math.abs(document.getElementById('c2_d_one_pkt').value) * Math.abs(document.getElementById('c2_d_one_wstd').value) * Math.abs(document.getElementById('c2_d_one_awt').value) * 100 * Math.abs(document.getElementById('c2_d_one_df').value) * Math.abs(document.getElementById('c2_d_one_potency').value))/(Math.abs(document.getElementById('c2_d_one_pkstd').value) * Math.abs(document.getElementById('c2_d_one_wt').value) * Math.abs(document.getElementById('c2_d_one_lc').value));
      var c2_determination_two = (Math.abs(document.getElementById('c2_d_two_pkt').value) * Math.abs(document.getElementById('c2_d_two_wstd').value) * Math.abs(document.getElementById('c2_d_two_awt').value) * 100 * Math.abs(document.getElementById('c2_d_two_df').value) * Math.abs(document.getElementById('c2_d_two_potency').value))/(Math.abs(document.getElementById('c2_d_two_pkstd').value) * Math.abs(document.getElementById('c2_d_two_wt').value) * Math.abs(document.getElementById('c2_d_two_lc').value));
      var c2_determination_three = (Math.abs(document.getElementById('c2_d_three_pkt').value) * Math.abs(document.getElementById('c2_d_three_wstd').value) * Math.abs(document.getElementById('c2_d_three_awt').value) * 100 * Math.abs(document.getElementById('c2_d_three_df').value) * Math.abs(document.getElementById('c2_d_three_potency').value))/(Math.abs(document.getElementById('c2_d_three_pkstd').value) * Math.abs(document.getElementById('c2_d_three_wt').value) * Math.abs(document.getElementById('c2_d_three_lc').value));
      var c2_determination_four = (Math.abs(document.getElementById('c2_d_four_pkt').value) * Math.abs(document.getElementById('c2_d_four_wstd').value) * Math.abs(document.getElementById('c2_d_four_awt').value) * 100 * Math.abs(document.getElementById('c2_d_four_df').value) * Math.abs(document.getElementById('c2_d_four_potency').value))/(Math.abs(document.getElementById('c2_d_four_pkstd').value) * Math.abs(document.getElementById('c2_d_four_wt').value) * Math.abs(document.getElementById('c2_d_four_lc').value));
      var c2_determination_five = (Math.abs(document.getElementById('c2_d_five_pkt').value) * Math.abs(document.getElementById('c2_d_five_wstd').value) * Math.abs(document.getElementById('c2_d_five_awt').value) * 100 * Math.abs(document.getElementById('c2_d_five_df').value) * Math.abs(document.getElementById('c2_d_five_potency').value))/(Math.abs(document.getElementById('c2_d_five_pkstd').value) * Math.abs(document.getElementById('c2_d_five_wt').value) * Math.abs(document.getElementById('c2_d_five_lc').value));
      var c2_determination_six = (Math.abs(document.getElementById('c2_d_six_pkt').value) * Math.abs(document.getElementById('c2_d_six_wstd').value) * Math.abs(document.getElementById('c2_d_six_awt').value) * 100 * Math.abs(document.getElementById('c2_d_six_df').value) * Math.abs(document.getElementById('c2_d_six_potency').value))/(Math.abs(document.getElementById('c2_d_six_pkstd').value) * Math.abs(document.getElementById('c2_d_six_wt').value) * Math.abs(document.getElementById('c2_d_six_lc').value));
      
      document.getElementById('c2_d_one_p_lc').value = c2_determination_one.toFixed(5);
      document.getElementById('c2_d_two_p_lc').value = c2_determination_two.toFixed(5);
      document.getElementById('c2_d_three_p_lc').value = c2_determination_three.toFixed(5);
      document.getElementById('c2_d_four_p_lc').value = c2_determination_four.toFixed(5);
      document.getElementById('c2_d_five_p_lc').value = c2_determination_five.toFixed(5);
      document.getElementById('c2_d_six_p_lc').value = c2_determination_six.toFixed(5);

      var c2_average_det= (Math.abs(document.getElementById('c2_d_one_p_lc').value)+ Math.abs(document.getElementById('c2_d_two_p_lc').value)+ Math.abs(document.getElementById('c2_d_three_p_lc').value)+ Math.abs(document.getElementById('c2_d_four_p_lc').value)+ Math.abs(document.getElementById('c2_d_five_p_lc').value)+ Math.abs(document.getElementById('c2_d_six_p_lc').value))/6;
      
      var c2_determinations= [Math.abs(document.getElementById('c2_d_one_p_lc').value), Math.abs(document.getElementById('c2_d_two_p_lc').value), Math.abs(document.getElementById('c2_d_three_p_lc').value), Math.abs(document.getElementById('c2_d_four_p_lc').value), Math.abs(document.getElementById('c2_d_five_p_lc').value), Math.abs(document.getElementById('c2_d_six_p_lc').value)];
      
      var c2_variance_determinations=0; 
      
      for(var i=0;i<c2_determinations.length; i++){
           c2_variance_determinations += Math.pow((c2_determinations [i]-c2_average_det),2);       
      }

      var c2_determination_sd= Math.sqrt((c2_variance_determinations)/c2_determinations.length);
      var c2_determination_rsd=Math.abs((c2_determination_sd/c2_average_det)*100);
      
      
      document.getElementById('c2_determination_average').value = c2_average_det.toFixed(5);
      document.getElementById('c2_determination_sd').value = c2_determination_sd.toFixed(5);
      document.getElementById('c2_determination_rsd').value = c2_determination_rsd.toFixed(5);

      }



$(document).ready(function(){
      $('.std').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".std").filter(function() {
                return (this.value.length);
            }).length;

      $('.std').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.std_average').val(average_rounded);

      });  

      $('.internal_std_one').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".internal_std_one").filter(function() {
                return (this.value.length);
            }).length;

      $('.internal_std_one').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.internal_std_one_average').val(average_rounded);

      }); 
      $('.internal_std_two').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".internal_std_two").filter(function() {
                return (this.value.length);
            }).length;

      $('.internal_std_two').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.internal_std_two_average').val(average_rounded);

      });
      $('.internal_std_three').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".internal_std_three").filter(function() {
                return (this.value.length);
            }).length;

      $('.internal_std_three').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.internal_std_three_average').val(average_rounded);

      }); 
      $('.internal_std_four').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".internal_std_four").filter(function() {
                return (this.value.length);
            }).length;

      $('.internal_std_four').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.internal_std_four_average').val(average_rounded);

      });  
      $('.ratio_std_one').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".ratio_std_one").filter(function() {
                return (this.value.length);
            }).length;

      $('.ratio_std_one').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.ratio_std_one_average').val(average_rounded);

      });
      $('.ratio_std_two').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".ratio_std_two").filter(function() {
                return (this.value.length);
            }).length;

      $('.ratio_std_two').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.ratio_std_two_average').val(average_rounded);

      }); 
      $('.ratio_std_three').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".ratio_std_three").filter(function() {
                return (this.value.length);
            }).length;

      $('.ratio_std_three').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.ratio_std_three_average').val(average_rounded);

      });
      $('.ratio_std_four').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".ratio_std_four").filter(function() {
                return (this.value.length);
            }).length;

      $('.ratio_std_four').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.ratio_std_four_average').val(average_rounded);

      }); 
      $('.sample_one').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".sample_one").filter(function() {
                return (this.value.length);
            }).length;

      $('.sample_one').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.sample_one_average').val(average_rounded);

      });
      $('.sample_two').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".sample_two").filter(function() {
                return (this.value.length);
            }).length;

      $('.sample_two').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.sample_two_average').val(average_rounded);
             $("#d_two_pkt").val(average_rounded); 

      });
      $('.sample_three').keyup(function() {
         
      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".sample_three").filter(function() {
                return (this.value.length);
            }).length;

      $('.sample_three').each(function() {
          sum += Number($(this).val());
          sum1 = sum.toFixed(5);
          average = sum1 / boxes;
          average_rounded = average.toFixed(5);
      });

            $('.sample_three_average').val(average_rounded);
            $("#d_three_pkt").val(average_rounded); 
      });  
});