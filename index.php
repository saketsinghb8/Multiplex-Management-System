<?php
include('db.php');
include('main.php');
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multiplex</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="main.css" />
  <body background="https://superrepo.org/static/images/fanart/original/script.artwork.downloader.mp.jpg">
</head>
<body>

<div class="container">
  <form class="form-horizontal"  action="index.php"  method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email"  name="user" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
<?php
if(isset($_POST['user'])&&isset($_POST['pass'])){
  $username=$_POST['user'];
  $password=$_POST['pass'];
  $result=mysqli_query($con,"select * from employee where email_id='$username' and e_pass='$password'");
  if(mysqli_num_rows($result)>0){
  session_start();
  $_SESSION['email_id']=$username;
   header('location:function.php');
  }
  else{
  header('location:index.php');
  }
}
?>


