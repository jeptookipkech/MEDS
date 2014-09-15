<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reset_Password extends CI_Controller {
    
function Reset_Password()
 {
   parent::__construct();
 }	

    function index(){
        $this->load->view('reset_password_form');    
    }
}
?>