<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Request Progress</h3>
        </div> 
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Internal Patient</a></li>
                <li><a href="#tab_2" data-toggle="tab">Hospital Patient</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="panel panel-default">
                        <div class="panel-heading clickable">
                            Advance Search          
                        </div>
                        <div class="panel-body" >
                            <form class="form-horizontal" role="form" method="POST">
                                <div class="col-sm-12"> 

                                    <div class="form-group col-lg-6 input-group">
                                        <div class="input-group-btn search-panel">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span id="search_concept">Filter by</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#by_name">By Patient Name</a></li>
                                                <li><a href="#by_nic">By Patient NIC</a></li>
                                                <li><a href="#by_id">By Patient ID</a></li>
                                                <li><a href="#by_requestID">By Request ID</a></li>
                                                <li><a href="#by_Priority">By Priority</a></li>
                                                <li><a href="#by_TestType">By Test Type</a></li>
                                                <li><a href="#by_status">By Status</a></li>
                                            </ul>
                                        </div>

                                        <input type="text" class="form-control" id="request_search" placeholder="Search Request" name="request_search" list="request_datalist" autocomplete="off"/>
                                        <datalist id="request_datalist"></datalist>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-add" id="request_search_btn">Search</button>
                                        </span>
                                    </div>
                                    <!--                                    <div class="row col-sm-12">  
                                                                            <p></p> 
                                                                        </div>-->
                                    <div class="form-group col-lg-6 input-group">
                                        <div class="input-group-btn search-panel1">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span id="search_concept1">Filter by</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#by_dueDate">By Due Date</a></li>
                                                <li><a href="#by_requestDate">By Request Date</a></li>

                                            </ul>
                                        </div>

                                        <input type="date" class="form-control" id="request_search1"  name="request_search1"  autocomplete="off"/>

                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-add" id="patient_search_btn">Search</button>
                                        </span>
                                    </div>
                                </div>


                            </form>   
                        </div>

                    </div>

                    <!--                    <body onload="makeTableScroll();">
                                            <div class="scrollingTable">-->
                    <table id="tbl_internal_requests" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Request ID</th>
