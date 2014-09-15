$(document).ready(function() {
    /* Init DataTables */
    $('#list').dataTable({
     "sScrollY":"270px",
     "sScrollX":"100%"
    });
    $("#balance_id").on('change',function(){
      var equipmentbalance=$(this).find(":selected").data("equipmentbalance");
      $("#equipmentbalance").val(equipmentbalance);
      
    });
     $("#equipment_balance").on('change',function(){
      var idnumber=$(this).find(":selected").data("idnumber");
      $("#idnumber").val(idnumber);
      
    });
     $("#equipment_id").on('change',function(){
      var equipmentbalance=$(this).find(":selected").data("equipmentbalance");
      $("#equipmentbalance").val(equipmentbalance);
      
    });
     $("#standard_description_one").on('change',function(){
      var stdlotnumber=$(this).find(":selected").data("stdlotnumber");
      var stdrefnumber=$(this).find(":selected").data("stdrefnumber");
      $("#stdlotnumber").val(stdlotnumber);
      $("#stdrefnumber").val(stdrefnumber);
      
    });
     $("#make_id").on('change',function(){
      var equipmentmake=$(this).find(":selected").data("equipmentmake");
      $("#equipmentmake").val(equipmentmake);
      
    });
      $("#equipment_make").on('change',function(){
      var equipmentid=$(this).find(":selected").data("equipmentid");
      $("#equipmentid").val(equipmentid);
    });
    
    $("#column_name").on('change',function(){
      var dimensions=$(this).find(":selected").data("dimensions");
      var serial_number=$(this).find(":selected").data("serialnumber");
      var manufacturer=$(this).find(":selected").data("manufacturer");
      $("#column_dimensions").val(dimensions);
      $("#column_serial_number").val(serial_number);
      $("#column_manufacturer").val(manufacturer);
    });
  });