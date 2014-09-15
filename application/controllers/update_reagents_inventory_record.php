<?php
class Update_Reagents_Inventory_Record extends CI_Controller {

public function Update_Reagents_Inventory_Record()
{
        parent::__construct();

}

function Update() 
{
    $id = $this->uri->segment(3);
    $data=array();
    $this->load->database();
    $query = $this->db->get_where('reagents_inventory_record', array('id' => $id));
    $results=$query->result_array();
    /*
    echo "<pre>";
    print_r($results[0]);
    echo "</pre>";
    die();
    */
    $data['query']=$results[0];
   
    $this->load->view('update_reagents_inventory_view',$data);
    
}
function Submit()
{
    $id = $this->input->post('my_id');
     /*
    echo $id;
     die();
    */
    $this->load->model('update_reagents_inventory_recordmodel');        
	
	if($this->input->post('submit')){
		$this->update_reagents_inventory_recordmodel->Update($id);                
	}
	//redirect('home');
}
}

?>