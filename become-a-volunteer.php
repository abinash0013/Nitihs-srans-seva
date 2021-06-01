<?php
	include 'header.php';
?>

<?php
	include 'topbar.php';
?>

<?php
	include 'navbar.php';
?>

<!-- ::::::::::::::::::::::::::::::::::::::> Add Details Ajax Start <::::::::::::::::::::::::::::::::::::::  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function (e) {
        $("#dataform").on('submit',(function(e) {
            $("#btnsubmit").hide();
            $("#loading").show();
            e.preventDefault();
            $.ajax({
                url: "api/volunteer/add-api.php",
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
                        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                            $("#success-alert").slideUp(500);
                        });
                        $("#dataform")[0].reset(); 
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
                <div class="col-sm-6"><h1>BECOME A VOLUNTEER</h1></div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb">
                        <a href="index.html">Home</a> / Become A Volunteer
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        <div class="row text-center">
            <h2 style="margin-top: 0">
                Feel Free To Join Us
            </h2>
            <div class="con-form clearfix">
                <!-- <p class="text-algin-left">Personal Details</p> -->
                <div class="row col-sm-12" style="padding-right: 30px; padding-left: 30px;">
                    <div class="alert alert-success" id="success-alert" style="display:none; margin-top:35px;">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>Thanks For Joining Us..</strong> 
                    </div>
                </div>
                <form action="#" method="post" id='dataform'>
                    <div class="col-md-6">
                        <input
                            type="text"
                            name="firstname"
                            value=""
                            size="40"
                            class=""
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="First Name*"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            name="lastName"
                            value=""
                            size="40"
                            class=""
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="Last Name*"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            name="phone"
                            value=""
                            size="40"
                            class=""
                            aria-invalid="false"
                            placeholder="Phone Number*"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <input
                            type="email"
                            name="email"
                            value=""
                            size="40"
                            class=""
                            aria-invalid="false"
                            placeholder="Email ID*"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            name="address"
                            value=""
                            size="40"
                            class=""
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="Address*"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            name="city"
                            value=""
                            size="40"
                            class=""
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="City / Town*"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            name="country"
                            value=""
                            size="40"
                            class=""
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="Country*"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            name="skill"
                            value=""
                            size="40"
                            class=""
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="Skill*"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            name="experience"
                            value=""
                            size="40"
                            class=""
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="Experience*"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            name="interest"
                            value=""
                            size="40"
                            class=""
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="Interest*"
                            required
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
                            placeholder="Write Something About You."
                        ></textarea>
                    </div>
                    
                    <div class="col-xs-12 submit-button">
                        <input
                            type="submit"
                            value="Register Me"
                            class="btn2"
                            id="btnsubmit"
                            style="border: none; margin: 20px 0 0 0"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
	include 'footer.php';
?>
