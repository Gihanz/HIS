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
             var catID = $('#CID').val();
             var CatName = $('#CategoryName').val();
             var cate = []
             cate.push(catID);
             cate.push(CatName);
             
             if (CatName != '')
             {
                 $.ajax({
                     type: "POST",
                     url: 'lab/editCategory/updateCategory',
                     data: {'Category': cate},
                     success: function(output) {
                          alert("Category is updated successfuly !");
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
                        <h4 class="panel-title" style="color:#428BCA">Update Category</h4>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            <label for="CID" class="col-sm-2 control-label" style="width:120px; font-size:12px">Category ID</label>
                            <input id="CID" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;" value=" <?php echo $catID; ?>" disabled>
                            <br>
                            <label for="CategoryName" class="col-sm-2 control-label" style="width:120px; font-size:12px">Category Name</label>
                            <input id="CategoryName" type="text" class="form-control" required="true" placeholder="Text input" style="max-width:202px !important;" value="<?php echo $catName; ?>">
                            <br> 
                            <br>
                            <label for="" class="col-sm-2 control-label" style="width:120px; font-size:12px"></label>
                            <button type="button" style="width:202px;" class="form-control btn btn-primary" id="UpdateButton"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                            <br> 
                        </div>
                        
                                    </div>
                                </div> <!---Patient Details Panel close ---->

                            </div>
                    
            
            </div>
        </div>
       
</body>
                          