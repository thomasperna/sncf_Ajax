<?php

 class Ctrl_sncf extends CI_Controller{
     public function index(){
            $this->load->helper('url');
            $this->load->model("Model_Activite");
            $data['lesActivites']=$this->Model_Activite->getAllActivites();
         $this->load->view('v_activite',$data);
     }
     
     public function afficherFormation(){
          //$numero= $this->uri->segment(3);
        $numero =$_GET['numero'];
           $model=$this->load->model("Model_Formation"); 
           $data["lesFormation"] = $this->Model_Formation->getAllFormations($numero);
           $this->load->view('v_formation',$data);
     }
     public function afficherAgent(){
         $code=$_GET['numeroFormation'];
         $model=$this->load->model("Model_Agent");
         $data["lesAgent"]=$this->Model_Agent->getAllAgents($numeroFormation);
         $this->load->view('v_agent',$data);
     }
     
     
 }
