<?php
    $name = $_POST['name'];
    $phone_num = $_POST['num'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_form = 'b-rahan@hotmail.fr';
    
    $email_subject = "New Form Submission";    
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n". 
                      "User Message: $messagge.\n";

    $to = "ranohb99@gmail.com";
 
    $headers = "Form: $email_form \r\n":
     
    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
     
     header("Location: index.html");
?>