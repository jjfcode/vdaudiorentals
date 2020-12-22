<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            // submit the form
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $massageSubject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "blah@blah.com";
            $body = "";

            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            // mail($to,$messageSubject,$body);

            $massege_sent = true;
        }
        else{
            $invalid_class_name = "form-invalid";
        }
        
    }

?>

