<!doctype html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>eNoteBook Application</title>
  </head>
  <body>
      <?php
        include 'database.php';
        $id=$_GET['id'];
        $sql="SELECT * FROM notes WHERE id=$id";
        $result=mysqli_query($conn, $sql);

        if($result){
            $row=mysqli_fetch_assoc($result);
            $title=$row['Title'];
            $description=$row['Description'];
            
        }
      
      ?>
      <div class="container my-4 w-50 m-auto">
        <h1 class="text-center my-2">Update Your Note</h1>
        <form action="editaction.php" method="POST" autocomplete="off" class="my-4">
            <div class="form-group">
                <input type="text" name="title" class="form-control" id="" required placeholder="Title" value="<?php echo $title; ?>">
            </div><br>
            <div class="form-group">
                <textarea name="description" id="" cols="30" rows="5" required class="form-control" placeholder="Description"><?php echo $description; ?></textarea>
            </div><br>
            <input type="hidden" name="id" id="" value="<?php echo $id; ?>">
            <button class="btn btn-success">Update To Note</button>
        </form>
       
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>