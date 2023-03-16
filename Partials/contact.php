<?php




?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Get In Touch Section</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="../css/contact.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
  <div class="landing-content">
    <nav>
    <a href="../index.php"><img src="../SDG's/MAIN LOGO.png" class="logo" alt="logo" /></a>
      <ul class="nav-links">
        
        <li class="login-btn"><a id="login" href="../Landing Page/index.php" method = "post" target="_blank">Home</a></li>
      </ul>
    </nav>

    <section class="footer_get_touch_outer">
      <div class="container">
        <div class="footer_get_touch_inner grid-70-30">
          <div class="colmun-70 get_form">
            <div class="get_form_inner">
              <div class="get_form_inner_text">
                <h3>Get In Touch</h3>
              </div>
              <form action="../Actions/contact.php" method="POST">
                <div class="grid-50-50">
                  <input type="text" name="FirstName" placeholder="First Name" required>
                  <input type="text" name="LastName" placeholder="Last Name" required>
                  <input type="email" name="Email" placeholder="Email" required>
                  <input type="tel" name="Number" placeholder="Contact Number" required>
                </div>
                <div class="grid-full">
                  <textarea placeholder="Enter your Message" name="Message" cols="30" rows="10"></textarea>
                  <input type="submit" value="Submit">
                </div>
              </form>
            </div>
          </div>
          <div class="colmun-30 get_say_form">
            <h5>Say Hi!</h5>
            <ul class="get_say_info_sec">
              <li>
                <i class="fa-solid fa-envelope" style="color:white; position:relative; margin-right: 10px;"></i>
                <a style="positon:relative; margin-left:5px;" href="mailto:">Enter mail here</a>
              </li>
              <li>
                <i class="fa-brands fa-whatsapp" style="font-size:36px; color:white; position:relative; margin-right: 10px"></i>
                <a style="positon:relative; margin-left:5px;"href="tel:">Enter Contact here</a> 
                <!-- //+91 9140932535 -->
              </li>

            </ul>
            <!-- <ul class="get_say_social-icn">
              <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook" style="font-size:24px; color:white;"></i></a></li>
              <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram" style="font-size:24px; color:white;"></i></a></li>
              <li><a href="https://twitter.com/i/flow/login" target="_blank"><i class="fa-brands fa-twitter" style="font-size:24px; color:white;"></i></a></li>
              <li><a href="https://in.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin" style="font-size:24px; color:white;"></i></a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer>
  <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook" style="font-size:36px; color:#4267B2;"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram" style="font-size:36px; color:rgb(228, 64, 95);"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin" style="font-size:36px; color:#0A66C2;"></i></a>
            <a href="https://in.pinterest.com/" target="_blank"><i class="fa-brands fa-pinterest" style="font-size:36px; color:#E60023;"></i></a>
            <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter" style="font-size:36px; color:#1DA1F2;"></i></a>
        </div>
        <div class="rights-details">
            <p>
                &copy; All rights reserved
            </p>
        </div>
    </footer>
    <button onclick="topFunction()" class="myBtn" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up" style="font-size:20px; color:white;"></i></button>
    <script src="../JS/script.js"></script>
</body>

</html>