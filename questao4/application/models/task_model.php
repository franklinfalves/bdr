<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model
{

  public function read($id = null){
       if(!empty($id)){
          $query = $this->db->query("SELECT id, title, description, priority  FROM task WHERE id = $id");
       }else{
          $query = $this->db->query("SELECT id, title, description, priority  FROM task ORDER BY priority ASC");
       }
       return $query->result_object();

   }

   public function insert($data){
      $this->title       = $data['title']; // please read the below note
      $this->description = $data['description'];
      $this->priority    = $data['priority'];

      if($this->db->insert('task',$this)){    
           return 'Data is inserted successfully';
      }else{
          return "Error has occured";
      }

   }

   public function update($id,$data){
      $this->title       = $data['title'];
      $this->description = $data['description'];
      $this->priority    = $data['priority'];

      $result = $this->db->update('task',$this,array('id' => $id));

      if($result){
        return "Data is updated successfully";
      }else{
        return "Error has occurred";
      }
    }

    public function delete($id){
      $result = $this->db->query("DELETE FROM task WHERE id = $id");

      if($result){
        return "Data is deleted successfully";
      }else{
        return "Error has occurred";
      }

   }
}