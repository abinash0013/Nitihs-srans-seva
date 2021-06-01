<?php
	include 'header.php';
?>

<?php
	include 'topbar.php';
?>

<?php
	include 'navbar.php';
?>

<?php
	include 'banner.php';
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
    $resultdataimage = $con->query("SELECT * from `tbl_gallery` order by galleryId desc");
    $resultimage = array();
    while($rowimage = mysqli_fetch_array($resultdataimage)) {
        $resultimage[] = $rowimage;
    }
?>
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->

<section id="about-sec">
    <div class="container">
        <div class="row text-center">
        <h1>ABOUT NITISH SRANS SEVA</h1>
            <hr />
            <?php $i=0; ?>
            <?php foreach($result as $value){?>
            <p>
                <?php echo $value['description']; ?>
            </p>
            <!--p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni dolores eos qui ratione voluptatem sequi
                nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
                sit amet, consectetur, adipisci velit, sed quia non numquam eius
                modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                voluptatem. Ut enim ad minima veniam, quis nostrum
                exercitationem ullam corporis suscipit laboriosam, nisi ut
                aliquid ex ea commodi consequatur? Quis autem vel eum iure
                reprehenderit qui in ea voluptate velit esse quam nihil
                molestiae consequatur.
            </p-->
            <?php } ?>
            <div class="text-center">
                <a href="donate.php" class="btn1">donate now</a>
                <a href="about-us.php" class="btn2">Read More</a>
            </div>
        </div>
    </div>
</section>

<section id="help">
    <div class="container">
        <div class="row text-center">
            <h1>WAYS TO HELP US</h1>
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

