<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA</title>
    <style>
        *{ 
            box-sizing: border-box;
        }
        html, body{ 
            margin: 0; 
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container{
            margin: 10px 50px;
        }
        .form-group{
            margin: 10px;
        }
         
         .form-group0{
               
            border: solid 1px black;
            padding: 15px 10px;
        }
        
        input{
            width: 100%;
            border: solid 1px #eee;
            padding: 15px 10px;
        }
        button{
            width: 200px;
            padding: 15px;
            margin-left: 250px;
            background: #fff;
            color: dodgerblue;
            border: solid 1px dodgerblue;
            border-radius:33px;
            cursor: pointer;
            transition:  all .38s ease-in-out;
        }
        button:hover{
            background: dodgerblue;
            color: #fff;
        }
        table tr td{
            border: solid 1px #eee;
            padding: 10px;
        }
        .form-group:before{
         content: " *";
         color: red;
        }
        .container {
    width: 640px;
    height: 660px;
    align: center;
    border: 5px solid #339;
}
.he{
text-align:center;
}
.c1{
margin-left: auto;
margin-right:auto;
}
    </style>


</head>
<body>
    
    <div class="container">
        <h2 class="he"><u>Registration Form</u></h2>
        <br><br>
        <form action="../Actions/doctor.php", method="POST">
            
            <div class="form-group">
             <b>Doctor's name</b>   <input type="text" name="doctorname" id="doctorname"  required placeholder="Enter name" pattern="^[A-Z]\w*$"  oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
            <div class="form-group">
              <b>Email Address</b>  <input type="email" name="email" id="email" placeholder="Enter email address"  required oninvalid="this.setCustomValidity('Please give valid format, like @yahoo.com or @gmail.com, etc,.')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
           <div class="form-group">
              <b>Phone Number </b>  <input type="text" name="phone" id="phone" placeholder="Enter number"  onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
           <div class="form-group">
              <b>Specialization</b>  <input type="text" name="specialization" id="specialization" placeholder="Specialisation"onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
           <div class="form-group">
              <b>Your Info</b>  <input type="text" name="aboutdoctor" id="aboutdoctor" placeholder="About us"onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
           <div class="form-group">
              <b>Experience</b>  <input type="text" name="experience" id="experience" placeholder="exp"onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
           

           
            
            <div class="form-group1">
                <button type="submit">Sign Up</button>
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
