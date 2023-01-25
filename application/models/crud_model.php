<?php
class Crud_model extends CI_Model
{
  public function getAllTasks()
  {
    $query = $this->db->get('tarefas');
    if ($query) {
      return $query->result();
    }
  }
  public function insertTask($data)
  {
    $query = $this->db->insert('tarefas', $data);
    if ($query) {
      return true;
    } else {
      return false;
    }
  }
  public function getSingleTask($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('tarefas');
    if ($query) {
      return $query->row();
    }
  }
  public function updateTask($data, $id)
  {
    $this->db->where('id', $id);
    $query = $this->db->update('tarefas', $data);
    if ($query) {
      return true;
    } else {
      return false;
    }
  }
  public function deleteItem($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->delete('tarefas');
    if ($query) {
      return true;
    } else {
      return false;
    }
  }
}
