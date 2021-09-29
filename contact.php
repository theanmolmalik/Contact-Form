<?php


if (isset($_POST['send']))){
    $name = $_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    $mailTo = "mail@lazycoders.email";
    $headers = "From: ".$email;
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$message; 
    

    mail($mailTo,$subject,$txt, $headers);
    header("Location: index.php?mailsend");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Form</title>
</head>

<body>
    <div class="instruction">
        <form action="contact.php" method="post">
        <div id="contact">Contact us</div>
        <input name="name" id="name" type="text" placeholder="Name">
        <input name="email" id="email" type="email" placeholder="Your Email">
        <input name="subject" type="text" id="text" placeholder="Subject">
        <textarea name="message" id="message" placeholder="Your message" rows="4" cols="22"></textarea>
        <button id="send">Send</button>
        </form>
    </div>

</body>

</html>
