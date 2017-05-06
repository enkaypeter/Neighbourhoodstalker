<?php
  require("includes/email.php");
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Neighbourhoodstalker - Car Wash</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel = "stylesheet" type="text/css">
        <link href="css/carWash.css" rel = "stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
         <div class="navbar navbar-default navbar-fixed-top">
            <div class= "container">    
                <a href="carWash.php" class="navbar-brand"><span class="link_header"><p>Mobile CarWash</p></span></a>
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
                            <a href="carWash.php" class="dropdown-toggle" data-toggle = "dropdown">Services<b class="caret"></b></a>
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
            
        <hr>
            <div class="row">
                <div class="col-sm-8">
                    <a href="#" class="thumbnail">
                        <img src="img/oviedo-car-wash.jpg">
                    </a>
                    <h4><center>We Can Come Wash Your Vehicles!</center></h4>
                    <p>
                        That awkward moment when you need your vehicle washed and you wish
                        you wouldn't go to the carwash because... well, it's miles
                        away and you don't want your neighbours seeing your beautiful car in an
                        ugly shape... that moment is when you need your stalker. Or perhaps your car had
                        a flat tyre at home and you want to wash it to look as new as the new tyre?
                        We wouldn't judge you at neighbourhoodstalker. We all have our obsessions. 
                    </p>
                </div>
                   <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><center>Neighbourhoodstalker - Mobile Carwash</center></h3>
                        </div>
                        <div class="panel-body text-center">
                            <img src="img/localWash.jpg" class="img-responsive">
                        </div>
                    </div>
                            <?php
                                require("includes/display.php");
                            ?>
            </div>
                </div>
            </div>
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
                     <a href="#" class="thumbnail">
                        <img src="img/legUp.jpg">
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
                
            </div>     
            
        </div> <!-- End of container -->
       
        
        
            
        
        
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