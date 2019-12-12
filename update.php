<?php
require_once('config.php');


    $user_id =$_GET['id'] ?? '';
   
    $sql=" SELECT * FROM employees WHERE id = '$user_id'";
    $stmt =$conn->query($sql);

        if($row = $stmt->fetch_assoc()){
            $fname=$row['fname'];
            $lname=$row['lname'];
            $qual_name=$row['qual_name'];
            $salary=$row['salary'];

    }




if(isset($_POST['update']) && isset($_POST['user_id'])){
    $sql="UPDATE employees SET fname=?,lname= ?, qual_name=?, salary=? WHERE id = ? ";
         $stmt = $conn->prepare($sql);
         $stmt->bind_param('ssssi', $fn, $ln, $qun, $sa, $id);
         $fn=$_POST['fname'];
         $ln=$_POST['lname'];
         $qun=$_POST['qual_name'];
         $sa=$_POST['salary'];
         $id=$_POST['user_id'];
         $stmt->execute();

if ($stmt){
          $_SESSION['message'] = 'Record updated successfully!';
          header('location:index.php');
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
      <div class="card-header">Update Employee Records</div>
      <div class="card-body">
        <form action="update.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="hidden" name="user_id" value="<?= $user_id  ?>">
                  <input type="text" id="fname" name="fname" class="form-control" value="<?= $fname ?>">
                  <label for="fname">First Name</label>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lname" name="lname" class="form-control" value="<?= $lname ?>">
                  <label for="l">Last Name</label>
                </div>
              </div>
            </div>
          </div>

          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="qual_name"  name="qual_name" class="form-control" value="<?= $qual_name ?>">
                  <label for="qual_name">Qualification</label>
                </div>
              </div>
              
            

          <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="salary" name="salary" class="form-control" value="<?= $salary ?>">
                  <label for="salary">Salary</label>
                </div>
              </div>
            </div>
          </div>
          <input type="submit" name="update" value="update" a class="btn btn-primary btn-block" href="index.php"></a>
          <button class="btn-block"><a href="index.php">Cancel</a></button> 
        </form>
        
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

</body>
</html>