<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ude contact</title>
  
</head>
<body>

  <!-- HTML contact form -->
  
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <label for="name">Name</label>
  <input type="text" name="name" id="name">
  <label for="email">Email</label>
  <input type="email" name="email" id="email">
  <label for="subject">Subject</label>
  <input type="text" name="subject" id="subject">
  <label for="message">Message</label>
  <textarea name="message" id="message"></textarea>
  <button type="submit">Send</button>
</form>

  
</body>
</html>