<?php
include('db.php');
include('main.php');
  ?>
<?php

$delete_customer=$_GET['del_c'];
$query="delete from customer where customer_id='$delete_customer'";

if (mysqli_query($con,$query)) 
{
	 
	  header('location:delete.php');
	  echo "deleted";
}


?>