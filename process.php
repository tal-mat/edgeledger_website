<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "talmatsil@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: C:\Users\Tal\Documents\Programming courses\Modern HTML & CSS From The Beginning (Including Sass)\edgeledger_website\success.html');
  }