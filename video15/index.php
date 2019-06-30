<?php
  // Message Vars
  $msg = '';

  // Check For Submit
  if(filter_has_var(INPUT_POST, 'submit')) {
    // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check Required Fields
    if(!empty($name) && !empty($email) && !empty($message)) {
      // Passed
      // Check E-Mail
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        // Failed
        $msg = 'Please use a valid E-Mail';
      } else {
        // Passed
        $toEmail = 'test@test.com';
        $subject = 'Contact Request From ' . $name;
        $body = '
          <h2>Contact Request</h2>
          <h4>Name:</h4><p>' . $name .'</p>
          <h4>E-Mail:</h4><p>' . $email .'</p>
          <h4>Message:</h4><p>' . $message .'</p>
        ';

        // E-Mail Headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

        // Additional Headers
        $headers .= "From: " . $name . " <" . $email . ">" . "\r\n";

        if(mail($toEmail, $subject, $body, $headers)) {
          // E-Mail Sent
          $msg = 'Your E-Mail has been sent';
        } else {
          $msg = 'Your E-Mail was not sent';
        }
      }
    } else {
      // Failed
      $msg = 'Please fill in all fields';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
</head>
<body>
  <?php if($msg != '') : ?>
    <strong><?php echo $msg; ?></strong>
  <?php endif; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
      <label>Name</label>
      <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
    </div>
    <div>
      <label>E-Mail</label>
      <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
    </div>
    <div>
      <label>Message</label>
      <textarea name="message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
    </div>
    <button type="submit" name="submit">Submit</button>
  </form>
</body>
</html>
