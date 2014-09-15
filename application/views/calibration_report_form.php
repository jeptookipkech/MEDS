<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<title>Equipment Calibration Reports</title>
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="http://code.highcharts.com/highcharts.js"></script>
		<script src="http://code.highcharts.com/modules/exporting.js"></script>-->
		
		<script src="<?php echo base_url().'js/jquery-1.9.1.js';?>"></script>
		<script src="<?php echo base_url().'highcharts/js/highcharts.js';?>"></script>
		<script src="<?php echo base_url().'highcharts/js/highcharts-more.js';?>"></script>
		<script>
			$(function() {
				$('#container').highcharts({
					chart: {
						type: 'bar'
					},
					
					title : {
						text : 'Weekly Temperature Summary',
						x : -20 //center
					},
					subtitle : {
						text : 'Source: MEDS.com',
						x : -20
					},

					xAxis : {
						title : {
							text : 'Weeks'
						},
						categories : <?php echo $categories;?>
					},
					yAxis : {
						title : {
							text : 'Number of Equipment'
						},
						plotLines : [{
							value : 0,
							width : 1,
							color : '#808080'
						}]
					},
					tooltip : {
						valueSuffix : '°C'
					},
					legend : {
						layout : 'vertical',
						align : 'right',
						verticalAlign : 'middle',
						borderWidth : 0
					},
					series :<?php echo $my_series;?>
				});
			});

		</script>
	</head>
	<body>
		<div id="container" style="width:100%; height:400px;"></div>
	</body>
</html>