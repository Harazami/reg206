<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta charset="UTF-8">
<title> Admin Login </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

</head>
<body>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<div class="container">
<nav class="navbar navbar-light bg-primary text-center">
<span class="navbar-brand mb-2 h2 text-center">
Administrator Login
  </span>
</nav>
      <form name="frmlogin"  method="post" action="login.php">
      <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <p> </p>

        <p> User :
          <input type="text"   id="Username" required name="Username" placeholder="Username" class="form-control">
        </p>
        <p> Password :
          <input type="password"   id="Password" required name="Password" placeholder="Password" class="form-control">
        </p>
        <p>
          <button type="submit" class="btn btn-info">Login</button>
          &nbsp;&nbsp;
          <button type="reset" class="btn btn-info">Reset</button>
          <br>
          <div class="container">
          <input type="button" onClick="javascript:history.go(-1)" value="Back" class="btn btn-info">
          </div>
        </p>
      </div>
      </div></div></form>
</body>
</html>