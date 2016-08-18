<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">New Departmant</h3>
        </div><!-- /.box-header -->

        <div class="box-body">

<!--Modal for view all department-->
            
            <div class="panel panel-default">
                <div class="panel-heading clickable">
                    Department List         
                </div>
                <div class="panel-body" >
                    <table id="tbl_patients" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Department ID</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Laboratory Count</th>
                                <th>Number of MLT</th>
                                <th>Number of Consultant</th>
                                <th>Contact No/ Extension</th>
                                <th>Edit</th>
                               
                            </tr>
                        </thead>

                        <tbody id="tbody_department_list">
                            
                            <?php
                            
                            foreach ($all_department_result as $row) {
                                

                                $departmentId = $row->departmentId;
                                $departmentName = $row->departmentName;
                                $location = $row->location;
                                $laboratoryCounts = $row->laboratoryCounts;
                                $numberOfMlt = $row->numberOfMlt;
                                $numberOfConsultant = $row->numberOfConsultant;
                                $contactNo=$row->contactNo;
                                
                                foreach ($employee as $emp) {
                                $inCharge = $emp->employeeId;
                                }

                                echo " <tr id='$departmentId'>";
                                echo " <td > " . $departmentId . "</td>";
                                echo " <td > " . $departmentName . "</td>";
                                echo " <td > " . $location . "</td>";
                                echo " <td > " . $laboratoryCounts . "</td>";
                                echo " <td > " . $numberOfMlt . "</td>";
                                echo " <td > " . $numberOfConsultant . "</td>";
                                echo " <td > " . $contactNo . "</td>";
                                
                                echo "<td><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs btn_edit' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>";
                               // echo "<td><p data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs btn_delete' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></p></td>";
                            
                            }
                            
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

<!--Modal for view all department-->

            <form id="form_dept" class="form-horizontal" role="form" method="POST">
                <div class="panel panel-default">


                    <div class="panel-heading clickable">
                        Add New Department           
                    </div>
                    <div class="panel-body" >
                        <div class="form-group col-lg-12">

                            <div class="row col-sm-12 form-horizontal" style="text-align: center" >                                    


                                <div class="form-group">
                                    <label for="department_name" class="col-sm-2 control-label">Department Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="department_name" name="department_name">
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="department_location" class="col-sm-2 control-label">Location</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="department_location" name="department_location">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="department_labCount" class="col-sm-2 control-label">Laboratory count</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="department_labCount" name="department_labCount">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="department_noOfMLT" class="col-sm-2 control-label">Number of MLT</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="department_noOfMLT" name="department_noOfMLT">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="department_noOfConsultant" class="col-sm-2 control-label">Number of Consultant</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="department_noOfConsultant" name="department_noOfConsultant">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="department_contactNo" class="col-sm-2 control-label">Contact No/ Extension</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="department_contactNo" name="department_contactNo">
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="department_inCharge">In-Charge</label>
                                     <div class="col-sm-8">
                                    <select name="department_inCharge" id="department_inCharge" class="form-control">
                                     <?php
                                     if(isset($employee)){
                                        foreach($employee as $row) {
                                        echo '<option value="'.$row->employeeId.'">'.$row->employeeId.'</option>';
                                     }
                                     }
                                    ?>
                                    </select>
                                     </div>
                                 </div>
                                
                                
                                
                             </div>
                          
                      
                            <div class="row">
                                <div class="col-xs-12">
                                    <hr style="border:1px dashed #dddddd;">
                                </div>
                                <div class="col-xs-2">

                                    <button id="btn_insert_department" type="button" class="btn btn-primary btn-block">Insert Department</button>

                                </div>    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>

          </div> 

    </div>
</div>

<!--Edit department-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Department Detail</h4>
            </div>
            <div class="modal-body col-sm-12">
                <div class="row col-sm-12 form-horizontal"  >                                    
                    <div class="form-group">
                        <label for="department_id_edit" class="col-sm-3 control-label">Department ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="department_id_edit" name="department_id_edit" readonly="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="department_name_edit" class="col-sm-3 control-label">Department Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="department_name_edit" name="department_name_edit">
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label for="department_location_edit" class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="department_location_edit" name="department_location_edit">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="department_labCount_edit" class="col-sm-3 control-label">Laboratory count</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="department_labCount_edit" name="department_labCount_edit">
                        </div>
                    </div>
                    
                    <div class="form-group">
                                    <label for="department_noOfMLT_edit" class="col-sm-3 control-label">Number of MLT</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="department_noOfMLT_edit" name="department_noOfMLT_edit">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="department_noOfConsultant_edit" class="col-sm-3 control-label">Number of Consultant</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="department_noOfConsultant_edit" name="department_noOfConsultant_edit">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="department_contactNo_edit" class="col-sm-3 control-label">Contact No/ Extension</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="department_contactNo_edit" name="department_contactNo_edit">
                                    </div>
                                </div>

                  
                </div>
            </div>
            <div class="modal-footer ">
                <button id="btn_update_department" type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>


