<?php
// Include database connection file
require_once "dbconnect.php";

// Delete data
$sql="DELETE FROM student_api WHERE student_api, StudentID = 9999999999";
$result=mysqli_query($conn, $sql);

if (!$result){
  die('Error: ' . mysqli_error($conn));
}
else {
  echo "1 record deleted";
}

mysqli_close($conn);
?>

