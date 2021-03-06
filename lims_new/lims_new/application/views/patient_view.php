<?php include 'includes/edit_delete_button.php'; 
//Set Edit Delete Button Privilages matches with edit and delete variables
?>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <!--  <div class="box-header">
          <h3 class="box-title">New Patient</h3>
        </div> --> <!-- /.box-header -->

        <div class="box-body">

            <form class="form-horizontal" role="form" method="POST">
                <div class="panel panel-default">


                    <div class="panel-heading clickable">
                        Add New Patient           
                    </div>
                    <div class="panel-body" >
                        <div class="form-group col-lg-12">

                            <div class="row col-sm-12 form-horizontal" style="text-align: center" >                                    


                                <div class="form-group">
                                    <label for="patient_name" class="col-sm-2 control-label">Patient Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="patient_name" name="patient_name" required="required">
                                    </div>
                                </div>
                           
                                <div class="form-group" >
                                    <label for="patient_age" class="col-md-2 control-label"  >Age</label>
                                    <div class="col-md-1"  style="width: 12.333333%">
                                         <input type="number"  min="0" max="100" class="form-control col-md-2" id="patient_age_year" placeholder="Year"  autocomplete="off" >
                                        <datalist id="patient_age_year_datalist" />
                                        <?php  
                                            for ($x = 0; $x <= 100; $x++) {
                                              echo "<option id='$x' value='$x'></option>";
                                            }
                                        ?>                                              
                                        </datalist>                                      
                                    </div>
                                    <div class="col-md-1"  style="width: 12.533333%; margin-left: -28px !important;">   
                                        <input class="form-control" id="patient_age_month" placeholder="Month" type="number"  min="0" max="100" autocomplete="off" />
                                        <datalist id="patient_age_month_datalist">
                                        <?php  
                                            for ($x = 0; $x <= 12; $x++) {
                                              echo "<option id='$x' value='$x'></option>";
                                            }
                                        ?>                                              
                                        </datalist>                                        
                                    </div>
                                    <div class="col-md-1"  style="width: 12.333333%; margin-left: -28px !important;"> 
                                        <input class="form-control" id="patient_age_days" placeholder="Days" type="number"  min="0" max="100"  autocomplete="off" />
                                        <datalist id="patient_age_days_datalist">
                                        <?php  
                                            for ($x = 0; $x <= 30; $x++) {
                                              echo "<option id='$x' value='$x'></option>";
                                            }
                                        ?>                                              
                                        </datalist>
                                    </div>
                                 <div id="patient_birthdays">
                                    <label for="patient_birthday" class="col-sm-2 control-label"  >Birthday</label>
                                    <div class="col-sm-4"  >
                                        <div class='input-group' >
                                         <!--   <input  type="date" class="form-control" id="patient_birthday" name="patient_birthday">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>  -->
                                               <div    id="patient_birthday" name="patient_birthday">  </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="patient_gender" class="col-sm-2 control-label">Gender</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <div id="radioBtn" class="btn-group" >
                                              <!-- <a class="btn btn-primary btn-small active" data-toggle="patient_gender" data-title="M">   Male   </a>
                                                <a class="btn btn-primary btn-small notActive" data-toggle="patient_gender" data-title="F">  Female  </a>-->
                                                 <label class="radio-inline">
                                                  <input type="radio"  id="radioMale" name="optradio" data-title="M" checked="" >Male
                                                </label>
                                                <label class="radio-inline">
                                                  <input type="radio" id="radioFemale" name="optradio" data-title="F" >Female
                                                </label>
                        </div>
                                            <input type="hidden" name="patient_gender" id="patient_gender">
                                        </div>
                                    </div>
                                          <div >
                                    <label for="patient_nic" class="col-sm-2 control-label">NIC/Passport</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="patient_nic" name="patient_nic">
                                    </div>
                                </div>
                                </div>
                          
                                <div class="form-group">
                                    <label for="patient_type" class="col-sm-2 control-label">Patient Type</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">

                                            <div id="radioBtn_type" class="btn-group">
                                                <a class="btn btn-primary btn-small active" data-toggle="patient_type" data-title="External Patient">   External Patient   </a>
                                                <a class="btn btn-primary btn-small notActive" data-toggle="patient_type" data-title="Internal Patient">  Internal Patient  </a>
                                            </div>
                                            <input type="hidden" name="patient_type" id="patient_type">

                                        </div>
                                      
                                    </div>
                                             <label for="patienthinlab" class="col-sm-2 control-label"> HIN </label>
                                    <div class="col-sm-4">
                                        <label type="text" class="form-control" id="patient_hin" name="patient_hin" ></label>
                                    </div>
                                </div>

                            </div>
                            <div id="Hospital_Patient_Panel" class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                       <!-- <div class="panel-heading">
                                            Patient Hospital Details
                                        </div>  -->
                                        <div class="panel-body">
                                            <div class="row col-sm-12"> 
                                                <div class="form-group">
                                                    <label for="patient_hospital" class="col-sm-2 control-label">Hospital</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="patient_hospital" placeholder="Search Hospital" name="patient_hospital" list="hospital_datalist" autocomplete="off"/>
                                                        <datalist id="hospital_datalist"></datalist>
                                                    </div>
                                                     <label for="patient_ward" class="col-sm-2 control-label">Ward</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="patient_ward" name="patient_ward">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="patint_bht" class="col-sm-2 control-label">B.H.T. No</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="patient_bht" name="patint_bht">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>




                            </div>
                            <div id="Internal_Patient_Panel" class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                     <!--    <div class="panel-heading">
                                            Patient Contact Details
                                        </div> -->
                                        <div class="panel-body">
                                            <div class="row col-sm-12"> 
                                                <div class="form-group">
                                                    <label for="patint_bht" class="col-sm-2 control-label">B.H.T. No</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="internal_patient_bht" name="patint_bht">
                                                    </div>
                                                       <label for="patient_address" class="col-sm-2 control-label">Address</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="patient_address" name="patient_address">
                                                    </div>
                                                </div>
                                                <!--<div class="form-group">
                                                 
                                                </div> -->
                                                <div class="form-group">
                                                    <label for="patient_contac1" class="col-sm-2 control-label">Contact No 1</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="patient_contac1" name="patient_contac1">
                                                        </div>
                                                          <label for="patient_contac2" class="col-sm-2 control-label">Contact No 2</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="patient_contac2" name="patient_contac2">
                                                    </div>
                                                    </div>
                                                </div>
                                               <!-- <div class="form-group">
                                                  
                                                </div>  -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                              <!--  <div class="col-xs-12">
                                    <hr style="border:1px dashed #dddddd;">
                                </div> -->
                                <div class="col-xs-2">

                                    <button id="btn_insert_patient" type="button" class="btn btn-primary btn-block">Insert Patient</button>

                                </div>    
                                <div class="col-xs-2">
                                    <button id="btn_clear" type="button" class="btn btn-warning btn-block">Clear</button>
                                </div> 
                                 <label for="patientError"  id="patientError"  style="color:red" class="col-sm-4 control-label"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            <div class="panel panel-default">
                <div class="panel-heading clickable">
                    Patients List         
                </div>
                <div class="panel-body" >
                    <table id="tbl_patients" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Patient ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Gender </th>
                                <th>NIC/Passport</th>
                                <th>HIN</th>
                                <th>Patient Type</th>
                                <th>Visit</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                  <tbody id="tbody_patients_list">
                            <?php
                            $i = 0;
                            $len = count($all_patient_result);
                            foreach ($all_patient_result as $row) {

                                $patientID = $row->patientId;
                                $patientName = $row->name;
                                $outbhtNo='';
                                $ward='';
                                 $mriHospital='';
                                 $mriHospitalId='';
                                 $address='';
                                 $contactNo1='';
                                $contactNo2='';
                               $age = '';
                                $HIN='';
                       
                                $bday = date('Y-m-d', $row->birthday/ 1000);
                                //$age = date_diff($bday,$today,TRUE);
                                $stop_date = date('Y-m-d', strtotime($bday. ' +1 day'));
                                $gender = $row->sex;
                                $nic = $row->nic;
                                $HIN = $row->HIN;
                                 $age = $row->age;
                                $patientType = $row->patientType;

                                    //Values to asign for Visit popup
                              if($patientType==='External Patient'){
                                  foreach($row->mriHospitalPatients as $row1) {
                                         $outbhtNo= $row1->bhtNo;
                                         $ward= $row1->ward;
                                         $mriHospital= $row1->mriHospital->address;
                                         $mriHospitalId= $row1->mriHospital->hospitalId;
                                  }

                              } 
                               //Values to asign for Visit popup
                               if ($patientType==='Internal Patient'){
                                  $output=$row->mriInternalPatients;
                         

                                   foreach($output=$row->mriInternalPatients as $row1) {
                                          $address =$row1->address;
                                          $contactNo1 =$row1->contactNo1;
                                          $contactNo2 =$row1->contactNo2;
                                   }
                              }

                                echo " <tr id='$patientID'>";
                                echo " <td > " . $patientID . "</td>";
                                echo " <td > " . $patientName . "</td>";
                                 echo " <td > " . $age . "</td>";
                              //  echo " <td > " .  $stop_date . "</td>";
                                echo " <td > " . $gender . "</td>";
                                echo " <td > " . $nic . "</td>";
                                 echo " <td > " . $HIN . "</td>";
                                echo " <td > " . $patientType . "</td>";
                              // echo " <td > " . $mriInternalPatient . "</td>";
                                echo "<td ><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-success btn-xs btn_new_visit' data-title='New Visit'  data-patientType='". $patientType ."'  data-patientType='". $patientType ."' data-outbhtNo='". $outbhtNo ."' data-ward='". $ward ."'  data-address='". $address ."' data-contactNo1='". $contactNo1 ."' data-contactNo2='". $contactNo2 ."' data-mriHospital='". $mriHospital ."' data-mriHospitalId='". $mriHospitalId ."' data-toggle='modal' data-target='#new_visit' ><span class='glyphicon glyphicon-plus'></span></button></p></td>";
                                echo "<td style='".$edit."' ><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs btn_edit' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>";
                                echo "<td style='".$delete."' ><p data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs btn_delete' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></p></td>";

                                if ($i == $len - 1) {
                                   $nextpatient = $patientID+1;
                                      echo '<script type="text/javascript">
                                     var cb = document.getElementById("patient_hin");
                                     cb.value = "'.$nextpatient.'"
                                     cb.textContent = "'.$nextpatient.'";
                                      </script>';
                                    }

                                     $i++;
                            }
                           
                            ?>

                        </tbody>
                    </table>
                </div>
            </div> 

        </div> 

    </div>
