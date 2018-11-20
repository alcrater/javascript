<?php

var app = angular.module('taskapp', []);


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  require('dbconnection.php');

	$sql = "SELECT * FROM todo";

	$checkForTable = $conn->query($sql);

	if (mysqli_num_rows($checkForTable) < 1 ) {

    CREATE TABLE IF NOT EXISTS `todo` (

      `id` int(11) NOT NULL AUTO_INCREMENT,
    
      `task` varchar(200) NOT NULL,
    
      `status` int(11) NOT NULL,
    
      `created_at` int(11) NOT NULL,
    
      PRIMARY KEY (`id`)
    
    );

    $tableCreate = $conn->query($sql);

  }

