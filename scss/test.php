require_once "config.php";

if(isset($_POST['submit'])){

  $qual_id = $_POST['qual_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $qualification = $_POST['qualification'];
    $salary = $_POST['salary'];
    $dob= $_POST['dob'];
    

 
    $sql = "INSERT INTO employees(first_name,last_name,qualification,salary,dob,date_joint) 
    VALUES('$first_name','$last_name','$qualification','$salary','$dob',NOW())";
    $stmt = $conn->query($sql);
    
    if($stmt){
        $_SESSION['message'] = 'Record added successfully!';
        header('Location:index.php');
        return;
    }
}

?>