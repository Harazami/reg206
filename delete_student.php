<?php
if(empty(trim($_GET["did"]))){
// URL doesn't contain id parameter. Redirect to error page
// header("location: error.php");
exit();
}
else{
// Include database connection file
require_once "dbconnect.php";
$stu_id = $_GET["did"];
$sql="DELETE FROM student_api WHERE StudentID = $stu_id";
$result = mysqli_query($conn,$sql);
if (!$result){
die('Error: ' . mysqli_error($conn));
}
else {
header("location: table_admin.php");
}
mysqli_close($conn);
}
?>