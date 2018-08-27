<?php

if (isset($POST['submit']))
 {
    // $name = $_POST['name'];
    // $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "joaquim@gifdesignstudios.com";
    $headers = "From: ".$mailFrom;
    $txt = "You habe received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: http://gif.greatideasfeed.com/contact--sucesss.php"):

 }
?>
