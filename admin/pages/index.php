<?php 
    include 'header.php'
?>

<?php 
    include 'sidebar.php'
?>

<!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
<?php 
    $volunteerNo=0;
    $volunteerResultData = $con->query("SELECT * from `tbl_volunteer`");
    $volunteerResult = array();
    while($volunteeRow = mysqli_fetch_array($volunteerResultData)) {
        $volunteerNo=$volunteerNo+1;  
    }
?>
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->

<!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
<?php 
    $teamNo=0;
    $teamResultData = $con->query("SELECT * from `tbl_team`");
    $teamResult = array();
    while($teamRow = mysqli_fetch_array($teamResultData)) {
        $teamNo=$teamNo+1;  
    }
?>
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->

<!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
<?php 
    $activitiesNo=0;
    $activitiesResultData = $con->query("SELECT * from `tbl_activity`");
    $activitiesResult = array();
    while($activitiesRow = mysqli_fetch_array($activitiesResultData)) {
        $activitiesNo=$activitiesNo+1;  
    }
?>
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix p-3">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Dashboard</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->

<!-- main content area start -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="main-content-inner">
            <div class="row">
                <!-- seo fact area start -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-4 mt-5 mb-3">
                            <div class="card">
                                <div class="seo-fact sbg1">
                                    <div class="p-4 d-flex justify-content-between align-items-center">
                                        <div class="seofct-icon"><i class="ti-user"></i> Volunteer </div>
                                        <!-- <h2>2,315</h2> -->
                                        <h2><?php echo $volunteerNo; ?></h2>
                                    </div>
                                    <canvas id="seolinechart1" height="50"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-md-5 mb-3">
                            <div class="card">
                                <div class="seo-fact sbg2">
                                    <div class="p-4 d-flex justify-content-between align-items-center">
                                        <div class="seofct-icon"><i class="ti-thumb-up"></i> Team </div>
                                        <!-- <h2>3,984</h2> -->
                                        <h2><?php echo $teamNo; ?></h2>
                                    </div>
                                    <canvas id="seolinechart2" height="50"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-md-5 mb-3">
                            <div class="card">
                                <div class="seo-fact sbg4">
                                    <div class="p-4 d-flex justify-content-between align-items-center">
                                        <div class="seofct-icon"><i class="ti-stats-up"></i> Activities </div>
                                            <!-- <h2>3,984</h2> -->
                                            <h2><?php echo $activitiesNo; ?></h2>
                                        </div>
                                    <canvas id="seolinechart4" height="50"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- seo fact area end -->
            </div>
        </div>
                    <!-- overview area start -->
        <div class="row">
           <div class="col-xl-9 col-lg-8">
               <div class="card">
                   <div class="card-body">
                       <div class="d-flex justify-content-between align-items-center">
                           <h4 class="header-title mb-0">Overview</h4>
                           <select class="custome-select border-0 pr-3">
                               <option selected>Last 24 Hours</option>
                               <option value="0">01 July 2018</option>
                           </select>
                       </div>
                       <div id="verview-shart"></div>
                   </div>
               </div>
           </div>
        </div>
    </div>
</div>
<!-- page container area end -->

<?php
    include 'footer.php';
?>