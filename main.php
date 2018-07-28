<?php
session_start();

   ?><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Strawhats Multiplex</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="active"> <a href="#">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href='<?php if(!empty($_SESSION['users'])) echo "logout.php"; else echo "index.php";   ?>'><span class="glyphicon glyphicon-log-in"></span><?php if(!empty($_SESSION['email_id'])) echo "Log Out"; else echo "Log In";   ?></a></li>
    </ul>
  </div>
</nav>