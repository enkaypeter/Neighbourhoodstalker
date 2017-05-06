<?php
  require("includes/email.php");  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Neigbourhoodstalker - Agbara Estate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel = "stylesheet" type="text/css">
        <link href="css/Agbara.css" rel = "stylesheet" type="text/css">
         <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
         <div class="navbar navbar-default navbar-fixed-top">
            <div class= "container">    
                <a href="Agbara.php" class="navbar-brand"><span class="link_header"><p>AE</p></span></a>
                <button class="navbar-toggle" data-toggle ="collapse" data-target= ".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Stores.php">Stores</a></li>
                        <li><a href="#">Products</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle = "dropdown">Services<b class="caret"></b></a>
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
                            <li><a href="#">Connect</a></li>
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
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

        <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/agbara/agbara1.jpg" alt="run">
                    <div class="carousel-caption">
    <!--                    <h3></h3>-->
                    </div>
                </div>
                <div class="item">
                     <img src="img/agbara/agbara3.jpg" alt="fishing">
                    <div class="carousel-caption">
    <!--                    <h3></h3>-->
                    </div>
                </div>
                <div class="item">
                     <img src="img/agbara/agbara4.jpg" alt="fishing">
                    <div class="carousel-caption">
    <!--                    <h3></h3>-->
                    </div>
                </div>
                <div class="item">
                     <img src="img/agbara/agbara5.jpg" alt="fishing">
                    <div class="carousel-caption">
    <!--                    <h3></h3>-->
                    </div>
                </div>
                <div class="item">
                     <img src="img/agbara/agbara6.jpg" alt="fishing">
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
             <?php
              require("includes/display.php");
              ?>
            
           <center><h2>YOUR HOOD, OUR HOME! </h2>
                <p>
                    Welcome to Agbara Estate the home of Neighbourhood Stalker.<br/> 
                    From Ibadan road past Enugu Crescent and all the way around back through Okigwe Crescent, we've got your back! 
                    <br/>
                </p>
                <hr>
            </center>
                <div class="row">
                    <div class="col-sm-4">
                       
                        <a href="#" class="thumbnail">
                            <img src="img/agbara/amina%20copy.jpg">
                        </a> 
                         <center><h4>Our Mission</h4></center>
                            <p>
                                Our mission at neighbourhoostalker is to eliminate the slightest distances between you and your favourite 
                                products and services and at that we are like the expert midwife who wouldn't fail to deliver.
                            </p>
                    </div>
                     <div class="col-sm-4">
                       
                        <a href="#" class="thumbnail">
                            <img src="img/agbara/agbara%20ish.jpg">
                        </a> 
                          <center><h4>Feel Free</h4></center>
                            <p>
                                Feel free to browse through our contents cos you are the reason we came. Don't forget to contact us on phone to ask more questions. 
                                You can also invite us to come over to your place if you need personal explanation on our services in other to find the right one for you.
                                When we come, do invite us in for some tea.
                            </p>
                    </div>
                     <div class="col-md-4">
                                    <a href="#" class="thumbnail">
                                    <img src="img/legUp.jpg">
                                    </a>
                                        <center><h4>Holla At Us Now!</h4>
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
                            </center>
                        </div>
                </div>      
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