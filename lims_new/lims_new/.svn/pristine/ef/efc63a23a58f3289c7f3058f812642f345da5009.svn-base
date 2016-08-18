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
                var TID = $('#TID').val();    
                var CID = $('#catID').val();
                var SID = $('#subID').val();
                var testName = $('#testName').val();

             var test = []
             test.push(TID);
             test.push(CID);
             test.push(SID);
             test.push('1');
             test.push(testName);
             
             if (testName != '')
             {
                 $.ajax({
                     type: "POST",
                     url: 'lab/editTestNames/updateTestNames',
                     data: {'test': test},
                     success: function(output) {
                         alert("Test is updated successfuly !");
                          window.location.href = "<?php echo base_url();?>labTestManager";
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
                        <h4 class="panel-title" style="color:#428BCA">Update Lab Test</h4>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            <label for="TID" class="col-sm-2 control-label" style="width:150px; font-size:12px">Test ID</label>
                            <input id="TID" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value=" <?php echo $TID; ?>" disabled>
                            <br>
                            <label for="category" class="col-sm-2 control-label" style="width:150px; font-size:12px">Category</label>
                            <input id="category" type="text" class="form-control" required="true" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $cat; ?>" disabled>
                            <br>
                            
                            <label for="subcategory" class="col-sm-2 control-label" style="width:150px; font-size:12px">Category</label>
                            <input id="subcategory" type="text" class="form-control" required="true" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $sub; ?>" disabled>
                            <br> 
                            
                            <label for="testName" class="col-sm-2 control-label" style="width:150px; font-size:12px">Test Name</label>
                            <input id="testName" type="text" class="form-control" required="true" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $TN; ?>">
                            <br> <br>
                            <label for="" class="col-sm-2 control-label" style="width:130px; font-size:12px"></label>
                            <button type="button" class="btn btn-primary" style="width:202px; position: absolute; margin-left: 20px;" id="UpdateButton"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                            <br><br>
                            
                            
                            
                            <input id="catID" type="text" hidden="true" value="<?php echo $cid; ?>">
                            <input id="subID" type="text" hidden="true" value="<?php echo $sid; ?>">
                        </div>
                        
                                    </div>
                                </div> <!---Patient Details Panel close ---->

                            </div>
                    
            
            </div>
        </div>
       
</body>
                          