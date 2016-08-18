
<!-- Custom JavaScript for the Menu Toggle -->
<script>
    $('document').ready(function() {

        if ($("#myAlertError").is(":visible")) {

            setInterval(function() {
                $("#myAlertError").hide();
            }, 1000);
        }

        resizeDiv();
        window.onresize = function(event) {
            resizeDiv();
        }
        function resizeDiv() {
            vph = $(window).height() - 150;
            vpw = $(window).width() - 300;
            //$('#content').css({'height':vph+'px'})
            $('#content').css({'width': vpw + 'px'})

        }


        $('.combobox').combobox({bsVersion: '2'});


        $('#datetimepicker2').datepicker({
            format: "dd/mm/yyyy"
        });
        $('#datetimepicker1').datepicker({
            format: "dd/mm/yyyy"
        });
        $('#datetimepicker3').datepicker({
            format: "dd/mm/yyyy"
        });
        $('#datetimepicker4').datepicker({
            format: "dd/mm/yyyy"
        });


    });


</script>


</head>
<body>
    <div id="wrapper">

        <div id="page-wrapper">

            <div class="row" STYLE="position:absolute; TOP:120px; margin-left: -256px; ">

                <div class="panel panel-primary" id="content">
                    <div class="panel-heading" >
                        <h3 class="panel-title">Specimen Information</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group" id="patient_panel">


                            <div class="col-sm-6">
                                <div class="panel panel-primary" style="width: 100%;">
                                    <div class="panel-heading" style="background-color:whitesmoke">
                                        <h4 class="panel-title" style="color:#428BCA">Patient Details</h4>
                                    </div>

                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="PID" class="col-sm-2 control-label" style="width:120px; font-size:12px">Patient ID</label>
                                            <input id="PID" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $specimen->fpatient_ID->patientID; ?>">
                                            <br>
                                            <label for="Fullname" class="col-sm-2 control-label" style="width:120px; font-size:12px">Full Name</label>
                                            <input id="Fullname" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $specimen->fpatient_ID->patientFullName; ?>">
                                            <br>
                                            <label for="gender" class="col-sm-2 control-label" style="width:120px; font-size:12px">Gender</label>
                                            <input id="gender" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value="<?php echo ucfirst($specimen->fpatient_ID->patientGender); ?>">
                                            <br>
                                            <label for="dob" class="col-sm-2 control-label" style="width:120px; font-size:12px">Date of birth</label>
                                            <input id="dob" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value="<?php echo date('Y-m-d', $specimen->fpatient_ID->patientDateOfBirth); ?>">
                                            <br>

                                        </div>

                                    </div>
                                </div> <!---Patient Details Panel close ---->

                            </div>


                            <div class="col-sm-6">
                                <div class="panel panel-primary" style="width: 100%;">
                                    <div class="panel-heading" style="background-color:whitesmoke">
                                        <h4 class="panel-title" style="color:#428BCA">Test Details</h4>
                                    </div>

                                    <div class="panel-body">

                                        <div class="form-group">
                                            <label for="ReqID" class="col-sm-2 control-label" style="width:120px; font-size:12px">Request ID</label>
                                            <input id="ReqID" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $specimen->labTestRequest_ID; ?>">
                                            <br>
                                            <label for="Category" class="col-sm-2 control-label" style="width:120px; font-size:12px">Category</label>
                                            <input id="Category" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $specimen->ftest_ID->fTest_CategoryID->category_Name; ?>">
                                            <br>
                                            <label for="SubCategory" class="col-sm-2 control-label" style="width:120px; font-size:12px">Sub category</label>
                                            <input id="SubCategory" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $specimen->ftest_ID->fTest_Sub_CategoryID->sub_CategoryName; ?>">
                                            <br>
                                            <label for="TestName" class="col-sm-2 control-label" style="width:120px; font-size:12px">Test Name</label>
                                            <input id="TestName" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $specimen->ftest_ID->test_Name; ?>">
                                            <br>

                                        </div>

                                        <!-------------------Test Details---------------- -->




                                    </div>
                                </div> <!---Test Details Panel close ---->
                            </div>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



                        <div class="col-sm-12">
                            <div id="response" style="display: none;"></div>
                            <div class="panel panel-primary" style="width: 100%;    ">
                                <div class="panel-heading" style="background-color:whitesmoke">
                                    <h4 class="panel-title" style="color:#428BCA">Specimen Details</h4>
                                </div>
                                <form class="" id="specimen_frm">
                                    <div class="panel-body">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="SpecimenType" class="col-sm-2 control-label" style="width:120px; font-size:12px">Type</label>
                                                <?php if (!empty($specimen_in_details)): ?>
                                                <label style="width: 50%"><?php echo $specimen_in_details->fSpecimentType_ID->specimen_TypeName;?></label>
                                                <br>
                                                    <?php else:?>
                                                                                          
                                                    <select id="SpecimenType" name="SpecimenType" class="form-control" style="width: 50%" required="">

                                                        <option selected="selected" value="">Select a Type</option>
                                                        <?php foreach ($specimen_types as $item): ?>
                                                            <option value="<?php echo $item->specimenType_ID; ?>"><?php echo $item->specimen_TypeName; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                <?php endif; ?>
                                                <br>
                                                <label for="retentionType" class="col-sm-2 control-label" style="width:120px; font-size:12px">Retention Type</label>
                                                <?php if (!empty($specimen_in_details)): ?> 
                                                <label style="width: 50%"><?php echo $specimen_in_details->fRetentionType_ID->retention_TypeName;?></label>
                                                <br>
                                                <?php else:?>
                                                    <select id="retentionType" name="retentionType" class="form-control" style="width: 50%;" required="">

                                                        <option selected="selected" value="">Select a Type</option>
                                                        <?php foreach ($specimen_retension_types as $item): ?>
                                                            <option value="<?php echo $item->retention_TypeID; ?>"><?php echo $item->retention_TypeName; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                <?php endif; ?>
                                                <br>
                                                <label for="datetimepicker1" class="col-sm-2 control-label" style="width:120px; font-size:12px">Collected Date</label>
                                                <div class="col-sm-2">
                                                    <div class='input-group' >
                                                        <input  type="text" placeholder="collected date" id="datetimepicker1" style="position: absolute; left: -14px;width: 225px;" name="collected_date" class="form-control" required="" value="<?php echo (isset($specimen_in_details->specimen_CollectedDate))? date('Y-m-d',$specimen_in_details->specimen_CollectedDate/1000):"";?>">
                                                        </span>
                                                    </div>
                                                </div>
                                                <br>
                                                <br><br>

                                                <label for="ramrks" class="col-sm-2 control-label" style="width:120px; font-size:12px">Remarks</label>
                                                <textarea id="remarks" name="remarks" class="form-control" rows="4" cols="100"style="width:50%;" required=""><?php echo (isset($specimen_in_details->remarks))? $specimen_in_details->remarks:"";?></textarea>

                                                <br>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">



                                                <label for="location" class="col-sm-2 control-label" style="width:120px; font-size:12px">Location</label>
                                                <input id="stored_location" name="stored_location" type="text" class="form-control" placeholder="Text input" style="width: 50%" required="" value="<?php echo (isset($specimen_in_details->stored_location))? $specimen_in_details->stored_location:"";?>">
                                                <br>
                                                <div id="RadioButtonGroup1" style="">
                                                    <label for="location" class="col-sm-2 control-label" style="width:120px; font-size:12px"></label>
                                                    <?php 
                                                    $stored = "";
                                                    $destroyed = "";
                                                    if(isset($specimen_in_details->stored_or_destroyed)): echo ucfirst($specimen_in_details->stored_or_destroyed); ?>
                                                        
                                                    <?php else:?>   
                                                    <input type="radio"  name="stored_or_destroyed" value="stored" required="" <?php echo $stored;?>> Stored
                                                    <input type="radio"  name="stored_or_destroyed" value="destroyed" required="" <?php echo $destroyed;?>> Destroyed<br>
                                                    <?php endif;?>
                                                    
                                                </div>
                                                <br>
                                                <label for="datetimepicker4" class="col-sm-2 control-label" style="width:120px; font-size:12px">Stored/Destroyed Date</label>

                                                <div class='input-group' >
                                                    <input  type="text" placeholder="Due date" id="datetimepicker4" name="CompletedDate" style="width: 225px;" class="form-control" required="" value="<?php echo (isset($specimen_in_details->specimen_stored_destroyed_date))? date('Y-m-d',$specimen_in_details->specimen_stored_destroyed_date/1000):"";?>">
                                                </div>

                                                <br>

                                                <div id="buttonGroup" style="margin-top: 10px">
                                                    <label for="location" class="col-sm-2 control-label" style="width:120px; font-size:12px"></label>
                                                    <button type="submit" class="btn btn-primary" id="add_specimen">Apply</button>
                                                    <button type="reset" class="btn btn-primary" >Reset</button>

                                                    <a href="<?php echo base_url('LabOrders'); ?>" class="btn btn-default">Cancel</a>
                                                    <button  type="button" class="btn btn-warning pull-right" id="print_bc" >Print Barcode</button>

                                                </div><br>
                                                <div id="buttonGroup" style="margin-top: 10px">
                                                    <label for="location" class="col-sm-2 control-label" style="width:120px; font-size:12px"> </label>
                                                    <img src="<?php echo base_url('barcode/' . $_GET['ReqID']); ?>" id="barcode_img">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="flabtestrequest_ID" value="<?php echo $_GET['ReqID']; ?>">

                                </form>
                            </div>
                            <!---panel ---->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</div> 

