<?php
  require("includes/email.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Neighbourhoodstalker - About Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel = "stylesheet" type="text/css">
        <link href="css/aboutUs.css" rel = "stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
          <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class= "container">
                
                <a href="index.php" class="navbar-brand"><span class="link_header">NS!</span></a>
                
                <button class="navbar-toggle" data-toggle ="collapse" data-target= ".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                
                </button>
                
                 <div class="collapse navbar-collapse navHeaderCollapse">
                    
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                       <li class="dropdown">
                            <a href="index.php" class="dropdown-toggle" data-toggle = "dropdown">Neighbourhoods<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="Agbara.php">Agbara Estate</a></li>
                                <li><a href="opic.php">Opic Estate</a></li>
                            </ul>
                        
                        </li>
                          <li><a href="network.php">Network</a></li>
                          <li class="active"><a href="aboutUs.php">About Us</a></li>
                          <li><a href="#contact" data-toggle="modal">Contact</a></li>
                    </ul>
                </div>
             </div>
        </div>
        
        
         <div class="container">
             
            <div class="row">
            	<div class="col-sm-12 mDown">
<!--                	<h2 class="aboutHeader">Your Neighbourhood Services, Covered!</h2>-->
                            <div class="col-md-4">
                           <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><center>Your Neighbourhood Services, Covered!</center></h3>
                        </div>
                               <div class="panel-body text-center">
<!--                               <h4><center>Are We Serious??</center></h4>-->
                    <a href="#" class="thumbnail">
                        <img src="img/park.jpg" >
                    </a>
                         <p>
                    Neighbourhoodstalker knows that Living in enlosed Neigbourhoods like residential estates is great for many reasons.
                    You can't help but love the peace and quiet ("peace and quiet" is a polite way of
                    saying "boredom" lol). However, having large chunks of your paycheck being eaten up isn't the only challenge one
                    one could face: Having access to much needed services is alos a huge problem.
                         </p>
                               </div>
                           </div>
                        </div>
                    
                         <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><center>Neighbourhoodstalker</center></h3>
                            </div>
                                <div class="panel-body text-center">
                                    <a href="#" class="thumbnail">
                                        <img src="img/10-Simple-Steps-to-a-More-Spiritual-Life-900x380.jpg" >
                                    </a>
                    Although we all consider the security worthy of us paying such a price
                    , we still wish we had ready solutions to our needs. We want to able to get hold of products
                    and services as fast as we can and we need some of these services right at home. That's why you need a Neighbourhood Stalker!
                    We are a quick and effective solution to your neighbourhood needs! From Package Delivery, Errands to Cleaning Services.
                    We even provide access to a Personalized Fitness Scheme, all under one platform
                                <p>Okay, now you have good idea of what we do, but who are we? why should we ask you to trust us?
                                </div>
                        </div>
                        </div>    
                        
                       <div class="col-md-4">
                           <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><center>Are We Serious??</center></h3>
                        </div>
                               <div class="panel-body text-center">
<!--                               <h4><center>Are We Serious??</center></h4>-->
                    <a href="#" class="thumbnail">
                        <img src="img/How-Childhood-Prepares-Us-for-Death1-900x380.jpg" >
                    </a>
                         <p>
                            Are we really being serious? Is this the deal?
                            It would be nice talking about commitment and dedication, but well, everyone else does that so we
                            figured, you  need a break! Take a leap of faith and try Neighbourhood Stalker instead. 
                            If there's one thing we both know by now, it's that we'er fun. You need some fun in your life man (or woman).
                            We are confident in our process of bringing you the very best of the services you need. Pay only when satisfied.
                         </p>
                               </div>
                           </div>
                        </div>
                      <?php
                        require("includes/display.php");
                        ?>
            </div>
                </div>
                </div>
             
                  <div class="row">
            	<div class="col-sm-12">
<!--                	<h2 class="aboutHeader">Your Neighbourhood Services, Covered!</h2>-->
                            <div class="col-md-6">
                           <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><center>Your Neighbourhood Services, Covered!</center></h3>
                        </div>
                               <div class="panel-body text-center">
<!--                               <h4><center>Are We Serious??</center></h4>-->
                    <a href="#" class="thumbnail">
                        <img src="img/eazy.jpg" >
                    </a>
                         <p>
                            Neighbourhood Stalker; we offer a lot because you need a lot.
                            You can count on us to always have you covered. WHERE YOU NEED IT!
                         </p>
                               </div>
                           </div>
                        </div>
                        
                       <div class="col-md-6">
                           <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><center>Thinking Outside The Box</center></h3>
                        </div>
                               <div class="panel-body text-center">
<!--                               <h4><center>Are We Serious??</center></h4>-->
                    <a href="#" class="thumbnail">
                        <img src="img/Einstein%2020160705_042914.jpg" >
                    </a>
                         
                               </div>
                           </div>
                        </div>
                        
                </div>
                </div>
               
                </div>
        
        </div>  <!--        END OF CONTAINER-->  
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