<?php
if (!defined('BASEPATH'))	exit('No direct script access allowed');
class Calibration_Report extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$sql = "SELECT DATE_FORMAT(timestamp,'%v/%x') as period
				FROM maintenance 
				GROUP BY DATE_FORMAT(timestamp,'%v/%x')
				ORDER BY DATE_FORMAT(timestamp,'%v/%x') asc";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$weeks = array();
		foreach ($results as $result) {
			$weeks[] = $result['period'];
		}
		foreach ($weeks as $week) {
			$in_use = 0;			
			$damaged = 0;
			$scheduled = 0;
			

			$sql = "SELECT status as status,id as number
				    FROM maintenance 
				    WHERE DATE_FORMAT(timestamp,'%v/%x')='$week'
				    GROUP BY id";
			$query = $this -> db -> query($sql);
			$results = $query -> result_array();
			if ($results) {
				foreach ($results as $result) {
					if ($result['status'] == "0") {
						$in_use = intval($result['number']);
					} else if ($result['status'] == "1") {
						$expired = intval($result['number']);
					} else if ($result['status'] == "2") {
						$damaged = intval($result['number']);
					}  
				}
			}
			$in_use_data[] = $in_use;			
			$damaged_data[] = $damaged;
			$scheduled_data[] = $scheduled;
			
		}
		$main_array[] = array('name' => 'Equipment In Use', 'data' => $in_use_data);
		$main_array[] = array('name' => 'Withdrawn/Damaged Equipment', 'data' => $damaged_data);
		$main_array[] = array('name' => 'Equipment  Schedule for Calibration/Maintenance', 'data' => $scheduled_data);
		
		$total_array = json_encode($main_array, JSON_PRETTY_PRINT);
		$data['my_series'] = $total_array;
		$data['categories'] = json_encode($weeks);
		$this -> load -> view('calibration_report_form', $data);
	}

}
?>