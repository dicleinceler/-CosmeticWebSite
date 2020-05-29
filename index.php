<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/icon.png" />
        <title>Dicle Kozmetik </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body  >
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Her Kadın Güzeldir</h1>
                       <p>Dicle KozmetiK tercih edenler ise daha da güzel ...</p>
                       <a href="products.php" class="btn btn-danger">Hadi Alışverişe</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container" >
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/ruj.jpg" alt="Ruj" width="400px" height="500px">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">DUDAK</p>
                                        <p>Bakimli Dudaklar</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/goz.jpg" alt="Goz" width="400px" height="600px">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">GOZ</p>
                                    <p>Hos Bakislar</p>
                                </div>
                           </center>
                       </div>
                   </div>
                    <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/sac.jpg" alt="Goz" width="400px" height="500px">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">SAC</p>
                                    <p>Saglikli Saclar</p>
                                </div>
                           </center>
                       </div>
                   </div> 
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/cilt.jpg" alt="Cilt" width="400px" height="400px">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">CILT</p>
                                   <p>Parlak Ciltler</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="https://dicleinceler.wordpress.com">Dicle Kozmetik</a> </p>
                   <p>created by Dicle Inceler</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>