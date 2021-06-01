<?php
    include '../pages/header.php';
?>

<!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
<?php 
    $resultdata = $con->query("SELECT * from `tbl_volunteer` order by volunteerId desc");
    $result = array();
    while($row = mysqli_fetch_array($resultdata)) {
        $result[] = $row;
    }
?>
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> </head> -->
<script>
    //////////////////////////// Delete Function Start ////////////////////////////
    // function deletefun(param1){ 
    //     $.ajax({
    //         url: "api/delete-api.php",
    //         type: "POST",
    //         dataType:"JSON",
    //         data: "id=" + param1,
    //         success: function(data)
    //         {               
    //             if(data.status == '200')
    //             {
    //                 location.reload(true);
    //             }
    //             else
    //             {
    //                 alert(data.message);
    //             }
    //         },
                 
    //     });
    // }
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
                            <li><span>Volunteer</span></li>
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
                                    <h4 class="header-title">Contact Us</h4>
                                </div>
                                <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="add.php"><button type="button" class="btn btn-primary float-right mb-4">Add About Us</button></a>
                                </div>                                     -->
                            </div>
                            <div class="data-tables datatable-primary">
                                <table id="dataTable2">
                                    <thead class="text-capitalize">
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Country</th>
                                            <th>Skill</th>
                                            <th>Experience</th>
                                            <th>Intrest</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; ?>
                                        <?php foreach($result as $value){?>
                                            <form action="#" method="post">
                                                <tr>                                                   
                                                    <td><?php echo $i=$i+1?></td>
                                                    <td><?php echo $value['firstName']?></td>
                                                    <td><?php echo $value['lastName']?></td>
                                                    <td><?php echo $value['phone']?></td>
                                                    <td><?php echo $value['email']?></td>
                                                    <td><?php echo $value['address']?></td>
                                                    <td><?php echo $value['city']?></td>
                                                    <td><?php echo $value['country']?></td>
                                                    <td><?php echo $value['skill']?></td>
                                                    <td><?php echo $value['experience']?></td>
                                                    <td><?php echo $value['intrest']?></td>
                                                    <td><?php echo $value['message']?></td>
                                                    <td>
                                                        <a href="edit.php?id=<?php echo $value['volunteerId']; ?> &Q=<?php echo $value['volunteerId']?>"><span class="status-p bg-info"><i class="ti-pencil"></i></span></a>
                                                    </td>
                                                </tr>
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