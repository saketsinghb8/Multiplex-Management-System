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
   <p>Customer List</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Phone no</th>
        <th>Email</th>
        <th>Movie</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
      <tr>
   <?php
$result=mysqli_query($con,"select * from  customer");
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
      <td ><a  href='delete_customer.php?del_c=<?php echo $customer_id; ?>'>Remove</a></td>
      </tr>      
  <?php } ?>
</table>
