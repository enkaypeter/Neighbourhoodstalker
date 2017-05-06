<?php
  require("includes/email.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Neighbourhoodstalker - Network</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel = "stylesheet" type="text/css">
        <link href="css/network.css" rel = "stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
               <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class= "container">
                
                <a href="network.php" class="navbar-brand"><span class="link_header">NS!</span></a>
                
                <button class="navbar-toggle" data-toggle ="collapse" data-target= ".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                
                </button>
                
                <div class="collapse navbar-collapse navHeaderCollapse">
                    
                    <ul class="nav navbar-nav navbar-right"> 
                         <li><a href="index.php">Home</a></li>
                       <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle = "dropdown">Neighbourhoods<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="Agbara.php">Agbara Estate</a></li>
                                <li><a href="opic.php">Opic Estate</a></li>
                            </ul>
                        
                        </li>
                          <li class="active"><a href="network.php">Network</a></li>
                          <li><a href="aboutUs.php">About Us</a></li>
                          <li><a href="#contact" data-toggle="modal">Contact Form</a></li>
                    </ul>
                </div>
             </div>
        </div>
        
         
        <div class="container">
            <div class="row">
                <div class="col-md-12 jumbotron mDown">
                    <div class="text-center">   
                        <h2>Network</h2>
                              <marquee class="alert alert-info"><p>This page is coming soon...</p></marquee>
                        </div>
                    </div>
                </div>
                <?php
              require("includes/display.php");
              ?>
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