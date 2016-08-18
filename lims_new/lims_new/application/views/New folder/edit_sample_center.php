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
                    
        
                    var scid = $('#SID').val();
                    var Tp = $("#TypeDropDown").children(":selected").attr("id"); 
                    var LabName = $('#labName').val();
                    var Incharge = $('#labIncharge').val();
                    var Location = $('#location').val();
                    var email = $('#email').val();
                    var contact1 = $('#Contact1').val();
                    var contact2 = $('#Contact2').val();
                  
                    
                    var LabData = []
                   
                   
                    LabData.push(Tp);
                    LabData.push('1');
                    LabData.push(scid);
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
                            url: 'lab/editSampleCenter/UpdateSampleCenter',
                            data: {'LabData': LabData},
                            success: function(output) {
                                    alert("Sample Center is Updated successfuly");
                                    window.location.href = "<?php echo base_url();?>sampleCentreManager";
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
                        <h4 class="panel-title" style="color:#428BCA">Update Sample center</h4>
                    </div>
                    <br><br>
                                <div class="form-group">
                                    <label for="SID" class="col-sm-3 control-label">Sample center ID</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width: 206px;" class="form-control" id="SID" disabled="" placeholder="sample center ID" name="labName" value="<?php echo $scid;?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group" >
                                    <label class="col-sm-3 control-label" for="gender-1">Sample center Type</label>
                                    <div class="col-sm-3">
                                        <select id="TypeDropDown" style="width: 206px;" class="col-sm-3 form-control">
                                         
                                            <?php
                                                date_default_timezone_set("Asia/Colombo");
                                                foreach ($SSTypes as $value) {
                                                    ?>
                                            
                                            <option  id="<?php echo $value->sampleCenterType_ID; ?>" style="width: 206px;" value=""  <?php echo ($value->sample_Center_TypeName == $type)?"selected":"" ?>><?php echo $value->sample_Center_TypeName; ?></option>
                                                <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                
                                <div class="form-group">
                                    <label for="labName" class="col-sm-3 control-label">Sample center Name</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width: 206px;" class="form-control" id="labName" placeholder="sample center Name" name="labName" value="<?php echo $name;?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="labIncharge" class="col-sm-3 control-label">Incharge</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width: 206px;" class="form-control" id="labIncharge" placeholder="lab Incharge" name="labIncharge" value="<?php echo $incharge;?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="location" class="col-sm-3 control-label">Location</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width: 206px;" class="form-control" id="location" placeholder="location" name="location" value="<?php echo $location;?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width: 206px;" class="form-control" id="email" placeholder="email" name="email" value="<?php echo $email;?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="Contact1" class="col-sm-3 control-label">Contact 01</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width: 206px;" class="form-control" id="Contact1" placeholder="Contact 1" name="Contact1" value="<?php echo $con1;?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="Contact2" class="col-sm-3 control-label">Contact 02</label>
                                    <div class="col-sm-3">
                                        <input type="text" style="width: 206px;" class="form-control" id="Contact2" placeholder="Contact 2" name="Contact2" value="<?php echo $con2;?>">
                                    </div>
                                </div>
                                
                                <br>
                                <br>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label"></label>
                                    <div class="col-sm-3">
                                        <button type="button" class="btn btn-primary" style="width: 206px;" id="UpdateButton"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                    </div>
                                </div>
                                <br><br>
                            </div>
                    
                        
                        
                        
                        
                                </div> 

                            </div>
                    
            
            </div>
        </div>
       
</body>
                          