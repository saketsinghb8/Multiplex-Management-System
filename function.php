
<html>
<head>  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></head>
    <link rel="stylesheet" href="main.css" />
<body>
<?php
include('main.php');
if(empty($_SESSION['email_id'])){
header('location:index.php');}
 ?>
<div  class="container">
<a href="movies.php"><button  id="insert" class="btn btn-primary btn-lg">Insert</button></a>
<a href="search.php"><button id="search"  class="btn btn-primary btn-lg">Search</button></a>	
<a href="delete.php"><button id="delete"  class="btn btn-primary btn-lg">Delete</button></a>	
<a href="list.php"><button id="list"  class="btn btn-primary btn-lg">List</button></a>	



</div>




</body>
</html>
