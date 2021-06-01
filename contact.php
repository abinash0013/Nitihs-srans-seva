<?php
	include 'header.php';
?>

<?php
	include 'topbar.php';
?>

<?php
	include 'navbar.php';
?>
<!--link rel="stylesheet" type="text/css" href="dist/sweetalert2.css"-->
<!-- ::::::::::::::::::::::::::::::::::::::> Add Details Ajax Start <::::::::::::::::::::::::::::::::::::::  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function (e) {
        $("#dataform").on('submit',(function(e) {
            $("#btnsubmit").hide();
            $("#loading").show();
            e.preventDefault();
            $.ajax({
                url: "api/contact/add-api.php",
                type: "POST",
                dataType:"JSON",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data)
                {
                    console.log(data)
                    $("#btnsubmit").show(); 
                    $("#loading").hide();
                    if(data.status == '200')
                    {
                        // $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                        //     $("#success-alert").slideUp(500);
                        // });
                        // $("#dataform")[0].reset();
                        alert('success');
                    }
                    else
                    { 
                        $("#err").show()
                    }
                },
                error: function(e) 
                {
                }          
            });
        }));
    });
</script>
<!-- ::::::::::::::::::::::::::::::::::::::> Add Details Ajax End <::::::::::::::::::::::::::::::::::::::  -->
<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6"><h1>CONTACT US</h1></div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb">
                        <a href="index.html">Home</a> / Contact us
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        <div class="row text-center" style="margin-top: -20px">
            <h2>
                Contact Us
            </h2>
            <div class="con-form clearfix">
                <!--div class="row col-sm-10" style="padding-right: 30px; padding-left: 30px;">
                    <div class="alert alert-success" id="success-alert" style="display:none; margin-top:35px;">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>Form Submit Successfully.! </strong> We will Contact You Soon.
                    </div>
                </div-->
                <form action="#" method="post" id='dataform'>
                    <div class="col-md-4">
                        <input
                            type="text"
                            name="name"
                            value=""
                            size="40"
                            class=""
                            id="name"
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="Your Name*" required
                        />
                    </div>
                    <div class="col-md-4">
                        <input
                            type="email"
                            name="email"
                            value=""
                            size="40"
                            class=""
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="Your Email*" required
                        />
                    </div>
                    <div class="col-md-4">
                        <input
                            type="text"
                            name="subject"
                            value=""
                            size="40"
                            class=""
                            id="subject"
                            aria-invalid="false"
                            placeholder="Subject" required
                        />
                    </div>
                    <div class="col-md-12">
                        <textarea
                            name="message"
                            cols="40"
                            rows="5"
                            class=""
                            id="message"
                            aria-invalid="false"
                            placeholder="Message" required
                        ></textarea>
                    </div>
                    <div class="col-xs-12 submit-button">
                        <input
                            type="submit"
                            value="send message"
                            class="btn2"
                            id="btnsubmit"
                            style="border: none; margin: 20px 0 0 0"
                        />
                    </div>
                </form>
            </div>
            <div class="clearfix"></div><div class="col-md-4" style="margin-top: 20px">
                <div class="con-box">
                    <div class="fancy-box-icon">
                        <i class="fa fa-mobile-phone"></i>
                    </div>
                    <h3>PHONE</h3>
                    <div class="fancy-box-content">
                        <p>
                            Phone 01: +91 7988784575<br />
                            Phone 02: +91 9451892769
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 20px">
                <div class="con-box" style="background: #2f3191">
                    <div class="fancy-box-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>ADDRESS</h3>
                    <div class="fancy-box-content">
                        <p>
                            Siswar, Turki, Kudra,<br />
                            Kaimur Bhabua, Bihar(821108)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 20px">
                <div class="con-box">
                    <div class="fancy-box-icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <h3>EMAIL</h3>
                    <div class="fancy-box-content">
                        <p>
                            info@nitishsransseva.com<br />
                            help@nitishsransseva.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="google-maps">
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14825.715690044564!2d83.78416142141043!3d24.981496032788144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398dc56e145e29ed%3A0x146dc9b8ebdfff6b!2sSiswar%2C%20Bihar%20821101!5e0!3m2!1sen!2sin!4v1620470799664!5m2!1sen!2sin" -->
    <!--    width="600" -->
    <!--    height="450" -->
    <!--    style="border:0;" -->
    <!--    allowfullscreen="" -->
    <!--    loading="lazy"-->
    <!--></iframe>-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d451.4459229359057!2d83.78507777163688!3d25.15031287376697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398dc29f0418617f%3A0x7ca15da52a12ccbf!2sSiswar%2C%20Bihar%20821108!5e0!3m2!1sen!2sin!4v1621682126338!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>
    <!-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12789754.135904364!2d-103.6801893!3d38.4992109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1502302011686"
        width="600"
        height="450"
        frameborder="0"
        style="border: 0"
        allowfullscreen
    ></iframe> -->
</div>

<?php
	include 'footer.php';
?>

<script src="dist/sweetalert2.min.js"></script>