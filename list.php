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
      <input type="text" class="form-control" placeholder="Enter Movie ID" name="search" name="id">
      <br>
      <button type="submit" class="btn btn-success" name="submit">Submit</button>

    </div>

</div>




<?php





if(isset($_POST['submit']))


$id = $_POST["id"];
$url = file_get_contents("http://www.omdbapi.com/?i=$id");
$json = json_decode($url, true); //This will convert it to an array
$movie_title = $json['Title'];
$movie_year = $json['Year'];


echo $movie_title;
?>

























































