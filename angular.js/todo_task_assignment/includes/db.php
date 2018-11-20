<?php
//Setting up the database connection

$db_host = 'localhost'; //database is install on php server
$db_user = 'audrey'; //name to log into mysql
$db_password = 'southhills#'; //password to login to mysql
$db_name = 'audrey'; //name of the database within mysql
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

$_POST = json_decode(file_get_contents('ajax/addItem'), true);
  $newTask = $_POST['item'];
  //Create Query to Select All user data from fm_users Table
  $sql = "INSERT INTO todo (item) VALUES ('$newTask')";
  //Execute the SQL and Return Array of Values to $result
  $result = $conn->query($sql);
?>




