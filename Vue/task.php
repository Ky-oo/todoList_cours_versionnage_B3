<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todo list</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f3f4f6;
      font-family: 'Montserrat', sans-serif;
      color: #333;
    }

    h1,
    h2 {
      font-weight: bold;
    }

    h1 {
      color: #5a67d8;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
    }

    .card {
      background-color: #ffffff;
      border: none;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }

    .btn {
      border-radius: 12px;
      padding: 12px 20px;
      font-size: 1rem;
    }

    .btn-primary {
      background-color: #5a67d8;
      border-color: #5a67d8;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #434db4;
    }

    .btn-outline-primary {
      border-color: #5a67d8;
      color: #5a67d8;
    }

    .btn-outline-primary:hover {
      background-color: #5a67d8;
      color: white;
    }

    input,
    label {
      font-size: 1rem;
    }

    .task-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      background-color: #f7fafc;
      margin-bottom: 10px;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }

    .task-item:hover {
      background-color: #edf2f7;
    }

    .task-name {
      font-weight: 600;
    }

    .task-date {
      font-size: 0.875rem;
      color: #6b7280;
    }

    .btn-group button {
      border-radius: 8px;
      font-size: 0.875rem;
      padding: 8px 12px;
    }

    .completed-task s {
      color: #6b7280;
    }

    .add-task-form,
    .filter-task-form {
      background-color: #edf2f7;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 30px;
    }

    .add-task-form input,
    .filter-task-form input {
      border-radius: 8px;
    }

    .task-actions form {
      display: inline-block;
    }

    .task-actions button {
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="text-center mb-4">Todo List</h1>

    <!-- Formulaire d'ajout de tâche -->
    <div class="add-task-form card p-4">
      <h2 class="mb-4">Ajouter une tâche</h2>
      <form method="POST" action="" class="d-flex flex-column align-items-center">
        <div class="mb-3 w-100">
          <input type="text" name="task" class="form-control" placeholder="Nom de la tâche" required>
        </div>
        <div class="mb-3 w-100">
          <label for="date" class="form-label">Date limite</label>
          <input type="date" name="date" class="form-control" required>
        </div>
        <button class="btn btn-primary w-100" type="submit" name="newTask">Ajouter</button>
      </form>
    </div>

    <!-- Formulaire de filtrage -->
    <div class="filter-task-form card p-4">
      <h2 class="mb-4">Filtrer par date</h2>
      <form method="GET" action="" class="d-flex flex-column align-items-center">
        <div class="mb-3 w-100">
          <label for="filterDate" class="form-label">Sélectionner une date</label>
          <input type="date" name="filterDate" class="form-control">
        </div>
        <button class="btn btn-outline-primary w-100" type="submit">Filtrer</button>
      </form>
    </div>

    <!-- Liste des tâches -->
    <div class="card shadow rounded p-4">
      <h2 class="text-center mb-4">Vos tâches</h2>
      <ul class="list-unstyled">

        <?php foreach ($tasks as $task) { ?>
          <li class="task-item">
            <div class="task-info">
              <span class="task-name"><?= $task['done'] ? '<s>' . $task['name'] . '</s>' : $task['name'] ?></span>
              <br>
              <span class="task-date"><?= $task['date'] ?></span>
            </div>
            <div class="task-actions">
              <form method="get" action="">
                <button class="btn btn-outline-success btn-sm" name="idComplete"
                  value="<?php echo $task["id"] ?>">Compléter</button>
              </form>
              <form method="get" action="">
                <button class="btn btn-outline-danger btn-sm ms-2" name="idDelete"
                  value="<?php echo $task["id"] ?>">Supprimer</button>
              </form>
              <form method="get" action="">
                <button class="btn btn-outline-warning btn-sm ms-2" name="idEdit"
                  value="<?php echo $task["id"] ?>">Éditer</button>
              </form>
            </div>
          </li>
        <?php } ?>

      </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>