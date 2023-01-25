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
    <h1 class="text-center">Edit Task</h1>

    <form action="<?php echo base_url(); ?>crud/update/<?php echo $singleTask->id; ?>" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="enter the task name" class="form-control" value="<?php echo $singleTask->name; ?>">
      </div>
      <div class="form-group">
        <label for="time">Time</label>
        <input type="text" name="time" placeholder="enter the task time" class="form-control" value="<?php echo $singleTask->time; ?>">
      </div>
      <input type="submit" name="edit" value="Update" class="btn btn-primary">
    </form>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>