<?php
class Mailer extends CI_Model {
 
 public function message()
 {
$myemail = "byecoliz@hotmail.com@gmail.com";

$name = $this->input->post('contact-name');
$email = $this->input->post('contact-email');
$subject = $this->input->post('contact-subject');
$message = $this->input->post('inputMessage');

$subject = "Someone has sent you a message";
$message = "
Someone has sent you a message using your contact form:

Name: $name
Email: $email
Subject: $subject
Message:$message  ";

mail($myemail, $subject, $message);

}

}
?>