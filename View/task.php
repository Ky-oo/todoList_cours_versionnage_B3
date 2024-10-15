<body>
  <div class="container my-5">
    <h1 class="text-center mb-4">Todo List</h1>
    <div class="card shadow rounded p-4">
      <h2 class="text-center mb-4">Add a Task</h2>
      <form method="POST" action="" class="d-flex flex-column align-items-center">
        <div class="mb-3 w-100">
          <input type="text" name="task" class="form-control" placeholder="Task name" required>
        </div>
        <div class="mb-3 w-100">
          <label for="date" class="form-label">Due Date</label>
          <input type="date" name="date" class="form-control" required>
        </div>
        <button class="btn btn-primary w-100" type="submit" name="newTask">Add</button>
      </form>
    </div>

    <div class="card shadow rounded mt-5 p-4">
      <h2 class="text-center mb-4">Filter Tasks by Date</h2>
      <form method="GET" action="" class="d-flex flex-column align-items-center">
        <div class="mb-3 w-100">
          <label for="filterDate" class="form-label">Select Date</label>
          <input type="date" name="filterDate" class="form-control">
        </div>
        <button class="btn btn-secondary w-100" type="submit">Filter</button>
      </form>
    </div>

    <div class="card shadow rounded mt-5 p-4">
      <h2 class="text-center mb-4">Your Tasks</h2>
      <ul class="list-group list-group-flush">

        <?php foreach ($tasks as $task) { ?>
          <li class="list-group-item task-item">
            <?= $task['done'] ? '<s>' . $task['name'] . " " . $task['date'] . '</s>' : $task['name'] . " " . $task['date'] ?>
            <div>
              <form method="get" action="" class="d-inline">
                <button class="btn btn-outline-success btn-sm" name="idComplete"
                  value="<?php echo $task["id"] ?>">Complete</button>
              </form>
              <form method="get" action="" class="d-inline">
                <button class="btn btn-outline-danger btn-sm ms-2" name="idDelete"
                  value="<?php echo $task["id"] . $task["name"] ?>">Delete</button>
              </form>
              <form method="get" action="" class="d-inline">
                <button class="btn btn-outline-warning btn-sm ms-2" name="idEdit"
                  value="<?php echo $task["id"] ?>">Edit</button>
              </form>
            </div>
          </li>
        <?php } ?>

      </ul>
    </div>
  </div>
</body>