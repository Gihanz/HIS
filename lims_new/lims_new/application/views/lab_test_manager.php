<html>
    <head>
        <script>
            $('document').ready(function() {

                $('#tbl1').dataTable({
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url(); ?>swf/copy_csv_xls_pdf.swf"
                    }
                });
                $('#tbl2').dataTable({
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url(); ?>swf/copy_csv_xls_pdf.swf"
                    }
                });
                $('#tbl3').dataTable({
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url(); ?>swf/copy_csv_xls_pdf.swf"
                    }
                });
                $('#tbl4').dataTable({
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url(); ?>swf/copy_csv_xls_pdf.swf"
                    }
                });
                
                
                
                 $('.updtCat').click(function() {
                 
                   var x = ($(this).data('member'));
                   alert(x);

                        });

                        

//                        $(".updtCat").click(function() {
//                            CatID = $(this).attr("Id");
//                            alert(CatID);
//
//                        });




            });
        </script>       
    </head>
    <body>
       

            <div id="page-wrapper">
                <br> <br> <br>
                <div class="row" STYLE="TOP:120px; margin-left: -10px; ">

                    <h3>Test Categories</h3><br>
                    <table id="tbl1" class="display" cellspacing="0">

                        <thead>
                            <tr>
                                <th>Category ID</th>
                                <th>Category Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Category ID</th>
                                <th>Category Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                           <?php
                                             
                           date_default_timezone_set("Asia/Colombo");
                                                    foreach ($categories as $value) {
                                                        ?>
                                                            <tr id="<?php echo $value->category_ID; ?>">
                                                            <td><?php echo $value->category_ID; ?></td>
                                                            <td><?php echo $value->category_Name; ?></td>
                                                           
                                                            <td> <a href='<?php echo base_url();?>editCategory?CID=<?php echo $value->category_ID;?>&Cat=<?php echo $value->category_Name; ?>'  id="<?php echo $value->category_ID; ?>" class="updtCat" data-toggle='modal'> <button id="<?php echo $value->category_ID; ?>" value=""  class='btn btn-info' title='Edit' data-toggle='tooltip' data-placement='right  ' ><span class="glyphicon glyphicon-edit"></span> Edit</button></a></td>
                                                            <td> <a href='#'  id="<?php echo $value->category_ID; ?>" data-toggle='modal'> <button id="<?php echo $value->category_ID; ?>" value=""  class='btn btn-danger' title='Delete' data-toggle='tooltip' data-placement='right  ' ><span class="glyphicon glyphicon-trash"></span> Delete</button></a></td>
                                                        </tr>

                                                    <?php
                                                    }

                                                    ?>
                        </tbody>
                    </table>

                    <br> <br> <br>  <br> <br> <br>
                    
                    <h3>Test Sub Categories</h3><br>                   
                    <table id="tbl2" class="display" cellspacing="0">

                        <thead>
                            <tr >
                                <th>Sub Category ID</th>
                                <th>Sub Category Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr >
                                <th>Sub Category ID</th>
                                <th>Sub Category Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>

                        <tbody>
                            <?php
                                             
                           date_default_timezone_set("Asia/Colombo");
                                                    foreach ($Subcategories as $value) {
                                                        ?>
                                                            <tr id="<?php echo $value->sub_CategoryID ?>">
                                                            <td><?php echo $value->sub_CategoryID; ?></td>
                                                            <td><?php echo $value->sub_CategoryName; ?></td>
                                                           
                                                            <td> <a href='<?php echo base_url();?>editSubCategory?SID=<?php echo $value->sub_CategoryID;?>&SubCat=<?php echo $value->sub_CategoryName; ?>&catID=<?php echo $value->fCategory_ID->category_ID ;?>'  id="<?php echo $value->sub_CategoryID; ?>" data-toggle='modal'> <button id="<?php echo $value->sub_CategoryID; ?>" value=""  class='btn btn-info' title='Edit' data-toggle='tooltip' data-placement='right  ' ><span class="glyphicon glyphicon-edit"></span> Edit</button></a></td>
                                                            <td> <a href='#' id="<?php echo $value->sub_CategoryID; ?>" data-toggle='modal'> <button id="<?php echo $value->sub_CategoryID; ?>" value=""  class='btn btn-danger' title='Delete' data-toggle='tooltip' data-placement='right  ' ><span class="glyphicon glyphicon-trash"></span> Delete</button></a></td>
                                                        </tr>

                                                    <?php
                                                    }

                                                    ?>
                        </tbody>

                    </table>
                    
                    <br> <br> <br> <br> <br> <br>
                    
                    <h3>Test Names</h3><br>
                    <table id="tbl3" class="display" cellspacing="0">
                        <thead>
                            <tr >
                                <th>Test ID</th>
                                <th>Test Name</th>
                                <th>Category </th>
                                <th>Sub Category</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr >
                                <th>/</th>
                                <th>Test ID</th>
                                <th>Test Name</th>
                                <th>Category </th>
                                <th>Sub Category</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            
                            <?php
                                            
                           date_default_timezone_set("Asia/Colombo");
                                                    foreach ($TestNames as $value) {
                                                        ?>
                                                            <tr id="<?php echo $value->test_ID; ?>">
                                                            <td><?php echo $value->test_ID; ?></td>
                                                            <td><?php echo $value->test_Name; ?></td>
                                                            <td><?php echo $value->fTest_CategoryID->category_Name; ?></td>
                                                            <td><?php echo $value->fTest_Sub_CategoryID->sub_CategoryName; ?></td>
                                                           
                                                            <td> <a href='<?php echo base_url();?>editTestNames?TID=<?php echo $value->test_ID; ?>&TN=<?php echo $value->test_Name; ?>&cid=<?php echo $value->fTest_CategoryID->category_ID; ?>&cat=<?php echo $value->fTest_CategoryID->category_Name; ?>&sid=<?php echo $value->fTest_Sub_CategoryID->sub_CategoryID; ?>&sub=<?php echo $value->fTest_Sub_CategoryID->sub_CategoryName; ?>'  data-toggle='modal'> <button id="<?php echo $value->test_ID; ?>" value=""  class='btn btn-info' title='Edit' data-toggle='tooltip' data-placement='right  ' ><span class="glyphicon glyphicon-edit"></span> Edit</button></a></td>
                                                            <td> <a href='#' id="<?php echo $value->test_ID; ?>" data-toggle='modal'> <button id="<?php echo $value->test_ID; ?>" value=""  class='btn btn-danger' title='Delete' data-toggle='tooltip' data-placement='right  ' ><span class="glyphicon glyphicon-trash"></span> Delete</button></a></td>
                                                        </tr>

                                                    <?php
                                                    }

                                                    ?>
                        </tbody>
                    </table>

                
                
               
                     
                    </div>
                
            </div>
        
                
                </body>

                </html>

