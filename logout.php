<?php
session_start();
if(!empty($_SESSION['email_id'])){
	session_unset($_SESSION['email_id']);
	header('location:index.php');
	
}
else
header('location:index.php');
?>