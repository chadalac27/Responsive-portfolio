<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "adventchild8992@aol.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have recieved a email from".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}