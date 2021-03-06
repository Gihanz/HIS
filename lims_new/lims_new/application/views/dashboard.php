<div class="col-md-12">

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <section class="dashboad_top_menu">
        <?php include 'includes/dashboad_top_menu.php';?>

 </section >
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Lab Orders</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <div class="btn-group">
                                <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin" id="tbl_test_requests">
                                <thead>
                                    <tr>
                                        <th>Request ID</th>
                                        <th>Patient Name</th>
                                        <th>Test Type</th>
                                        <th>Priority</th>
                                        <th>Due Date</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_test_requests">

                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->

                    </div><!-- ./box-body -->
                      <section class="dashboad_bottom_menu">
                         <?php include 'includes/dashboad_bottom_menu.php';?>
                      </section>
              <!-- /.box-footer -->

                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Department Progress</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <div class="btn-group">
                                <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>

                    </div><!-- /.box-header -->
                    <div class="box-body">

                        <div class="table-responsive">
                            <table class="table no-margin" id="tbl_lab_progress" align="left">

                                <tbody id="tbody_lab_progress">
                                    <tr>
                                        <td>
                                            <div class="progress-group">
                                                <span class="progress-text">Lab 1</span>
                                                <span class="progress-number"><b>160</b>/200</span>
                                                <div class="progress sm">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 40%"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!--                        <div class="progress-group">
                                                    <span class="progress-text">Lab 1</span>
                                                    <span class="progress-number"><b>160</b>/200</span>
                                                    <div class="progress sm">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 40%"></div>
                                                    </div>
                                                </div> /.progress-group 
                                                <div class="progress-group">
                                                    <span class="progress-text">Lab 2</span>
                                                    <span class="progress-number"><b>310</b>/400</span>
                                                    <div class="progress sm">
                                                        <div class="progress-bar progress-bar-red" style="width: 20%"></div>
                                                    </div>
                                                </div> /.progress-group 
                                                <div class="progress-group">
                                                    <span class="progress-text">Lab 3</span>
                                                    <span class="progress-number"><b>480</b>/800</span>
                                                    <div class="progress sm">
                                                        <div class="progress-bar progress-bar-green" style="width: 10%"></div>
                                                    </div>
                                                </div> /.progress-group 
                                                <div class="progress-group">
                                                    <span class="progress-text">Lab 4</span>
                                                    <span class="progress-number"><b>250</b>/500</span>
                                                    <div class="progress sm">
                                                        <div class="progress-bar progress-bar-yellow" style="width: 30%"></div>
                                                    </div>
                                                </div> /.progress-group -->

                    </div><!-- ./box-body -->

                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->



    </section><!-- /.content -->





</div>


<script>
    $(document).ready(function () {
        var requestCount = "";
        var requestCountByLab =0;
        
        //$('#tbl_test_requests').dataTable();
        $.ajax({
            type: "GET",
            url: 'patient_controller/GetPatientCount',
            dataType: 'json',
            success: function (output) {

                //alert(output);
                //$('#patient_count').val(null);
                $('#patient_count').append(output);

            }
        });

        $.ajax({
            type: "GET",
            url: 'test_request_progress_controller_1/GetTestRequestCount',
            dataType: 'json',
            success: function (output) {
                requestCount = output;
                //alert(output);
                //$('#patient_count').val(null);
                $('#test_request_count').append(output);

            }
        });
        var label = "";
        $.ajax({
            type: "GET",
            url: 'test_request_progress_controller_1/GetTestRequests',
            dataType: 'json',
            success: function (output) {

                $("#tbl_test_requests tbody").empty();
                $.each(output, function (key, val) {

                    var dDate = new Date(parseInt(val['testDueDate']));
                    var dueDate = dDate.toLocaleDateString();

                    if (val['testPriority'] == "High") {
                        label = "label label-danger";
                    } else if (val['testPriority'] == "Medium") {
                        label = "label label-warning";
                    } else if (val['testPriority'] == "Low") {
                        label = "label label-success";
                    }
                    $('#tbl_test_requests').append("<tr><td>" + val['requestId'] + "("+ val['testRequestId']+")</td>\n\
                                                            <td>" + val['mriPatient']['name'] + "</td>\n\
                                                            <td>" + val['mriLaboratoryTest']['testFullName'] + "</td>\n\
                                                            <td><span class='" + label + "'>" + val['testPriority'] + "</span></td>\n\
                                                            <td>" + dueDate + "</td></tr>")
                });

            }
        });

        $.ajax({
            type: "GET",
            url: 'test_request_progress_controller_1/GetAllLabs',
            dataType: 'json',
            success: function (output) {
                
                $("#tbl_lab_progress tbody").empty();
                $.each(output, function (key, val) {
                    
                    var labName = val['laboratoryName'];
                    var labID = val['laboratoryId'];
                    
                    var barPercentage=0;
                    $.ajax({
                        type: "GET",
                        url: 'test_request_progress_controller_1/GetRequestCountByLabID/'+labID,
                        dataType: 'json',
                        success: function (output) {
                            requestCountByLab=output;
                            barPercentage=requestCountByLab/requestCount*100;
                            //alert(barPercentage);
                            
                             $('#tbl_lab_progress').append("<tr><td><div class='progress-group'><span class='progress-text'>" + labName + "</span><span class='progress-number'><b>"+requestCountByLab+"</b>/" + requestCount + "</span><div class='progress sm'><div class='progress-bar progress-bar-aqua' style='width: "+barPercentage+"%'></div></div></div></td> </tr>");
                            //alert(output);
                        }
                    })
                    
                    //alert(requestCountByLab);
                   // var test=requestCountByLab;
                   
                });

            }
        });
    });
</script>
