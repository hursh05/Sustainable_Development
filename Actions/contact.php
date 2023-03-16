<?php


session_start();
include ('functions.php');

if($_POST['FirstName'] == "" or $_POST['LastName'] == "" or $_POST['Number'] == "" or $_POST['Email'] == "" or $_POST['Message'] == ""){
    echo "
        <script>
            alert('Enter the correct values');
            window.location='../Partials/contact.php';
            
    </script>
    
    ";

}

$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$email = $_POST['Email'];
$number = $_POST['Number'];
$message = $_POST['Message'];



if(addContact($firstName,$lastName,$email,$number,$message)){
    echo "
        <script>
            alert('Message sent Successful');
            window.close();
            
    </script>
    
    ";
}else{
    echo "
        <script>
            alert('Unable to send now, please try again later');
            window.location='../';
            
    </script>
    
    ";
}

?>