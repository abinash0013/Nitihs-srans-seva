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
    $resultdata = $con->query("SELECT * from `tbl_activity` order by activityId desc");
    $result = array();
    while($row = mysqli_fetch_array($resultdata)) {
        $result[] = $row;
    }
?>
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->

<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-8"><h1>OUR RECENT ACTIVITIES</h1></div>
                <div class="col-sm-4">
                    <h6 class="breadcrumb">
                        <a href="index.html">Home</a> / Activities
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        <div class="row text-left">
            <?php $i=0; ?>
            <?php foreach($result as $value)
                if($value['activityId']%2==0){
            ?>
                <div class="act-box clearfix">
                    <div class="col-md-6">
                        <div class="image">
                            <img src="<?php echo $value['image']; ?>" style="height:300px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="act-pad">
                            <h4><?php echo $value['title']; ?></h4>
                            <p>
                               <?php echo $value['description']; ?>
                            </p>
                            <div class="price">
                                Date:
                                <span class="goal"> <?php echo $value['date']; ?></span>
                            </div>
                            <!--a href="activities.html" class="btn1">donate now</a-->
                            <div class="clearfix"></div>
                           
                        </div>
                    </div>
                </div>
            <?php 
            }  else { ?>
                <div class="act-box clearfix">
                <div class="col-md-6 col-md-push-6">
                    <div class="image">
                        <img src="<?php echo $value['image']; ?>" style="height:300px;">
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="act-pad">
                        <h4><?php echo $value['title']; ?></h4>
                        <p>
                           <?php echo $value['description']; ?>
                        </p>
                        <div class="price">
                                Date:
                                <span class="goal"> <?php echo $value['date']; ?></span>
                            </div>
                            <!--a href="activities.html" class="btn1">donate now</a-->
                            <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <?php }
            ?>

            <!--<div class="act-box clearfix">-->
            <!--    <div class="col-md-6">-->
            <!--        <div class="image">-->
            <!--            <img src="images/act.jpg" />-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-md-6">-->
            <!--        <div class="act-pad">-->
            <!--            <h4>Sponsor a child today</h4>-->
            <!--            <p>-->
            <!--                Lorem ipsum dolor sit amet, consectet ur-->
            <!--                adipisicing. Odit qui minima praese ntium obcaecati-->
            <!--                minima praesent Odit qui minima praese ntium-->
            <!--                obcaecati minima Odit qui minima praese ntium-->
            <!--                obcaecati minima-->
            <!--            </p>-->
            <!--            <div class="price">-->
            <!--                Raised: $1890-->
            <!--                <span class="goal">Goal: $2500</span>-->
            <!--            </div>-->
            <!--            <a href="activities.html" class="btn1">donate now</a>-->
            <!--            <div class="clearfix"></div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="act-box clearfix">-->
            <!--    <div class="col-md-6 col-md-push-6">-->
            <!--        <div class="image">-->
            <!--            <img src="images/act.jpg" />-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-md-6 col-md-pull-6">-->
            <!--        <div class="act-pad">-->
            <!--            <h4>Sponsor a child today</h4>-->
            <!--            <p>-->
            <!--                Lorem ipsum dolor sit amet, consectet ur-->
            <!--                adipisicing. Odit qui minima praese ntium obcaecati-->
            <!--                minima praesent Odit qui minima praese ntium-->
            <!--                obcaecati minima Odit qui minima praese ntium-->
            <!--                obcaecati minima-->
            <!--            </p>-->
            <!--            <div class="price">-->
            <!--                Raised: $1890-->
            <!--                <span class="goal">Goal: $2500</span>-->
            <!--            </div>-->
            <!--            <a href="activities.html" class="btn1">donate now</a>-->
            <!--            <div class="clearfix"></div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
</section>

