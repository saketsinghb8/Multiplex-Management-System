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
	<form action="search.php"  method="post">
    <div class="form-group" >
      <label for="usr">Search</label>
      <input type="text" class="form-control" placeholder="Enter Customer ID" name="search">
      <br>
      <button type="submit" class="btn btn-success" name="submit">Submit</button>

    </div>

</div>

<?php

if(isset($_POST['submit']))
{
?>	
	<div class="container">
 	 <p>Customer List</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
      	<th>Customer ID</th>
        <th>Customer Name</th>
        <th>Phone no</th>
        <th>Email</th>
        <th>Movie</th>
      </tr>
    </thead>
    <tbody>
      <tr>
   <?php
	$customer_id=$_POST['search'];
	$result=mysqli_query($con,"select * from  customer where customer_id='$customer_id'");
	while ($row=mysqli_fetch_array($result)) 
	{
		$customer_id=$row['customer_id'];
		$c_name=$row['customer_name'];
		$phone=$row['phone_no'];
		$customer_email=$row['customer_email'];
		$movie=$row['movie'];
		?>
			<td><?php echo $customer_id; ?></td>
			<td><?php echo $c_name; ?></td>
			<td><?php echo $phone; ?></td>
			<td><?php echo $customer_email; ?></td>
			<td><?php echo $movie; ?></td>
			</tr>      
	<?php }} ?>
</table>
