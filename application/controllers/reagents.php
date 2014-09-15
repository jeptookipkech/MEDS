<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reagents extends CI_Controller {

    function __construct() {
        parent::__construct();
    } 

 	function save(){
       $this->load->model('reagents_model');

        if ($this->input->post('submit')) {
            $this->reagents_model->process_tests_reagents();
        }                
    }
}