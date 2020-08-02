<?php

if (isset($_POST['submit'])) {
  $firstname = $_POST['name'];
  $lastname = $_POST['name'];
  $emailFrom = $_POST['mail'];
  $subject = $_POST['subject'];
  $subject = $_POST['subject'];

  $mailto = "mikelito.a.luistro@live.com";
  $headers = From: ".$emailFrom;
  $txt = "You have received an E-Mail from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html?mailsend")
}
