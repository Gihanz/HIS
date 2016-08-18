<script type="text/javascript" src="lib/jquery.tabletojson.js"></script>
<script>
    $('document').ready(function() {

        check_href = function() {

            return false;
        }



        $('.combobox').combobox({bsVersion: '2'});


        $('#datetimepicker2').datepicker({
            format: "dd/mm/yyyy"
        });
        $('#datetimepicker1').datepicker({
            format: "dd/mm/yyyy"
        });

        var reqID = GetPara('ReqID');
        var TestID = GetPara('TestID');
        var PID = GetPara('PID');

//        $.ajax({
//                    type: "POST",
//                    url: 'lab/ReportController/getAllReport',
//                    data: {'ID': reqID},
//                    dataType: 'JSON',
//                    success: function(output) {
//
//                        var count = 1;
//                        $.each(output, function(key, val) {
//                            $("#fname").text(val['fTestRequest_ID']['fpatient_ID']['patientFullName']);
//                            $("#PID").text(val['fTestRequest_ID']['fpatient_ID']['patientID']);
//                            $("#DOB").text(val['fTestRequest_ID']['fpatient_ID']['patientDateOfBirth']);
//                            $("#gender").text(val['fTestRequest_ID']['fpatient_ID']['patientGender']); 
//                            count++;
//                        });
//
//                    }
//                });







        function GetPara(name) {
            var GetReqID = new RegExp('[\?%&]' + name + '=([^%&#]*)').exec(window.location.href);
            if (GetReqID == null) {
                return null;
            } else {
                return GetReqID[1] || 0;
            }
        }

        $('#reportView').click(function() {

            // alert(reqID);
            window.location.href = "http://localhost/lims/ReportView?ReqID=" + reqID + "&TestID=" + TestID + "&PID=" + PID + "";
        });




        var fields;
        //Get Fields
        function GetFields() {

            $.ajax({
                type: "POST",
                url: 'lab/TestResultsController/getAllFields',
                data: {'ID': TestID},
                dataType: 'JSON',
                success: function(output) {
                    /*alert(JSON.stringify(output));*/
                    var count = 1;
                    $.each(output, function(key, val) {

                        // alert(val['parent_FieldID']);
                        $('#tbdy').append('<tr id=' + count + '><td colspan="7" style="width:179px;">' + val['parent_FieldID'] + '</td><td colspan="7" style="width:179px;">' + val['parent_FieldName'] + '</td><td colspan="7" style="width:179px;"><input id="text' + count + '" type="text" class="text-primary"></td></tr>');
                        count++;
                    });

                }
            });
        }

        GetFields();


        $('#save').click(function() {
            var count = 0;
            var json = [];

            var mainResult;
            //$("#text" + number + "").val();
            $('#tbl tbody tr').each(function(i, el) {
                if (count != 0) {
                    var key = $.trim($(this).find('td:eq(0)').text()),
                            val = $.trim($(this).find('#text' + count + '').val()),
                            obj = {};

                    obj['fParentF_ID'] = key;
                    obj['fTestRequest_ID'] = reqID;
                    obj['mainResult'] = val;
                    // alert(obj['fTestRequest_ID']);
                    json.push(obj);

                }
                count++;
            });
            var myJSONObject = {"Parentresults": json};
            //alert(JSON.stringify(myJSONObject));
            $.ajax({
                type: "POST",
                url: 'lab/TestResultsController/AddMainResults',
                data: {'results': myJSONObject},
                success: function(output) {
                    alert("Test Results Added");
                }
            });

        });

    });
</script>
<div id="page-wrapper">
    <br><br>
    <div class="row pull-left">
        <div class="col-lg-4 pull-left">
            <div class="panel panel-default" style="width:650px;">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Test Results input

                </div> 
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-area-chart"></div>

                    <div class="panel-body">
                        <div class="form-group">
                            
                                <label for="PID" class="col-sm-2 control-label" style="width:120px; font-size:12px">Patient
                                    ID</label>
                                <label id="PID" type="text">01</label>
                                <br><br>
                                <label for="fname" class="col-sm-2 control-label" style="width:120px; font-size:12px">Patient
                                    Name</label>
                                <label id="fname" type="text">Kasun Gunathilake</label>
                                <br><br>
                                <label for="DOB" class="col-sm-2 control-label" style="width:120px; font-size:12px">DOB</label>
                                <label id="DOB" type="text">2014-08-19</label>
                                <br><br>
                                <label for="gender" class="col-sm-2 control-label"
                                       style="width:120px; font-size:12px">Gender</label>
                                <label id="gender" type="text">Male</label>

                               
                            <br><br>

                        </div>
                        <table id="tbl" class="table table-bordered  table-hover" border='0' width='50%' align='center'
                               style="border-collapse:collapse " cellspacing='3' cellpadding='5'>
                            <tr>
                                <th colspan="7" bgcolor="black"
                                    style="width:179px; text-align:center; color: #797979;background-color:#D8D8D8;  font-size:12px">
                                    Field ID
                                </th>
                                <th colspan="7" bgcolor="black"
                                    style="width:179px; text-align:center; color: #797979;background-color:#D8D8D8;  font-size:12px">
                                    Test Field Name
                                </th>
                                <th colspan="7" bgcolor="black"
                                    style="width:179px; text-align:center; color: #797979;background-color:#D8D8D8;  font-size:12px">
                                    Main result
                                </th>

                        <!--<th colspan="7" bgcolor="black" style="color: #797979;background-color:#D8D8D8;  font-size:12px">Specimen</th> -->
                            </tr>

                            <tbody id='tbdy'>


                            </tbody>


                        </table>
                        <div>
                            <!--<a href="http://localhost/lims/AddTestResults?ReqID=<?php echo $value->labTestRequest_ID; ?>&TestID=<?php echo $value->ftest_ID->test_ID; ?>&PID=<?php echo $value->fpatient_ID->patientID; ?>"><i class="text-primar -->
                            <button id="save" type="button" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-primary">Cancel</button>
                            <button id="reportView" type="button" class="btn btn-primary">Create Report</button>
                        </div>

                    </div>

                </div>

                <!-- /.panel-body -->

            </div>

            <!-- /.panel -->

        </div>

        <!-- /.col-lg-8 -->
        <div class="col-lg-4 pull-right"  style="left:-60px;" >
            <div class="panel panel-default" style="width: 500px;">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Patients' Recent Tests 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">

                        <?php
                        date_default_timezone_set("Asia/Colombo");
                        foreach ($history as $value) {
                            ?>

                            <a href="<?php echo base_url(); ?>ReportView?ReqID=<?php echo $value->labTestRequest_ID; ?>&TestID=<?php echo $value->ftest_ID->test_ID; ?>&PID=<?php echo $value->fpatient_ID->patientID; ?>" class="list-group-item" <?php echo ($value->status == 'Report Issued' ) ? "" : "onclick='return check_href();'"; ?>>

                                <i  <?php echo ($value->status == 'Report Issued' ) ? "class='glyphicon glyphicon-ok '  style='color:green'" : "class='glyphicon glyphicon-remove'  style='color:red'"; ?>></i> <?php echo $value->ftest_ID->test_Name; ?>
                                <span class="pull-right text-muted small"><em><?php echo $value->test_RequestDate; ?></em>
                                </span>
                            </a>
                        
                        




                            <?php
                        }
                        ?>   
                    </div>
                    <!-- /.list-group -->
                    <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                </div>
                <!-- /.panel-body -->

            </div>
        </div>

        <!-- /.panel -->

        <!-- /.panel -->
    </div></div>











</div>

</body>
</html>












