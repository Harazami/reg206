<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="decorate.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg - 206</title>
</head>
<body>
<!-- link -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Other Script -->

<!-- Pic and Detail -->
<center><img src="pic/mfu.png" class="img-fluid" alt="mfulogo"></center>

<form method="POST" action="add_code.php">
<div class="container">

<!-- Navbar -->
<div id="bb">
  <label> REGISTRAR DIVISION, MAE FAH LUANG UNIVERSITY </lavel>
</div>
<div id="bb">
  <label id="00"> Add your more information </label>
</div>

<nav class="navbar navbar-light bg-primary text-center">
<span class="navbar-brand mb-2 h2 text-center">
    Your more information
  </span>
</nav>

<!-- Jumbotron Detail and check box -->
<div class="jumbotron jumbotron-fluid">
<div class="container">
<label for=""> Prefix: </label>
    <input type="text" name="prefix" class="form-control" placeholder="MR. or MISS.">
</div>
<div class="container">
    <label for=""> Student ID: </label>
    <input type="text" name="stuid" class="form-control" placeholder="Student ID">
</div>
<div class="container">
    <label>First Name: </label>
    <input type="text" name="stuf" class="form-control" placeholder="First name">
</div>
<div class="container">
    <label> Last Name: </label>
    <input type="text" name="stul" class="form-control" placeholder="Last name">
</div>
<div class="container">
    <label> GPAX: </label>
    <input type="text" name="gpax" class="form-control" placeholder="GPAX">
</div>
  <div class="container">
    <label for=""> School: </label>
    <input class="form-control" type="text" placeholder="School of" name="school">
  </div>
  <div class="container">
    <label for=""> Program: </label>
    <input class="form-control" type="text" placeholder="Program" name="program">
  </div>
  <div class="container">
    <label for=""> Advisor: </label>
    <input class="form-control" type="text" placeholder="Advisor" name="advisor">
  </div>
  <div class="container">
    <label for=""> Dean: </label>
    <input class="form-control" type="text" placeholder="Dean" name="dean">
  </div>
  <div class="container">
    <label for=""> Status: </label>
    <input class="form-control" type="text" placeholder="Status" name="status">
  </div>
</br>
<div class="container">
<input type="submit" value="Enter" class="btn btn-info">
<input type="Reset" value = "Reset Data" class="btn btn-info">
</div>
</div>

<!-- Text Nav -->



<!-- 4 Table -->


<!-- Sinature jumbotron -->


<!-- 2 Button Save and Reset -->

</div>
</form>

<input type="button" onClick="javascript:history.go(-1)" value="Back" class="btn btn-info">

</body>
</html>