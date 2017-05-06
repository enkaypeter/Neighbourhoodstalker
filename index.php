<?php
  require("includes/email.php");
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Neighbourhoodstalker - HOME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel = "stylesheet" type="text/css">
        <link href="css/index.css" rel = "stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
        
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class= "container">
               
                <!--<a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat col-xs-1"></i> <span class="col-xs-4">mdcancalabar</span></a>-->
                <button class="navbar-toggle" data-toggle ="collapse" data-target= ".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.php"><span class="col-xs-1">NS!</span></a>
                 
                
                <div class="collapse navbar-collapse navHeaderCollapse">
                    
                    <ul class="nav navbar-nav navbar-right"> 
                         <li class="active"><a href="index.php">Home</a></li>
                       <li class="dropdown">
                            <a href="index.php" class="dropdown-toggle" data-toggle = "dropdown">Neighbourhoods<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="Agbara.php">Agbara Estate</a></li>
                                <li><a href="opic.php">Opic Estate</a></li>
                            </ul>
                        
                        </li>
                          <!--<li><a href="stores.php">Stores</a></li>-->
                          <!--<li><a href="network.php">Network</a></li>-->
                          <li><a href="aboutUs.php">About Us</a></li>
                          <li><a href="#contact" data-toggle="modal">Contact Form</a></li>
                    </ul>
                </div>
             </div>
        </div>
        
          <div class="container">
            <div class="row">
<!--                <center><h2>NEIGHBOURHOOD STALKER</h2></center>-->
                <div class="col-xs-12 mDown">
                    <a href="#" class="thumbnail clear">
                        <img src="img/agbara/home.jpg">
                    </a>
<!--                    <center><h2>NEIGHBOURHOOD STALKER</h2></center>-->
                    </div>
                </div>
                <?php
                require("includes/display.php");
                ?>
            </div>

        <div class="container">
            <center><h2>Your Neighbourhood Services, Covered!</h2>
                <p>
                    Neighbourhoodstalker knows that Living in enlosed Neigbourhoods like residential estates is great for many reasons.
                    You can't help but love the peace and quiet ("peace and quiet" is a polite way of
                    saying "boredom" lol). However, having large chunks of your paycheck being eaten up isn't the only challenge one
                    one could face: Having access to much needed services is alos a huge problem.
                    Although we all consider the security worthy of us paying such a price
                    , we still wish we had ready solutions to our needs. We want to able to get hold of products
                    and services as fast as we can and we need some of these services right at home. That's why you need a Neighbourhood Stalker!
                    We are a quick and effective solution to your neighbourhood needs! From Package Delivery, Errands to Cleaning Services.
                    We even provide access to a Personalized Fitness Scheme, all under one platform...<br/>
                    <a href="aboutUs.php" class="btn btn-danger">Read More</a>
                </p>
                <hr>
                <h3>Our Services, Numbered!</h3>
            </center>
            <div class="row rowSpace">
            <div class="col-sm-4">
                     <a href="delivery.php" class="thumbnail">
                        <img src="img/delivery.jpg">
                    </a>
                     <h4>DELIIVERY</h4>
                    <p>
                        Everything at your doorstep. Anything from your favourite stores
                        around!
                    </p>
                    <a href="delivery.php" class="btn btn-danger">Learn More</a>
                </div>
                
                
                
                <div class="col-sm-4">
                     <a href="fitnessScheme.php" class="thumbnail">
                        <img src="img/legUp.jpg">
                    </a>
                     <h4>FITNESS SCHEME</h4>
                    <p>
                       Personalized Fitness Schedule and coaching, even at home!
                    </p>
                    <a href="fitnessScheme.php" class="btn btn-danger">Learn More</a>
                </div>
                
                
                  <div class="col-sm-4">
                     <a href="carWash.php" class="thumbnail">
                        <img src="img/carwash.jpg">
                    </a>
                     <h4>MOBILE CARWASH</h4>
                    <p>
                       We come wash your cars anywhere<br/>
                        This is ridiculous!
                    </p>
                    <a href="carWash.php" class="btn btn-danger">Learn More</a>
                </div>
                
            </div>
            <div class="row rowSpacing">
            <div class="col-sm-4">
                     <a href="transport.php" class="thumbnail">
                        <img src="img/tranport.jpg">
                    </a>
                     <h4>TRANSPORT</h4>
                    <p>
                        From your doorstep to anywhere within your hood,
                        or close-by.
                    </p>
                    <a href="transport.php" class="btn btn-danger">Learn More</a>
                </div>
                
                
                
                <div class="col-sm-4">
                     <a href="sanitation.php" class="thumbnail">
                        <img src="img/sanitation.jpg">
                    </a>
                     <h4>HOME/VENUE SANITATION</h4>
                    <p>
                       YES. Owambe people, call us. New house? call us. Old
                        house? call us.
                    </p>
                    <a href="sanitation.php" class="btn btn-danger">Learn More</a>
                </div>
                
                
                  <div class="col-sm-4">
                     <a href="laundry.php" class="thumbnail">
                        <img src="img/laundry.jpg">
                    </a>
                     <h4>LAUNDRY SERVICES</h4>
                    <p>
                       We know the best laundry guys, and the ones who stain your clothes.
                    </p>
                    <a href="laundry.php" class="btn btn-danger">Learn More</a>
                </div>
                
            </div>
            <hr>
            <div class="row">
            <div class="col-sm-8">
                    <center>
                        <a href="#" class="thumbnail">
                        <img src="img/chi.jpg">
                    </a>
                    <h2> 保持健康，拥有姣好身姿!</h2>
                    <p>
                        你是否很想健身，但不能坚持制定好的计划？或许你需要一个可以督促你的健身教练。

                        你可以先以一个相对合适的价格注册成为我们的健身会员，我们将会给你制定个人的健身计划和专属健身教练。

                        这是我们的职责，即使你还没有心动。如果你有意愿的话，烦请你给我们用英语致电（+2347035981319）或者是用中文编辑（你的号码＋邮箱）发送给我们。

                        期待得到你的回复：）

                    </p>
                    </center>
                </div>
                
                       <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><center>Neighbourhoodstalker</center></h3>
                                    </div>
                                        <div class="panel-body text-center">
                                            <a href="#" class="thumbnail">
                                                <img src="img/agbara/downTown.jpg" >
                                            </a>
                                        </div>
                                </div>
                        </div>    
                </div>

        </div>
          <hr>
   <?php
      require("includes/footer.php");
      echo $footer;
   ?>
        
<!--        JAVASCRIPT BELOW FOR FASTER PAGE LOADING-->
        <?php
            require("includes/modal.php");
        ?>
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
              <script src="js/jquery.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>    
    
    </body>

</html>