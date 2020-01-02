<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST

    $email_from = 'hochi01@naver.com';

    $email_subject = "New Form Submission"

    $email_body = "User Name: $name.\n".
                    "User Message: %message.\n";
    
    $to = "jre@kakao.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply_To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>