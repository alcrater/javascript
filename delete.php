<?php


require_once "dbconnection.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    db();

    global $link;

    $query = "DELETE FROM todo WHERE id = '$id'";

    $delete = mysqli_query($link, $query);

    if($delete){

        echo 'Todo successfully deleted';

    }

}