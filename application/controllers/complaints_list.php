<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Complaints_List extends CI_Controller {

 function __construct(){
  parent::__construct();
 }
 function index(){
  $this->load->view('complaints_list');
 }
 function records(){
  $this->load->model('complaints_listmodel');
  $data['query']= $this->complaints_listmodel->get_record_list();
  $this->load->view('complaints_list', $data);
 }
 function get_unassigned(){
  $this->load->model('complaints_listmodel');
  $data['query']= $this->complaints_listmodel->unassigned_complaints();
  $this->load->view('complaints_list_unaddressed', $data);
 }
}
?>