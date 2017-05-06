<!DOCTYPE html>
<html>
    <head>
        <title>Neighbourhoodstalker - Stores</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel = "stylesheet" type="text/css">
        <link href="css/stores.css" rel = "stylesheet" type="text/css">
          <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
         <div class="navbar navbar-default navbar-fixed-top">
            <div class= "container">    
                <a href="carWash.php" class="navbar-brand"><span class="link_header"><p>Stores</p></span></a>
                <button class="navbar-toggle" data-toggle ="collapse" data-target= ".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="stores.php">Stores</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li class="dropdown">
                            <a href="stores.php" class="dropdown-toggle" data-toggle = "dropdown">Services<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="delivery.php">Delivery</a></li>
                                <li><a href="transport.php">Transport</a></li>
                                <li><a href="fitnessScheme.php">Fitness Scheme</a></li>
                                <li><a href="carWash.php">Mobile CarWash</a></li>
                                <li><a href="sanitation.php">Home Sanitation</a></li>
                                <li><a href="laundry.php">laundry</a></li>
                            </ul>
                        </li>
                          <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle = "dropdown">Resources <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Accomodation</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="connect.php">Connect</a></li>
                          </ul>
                        </li>
                        <li><a href="#contact" data-toggle="modal">Contact Form</a></li>
                    </ul>
                </div>
             </div>
        </div>
        
        
       <div class="container">
            <div class="row">
                <!--<div class="col-md-12 jumbotron mDown">
                    <div class="text-center">   
                        <h2>Stores</h2>
                             <marquee class="alert alert-info"><p>This page is currently under construction</p></marquee>
                        </div>
                    </div>-->
            
                <div class="col-xs-4 col-xs-offset-1">
                    <div class="panel panel-default">
                    <div class="panel panel-heading">
                        <h3>Dareg Pharmacy</h3>
                    </div>
                    <div class="panel panel-body">
                       <div id="Claro" class="carousel slide mDown" data-ride="carousel">
                        <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                 <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                
                        <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/stores/pharmacy/dareg.jpg" alt="#">
                                    <div class="carousel-caption">
                    <!--                    <h3></h3>-->
                                    </div>
                                </div>
                                <div class="item">
                                     <img src="img/stores/pharmacy/reception.jpg" alt="#">
                                    <div class="carousel-caption">
                    <!--                    <h3></h3>-->
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/stores/pharmacy/counter.jpg" alt="tennis">
                                    <div class="carousel-caption">
                    <!--                    <h3></h3>-->
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/stores/pharmacy/management.jpg" alt="tennis">
                                    <div class="carousel-caption">
                    <!--                    <h3></h3>-->
                                    </div>
                                </div>
                                
                            </div>
                
                            <!-- Controls -->
                            <a class="left carousel-control" href="#Claro" data-slide="prev" role="button">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#Claro" data-slide="next" role="button">
                                 <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            </div>
                </div>
                </div>
            </div>
                </div>
               <?php
              require("includes/display.php");
              ?>
            </div>
        <hr>
      
         <?php
          require("includes/footer.php");
          echo $footer;
        ?>
        <!--        JAVASCRIPT BELOW FOR FASTER PAGE LOADING-->
        <div class="modal fade" id="contact" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal" role="form">
                        <div class="modal-header">
                            <h4>Contact</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="contact-name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="contact-name" placeholder="Enter Name, Surname First">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="contact-email" placeholder="email@domail.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-message" class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" >Send</button>
                            <a class="btn btn-danger" data-dismiss="modal">Close</a>
                        </div>
                </div>
            </div>
        </div>
        
        
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    
    </body>
</html>