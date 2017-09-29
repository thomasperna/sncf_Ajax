<?php
class Model_Formation extends CI_Model
{
public function getAllFormations($numero){
         $sql = $this->db->query("select * from formation where numeroActivite=".$numero);
         $tab=array();
         foreach ($sql->result()as $row){
             $tab[]=$row;
         }
       return $tab;
    }
}