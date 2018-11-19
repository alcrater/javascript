<?php
// connection to the database
$db_host = 'localhost'; //database is install on php server
$db_user = 'audrey'; //name to log into mysql
$db_password = 'southhills#'; //password to login to mysql
$db_name = 'audrey'; //name of the database within mysql
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

  if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
  }

  $_POST = json_decode(file_get_contents('php://input'), true);
  $delTask = $_POST['task'];
  $del_id = $_POST['task_id'];

  $sql = "DELETE FROM todo WHERE task_id = ('$del_id')";
  
  $result = $conn->query($sql);
?>