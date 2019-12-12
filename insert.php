<?php
require_once "config.php";

if(isset($_POST['submit'])){

 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $qual_name = $_POST['qual_name'];
    $salary = $_POST['salary'];
    $dob= $_POST['dob'];
 

   

 
    $sql = "INSERT INTO employees(fname,lname,qual_name,salary,dob) 
    VALUES('$fname','$lname','$qual_name','$salary','$dob')";
    $stmt = $conn->query($sql);
    
    if($stmt){
        $_SESSION['message'] = 'Record added successfully!';
       header('Location:index.php');
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

  <title>Add Record</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add Employee Records</div>
      <div class="card-body">
        <form action="insert.php"  method="post">
               <div>
               <input type="hidden" name="qual_id" value="<?= $qual_id ?>">
               </div>
                
                <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="fname" name="fname" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="fname">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="text" id="lname" name="lname" class="form-control" placeholder="Last name" required="required" >
                  <label for="lname">Last name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="salary" name="salary" class="form-control" placeholder="Salary" required="required">
              <label for="salary">Salary</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="dob" class="form-control" name="dob" placeholder="Date of Birth" required="required">
                  <label for="dob">Date of Birth</label>
                  </div>
              </div>
            

         

<select name="qual_name" id="qual_id" class="col-md-6-form-label-group" >

<?php

$sql1 = "SELECT * FROM qualification" ;
$stmtt =  $conn->query($sql1);
$num=mysqli_num_rows($stmtt);
WHILE($row=$stmtt->fetch_array()){
 
$qual_id = $row['qual_id'];
$qual_name = $row['qual_name'];
?>


<option value="<?= $qual_name ?>"><?= $qual_name ?></option>


<?php
}
?>
</select>

              </div>
            </div>
          </div>

<input type="submit" name="submit" value="submit" a class="btn btn-primary btn-block" href="index.php"></a>
</form>
</div>
      </div>
    </div>
  </div>
  </div>
    </div>
  </div>
  
    
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>
</html>