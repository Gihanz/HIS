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
        



            $('#UpdateButton').click(function() {
             
                    var Tp= $("#LabTypeDropDown").children(":selected").attr("id"); 
                    var Dpt = $("#DeptDropDown").children(":selected").attr("id");
                    var count = $('#count').val();
                    var LID = $('#LID').val();
                    var LabName = $('#labName').val();
                    var Incharge = $('#labIncharge').val();
                    var Location = $('#location').val();
                    var email = $('#email').val();
                    var contact1 = $('#Contact1').val();
                    var contact2 = $('#Contact2').val();
                    
                  
                    
                    var LabData = [];
                   
                   
                    LabData.push(Tp);
                    LabData.push(Dpt);
                    LabData.push(count);
                    LabData.push('1');
                    LabData.push(LID);
                    LabData.push(LabName);
                    LabData.push(Incharge);
                    LabData.push(Location);
                    LabData.push(email);
                    LabData.push(contact1);
                    LabData.push(contact2);
             
             if (LabData != '')
             {
                 $.ajax({
                     type: "POST",
                     url: 'lab/editLaboratories/EditLaboraroty',
                     data: {'LabData': LabData},
                     success: function(output) {
                        alert("Laboratory is Updated");
                        window.location.href = "<?php echo base_url();?>LabManager";
                     }



                 });
             }          
         });



            



     });


</script>


</head>
<body>

    <div id="wrapper">

        <div id="page-wrapper">

            <div class="row" STYLE="position:absolute; TOP:120px; margin-left: -256px; width: 800px;">


                <div class="panel panel-primary " style="width: 100%;">
                    <div class="panel-heading" style="background-color:whitesmoke">
                        <h4 class="panel-title" style="color:#428BCA">Update Laboratory Type</h4>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                                    <label for="LID" class="col-sm-3 control-label">Lab ID</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" disabled="true" style="width:260px;" id="LID" placeholder="LID" name="LID" value="<?php echo $LabID ;?>">
                                    </div>
                                </div>
                        <br>
                        <div class="form-group" >
                                    <label class="col-sm-3 control-label" for="gender-1">Lab Type</label>
                                    <div class="col-sm-3">
                                        <select id="LabTypeDropDown" style="width:260px;" class="col-sm-3 form-control">
                                            <option  id="" selected="True"value="">Select a Lab Type</option>
                                            <?php
                                                date_default_timezone_set("Asia/Colombo");
                                                foreach ($labTypes as $value) {
                                                    ?>
                                            
                                            <option  id="<?php echo $value->labType_ID; ?>"value="" <?php echo ($value->lab_Type_Name == $type)?"selected":"" ?>><?php echo $value->lab_Type_Name; ?></option>
                                                <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group" >
                                    <label class="col-sm-3 control-label" for="gender-1">Department</label>
                                    <div class="col-sm-3">
                                        <select id="DeptDropDown" style="width:260px;" class="col-sm-3 form-control">
                                            <option  id="" selected="True" value="">Select a Department</option>
                                            <?php
                                                date_default_timezone_set("Asia/Colombo");
                                                foreach ($Depts as $value) {
                                                    ?>
                                            <option  id="<?php echo $value->labDept_ID; ?>"value="" <?php echo ($value->labDept_Name == $dept)?"selected":"" ?>> <?php echo $value->labDept_Name; ?></option>
                                                <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="count" class="col-sm-3 control-label">Count</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width:260px;" class="form-control" id="count" placeholder="count" name="count" value="<?php echo $count ;?>">
                                    </div>
                                </div>
                                 <br>
                                <div class="form-group">
                                    <label for="labName" class="col-sm-3 control-label">Lab Name</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width:260px;" class="form-control" id="labName" placeholder="Lab Name" name="labName" value="<?php echo $LabName ;?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="labIncharge" class="col-sm-3 control-label">Lab Incharge</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width:260px;" class="form-control" id="labIncharge" placeholder="lab Inchargee" name="labIncharge" value="<?php echo $incharge ;?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="location" class="col-sm-3 control-label">Location</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width:260px;"  class="form-control" id="location" placeholder="location" name="location" value="<?php echo $location ;?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width:260px;" class="form-control" id="email" placeholder="email" name="email" value="<?php echo $email ;?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="Contact1" class="col-sm-3 control-label">Contact 01</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width:260px;" class="form-control" id="Contact1" placeholder="Contact 1" name="Contact1" value="<?php echo $con1 ;?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="Contact2" class="col-sm-3 control-label">Contact 02</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width:260px;" class="form-control" id="Contact2" placeholder="Contact 2" name="Contact2" value="<?php echo $con2 ;?>">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label"></label>
                                    <div class="col-sm-3">
                                        <button type="button" style="width:260px;" class="btn btn-primary" id="UpdateButton"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                    </div>
                                </div>
                                <br>
                                <br>
                       
                                    </div>
                                </div> <!---Patient Details Panel close ---->

                            </div>
                    
            
            </div>
        </div>
       
</body>
                          