<?php
  require_once('API/Class.AlertMined.php');
  $AlertMined = new AlertMined;
  if ($AlertMined->GetMessage()) {
     echo "User is answered the message.";
  }else{
     echo "User is not answered the message.";
  }
  if ($AlertMined->GetMined()) {
     echo "this user mined !";
  }else{
     echo "this user is not mined !";
  }
?>