<?php
    include './admin/config.php';
?>

<!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
<?php 
    $resultdata = $con->query("SELECT * from `tbl_topbar` where topbarId='1'");
    $result = array();
    while($row = mysqli_fetch_array($resultdata)) {
        $result[] = $row;
    }
?>
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->
<div class="topbar">
    <div class="container">
        <div class="row">
            <?php $i=0; ?>
            <?php foreach($result as $value){?>
            <div class="bar-phone">
                <i class="fa fa-phone"></i> <span>Call Us :</span>
                <strong><?php echo $value['phone']; ?></strong>
            </div>
            <div class="bar-mail">
                <i class="fa fa-envelope"></i> <span>Mail Us :</span>
                <strong><?php echo $value['email']; ?></strong>
            </div>
            <div class="header-social">
                <a
                    class="facebook"
                    href="#"
                    title="facebook"
                    target="_blank"
                    rel="nofollow"
                    ><i class="fa fa-facebook"></i>
                </a>
                <a
                    class="twitter"
                    href="#"
                    title="twitter"
                    target="_blank"
                    rel="nofollow"
                    ><i class="fa fa-twitter"></i>
                </a>
                <a
                    class="linkedin"
                    href="#"
                    title="linkedin"
                    target="_blank"
                    rel="nofollow"
                    ><i class="fa fa-linkedin"></i>
                </a>
                <a
                    class="google"
                    href="#"
                    title="google-plus"
                    target="_blank"
                    rel="nofollow"
                    ><i class="fa fa-google-plus"></i>
                </a>
                <a
                    class="youtube"
                    href="#"
                    title="youtube-play"
                    target="_blank"
                    rel="nofollow"
                    ><i class="fa fa-youtube-play"></i>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>