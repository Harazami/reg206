<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Information for Student </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <div class="container">
<?php

    // Include database connection file
    require_once "dbconnect.php";

    // Database query.
    $sql = "SELECT StudentID, FirstName, LastName FROM student_api ORDER BY StudentID";
    $result = mysqli_query($conn,$sql);
?>
<h2>Student Information</h2>
<form method="POST" action="reg206.php">
	<input type="Submit" value="Add Drop Information" class="btn btn-primary" >
</form>
<br>
<form method="POST" action="admin_login.php" target="blank">
	<input type="submit" value="Login as administrator" class="btn btn-info">
</form>
<br>

  
<table border="1">
<tr bgcolor = "tomato">
	<th>Student ID</th>
	<th>Student Name</th>
	<th>Operation</th>
	
</tr>

To find your Student ID please press "Ctrl + F" then fill your ID.
<!-- <form action="view_student.php" method="GET" id="idsearch">-->
<!-- Finder -->

<!--<label for="gsearch">Search ID:</label>
<input type="search" id="idsearch" name="idsearch">
<input type="submit" value="Find" id="idsearch" name="idsearch">
</form>-->
<?php

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$stu_id = $row["StudentID"];
		$stu_name = $row["FirstName"];
		$stu_last = $row["LastName"];
		
		?>
		

		<tr>
			<td><?= $stu_id ?></td>
			<td><?= $stu_name ?>&nbsp; <?= $stu_last ?></td>
			<td>
				<a href="view_student.php?did=<?= $stu_id ?>" class="btn btn-secondary"
					role="button">View</a>
				<a href=" form_print.php?did=<?= $stu_id ?>" class="btn btn-info"
					role="button" onClick="return confirm('Do you want to go to fulfil your information?')"> Register </a>
			</td>
			
		</tr>
	<?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</div>

</table>
	</div>
	
	<script type="text/javascript">
function google() {
window.location = "http://google.com";
}
</script>

</body>
</html>