<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>MongoDB Data Motor</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>


<div class="container">
<h1>MongoDB Data Motor</h1>


<a href="create.php" class="btn btn-success">Add Motor</a>


<?php


   if(isset($_SESSION['success'])){
      echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
   }


?>


<table class="table table-borderd">
   <tr>
      <th>Nama</th>
      <th>Deskripsi</th>
      <th>Action</th>
   </tr>
   <?php


      require 'config.php';


      $motors = $collection->find([]);


      foreach($motors as $motor) {
         echo "<tr>";
         echo "<td>".$motor->nama."</td>";
         echo "<td>".$motor->deskripsi."</td>";
         echo "<td>";
         echo "<a href='edit.php?id=".$motor->_id."' class='btn btn-primary'>Edit</a>";
         echo "<a href='delete.php?id=".$motor->_id."' class='btn btn-danger'>Delete</a>";
         echo "</td>";
         echo "</tr>";
      };


   ?>
</table>
</div>


</body>
</html>