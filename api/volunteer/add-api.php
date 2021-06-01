<?php

    include './../../config.php';

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
    
    $insert = $con->query("INSERT INTO `tbl_volunteer`(`firstName`, `lastName`, `phone`, `email`, `address`, `city`, `country`, `skill`, `experience`, `intrest`, `message`) VALUES ('$firstName','$lastName','$phone','$email','$address','$city','$country','$skill','$experience','$intrest','$message')");
    
    $res->success = false;
    if($insert > 0){ 
        $rsp->status = "200";
        $rsp->message = 'Successfully Added';
    }
    else{
        $rsp->status = '204';
        $rsp->message = 'Failed';
    }
    echo json_encode($rsp);
    
?>