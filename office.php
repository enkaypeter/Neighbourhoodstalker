<!DOCTYPE html>
<html>
    <head>
        <title>Office</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel = "stylesheet" type="text/css">
        <link href="css/agbara.css" rel = "stylesheet" type="text/css">
         <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class= "container"> 
        <?php
            require("includes/officeNav.php");
            echo $officeHeader;
        ?>
            </div>
        </div>
        <div class="container">
            <!-- Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12 col-sm-8">
                <h1 class="page-header">Office
                    <small>Office page</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Office Page</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
<!--        Content Row-->
            
            <div class="row">
            <!-- Map Column -->
            <div class="col-md-8 col-sm-3">
                <!-- Embedded Google Map -->
<!--               <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>-->
                <iframe
                  width="600"
                  height="450"
                  frameborder="0" style="border:0"
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDg5GwYtygunwEEU3MjYDbQtKc4WTBidPM 
                    &q=ennymous,Agbara+Ogun+nigeria" allowfullscreen>
                </iframe>
                
                <!--<iframe
                    width="600"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDg5GwYtygunwEEU3MjYDbQtKc4WTBidPM  &q=Eiffel+Tower,Paris+France"
                </iframe>-->
                
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4 col-sm-3">
                <h3>Office Address</h3>
                 <a href="#">
                    <img src="img/agbara/ennymous.jpg" class="img-responsive">
                </a><br/>
                <p>
                    Ennymos Global, 12 Onivwe Close, Odan, Agbara<br>Ogun State, Nigeria<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: 08065571371</p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:Johnson@ennymos.com.ng">Johnson@ennymos.com.ng</a>
                </p>
                <p><i class="fa fa-globe"></i>
                    <abbr title="Website">W</abbr>: <a href="mailto:ennymosglobal.com.ng">www.ennymosglobal.com</a></p>
<!--                </p>-->
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
                </p>
               <!-- <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>-->
            </div>
        </div>
        <div class="row">
             <div class="col-lg-12">
                <h3 class="page-header">Our Team</h3>
            </div>
        </div> 
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/team/shallom_2.jpg" alt="">
                    <div class="caption">
                        <h3>Shalom Ademola Omoyanmola, Founder.<br>
                            <small>Director</small>
                        </h3>
                        <!--<p><i><q>Education is what’s left when you have forgotten what you learned in school</q>	<dl>-       Albert Einstein </i></p>-->
                        <ul class="list-inline">
                            <li><a href="fb.com/shalom.dickson1"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="https://ng.linkedin.com/in/nkere-awaji-inwan-215a18101"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4  text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/team/presh_2.jpg" alt="">
                    <div class="caption">
                        <h4>Precious Udegbue, Founding partner.<br>
                            <small>Finance</small>
                        </h4>
                        <!--<p><i><q>A leader can create a company, but a community creates a movement <dl>-	Blake Mycoskie</dl></q></i></p>-->
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="https://ng.linkedin.com/in/nkere-awaji-inwan-215a18101"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4  text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/team/enkay.jpg" alt="">
                    <div class="caption">
                        <h4>Nkere-Awaji I. Peter<br>
                            <small>#TechGuy</small>
                        </h4>
                        <p><i><q>Bow before me for i am root <dl>-      LinuxFrenzy</dl></q></i></p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="https://ng.linkedin.com/in/nkere-awaji-inwan-215a18101"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-md-4 col-md-offset-1 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/team/dele_2.jpg" alt="">
                    <div class="caption">
                        <h4>Dele Funso-Adisa<br>
                            <small>Resources</small>
                        </h4>
                        <p><i><q>The kinds of challenges we face on the continent require not only vision but also patience and perseverance<dl>-      	Tony Elemelu</dl></q></i></p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="https://ng.linkedin.com/in/nkere-awaji-inwan-215a18101"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/team/gSave_2.jpg" alt="">
                    <div class="caption">
                        <h4>Godsave Francis<br>
                            <small>Operations</small>
                        </h4>
                        <p><i><q>The best way to predict the future is design it<dl>-      	Buckminster Fuller</dl></q></i></p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="https://ng.linkedin.com/in/nkere-awaji-inwan-215a18101"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
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
        </div>
        <!--JAVASCRIPT-->
        <!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>