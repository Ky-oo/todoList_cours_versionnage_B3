<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todo list</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <h1 class="text-center">Todo List</h1>
  <div class="container align-content-center mt-5">

    <card class="card shadow rounded d-flex align-items-center p-5">
      <h2 class="text-center">Add a task</h2>

      <form method="POST" action="" class="d-flex flex-column align-items-center">
        <input type="text" name="task" class="mx-5" required>
        <input type="date" name="time" class="m-3" required>
        <button class="btn btn-primary mt-3 btn-sm" type="submit" name="newTask">Add</button>
      </form>

      <h2 class="text-center mt-3">Your task</h2>
      <ul class="list-group list-group-flush">

        <?php foreach ($tasks as $task) { ?>

          <li class="list-group-item d-flex justify-content-between align-items-center">
            <?= $task['done'] ? '<s>' . $task['name'] . '</s>' : $task['name'] ?>

            <form method="get" action="">
              <button class="btn btn-outline-primary btn-sm ms-5" name="idComplete" value="<?php echo $task["id"] ?>">
                Complete
              </button>
            </form>

            <form method="get" action="">
              <button class="btn btn-danger btn-sm ms-2" name="idDelete"
                value="<?php echo $task["id"] . $task["name"] ?>">X</button>
            </form>

            <form method="get" action="./Vue/editTask.php">
              <button class="btn btn-warning btn-sm ms-2" name="idEdit" value="<?php echo $task["id"] ?>">Edit</button>
            </form>

          </li>
        <?php } ?>

      </ul>
    </card>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>