<?php

class Uniformity_of_content extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function worksheet() {
        $data['labref'] = $this->uri->segment(3);
        $data['settings_view'] = "uniformity_of_content_v";
        $this->base_params($data);
    }

            function uploadSpace(){
        
        $data['test_id']= $this->uri->segment(4);
        $data['labref'] = $this->uri->segment(3);
       
        $data['settings_view'] = "uoc_upload_v"; 
         $data['error'] = "";  
         $this->base_params($data);
    }
    
    function getDoStatus() {
        $labref = $this->uri->segment(3);
        $analyst_id = $this->session->userdata('user_id');
        $this->db->where('lab_ref_no', $labref);
        $this->db->where('test_id', 26);
        $this->db->where('analyst_id', $analyst_id);
        $query = $this->db->get('sample_issuance')->result();
        return $result = $query[0]->do_count;
    }

    function updateSampleIssuance() {
        $do_status = $this->getDoStatus() + '1';
        $labref = $this->uri->segment(3);
        $test_id = $this->uri->segment(4);
        $analyst_id = $this->session->userdata('user_id');
        $this->db->where('lab_ref_no', $labref);
        $this->db->where('test_id', $test_id);
        $this->db->where('analyst_id', $analyst_id);
        $this->db->update('sample_issuance', array('do_count' => $do_status));
    }

    public function save() {


        $labref = $this->uri->segment(3);
        $this->do_upload();

        $this->updateSampleIssuance();
        $this->updateTestIssuanceStatus();
       // $this->updateSampleSummary();
        $this->post_posting();
        $this->updatepHCOADetails($labref);
        $this->save_test();
         $test_id=  $this->uri->segment(4);
        $this->updateUploadStatus($labref, $test_id);
               redirect('analyst_controller');

    }
    
    function do_upload() {
           
        $labref = $this->uri->segment(3);
        $target= 'workbooks/'.$labref.'/'.$labref.'.xlsx';
        $filename = $target;
        if(file_exists($filename)){
            unlink($filename);
        }

            $config['upload_path'] = "workbooks/".$labref;
            $config['allowed_types'] = 'xls|xlsx';


            $this->load->library('upload', $config);
            

            if (!$this->upload->do_upload('worksheet')) {
                 $data['test_id']=$this->uri->segment(4);
                $data['labref'] = $this->uri->segment(3);
                $data['error'] = $this->upload->display_errors();

                $data['settings_view'] = 'uoc_upload_v';
                $this->base_params($data);
            } else {
                $this->readexcel();
            }
        
    }
    
         public function readexcel() {
        $labref = $this->uri->segment(3);
        $max_row_id = $this->getpHRepeatStatus($labref);
        (int) $new_status = (int) $max_row_id[0]->repeat_status + 1;
        $analyst_id = $this->session->userdata('user_id');
     
          $target= 'workbooks/'.$labref.'/'.$labref.'.xlsx';
        if (!file_exists("workbooks/" .$labref.'/'.$labref.'.xlsx')) {
            $data['error'] = 'You have uploaded an INVALID FILE or WORKSHEET!';
               $data['test_id']= $this->uri->segment(4);
            $data['labref'] = $this->uri->segment(3);
            $data['settings_view'] = 'uoc_upload_v';
            $this->base_params($data);
        } else {

            
            $objReader = new PHPExcel_Reader_Excel2007();
            $path = $target;
            $objPHPExcel = $objReader->load($path);

            $objWorksheet = $objPHPExcel->setActiveSheetIndexbyName('uniformity of content');
           
            if($this->checkIfExistsData($labref) > 0){
           $B4 = $objWorksheet->getCell('B6')->getValue();
            }else{
           $B4 = $objWorksheet->getCell('B5')->getValue();
  
            }
            
            if(\is_null($B4)){
                
            $data['error'] = 'The expected viscosity value was not found in cell B5 or B6!';
            $data['test_id']= $this->uri->segment(4);
            $data['labref'] = $this->uri->segment(3);
            $data['settings_view'] = 'uoc_upload_v';
            $this->base_params($data);
            }else{
            
                 $post= array(
                'labref' => $labref, 
                'u_o_c' => $B4,
                'remarks' => '',
                'component' => 0,
                'analyst_id' => $analyst_id,
                'repeat_status' => $new_status
                    );      
        
      
            $this->db->insert('uniformity_of_content', $post); 
            
                $this->db->where('test_id', 26);
                $this->db->where('labref', $labref);
                $this->db->update('coa_body', array('determined'=>$B4));
            }
            
    } 
        }

    function checkIfExistsData($labref){
       $query=  $this->db
               ->where('labref',$labref)
               ->get('uniformity_of_content')
               ->num_rows();
       if($query > 0){
           return 1;
       }else{
           return 0;
       }
    }
    
    

    function updateTestIssuanceStatus() {
        $labref = $this->uri->segment(3);

        $analyst_id = $this->session->userdata('user_id');
        $done_status = '1';
        $data = array(
            'done_status' => $done_status
        );
        $this->db->where('lab_ref_no', $labref);
        $this->db->where('test_id', 26);
        $this->db->where('analyst_id', $analyst_id);
        $this->db->update('sample_issuance', $data);

        $this->comparetToDecide($labref);
    }

    function post_posting() {
        $labref = $this->uri->segment(3);
        $posts = array(
            'labref' => $labref,
            'component' => 'uniformity_of_content',
            'component_no' => '0',
            'test_name' => 'viscosity',
            'date_time' => date('d-m-Y H:i:s:a')
        );
        $this->db->insert('posting_status', $posts);
    }

    function check_repeat_status() {
        $this->db->select_max('repeat_status');
        $this->db->where('labref', $this->uri->segment(3));
        $this->db->where('test_name', 'uniformity_of_content');
        $query = $this->db->get('tests_done');
        return $result = $query->result();
    }

    function save_test() {
        $labref = $this->uri->segment(3);
        $priority = $this->findPriority($labref);
        $urgency = $priority[0]->urgency;
        $data1 = $this->getAnalystId();
        $supervisor_id = $data1[0]->supervisor_id;

        $data = $this->check_repeat_status();
        $r_status = $data[0]->repeat_status;
        $new_r_status = $r_status + 1;
        $analyst_id = $this->session->userdata('user_id');

        $final_test_done = array(
            'labref' => $labref,
            'test_name' => 'uniformity_of_content',
            'repeat_status' => $new_r_status,
            'supervisor_id' => $supervisor_id,
            'test_subject' => 'uniformity_of_content_r',
            'analyst_id' => $analyst_id,
            'priority' => $urgency
        );
        $this->db->insert('tests_done', $final_test_done);
    }

    function updateSampleSummary() {
        $labref = $this->uri->segment(3);
        $data = array(
            'determined' => $this->input->post('sampleph'),
            
        );
        $this->db->where('test_id', 26);
        $this->db->where('labref', $labref);
        $this->db->update('coa_body', $data);
    }

    function getAnalystId() {
        $analyst_id = $this->session->userdata('user_id');
        $this->db->select('supervisor_id');
        $this->db->where('analyst_id', $analyst_id);
        $query = $this->db->get('analyst_supervisor');
        return $result = $query->result();
        // print_r($result);
    }

    public function getDisintegrationTestRepeatStatus($labref) {
        $this->db->select_max('repeat_status');
        $this->db->where('labref', $labref);
        $query = $this->db->get('uniformity_of_content');
        return $row = $query->result();
    }

    public function uniformity_of_content_r() {
        $data['labref'] = $labref = $this->uri->segment(3);
        $data['r'] = $r = $this->uri->segment(4);
        $data['c'] = $c = $this->uri->segment(5);
        $module_name = $this->uri->segment(1);
        $data['done'] = $this->checkApproval($module_name, $labref, $r, $c);
        $username = $this->getAnalystData();
        $new = $username[0]->analyst_name;
        //$username=$user[0]->username;
        $this->session->set_userdata('mail_name', $new);
        $labref = $this->uri->segment(3);
        $module = $this->uri->segment(2);
        $this->session->set_userdata(array('labref' => $labref, 'module' => $module));
         $data['uoc'] = $this->getUOCData($labref, $r);
        $data['date_time'] = $this->getDate($labref, $r, $c);
        $data['settings_view'] = 'uniformity_of_content_r_v';
        $this->base_params($data);
    }
    
       function getUOCData($labref, $r) {
        return $this->db
                        ->where('labref', $labref)
                        ->where('repeat_status', $r)
                        ->get('uniformity_of_content')
                        ->result();
    }

    function getAnalystData() {
        $supervisor_id = $this->session->userdata('user_id');
        $url = $this->uri->segment(3);
        $data1 = $this->getAnalystId_1($url);
        foreach ($data1 as $data) {
            $analyst_id = $data->analyst_id;
            $this->db->where('analyst_id', $analyst_id);
            $this->db->where('supervisor_id', $supervisor_id);
            $query = $this->db->get('analyst_supervisor');
            $result = $query->result();
        }
        return $result;
        //print_r($result);
    }

    function getAnalystId_1($url = '') {
        $supervisor_id = $this->session->userdata('user_id');
        $this->db->select('analyst_id');
        $this->db->where('supervisor_id', $supervisor_id);
        $this->db->where('labref', $url);
        $query = $this->db->get('tests_done');
        return $result = $query->result();
    }

    function getUsername() {
        $this->db->select('analyst_name');
        $this->db->where('supervisor_id', $this->session->userdata('user_id'));
        $query = $this->db->get('analyst_supervisor');
        return $result = $query->result();
    }

    public function approve_data() {
        $labref = $this->uri->segment(3);
        $r = $this->uri->segment(4);
        $c = $this->uri->segment(5);
        $supervisor_id = $this->session->userdata('user_id');
        $supervisor = $this->getSupervisorName();
        //print_r($supervisor);
        $supervisor_name = $supervisor[0]->fname . " " . $supervisor[0]->lname;
        $analyst = $this->getAnalystName();
        $analyst_name = $analyst[0]->analyst_name;
        $priority = $this->findPriority($labref);
        $urgency = $priority[0]->urgency;
        $approve_data = array(
            'supervisor_name' => $supervisor_name,
            'analyst_name' => $analyst_name,
            'labref' => $labref,
            'repeat_status' => $r,
            'test_name' => 'uniformity_of_content',
            'component_no' => $c,
            'test_product' => 'demo',
            'supervisor_id' => $supervisor_id,
            'user_type' => '5',
            'status' => '1',
            'priority' => $urgency
        );
        $this->db->insert('supervisor_approvals', $approve_data);

        $this->db->where('labref', $labref);
        $this->db->where('repeat_status', $r);
        $this->db->where('component_no', $c);
        $this->db->where('test_name', 'uniformity_of_content');
        $this->db->update('tests_done', array('approval_status' => '1'));


        $this->compareToDecide($labref);

        redirect('supervisors/home/' . $this->session->userdata('lab'));
    }

    public function approve() {
        $labref = $this->uri->segment(3);
        $r = $this->uri->segment(4);
        $c = $this->uri->segment(5);
        $status = '1';
        $this->db->select('status');
        $this->db->where('status', $status);
        $this->db->where('labref', $labref);
        $this->db->where('repeat_status', $r);
        $this->db->where('component_no', $c);
        $this->db->where('test_name', 'uniformity_of_content');

        $query = $this->db->get('supervisor_approvals');
        if ($query->num_rows() > 0) {
            echo 'Already Approved';
        } else {
            $this->approve_data();
        }
    }

    public function getSupervisorName() {
        $supervisor_id = $this->session->userdata('user_id');
        $this->db->where('id', $supervisor_id);
        $query = $this->db->get('user');
        return $result = $query->result();
        //print_r($result);
    }

    public function getAnalystName() {
        $supervisor_id = $this->session->userdata('user_id');
        $this->db->where('supervisor_id', $supervisor_id);
        $query = $this->db->get('analyst_supervisor');
        return $result = $query->result();
        //print_r($result);
    }

    function findPriority($labref) {
        $this->db->select('urgency');
        $this->db->where('request_id', $labref);
        $query = $this->db->get('request');
        $result = $query->result();
        return $result;
    }

    public function getpHRepeatStatus($labref) {
        $this->db->select_max('repeat_status');
        $this->db->where('labref', $labref);
        $query = $this->db->get('uniformity_of_content');
        return $row = $query->result();
        // print_r($row);  
    }

    function repeats($labref) {
        echo json_encode(
                $this->db
                        ->select('repeat_status')
                        ->where('labref', $labref)
                        ->get('uniformity_of_content')
                        ->result()
        );
    }

    public function base_params($data) {
        $labref=  $this->uri->segment(3);
        $data['title'] = "Uniformit Of Contents - ".$labref;
        $data['content_view'] = "settings_v";
        $this->load->view('template', $data);
    }
    
   function find_user(){
       $headers = apache_request_headers();
 
if (!isset($headers['Authorization'])){
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: NTLM');
    exit;
}
 
$auth = $headers['Authorization'];
 
if (substr($auth,0,5) == 'NTLM ') {
    $msg = base64_decode(substr($auth, 5));
    if (substr($msg, 0, 8) != "NTLMSSP\x00")
        die('error header not recognised');
 
    if ($msg[8] == "\x01") {
        $msg2 = "NTLMSSP\x00\x02\x00\x00\x00".
            "\x00\x00\x00\x00". // target name len/alloc
            "\x00\x00\x00\x00". // target name offset
            "\x01\x02\x81\x00". // flags
            "\x00\x00\x00\x00\x00\x00\x00\x00". // challenge
            "\x00\x00\x00\x00\x00\x00\x00\x00". // context
            "\x00\x00\x00\x00\x00\x00\x00\x00"; // target info len/alloc/offset
 
        header('HTTP/1.1 401 Unauthorized');
        header('WWW-Authenticate: NTLM '.trim(base64_encode($msg2)));
        exit;
    }
    else if ($msg[8] == "\x03") {
        function get_msg_str($msg, $start, $unicode = true) {
            $len = (ord($msg[$start+1]) * 256) + ord($msg[$start]);
            $off = (ord($msg[$start+5]) * 256) + ord($msg[$start+4]);
            if ($unicode){
                return str_replace("\0", '', substr($msg, $off, $len));
            } else{
                return substr($msg, $off, $len);
            }
        }
        $user = get_msg_str($msg, 36);
        $domain = get_msg_str($msg, 28);
        $workstation = get_msg_str($msg, 44);
 
        print "You are $user from $domain/$workstation";
    }
}
   }
   
   function f2(){
       $nw = new COM("WScript.Network");
print "username0: " . $nw->username . "<br><br>";

$computername = $nw->computername;
print "computername: $computername<br>";
$owmi = new COM("winmgmts:\\\\$computername\\root\\cimv2");
$comp = $owmi->get("win32_computersystem.name='$computername'" );
$user=  explode("\\", $comp->UserName);
$path = "C:\\Users\\" . $user[1]."\\Downloads\\MELTING_point.xlsx";
unlink($path);
echo 'File Deleted';
   }

}
