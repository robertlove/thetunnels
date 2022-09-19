<?php 

mail ("robert@signified.com.au", "Feedback - The Tunnels", "

Feedback - The Tunnels:

Name: $name
Email: $email

Feedback:
$feedback
----------------------------------------
Sent From : $REMOTE_ADDR 


");


?>