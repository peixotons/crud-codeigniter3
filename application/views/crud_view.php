<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <title>Gerenciador de Tarefas</title>
</head>

<body>
  <div class="mb-4 p-5 bg-primary text-white rounded">
    <h1 class="text-center display-4">Gerenciador de Tarefas</h1>
  </div>
  <div class="container">
    <div class="d-flex justify-content-between border-bottom">
      <h3 style="float: left">All Tasks</h3>
      <a href="#" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Create Task</a>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Nome</th>
          <th class="text-center">Hora</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($task_details as $task) : ?>
          <tr>
            <td class="text-center">
              <?php echo $task->id ?>
            </td>
            <td class="text-center">
              <?php echo $task->name ?>
            </td>
            <td class="text-center">
              <?php echo $task->time ?>h
            </td>
            <td class="text-center">
              <a href="<?php echo base_url(); ?>crud/editTask/<?php echo $task->id ?>" class="btn btn-success">Edit</a>
              <a href="<?php echo base_url(); ?>crud/deleteTask/<?php echo $task->id ?>" class="btn btn-danger">Remove</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?php echo base_url(); ?>crud/addTask" method="post">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" placeholder="Enter the name" class="form-control">
            </div>

            <div class="form-group">
              <label for="time">Tempo</label>
              <input type="text" name="time" placeholder="Enter the time" class="form-control">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" name="insert" value="Add Task" class="btn btn-info">
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php if ($this->session->flashdata('error')) : ?>
    <div class="text-center bg-danger">
      <?php echo $this->session->flashdata('error'); ?>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('inserted')) : ?>
    <div class="text-center bg-success">
      <?php echo $this->session->flashdata('inserted'); ?>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('updated')) : ?>
    <div class="text-center bg-success">
      <?php echo $this->session->flashdata('updated'); ?>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('deleted')) : ?>
    <div class="text-center bg-success">
      <?php echo $this->session->flashdata('deleted'); ?>
    </div>
  <?php endif; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>