<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST["akemail"]))  {
  
  //Email information
  $to = "akashamin94@gmail.com";
  $email = $_REQUEST["akemail"];
  $subject = $_REQUEST["aksubject"];
  $name = $_REQUEST["akname"];
  $message= $_REQUEST["akmessage"];
  
  //send email
  mail($to, $subject, "From:" . $email."\n Name:".$name."\n Message:".$message, "From:" . $email."\n Name:".$name);
  }
  
?>