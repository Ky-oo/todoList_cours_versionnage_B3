<!DOCTYPE html>
<html lang="en">

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
    <card class="card shadow rounded d-flex align-items-center">
      <h2 class="text-center">Add a task</h2>
      <input type="text" class="mx-5">
      <button class="btn btn-primary mt-3 mx-5 btn-sm">Add</button>
      <h2 class="text-center mt-3">Your task</h2>
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Task 1
          <button class="btn btn-danger btn-sm ms-5">Delete</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Task 2
          <button class="btn btn-danger btn-sm ms-5">Delete</button>
        </li>
    </card>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>