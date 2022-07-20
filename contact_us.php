<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business_Website</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/27ae433552.js" crossorigin="anonymous"></script>
</head>
<body>
<?php require "includes/header2.php"; ?>
	
<div class="Contact_Us_title">Contact Us</div>
<div class="display_none"></div>
<div class="form_background">
<div class="container">
        <form action="validation.php" method="POST" class="form">
            <div class="form-group">
              <div><h1>Contact Us</h1></div>
                <label for="name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="First Name" tabindex="1" required>
            </div>
            <div class="form-group">
              <label for="subject" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Last Name" tabindex="3" required>
          </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="John@gmail.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div class="button_div">
                <button class="button" type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>
</div>


  

     <?php include "includes/footer.php"; ?>
     
</body>
</html>