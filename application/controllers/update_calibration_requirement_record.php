<?php
class Update_Calibration_Requirement_Record extends CI_Controller {

public function Update_Calibration_Requirement_Record()
{
        parent::__construct();

}

function Update() 
{
    $id = $this->uri->segment(3);
    $data=array();
    $this->load->database();
    $query = $this->db->get_where('cv_requirement_list', array('id' => $id));
    $results=$query->result_array();
    /*
    echo "<pre>";
    print_r($results[0]);
    echo "</pre>";
    die();
    */
    $data['query']=$results[0];
   
    $this->load->view('update_calibration_requirement_view',$data);
    
}
function Submit()
{
    $id = $this->input->post('my_id');
     /*
    echo $id;
     die();
    */
    $this->load->model('update_calibration_requirement_recordmodel');        
	
	if($this->input->post('submit')){
		$this->update_calibration_requirement_recordmodel->Update($id);                
	}
	//redirect('home');
}
}

?>