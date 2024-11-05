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
      <div class="row">

        <?php foreach ($tasks as $task) { ?>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <h5 class="card-title"><?= $task['done'] ? '<s>' . $task['title'] . '</s>' : $task['title'] ?></h5>
                <p class="card-text"><?= $task['dueDate'] ?></p>
                <div class="d-flex justify-content-center">
                  <form method="get" action="" class="d-inline">
                    <button class="btn btn-outline-success btn-sm" name="idComplete"
                      value="<?php echo $task["id"] ?>">Complete</button>
                  </form>
                  <form method="get" action="" class="d-inline ms-2">
                    <button class="btn btn-outline-danger btn-sm" name="idDelete"
                      value="<?php echo $task["id"] . "-" . $task["title"] ?>">Delete</button>
                  </form>
                  <form method="get" action="" class="d-inline ms-2">
                    <button class="btn btn-outline-warning btn-sm" name="idEdit"
                      value="<?php echo $task["id"] ?>">Edit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
</body>