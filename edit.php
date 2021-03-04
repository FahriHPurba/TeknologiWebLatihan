<?php


session_start();


require 'config.php';


if (isset($_GET['id'])) {
   $motor = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
}


if(isset($_POST['submit'])){


   $collection->updateOne(
       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
       ['$set' => ['nama' => $_POST['nama'], 'deskripsi' => $_POST['deskripsi'],]]
   );


   $_SESSION['success'] = "Data Motor updated successfully";
   header("Location: index.php");
}


?>


<!DOCTYPE html>
<html>
<head>
   <title>MongoDB Data Motor</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>


<div class="container">
   <h1>Create Data Motor</h1>
   <a href="index.php" class="btn btn-primary">Back</a>


   <form method="POST">
      <div class="form-group">
         <strong>Nama:</strong>
         <input type="text" name="nama" value="<?php echo $motor->nama; ?>" required="" class="form-control" placeholder="Nama">
      </div>
      <div class="form-group">
         <strong>Deskripsi:</strong>
         <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" placeholder="Deskripsi"><?php echo $motor->deskripsi; ?></textarea>
      </div>
      <div class="form-group">
         <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </div>
   </form>
</div>


</body>
</html>