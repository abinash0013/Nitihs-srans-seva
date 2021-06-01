<?php

    include './../../config.php';

    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $insert = $con->query("INSERT INTO `tbl_about`(`title`, `description`) VALUES ('$title','$description')");
    
    $res->success = false;
    if($insert > 0){ 
        $rsp->status = "200";
        $rsp->message = 'Successfully Added';
    }
    else{
        $rsp->status = '204';
        $rsp->message = 'failed';
    }
    echo json_encode($rsp);
    
?>