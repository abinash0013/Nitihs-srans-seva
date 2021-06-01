
<link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
<nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
        <div class="row">
            <div class="attr-nav">
                <a class="sponsor-button" href="become-a-volunteer.php"
                    >Become a Volunteer</a
                >
                <button class="donation" id="button" onClick="myFun();">Donate Now</button>
            </div>
            <div class="navbar-header">
                <button
                    type="button"
                    class="navbar-toggle"
                    data-toggle="collapse"
                    data-target="#navbar-menu"
                >
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand logo" href="index.php"
                    ><img src="images/logoMain.png" class="img-responsive"
                /></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul
                    class="nav navbar-nav navbar-right"
                    data-in="fadeInDown"
                    data-out="fadeOutUp"
                >
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="activities.php">Activities</a></li>
                    <!-- <li><a href="projects.php">Projects</a></li> -->
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<script>
    function myFun()
    {
        Swal.fire('Hello world!')
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>