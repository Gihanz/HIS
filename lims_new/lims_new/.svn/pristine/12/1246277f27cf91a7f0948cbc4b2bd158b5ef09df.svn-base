<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">New Patient</h3>
        </div><!-- /.box-header -->

        <div class="box-body">


            <div class="panel panel-default">
                <div class="panel-heading clickable">
                    User Roles List         
                </div>
                <div class="panel-body" >
                    <table id="tbl_patients" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Role ID</th>
                                <th>Role Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody id="tbody_userRoles_list">
                            <?php
                            foreach ($all_userRoles_result as $row) {

                                $roleId = $row->roleId;
                                $roleName = $row->roleName;
                                
                                echo " <tr id='$roleId'>";
                                echo " <td > " . $roleId . "</td>";
                                echo " <td > " . $roleName . "</td>";

                                echo "<td><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs btn_edit' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>";
                                echo "<td><p data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs btn_delete' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></p></td>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>


            <form class="form-horizontal" role="form" method="POST">
                <div class="panel panel-default">


                    <div class="panel-heading clickable">
                        Add New User Roles           
                    </div>
                    <div class="panel-body" >
                        <div class="form-group col-lg-12">

                            <div class="row col-sm-12 form-horizontal" style="text-align: center" >                                    


                                <div class="form-group">
                                    <label for="role_name" class="col-sm-2 control-label">Role Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="role_name" name="role_name">
                                    </div>
                                </div>
                                
                            </div>
                            
                                                 
                            <div class="row">
                                <div class="col-xs-12">
                                    <hr style="border:1px dashed #dddddd;">
                                </div>
                                <div class="col-xs-2">

                                    <button id="btn_insert_userRole" type="button" class="btn btn-primary btn-block">Insert User Role</button>

                                </div>    
                                <div class="col-xs-2">


                                    <button id="btn_clear" type="button" class="btn btn-warning btn-block">Clear</button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div> 

    </div>
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
            $('.panel div.clickable').click();
        });
        
           //  <!--Model for insert new user role-->
                 
                $('#btn_insert_userRole').click(function () {
                     alert("TEST!");
                var json = [];
                var obj = {};

                var role_name = $('#role_name').val();
                
                obj ['roleName'] = role_name;
               
                json.push(obj)
                var newUserRolesJSONObject = {"NewUserRole": json};
                //alert(JSON.stringify(newEmployeeJSONObject));

                $.ajax({
                    type: "POST",
                    url: 'userRoles_Controller/InsertNewUserRoles',
                    data: {'userRoles': newUserRolesJSONObject}, success: function (output) {
                        alert("Successfully Inserted!");
                    }
                });
          
        });
        
</script>