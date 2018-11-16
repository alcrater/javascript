<?php

require_once 'dbconnection.php';//bring the database connection file in

if(isset($_POST['submit'])) {

    $title = $_POST['todoTitle'];  


    // check strings

    function check($string){

        $string  = htmlspecialchars($string);

        $string = strip_tags($string);

        $string = trim($string);

        $string = stripslashes($string);

        return $string;

    }



    // check for empty title

    if(empty($title)){

        $error  = true;

        $titleErrorMsg = "Title cannot be empty";

    }

        // connect to database

    db();

    global $link;

    $query = "INSERT INTO todo(todoTitle) VALUES ('$title')";

    $insertTodo = mysql($link, $query);

    if($insertTodo){

        echo "You added a new todo";

    }else{

        echo mysql($link);

    }



}

?>



<html>

<head>

    <title>Create My Task Details</title>

</head>

<body>

<h1>Create Todo List</h1>

<button type="submit"><a href="todo.php">View all Todo</a></button>

<form method="post" action="create.php">

    <p>Item Task Name: </p>

    <input name="todoTitle" type="text">

    <br>

    <input type="submit" name="submit" value="submit">

</form>

</body>

</html>