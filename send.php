
<?php
//if(isset($_POST['send'])){

  $to = 'symody119@gmail.com';
  $subject='feedback from my website';
  //$headers .= 'Content-type: text/plain; charset=utf-8';
  $headers = "From:webmaster@exemple.com\r\b";
  $message = 'Name:' . $_POST['name'] . "\r\n\r\n";
  $message .= 'Email:'.$_POST['email'] . "\r\n\r\n";
  $message .= 'Subject:'.$_POST['subject'] . "\r\n\r\n";
  $message .= 'Textarea:'.$_POST['textarea'] ;

  $success=mail($to, $subject, $message,$headers);

 
?>

<body>
<?php if(isset($success) && $success){ ?>
<h1>Thank you</h1>
your messsage has been sent

<?php } else { ?>
  <h1>Oops !</h1>
  Sorry, there was a problem sending your msgfmt_format_message.

<?php } ?>



</body>
