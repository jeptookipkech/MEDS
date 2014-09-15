<?php
class Update_Standard_Vial_Card extends CI_Controller {

public function Update_Standard_Vial_Card()
{
        parent::__construct();

}

function Update() 
{
    $id = $this->uri->segment(3);
    $data=array();
    $this->load->database();
    $query = $this->db->get_where('standard_vial_card', array('id' => $id));
    $results=$query->result_array();
    /*
    echo "<pre>";
    print_r($results[0]);
    echo "</pre>";
    die();
    */
    $data['query']=$results[0];
   
    $this->load->view('update_standard_vial_card',$data);
    
}
function Submit()
{
    $id = $this->input->post('my_id');
     /*
    echo $id;
     die();
    */
    $this->load->model('update_standard_vial_card_model');        
	
	if($this->input->post('submit')){
		$this->update_standard_vial_card_model->Update($id);                
	}
	//redirect('home');
}
}

?>