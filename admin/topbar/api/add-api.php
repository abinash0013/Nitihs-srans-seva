<?php

    include './../../config.php';

    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $facebookLink = $_POST['facebookLink'];    
    $twitterLink = $_POST['twitterLink'];
    $linkedinLink = $_POST['linkedinLink'];
    $instagramLink = $_POST['instagramLink'];    
    $youtubeLink = $_POST['youtubeLink'];
    
    $insert = $con->query("INSERT INTO `tbl_topbar`(`phone`,`email`, `facebookLink`, `twitterLink`, `linkedinLink`, `instagramLink`, `youtubeLink`) VALUES ('$phone','$email','$facebookLink','$twitterLink','$linkedinLink','$instagramLink','$youtubeLink')");
    
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