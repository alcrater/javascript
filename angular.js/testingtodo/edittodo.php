<?php




require_once 'dbconnection.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = "SELECT todoTitle FROM todo WHERE id = '$id'";

    $result = mysql_query($query);

    if(mysql_num_rows($result)==1){

        $row=mysql_fetch_array($result);

        if($row){

            $title = $row['todoTitle'];

         



            echo "

                <h2>Edit Todo</h2>

                

            <form action='edit.php?id=$id' method='post'>

            <p>Title</p>

             <input type='text' name='title' value='$title'>

           
             <br>

             <input type='submit' name='submit' value='edit'>

            </form>

            ";

        }

    }else{

        echo "nothing on list";

    }





    if(isset($_POST['submit'])){

        $title = $_POST['title'];

      

        db();

        $query = "UPDATE todo SET todoTitle = '$title'  WHERE id = '$id'";

        $insertEdited = mysql_query( $query);

        if($insertEdited){

            echo "successfully updated";

        }

        else{

            echo mysql_error($link);

        }

    }





}

