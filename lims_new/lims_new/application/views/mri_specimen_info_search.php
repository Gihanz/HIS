 

<script type="text/javascript">
$('#main').hide();
</script>

<style>
.form-horizontal .control-label{
  text-align:left;
}
</style>
 
<section class="content">
  <div class="row">            
    <div class="col-md-12"><!-- left column -->
      <!-- general form elements -->
      <form class="form-horizontal" action="<?php echo base_url(); ?>mri_specimen_info_search" role="form" id="specimen_frm" method="POST">  <!-- action="<?php echo base_url()?>specimen_info_search" -->
        <div class="box box-primary">
           <div class="box-header with-border">
          <h3 class="box-title">Sample Infromation (Specimen Detail)</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
      
            
            <!-- <div class="col-md-3">
              <input type="text" class="form-control" placeholder="ReqID" id="ReqID" name="ReqID"> 
            </div> 
           
            <div class="col-md-3">
              <input type="text" class="form-control"  placeholder="TestID" id="TestID" name="TestID"> 
            </div>
           
            <div class="col-md-3">
              <input type="text" class="form-control"  placeholder="PID" id="PID" name="PID"> 
            </div> 
          
            <div class="col-md-3">
              <button  class="btn" type="submit"><i class="fa fa-search" ></i>Search</button>       
            </div>    -->              

          </div><!-- /.box-header -->
 
          <div class="box-body"> 
          <div class="box-header with-border">
               <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search By Specimen ID" id="ReqID" name="ReqID" onkeypress="return isNumber(event)"/> 
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </div>
            <?php 
              if(isset($RequestDetails)){
            ?> 
            <?php 
             foreach ($RequestDetails as $value) {
              $count=0;
             ?> 
            <div class="row">
              <div class="col-md-6">
                <div class="box box-solid box-info">
                  <div class="box-header">
                    <h3 class="box-title">Patient Details</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                
                  <div class="box-body form-horizontal" id="patient_panel">
                    <div class="form-group">   </div>                         
                  
                    <div class="form-group">
                      <label for="Fullname" class="col-sm-4 control-label">Full Name</label>
                      <div class="col-sm-8">
                        <input id="Fullname" type="text" class="form-control" placeholder="Text input" value="<?php echo $value->mriPatient->name; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="gender" class="col-sm-4 control-label">Gender</label>
                      <div class="col-sm-8">
                        <input id="gender" type="text" class="form-control" placeholder="Text input" value="<?php echo ucfirst($value->mriPatient->sex); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="dob" class="col-sm-4 control-label">Date of birth</label>
                      <div class="col-sm-8">
                        <input id="dob" type="text" class="form-control" placeholder="Text input" value="<?php echo date('Y-m-d', $value->mriPatient->birthday/1000); ?>">     
                      </div>
                    </div> 
                  </div><!-- /.box-body -->
                </div>
              </div><!-- /.class="col-md-6" -->

              <div class="col-md-6">
                <div class="box box-solid box-info">
                  <div class="box-header">
                    <h3 class="box-title">Test Details</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body">
                    <div class=" form-horizontal">
                      <div class="form-group">
                        <label for="ReqID" class="col-sm-4 control-label">Request ID</label>
                        <div class="col-sm-8">
                          <input id="ReqID" type="text" class="form-control" placeholder="Text input" value="<?php echo $value->requestId; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Category" class="col-sm-4 control-label">Department</label>
                        <div class="col-sm-8">
                          <input id="Category" type="text" class="form-control" placeholder="Text input" value="<?php echo $value->mriLaboratoryTest->mriLaboratory->mriDepartment->departmentName; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="SubCategory" class="col-sm-4 control-label">laboratory Name</label>
                        <div class="col-sm-8">
                          <input id="SubCategory" type="text" class="form-control" placeholder="Text input" value="<?php echo $value->mriLaboratoryTest->mriLaboratory->laboratoryName; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="TestName" class="col-sm-4 control-label">Test Name</label>
                        <div class="col-sm-8">
                          <input id="TestName" type="text" class="form-control" placeholder="Text input" value="<?php echo $value->mriLaboratoryTest->testFullName; ?>">
                        </div>
                      </div>
                    </div> 
                  </div><!-- /.box-body -->                     
                </div>                      
              </div><!-- /.class="col-md-6" -->
            
            </div><!-- /.row box-body -->
            
            <div class="row">
              <div class="col-md-12">
                <div class="box box-solid box-info">
                  <div class="box-header">
                    <h3 class="box-title">Specimen Details</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  
                  <div class="box-body">        
                    <div class="row">
                      <div class="col-md-6">
                      
                        <div class="form-group">
                          <label for="SpecimenType" class="col-sm-4 control-label">Type</label>
                          <div class="col-sm-8">  
                          <input type="text" id="SpecimenType" name="SpecimenType" class="form-control" value="<?php echo $value->mriSpecimen->mriSpecimenType->specimenName;?>" > </input>                                          
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="retentionType" class="col-sm-4">Collected Person</label>
                          <div class="col-sm-8">   
                            <input type="text" class="form-control" value="<?php echo $value->mriSpecimen->specimenCollectedPerson; ?>"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="collectedDate" class="col-sm-4 control-label">Received Date</label>
                          <div class="col-sm-8"> 
                            <input  type="text" placeholder="collected date" id="datetimepicker1" name="collected_date" class="form-control"  value="<?php echo date('Y-m-d',$value->mriSpecimen->specimenReceivedDate); ?>">
                          </div>
                        </div>

                        <div class="form-group">
                        <label for="DeliverDate" class="col-sm-4 control-label">Deliver Date</label>
                          <div class="col-sm-8"> 
                            <input  type="text" placeholder="Deliver date" id="datetimepicker2" name="collected_date" class="form-control"  value="<?php 
                            echo date('Y-m-d',$value->mriSpecimen->specimenDeliveredDepartmentDate);
                             ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="remarks" class="col-sm-4 control-label">Remarks</label>
                          <div class="col-sm-8"> 
                            <textarea id="remarks" name="remarks" class="form-control" rows="4" cols="100" ><?php echo $value->mriSpecimen->remarks;?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <div class="form-group">
                          <label for="location" class="col-sm-4 control-label">Location</label>
                          <div class="col-sm-8"> 
                            <input id="stored_location" name="stored_location" type="text" class="form-control" placeholder="Text input"  value="<?php echo $value->mriSpecimen->storedLocation; ?>">
                          </div>
                        </div> 
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Stored or Destroyed</label>
                          <div class="col-sm-8"> 
                            <input type="text"  name="stored_or_destroyed" class="form-control" value="<?php echo $value->mriSpecimen->storedOrDestroyed;?>" />
                          </div>
                        </div>
                        <!-- <div class="form-group">
                          <label for="Stored_DestroyedDate" class="col-sm-4 control-label">Stored/Destroyed Date</label>
                          <div class="col-sm-8"> 
                            <input  type="text" placeholder="Due date" id="datetimepicker4" name="CompletedDate" class="form-control"  value="<?php echo date('Y-m-d',$specimenDetails->specimen_stored_destroyed_date); ?>">
                          </div>
                        </div> -->
                      </div>
                    </div>      
                  </div>      
                </div>
              </div>
            </div>  <!-- /.row 2nd -->          
            
            <div class="row">
                <div class="col-md-12">
                   <div class="box box-solid box-info">
                        <div class="box-header">
                          <h3 class="box-title">Specimen Other Details</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div>

                        <div class="box-body">    
                            <?php $patientType = $value->isHospitalPatient;  $temp = (int)$patientType; 
                            //echo $temp ;
                            ?>
                            <div class="row"> 
                                <?php if($patientType ===true) { ?>
                                <div class="col-md-6" id="isHospitalPatient">
                                    <span>Hospital Patient</span>
                                    <div class="form-group">
                                        <label for="SpecimenType" class="col-sm-4 control-label">BHTNo</label>
                                        <div class="col-sm-8">  
                                        <input type="text" id="SpecimenType" name="SpecimenType" class="form-control" value="<?php  echo $value->mriHospitalPatient->bhtNo ;?>" > </input>                                          
                                        </div>
                                    </div>
                                </div>
                                <?php } else { ?>  
                                <script type="text/javascript">$('isHospitalPatient').hide();</script>
                                <div class="col-md-6">
                                <span>Internal Patient</span>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="row"> 
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>
                    </div>				 
                </div>      
            </div>
            
            
            
            <?php
                }
              ?>
          </div><!-- /.box-body -->         
        </div>                    
            <?php     
              }
            ?>                       
            </form>                  
        </div>
    </div>            
</section>

<script type="text/javascript">
     $(document).ready(function () {
        $('#ReqID').on('change keyup paste mouseup click',function(e){

          var inputText = $('#ReqID').val(); 
          var specID = inputText.split('_');
          $('#ReqID').val(specID[0]);
          }); 
      /*$('#ReqID').keyup(function () {
        alert('changed');
      });*/
     });

     function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
 </script>