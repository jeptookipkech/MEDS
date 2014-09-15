<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Print_Label extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function generate_label(){
        $data['title'] = "Generate Label";
        // $data['wetchemistry'] = Tests::getWetChemistry();
        // $data['microbiologicalanalysis'] = Tests::getMicrobiologicalAnalysis();
        // $data['medicaldevices'] = Tests::getMedicalDevices();
        $data['trid'] = $this -> uri -> segment(3);
        $data['description'] = $this -> uri -> segment(4);
        // $data['tests'] = Request_details::getTestHistory($data['trid']);
       
        $this->load->view("label_generate_view", $data);
    }

    public function getLabelPdf_standalone(){

        //DOMpdf initialization
        require_once("dompdf/doc/dompdf/dompdf_config.inc.php");
        $this->load->helper('dompdf', 'file');
        $this->load->helper('file');

        //DOMpdf configuration
        $dompdf = new DOMPDF();
        $dompdf->set_paper(array(0, 0, 316.8, 432));

        //Initialize Array to hold tests
        $tests = [];

        //Get array of all uri segments
        $t_array = $this -> uri -> segment_array();

        /*Loop through said array above, if index of array element is greater than 4 (where tests uri start)
        push element into tests[] array */
        
        foreach ($t_array as $key => $value) {
            if ($key > 4) {
                array_push($tests, $value);
            }    
        }

        //Variable assignment
        $saveTo = './labels';
        $data['tests'] = $tests;
        $data['trid'] = $this-> uri -> segment(3);
        $trid = $data['trid'];
        // $data['prints_no'] = $this -> uri -> segment(4); 
        $data['description'] = $this -> uri -> segment(4);
        $labelname = "Label" . $data['trid'] . ".pdf";
        $data['settings_view'] = "label_view_standalone";
        $this->base_params($data);
        $html = $this->load->view('label_view_standalone', $data, TRUE);
        $dompdf->load_html($html);
        $dompdf->render();
        write_file($saveTo . "/" . $labelname, $dompdf->output());
        $this -> setLabelStatus($trid, $saveTo, $labelname);
        //$this -> output -> enable_profiler(TRUE);
    }

    public function getLabelPdf() {

        require_once("application/helpers/dompdf/dompdf_config.inc.php");

        $this->load->helper('dompdf', 'file');
        $this->load->helper('file');

        $dompdf = new DOMPDF();
        $dompdf->set_paper(array(0, 0, 316.8, 432));

        $saveTo = './labels';
        $data['trid'] = $this->uri->segment(3);
        $trid = $data['trid'];
        // $data['prints_no'] = $this->uri->segment(4);
        $data['description'] = $this -> uri -> segment(4);
        $labelname = "Label" . $data['trid'] . ".pdf";
        $data['infos'] = Request::getSample($data['trid']);
        $data['settings_view'] = "label_view2";
        $this->base_params($data);
        $html = $this->load->view('label_view2', $data, TRUE);

        $dompdf->load_html($html);
        $dompdf->render();
        write_file($saveTo . "/" . $labelname, $dompdf->output());
        $this -> setLabelStatus($trid, $saveTo, $labelname);
    }
}