<?php
class Crud extends CI_Controller
{
  public function index()
  {
    $data['task_details'] = $this->crud_model->getAllTasks();
    $this->load->view('crud_view', $data);
  }
  public function addTask()
  {
    $this->form_validation->set_rules('name', 'Task Name', 'trim|required');
    $this->form_validation->set_rules('time', 'Task Time', 'trim|required');
    if ($this->form_validation->run() == false) {
      $data_error = [
        'error' => validation_errors()
      ];
      $this->session->set_flashdata($data_error);
    } else {
      $result = $this->crud_model->insertTask([
        'name' => $this->input->post('name'),
        'time' => $this->input->post('time')
      ]);
      if ($result) {
        $this->session->set_flashdata('inserted', 'Your task has been successfully created !');
      }
    }
    redirect('crud');
  }
  public function editTask($id)
  {
    $data['singleTask'] = $this->crud_model->getSingleTask($id);
    $this->load->view('edit_view', $data);
  }

  public function update($id)
  {
    $this->form_validation->set_rules('name', 'Task Name', 'trim|required');
    $this->form_validation->set_rules('time', 'Task Time', 'trim|required');
    if ($this->form_validation->run() == false) {
      $data_error = [
        'error' => validation_errors()
      ];
      $this->session->set_flashdata($data_error);
    } else {
      $result = $this->crud_model->updateTask([
        'name' => $this->input->post('name'),
        'time' => $this->input->post('time')
      ], $id);
      if ($result) {
        $this->session->set_flashdata('updated', 'Your task has been successfully updated !');
      }
    }
    redirect('crud');
  }
  public function deleteTask($id)
  {
    $result = $this->crud_model->deleteItem($id);
    if ($result == true) {
      $this->session->set_flashdata('deleted', 'The Task has been deleted');
    }
    redirect('crud');
  }
}
