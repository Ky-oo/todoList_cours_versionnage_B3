<body>
  <div class="container mt-5">
    <h1 class="text-center">Edit Task</h1>
    <form method="POST" action="./" class="d-flex flex-column align-items-center">
      <input type="hidden" name="taskId" value="<?php echo $_GET['idEdit']; ?>">
      <div class="mb-3">
        <label for="taskName" class="form-label">Task Name</label>
        <input type="text" class="form-control" id="taskName" name="taskName" required>
      </div>
      <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
  </div>
</body>