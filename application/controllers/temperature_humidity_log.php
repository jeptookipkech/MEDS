<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Temperature_Humidity_Log extends CI_Controller{

	function Temperature_Humidity_Log(){

		parent ::__construct();
	}

	function Logs(){

		$id = $this->uri->segment(3);

		$this->load->model('temperature_humidity_logmodel');
		$this->temperature_humidity_logmodel->log($id);
	}
function Logs_Samples(){

		$id = $this->uri->segment(3);

		$this->load->model('temperature_humidity_logmodel');
		$this->temperature_humidity_logmodel->log_sample($id);
	}
function Logs_Instrument(){

		$id = $this->uri->segment(3);

		$this->load->model('temperature_humidity_logmodel');
		$this->temperature_humidity_logmodel->log_instrument($id);
	}

}
?> 