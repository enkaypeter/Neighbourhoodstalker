<?php
  require("includes/email.php");
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Neighbourhoodstalker - Delivery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel = "stylesheet" type="text/css">
        <link href="css/delivery.css" rel = "stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
         <div class="navbar navbar-default navbar-fixed-top">
            <div class= "container">    
                <a href="delivery.php" class="navbar-brand"><span class="link_header"><p>Delivery</p></span></a>
                <button class="navbar-toggle" data-toggle ="collapse" data-target= ".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="stores.php">Stores</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li class="dropdown">
                            <a href="delivery.php" class="dropdown-toggle" data-toggle = "dropdown">Services<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="delivery.php">Delivery</a></li>
                                <li><a href="transport.php">Transport</a></li>
                                <li><a href="fitnessScheme.php">Fitness Scheme</a></li>
                                <li><a href="carWash.php">Mobile CarWash</a></li>
                                <li><a href="sanitation.php">Home Sanitation</a></li>
                                <li><a href="laundry.php">Laundry</a></li>
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
            
              <div id="Claro" class="carousel slide mDown" data-ride="carousel">
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

        <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/delivery1.jpg" alt="delivery">
                    <div class="carousel-caption">
    <!--                    <h3></h3>-->
                    </div>
                </div>
                <div class="item">
                     <img src="img/delivery2.jpg" alt="delivery">
                    <div class="carousel-caption">
    <!--                    <h3></h3>-->
                    </div>
                </div>
                <div class="item">
                    <img src="img/delivery3.jpg" alt="delivery">
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
             
            <hr>
               <?php
              require("includes/display.php");
              ?>
             <div class="col-md-4">
                 <center>
                     <a href="#" class="thumbnail">
                        <img src="img/deli.jpg">
                    </a>
                        <h4>Your Wish Our Job!</h4>
                    <p>
                        Here's the part we really brag about. A good stalker should always be there for you. 
                        Whether you need them or not..and you need us which is a plus. 
                        Whatever you need delivered to your doorstep (or gate step) we have got it covered.
                        From your favorite stores and super markets around, you can get anything for a reasonable additional price neighbourhoodstalker.
                    </p>
                 </center>
                </div>
                <div class="col-md-4">
                 <center>
                     <a href="#" class="thumbnail">
                        <img src="img/deliv.jpg">
                    </a>
                        <h4>We Deliver!</h4>
                    <p>
                        Food items, subscribe to our daily newspaper supply, beverage and lots
                        more! Just call us in time, we'll be there on time!
                    </p>
                 </center>
                </div>
                 <div class="col-md-4">
                 <center>
                     <a href="#" class="thumbnail">
                        <img src="img/delivery.jpg">
                    </a>
                        <h4>Holla At Us Now!</h4>
                    <p>
                        Fill our [CONTACT ME] form (at the top of the page) <strong>Give Us A Call:</strong> in English on +2347035981319
                        or<br/> TEXT US  [Whatsapp Enabled] in your preferred language on +2347035081319, +2348117744728
                        Please be sure to include:<br/>
                        1. Full name<br/> 
                        2. address <br/>
                        3. Language <br/>
                        4. Service(s) needed <br/>
                        No matter who you are or what you do, as long as you are on the estate,
                        we'll find you and we will train you! <br/>
                        We've got your back ;

                    </p>
                </div>
            </center>
            </div>
         <!--End of the Container-->
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