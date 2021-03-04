<?php


session_start();


if(isset($_POST['submit'])){


   require 'config.php';


   $insertOneResult = $collection->insertOne([
       'nama' => $_POST['nama'],
       'deskripsi' => $_POST['deskripsi'],
   ]);


   $_SESSION['success'] = "Motor created successfully";
   header("Location: index.php");
}


?>


<!DOCTYPE html>
<html>
<head>
   <title>MongoDB Motor</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>


<div class="container">
   <h1>Create Data Motor</h1>
   <a href="index.php" class="btn btn-primary">Back</a>


   <form method="POST">
      <div class="form-group">
         <strong>Nama:</strong>
         <input type="text" name="nama" required="" class="form-control" placeholder="Nama">
      </div>
      <div class="form-group">
         <strong>Deskripsi:</strong>
         <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" placeholder="Deskripsi"></textarea>
      </div>
      <div class="form-group">
         <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </div>
   </form>
</div>


</body>
</html>