<?php include('contactForm_process.php'); ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>HTML5 Contact Form</title>
  
      <link rel="stylesheet" href="css/style.css" type="text/css">
  
</head>

<body>

  <div class="container">  
  <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Quick Contact</h3>
    <h4>We would like to hear from you.</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name"  value="<?= $name ?>" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" value="<?= $email ?>" tabindex="2" >
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" name="phone" value="<?= $phone ?>" tabindex="3" >
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site" type="url" name="url" value="<?= $url ?>" tabindex="4">
      <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" name="message"  value="<?= $message ?>" tabindex="5" ></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success; ?></div>
  </form>
 
  
</div>
  
  

</body>

</html>
