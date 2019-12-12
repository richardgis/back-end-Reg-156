<?php
require_once('config.php');



$user_id =$_GET['id'] ?? '' ;
if(isset($_POST['delete']) && isset($_POST['user_id'])){
        $sql="DELETE FROM employees WHERE id = ?";
        $stmt =$conn->prepare($sql);
        $stmt->bind_param('i',$id);
        $id= $_POST['user_id'];
        $stmt->execute();

if($stmt){
      $_SESSION['message'] = 'Record deleted successfully!';
      header('location: index.php');
      return;
}
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Update</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5">
<div class="card-header"><p style="color:red">Are you sure you want to delete user with Id </p><?=  $user_id   ?></div>

    <form action="delete.php" method="post">
    <input type="hidden" name="user_id" value="<?= $user_id ?>">
    <input type="submit" name="delete" value="delete" a class="btn btn-primary btn-block" href="index.php"></a>
    <button class="btn btn-block"><a href="index.php">Cancel</a></button>
    
    </form>
</body> 
</html>