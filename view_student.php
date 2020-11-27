<!DOCTYPE html>
<html>
<head>
    <title> View Student </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<?php
// Include database connection file
require_once "dbconnect.php";

$dept_id = $_GET['did'];

$sql="SELECT FirstName , LastName, GPAX FROM student_api WHERE StudentID = $dept_id";
$result = mysqli_query($conn,$sql);

?>



<?php
while($row = mysqli_fetch_assoc($result)) {
    $stu_name = $row["FirstName"];
    $stu_last = $row["LastName"];
    $stu_gpax = $row["GPAX"];
}
?>


<div class="container">
<nav class="navbar navbar-light bg-primary text-center">
<span class="navbar-brand mb-2 h2 text-center">
    Student Data
  </span>
</nav>
</div>

<div class="container">
<div class="jumbotron jumbotron-fluid">

<div class="container">
    <label for=""> StudentID: <?= $dept_id ?> </label> <br/>
</div>
<div class="container">
    <label for=""> First Name: <?= $stu_name ?> </label> <br/>
</div>
<div class="container">
    <label for=""> Last Name: <?= $stu_last ?> </label> <br/>
</div>
<div class="container">
    <label for=""> GPAX: <?= $stu_gpax ?> </label>
</div>    
</div>
</div>
<br>
<div class="container">
    <input type="button" onClick="javascript:history.go(-1)" value="Back" class="btn btn-info">
</div>
    </body>
</html>