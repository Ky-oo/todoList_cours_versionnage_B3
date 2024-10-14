<?php
session_start();

if (empty($_SESSION['tasks'])) {
  $_SESSION['tasks'] = [];
  $_SESSION['id'] = 0;
}

if (isset($_POST['task']) && !empty($_POST['task'])) {
  $_SESSION['tasks'][] = ["name" => $_POST['task'], "done" => false, "id" => $_SESSION['id']++];
}

if (isset($_GET['idDelete'])) {
  foreach ($_SESSION['tasks'] as $key => $task) {
    if ($task['id'] . $task['name'] == $_GET['idDelete']) {
      unset($_SESSION['tasks'][$key]);
    }
  }
}

if (isset($_GET['idComplete'])) {
  foreach ($_SESSION['tasks'] as $key => $task) {
    if ($task['id'] == $_GET['idComplete']) {
      $_SESSION['tasks'][$key]['done'] = !$_SESSION['tasks'][$key]['done'];
    }
  }
}
?>

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
        <input type="text" name="task" class="mx-5">
        <button class="btn btn-primary mt-3 btn-sm" type="submit" name="newTask">Add</button>
      </form>

      <h2 class="text-center mt-3">Your task</h2>

      <ul class="list-group list-group-flush">
        <?php foreach ($_SESSION['tasks'] as $task) { ?>

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
          </li>

        <?php }
        ; ?>
      </ul>

    </card>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>