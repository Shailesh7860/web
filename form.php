<?php

if(isset($_POST['email'])&&$_POST['email'] != ''){
   
    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "email.com"
        $body = ""

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        mail($to,$messageSubject,$body)
        echo 'Message Sent '

    }
    else{
        
?>
<h1>Sry Msg Not Sent!</h1>

<?php
    }
}

?>
