<?php

require_once 'dbconnection.php'; // The mysql database connection script

if(isset($_GET['itemID'])){

	$itemID = $mysqli->real_escape_string($_GET['itemID']);



	$query="DELETE FROM todo WHERE id='$itemID'";

	$result = $mysqli->query($query);



	$result = $mysqli->affected_rows;



	echo $json_response = json_encode($result);

}

?>