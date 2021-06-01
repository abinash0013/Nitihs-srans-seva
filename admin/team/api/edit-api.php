<?php

    include './../../config.php';

    $teamId = $_POST['teamId'];
    $image = $_POST['image'];
    
    if( $_FILES['image']['name'] != null){
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
        
        $path = 'image/'; // upload directory
        $img = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        
        // get uploaded file's extension
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        
        // can upload same image using rand function
        $final_image = rand(1000,1000000).$img;
        
        // check's valid format
        if(in_array($ext, $valid_extensions)){ 
            $path = $path.strtolower($final_image); 
            move_uploaded_file($tmp,'./../../'.$path);
        }
        
        $path = $baseimage.$path;
    }else{
        $path = $image;
    } 
    $name = $_POST['name']; 
    $position = $_POST['position']; 
    
    $insert = $con->query("UPDATE `tbl_team` SET `image`='$path',`name`='$name',`position`='$position' WHERE teamId = $teamId");
    
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