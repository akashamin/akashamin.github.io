<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST["email"]))  {
  
  //Email information
  $to = "akashamin94@gmail.com";
  $email = $_REQUEST["email"];
  $subject = $_REQUEST["subject"];
  $message= $_REQUEST["message"];
  
  //send email
  mail($to, $subject, $message, "From:" . $email);
  }
  
?>