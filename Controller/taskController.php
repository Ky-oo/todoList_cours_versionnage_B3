<?php
require_once __DIR__ . '/../Model/taskModel.php';
TaskModel::initialize();

if (isset($_POST['task']) && !empty($_POST['task'])) {
  TaskModel::addTask($_POST['task'], $_POST['date']);
}

if (isset($_POST['taskId']) && isset($_POST['taskName'])) {
  TaskModel::editTask($_POST['taskId'], $_POST['taskName']);
}

if (isset($_GET['idDelete'])) {
  TaskModel::deleteTask($_GET['idDelete']);
}

if (isset($_GET['idComplete'])) {
  TaskModel::completeTask($_GET['idComplete']);
}

if (isset($_GET['idEdit'])) {
  include __DIR__ . '/../Vue/editTask.php';
}

$tasks = TaskModel::getTasks();
include __DIR__ . '/../Vue/task.php';