<?php
if (!defined('BASEPATH'))	exit('No direct script access allowed');
class Reagents_Report extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$sql = "SELECT DATE_FORMAT(date,'%v/%x') as period
				FROM reagents_inventory_record 
				GROUP BY DATE_FORMAT(date,'%v/%x')
				ORDER BY DATE_FORMAT(date,'%v/%x') asc";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$weeks = array();
		foreach ($results as $result) {
			$weeks[] = $result['period'];
		}
		foreach ($weeks as $week) {
			$in_use = 0;
			$expired = 0;
			$damaged = 0;
			$exhausted = 0;
			

			$sql = "SELECT status as status,id as number
				    FROM reagents_inventory_record 
				    WHERE DATE_FORMAT(date,'%v/%x')='$week'
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
					} else if ($result['status'] == "3") {
						$exhausted = intval($result['number']);
					} 
				}
			}
			$in_use_data[] = $in_use;
			$expired_data[] = $expired;
			$damaged_data[] = $damaged;
			$exhausted_data[] = $exhausted;
			
		}
		$main_array[] = array('name' => 'Registers in Use', 'data' => $in_use_data);
		$main_array[] = array('name' => 'Expired Registers', 'data' => $expired_data);
		$main_array[] = array('name' => 'Damaged Registers', 'data' => $damaged_data);
		$main_array[] = array('name' => 'Exhausted Registers', 'data' => $exhausted_data);
		
		$total_array = json_encode($main_array, JSON_PRETTY_PRINT);
		$data['my_series'] = $total_array;
		$data['categories'] = json_encode($weeks);
		$this -> load -> view('reagents_report_form', $data);
	}

}
?>