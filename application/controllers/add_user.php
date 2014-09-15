<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_User extends CI_Controller {
function __construct()
 {
   parent::__construct();
 }
function index(){
    $this->load->view('new_user_form');
    $this->load->helper(array('form'));
}

function Save(){
    $this->load->model('new_usermodel');        
	
    if($this->input->post('submit')){
        $this->new_usermodel->process();                
    }
    redirect('user_accounts/Get');
    }	
}
?>