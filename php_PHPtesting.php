<?php

if (isset($_POST['submit'])) {

  $name = $_POST['name']
  $mailFrom = $_POST['email']

  $mailTo = "mmoses@lithia.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name."."

mail($mailTo, $subject, $txt, $headers);
header("Location: html_PHPtesting.html?mailsent")

}
