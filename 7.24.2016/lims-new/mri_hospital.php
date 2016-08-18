<?php //print_r($specTypes); ?>
<div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Add Hospital</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form id="form_hospt" class="form-horizontal" role="form" method="POST">
            <div class="box-body">
                <div id="message-1"></div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="hospital_name">Hospital Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="hospital_name" id="hospital_name"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="address">Adress:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="address" id="address"/>
                    </div>
                </div>            
				<div class="form-group">
                    <label class="control-label col-sm-3" for="location">Location:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="location" id="location"/>
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-sm-3" for="contact_no1">Contact No 1:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="contact_no1" id="contact_no1"/>
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-sm-3" for="contact_no2">Contact No 2:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="contact_no2" id="contact_no2"/>
                    </div>
                </div>
				
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button id="btn_insert_hospital" type="button" class="btn btn-primary btn-block">Insert Hospital</button>
            </div>
        </form>
    </div><!-- /.box -->
</div>

<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Hospitals</h3>
        </div><!-- /.box-header -->

        <div class="box-body">

<!--Modal for view all Hospital-->
            
            <div class="panel panel-default">
                <div class="panel-heading clickable">
                    Hospital List         
                </div>
                <div class="panel-body" >
                    <table id="tbl_hospitals" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
								<th>Hospital ID</th>
                                <th>Hoapital Name</th>
                                <th>Address</th>
                                <th>Location</th>
                                <th>Contact No 1</th>
                                <th>Contact No 2</th>
								<th>Edit</th>
                          
                            </tr>
                        </thead>

                        <tbody id="tbody_hospital_list">
                            
							<?php

							foreach ($all_hospital as $row) {
							
                                $hospitalId = $row->hospitalId;
								$hospitalName = $row->hospitalName;
								$address = $row->address;
                                $location = $row->location;
                                $contactNo1 = $row->contactNo1;
                                $contactNo2 = $row->contactNo2;
 
                                echo " <tr id='$hospitalId'>";
                                echo " <td > " . $hospitalId . "</td>";
								echo " <td > " . $hospitalName . "</td>";
                                echo " <td > " . $address . "</td>";
								echo " <td > " . $location . "</td>";
                                echo " <td > " . $contactNo1 . "</td>";
                                echo " <td > " . $contactNo2 . "</td>";
  
							    echo "<td><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs btn_edit' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>";
                               // echo "<td><p data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs btn_delete' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></p></td>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

<!--View for Test-->

          </div> 

    </div>
</div>

<!--Edit Hospital-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Hospital Detail</h4>
            </div>
            <div class="modal-body col-sm-12">
                <div class="row col-sm-12 form-horizontal"  >                                    
                    <div class="form-group">
                        <label for="hospital_id_edit" class="col-sm-3 control-label">Hospital ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="hospital_id_edit" name="hospital_id_edit" readonly="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hospital_name_edit" class="col-sm-3 control-label">Hospital Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="hospital_name_edit" name="hospital_name_edit">
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label for="address_edit" class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address_edit" name="address_edit">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="location_edit" class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="location_edit" name="location_edit">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact_no1_edit" class="col-sm-3 control-label">Contact No 1</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact_no1_edit" name="contact_no1_edit">
                        </div>
                    </div>
                                
                    <div class="form-group">
                        <label for="contact_no2_edit" class="col-sm-3 control-label">Contact No 2</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact_no2_edit" name="contact_no2_edit">
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="modal-footer ">
                <button id="btn_update_hospital" type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>

<script type="application/javascript">


     //  <!--Model for insert new department-->
                  
                $('#btn_insert_hospital').click(function () {
           
                var json = [];
                var obj = {};

                var hospital_name = $('#hospital_name').val();
                var address = $('#address').val();
                var location = $('#location').val();
                var contact_no1 = $('#contact_no1').val();
                var contact_no2 = $('#contact_no2').val();

                obj ['HospitalName'] = hospital_name;
                obj ['HospitalAddress'] = address;
                obj ['HospitalLocation'] = location;
                obj ['HospitalContactNo1'] = contact_no1;
                obj ['HospitalContactNo2'] = contact_no2;

                json.push(obj)
                var newHospitalJSONObject = {"NewHospital": json};

                $.ajax({
                    type: "POST",
                    url: 'hospital_controller/InsertNewHospital',
                    data: {'hospital': newHospitalJSONObject}, success: function (output) {
                        alert("Successfully Inserted!");
                        document.getElementById("form_hospt").reset();
                        window.location.reload();
                    }
                });
            
        });

	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	$('document').ready(function () {

        $('#tbl_hospitals').dataTable();
        
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

        
        //<!--Edit hospital-->
         $('.btn_edit').click(function () {
            var row_id = $(this).closest('tr').attr('id');
            var hospital_name = $(this).closest("tr").find('td:eq(1)').text();
            var address = $(this).closest("tr").find('td:eq(2)').text();
            var location = $(this).closest("tr").find('td:eq(3)').text();
            var contact_no1 = $(this).closest("tr").find('td:eq(4)').text();
            var contact_no2 = $(this).closest("tr").find('td:eq(5)').text();

            $('#hospital_id_edit').val(row_id);
            $('#hospital_name_edit').val(hospital_name);
            $('#address_edit').val(address);
            $('#location_edit').val(location);
            $('#contact_no1_edit').val(contact_no1);
            $('#contact_no2_edit').val(contact_no2);

        });

        
        //  <!--Model for update hospital -->
                 
                $('#btn_update_hospital').click(function () {
                     //alert("TEST!");
                var json = [];
                var obj = {};

                var hospital_id = $('#hospital_id_edit').val();
                var hospital_name = $('#hospital_name_edit').val();
                var address = $('#address_edit').val();
                var location = $('#location_edit').val();
                var contact_no1 = $('#contact_no1_edit').val();
                var contact_no2 = $('#contact_no2_edit').val();

                
                obj ['hospitalId'] = hospital_id;
                obj ['hospitalName'] = hospital_name;
                obj ['address'] = address;
                obj ['location'] = location;
                obj ['contactNo1'] = contact_no1;
                obj ['contactNo2'] = contact_no2;
				
               
                json.push(obj)
                var updatedHospitalJSONObject = {obj};
                //alert(JSON.stringify(newEmployeeJSONObject));

                $.ajax({
                    type: "POST",
                    url: 'hospital_controller/UpdateHospital',
                    data: {'hospitals': updatedHospitalJSONObject}, success: function (output) {
                        alert("Successfully Updated!");
                         window.location.reload();
                    }
                });
          
        });
        
     })
	 
</script>