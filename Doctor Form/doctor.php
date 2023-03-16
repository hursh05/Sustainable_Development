<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="doctor.css" class="rel">
    <title>FORM DATA</title>

</head>
<body>
    
    <div class="container">
        <h2 class="he"><u>Doctor Information</u></h2>
        <br><br>
        <form action="../Actions/doctor.php", method="POST">
            
            <div class="form-group">
             <b>Doctor's name</b>   <input type="text" name="doctorname" id="doctorname"  required placeholder="Enter name"  onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
            <div class="form-group">
              <b>Email Address</b>  <input type="email" name="email" id="email" placeholder="Enter email address"  required oninvalid="this.setCustomValidity('Please give valid format, like @yahoo.com or @gmail.com, etc,.')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
           <div class="form-group">
              <b>Phone Number</b>  <input type="text" name="phone" id="phone" placeholder="Enter number"  onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
           <div class="form-group">
              <b>Specialization</b>  <input type="text" name="specialization" id="specialization" placeholder="Specialisation"onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
           <div class="form-group">
              <b>About us</b>  <input type="text" name="aboutdoctor" id="aboutdoctor" placeholder="About us"onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
           <div class="form-group">
              <b>Experience</b>  <input type="text" name="experience" id="experience" placeholder="experience"onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
           


            
            <div class="form-group1">
              <a href = "../SDGss/sdg.php">
                <button type="submit">Submit</button>
              </a>
            </div>
        </form>
          </div>
        
     
 
    
   <script>
var password = document.getElementById("pwd")
  , confirm_password = document.getElementById("psw-repeat");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;