</div>

<!--Modal for Edit Patient-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Patient Detail</h4>
            </div>
            <div class="modal-body col-sm-12">
                <div class="row col-sm-12 form-horizontal"  >                                    
                    <div class="form-group">
                        <label for="patient_id_edit" class="col-sm-3 control-label">Patient ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="patient_id_edit" name="patient_id_edit" readonly="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="patient_name_edit" class="col-sm-3 control-label">Patient Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="patient_name_edit" name="patient_name_edit">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="patient_birthday_edit" class="col-sm-3 control-label">Birthday</label>
                        <div class="col-sm-6">
                            <div class='input-group' >
                                <input  type="date" class="form-control" id="patient_birthday_edit" name="patient_birthday_edit">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="patient_age_edit" class="col-sm-3 control-label">Patient Age</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="patient_age_edit" name="patient_age_edit">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="patient_gender_edit" class="col-sm-3 control-label">Gender</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <div id="radioBtn_edit" class="btn-group">
                                    <a class="btn btn-primary btn-small" data-toggle="patient_gender_edit" data-title="M">   Male   </a>
                                    <a class="btn btn-primary btn-small" data-toggle="patient_gender_edit" data-title="F">  Female  </a>
                                </div>
                                <input type="hidden" name="patient_gender_edit" id="patient_gender_edit">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="patient_nic_edit" class="col-sm-3 control-label">NIC/Passport</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="patient_nic_edit" name="patient_nic_edit">
                        </div>
                    </div>
              

                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" id = "btn_patient_update" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>




