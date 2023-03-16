<?php


include ('connect.php');




function searchQuery(){
    $query = 'select id,doctorname,specialization from doctor';
        

    $result = mysqli_query($GLOBALS['con'],$query);

    $doctor =  mysqli_fetch_all($result);

    return $doctor;
}

function inosearchQuery(){
    $query = 'select id , name,projectname from innovator';
    $result = mysqli_query($GLOBALS['con'],$query);

    $innovator =  mysqli_fetch_all($result);

    return $innovator;
}



function add_doctor($doctorname,$email,$phone,$specialization,$aboutdoctor,$experience){
    /*
     * TODO : add the property to the NewProperty
     * $companyname,$location,$city,$capacity,$aboutcompany,$membershipplan,$services,$amenities,$imap,$photo1
     */
    $query = 'insert into doctor (doctorname,email,phone,specialization,aboutdoctor,experience)
            values ("'.$doctorname.'","'.$email.'","'.$phone.'","'.$specialization.'","'.$aboutdoctor.'","'.$experience.'")';
    $result = mysqli_query($GLOBALS['con'],$query);
    if($result){
        return true;
    }
    return false;
}


function addContact($firstName,$lastName,$email,$number,$message){
    $query = 'insert into contact (firstName,lastName,email,number,message) values ("'.$firstName.'","'.$lastName.'","'.$email.'","'.$number.'","'.$message.'")';
    $result = mysqli_query($GLOBALS['con'],$query);
    if($result){
        return true;
    }

    return false;
}


function add_innovation($name,$email,$contactdetails,$projectname,$abstract,$reference){
    /*
     * TODO : add the property to the NewProperty
     * $companyname,$location,$city,$capacity,$aboutcompany,$membershipplan,$services,$amenities,$imap,$photo1
     */
    $query = 'insert into innovator (name,email,contactdetails,projectname,abstract,reference)
            values ("'.$name.'","'.$email.'","'.$contactdetails.'","'.$projectname.'","'.$abstract.'","'.$reference.'")';
    $result = mysqli_query($GLOBALS['con'],$query);
    if($result){
        return true;
    }
    return false;
}


function getDataById($id){
    $query = 'select * from `doctor` where id='.$id.';';
    $result = mysqli_query($GLOBALS['con'],$query);
    $doctor =  mysqli_fetch_all($result);

    return $doctor[0];
}

function getDataByinoId($id){
    $query = 'select * from `innovator` where id='.$id.';';
    $result = mysqli_query($GLOBALS['con'],$query);
    $innovator =  mysqli_fetch_all($result);

    return $innovator[0];
}

?>