<?php
    include '../pages/header.php';
?>
<style>
    .myform {
        margin-bottom: 10px !important;
    }
</style>

<!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
<?php 
    $vId = $_GET['id'];
    $resultdata = $con->query("SELECT * from `tbl_volunteer` where volunteerId = '$vId'");
    $result = array();
    while($row = mysqli_fetch_array($resultdata)) {
        $result[] = $row;
    }
?>
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::::::::::::::> Edit Details Ajax Start <::::::::::::::::::::::::::::::::::::::  -->
<script>
    $(document).ready(function (e) {
        $("#dataform").on('submit',(function(e) {
            $("#btnsubmit").hide();
            $("#loading").show();
            e.preventDefault();
            $.ajax({
                url: "api/edit-api.php",
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
                        $("#successmessage").show()
                        $("#dataform")[0].reset(); 
                        window.location. reload();
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
<!-- ::::::::::::::::::::::::::::::::::::::> Edit Details Ajax End <::::::::::::::::::::::::::::::::::::::  -->

        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix p-3">
                        <h4 class="page-title pull-left">Dashboard</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.php">Home</a></li>
                            <li><span>Volunteer</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>            
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="row">                
                <div class="col-lg-6 col-ml-12">                        
                    <div class="row">
                        <div class="col-xl-2 col-ml-2 col-mdl-4 col-sm-6 mt-5">
                        </div>
                        <div class="col-xl-3 col-ml-8 col-mdl-4 col-sm-6 mt-5">
                            <!-- success alert -->
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="successmessage" style="display:none">
                                You had <strong>Successfully Added</strong>a New Volunteer for Website.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <!-- <span class="fa fa-times"></span> -->
                                </button>
                            </div>
                            <!-- success alert -->
                            <!-- failed alert -->
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="err" style="display:none">
                                Something went wrong...! Failed
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <!-- <span class="fa fa-times"></span> -->
                                </button>
                            </div>
                            <!-- failed alert -->
                            <div class="card">
                                <form action="#" method="post" id='dataform'>
                                    <div class="pricing-list">
                                        <div class="prc-head">
                                            <h4>Edit Volunteer</h4>
                                        </div>
                                        <div class="prc-list text-left">
                                            <?php $i = 1; ?>
                                            <?php foreach($result as $value) { ?>
                                            <input type="hidden" value="<?php echo $value['volunteerId']; ?>" id="volunteerId" name="volunteerId">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="col">First Name</div>
                                                    </div>                                                    
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <input type="text" class="form-control form-control-sm myform" value="<?php echo $value['firstName']; ?>" id="firstName" name="firstName" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col">Last Name</div>
                                                    </div>                                                    
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <input type="text" class="form-control form-control-sm myform" value="<?php echo $value['lastName']; ?>" id="lastName" name="lastName" required> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col">Phone</div>
                                                    </div>                                                    
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <input type="text" class="form-control form-control-sm myform" value="<?php echo $value['phone']; ?>" id="phone" name="phone" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col">Email</div>
                                                    </div>                                                    
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <input type="text" class="form-control form-control-sm myform" value="<?php echo $value['email']; ?>" id="email" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col">Address</div>
                                                    </div>                                                    
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <input type="text" class="form-control form-control-sm myform" value="<?php echo $value['address']; ?>" id="address" name="address" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col">City</div>
                                                    </div>                                                    
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <input type="text" class="form-control form-control-sm myform" value="<?php echo $value['city']; ?>" id="city" name="city" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col">Country</div>
                                                    </div>                                                    
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <input type="text" class="form-control form-control-sm myform" value="<?php echo $value['country']; ?>" id="country" name="country" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col">Skill</div>
                                                    </div>                                                    
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <input type="text" class="form-control form-control-sm myform" value="<?php echo $value['skill']; ?>" id="skill" name="skill" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col">Experience</div>
                                                    </div>                                                    
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <input type="text" class="form-control form-control-sm myform" value="<?php echo $value['experience']; ?>" id="experience" name="experience" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col">Intrest</div>
                                                    </div>                                                    
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <input type="text" class="form-control form-control-sm myform" value="<?php echo $value['intrest']; ?>" id="intrest" name="intrest" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col">Intrest</div>
                                                    </div>                                                    
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <input type="text" class="form-control form-control-sm myform" value="<?php echo $value['intrest']; ?>" id="intrest" name="intrest" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col">Message</div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="col font-weight-bold">
                                                            <textarea class="form-control" aria-label="With textarea" id="message" name="message"><?php echo $value['message']; ?></textarea>
                                                        </div><br/>
                                                    </div>
                                                    <div class="form-group">                                              
                                                        <button type="submit" class="btn btn-primary mb-3 float-right" id="btnsubmit">Update</button>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-2 col-ml-2 col-mdl-4 col-sm-6 mt-5">
                            <a href="index.php"><button type="button" class="btn btn-primary mb-3 float-right">Back</button></a>                                                 
                            <span id='loading' style="display:none" class="spinner-border spinner-border-sm" role="status" aria-hidden="true">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content area end -->
</div>
<!-- page container area end -->
    
<?php
    include '../pages/footer.php';
?>