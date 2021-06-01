<?php
	include 'header.php';
?>

<?php
	include 'topbar.php';
?>

<?php
	include 'navbar.php';
?>

<!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
<?php 
    $resultdata = $con->query("SELECT * from `tbl_about` order by aboutId desc");
    $result = array();
    while($row = mysqli_fetch_array($resultdata)) {
        $result[] = $row;
    }
?>
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->
<!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
<?php 
    $resultdatateam = $con->query("SELECT * from `tbl_team` order by teamId desc");
    $resultteam = array();
    while($rowteam = mysqli_fetch_array($resultdatateam)) {
        $resultteam[] = $rowteam;
    }
?>
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->

<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6"><h1>ABOUT US</h1></div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb">
                        <a href="index.php">Home</a> / About us
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        <div class="row text-center">
            <h1>ABOUT NITISH SARANS SEVA</h1>
            <hr />
            <?php $i = 1; ?>
            <?php foreach($result as $value) { ?>
            <p>
                <?php echo $value['description']; ?>
            </p>
            <?php } ?>
            <div class="text-center"></div>
        </div>
    </div>
</section>

<section id="help">
    <div class="container">
        <div class="row text-center">
            <h1>WAYS TO HELP</h1>
            <hr />
            <div class="text-left">
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle">
                        <i class="fa fa-heartbeat">&nbsp;</i>
                    </div>
                    <div class="help-text">
                        <h4>Donate</h4>
                        <div class="line line-50"></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle">
                        <i class="fa fa-user-plus">&nbsp;</i>
                    </div>
                    <div class="help-text">
                        <h4>Participate</h4>
                        <div class="line line-50"></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle">
                        <i class="fa fa-usd">&nbsp;</i>
                    </div>
                    <div class="help-text">
                        <h4>Fundraise</h4>
                        <div class="line line-50"></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle">
                        <i class="fa fa-credit-card">&nbsp;</i>
                    </div>
                    <div class="help-text">
                        <h4>Contribute</h4>
                        <div class="line line-50"></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team">
    <div class="container">
        <div class="row text-center">
            <h1>MEET OUR TEAM</h1>
            <hr />
            
            <div class="member col-xs-6 col-md-3">
                <?php $i=0; ?>
                <?php foreach($resultteam as $resultvalue){?>
                <div class="inner">
                    <div class="avatar-inner">
                        <img src="<?php echo $resultvalue['image']; ?>" style="height: 275px; width: 262px; border-radius: 5px;">
                    </div>
                    <div class="info">
                        <div class="name">
                            <a href="#"><?php echo $resultvalue['name']; ?></a>
                        </div>
                        <div class="regency"><?php echo $resultvalue['position']; ?></div>
                    </div>
                </div>
                <?php } ?>
            </div>

            <!--div class="member col-xs-6 col-md-3">
                <div class="inner">
                    <div class="avatar-inner">
                        <img src="images/team2.jpg" />
                    </div>
                    <div class="info">
                        <div class="name">
                            <a href="#"> Juliana Moor </a>
                        </div>
                        <div class="regency">Volunteer</div>
                    </div>
                </div>
            </div-->

            <!--div class="member col-xs-6 col-md-3">
                <div class="inner">
                    <div class="avatar-inner">
                        <img src="images/team3.jpg" />
                    </div>
                    <div class="info">
                        <div class="name">
                            <a href="#"> Andre Russel</a>
                        </div>
                        <div class="regency">Volunteer</div>
                    </div>
                </div>
            </div-->

            <!--div class="member col-xs-6 col-md-3">
                <div class="inner">
                    <div class="avatar-inner">
                        <img src="images/team4.jpg" />
                    </div>
                    <div class="info">
                        <div class="name">
                            <a href="#"> Amily James</a>
                        </div>
                        <div class="regency">Volunteer</div>
                    </div>
                </div>
            </div-->
        </div>
    </div>
</section>

<?php
	include 'footer.php';
?>