<!--<section id="about-sec">-->
<!--    <div class="container">-->
<!--        <div class="row text-center">-->
<!--            <div id="owl-demo" class="owl-carousel owl-theme">-->
<!--                <div class="item">-->
<!--                    <div class="sponser-box">-->
<!--                        <img src="images/sponser.jpg" alt="Owl Image" />-->
<!--                        <h4>Hi, I’m Ogwang</h4>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">Where I Live</div>-->
<!--                            <div class="col-xs-6">Uganda</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Age</div>-->
<!--                            <div class="col-xs-6">7</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Birthday</div>-->
<!--                            <div class="col-xs-6">1/09/2009</div>-->
<!--                        </div>-->
<!--                        <a href="sponser.html" class="btn1"-->
<!--                            >Sponsor me</a-->
<!--                        >-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="item">-->
<!--                    <div class="sponser-box">-->
<!--                        <img src="images/sponser.jpg" alt="Owl Image" />-->
<!--                        <h4>Hi, I’m Ogwang</h4>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">Where I Live</div>-->
<!--                            <div class="col-xs-6">Uganda</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Age</div>-->
<!--                            <div class="col-xs-6">7</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Birthday</div>-->
<!--                            <div class="col-xs-6">1/09/2009</div>-->
<!--                        </div>-->
<!--                        <a href="sponser.html" class="btn1"-->
<!--                            >Sponsor me</a-->
<!--                        >>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="item">-->
<!--                    <div class="sponser-box">-->
<!--                        <img src="images/sponser.jpg" alt="Owl Image" />-->
<!--                        <h4>Hi, I’m Ogwang</h4>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">Where I Live</div>-->
<!--                            <div class="col-xs-6">Uganda</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Age</div>-->
<!--                            <div class="col-xs-6">7</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Birthday</div>-->
<!--                            <div class="col-xs-6">1/09/2009</div>-->
<!--                        </div>-->
<!--                        <a href="sponser.html" class="btn1"-->
<!--                            >Sponsor me</a-->
<!--                        >>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="item">-->
<!--                    <div class="sponser-box">-->
<!--                        <img src="images/sponser.jpg" alt="Owl Image" />-->
<!--                        <h4>Hi, I’m Ogwang</h4>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">Where I Live</div>-->
<!--                            <div class="col-xs-6">Uganda</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Age</div>-->
<!--                            <div class="col-xs-6">7</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Birthday</div>-->
<!--                            <div class="col-xs-6">1/09/2009</div>-->
<!--                        </div>-->
<!--                        <a href="sponser.html" class="btn1"-->
<!--                            >Sponsor me</a-->
<!--                        >>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="item">-->
<!--                    <div class="sponser-box">-->
<!--                        <img src="images/sponser.jpg" alt="Owl Image" />-->
<!--                        <h4>Hi, I’m Ogwang</h4>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">Where I Live</div>-->
<!--                            <div class="col-xs-6">Uganda</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Age</div>-->
<!--                            <div class="col-xs-6">7</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Birthday</div>-->
<!--                            <div class="col-xs-6">1/09/2009</div>-->
<!--                        </div>-->
<!--                        <a href="sponser.html" class="btn1"-->
<!--                            >Sponsor me</a-->
<!--                        >>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="item">-->
<!--                    <div class="sponser-box">-->
<!--                        <img src="images/sponser.jpg" alt="Owl Image" />-->
<!--                        <h4>Hi, I’m Ogwang</h4>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">Where I Live</div>-->
<!--                            <div class="col-xs-6">Uganda</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Age</div>-->
<!--                            <div class="col-xs-6">7</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Birthday</div>-->
<!--                            <div class="col-xs-6">1/09/2009</div>-->
<!--                        </div>-->
<!--                        <a href="sponser.html" class="btn1"-->
<!--                            >Sponsor me</a-->
<!--                        >>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="item">-->
<!--                    <div class="sponser-box">-->
<!--                        <img src="images/sponser.jpg" alt="Owl Image" />-->
<!--                        <h4>Hi, I’m Ogwang</h4>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">Where I Live</div>-->
<!--                            <div class="col-xs-6">Uganda</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Age</div>-->
<!--                            <div class="col-xs-6">7</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Birthday</div>-->
<!--                            <div class="col-xs-6">1/09/2009</div>-->
<!--                        </div>-->
<!--                        <a href="sponser.html" class="btn1"-->
<!--                            >Sponsor me</a-->
<!--                        >>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="item">-->
<!--                    <div class="sponser-box">-->
<!--                        <img src="images/sponser.jpg" alt="Owl Image" />-->
<!--                        <h4>Hi, I’m Ogwang</h4>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">Where I Live</div>-->
<!--                            <div class="col-xs-6">Uganda</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Age</div>-->
<!--                            <div class="col-xs-6">7</div>-->
<!--                        </div>-->
<!--                        <div class="spon-bdr clearfix">-->
<!--                            <div class="col-xs-6">My Birthday</div>-->
<!--                            <div class="col-xs-6">1/09/2009</div>-->
<!--                        </div>-->
<!--                        <a href="sponser.html" class="btn1"-->
<!--                            >Sponsor me</a-->
<!--                        >>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<?php
	include 'footer.php';
?>