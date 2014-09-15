$(document).ready(function(){

    alert(1);
  $('.retention_time').keyup(function() {
    
    var sum = 0;
    var sum_rounded = 0;
    var average = 0;
    var average_rounded = 0;
    var standard_deviation= 0;
    var variance= 0;
    var rsd= 0;

    boxes = $(".retention_time").filter(function() {
        return (this.value.length);
    }).length;
    $('.retention_time').each(function(i,elem) {
       numbers = Number($(this).val());
        sum_rounded = sum.toFixed(5);
        average = sum1 / boxes;
        average_rounded = answer.toFixed(5);

     k =$(elem).val(); 
     variance += Math.pow((k - average_rounded),2);
       
    });
    standard_deviation=Math.sqrt((variance)/boxes); 
    rsd=(standard_deviation/average_rounded)*100;

    //$('input#utotals').val(sum1);
    $('.average_retention_time').val(average_rounded);
    $('.rsd_retention_time').val(rsd);
    $('.standard_dev_retention_time').val(standard_deviation);

});