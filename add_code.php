<?php
// Include database connection file
require_once "dbconnect.php";

// Get data from input form
$prefix=$_POST['prefix'];
$stuid=$_POST['stuid'];
$stuname=$_POST['stuf'];
$stulast=$_POST['stul'];
$GPAX=$_POST['gpax'];
$school=$_POST['school'];
$program=$_POST['program'];
$advisor=$_POST['advisor'];
$dean=$_POST['dean'];
$status=$_POST['status'];

// Insert data
$sql="INSERT INTO student_api(StudentID, Prefix, FirstName, LastName, GPAX, School, Program, Advisor, Dean, Statuss) VALUES ($stuid, '$prefix', '$stuname', '$stulast', $GPAX, '$school', '$program', '$advisor', '$dean', '$status')";
$result=mysqli_query($conn, $sql);

if (!$result){
  die('Error: ' . mysqli_error($conn));
}
else {
  header("location: table_user.php");
}
mysqli_close($conn);

?>