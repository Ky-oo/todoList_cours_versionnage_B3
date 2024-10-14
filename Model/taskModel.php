<?php
session_start();

class TaskModel
{
  public static function initialize()
  {
    if (empty($_SESSION['tasks'])) {
      $_SESSION['tasks'] = [];
      $_SESSION['id'] = 0;
    }
  }

  public static function addTask($taskName, $date)
  {
    $_SESSION['tasks'][] = ["name" => $taskName, "date" => $date, "done" => false, "id" => $_SESSION['id']++];
  }

  public static function deleteTask($taskId)
  {
    foreach ($_SESSION['tasks'] as $key => $task) {
      if ($task['id'] . $task['name'] == $taskId) {
        unset($_SESSION['tasks'][$key]);
      }
    }
  }

  public static function completeTask($taskId)
  {
    foreach ($_SESSION['tasks'] as $key => $task) {
      if ($task['id'] == $taskId) {
        $_SESSION['tasks'][$key]['done'] = !$_SESSION['tasks'][$key]['done'];
      }
    }
  }

  public static function getTasks()
  {
    return $_SESSION['tasks'];
  }

  public static function editTask($taskId, $taskName)
  {
    foreach ($_SESSION['tasks'] as $key => $task) {
      if ($task['id'] == $taskId) {
        $_SESSION['tasks'][$key]['name'] = $taskName;
      }
    }
  }
}