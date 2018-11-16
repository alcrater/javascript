<?php

require_once("dbconnection.php");

?>
<html>

<head>

    <title>My To Do Items</title>

</head>

<body>

<h2>

    Next on my agenda

</h2>

<p><a href="create.php">add todo</a></p>

<?php

$query  = "SELECT id, todoTitle FROM todo";

$result = mysql_query($query);

//check if there's any data inside the table

if(mysql_num_rows($result) >= 1){

    while($row = mysql_fetch_array($result)){

        $id = $row['id'];

        $title = $row['todoTitle'];

        ?>



    <ul>

        <li><a href="tododetails.php?id=<?php echo $id?>"><?php echo $title ?></a></li> 

        <button type="button"><a href="edittodo.php?id=<?php echo $id?>">Edit</a></button>

        <button type="button"><a href="delete.php?id=<?php echo $id?>">Delete</a></button>

    </ul>

<?php

    }

}



?>





</body>

</html>