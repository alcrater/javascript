<?php

require_once 'dbconnection.php'; // The mysql database connection script

if(isset($_GET['item'])){

	$item = $mysqli->real_escape_string($_GET['item']);

	$status = "0";

	
	$query="INSERT INTO todo(item,status)  VALUES ('$item', '$status', )";

	$result = $mysqli->query($query);



	$result = $mysqli->affected_rows;



	echo $json_response = json_encode($result);

	}

?>