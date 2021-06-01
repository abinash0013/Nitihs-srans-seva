<footer class="footer">
    <div class="footer-body">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-section">
                        <h4 class="footer-section-title">
                            About Charity
                        </h4>
                        <!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <p>
                                NITISH SRANS SEVA came in existence in the memory of my loving Son/brother Nitish kumar who is the key member of our SRANS Family. The reason to develop and to open NGO is to help people so that they didn't face any problem what we have faced.
                            </p>
                        </div>
                        <!-- /.footer-section-body -->
                    </div>
                    <!-- /.footer-section -->
                </div>
                <!-- /.columns large-3 medium-12 -->

                <div class="col-md-4">
                    <div class="footer-section">
                        <h4 class="footer-section-title">
                            Quick Links
                        </h4>
                        <!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <ul class="list-links">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>

                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>

                                <li>
                                    <a href="activities.html"
                                        >Activities</a
                                    >
                                </li>

                                <li>
                                    <a href="gallery.html">Gallery</a>
                                </li>

                                <li>
                                    <a href="contact.html"
                                        >Contact Us</a
                                    >
                                </li>
                            </ul>
                            <!-- /.list-links -->
                        </div>
                        <!-- /.footer-section-body -->
                    </div>
                    <!-- /.footer-section -->
                </div>
                <!-- /.columns large-3 medium-12 -->

                <div class="col-md-4">
                    <div class="footer-section">
                        <h4 class="footer-section-title">Contact Us</h4>
                        <!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <p>
                                <b>Address:</b> Siswar, Turki, Kudra,
                                                Kaimur Bhabua, Bihar(821108)
                            </p>

                            <div class="footer-contacts">
                                <p>
                                    <b>
                                        <i class="fa fa-phone"></i>
                                        Phone:
                                    </b>

                                    7988784575
                                </p>

                                <p>
                                    <b>
                                        <i class="fa fa-envelope-o"></i>
                                        Email:
                                    </b>

                                    info@nitishsransseva.com
                                </p>
                            </div>
                            <!-- /.footer-contacts -->
                        </div>
                        <!-- /.footer-section-body -->
                    </div>
                    <!-- /.footer-section -->
                </div>
                <!-- /.columns large-3 medium-12 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.footer-body -->

    <!-- <div class="bwt-footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <div class="left-text">
                        Copyright &copy; Charity Hope 2017. All Rights
                        Reserved
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</footer>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/banner.js"></script>
<script src="js/jquery.swipebox.js"></script>
<script src="js/owl.carousel.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        /* Basic Gallery */
        $(".swipebox").swipebox();

        /* Video */
        $(".swipebox-video").swipebox();

        /* Dynamic Gallery */
        $("#gallery").click(function (e) {
            e.preventDefault();
            $.swipebox([
                {
                    href: "http://swipebox.csag.co/mages/image-1.jpg",
                    title: "My Caption",
                },
                {
                    href: "http://swipebox.csag.co/images/image-2.jpg",
                    title: "My Second Caption",
                },
            ]);
        });
    });
</script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            autoPlay: 5000, //Set AutoPlay to 3 seconds
            navigation: true,
            navigationText: ["", ""],
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
        });
    });
</script>
<script src="js/script.js"></script>
</body>
</html>
