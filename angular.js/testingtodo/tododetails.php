<?php



require_once "dbconnection.php";

if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "SELECT todoTitle FROM todo WHERE id = '$id'";

    $result = mysql_query($query);

    if(mysql_num_rows($result)==1){

        $row = mysql_fetch_array($result);

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