<section id="video-sec">
    <div class="container">
        <div class="row text-center">
            <h1>How can you help?</h1>
            <hr />
            <!-- <h5>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </h5> -->
            <div class="text-left">
                <div class="col-md-6 clearfix top-off">
                    <!-- <video width="400" controls>
                        <source src="images/mov_bbb.mp4" type="video/mp4" />
                    </video> -->
                    <div class="media">
                        <div class="media-image">
                            <img
                                src="images/volunter.png"
                                class="attachment-full size-full"
                                alt="g1"
                            />
                        </div>
                        <div class="media-text">
                            <h5>VOLUNTEER</h5>
                            <p>
                                Give us a brief description of the service that
                                you are promoting.
                            </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-image">
                            <img
                                src="images/gift.png"
                                class="attachment-full size-full"
                                alt="g1"
                            />
                        </div>
                        <div class="media-text">
                            <h5>GIFT</h5>
                            <p>
                                Give us a brief description of the service that
                                you are promoting.
                            </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-image">
                            <img
                                src="images/scolarship.png"
                                class="attachment-full size-full"
                                alt="g1"
                            />
                        </div>
                        <div class="media-text">
                            <h5>SCHOLARSHIP</h5>
                            <p>
                                Give us a brief description of the service that
                                you are promoting.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 clearfix top-off">
                    <div class="media">
                        <div class="media-image">
                            <img
                                src="images/charity.png"
                                class="attachment-full size-full"
                                alt="g1"
                            />
                        </div>
                        <div class="media-text">
                            <h5>CAMPAIGN</h5>
                            <p>
                                Give us a brief description of the service that
                                you are promoting.
                            </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-image">
                            <img
                                src="images/suggest.png"
                                class="attachment-full size-full"
                                alt="g1"
                            />
                        </div>
                        <div class="media-text">
                            <h5>SUGGESTION</h5>
                            <p>
                                Give us a brief description of the service that
                                you are promoting.
                            </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-image">
                            <img
                                src="images/donation.png"
                                class="attachment-full size-full"
                                alt="g1"
                            />
                        </div>
                        <div class="media-text">
                            <h5>DONATION</h5>
                            <p>
                                Give us a brief description of the service that
                                you are promoting.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section id="projects-sec">
    <div class="container">
        <div class="row text-center">
            <h1>OUR PROJECTS</h1>
            <hr />
            <h5>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
            </h5>
            <div class="text-center">
                <div class="col-md-4 clearfix top-off">
                    <div class="grid-image">
                        <img src="images/test1.jpg" />
                    </div>
                    <div class="post-content">
                        <h3>
                            Nepal Earthquake: Clean Water Initiative
                        </h3>
                        <hr />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="projects.html" title=""
                            >View Project</a
                        >
                    </div>
                </div>
                <div class="col-md-4 clearfix top-off">
                    <div class="grid-image">
                        <img src="images/test2.jpg" />
                    </div>
                    <div class="post-content">
                        <h3>
                            Nepal Earthquake: Clean Water Initiative
                        </h3>
                        <hr />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="projects.html" title=""
                            >View Project</a
                        >
                    </div>
                </div>
                <div class="col-md-4 clearfix top-off">
                    <div class="grid-image">
                        <img src="images/test3.jpg" />
                    </div>
                    <div class="post-content">
                        <h3>
                            Nepal Earthquake: Clean Water Initiative
                        </h3>
                        <hr />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="projects.html" title=""
                            >View Project</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="gallery-sec">
    <div class="container">
        <div class="row text-center">
            <h1>OUR GALLERY</h1>
            <hr />
            <ul class="clearfix">
                <?php $i=0; ?>
                <?php foreach($resultimage as $valueimage){?>
                <li>
                    <!--a
                        href=""
                        class="swipebox"
                        title="My Caption"
                    -->
                        <div class="image">
                            <img src="<?php echo $valueimage['image']; ?>" style="height:185px; width:273px;">
                            <div class="overlay">
                                <!--i class="fa fa-search-plus"></i-->
                            </div>
                        </div
                    ><!--/a-->
                </li>
                <?php } ?>
                <!--<li>-->
                <!--    <a-->
                <!--        href="images/gallery2.jpg"-->
                <!--        class="swipebox"-->
                <!--        title="My Caption"-->
                <!--    >-->
                <!--        <div class="image">-->
                <!--            <img src="images/gallery2.jpg" />-->
                <!--            <div class="overlay">-->
                <!--                <i class="fa fa-search-plus"></i>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a-->
                <!--        href="images/gallery3.jpg"-->
                <!--        class="swipebox"-->
                <!--        title="My Caption"-->
                <!--    >-->
                <!--        <div class="image">-->
                <!--            <img src="images/gallery3.jpg" />-->
                <!--            <div class="overlay">-->
                <!--                <i class="fa fa-search-plus"></i>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a-->
                <!--        href="images/gallery4.jpg"-->
                <!--        class="swipebox"-->
                <!--        title="My Caption"-->
                <!--    >-->
                <!--        <div class="image">-->
                <!--            <img src="images/gallery4.jpg" />-->
                <!--            <div class="overlay">-->
                <!--                <i class="fa fa-search-plus"></i>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a-->
                <!--        href="images/gallery5.jpg"-->
                <!--        class="swipebox"-->
                <!--        title="My Caption"-->
                <!--    >-->
                <!--        <div class="image">-->
                <!--            <img src="images/gallery5.jpg" />-->
                <!--            <div class="overlay">-->
                <!--                <i class="fa fa-search-plus"></i>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a-->
                <!--        href="images/gallery6.jpg"-->
                <!--        class="swipebox"-->
                <!--        title="My Caption"-->
                <!--    >-->
                <!--        <div class="image">-->
                <!--            <img src="images/gallery6.jpg" />-->
                <!--            <div class="overlay">-->
                <!--                <i class="fa fa-search-plus"></i>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a-->
                <!--        href="images/gallery7.jpg"-->
                <!--        class="swipebox"-->
                <!--        title="My Caption"-->
                <!--    >-->
                <!--        <div class="image">-->
                <!--            <img src="images/gallery7.jpg" />-->
                <!--            <div class="overlay">-->
                <!--                <i class="fa fa-search-plus"></i>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a-->
                <!--        href="images/gallery8.jpg"-->
                <!--        class="swipebox"-->
                <!--        title="My Caption"-->
                <!--    >-->
                <!--        <div class="image">-->
                <!--            <img src="images/gallery8.jpg" />-->
                <!--            <div class="overlay">-->
                <!--                <i class="fa fa-search-plus"></i>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</li>-->
            </ul>
            <div class="text-center">
                <a href="gallery.php" class="btn1">View More</a>
            </div>
        </div>
    </div>
</section>
<!--    <div class="callout">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Change Their World. Change Yours. This changes
                    everything.
                </h2>
            </div>

            <div class="col-md-6">
                <div class="callout-actions">
                    <a href="contact.html" class="button"
                        >Become Volunteer</a
                    >

                    <span class="callout-separator">
                        <span>Or</span>
                    </span>

                    <a href="donate.html" class="button"
                        >Donate For Cause</a
                    >
                </div>
            </div>
        </div>
    </div>
</div> -->

<?php
	include 'footer.php';
?>
