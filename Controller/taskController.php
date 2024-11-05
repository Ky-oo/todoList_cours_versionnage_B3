<?php
use Model\TaskModel;
use GuzzleHttp\Client;

require 'vendor/autoload.php';

$baseUrl = 'http://127.0.0.1:3000';
$client = new Client();

require_once __DIR__ . '/../Model/taskModel.php';
TaskModel::initialize();

if (isset($_POST['task']) && !empty($_POST['task'])) {
  TaskModel::addTask($_POST['task'], $_POST['date']);
}

if (isset($_POST['taskId']) && isset($_POST['taskName'])) {
  TaskModel::editTask($_POST['taskId'], $_POST['taskName']);
}

if (isset($_GET['idDelete'])) {
  TaskModel::deleteTask($client, $baseUrl, '/task/' . explode('-', $_GET['idDelete'])[0]);
}

if (isset($_GET['idComplete'])) {
  TaskModel::completeTask($client, $baseUrl, '/task/complete/' . $_GET['idComplete']);
}

if (isset($_GET['idEdit'])) {
  include __DIR__ . '/../View/editTask.php';
}

if (isset($_GET['idDebug'])) {
  TaskModel::debugTask($_GET['idDebug']);
}

$filterDate = isset($_GET['filterDate']) ? $_GET['filterDate'] : null;
$tasks = TaskModel::getTasks($baseUrl, $client, '/task');

include __DIR__ . '/../View/task.php';
