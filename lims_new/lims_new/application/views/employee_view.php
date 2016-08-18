<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">New User</h3>
        </div><!-- /.box-header -->

        <div class="box-body">

<!--Modal for view all employee-->
            
            <div class="panel panel-default">
                <div class="panel-heading clickable">
                    Employee List         
                </div>
                <div class="panel-body" >
                    <table id="tbl_patients" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Sex</th>
                                <th>Address</th>
                                <th>Contact No 1</th>
                                <th>Role</th>
                                <th>Extension</th>
                                <th>E-mail</th>
                                <th>NIC</th>
                                <th>Register</th>
                                <th>Edit</th>
                               
                            </tr>
                        </thead>

                        <tbody id="tbody_employee_list">
                            <?php
                            foreach ($all_employee_result as $row) {

                                $employeeId = $row->employeeId;
                                $name = $row->name;
                                $age = $row->age;
                                $sex = $row->sex;
                                $address = $row->address;
                                $contactNo1 = $row->contactNo1;
                                $contactNo2 = $row->contactNo2;
                                $extension = $row->extension;
                                $email = $row->email;
                                $nic = $row->nic;
                               // $world['foo'] = $row->mriUsers;
                                $output=null;
                                $outRoleId='';
                                $outRole='';
                                $username='';
                                $userId='';
                          
                           foreach($row->mriUsers as $row1) {
                                  $output=$row1->mriUserRoles;
                                  $username=$row1->userName;
                                  $userId=$row1->userId;
                                  $outRoleId= $output->roleId;
                                  $outRole =$output->roleName;
                                  
                                    }
                                      if($outRoleId !== ''){

                                 }else 
                                 { 
                                    $outRole ='Unregisted User';
                             }

                                echo " <tr id='$employeeId'>";
                                echo " <td > " . $employeeId . "</td>";
                                echo " <td > " . $name . "</td>";
                                echo " <td > " . $age . "</td>";
                                echo " <td > " . $sex . "</td>";
                                echo " <td > " . $address . "</td>";
                                echo " <td > " . $contactNo1 . "</td>";
                                echo " <td > " . $outRole . "</td>";
                                echo " <td > " . $extension . "</td>";
                                echo " <td > " . $email . "</td>";
                                echo " <td > " . $nic . "</td>";
                              
                                
                                echo "<td><p data-placement='top'  data-toggle='tooltip' title='Register'><button class='btn btn-success btn-xs btn_reg' data-title='Delete' data-roleid='".$outRoleId."' data-username='".$username."' data-userid='".$userId."' data-toggle='modal' data-target='#reg' ><span class='glyphicon glyphicon-user'></span></button></p>
                                <p data-placement='top'  data-toggle='tooltip' title='Password'><button class='btn btn-success btn-xs btn_pass' data-title='Password' data-username='".$username."' data-userid='".$userId."' data-toggle='modal' data-target='#pass' ><span class='glyphicon glyphicon-lock'></span></button></p></td>";

                                  echo "<td><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs btn_edit' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>";

                               // echo "<td><p data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs btn_delete' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></p></td>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

<!--View for Insert a employee-->

<form class="form-horizontal" role="form" method="POST" id="form_emp">
                <div class="panel panel-default">


                    <div class="panel-heading clickable">
                        Add New Employee           
                    </div>
                    <div class="panel-body" >
                        <div class="form-group col-lg-12">

                            <div class="row col-sm-12 form-horizontal" style="text-align: center" >                                    


                                <div class="form-group">
                                    <label for="employee_name" class="col-sm-2 control-label">Employee Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="employee_name" name="employee_name">
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="employee_age" class="col-sm-2 control-label">Age</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="employee_age" name="employee_age">
                                    </div>
                                </div>
                             
                                
                                <div class="form-group">
                                    <label for="employee_sex" class="col-sm-2 control-label">Gender</label>
                                    <div class="col-sm-8">                         
                                        <select id="employee_sex" class="form-control">
                                            <option selected="selected">Select gender</option>
                                            <option>Male</option>
                                           <option>Female</option>
                                        </select>                                                
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label for="employee_address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="employee_address" name="employee_address">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="employee_contact1" class="col-sm-2 control-label">Contact No 1</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="employee_contact1" name="employee_contact1">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="employee_contact2" class="col-sm-2 control-label">Contact No 2</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="employee_contact2" name="employee_contact2">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="employee_extension" class="col-sm-2 control-label">Extension</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="employee_extension" name="employee_extension">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="employee_email" class="col-sm-2 control-label">E-mail</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="employee_email" name="employee_email">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="employee_nic" class="col-sm-2 control-label">NIC</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="employee_nic" name="employee_nic">
                                    </div>
                                </div>
                                
                                
                                                                                                                            
                             </div>
                          
                      
                            <div class="row">
                                <div class="col-xs-12">
                                    <hr style="border:1px dashed #dddddd;">
                                </div>
                                <div class="col-xs-2">

                                    <button id="btn_insert_employee" type="button" class="btn btn-primary btn-block" style="alignment-adjust: central">Insert Employee</button >

                                </div>  
                                
                                <form action="" method="post">
   
    <input type="hidden" name="button_pressed" value="1" />
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

          </div> 

    </div>
</div>


<!--Register employee-->
<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="edit_clear">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Register an Employee</h4>
            </div>
            <div class="modal-body col-sm-12">
                <div class="row col-sm-12 form-horizontal"  >                                    
                    <div class="form-group">
                        <label for="employee_id_reg" class="col-sm-3 control-label">Employee ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_id_reg" name="employee_id_reg" readonly="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="employee_username_reg" class="col-sm-3 control-label">User name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_username_reg" name="employee_username_reg">
                        </div>
                    </div>
                    
                    <div class="form-group">
<!--<label for="employee_password_reg" class="col-sm-3 control-label">Password</label> -->
                        <div class="col-sm-9">
                            <input type="hidden"  type="password" class="form-control" id="employee_password_reg" name="employee_password_reg">
                        </div>
                    </div>
                    
                    <div class="form-group">
                    <label class="control-label col-sm-3" for="employee_role_reg">Role</label>
                    <div class="col-sm-9">
                        <select name="employee_role_reg" id="employee_role_reg" class="form-control">
                            <?php
                            if(isset($userRoles)){
                                foreach($userRoles as $row) {
                                    echo '<option value="'.$row->roleId.'">'.$row->roleName.'</option>';
                                }
                            }
                            ?>
                        </select>
                           <input type="hidden" id="hidden_exhist_user_reg"   aria-hidden="true"  class="col-sm-3 control-label" > 
                            <input  type="hidden" id="userId_reg"   aria-hidden="true"  class="col-sm-3 control-label" > 
                    </div>
                </div>
                                      
                </div>
            </div>
            <div class="modal-footer ">
                <button id="btn_reg_employee" type="button" class="btn btn-success btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-user"></span>Register</button>
            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>

<!--Set Password employee-->
<div class="modal fade" id="pass" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="edit_clear">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Password Reset</h4>
            </div>
            <div class="modal-body col-sm-12">
                <div class="row col-sm-12 form-horizontal"  >                                    
                    <div class="form-group">
                        <label for="employee_id_reg" class="col-sm-3 control-label">Employee ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_id_pass" name="employee_id_reg" readonly="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="employee_username_reg" class="col-sm-3 control-label">User name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_username_pass" name="employee_username_reg" readonly="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="employee_password_reg" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="employee_password_pass" name="employee_password_pass">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="employee_password_reg_second" class="col-sm-3 control-label"> Retype Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="employee_password_pass_second" name="employee_password_pass_second">
                        </div>
                         <input id="hidden_exhist_user_pass" type="hidden" aria-hidden="true" class="col-sm-3 control-label"> 
                        <input id="userId_pass"  type="hidden"  aria-hidden="true"  class="col-sm-3 control-label" > 
                    </div>
          
                                      
                </div>
            </div>
            <div class="modal-footer ">
                <button id="btn_pass_employee" type="button" class="btn btn-success btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-user"></span>Set Passowod
        </div>
        <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>

<!--Edit Employee-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Employee Detail</h4>
            </div>
            <div class="modal-body col-sm-12">
                <div class="row col-sm-12 form-horizontal"  >                                    
                    <div class="form-group">
                        <label for="employee_id_edit" class="col-sm-3 control-label">Employee ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_id_edit" name="employee_id_edit" readonly="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="employee_name_edit" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_name_edit" name="employee_name_edit">
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label for="employee_age_edit" class="col-sm-3 control-label">Age</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_age_edit" name="employee_age_edit">
                        </div>
                    </div>
                  
                    
                    <div class="form-group">
                                    <label for="employee_sex_edit" class="col-sm-3 control-label">Gender</label>
                                    <div class="col-sm-9">                         
                                        <select id="employee_sex_edit" class="form-control" name="employee_sex_edit" >
                                            <option selected="selected">Male</option>
                                            <option>Female</option>
                                        </select>                                                
                                    </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="employee_address_edit" class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_address_edit" name="employee_address_edit">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="employee_ctc1_edit" class="col-sm-3 control-label">Contact No 1</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_ctc1_edit" name="employee_ctc1_edit">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="employee_ctc2_edit" class="col-sm-3 control-label">Contact No 2</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_ctc2_edit" name="employee_ctc2_edit">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="employee_ext_edit" class="col-sm-3 control-label">Extension</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_ext_edit" name="employee_ext_edit">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="employee_email_edit" class="col-sm-3 control-label">E-mail</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_email_edit" name="employee_email_edit">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="employee_nic_edit" class="col-sm-3 control-label">NIC</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_nic_edit" name="employee_nic_edit">
                        </div>
                    </div>
                   

                  
                </div>
            </div>
            <div class="modal-footer ">
                <button id="btn_update_employee" type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>


<script>

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
          //  $('.panel div.clickable').click();
        });
        
        //<!--Genarate password-->
   
   //  <!--Model for insert new employee-->
                 
                $('#btn_insert_employee').click(function () {
                    // alert("TEST!");
                var json = [];
                var obj = {};

                var employee_name = $('#employee_name').val();
                var age = $('#employee_age').val();
                var sex = $('#employee_sex').val();
                var address = $('#employee_address').val();
                var contact1 = $('#employee_contact1').val();
                var contact2 = $('#employee_contact2').val();
                var extension = $('#employee_extension').val();
                var email = $('#employee_email').val();
                var nic = $('#employee_nic').val();
             

                obj ['EmployeeName'] = employee_name;
                obj ['EmployeeAge'] = age;
                obj ['EmployeeSex'] = sex;
                obj ['EmployeeAddress'] = address;
                obj ['EmployeeContactNo1'] = contact1;
                obj ['EmployeeContactNo2'] = contact2;
                obj ['EmployeeExtension'] = extension;
                obj ['EmployeeEmail'] = email;
                obj ['EmployeeNic'] = nic;

                json.push(obj)
                var newEmployeeJSONObject = {"NewEmployee": json};
                //alert(JSON.stringify(newEmployeeJSONObject));

                $.ajax({
                    type: "POST",
                    url: 'employee_controller/InsertNewEmployee',
                    data: {'employee': newEmployeeJSONObject}, success: function (output) {
                        alert("Successfully Inserted!");
                        document.getElementById("form_emp").reset();
                        location.reload();
                    }
                });
          
        });
        
        //<!--Edit employee-->
         $('.btn_edit').click(function () {
            var row_id = $(this).closest('tr').attr('id');
            var employee_name = $(this).closest("tr").find('td:eq(1)').text();
            var age = $(this).closest("tr").find('td:eq(2)').text();
            var sex = $(this).closest("tr").find('td:eq(3)').text();
            var address = $(this).closest("tr").find('td:eq(4)').text();
            var contact1 = $(this).closest("tr").find('td:eq(5)').text();
            var contact2 = $(this).closest("tr").find('td:eq(6)').text();
            var extension = $(this).closest("tr").find('td:eq(7)').text();
            var email = $(this).closest("tr").find('td:eq(8)').text();
            var nic = $(this).closest("tr").find('td:eq(9)').text();

            $('#employee_id_edit').val(row_id);
            $('#employee_name_edit').val(employee_name);
            $('#employee_age_edit').val(age);
            $('#employee_sex_edit').val(sex);
            $('#employee_address_edit').val(address);
            $('#employee_ctc1_edit').val(contact1);
            $('#employee_ctc2_edit').val(contact2);
            $('#employee_ext_edit').val(extension);
            $('#employee_email_edit').val(email);
            $('#employee_nic_edit').val(nic);
        });
        
        
       // <!--Load data to Register employee-->
        $('.btn_reg').click(function () {
            //alert("reg");
            var row_id = $(this).closest('tr').attr('id');
           var role_id=$(this).attr("data-roleid");
            var username=$(this).attr("data-username");
             var userId=$(this).attr("data-userid");
            // alert(username);
            //Check user alredy exhit in the system and avoid change username
            //Keep exhisting User or not for Update action
            if(username !== ''){
                    $("#employee_username_reg").prop('disabled', true);
                    $("#hidden_exhist_user_reg").val("exhist");
                                 }else 
                                 { 
                   $("#employee_username_reg").prop('disabled', false);
                    $("#hidden_exhist_user_reg").val("new");
                             }

           $('#employee_role_reg option:selected').removeAttr('selected');
         // $('employee_role_reg:selected', 'select[name="options"]').removeAttr('selected');
          $('select[name="employee_role_reg"]').find('option[value="'+role_id+'"]').attr("selected",true);
        
            $('#employee_id_reg').val(row_id);
            $('#employee_username_reg').val(username); 
            $('#employee_password_reg').val("");
            $('#userId_reg').val(userId);

        });


             // <!--Load data to Password User-->
        $('.btn_pass').click(function () {
            //alert("btn pass");
            var row_id = $(this).closest('tr').attr('id');
           var usrename=$(this).attr("data-username");
            var userId=$(this).attr("data-userid");
        
            $('#employee_id_pass').val(row_id);
            $('#employee_username_pass').val(usrename); 
            $('#employee_password_pass').val("");

               //keep hidden value for update 
                if(usrename !==''){
                    $("#hidden_exhist_user_pass").val("exhist");
                                 }else 
                                 { 
                    $("#hidden_exhist_user_pass").val("new");
                             }


                $('#userId_pass').val(userId);
      
        });

        // <!--View for password reset for User-->
            $('#btn_pass_employee').click(function () {
            var pass = $('#employee_password_pass').val();
             var pass2 = $('#employee_password_pass_second').val();
              var username = $('#employee_username_pass').val(); 
               var userId = $('#userId_pass').val();


                var json = [];
                var obj = {}; 

                    if(pass !== pass2){
                  alert('the passwords didnt match!');
                    }else {

                        if(username === ''){
                            alert('Not a Registed User to set the Password');
                        }else 
                        {
                obj ['Password'] = pass;
                obj ['userId'] = userId;
                   json.push(obj);

                var newUserJSONObject = {"updateUser": json,"condition":"password"};
                //para1 - set to update password
                $.ajax({
                    type: "POST",
                    url: 'employee_controller/updateUser',
                    data: {'user': newUserJSONObject}, success: function (output) {
                        alert("Successfully Updated Password!");
                        location.reload();
                        
                    }
                });       
                        }
                    }
            });
       
       // <!--View for register employee-->
          $('#btn_reg_employee').click(function () {
                    
                var json = [];
                var obj = {}; 
                
                var emp_id = $('#employee_id_reg').val();
                var uname = $('#employee_username_reg').val();
                var password = $('#employee_password_reg').val();  
                var role = $('#employee_role_reg').val();
               var exhist = $('#hidden_exhist_user_reg').val();
                var userId = $('#userId_reg').val();
                
                obj ['employeeId'] = emp_id;
                obj ['userName'] = uname;
                obj ['Password'] = password;
                obj ['roleName'] = role;
                obj ['userId'] = userId;
            
                
                json.push(obj)

                if(exhist==="new"){

                var newUserJSONObject = {"NewUser": json};
             //   alert("Register new"+JSON.stringify(newUserJSONObject));

                $.ajax({
                    type: "POST",
                    url: 'employee_controller/registerUser',
                    data: {'user': newUserJSONObject}, success: function (output) {
                        alert("Successfully Registerd!");
                        location.reload();
                        
                    }
                });
               
                }

                if(exhist==="exhist"){

                var newUserJSONObject = {"updateUser": json,"condition":"role"};
               //a alert("Register exhist"+JSON.stringify(newUserJSONObject));

                //para1 - set to update role only
                $.ajax({
                    type: "POST",
                    url: 'employee_controller/updateUser',
                    data: {'user': newUserJSONObject}, success: function (output) {
                        alert("Successfully Update Role!");
                        location.reload();
                        
                    }
                });    
                }
     
                
            });  
            
            //  <!--Model for edit employee-->
                 
                $('#btn_update_employee').click(function () {
                     //alert("TEST!");
                var json = [];
                var obj = {};

                var employee_id = $('#employee_id_edit').val();
                var name = $('#employee_name_edit').val();
                var age = $('#employee_age_edit').val();
                var sex = $('#employee_sex_edit').val();
                var address = $('#employee_address_edit').val();
                var ctc1 = $('#employee_ctc1_edit').val();
                var ctc2 = $('#employee_ctc2_edit').val();
                var ext = $('#employee_ext_edit').val();
                var email = $('#employee_email_edit').val();
                var nic = $('#employee_nic_edit').val();
                
           
                obj ['employeeId'] = employee_id;
                obj ['employeeName'] = name;
                obj ['age'] = age;
                obj ['sex'] = sex;
                obj ['address'] = address;
                obj ['ctc1'] = ctc1;
                obj ['ctc2'] = ctc2;
                obj ['ext'] = ext;
                obj ['email'] = email;
                obj ['nic'] = nic;
                
                //alert(obj['employeeId']);
               
                //json.push(obj)
                var updatedEmployeeJSONObject = {obj};
                //alert(JSON.stringify(newEmployeeJSONObject));

                $.ajax({
                    type: "POST",
                    url: 'employee_controller/UpdateEmployee',
                    data: {'employee': updatedEmployeeJSONObject}, success: function (output) {
                        alert("Successfully Updated!");
                        location.reload();
                    }
               });
          
        });
          
        
        //mail test
        $('#btn_mail').click(function () {
          ss
                $to      = 'hd.shamal@gmail.com';
                $subject = 'Welcome';
                $message = 'hello';
                $headers = '';
                
        mail($to, $subject, $message, $headers);
           
         
        });

</script>



