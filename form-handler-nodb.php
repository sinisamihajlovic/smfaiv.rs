<?php
// Emails form data to you
// This version requires no database.
// Set your email below
$myemail = "sinisamihajlovic@spojsamasom.in.rs";

// Receive and sanitize Input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up email
$msg = "Poruka od:\nIme i prezime: " . $name . "\nEmail: " . $email . "\nTelefon: " . $phone . "\nPoruka: " . $message;
$msg = wordwrap($msg,70);
mail($myemail,"Kontakt forma sa sajta",$msg);
  echo '<script type="text/javascript">
         window.location = "mail-sent.html"
    </script>';
?>
