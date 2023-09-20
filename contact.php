<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    
    $emailFrom = $_POST['email'];
    $postalcode = $_POST['postalcode'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
   
    $drop_down1 = $_POST['drop_down1'];
    $drop_down2 = $_POST['drop_down2'];

    $mailTo = "info@cathrwaroofing.ca";
    $headers= "From: ".$emailFrom ;

    $txt = "You have received an e-mail from: ".$name."\n Phone Number: ".$phone."\n Postal Code: ".$postalcode."\n Service: ".$drop_down1." ".$drop_down2."\n\n".$message;
   
    mail($mailTo,$headers,$txt);
    
    header("Location: index.php?mailsend");
}
?>