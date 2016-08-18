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
             var DID = $('#DID').val();
             var DeptName = $('#DeptName').val();
             var lab = []
             lab.push(DID);
             lab.push(DeptName);
             
             if (DeptName != '')
             {
                 
                 $.ajax({
                     type: "POST",
                     url: 'lab/editLabDepartment/updateLabDept',
                     data: {'lab': lab},
                     success: function(output) {
                           alert("Department Updated Successfuly");
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

            <div class="row" STYLE="position:absolute; TOP:120px; margin-left: -256px; width: 500px;">


                <div class="panel panel-primary " style="width: 100%;">
                    <div class="panel-heading" style="background-color:whitesmoke">
                        <h4 class="panel-title" style="color:#428BCA">Update Department</h4>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            <label for="DID" class="col-sm-2 control-label" style="width:130px; font-size:12px">Department ID</label>
                            <input id="DID" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value=" <?php echo $DID; ?>" disabled>
                            <br>
                            <label for="DeptName" class="col-sm-2 control-label" style="width:130px; font-size:12px">Department Name</label>
                            <input id="DeptName" type="text" class="form-control" required="true" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $DeptName; ?>">
                            <br><br>
                            <label for="" class="col-sm-2 control-label" style="width:130px; font-size:12px"></label>
                            <button type="button" class="btn btn-primary" style="width:202px" id="UpdateButton"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                        </div>
                        <div id="buttonGroup" style="margin-top: 10px">

                            


                                                   

                                                </div><br>

                                    </div>
                                </div> <!---Patient Details Panel close ---->

                            </div>
                    
            
            </div>
        </div>
       
</body>
                          