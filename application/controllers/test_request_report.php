<?php
if (!defined('BASEPATH'))	exit('No direct script access allowed');
class Test_Request_Report extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//x-axis query
		$sql = "SELECT DATE_FORMAT(date_time,'%m/%d/%x') as period
				FROM test_request 
				GROUP BY DATE_FORMAT(date_time,'%m/%d/%x')
				ORDER BY DATE_FORMAT(date_time,'%m/%d/%x') asc";
				// echo $sql;die;
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$weeks = array();
		foreach ($results as $result) {
			$weeks[] = $result['period'];
		}
		foreach ($weeks as $week) {
			$unassigned = 0;			
			$assigned = 0;
			$completed = 0;
			
		//y axis query
			$sql = "SELECT request_status as request_status,id as number
				    FROM test_request
				    WHERE DATE_FORMAT(date_time,'%m/%d/%x')='$week'
				    GROUP BY id";
				// echo $sql;die;

			$query = $this -> db -> query($sql);
			$results = $query -> result_array();
			// convert to int and pass it to variables
			if ($results) {
				foreach ($results as $result) {
					if ($result['request_status'] == "") {
						$unassigned = intval($result['number']);
					} else if ($result['request_status'] == "1") {
						$assigned = intval($result['number']);
					} else if ($result['request_status'] == "2") {
						$completed = intval($result['number']);
					}  
				}
			}
			//change variable to array
			$unassigned_data[] = $unassigned;			
			$assigned_data[] = $assigned;
			$completed_data[] = $completed;
			
		}
		
		$main_array[] = array('name' => 'Unassigned Analysis Test Requests', 'data' => $unassigned_data);
		$main_array[] = array('name' => 'Assigned Analysis Test Requests', 'data' => $assigned_data);
		$main_array[] = array('name' => 'Completed Analysis Test Requests', 'data' => $completed_data);
		
		//push to pdf
		$total_array = json_encode($main_array, JSON_PRETTY_PRINT);
		$data['my_series'] = $total_array;
		$data['categories'] = json_encode($weeks);
		$this -> load -> view('test_request_report_form', $data);
	}

}
?>