<?php
    include 'database.php';
    $id=$_POST['id'];
    $title=$_POST['title'];
    $description=$_POST['description'];

    $sql="UPDATE notes SET Title='$title', Description='$description' WHERE id=$id";

    $result=mysqli_query($conn, $sql);

    if($result){
        header("Location: ./index.php");
    }

?>