<?php

$to = "muhdmishal@gmail.com";
         $subject = "Business Hub enquiry";

         $message = "<b>Website enquiry:</b>";
         $message .= "<h2>Name: ". $_POST['first-name']."</h2>";
         $message .= "<h2>Business Name: ". $_POST['business-name']."</h2>";
         $message .= "<h2>Telephone: ". $_POST['telephone-number']."</h2>";
         $message .= "<h2>Email: ". $_POST['email']."</h2>";

         $header = "From:noreply@propertywing.co.uk \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $retval = mail ($to,$subject,$message,$header);

         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }

?>
