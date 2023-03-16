<?php
session_start();
include ('connect.php');
include ('functions.php');
//check if the session has the userid

//Storing the data from the form in
$doctorname = $_POST['doctorname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$specialization=$_POST['specialization'];
$aboutdoctor=$_POST['aboutdoctor'];
$experience=$_POST['experience'];

//Connecting to the database
/*
 *
 * We have the connection in the connect file
 *
 * We have to just use the global variable
 *
 * add the data into the table `property`
 *
 * if unable to enter , we have to show an error an render back to the home page / addproperty page
 */
//check if the property with the same name exits
//if not exits the proced to add the property

//    Property does not exits and can proceed with the adding of the property
    $result = add_doctor($doctorname,$email,$phone,$specialization,$aboutdoctor,$experience);
    if($result){
        echo '
        <script>
            alert("Registered successfully...Thanks For contributing towards betterment of society !!")
            window.location="../SDGss/sdg.php";
        </script>
        
    ';
    }else{
        echo '
        <script>
            alert("Unable to register now , please try again after some time")
            window.location="../";
        </script>
    ';
    }

   


