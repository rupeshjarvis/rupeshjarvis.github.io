<?php
$to = "rupeshpatil474@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: Snehalmane@gmail.com" . "\r\n";

if(mail($to,$subject,$txt,$headers))
{
    echo "message send";
}
else
{
    echo "not send";
}
?> 