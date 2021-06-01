<?php

    include './../../config.php';

    $volunteerId = $_POST['volunteerId']; 
    $firstName = $_POST['firstName']; 
    $lastName = $_POST['lastName']; 
    $phone = $_POST['phone']; 
    $email = $_POST['email']; 
    $address = $_POST['address']; 
    $city = $_POST['city']; 
    $country = $_POST['country']; 
    $skill = $_POST['skill']; 
    $experience = $_POST['experience']; 
    $intrest = $_POST['intrest']; 
    $message = $_POST['message']; 
    
    $insert = $con->query("UPDATE `tbl_volunteer` SET `firstName`='$firstName',`lastName`='$lastName',`phone`='$phone',`email`='$email',`address`='$address',`city`='$city',`country`='$country',`skill`='$skill',`experience`='$experience',`intrest`='$intrest',`message`='$message' where volunteerId = '$volunteerId' ");
    
    $res->success = false;
    if($insert > 0){ 
        $rsp->status = "200";
        $rsp->message = 'Successfully Updated';
    }
    else{
        $rsp->status = '204';
        $rsp->message = 'Something Went Wrong';
    }
    echo json_encode($rsp);

?>