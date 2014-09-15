<?php
if (!defined('BASEPATH'))	exit('No direct script access allowed');
class Complaints_Report extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$sql = "SELECT DATE_FORMAT(timestamp,'%v/%x') as period
				FROM complaints 
				GROUP BY DATE_FORMAT(timestamp,'%v/%x')
				ORDER BY DATE_FORMAT(timestamp,'%v/%x') asc";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$weeks = array();
		foreach ($results as $result) {
			$weeks[] = $result['period'];
		}
		foreach ($weeks as $week) {
			$unaddressed = 0;			
			$addressed = 0;
			
			

			$sql = "SELECT status as status,cid as number
				    FROM complaints 
				    WHERE DATE_FORMAT(timestamp,'%v/%x')='$week'
				    GROUP BY cid";
			$query = $this -> db -> query($sql);
			$results = $query -> result_array();
			if ($results) {
				foreach ($results as $result) {
					if ($result['status'] == "0") {
						$unaddressed = intval($result['number']);
					} else if ($result['status'] == "1") {
						$addressed = intval($result['number']);
					}  
				}
			}
			$unaddressed_data[] = $unaddressed;					
			$addressed_data[] = $addressed;
			
		}
		$main_array[] = array('name' => 'Unaddressed Complaints', 'data' => $unaddressed_data);		
		$main_array[] = array('name' => 'Addressed Complaints', 'data' => $addressed_data);
		
		$total_array = json_encode($main_array, JSON_PRETTY_PRINT);
		$data['my_series'] = $total_array;
		$data['categories'] = json_encode($weeks);
		$this -> load -> view('complaints_report_view', $data);
	}

}
?>