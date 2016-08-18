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
             var SubcatID = $('#SID').val();
             var SubCatName = $('#SubCategoryName').val();
             var CategoryID = $('#CategoryID').val();
             var cate = []
             cate.push(SubcatID);
             cate.push(SubCatName);
             cate.push(CategoryID);
             
             
             
             
             
             if (SubCatName != '')
             {
                 $.ajax({
                     type: "POST",
                     url: 'lab/editSubCategory/updateSubCategory',
                     data: {'Category': cate},
                     success: function(output) {
                         alert("Sub Category Updated");
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
                        <h4 class="panel-title" style="color:#428BCA">Update Sub Category</h4>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            <label for="SID" class="col-sm-2 control-label" style="width:150px; font-size:12px">Sub Category ID</label>
                            
                            <input id="CID" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value=" <?php echo $SID; ?>" disabled>
                            
                            <br>
                            <label for="CategoryID" class="col-sm-2 control-label" style="width:150px; font-size:12px">Category ID</label>
                            <input id="CategoryID" disabled="true" type="text" class="form-control" required="true" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $cid; ?>">
                            <br>
                            <label for="SubCategoryName" class="col-sm-2 control-label" style="width:150px; font-size:12px">Sub Category Name</label>
                            <input id="CategoryName" type="text" class="form-control" required="true" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $Name; ?>">
                            <br><br>
                            <label for="" class="col-sm-2 control-label" style="width:130px; font-size:12px"></label>
                            <button type="button" class="btn btn-primary" style="width:202px; position: absolute; margin-left: 20px;" id="UpdateButton"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                        <br><br> 
                        </div>
                        
                        
                                    </div>
                                </div> <!---Patient Details Panel close ---->

                            </div>
                    
            
            </div>
        </div>
       
</body>
                          