<!--                                <th>Patient ID</th>-->
                                <th>Patient Name</th>
                                <th>Test Type</th>
                                <th>Priority</th>
                                <th>Request Date</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Specimen ID</th>
                                <th>Add Result</th>

                            </tr>
                        </thead>

                        <tbody id="tbody_internal_requests">
                            <?php
                            foreach ($internal_test_request as $row) {

                                $requestID = $row->requestId;
                                $patientID = $row->mriPatient->patientId;
                                $patientName = $row->mriPatient->name;
                                $test = $row->mriLaboratoryTest->testFullName;
                                $priority = $row->testPriority;
                                $requestDate = date("Y-m-d", $row->testRequestDate / 1000);
                                $dueDate = date("Y-m-d", $row->testDueDate / 1000);
                                $status = $row->status;
                                $specimen = $row->mriSpecimen;
                                if ($specimen != null) {
                                    $specimenID = $row->mriSpecimen->specimenId;
                                } else {
                                    $specimenID = null;
                                }




                                echo " <tr id='$requestID'>";
                                echo " <td > " . $requestID . "</td>";
                                echo " <td > " . $patientName . "</td>";
                                echo " <td > " . $test . "</td>";
                                echo " <td > " . $priority . "</td>";
                                echo " <td > " . $requestDate . "</td>";
                                echo " <td > " . $dueDate . "</td>";
                                echo " <td > " . $status . "</td>";

                                if ($specimenID == null) {

                                    echo "<td><p data-placement='top' data-toggle='tooltip' title='NewSpecimen'><input type='checkbox' autocomplete='off'data-title='New Visit' data-toggle='modal' data-target='#new_specimen'></p></td>";
                                } else {
                                    echo " <td > " . $specimenID . "</td>";
                                }


                                echo "<td><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-success btn-xs btn_new_visit' data-title='New Visit' data-toggle='modal' data-target='#new_visit' ><span class='glyphicon glyphicon-plus'></span></button></p></td>";
                            }
                            ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>
                                <p data-placement='top' data-toggle='tooltip' title='Edit'>
                                    <button class='btn btn-primary btn-xs btn_new_visit' data-title='New Visit' data-toggle='modal' data-target='#new_visit' >
                                        <span class='glyphicon glyphicon-ok-circle'></span>   Add Specimen
                                    </button>
                                </p>
                                </th>
                                <th></th>

                            </tr>
                        </tfoot>
                    </table>
                    <!--                        </div>
                                        </body>-->
                </div>
                <div class="tab-pane" id="tab_2">
                    <div class="panel panel-default">
                        <div class="panel-heading clickable">
                            Advance Search          
                        </div>
                        <div class="panel-body" >
                            <form class="form-horizontal" role="form" method="POST">
                                <div class="col-sm-12"> 

                                    <div class="form-group col-lg-6 input-group">
                                        <div class="input-group-btn search-panel">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span id="search_concept">Filter by</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#by_name">By Patient Name</a></li>
                                                <li><a href="#by_nic">By Patient NIC</a></li>
                                                <li><a href="#by_id">By Patient ID</a></li>
                                                <li><a href="#by_requestID">By Request ID</a></li>
                                                <li><a href="#by_Priority">By Priority</a></li>
                                                <li><a href="#by_TestType">By Test Type</a></li>
                                                <li><a href="#by_status">By Status</a></li>
                                            </ul>
                                        </div>

                                        <input type="text" class="form-control" id="request_search" placeholder="Search Request" name="request_search" list="request_datalist" autocomplete="off"/>
                                        <datalist id="request_datalist"></datalist>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-add" id="request_search_btn">Search</button>
                                        </span>
                                    </div>
                                    <!--                                    <div class="row col-sm-12">  
                                                                            <p></p> 
                                                                        </div>-->
                                    <div class="form-group col-lg-6 input-group">
                                        <div class="input-group-btn search-panel1">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span id="search_concept1">Filter by</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#by_dueDate">By Due Date</a></li>
                                                <li><a href="#by_requestDate">By Request Date</a></li>

                                            </ul>
                                        </div>

                                        <input type="date" class="form-control" id="request_search1"  name="request_search1"  autocomplete="off"/>

                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-add" id="patient_search_btn">Search</button>
                                        </span>
                                    </div>
                                </div>


                            </form>   
                        </div>

                    </div>
                    <table id="tbl_hospital_requests" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Patient Name</th>
                                <th>Hospital</th>
                                <th>Test Type</th>
                                <th>Priority</th>
                                <th>Request Date</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Specimen ID</th>
                                <th>Add Result</th>

                            </tr>
                        </thead>

                        <tbody id="tbody_hospital_requests">
                            

                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>
                                <p data-placement='top' data-toggle='tooltip' title='Edit'>
                                    <button class='btn btn-primary btn-xs btn_new_visit' data-title='New Visit' data-toggle='modal' data-target='#new_visit' >
                                        <span class='glyphicon glyphicon-ok-circle'></span>   Add Specimen
                                    </button>
                                </p>
                                </th>
                                <th></th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('document').ready(function () {
        
       
        
        $('#tbl_internal_requests').dataTable();
        $('#tbl_hospital_requests').dataTable();
        
        $(document).on('click', '.panel-heading span.clickable', function (e) {
            var $this = $(this);
            if (!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
            }
        });
        $(document).on('click', '.panel div.clickable', function (e) {
            var $this = $(this);
            if (!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
            }
        });
        
        
        $('.panel-heading span.clickable').click();
        $('.panel div.clickable').click();
        
        $('.search-panel .dropdown-menu').find('a').click(function (e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#", "");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);

            $('#request_datalist').empty();
            $('#request_search').val('');

            if (param == "by_name") {
                $.ajax({
                    type: "GET",
                    url: 'patient_controller/GetAllExternalPatients',
                    dataType: 'json',
                    success: function (output) {
                        $.each(output, function (key, val) {
                            $('#request_datalist').append("<option id= '" + val['mriPatient']['patientId'] + "' value='" + val['mriPatient']['name'] + "'>");
                        });
                    }
                });
            } else if (param == "by_nic") {
                $.ajax({
                    type: "GET",
                    url: 'patient_controller/GetAllExternalPatients',
                    dataType: 'json',
                    success: function (output) {
                        $.each(output, function (key, val) {
                            $('#request_datalist').append("<option id= '" + val['mriPatient']['patientId'] + "' value='" + val['mriPatient']['nic'] + "'>");
                        });
                    }
                });
            } else if (param == "by_id") {
                $.ajax({
                    type: "GET",
                    url: 'patient_controller/GetAllExternalPatients',
                    dataType: 'json',
                    success: function (output) {
                        $.each(output, function (key, val) {
                            $('#request_datalist').append("<option id= '" + val['mriPatient']['patientId'] + "' value='" + val['mriPatient']['patientId'] + "'>");
                        });
                    }
                });
            } else if (param == "by_requestID") {
                $.ajax({
                    type: "GET",
                    url: 'test_request_progress_controller_1/GetInternalRequests',
                    dataType: 'json',
                    success: function (output) {

                        $.each(output, function (key, val) {

                            $('#request_datalist').append("<option id= '" + val['testRequestId'] + "' value='" + val['testRequestId'] + "'>");
                        });
                    }
                });
            } else if (param == "by_Priority") {
                $('#request_datalist').append("<option id= 'High' value='High'>");
                $('#request_datalist').append("<option id= 'Medium' value='Medium'>");
                $('#request_datalist').append("<option id= 'Low' value='Low'>");


            } else if (param == "by_TestType") {
                $.ajax({
                    type: "GET",
                    url: 'lab_tests_controller/getAllLabTests',
                    dataType: 'json',
                    success: function (output) {

                        $.each(output, function (key, val) {

                            $('#request_datalist').append("<option id= '" + val[0] + "' value='" + val[1] + "'>");
                        });
                    }
                });

            } else if (param == "by_status") {

                $('#request_datalist').append("<option id= 'Pending' value='Pending'>");
                $('#request_datalist').append("<option id= 'Resolved' value='Resolved'>");
            }


        });


        $.ajax({
            type: "GET",
            url: 'test_request_progress_controller_1/GetHospitalRequests',
            dataType: 'json',
            success: function (output) {

                //$('#hospital_datalist').empty();
                $.each(output, function (key, val) {
                    var specimenCol = null;
                    if (val['mriSpecimen'] != null) {
                        var specimenID = val['mriSpecimen']['specimenId'];
                        specimenCol = specimenID;
                    } else {
                        specimenCol = "<p data-placement='top' data-toggle='tooltip' title='NewSpecimen'><input type='checkbox' autocomplete='off'data-title='New Visit' data-toggle='modal' data-target='#new_specimen'></p>";
                    }

                    $('#tbl_hospital_requests').append("<tr><td>" + val['requestId'] + "</td>\n\
                                                            <td>" + val['mriHospitalPatient']['mriPatient']['name'] + "</td>\n\
                                                            <td>" + val['mriHospitalPatient']['mriHospital']['hospitalName'] + " - " + val['mriHospitalPatient']['mriHospital']['location'] + "</td>\n\
                                                            <td>" + val['mriLaboratoryTest']['testFullName'] + "</td>\n\
                                                            <td>" + val['testPriority'] + "</td>\n\
                                                            <td>" + val['testRequestDate'] + "</td>\n\
                                                            <td>" + val['testDueDate'] + "</td>\n\
                                                            <td>" + val['status'] + "</td>\n\
                                                            <td>" + specimenCol + "</td>\n\
                                                            <td><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-success btn-xs btn_new_visit' data-title='New Visit' data-toggle='modal' data-target='#new_visit' ><span class='glyphicon glyphicon-plus'></span></button></p></td></tr>");
                });

            }
        });
    })
</script>
