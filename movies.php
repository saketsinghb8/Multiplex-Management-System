<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body>
<?php include 'main.php'?>
    <div class="container" id="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img src="images/bvx.jpg" alt="Avatar" style="width:100%">
                    <div class="container1">
                        <h4><a href='insert.php?movie=Batman v Superman'><b>Batman V SuperMan</b></a></h4>  
                    </div>
                </div>
                <div class="card">
                    <img src="images/thor.jpg" alt="Avatar" style="width:100%"  height="550" width="440">
                    <div class="container1">
                        <h4><a href='insert.php?movie=Thor:Ragnarok'><b>Thor:Ragnarok</b></a></h4> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="images/mos.jpg" alt="Avatar" style="width:100%">
                    <div class="container1">
                        <h4><a href='insert.php?movie=Man of Steel'><b>Man of Steel</b></a></h4> 
                     </div>
                </div>
                <div class="card">
                    <img src="images/watch.jpg" alt="Avatar" style="width:100%" height="550" width="440">
                    <div class="container1">
                        <h4><a href='insert.php?movie=Watchmen'><b>Watchmen</b></a></h4>  
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="images/sw.jpg" alt="Avatar" style="width:100%">
                    <div class="container1">
                        <h4><a href='insert.php?movie=Star Wars:The Force Awakens'><b>Star Wars:The Force Awakens</b></a></h4> 
                    </div>
                </div>
                <div class="card">
                    <img src="images/iron.jpg" alt="Avatar" style="width:100%" height="550" width="440">
                    <div class="container1">
                        <h4><a href='insert.php?movie=Ironman'><b>Ironman</b></a></h4> 
                    </div>
                </div>
            </div>
        </div>
    </div>
            <input type="hidden" id="username" value="<?php if(!empty($_SESSION['user_logs'])){ 
    echo $_SESSION['user_logs'];
}
            else{
                echo 'guest';                          
            }
?>" />
</body>
</html>