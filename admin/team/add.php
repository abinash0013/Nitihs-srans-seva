<?php
    include '../pages/header.php';
?>
<style>
    .myform {
        margin-bottom: 10px !important;
    }
</style>

<!-- ::::::::::::::::::::::::::::::::::::::> Add Details Ajax Start <::::::::::::::::::::::::::::::::::::::  -->
<script>
    $(document).ready(function (e) {
        $("#dataform").on('submit',(function(e) {
            $("#btnsubmit").hide();
            $("#loading").show();
            e.preventDefault();
            $.ajax({
                url: "api/add-api.php",
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
<!-- ::::::::::::::::::::::::::::::::::::::> Add Details Ajax End <::::::::::::::::::::::::::::::::::::::  -->

        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix p-3">
                        <h4 class="page-title pull-left">Dashboard</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.php">Home</a></li>
                            <li><span>Team</span></li>
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
                                You had <strong>Successfully Added</strong>a New Team Member for Website.
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
                                            <h4>Add Team Member</h4>
                                        </div>
                                        <div class="prc-list text-left">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="col">Image</div>
                                                </div>    
                                                <input type='hidden' value='<?php echo $value['image']?>' name='image' >                                                
                                                <div class="col-md-8">
                                                    <div class="col font-weight-bold">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <img src="<?php echo $value['image'];?>" style="height:50px; width:50px;"/>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="image" required >
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="col">Name</div>
                                                </div>                                                    
                                                <div class="col-md-8">
                                                    <div class="col font-weight-bold">
                                                        <input type="text" class="form-control form-control-sm myform" placeholder="Name" id="name" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="col">Position</div>
                                                </div>                                                 
                                                <div class="col-md-8">
                                                    <div class="col font-weight-bold">
                                                        <input type="text" class="form-control form-control-sm myform" placeholder="Position" id="position" name="position" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">                                              
                                                    <button type="submit" class="btn btn-primary mb-3 float-right" id="btnsubmit">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-2 col-ml-2 col-mdl-4 col-sm-6 mt-5">
                            <a href="index.php"><button type="button" class="btn btn-primary mb-3 float-right">Back</button></a>                                                 
                            <span id='loading' style="display:none" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
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