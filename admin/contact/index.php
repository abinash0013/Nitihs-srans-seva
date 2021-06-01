<?php
    include '../pages/header.php';
?>

<!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
<?php 
    $resultdata = $con->query("SELECT * from `tbl_contact` order by contactId desc");
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
                            <li><span>Contact</span></li>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; ?>
                                        <?php foreach($result as $value){?>
                                            <form action="#" method="post">
                                                <tr>                                                   
                                                    <td><?php echo $i=$i+1?></td>
                                                    <td><?php echo $value['name']; ?></td>
                                                    <td><?php echo $value['email']; ?></td>
                                                    <td><?php echo $value['subject']; ?></td>
                                                    <td><?php echo $value['message']; ?></td>
                                                    <!-- <td>
                                                        <a href="edit.php?id=<?php echo $value['contactId']; ?> &Q=<?php echo $value['contactId']?>"><span class="status-p bg-info"><i class="ti-pencil"></i></span></a>
                                                    </td> -->
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