<script>

    $('document').ready(function () {

        $('#tbl_patients').dataTable();
        
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
        $(document).ready(function () {
            $('.panel-heading span.clickable').click();
           // $('.panel div.clickable').click();
        });
        
   
   //  <!--Model for insert new department-->
                  
                $('#btn_insert_department').click(function () {
           
                var json = [];
                var obj = {};

                var department_name = $('#department_name').val();
                var department_location = $('#department_location').val();
                var labCount = $('#department_labCount').val();
                var noOfMLT = $('#department_noOfMLT').val();
                var noOfConsultant = $('#department_noOfConsultant').val();
                var inCharge = $('#department_inCharge').val();
                var contactNo=$('#department_contactNo').val();

                obj ['DepartmentName'] = department_name;
                obj ['DepartmentLocation'] = department_location;
                obj ['DepartmentLabCount'] = labCount;
                obj ['DepartmentNoOfMlt'] = noOfMLT;
                obj ['DepartmentNoOfConsultant'] = noOfConsultant;
                obj ['employeeId'] = inCharge;
                obj ['DepartmentContactNo']=contactNo;

                json.push(obj)
                var newDepartmentJSONObject = {"NewDepartment": json};
                //alert(JSON.stringify(newPatientJSONObject));

                $.ajax({
                    type: "POST",
                    url: 'department_controller/InsertNewDepartment',
                    data: {'department': newDepartmentJSONObject}, success: function (output) {
                        alert("Successfully Inserted!");
                        document.getElementById("form_dept").reset();
                        location.reload();
                    }
                });
            
        });
        
        //<!--Edit department-->
         $('.btn_edit').click(function () {
            var row_id = $(this).closest('tr').attr('id');
            var department_name = $(this).closest("tr").find('td:eq(1)').text();
            var department_location = $(this).closest("tr").find('td:eq(2)').text();
            var labCount = $(this).closest("tr").find('td:eq(3)').text();
            var noOfMLT = $(this).closest("tr").find('td:eq(4)').text();
            var noOfConsultant = $(this).closest("tr").find('td:eq(5)').text();
            var contactNo=$(this).closest("tr").find('td:eq(6)').text();

            $('#department_id_edit').val(row_id);
            $('#department_name_edit').val(department_name);
            $('#department_location_edit').val(department_location);
            $('#department_labCount_edit').val(labCount);
            $('#department_noOfMLT_edit').val(noOfMLT);
            $('#department_noOfConsultant_edit').val(noOfConsultant);
            $('#department_contactNo_edit').val(contactNo);
        });

        
        //  <!--Model for update department -->
                 
                $('#btn_update_department').click(function () {
                     //alert("TEST!");
                var json = [];
                var obj = {};

                var dept_id = $('#department_id_edit').val();
                var dept_name = $('#department_name_edit').val();
                var dept_location = $('#department_location_edit').val();
                var dept_labCount = $('#department_labCount_edit').val();
                var dept_noOfMLT = $('#department_noOfMLT_edit').val();
                var dept_noOfConsultant = $('#department_noOfConsultant_edit').val();
                var dept_contactNo=$('#department_contactNo_edit').val();
                
                obj ['deptId'] = dept_id;
                obj ['deptName'] = dept_name;
                obj ['deptLocation'] = dept_location;
                obj ['deptLabCount'] = dept_labCount;
                obj ['deptNoOfMLT'] = dept_noOfMLT;
                obj ['deptNoOfConsultant'] = dept_noOfConsultant;
                obj['deptContactNo']=dept_contactNo;
               
                json.push(obj)
                var updatedDepartmentJSONObject = {obj};
                //alert(JSON.stringify(newEmployeeJSONObject));

                $.ajax({
                    type: "POST",
                    url: 'department_controller/UpdateDepartment',
                    data: {'departments': updatedDepartmentJSONObject}, success: function (output) {
                        alert("Successfully Updated!");
                         location.reload();
                    }
                });
          
        });
        
     })
</script>

