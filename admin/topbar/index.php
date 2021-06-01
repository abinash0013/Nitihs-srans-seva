<?php
    include '../pages/header.php';
?>

<!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
<?php 
    $resultdata = $con->query("SELECT * from `tbl_topbar` order by topbarId desc");
    $result = array();
    while($row = mysqli_fetch_array($resultdata)) {
        $result[] = $row;
    }
?>
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> </head> -->
<script>
    //////////////////////////// Delete Function Start ////////////////////////////
    function deletefun(param1){ 
        $.ajax({
            url: "api/delete-api.php",
            type: "POST",
            dataType:"JSON",
            data: "id=" + param1,
            success: function(data)
            {               
                if(data.status == '200')
                {
                    location.reload(true);
                }
                else
                {
                    alert(data.message);
                }
            },                 
        });
    }
    //////////////////////////// Delete Function End ////////////////////////////
</script> 

        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix p-3">
                        <h4 class="page-title pull-left">Dashboard</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.php">Home</a></li>
                            <li><span>Topbar</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <h4 class="header-title">Topbar</h4>
                                </div>
                                <!--div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="add.php"><button type="button" class="btn btn-primary float-right mb-4">Add Activity</button></a>
                                </div-->                                    
                            </div>
                            <div class="data-tables datatable-primary">
                                <table id="dataTable2">
                                    <thead class="text-capitalize">
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Facebook Link</th>
                                            <th>Twitter Link</th>
                                            <th>Linkedin Link</th>
                                            <th>Instagram Link</th>
                                            <th>Youtube Link</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; ?>
                                        <?php foreach($result as $value){?>
                                            <form action="#" method="post">
                                                <tr>                                                   
                                                    <td><?php echo $i=$i+1?></td>
                                                    <td><?php echo $value['phone']; ?></td>
                                                    <td><?php echo $value['email']; ?></td>
                                                    <td><?php echo $value['facebookLink']; ?></td>
                                                    <td><?php echo $value['twitterLink']; ?></td>
                                                    <td><?php echo $value['linkedinLink']; ?></td>
                                                    <td><?php echo $value['instagramLink']; ?></td>
                                                    <td><?php echo $value['youtubeLink']; ?></td>
                                                    <td>
                                                        <a href="edit.php?id=<?php echo $value['topbarId']; ?> &Q=<?php echo $value['topbarId']?>"><button type="button" class="btn btn-primary"><i class="ti-pencil"></i></button></a>
                                                        <!--button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter"><i class="ti-trash"></i></span></button-->
                                                    </td>
                                                </tr>
                                                <!--div class="modal fade" id="exampleModalCenter">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <h5 class="modal-title text-center">Yes.. I want to Delete this Details</h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                <button type="button" class="btn btn-danger" onclick="deletefun(<?php echo $value['topbarId'];?>)">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div-->
                                            </form>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Primary table end -->
            </div>
        </div>
    </div>
    <!-- main content area end -->
</div>
<!-- page container area end -->
    
<?php
    include '../pages/footer.php';
?>