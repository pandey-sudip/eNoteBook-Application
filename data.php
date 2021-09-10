<?php
    include 'database.php';

    $title=$_POST['title'];
    $description=$_POST['description'];

    $sql="INSERT INTO notes(Title, Description)VALUES('$title', '$description')";

    $result=mysqli_query($conn, $sql);

    if($result){
        header("Location: ./index.php");
    }

?>