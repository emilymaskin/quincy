<?php include('header.php');?>

<?php 
  /*validation*/
  $to = "john@standstyledistillers.com";
  $email = $_POST['email'];
  $name = $_POST['name'];
  $subject = "New message from " . $name;
  $body = $_POST['msg'];
  $headers = 'From: ' . $email;
  $error_msg = '';
  
  if(!isset($name) || !isset($email) || !isset($body) || $name == '' || $email == '' || $body == ''){
    $error_msg = "<p>Please fill out all fields. <a class='go_back' href='index.php'>Go back</a></p>";
  }
  else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)) {
    $error_msg = "<p>Please enter a valid email address. <a class='go_back' href='index.php'>Go back</a></p>";
  }
  if ($error_msg){
    echo $error_msg;
  }
  else{
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Message successfully sent! <a href='index.php'>Back to homepage</a></p>";
      } else {
        echo "<p>There was a problem and your message was not sent. Please try again later. <a href='index.php'>Back to homepage</a></p>";
    }
  }
?>