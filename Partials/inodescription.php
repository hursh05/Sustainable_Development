<?php
session_start();
include ("../Actions/functions.php");

$id = $_POST['id'];
$innovator =getDataByinoId($id);
?>

<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/description.css">
    
</head>
<body>
<div class="landing-content">
        <nav>
        
                
                
                <li><a href="../Actions/contact.php" target="_blank">Let's talk</a></li>
            </ul>
        </nav>
</div>
<section>
<div class="first">
    <div class="second">
        <div class="ig">
            <img src="data:image/jpeg;base64,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" alt="">
        </div>
        <div class="secondinner">
            <br>
            <b> name:</b>
            <?php
            echo "   " , $innovator[1];
            ?><br>
            <br>
            <b> Email Address:</b>
            <?php echo "   " , $innovator[2]; ?><br>
            <br>
            <b>Contact Details:</b>
            <?php echo $innovator[3]; ?><br>
            <br>
            <br>
            <b> project name:</b>
            <?php echo $innovator[4]; ?><br>
            <br>
            <b> Abstract:</b>
            <?php echo $innovator[5]; ?><br>
            <br>
            <b> Reference:</b>
            <?php echo $innovator[6]; ?><br>
            <br>
            </div>
    </div>
        
<!--        TODO : Amenities are destructured , You need to style it Properly   -->
        <br>
        <br>
        <div class="back">
            <a  href="../Landing Page/index.php"><button type="button">Home</button></a>
        </div>
    </div>


</div>
</section>

<footer>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook" style="font-size:36px; color:#4267B2;"></i></i></a>
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