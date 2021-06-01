<?php

    include './../../config.php';

    $donationId = $_POST['donationId']; 
    $status = $_POST['status']; 
    
    $insert = $con->query("UPDATE `tbl_donation` SET `donationId`='$donationId',`status`='$status'");
    
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