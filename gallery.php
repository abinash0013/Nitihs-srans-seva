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
    $resultdata = $con->query("SELECT * from `tbl_gallery` order by galleryId desc");
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
                <div class="col-sm-6"><h1>GALLERY</h1></div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb">
                        <a href="index.php">Home</a> / Gallery
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery-sec" style="margin-top: 40px">
    <div class="container">
        <div class="row text-center">
            <ul class="clearfix">
                <?php $i=0; ?>
                <?php foreach($result as $value){?>
                <li>
                    <!--a
                        href=""
                        class="swipebox"
                        title="My Caption"
                    -->
                        <div class="image">
                            <img src="<?php echo $value['image']; ?>" style="height:185px; width:273px;">
                            <div class="overlay">
                                <!--i class="fa fa-search-plus"></i-->
                            </div>
                        </div
                    ><!--/a-->
                </li>
                <?php } ?>
                <!--li>
                    <a
                        href="images/gallery2.jpg"
                        class="swipebox"
                        title="My Caption"
                    >
                        <div class="image">
                            <img src="images/gallery2.jpg" />
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </li-->
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
                <!--<li>-->
                <!--    <a-->
                <!--        href="images/gallery1.jpg"-->
                <!--        class="swipebox"-->
                <!--        title="My Caption"-->
                <!--    >-->
                <!--        <div class="image">-->
                <!--            <img src="images/gallery1.jpg" />-->
                <!--            <div class="overlay">-->
                <!--                <i class="fa fa-search-plus"></i>-->
                <!--            </div></div-->
                <!--    ></a>-->
                <!--</li>-->
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
        </div>
    </div>
</section>

<?php
    include 'footer.php';
?>
