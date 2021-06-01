<?php
    include '../pages/header.php';
?>

<!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
<!--?php 
    $resultdata = $con->query("SELECT * from `tbl_volunteer`   order by lnId desc limit 30");
    $result = array();
    while($row = mysqli_fetch_array($resultdata)) {
        $result[] = $row;
    }
?-->
<!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::::::::::::> add Data start <:::::::::::::::::::::::::::::::::::: -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                          alert(data.message);
                         
                    }
                },
                error: function(e) 
                {
                }          
            });
        }));
    });
</script> 
<!-- ::::::::::::::::::::::::::::::::::::> add Data end <:::::::::::::::::::::::::::::::::::: -->

        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Dashboard</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.php">Home</a></li>
                            <li><span>Lucky Number</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">
                    <div class="user-profile pull-right">
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin<i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="logout.php">Log Out</a>
                        </div>
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
                            <h4 class="header-title">Add Lucky Number</h4>
                            <div class="data-tables datatable-primary">
                                <form action="#" method="post" id='dataform'>
                                    <div class="row col-12">
                                        <div class="form-group col-lg-4 col-sm-12">
                                            <label for="date" class="col-form-label">Date</label>
                                            <input  class="form-control" type="date"  id="date" name="date">
                                        </div>
                                        <div class="form-group col-lg-4 col-sm-12">
                                            <label for="time" class="col-form-label"> Select Time</label>
                                            <select class="custom-select" name="time" style="height:46px">                                                   
                                                <option value="10:05 AM">10:05 AM</option>
                                                <option value="10:35 AM">10:35 AM</option>
                                                <option value="11:05 AM">11:05 AM</option>
                                                <option value="11:35 AM">11:35 AM</option>
                                                <option value="12:05 PM">12:05 PM</option>
                                                <option value="12:35 PM">12:35 PM</option>
                                                <option value="01:05 PM">01:05 PM</option>
                                                <option value="01:35 PM">01:35 PM</option>
                                                <option value="02:05 PM">02:05 PM</option>
                                                <option value="02:35 PM">02:35 PM</option>
                                                <option value="03:05 PM">03:05 PM</option>
                                                <option value="03:35 PM">03:35 PM</option>
                                                <option value="04:05 PM">04:05 PM</option>
                                                <option value="04:35 PM">04:35 PM</option>
                                                <option value="05:05 PM">05:05 PM</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-lg-4 col-sm-12">
                                            <label for="luckyNumber" class="col-form-label">Number</label>
                                            <input   class="form-control"  placeholder="Enter number" id="luckyNumber" name="luckyNumber"   type="text" pattern="\d*"  maxlength="2" minlength="2">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block mt-4">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                
        <div class="main-content-inner">
            <div class="row">
                <div class="col-12 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">List of Lucky Number</h4>
                            <div class="data-tables datatable-primary">
                                <table id="dataTable2">
                                    <thead class="text-capitalize">
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Date</th>
                                            <th>  Time</th>
                                            
                                            <th>Lucky Number</th>
                                            <!--<th>Action</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $value){?>
                                            
                                                <tr>                                                   
                                                    <td><?php echo $i=$i+1?></td>
                                                    <td><?php echo $value['date']; ?></td>
                                                    <td><?php echo $value['startingTime']; ?></td>
                                                    
                                                    <td><?php echo $value['luckyNumber']; ?></td>
                                                    <!--<td>button</td>-->
                                                </tr>
                                            
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content area end -->
    
<?php
    include '../pages/footer.php';
?>