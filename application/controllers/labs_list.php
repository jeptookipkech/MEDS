<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Labs_List extends CI_Controller {
    
function Labs_List()
 {
   parent::__construct();
 }	

function Get(){
    $this->load->model('labs_listmodel');
    
    $data['query'] = 
        $this->labs_listmodel->labs_list_get();
	
        $this->load->view('labs_list_view',$data);
    
}
}
?>