</div> <!--Main panel -->
</div>
</div>
</div>
</div>
</body>
</html>

<script type="text/javascript" src="<?php echo base_url('js/jQuery.print.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/get_barcode_from_image.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#patient_panel').find('input, textarea, button:not(#print_bc), select').attr('disabled', 'disabled');
        <?php 
        if(isset($_GET['status']) && $_GET['status'] == "complete"):?>
              $('#specimen_frm').find('input, textarea, button:not(#print_bc), select').attr('disabled', 'disabled');  
        <?php endif;?>   
        
        
        
        $("#print_bc").hide();
        $("#barcode_img").hide();
        $("#specimen_frm").on("submit", function(e) {
            e.preventDefault();
            $("#response").html("");
            $("#response").removeClass();
            $("#response").hide();
            $("#print_bc").hide();
            $("#barcode_img").hide();
            var post_data = $("#specimen_frm").serialize();
            $.ajax({
                type: "POST",
                url: 'lab/SpecimenInfoController/add',
                data: post_data,
                dataType: 'JSON',
                success: function(output) {
                    $('#specimen_frm').find('input, textarea, button:not(#print_bc), select').attr('disabled', 'disabled');
                    $("#response").html("Specimen details saved successfully.");
                    $("#response").addClass("alert alert-success");
                    $("#response").show();
                    $("#print_bc").show();
                    $("#barcode_img").show();
                    //alert(getBarcodeFromImage('barcode_img'));
                },
                error: function() {
                    alert("Request failed");
                }
            });
        });

        $("#specimen_frm").on("click", "#print_bc", function() {
            $("#barcode_img").print();
        });
    });
</script>









