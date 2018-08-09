<?php
if (isset($_REQUEST['submit'])){
    $to         ='rezaul.oni@gmail.com'.'uzz_all@mppmanagement.com';
    $sub        =$_REQUEST['subject'];
    $phn        =$_REQUEST['phn'];
    $body       =$_REQUEST['msg'];
    $mail       =$_REQUEST['mail'];

    $header = 'From: '.$mail. "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to,$sub,$body,$header);
    $header('Location: index.php');
}