<!--Modal for Add new hospital Visit-->
<div class="modal fade" id="new_visit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Hospital Visit</h4>
            </div>
            <div class="modal-body col-sm-12">
             <div class="form-group">
                        <label for="patient_id_visi" class="col-sm-3 control-label">Patient ID</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="patient_id_visit" name="patient_id_visit" readonly="">
                             <input type="hidden"   class="form-control" id="patient_type" name="patient_type">
                        </div>
                    </div>
                    <div  id="lab_patient_hospital_edit_cur" class="form-group">
                    <label for="patient_hospital_edit_cur"  class="col-sm-3 control-label">Current Hospital</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="patient_hospital_edit_cur" name="patient_hospital_edit_cur" readonly="">
                         <input type="hidden"   class="form-control" id="hidden_patient_hospital_edit_cur" name="hidden_patient_hospital_edit_cur">
                    </div>
                </div>
                <div class="form-group" id="lab_patient_hospital_edit">
                    <label for="patient_hospital_edit"  class="col-sm-3 control-label">New Hospital</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="patient_hospital_edit" placeholder="Search Hospital" name="patient_hospital_edit" list="hospital_datalist" autocomplete="off"/>
                        <datalist id="hospital_datalist"></datalist>
                    </div>
                </div>
                <div class="form-group" id="lab_patient_ward_edit"  >
                    <label for="patient_ward_edit" class="col-sm-3 control-label">Ward</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="patient_ward_edit" name="patient_ward_edit">
                    </div>
                </div>
                <div class="form-group"  id="lab_patint_bht_edit" >
                    <label for="patint_bht_edit" class="col-sm-3 control-label">B.H.T. No</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="patint_bht_edit" name="patint_bht_edit">
                    </div>
                </div>
                  <div class="form-group" id="lab_patient_address_edit" >
                                    <label   for="patient_address_edit" class="col-sm-3 control-label">Address</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="patient_address_edit" name="patient_address_edit">
                                                    </div>
                                                </div>
                                                <div class="form-group" id="lab_patient_contac1_edit" >
                                                    <label  for="patient_contac1_edit" class="col-sm-3 control-label">Contact No 1</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="patient_contac1_edit" name="patient_contac1">
                                                    </div>
                                                </div>
                                                <div class="form-group" id="lab_patient_contac2_edit" >
                                                    <label  for="patient_contac2_edit" class="col-sm-3 control-label">Contact No 2</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="patient_contac2_edit" name="patient_contac2_edit">
                                                    </div>
                                                </div>

            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" id="btn_add_hos_visit" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>

