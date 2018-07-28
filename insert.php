<?php
 include('db.php');
 ?>

 <html>
 <head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  href="main.css" />
 </head>
 <body>
<?php
include('main.php');
if(empty($_SESSION['email_id'])){
header('location:index.php');}
 ?>
<div class="container">
  <form action="insert.php?movie=<?php echo $_GET['movie'];?>"  method="post">
    <div class="form-group" >
      <label for="usr">Name:</label>
      <input type="text" class="form-control" placeholder="enter name" name="cname">
    </div>
     <div class="form-group">
      <label for="usr">Phone No</label>
      <input type="text" class="form-control"  placeholder="enter phone number" name="cphone">
    </div>
     <div class="form-group">
      <label for="usr">Email</label>
      <input type="text" class="form-control" placeholder="enter email"  name="cemail">
    </div>
         <div class="form-group">
      <input type="hidden" class="form-control" value="<?php echo $_GET['movie'];  ?>"  name="cmovie">
    </div>
      <button type="submit" class="btn btn-success">Submit</button>
      
  </form>
  
 </body>
 </html>

 <?php
if(isset($_POST['cname'])&&isset($_POST['cphone'])&&isset($_POST['cemail'])){
	$name=$_POST['cname'];
	$phone=$_POST['cphone'];
	$email=$_POST['cemail'];
	$movie=$_GET['movie'];
     $result=mysqli_query($con,"insert into customer(customer_name,phone_no,customer_email,movie) values('$name',$phone,'$email','$movie')");
     if($result){
     	echo "<script>alert('Inserted');  window.location='movies.php';</script>";
     	
     }
     else
     echo "<script>alert('Not Inserted');</script>window.location='movies.php';";
     
}

 ?>
