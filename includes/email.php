<?php
$nameErr = $phoneErr = $emailErr = $messageErr = "";
if(isset($_POST["submit"])){ 
     if(empty($_POST["name"]) ){
            $nameErr = "Please Enter Your Name";
        }else{
               $name = $_POST["name"];
        }
     if(empty($_POST["phone"]) ){
            $phoneErr = "Please Enter Your Phone Number";
        }else{
               $phone = $_POST["phone"];
        }
     if(empty($_POST["email"]) ){
            $emailErr = "Please Enter Your Email";
        }else{
               $email = $_POST["email"];
        }
     if(empty($_POST["message"]) ){
            $messageErr = "Please Enter Your Message";
        }else{
               $message = $_POST["message"];
        }
        if(empty($nameErr) && empty($phoneErr) && empty($emailErr) && empty($messageErr)){
            $to = 'hoodstalker@yahoo.com';
            $email_subject = "Neighbourhoodstalker's Contact Form:  $name";
            $email_body = "You have received a new message from your Neighbourhoodstalker's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email\n\nMessage:\n$message";
            $headers = "From: admin@neighbourhoodstalker.com\n";
            $headers .= "Reply-To: $email";	
            $res = mail($to,$email_subject,$email_body,$headers);
            if(!$res){
                $err = "<div class=alert alert-danger><p>Error sending mail. Please try again later<p></div>";
            }
            else{
                $succ = '<div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                Message delivered Successfully!</div>
                ';
            }  
                }else{
                        $dis = '<div class="error"><marquee>Data Not sent. Please Check the form for empty fields</marquee></div>';
                    }
    
        }
    
?>