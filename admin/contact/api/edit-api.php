<?php

    include './../../config.php';

    $title = $_POST['title']; 
    $description = $_POST['description']; 
    
    $insert = $con->query("UPDATE `tbl_about` SET  `title`='$title',`description`='$description'");
    
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