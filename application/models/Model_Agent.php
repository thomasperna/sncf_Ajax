<?php
class Model_Agent extends CI_Model{
    
    
  public function GetAllAgents($numeroFormation){
       
    
      $sql = $this->db->query("SELECT prenom,nom FROM agent, inscription WHERE Agent.code = inscription.codeAgent and numeroFormation='".$numeroFormation."'");
      return $sql->result();
       
   } 
    
}



