<?php

namespace Model;

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

  public static function deleteTask($client, $baseUrl, $request)
  {
    var_dump($baseUrl . $request);
    $client->request('delete', $baseUrl . $request);
  }

  public static function completeTask($client, $baseUrl, $request)
  {
    $client->request('put', $baseUrl . $request);
  }

  public static function getTasks($baseUrl, $client, $request)
  {
    $response = $client->request('GET', $baseUrl . $request);
    $data = json_decode($response->getBody(), true);

    return $data;
  }

  public static function editTask($taskId, $taskName)
  {
    foreach ($_SESSION['tasks'] as $key => $task) {
      if ($task['id'] == $taskId) {
        $_SESSION['tasks'][$key]['name'] = $taskName;
      }
    }
  }


  public static function debugTask($taskId)
  {
    foreach ($_SESSION['tasks'] as $key => $task) {
      if ($task['id'] == $taskId) {
        var_dump($_SESSION['tasks'][$key]);
      }
    }
  }
}