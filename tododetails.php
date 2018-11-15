<?php



require_once "dbconnection.php";

if(isset($_GET['id'])) {

    $id = $_GET['id'];

    db();

    global $link;

    $query = "SELECT todoTitle FROM todo WHERE id = '$id'";

    $result = mysqli_query($link, $query);

    if(mysqli_num_rows($result)==1){

        $row = mysqli_fetch_array($result);

        if($row){

            $title = $row['todoTitle'];

                     
            echo "

            <h2>$title</h2>

               ";

        }

    }else{

        echo 'no todo';

    }

}