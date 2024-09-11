<?php  

     // To Remove unwanted errors
     error_reporting(0);
     
     // Add your connection Code
     
     // Important Files (Please check your file path according to your folder structure)
     
     require "./PHPMailer-master/src/PHPMailer.php";
     require "./PHPMailer-master/src/SMTP.php";
     require "./PHPMailer-master/src/Exception.php";
     
 
     
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
     
     // Email From Form Input
     $send_to_email = $_POST["email"];
       
     // Full Name of User
     $send_to_name = $_POST["team_name"];
     
     function sendMail($send_to, $otp, $name) {
         $mail = new PHPMailer(true);
         $mail->isSMTP();
         $mail->SMTPAuth = true;
         $mail->SMTPSecure = "tls";
         $mail->Host = "smtp.gmail.com";
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
         $mail->Port = 587;
     
         // Enter your email ID
         $mail->Username = "bbe.ctf@gmail.com";
         $mail->Password = "wsev zyat auoo kgus";
     
         // Your email ID and Email Title
         $mail->setFrom("bbe.ctf@gmail.com", "BBE CTF");
     
         $mail->addAddress($send_to);
     
         // You can change the subject according to your requirement!
         $mail->Subject = "Account Activation";
     
         // You can change the Body Message according to your requirement!
         $htmlContent = file_get_contents("./assets/mailtemp/registertemp.html");
     
         $htmlContent = str_replace("{NAME}", $name, $htmlContent);
         $htmlContent = str_replace("{OTP}", $otp, $htmlContent);
     
         // You can change the Body Message according to your requirement!
         $mail->isHTML(true);
         $mail->Body = $htmlContent;
         $mail->send();
     }
     
         sendMail($send_to_email, $verification_otp, $send_to_name);

         
        
     ?>