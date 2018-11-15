<?php

  // Setting up the Database Connection

  $db_host = 'localhost'; //Database is install on PHP server

  $db_user = 'audrey'; //name to login to MySQL

  $db_password = 'southhills#'; //password to login to MySQL

  $db_name = 'audrey'; //name of the database within MySQL

  $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

  if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

  }



  $_POST = json_decode(file_get_contents('php://input'), true);

  $newTask = $_POST['task'];

  //Create Query to Select All user data from fm_users Table

  $sql = "INSERT INTO todolist (task_name) VALUES ('$newTask')";

  //Execute the SQL and Return Array of Values to $result

  $result = $conn->query($sql);

?>