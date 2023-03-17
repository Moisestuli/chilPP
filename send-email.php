<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'moisestulitekule7@gmail.com'; // replace with your email address
  $subject = 'New Message from Website';
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  if (mail($to, $subject, $body)) {
    echo '<p>Your message has been sent!</p>';
  } else {
    echo '<p>There was an error sending your message. Please try again.</p>';
  }
}
?>
