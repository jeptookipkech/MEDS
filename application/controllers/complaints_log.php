<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Complaints_Log extends CI_Controller{

	function Complaints_Log(){

		parent ::__construct();
	}

	function Logs(){

		$id = $this->uri->segment(3);

		$this->load->model('complaints_logmodel');
		$this->complaints_logmodel->log($id);
	}

}
?> 