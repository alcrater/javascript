<?php

require_once 'dbconnection.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];

    db();

    global $link;

    $query = "SELECT todoTitle FROM todo WHERE id = '$id'";

    $result = mysqli_query($link, $query);

    if(mysqli_num_rows($result)==1){

        $row=mysqli_fetch_array($result);

        if($row){

            $title = $row['todoTitle'];

             echo "

                <h2>Edit List</h2>

                

            <form action='edittodo.php?id=$id' method='post'>

            <p>Title</p>

             <input type='text' name='title' value='$title'>

             <input type='submit' name='submit' value='edit'>

            </form>

            ";

        }

    }else{

        echo "no todo";

    }





    if(isset($_POST['submit'])){

        $title = $_POST['title'];

        db();

        $query = "UPDATE todo SET todoTitle = '$title' WHERE id = '$id'";

        $insertEdited = mysqli_query($link, $query);

        if($insertEdited){

            echo "successfully updated";

        }

        else{

            echo mysqli_error($link);

        }

    }





}