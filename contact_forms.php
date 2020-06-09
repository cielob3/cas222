<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $comment = $_POST['comment'];
    $type = $_POST['type'];

    $mailTo = "cas222@cielo.webhostingforstudents.com";
    $headers = "From: ". $mailFrom.".\n\n ";
    $txt = "You have received an e-mail from ".$name.".\n\n ";
    $content = $name . "\n". $type. "\n". $comment;

    mail($mailTo, $txt, $content);
    header("Location: index.php?mailsend");
}