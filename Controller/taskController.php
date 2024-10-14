<?php
include '.\Model\taskModel.php';

TaskModel::initialize();

if (isset($_POST['task']) && !empty($_POST['task'])) {
  TaskModel::addTask($_POST['task']);
}

if (isset($_GET['idDelete'])) {
  TaskModel::deleteTask($_GET['idDelete']);
}

if (isset($_GET['idComplete'])) {
  TaskModel::completeTask($_GET['idComplete']);
}

$tasks = TaskModel::getTasks();
