<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'serenaycalisir@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact2 = new PHP_Email_Form;
  $contact2->ajax = true;
  
  $contact2->to = $receiving_email_address;
  $contact2->from_name = $_POST['name'];
  $contact2->from_email = $_POST['email'];
  $contact2->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact2->add_message( $_POST['name'], 'From');
  $contact2->add_message( $_POST['email'], 'Email');
  $contact2->add_message( $_POST['message'], 'Message', 10);

  echo $contact2->send();
?>
