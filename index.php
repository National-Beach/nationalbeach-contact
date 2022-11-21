<?php include 'sendmain.php'; ?>
<DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Beach Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>
        <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
    <!------ Contact selection start ------>
    <div class="contact-selection">
      <div class="contact-info">
        <div><i class="fas fa-envelope"></i>contact@email.com</div>
        <div><i class="fas fa-clock"></i>6:00 AM to 8:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Discord (Example: Cats#9796)" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--- Contact selection end ------>
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
  </body>
</html>
