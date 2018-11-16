<?php


require_once "dbconnection.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = "DELETE FROM todo WHERE id = '$id'";

    $delete = mysql($query);

    if($delete){

        echo 'Todo successfully deleted';

    }

}