<?php
include './../../config.php';

if(isset($_POST['teamId'])){
	$id=$_POST['teamId'];
 
	$sql = $con->query("DELETE FROM `tbl_team` WHERE teamId='14'");
    
    if($sql > 0)
    { 
        $rsp->status = "200";
        $rsp->message='Successfully Deleted';
    }
    else{
        $rsp->status='204';
        $rsp->message='Something Went Wrong';
    }

    echo json_encode($rsp);
	 
}
  