<!--Modal for Patient Delete -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
                <div>
                    <label id="delete_patient_id">-</label>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success" id ="btn_patient_delete" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <!-- /.modcdal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>

<style>
    #radioBtn .notActive{
        color: #3276b1;
        background-color: #fff;
    }
    #radioBtn_type .notActive{
        color: #3276b1;
        background-color: #fff;
    }
    #radioBtn_edit .notActive{
        color: #3276b1;
        background-color: #fff;
    }
    #radioBtn_type_edit .notActive{
        color: #3276b1;
        background-color: #fff;
    }

    body { font-size: 140%; }
</style>
<script type="text/javascript"> 

    //$("#patient_birthdays").hide();

    $('document').ready(function () {

        $("#patient_birthday").birthdayPicker(); 

    $('#tbl_patients').dataTable();

        var sel_gender = 'M';
        var tog_gender = null;
        var sel_type = 'External Patient';
        var tog_type = null;

        var sel_gender_edit = null;
        var tog_gender_edit = null;
        var sel_type_edit = null;
        var tog_type_edit = null;

        //emapty the error feild
         $('#patientError').text("");

        $('#Internal_Patient_Panel').hide();
       // $('#Hospital_Patient_Panel').hide();

       //Edit 

        $('#Internal_Patient_Panel_edit').hide();
        $('#Hospital_Patient_Panel_edit').hide();

        //Radiobtns gender
        $('#radioBtn a').on('click', function () {
            sel_gender = $(this).data('title');
            tog_gender = $(this).data('toggle');
            $('#' + tog_gender).prop('value', sel_gender);

            $('a[data-toggle="' + tog_gender + '"]').not('[data-title="' + sel_gender + '"]').removeClass('active').addClass('notActive');
            $('a[data-toggle="' + tog_gender + '"][data-title="' + sel_gender + '"]').removeClass('notActive').addClass('active');
        });


           $('#radioBtn input').on('change', function () {
                console.log(this);
                sel_gender = $(this).data('title');

           });



        //Radiobtn patient type
        $('#radioBtn_type a').on('click', function () {
            //alert("HIiiii");
            sel_type = $(this).data('title');
            tog_type = $(this).data('toggle');

          //  alert(tog_type +sel_type);

            $('#' + tog_type).prop('value', sel_type);
            $('a[data-toggle="' + tog_type + '"]').not('[data-title="' + sel_type + '"]').removeClass('active').addClass('notActive');
            $('a[data-toggle="' + tog_type + '"][data-title="' + sel_type + '"]').removeClass('notActive').addClass('active');
            if (sel_type == "External Patient")
            {
                $('#Hospital_Patient_Panel').show();
                $('#Internal_Patient_Panel').hide();
            } else if (sel_type == "Internal Patient")
            {
                $('#Internal_Patient_Panel').show();
                $('#Hospital_Patient_Panel').hide();
            }
        })

        //Radiobtns gender
        $('#radioBtn_edit a').on('click', function () {
                //alert("HIiiii   www"); 

            sel_gender_edit = $(this).data('title');
            tog_gender_edit = $(this).data('toggle');
            $('#' + tog_gender).prop('value', sel_gender);

            $('a[data-toggle="' + tog_gender_edit + '"]').not('[data-title="' + sel_gender_edit + '"]').removeClass('active').addClass('notActive');
            $('a[data-toggle="' + tog_gender_edit + '"][data-title="' + sel_gender_edit + '"]').removeClass('notActive').addClass('active');
          // alert(sel_gender_edit);
        })

        //Radiobtn patient type
        $('#radioBtn_type_edit a').on('click', function () {
            //alert("HIiiii");
            sel_type_edit = $(this).data('title');
            tog_type_edit = $(this).data('toggle');

            //alert(tog_type);

            $('#' + tog_type_edit).prop('value', sel_type_edit);
            $('a[data-toggle="' + tog_type_edit + '"]').not('[data-title="' + sel_type_edit + '"]').removeClass('active').addClass('notActive');
            $('a[data-toggle="' + tog_type_edit + '"][data-title="' + sel_type_edit + '"]').removeClass('notActive').addClass('active');
                       if (sel_type_edit == "External Patient")
                       {
                       //  alert("HIiiii dd");
                           $('#Hospital_Patient_Panel_edit').show();
                       $('#Internal_Patient_Panel_edit').hide();
                       } else if (sel_type_edit == "Internal Patient")
                       {
                           $('#Internal_Patient_Panel_edit').show();
                          $('#Hospital_Patient_Panel_edit').hide();
                      }

           //  alert(sel_type_edit);
        })

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


        $('.panel-heading span.clickable').click();
       // $('.panel div.clickable').click();
        $.ajax({
            type: "GET",
            url: 'hospital_controller/GetAllHospitals', dataType: 'json',
            success: function (output) {
                $('#hospital_datalist').empty();
                $.each(output, function (key, val) {

                    var viewHospital = val['hospitalName'] + " - " + val['location'];
                    //alert(viewHospital);
                    $('#hospital_datalist').append("<option id= '" + val['hospitalId'] + "' value='" + viewHospital + "'>");

                });

            }
        });

                $('#btn_clear').click(function () {
                     clearControls();
                    });
       

        $('#btn_insert_patient').click(function () {
          
                var json = [];
                var obj = {};
                //Validation for mandatory feilds
                var isvalid= true ;


                var patient_name = $('#patient_name').val();

                var patient_bday = $('#patient_birthday_birthDay').val();// ---> 
             //patient_bday =  $("[name='patient_birthday_birthDay']").val();
            patient_bday= $('.form-horizontal input[name="patient_birthday_birthDay"]').val();// --->

                 // alert('patient_bday'+patient_bday);
                 var patient_age = $('#patient_age_year').val() + " y-" + $('#patient_age_month').val() + "m-" + $('#patient_age_days').val()+"d" ;
                 console.log("age"+patient_age);
                var patient_gender = sel_gender;
                var patient_nic = $('#patient_nic').val();
                var patient_type = sel_type;
                var patient_HIN = $('#patient_hin').val();

             if (patient_name == '') {
            console.log(patient_name+"Missing");
               $('#patientError').text("Patient Name is Empty !");
               }
         //   else if (patient_age == 'y-m-d') {
               //console.log(patient_age);
             //}
             else {
                console.log(patient_age + obj);

                obj ['PatientName'] = patient_name;
                obj ['PatientBday'] = patient_bday;
                obj ['PatientAge'] = patient_age;
                obj ['PatientGender'] = patient_gender;
                obj ['PatientNic'] = patient_nic;
                obj ['PatientType'] = patient_type;
                obj['PatientHIN'] = patient_HIN;


                var hospitalSearch = null;
                var patient_hospital_id = null;

                var patient_bday = '2015-07-04';

                var patient_ward = null
                var patient_bht = null;

                var patient_address = null
                var patient_contact1 = null;
                var patient_contact2 = null;


                if (patient_type == "External Patient") {
                    hospitalSearch = $('#patient_hospital').val();
                    patient_hospital_id = $('#hospital_datalist').find('option[value="' + hospitalSearch + '"]').attr('id');

                    patient_ward = $('#patient_ward').val();
                    patient_bht = $('#patient_bht').val();

                   if (patient_hospital_id == '') {
                         console.log(patient_hospital_id+"Missing");
                        $('#patientError').text("Plese select Patient Hospital !");
                        isvalid=false ;
                     }
                     if (patient_bht == '') {
                         console.log(patient_bht+"Missing");
                        $('#patientError').text("Plese enter Patint PatientBht !");
                        isvalid=false ;
                     }

                    obj ['PatientHospital'] = patient_hospital_id;
                    obj ['PatientWard'] = patient_ward;
                    obj ['PatientBht'] = patient_bht;

                } else if (patient_type == "Internal Patient") {

                                        
                    patient_bht = $('#internal_patient_bht').val();
                    patient_address = $('#patient_address').val();
                    patient_contact1 = $('#patient_contac1').val();
                    patient_contact2 = $('#patient_contac2').val();

                    if (patient_bht == '') {
                         console.log(patient_bht+"Missing");
                        $('#patientError').text("Plese select Patient BHT");
                        isvalid=false ;
                     }
                     if (patient_contact1 == '') {
                         console.log(patient_contact1+"Missing");
                        $('#patientError').text("Plese enter Patient Contact No 1 !");
                        isvalid=false ;
                     }

                    obj ['PatientBht'] = patient_bht;
                    obj ['PatientAddress'] = patient_address;
                    obj ['PatientContact1'] = patient_contact1;
                    obj ['PatientContact2'] = patient_contact2;
                }

                json.push(obj)
                var newPatientJSONObject = {"NewPatient": json};

              // alert(JSON.stringify(newPatientJSONObject));
              if(isvalid){
                //console.log(JSON.stringify(newPatientJSONObject));
                $.ajax({
                    type: "POST",
                    url: 'patient_controller_1/InsertNewPatient',
                    data: {'patient': newPatientJSONObject}, success: function (output) {
                        $('#patientError').text("Successfully Inserted!");
                       // alert("Successfully Inserted!");
                       clearControls();
                         window.setTimeout('location.reload()', 50);
                          //emapty the error feild
                        $('#patientError').text("");

                    }
                });
              }
          
                
            }

        });





        $('#btn_patient_delete').click(function () {

            var row_id = $(this).closest('tr').attr('id');
            alert("Successfully deleted");
        });

        $('#btn_patient_update').click(function () {

            var row_id = $(this).closest('tr').attr('id');


                var json = [];
                var obj = {};

                var patient_name =  $('#patient_name_edit').val();
                var patient_bday = $('#patient_birthday_edit').val();
              //  alert(sel_gender_edit);
                var patient_gender = sel_gender_edit;
                var patient_nic = $('#patient_nic_edit').val();
                //var patient_type = sel_type_edit;

                obj ['PatientId'] = $('#patient_id_edit').val();
                obj ['PatientName'] = patient_name;
                obj ['PatientBday'] = patient_bday;
                obj ['PatientAge'] = $('#patient_age_edit').val();
                
                obj ['PatientGender'] = patient_gender;
                obj ['PatientNic'] = patient_nic;
                //obj ['PatientType'] = patient_type;


                var hospitalSearch = null;
                var patient_hospital_id = null;

                var patient_ward = null
                var patient_bht = null;

                var patient_address = null
                var patient_contact1 = null;
                var patient_contact2 = null;


               /* if (patient_type == "External Patient") {
                    hospitalSearch = $('#patient_hospital').val();
                    patient_hospital_id = $('#hospital_datalist').find('option[value="' + hospitalSearch + '"]').attr('id');

                    patient_ward = $('#patient_ward').val();
                    patient_bht = $('#patint_bht').val();

                    obj ['PatientHospital'] = patient_hospital_id;
                   obj ['PatientWard'] = patient_ward;
                    obj ['PatientBht'] = patient_bht;

                } else if (patient_type == "Internal Patient") {
                    patient_address = $('#patient_address').val();
                    patient_contact1 = $('#patient_contac1').val();
                    patient_contact2 = $('#patient_contac2').val();

                    obj ['PatientAddress'] = patient_address;
                    obj ['PatientContact1'] = patient_contact1;
                    obj ['PatientContact2'] = patient_contact2;
                } */

                json.push(obj)
                var PatientJSONObject = {"patient": json};
                //   alert(JSON.stringify(newPatientJSONObject));

                $.ajax({
                    type: "POST",
                    url: 'patient_controller_1/UpdatePatient',
                    data: {'patient': PatientJSONObject}, success: function (output) {
                     alert("Successfully Updated");
                        // window.setTimeout("alert('Successfully Updated');", 1);
                         window.setTimeout('location.reload()', 500);
                    }
                });

           
        });

// Visit button Click event
$(document).on('click','.btn_new_visit',function(){
  //  alert('A');
    $patientType = $(this).attr("data-patientType");
   $('#patient_id_visit').val($(this).closest('tr').attr('id'));
     $('#patient_type').val($patientType);
 //Set Values for Text Filds;

   if($patientType==='External Patient'){
 //Hide Visible Controls in vist tab
  $('#patient_hospital_edit').show();
    $('#patient_hospital_edit_cur').show();
      $('#patint_bht_edit').show();
       $('#patient_ward_edit').show();

    $('#patient_address_edit').hide();
    $('#patient_contac1_edit').hide();
   $('#patient_contac2_edit').hide();

    $('#lab_patient_hospital_edit_cur').show();
      $('#lab_patient_hospital_edit').show();
      $('#lab_patint_bht_edit').show();
       $('#lab_patient_ward_edit').show();

    $('#lab_patient_address_edit').hide();
    $('#lab_patient_contac1_edit').hide();
   $('#lab_patient_contac2_edit').hide();

     $('#patient_hospital_edit_cur').val($(this).attr("data-mriHospital"));
     $('#hidden_patient_hospital_edit_cur').val($(this).attr("data-mriHospitalId"));
     //alert($(this).attr("data-mriHospital"));
    $('#patint_bht_edit').val($(this).attr("data-outbhtNo"));
    $('#patient_ward_edit').val($(this).attr("data-ward"));
   }

   if($patientType==='Internal Patient'){
 //Hide Visible Controls in vist tab
         $('#patient_hospital_edit_cur').hide();
         $('#patient_hospital_edit').hide();
      $('#patint_bht_edit').hide();
       $('#patient_ward_edit').hide();

    $('#patient_address_edit').show();
    $('#patient_contac1_edit').show();
   $('#patient_contac2_edit').show();

    $('#lab_patient_hospital_edit_cur').toggle();
    $('#lab_patient_hospital_edit').toggle();
      $('#lab_patint_bht_edit').toggle();
       $('#lab_patient_ward_edit').toggle();

    $('#lab_patient_address_edit').show();
    $('#lab_patient_contac1_edit').show();
   $('#lab_patient_contac2_edit').show();

        $('#patient_address_edit').val($(this).attr("data-address"));
    $('#patient_contac1_edit').val($(this).attr("data-contactNo1"));
   $('#patient_contac2_edit').val($(this).attr("data-contactNo2"));
   }
 

});

//Patient Hospital Visit Update
      $('#btn_add_hos_visit').click(function () {

                var json = [];
                var obj = {};
                var patient_type = $('#patient_type').val();
               
                var patient_id=$('#patient_id_visit').val();
                var patient_hospital = $('#hidden_patient_hospital_edit_cur').val();

var  hospitalSearch = $('#patient_hospital_edit').val();
// alert("Select hosptial frist"+hospitalSearch);
                    patient_hospital = $('#hospital_datalist').find('option[value="' + hospitalSearch + '"]').attr('id');
// alert("Select hosptial"+patient_hospital);
                var patint_bht = $('#patint_bht_edit').val();
                var patient_ward = $('#patient_ward_edit').val();
                var patient_address = $('#patient_address_edit').val();
               var patient_contac1 =  $('#patient_contac1_edit').val();
                var patient_contac2 = $('#patient_contac2_edit').val();
                
                obj ['PatientId'] = patient_id;
                obj ['PatientType'] = patient_type;
                obj ['PatientHospital'] = patient_hospital;
                obj ['PatientBht'] = patint_bht;
                obj ['PatientWard'] = patient_ward;
                obj ['PatientAddress'] = patient_address;
                obj ['PatientContact1'] = patient_contac1;
                obj ['PatientContact2'] = patient_contac2;


                json.push(obj)
                var PatientJSONObject = {"patient": json};
                //   alert(JSON.stringify(newPatientJSONObject));
                if(patient_type=="External Patient"){
                    // alert(patient_type);
                    console.log(patient_type);
                          $.ajax({
                    type: "POST",
                    url: 'patient_controller_1/UpdateHospitalPatientVist',
                    data: {'patient': PatientJSONObject}, success: function (output) {
                     alert("Successfully Updated");
                        // window.setTimeout("alert('Successfully Updated');", 1);
                         window.setTimeout('location.reload()', 500);
                    }
                });   
                }

                if(patient_type="Internal Patient"){
                     //alert(patient_type);
                      console.log(patient_type);
                                   $.ajax({
                    type: "POST",
                    url: 'patient_controller_1/UpdateInternalPatientVist',
                    data: {'patient': PatientJSONObject}, success: function (output) {
                     alert("Successfully Updated");
                        // window.setTimeout("alert('Successfully Updated');", 1);
                         window.setTimeout('location.reload()', 500);
                    }
                }); 
                }
       

           
        });

// Edit button Click event
$(document).on('click','.btn_edit',function(){
                    // alert($(this).find('td:first').text());
                   // alert('A');
            var row_id = $(this).closest('tr').attr('id');
            //$('#tbl_employee_workin tr').remove();
            var patient_name = $(this).closest("tr").find('td:eq(1)').text();
            var patient_age = $(this).closest("tr").find('td:eq(2)').text();
            var patient_gender = $(this).closest("tr").find('td:eq(3)').text();
            var patient_nic = $(this).closest("tr").find('td:eq(4)').text();
             var patient_type = $(this).closest("tr").find('td:eq(5)').text();
           // alert(row_id);
         //  alert(patient_nic);
            $('#patient_id_edit').val(row_id);
            $('#patient_name_edit').val(patient_name);
            $('#patient_age_edit').val(patient_age);
            $('#patient_nic_edit').val(patient_nic);

           if (patient_gender == "M") {                

                $('a[data-title="M"]').addClass('active');
                $('a[data-title="M"]').removeClass('notActive');
               // $('a[data-title="F"]').addClass('notActive');
               // $('a[data-title="F"]').removeClass('active');
            }
            if (patient_gender == "F") {
                   //  alert(patient_gender);
                $('a[data-title="F"]').addClass('active');
                $('a[data-title="F"]').removeClass('notActive');
               // $('a[data-title="M"]').addClass('notActive');
               //  $('a[data-title="M"]').removeClass('active');
            } 


           });

function clearControls() {
     $('#patient_name').val('');
     $('#patient_age_year').val('');
    $('#patient_age_month').val('');
     $('#patient_age_day').val('');
      $('#patient_nic').val('');
       $('#patient_ward').val('');
        $('#patient_bht').val('');
      
     }
});

      /* 
$('[data-target="#edit"]').click(function () {
    alert('Btn');
});

       $('.btn_edit').click(function () {


        }); */
</script>