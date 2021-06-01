<?php

    include './../../config.php';

    $topbarId = $_POST['topbarId'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $facebookLink = $_POST['facebookLink'];    
    $twitterLink = $_POST['twitterLink'];
    $linkedinLink = $_POST['linkedinLink'];
    $instagramLink = $_POST['instagramLink'];    
    $youtubeLink = $_POST['youtubeLink'];
    
    $insert = $con->query("UPDATE `tbl_topbar` SET `phone`='$phone',`email`='$email',`facebookLink`='$facebookLink',`twitterLink`='$twitterLink',`linkedinLink`='$linkedinLink',`instagramLink`='$instagramLink',`youtubeLink`='$youtubeLink' where topbarId = '$topbarId'");
    
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