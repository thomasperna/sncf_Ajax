<?php
class Model_Agents extends CI_Model{
    function getAllAgents($numeroFormation){
    $sql = $this->db->query("SELECT prenom,nom FROM agent, inscription WHERE Agent.code = inscription.codeAgent and numeroFormation='".$numeroFormation."'");
    $tab=array();
         foreach ($sql->result()as $row){
             $tab[]=$row;
         }
       return $tab;
    }
}