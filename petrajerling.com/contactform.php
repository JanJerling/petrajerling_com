<?php

 if (isset($_POST['submit'])){
     
     $name = $_POST['name'];
     $subject = $_POST['subject'];
     $mailFrom = $_POST['email'];
     $message = $_POST['message'];
     
     $mailTo = "petrajerling@petrajerling.com";
     $headers = "From: ".$mailFrom;
     $txt = $name." :\n\n".$message;
     
     mail($mailTo, $subject, $txt, $headers);
     header("Location: ../Pages/Contact.html?mailsend");
     
 }
 