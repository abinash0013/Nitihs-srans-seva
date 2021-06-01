<?php

    include './../../config.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $insert = $con->query("INSERT INTO `tbl_contact`(`name`,`email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");
    
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