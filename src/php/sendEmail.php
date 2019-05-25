<?php
if(iiset($_POST['email'])){

    $email_to="alicja.bielska97@gmail.com";


    if(isset($_POST['about-input']) &&
        isset($_POST['name-input']) &&
        isset($_POST['email-input']) &&
        isset($_POST['message-input'])) {

    $about_input = $_POST['about-input'];
    $name_input = $_POST['name-input'];
    $email_input = $_POST['email-input'];
    $message_input = $_POST['message-input'];


    //email headers
    $headers  ="From:".$name_input."<".$email_input.">\r\n";
    $headers .="reply-To:".$email_input."\r\n";
    $headers .="NINE-Version: 1.0\r\n";
    $headers .="Content-type: text; charset=utf-8";

    //confirmation mail
    $user=$email_input;
    $usersubject = "Confirm";
    $userheaders = "From: alicja.bielska97@gmail.com\n";
    $usermessage = "Thank you for message.";


    //sending process
    $send=mail($to, $about_input, $message_input, $headers);
    $confirm=mail($user, $usersubject, $userheaders,$usermessage );

    if($send && $confirm){
    echo "success";
    }

    else{
    echo "Failed";
    }

    }
}
?>