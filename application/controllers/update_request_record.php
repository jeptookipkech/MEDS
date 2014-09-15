<?php
class Update_Request_Record extends CI_Controller {

public function Update_Request_Record()
{
        parent::__construct();

}

function Update() 
{
    $id = $this->uri->segment(3);
    $data=array();
    $this->load->database();
    $query = $this->db->get_where('test_request', array('id' => $id));
    $results=$query->result_array();
    /*
    echo "<pre>";
    print_r($results[0]);
    echo "</pre>";
    die();
    */
    $data['query']=$results[0];
   
    $this->load->view('update_request_view',$data);
    
}
function Submit()
{
    $trid = $this->uri->segment(3);
    //$utid = $this->uri->segment(4);
    // $id = $this->input->post('my_id');
     
  /* // echo $id;
    echo $trid;
    echo $utid;
     die();
*/    
      
    $this->load->model('update_requestmodel');        
	
	if($this->input->post('submit')){
		$this->update_requestmodel->Update($trid);                
	}
	//redirect('home');
}
}

?>