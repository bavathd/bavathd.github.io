<?php

    if(isset($_POST['submit'])) 
    {
        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "askme@bavathd.in";
        $headers = "From: ".$emailFrom;
        $txt = "You have receive an email from".$name.".\n\n".$message;
        mail($mailTo, $subject, $txt, $header);
        header("Location: index.php?mailsend");

    }

?>