<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <!--<div class="box-header">
            <h3 class="box-title">New Test Request</h3>
        </div>-->
        <!-- /.box-header -->
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Internal Patient</a></li>
                <li><a href="#tab_2" data-toggle="tab">Hospital Patient</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <form class="form-horizontal" role="form" method="POST">
                        <br>
                   
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Patient Details           
                            </div>

                            <div class="panel-body" style="padding:5px;">
                                <div class="form-group col-lg-12" style="margin-bottom:0px;">
                                    <div class="row col-sm-12"> 
                                        <div class="col-sm-8 input-group">
                                            <div class="input-group-btn search-panel">
                                            <!--  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <span id="search_concept">Filter By </span> 
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#by_name">By Patient Name</a></li>
                                                    <li><a href="#by_nic">By Patient NIC</a></li>
                                                    <li><a href="#by_nic">By Patient ID</a></li>
                                                </ul> -->
                        <select id="fieldPatientSerch" name="fieldPatientSerch" class="form-control" style="width:100px;">
                            <option value="general">General</option>
                            <option value="by_name">By Patient Name</option>
                            <option value="by_nic">By Patient NIC</option>
                            <option value="by_bht">By Patient bht</option>
                                 </select>
                                            </div>

                                            <input type="text" class="form-control" id="patient_search" placeholder="Search Patient" name="patient_search" list="patient_datalist" autocomplete="off"/>
                                            <datalist id="patient_datalist"></datalist>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-success btn-add" id="patient_search_btn">Search</button>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row col-sm-12">  
                                        <p></p> 
                                    </div>
                                    <div class="row col-sm-20">                                    
                                        <div class="form-group col-lg-2">
                                            <label for="patient_ID" class="col-sm-5 control-label" style="text-align:left">Patient ID</label>
                                            <div class="col-sm-7">
                                                <p id="patient_ID" class="form-control-static">-</p>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="patient_name" class="col-sm-3 control-label" style="text-align:left">Patient Name</label>
                                            <div class="col-sm-7">
                                                <p id="patient_name" class="form-control-static">-</p>
                                            </div>
                                        </div>
                                            <div class="form-group col-lg-3">
                                            <label for="patient_nic" class="col-sm-3 control-label" style="text-align:left">Patient Hospital</label>
                                            <div class="col-sm-7">
                                                <p id="patient_hospital" class="form-control-static">-</p>
                                                     <input type="hidden" name="patient_hospital_id" id="patient_hospital_id">
                                            </div>
                                        </div> 

                                        <div class="form-group col-lg-2">
                                            <label for="patient_nic" class="col-sm-5 control-label" style="text-align:left">Patient BHT</label>
                                            <div class="col-sm-4">
                                                <p id="patient_bht" class="form-control-static">-</p>
                                            </div>
                                        </div> 
                                           <div class="form-group col-lg-2">
                                            <label for="patient_nic" class="col-sm-5 control-label" style="text-align:left">Patient HIN</label>
                                            <div class="col-sm-4">
                                                <p id="patient_hin" class="form-control-static">-</p>
                                            </div>
                                        </div> 
                                        <div class="form-group col-lg-1">
                                            <label for="patient_nic" class="col-sm-5 control-label" style="text-align:left">Patient NIC</label>
                                            <div class="col-sm-4">
                                                <p id="patient_nic" class="form-control-static">-</p>
                                            </div>
                                        </div> 
                                        <!--
                                        <div class="form-group col-lg-4">
                                            <label for="patient_address" class="col-sm-4 control-label" style="text-align:left">Address</label>
                                            <div class="col-sm-8">
                                                <p id="patient_address" class="form-control-static">-</p>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="patient_contact1" class="col-sm-4 control-label" style="text-align:left">Contact No 1</label>
                                            <div class="col-sm-8">
                                                <p id="patient_contact1" class="form-control-static">-</p>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="patient_contact2" class="col-sm-4 control-label" style="text-align:left">Contact No 2</label>
                                            <div class="col-sm-8">
                                                <p id="patient_contact2" class="form-control-static">-</p>
                                            </div>
                                        </div>  
                                        <div class="form-group col-lg-4">
                                            <label for="patient_sex" class="col-sm-4 control-label" style="text-align:left">Sex</label>
                                            <div class="col-sm-8">
                                                <p id="patient_sex" class="form-control-static">-</p>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="patient_age" class="col-sm-4 control-label" style="text-align:left"></label>
                                            <div class="col-sm-8">
                                                <p id="patient_age" class="form-control-static">-</p>
                                            </div>
                                        </div> 
                                        -->                                       
                                    </div>




                                </div>

                            </div>
                        </div>

     
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                New Lab Test Requests           
                            </div>
                            <div class="panel-body" >
                                <div class="form-group col-lg-12">
                                    <div class="row col-sm-12" id="internalRequestForm"> 

                                        <div class="col-sm-5" id="newTest">

                                            <div class="panel panel-default" >
                                                <div class="panel-body form-horizontal request-form">
                                                    <div class="form-group">
                                                        <label for="test_request_id" class="col-sm-4 control-label">Test Request ID</label>
                                                        <div class="col-sm-8">
                                                            <input  type="text" class="form-control" id="test_request_id" name="test_request_id" readonly >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="test_request_type" class="col-sm-4 control-label">Test Request</label>
                                                        <div class="col-sm-8">
                                                            <select id="test_request_type" class="form-control">

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="test_priority" class="col-sm-4 control-label">Priority</label>
                                                        <div class="col-sm-8">                         
                                                            <select id="test_priority" class="form-control">
                                                                <option>High</option>
                                                                <option selected="selected">Medium</option>
                                                                <option>Low</option>
                                                            </select>                                                
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label for="due_date" class="col-sm-4 control-label">Due Date</label>
                                                        <div class="col-sm-8">
                                                            <div class='input-group' >
                                                             <!--  <div    id="due_date1" name="due_date1">  </div> -->
                                                         <input  type="text" placeholder="collected date" id="due_date" name="due_date" class="form-control"  data-date-format="yyyy-mm-dd">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>


                                                     <div class="form-group" id="specimen_no_div">
                                                        <label for="specimen_no" class="col-sm-4 control-label">Specimen No</label>
                                                        <div class="col-sm-8">                         
                                                            <select id="specimen_no" class="form-control">
                                                                <option value="1" selected="selected">Specimen 1</option>
                                                                <option value="2">Specimen 2</option>

                                                            </select>                                                
                                                        </div>
                                                    </div> 



                                                    <div class="form-group">
                                                        <!-- <label for="comments" class="col-sm-4 control-label">Comments</label> -->
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control" id="comments" name="comments"  ></textarea> 
                                                        </div>
                                                    </div> 


                                                    <div class="form-group">
                                                        <div class="col-sm-12 text-right">
                                                            <button type="button" class="btn btn-default preview-add-button">
                                                                <span class="glyphicon glyphicon-plus"></span> Add
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>            
                                        </div>
                                        <div class="col-sm-7" id="insertTest">

                                            <div class="row" >
                                                <div class="col-xs-12">
                                                    <div class="table-responsive">
                                                        <table id="tbl_internal_requests" class="table preview-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Request ID</th>
                                                                    <th>Test Request</th>
                                                                    <th>Priority</th>
                                                                    <th>Due Date</th>
<!--                                                                    <th>Specimen ID</th>-->
                                                                    <th>Comments</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody> <!-- preview content goes here-->
                                                        </table>
                                                    </div>                            
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <hr style="border:1px dashed #dddddd;">
                                                    <button id="btn_insert_internal_requsets" type="button" class="btn btn-primary btn-block">Insert</button>
                                                </div>                
                                            </div>
                                        </div> 
                                        <div class="row col-sm-12" id="addSpecDiv"> 
                                            <!-- Added new request progress part -->
                                            <div class="panel panel-default">

                                                <table id="tbl_internal_requests_list" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10%">Request ID</th>
                                                            <!--<th>Patient ID</th>-->
                                                            <th style="width: 20%">Patient Name</th>
                                                            <th style="width: 20%">Test Type</th>
                                                            <th style="width: 10%">Priority</th>
                                                            <th style="width: 10%">Request Date</th>
                                                            <th style="width: 10%">Due Date</th>
                                                            <th style="width: 10%">Status</th>
                                                            <th style="width: 10%">Specimen ID</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody id="tbody_internal_requests">


                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th>
                                                                 
                                                            </th>
                                                            <th></th>


                                                        </tr>
                                                    </tfoot>
                                                </table>

                                            </div> 
                                        </div>
                                    </div> 
                                </div>
                            </div>

                        </div>
                    </form>

                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <form class="form-horizontal" role="form" method="POST">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Hospital Details           
                            </div>
                            <div class="panel-body" >
                                <div class="form-group col-lg-12">
                                    <div class="row col-sm-12"> 
                                        <div class="col-sm-8 input-group">

                                            <input type="text" class="form-control" id="hospital_search" placeholder="Search Hospital" name="hospital_search" list="hospital_datalist" autocomplete="off"/>
                                            <datalist id="hospital_datalist"></datalist>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-success btn-add" id="hospital_search_btn">Search</button>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row col-sm-12">  
                                        <p></p> 
                                    </div>
                                    <div class="row col-sm-12"> 

                                        <div class="form-group col-lg-4">
                                            <label for="hospital_ID" class="col-sm-5 control-label" style="text-align:left">Hospital ID</label>
                                            <div class="col-sm-7">
                                                <p id="hospital_ID" class="form-control-static">-</p>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-4">
                                            <label for="hospital_name" class="col-sm-5 control-label" style="text-align:left">Hospital Name</label>
                                            <div class="col-sm-7">
                                                <p id="hospital_name" class="form-control-static">-</p>
                                            </div>
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label for="hospital_contact" class="col-sm-5 control-label" style="text-align:left">Contact No</label>
                                            <div class="col-sm-7">
                                                <p id="hospital_contact" class="form-control-static">-</p>
                                            </div>
                                        </div> 

                                        <div class="form-group col-lg-4">
                                            <label for="hospital_address" class="col-sm-5 control-label" style="text-align:left">Address</label>
                                            <div class="col-sm-7">
                                                <p id="hospital_address" class="form-control-static">-</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                New Lab Test Requests           
                            </div>
                            <div class="panel-body" >
                                <div class="form-group col-lg-12">
                                    <div class="row col-sm-12" id="HospitalRequestForm"> 

                                        <div class="col-sm-5">

                                            <div class="panel panel-default">
                                                <div class="panel-body form-horizontal request-form1">
                                                    <div class="form-group">
                                                        <label for="h_patient_search" class="col-sm-4 control-label">Patient</label>
                                                        <div class="col-sm-8">

                                                            <input type="text" class="form-control" id="h_patient_search" placeholder="Search Patient" name="h_patient_search" list="h_patient_datalist" autocomplete="off"/>
                                                            <datalist id="h_patient_datalist"></datalist>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="h_test_request_id" class="col-sm-4 control-label">Test Request ID</label>
                                                        <div class="col-sm-8">
                                                            <input  type="text" class="form-control" id="h_test_request_id" name="h_test_request_id">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">    
                                                        <label for="h_test_request_type" class="col-sm-4 control-label">Test Request</label>
                                                        <div class="col-sm-8">
                                                            <select id="h_test_request_type" class="form-control">

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="h_test_priority" class="col-sm-4 control-label">Priority</label>
                                                        <div class="col-sm-8">                         
                                                            <select id="h_test_priority" class="form-control">
                                                                <option>High</option>
                                                                <option selected="selected">Medium</option>
                                                                <option>Low</option>
                                                            </select>                                                
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label for="h_due_date" class="col-sm-4 control-label">Due Date</label>
                                                        <div class="col-sm-8">
                                                            <div class='input-group' >
                                                                <!--<input  type="date" class="form-control" id="h_due_date" name="h_due_date"> -->
                                                                <input  type="text" placeholder="collected date" id="h_due_date" name="h_due_date" class="form-control"  data-date-format="yyyy-mm-dd">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group" style="display:none;">
                                                        <label for="h_specimen_no" class="col-sm-4 control-label">Specimen No</label>
                                                        <div class="col-sm-8">                         
                                                            <select id="h_specimen_no" class="form-control">
                                                                <option value="1" selected="selected">Specimen 1</option>
                                                                <option value="2">Specimen 2</option>

                                                            </select>                                                
                                                        </div>
                                                    </div>

                                                    <div style="display:none;" class="form-group">
                                                        <label for="h_comments" class="col-sm-4 control-label">Comments</label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control" id="h_comments" name="h_comments"></textarea> 
                                                        </div>
                                                    </div> 


                                                    <div class="form-group">
                                                        <div class="col-sm-12 text-right">
                                                            <button type="button" class="btn btn-default preview-add-button1">
                                                                <span class="glyphicon glyphicon-plus"></span> Add
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>            
                                        </div>
                                        <div class="col-sm-7">

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="table-responsive">
                                                        <table id="tbl_hospital_requests" class="table preview-table1">
                                                            <thead>
                                                                <tr>


                                                                    <th>Patient</th>
                                                                    <th>Request ID</th>
                                                                    <th>Test Request </th>
                                                                    <th>Priority</th>
                                                                    <th>Due Date</th>
                                                                    <th>Comments</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody> <!-- preview content goes here-->
                                                        </table>
                                                    </div>                            
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <hr style="border:1px dashed #dddddd;">
                                                    <button id="btn_insert_hospital_requsets" type="button" class="btn btn-primary btn-block">Insert</button>
                                                </div>                
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row col-sm-12"> <!-- hospital request progress -->

                                        <div class="panel panel-default">

                                            <table id="tbl_hospital_requests_list" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>

                                                        <th style="width: 10%">Request ID</th>
                                                        <th style="width: 20%">Patient Name</th>
                                                        <th style="width: 20%">Hospital </th>


<!--                                <th>Patient ID</th>-->
                                                        <th style="width: 20%">Test Request </th>
                                                        <th style="width: 10%">Priority</th>
                                                        <th style="width: 10%">Request Date</th>
                                                        <th style="width: 10%">Due Date</th>
                                                        <th style="width: 10%">Status</th>
                                                        <th style="width: 10%">Specimen ID</th>

                                                    </tr>
                                                </thead>

                                                <tbody id="tbody_hospital_requests">


                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>
                                                             
                                                        </th>
                                                        <th></th>


                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- /.tab-pane -->
<div class="pull-right" style="top: -55px; position: relative; right: 10px; ">
                <button class = "btn btn-primary btn-md"  id="addSpecimen" data-toggle = "modal" data-target = "#viewAddSpecimen">
                    <span class='glyphicon glyphicon-ok-circle'></span>   Add Specimen 
                </button>            
            </div>

                            <div id="alert_successfull_tab1" class="panel panel-default panel-heading alert alert-dismissable" style="background-color: #dff0d8; color: #3c763d">

                            <strong>Successfull!</strong> Test Requests Successdfully Insertered!
                            <div class="pull-right">
                                <button id="print_tab1" type="button" class="btn btn-xs btn-labeled btn-success">
                                    <span class="btn-label"><i class="glyphicon glyphicon-print"></i></span>  | Print</button>

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            </div>
                        </div> 
            </div><!-- /.tab-content -->
            
        </div><!-- nav-tabs-custom -->
            
    </div>
    
</div>




<!-- _                                                                                         ___________________ Mafais _______________________________________ -->

<div class="modal fade" id="viewAddSpecimen" tabindex="-1" role="dialog" aria-labelledby="addSpecimen" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div id="alert_successfull_tab2" class="panel panel-default panel-heading alert alert-dismissable" style="background-color: #dff0d8; color: #3c763d">

                    <strong>Successfull!</strong> Specimen Details Successdfully Added!

                </div> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h5 class="modal-title custom_align" id="Heading">Add Specimen Details</h5>
            </div>
            <div class="modal-body">
                <row class="col-md-12">     
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">            
                        <select id="SpecimenType" name="SpecimenType" class="form-control" data-toggle="tooltip" data-placement="top"  data-original-title="Select SpecimenType" required="">
                            <option selected="selected" value="">Select a Type</option> 
                            <?php foreach ($specimen_types as $item): ?>
                                <option value="<?php echo $item->specimenTypeId; ?>"><?php echo $item->specimenName; ?></option>
                            <?php endforeach; ?>                                 
                        </select>
                    </div>
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label id="ReqID" name="ReqID" class="form-control " style="color: red;" data-toggle="tooltip" data-placement="top" title="" data-original-title="labTestRequest ID"> </label>                

                    </div>
                </row>
                <row class="col-md-12">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12"> 
                        <input  type="text"  id="datetimepicker1" name="collected_date"  
 class="form-control"  data-date-format="yyyy-mm-dd" placeholder="Collected Date" >
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input  type="text" placeholder="diliver department date" id="datetimepicker2" name="DeparmentDeleveredDate" class="form-control"  data-date-format="yyyy-mm-dd">
                    </div>
                </row>
                <row class="col-md-12">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input id="stored_location" name="stored_location" type="text" class="form-control" placeholder="Location"  value="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Stored or Destroyed Location">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 radio">
                        <label>
                            <input type="radio"  name="stored_or_destroyed" value="Accepted" checked  required="" <?php ?>>
                            Accepted
                        </label>
                        <label>
                            <input type="radio"  name="stored_or_destroyed" value="Rejected" required="" <?php ?>>
                            Rejected
                        </label>
                    </div>
                </row>
                <row class="col-md-12">
                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                        <textarea id="remark" name="remark" type="text" class="form-control" placeholder="Remarks"  value="" data-toggle="tooltip" data-placement="top" title="" ></textarea> 
                    </div>             
                </row>
                
                <row>
                    <hr>
                    <div class="right_contents" id="right_contents"> 
                        
                         <div class="form-group " id="<?php 
                         //$right_contents[0]; 
                         ?>" name="<?php echo $specimen_maxID[0]; ?>">              
                                    <?php $specBarcodeID = $specimen_maxID[0]+1; ?>
                                     
                                     <div class="row">                                        
                                        <div class="col-sm-2">  
                                             <Img src = "<?php
                                            if ($specimen_maxID[0] != null) {                                                
                                                /* $url = SITE_URL();?>/mri_specimen_barcode_generate/barcode/<?php echo $code ; */
                                                echo SITE_URL(); ?>/test_request_progress_controller/barcode/<?php
                                                     echo $specBarcodeID;
                                                     //  $NewUrl = urldecode($url);
                                                     //   echo $NewUrl;
                                                 }
                                                 ?>" >
                                                 
                                        </div>
                                        <div class="col-sm-2"> 
                                            <Img src = "<?php
                                            if ($specimen_maxID[0] != null) {                                                
                                                /* $url = SITE_URL();?>/mri_specimen_barcode_generate/barcode/<?php echo $code ; */
                                                echo SITE_URL(); ?>/test_request_progress_controller/barcode/<?php
                                                     echo $specBarcodeID;
                                                     //  $NewUrl = urldecode($url);
                                                     //  echo $NewUrl;
                                                 }
                                                 ?>" >
                                                 
                                        </div> 
                                    </div> 
                                    <div class="row">                                        
                                        <div class="col-sm-2"> 
                                            <Img src = "<?php
                                            if ($specimen_maxID[0] != null) {                                                
                                                /* $url = SITE_URL();?>/mri_specimen_barcode_generate/barcode/<?php echo $code ; */
                                                echo SITE_URL(); ?>/test_request_progress_controller/barcode/<?php
                                                     echo $specBarcodeID;
                                                     //  $NewUrl = urldecode($url);
                                                     //  echo $NewUrl;
                                                 }
                                                 ?>" >
                                                
                                        </div>
                                        <div class="col-sm-2"> 
                                            <Img src = "<?php
                                            if ($specimen_maxID[0] != null) {                                                
                                                /* $url = SITE_URL();?>/mri_specimen_barcode_generate/barcode/<?php echo $code ; */
                                                echo SITE_URL(); ?>/test_request_progress_controller/barcode/<?php
                                                     echo $specBarcodeID;
                                                     //  $NewUrl = urldecode($url);
                                                     //  echo $NewUrl;
                                                 }
                                                 ?>" >
                                                
                                        </div> 
                                    </div>
 




                                </div>
 
                        
                                 
 
                        
                              
                    </div>             
              <!--      <div class="form-group ">
                            <button type="button" id="pdf" class="btn btn-primary col-md-offset-9"  value="">Print </button>
                        </div>-->
                       
                </row>
<!--                 <div class="pull-right">
                    <button id="print_barcode" type="button" class="btn btn-xs btn-labeled btn-success">
                        <span class="btn-label"><i class="glyphicon glyphicon-print"></i></span>  | Print</button>

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                </div>-->
            </div>
    
            <div class="modal-footer ">
                <button type="button" id ="specimen_save" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Save</button>
            </div>

        </div>
        <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>

<script>

 function ajaxSearchpatient() {

     $('#fieldPatientSerch option:selected').removeAttr('selected');
          $('fieldPatientSerch:selected', 'select[name="options"]').removeAttr('selected');
          $('select[name="fieldPatientSerch"]').find('general').attr("selected",true);

 var param= $('#fieldPatientSerch').val();
 console.log("serchtype"+param);

        $.ajax({
                type:'GET',
                url: 'patient_controller/GetAllPatients',
                dataType: 'json',
                success: function (output) {
                    $('#patient_datalist').empty();
                     // console.log("test eee"+param);
                        $.each(output, function (key, val) {
                           // console.log("Patient ID"+val['patientId']);

                           var BhtNo=""; 
                           var Hospital="";
                           //Kanchana 
                           //For Non Hospital Patient Keep id -1
                           var hospitalId=-1;
                          if (val['patientType']=="Internal Patient") {
                          
                            BhtNo= val['mriInternalPatients'][0]['bhtNo'];
                        }else {
                           // console.log("other"+val['patientId']);
                    BhtNo =val['mriHospitalPatients'][0]['bhtNo'];
                hospitalId = val['mriHospitalPatients'][0]['mriHospital']['hospitalId'];
                 Hospital =val['mriHospitalPatients'][0]['mriHospital']['hospitalName'];
               
                  //  console.log("HospitalID"+hospitalId);

                        }
                         
                            $('#patient_datalist').append("<option id= '" +val['patientId'] + "' value='" +  val['name'] + "-"+BhtNo+"-"+Hospital+"'  data-nic='"+ val['nic'] +"' data-hosid='"+hospitalId+"''>");
                        });
                }
            });
    }

    $('document').ready(function () {

        ajaxSearchpatient();
        $("#addSpecDiv").hide();
        $("#specimen_no_div").hide();
        $("#comments").hide();

        $('.search-panel .dropdown-menu').parents(".dropdown").find('.btn').html('asss' + ' <span class="caret"></span>');

        <?php   $username  = $this->session->userdata('name');?>;

        $(".dropdown-menu").val("Aktiv");
        
        // $("#due_date1").birthdayPicker(); 

        var selectedTestSepcID=0;
                
        var requestID = "";
        var h_requestID = "";
        var initialRequestID = "";
        var h_initialRequestID = "";
        var requestLetter = "A";
        var h_requestLetter = "A";

        var cur1 = "A";
        var cur2 = "A";
        var cur3 = "A";
        var cur4 = "A";
        var cur5 = "A";

        var count1 = 0;
        var count2 = 0;
        var count3 = 0;
        var count4 = 0;
        var count5 = 0;

        var h_cur1 = "A";
        var h_cur2 = "A";
        var h_cur3 = "A";
        var h_cur4 = "A";
        var h_cur5 = "A";

        var h_count1 = 0;
        var h_count2 = 0;
        var h_count3 = 0;
        var h_count4 = 0;
        var h_count5 = 0;


        var requestArray = [];
        var h_requestArray = [];

        $('#alert_successfull_tab1').hide();
        $('#alert_successfull_tab2').hide();
        
        $('.search-panel .dropdown-menu').val("by_name");




         $('#fieldPatientSerch').on('change', function() {

         });

         
        $('#patient_datalist').on('click', function() {
                alert("Cicikc event");
         });

         $('#patient_datalist').on('change', function() {
                alert("change");
         });

        $('.search-panel .dropdown-menu').find('a').click(function (e) {
          //  console.log("test");
            e.preventDefault();
            var param = $(this).attr("href").replace("#","");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val("by_name");
            $('.input-group #search_param').val(param);
                console.log("sucess"+param);
                 //val['mriPatient']['patientId']  val['mriPatient']['name']

            $.ajax({
                type:'GET',
                url: 'patient_controller/GetAllInternalPatients1',
                dataType: 'json',
                success: function (output) {
                    $('#patient_datalist').empty();
                      //console.log("test eee"+param);
                        $.each(output, function (key, val) {
                           // console.log("test"+val[0]);
                            $('#patient_datalist').append("<option id= '" +val['mriPatient']['patientId'] + "' value='" +  val['mriPatient']['name'] + "' data-hin='"+  val['mriPatient']['HIN'] +"'>");
                        });

                    switch (param) {
                        case 'by_name':
                            $.each(output, function (key, val) {
                                //  console.log("test"+val[0]);
                                      alert(val['mriPatient']['name'] );
                                $('#patient_datalist').append("<option id= '" + val['mriPatient']['patientId'] + "' value='" +  val['mriPatient']['name']+ "'>");
                            });
                            break;

                        case 'by_nic':
                            $.each(output, function (key, val) {
                                $('#patient_datalist').append("<option id= '" + val['mriPatient']['patientId'] + "' value='" + val['mriPatient']['nic'] + "'>");
                            });
                            break;

                        case 'by_id':
                            $.each(output, function (key, val) {
                                $('#patient_datalist').append("<option id= '" + val['mriPatient']['patientId'] + "' value='" + val['mriPatient']['patientId'] + "'>");
                            });
                            break;
                    }
                }
            });



        });




  //$('#patient_search').on('keyup focus blur change', function() {
  //  var userText = $(this).val();

   // $("#patient_datalist").find("option").each(function() {
      ///if ($(this).val() == userText) {
    //    alert("Make Ajax call here.");
     // }
   // });
  //});

 // $('#patient_search').on('keyup focus keypress blur change', function(e) {
        //     var key = e.which;
     //   alert("kay"+key);
          //      if(key == 13)   //the enter key code
          //     {
        //           alert("tab");   
       //        } if(key == 9)   //the enter key code
     //          {
      //          alert("tabee");
  //             }
 // });

  $('#patient_search').keypress(function (e) {                
        var key = e.which;
              
                if(key == 13)   //the enter key code
               {
                alert("Enter");
                 var patientSearch = $('#patient_search').val();
                
                   var patientID = $('#patient_datalist').find('option[value="' +patientSearch+ '"]').attr('id');
                 
               
              /* $.ajax({
                   type: "GET",
                   url: 'patient_controller/GetExternalPatientById/' + patientID,
                   dataType: 'json',
                    success: function(output) {
                        alert(JSON.stringify(output));
                   }
                  });  */
              }
                if(key == 9)   //the enter key code
               {
                         alert("tab Key");
               }
         });    

  


        $('#patient_search_btn').click(function () {

            var patientSearch = $('#patient_search').val();

            var patientID = $('#patient_datalist').find('option[value="' + patientSearch + '"]').attr('id');

            var hospitalID = $('#patient_datalist').find('option[value="' + patientSearch + '"]').data('hosid');
           //var nic = $('#patient_datalist').find('option[value="' + patientSearch + '"]').data('nic');
          //  alert(patientSearch);
                console.log("Patient search"+patientID);
            var stringArray = patientSearch.split('-');
             $('#patient_ID').text(patientID);
                $('#patient_name').text(stringArray[0]);
                 $('#patient_bht').text(stringArray[1]);
                $('#patient_hospital').text(stringArray[2]);

                 $('#patient_hospital_id').val(hospitalID);

                
         /*   $.ajax({
                type: "GET",
                url: 'patient_controller/GetPatientById/' + patientID,
                dataType: 'json',
                success: function (output) {
                    alert(JSON.stringify(output));
                    $.each(output, function (key, val) {
                        $('#patient_ID').text(val['patientId']);
                        $('#patient_name').text(val['name']);
                        $('#patient_hospital').text(val['mriHospitalPatients']['hospitalName']);

                    });

                }
            }); */
        });

        //$.ajax({
//            type: "GET",
//            url: 'new_test_request_controller/GetAllTestRequestTypes',
//            dataType: 'json',
//            success: function(output) {
//                
//                
//            });

        $(document).on('click', '.input-remove-row', function () {
            var tr = $(this).closest('tr');
            tr.fadeOut(200, function () {
                tr.remove();

            });
        });

        $(function () {
            $('.preview-add-button').click(function () {

                var form_data = {};
                form_data["test_request_id"] = $('.request-form input[name="test_request_id"]').val();
                 console.log(form_data["test_request_id"] );
                form_data["test_request_type"] = $('.request-form #test_request_type option:selected').text();
                form_data["test_priority"] = $('.request-form #test_priority option:selected').text();
               // form_data["due_date"] = $('.request-form input[name="due_date"]').val();
                   form_data["due_date"] =  $('.request-form input[name="due_date"]').val();
              //alert(temp);
                //form_data["specimen_no"] = $('.request-form #specimen_no option:selected').text();
                //form_data["specimen_no"] = $('.request-form input[name="specimen_no"]').val();
                form_data["comments"] = $('.request-form textarea[name="comments"]').val();
                form_data["remove-row"] = '<span class="glyphicon glyphicon-remove"></span>';

                var type_id = $('.request-form #test_request_type option:selected').val();


                var row = $('<tr></tr>');
                $.each(form_data, function (type, value) {
                    if (type == "test_request_type")
                    {
                        $('<td class="input-' + type + '" id="' + type_id + '"></td>').html(value).appendTo(row);
                    }
                    else
                    {
                        $('<td class="input-' + type + '"></td>').html(value).appendTo(row);
                    }
                });
                $('.preview-table > tbody:last').append(row);

                reset_internalRequestForm();


            });
        });

        $.ajax({
            type: "GET",
            url: 'lab_tests_controller/getAllLabTests',
            dataType: 'json',
            success: function (output) {
                //alert(JSON.stringify(output));
                $.each(output, function (key, val) {

                    $('#test_request_type').append('<option data-defultspecimanid='+val[3]+' value=' + val[0] + '>' + val[1] + '</option>');
                });
            }
        });

        $('#btn_insert_internal_requsets').click(function () {

            //alert("hii");
            var count = 0;
            var json = [];
            var hospital_id = $('#patient_hospital_id').val();
            var mainResult;
            //$("#text" + number + "").val();
            $('#tbl_internal_requests tbody tr').each(function (i, el) {

                var patient_id = $('#patient_ID').text();
              
                var RequestType="Internal Request";
                //Kanchana Hopitla type idnentify 
                  console.log("hospital_id"+hospital_id);
                if(hospital_id!="-1"){
                      RequestType = "Hospital Request";
                }

                if (patient_id != '-') {


                    var request_id = $.trim($(this).find('td:eq(0)').text());
                    var test_type_id = $.trim($(this).find('td:eq(1)').attr('id'));
                    var priority = $.trim($(this).find('td:eq(2)').text());
                    var date = new Date();
                    
                    
                    //var due_date = '2/23/2016';
                    //var due_date = date.toLocaleDateString("en-au", {year: "numeric", month: "numeric",day: "numeric"}).replace(/\s/g,'-') ;
                    var due_date = $.trim($(this).find('td:eq(3)').text());

                    //var specimen_no = $.trim($(this).find('td:eq(4)').text());
                    var comments = $.trim($(this).find('td:eq(5)').text());

                var specimanTypeId = $('#test_request_type option:selected').attr("data-defultspecimanid");
            console.log("SpecimanType"+specimanTypeId);
                selectedTestSepcID =specimanTypeId;

                    var obj = {};

                    //alert(patient_id);
                    var increment = request_id.slice(0, -1);
                    //alert(increment);
                    //UserID Kanchana 25 06 16
                     var userid =$("#feildUserId").val();
                     //alert(userid);
                    obj ['PatientID'] = patient_id;

                    requestArray.push(request_id);
                    //alert(requestArray);
                    obj ['RequestID'] = request_id;
                    obj ['Increment'] = increment;
                    obj ['TestTypeID'] = test_type_id;
                    obj ['Priority'] = priority;
                    obj ['DueDate'] = due_date;
                    //obj ['SpecimenID'] = specimen_no;
                    obj ['Comments'] = comments;
                    obj ['InsertUserID'] = userid;
                        //Kanchana Hospital ID 
                     obj ['HospitalID'] = hospital_id;
                    obj ['RequestType'] = "Hospital Request";
                    json.push(obj);


                }
                else
                {
                    alert("Select Patient!")
                }
                count++;
            });
            if(hospital_id=="-1"){
                 var internalRequestsJSONObject = {"InternalPatientRequests": json};
            alert(JSON.stringify(internalRequestsJSONObject));

            $.ajax({
                type: "POST",
                url: 'new_test_request_controller/InsertNewInternalRequests',
                data: {'requests': internalRequestsJSONObject},
                success: function (output) {
                    if (output == "\"TRUE\"") {
                        //alert("Test Request Added!");
                        $('#alert_successfull_tab1').show();
                        
                        //$('#internalRequestForm').hide();
                        $('#newTest').hide();
                        $('#insertTest').hide();
                        $("#addSpecDiv").show();
                        
                        $.each(requestArray, function (i, l) {
                            $.ajax({
                                type: "GET",
                                url: 'test_request_progress_controller_1/GetInternalRequestsBySearch/by_requestID/' + l,
                                dataType: 'json',
                                success: function (output) {

                                    // $("#tbl_internal_requests_list tbody").empty();
                                    $.each(output, function (key, val) {
                                        var specimenCol = null;
                                        if (val['mriSpecimen'] != null) {
                                            var specimenID = val['mriSpecimen']['specimenId'];
                                            specimenCol = specimenID;
                                        } else {
                                            specimenCol = "<p data-placement='top' data-toggle='tooltip' title='NewSpecimen'><input type='checkbox' autocomplete='off'data-title='New Visit' data-toggle='modal' data-target='#new_specimen'></p>";
                                        }

                                        var rDate = new Date(parseInt(val['testRequestDate']));
                                        var requestDate = rDate.toLocaleDateString();

                                        var dDate = new Date(parseInt(val['testDueDate']));
                                        var dueDate = dDate.toLocaleDateString();
                                        var statusInt = val['status'];
                                        var status = "";
                                         if (statusInt == "0") {
                                            status = "Pending";

                                             } 
                                             else if (statusInt == "1") {
                                                status = "VerifyPending";
                                            }
                                             else if (statusInt == "2") {
                                                status = "PrintPending";
                                            } else if (statusInt == "3") {
                                                status = "Re Eveluate";
                                            }else {
                                                status = "Resolved";
                                            }

                                        $('#tbl_internal_requests_list').append("<tr id='" + val['requestId'] + "' data-testrequestid='"+val['testRequestId']+"'><td>" + val['requestId'] + "</td>\n\
                                                            <td>" + val['mriPatient']['name'] + "</td>\n\
                                                            <td>" + val['mriLaboratoryTest']['testFullName'] + "</td>\n\
                                                            <td>" + val['testPriority'] + "</td>\n\
                                                            <td>" + requestDate + "</td>\n\
                                                            <td>" + dueDate + "</td>\n\
                                                            <td>" + status + "</td>\n\
                                                            <td>" + specimenCol + "</td>\n\
                                                            </tr>");
                                    });

                                }
                            });
                        });

                        //location.reload();
                        $(window).scrollTop(0);


                    } else {
                        alert("ERROR! Test Request Not Added!");
                    }

                        //Kanchana Set next incrmented test requaest ID 
                            $.ajax({
                                    type: "GET",
                                    url: 'new_test_request_controller/GetLastRequestID',
                                    dataType: 'json',
                                    success: function (output) {
                                        console.log("next_id"+JSON.stringify(output));
                                        initialRequestID = output + 1;
                                        h_initialRequestID = output + 1;
                                        requestID = initialRequestID;
                                        h_requestID = h_initialRequestID;

                                        $('#test_request_id').val(requestID + "A");
                                        $('#h_test_request_id').val(h_requestID + "A");

                                    }
                                });

                }
            }); 
            }else{

                         var hospitalRequestsJSONObject = {"HospitalPatientRequests": json};
          //  alert(JSON.stringify(hospitalRequestsJSONObject));

            $.ajax({
                type: "POST",
                url: 'new_test_request_controller/InsertNewHospitalRequests',
                data: {'requests': hospitalRequestsJSONObject},
                success: function (output) {
                    alert("Test Request Successfully Added!");
                    $('#HospitalRequestForm').hide();
                    $.each(h_requestArray, function (i, l) {   // new table summary 
                      //  alert('loop');
                        $.ajax({
                            type: "GET",
                            url: 'test_request_progress_controller_1/GetHospitalRequestsBySearch/by_requestID/' + l,
                            dataType: 'json',
                            success: function (output) {

                                // $("#tbl_internal_requests_list tbody").empty();
                                $.each(output, function (key, val) {
                                    var specimenCol = null;
                                    if (val['mriSpecimen'] != null) {
                                        var specimenID = val['mriSpecimen']['specimenId'];
                                        specimenCol = specimenID;
                                    } else {
                                        specimenCol = "<p data-placement='top' data-toggle='tooltip' title='NewSpecimen'><input type='checkbox' autocomplete='off'data-title='New Visit' data-toggle='modal' data-target='#new_specimen'></p>";
                                    }

                                    var rDate = new Date(parseInt(val['testRequestDate']));
                                    var requestDate = rDate.toLocaleDateString();

                                    var dDate = new Date(parseInt(val['testDueDate']));
                                    var dueDate = dDate.toLocaleDateString();
                                   // alert('Due Date'+dueDate);
                                    var statusInt = val['status'];
                                    var status = "";
                                    if (statusInt == "0") {
                                        status = "Pending";
                                    } else {
                                        status = "Resolved";
                                    }
                                    $('#tbl_hospital_requests_list').append("<tr id='" + val['requestId'] + "'>\n\
                                                            <td>" + val['requestId'] + "</td>\n\
                                                            <td>" + val['mriPatient']['name'] + "</td>\n\\n\
                                                            <td>" + val['mriBundle']['mriHospital']['hospitalName'] + "</td>\n\
                                                            <td>" + val['mriLaboratoryTest']['testFullName'] + "</td>\n\
                                                            <td>" + val['testPriority'] + "</td>\n\
                                                            <td>" + requestDate + "</td>\n\
                                                            <td>" + dueDate + "</td>\n\
                                                            <td>" + status + "</td>\n\
                                                            <td>" + specimenCol + "</td>\n\
                                                            </tr>");
                                });

                            }
                        });

                    });


                    //Kanchana  26 6 16 Rest Request ID to next latest one 

                            $.ajax({
                                type: "GET",
                                url: 'new_test_request_controller/GetLastRequestID',
                                dataType: 'json',
                                success: function (output) {
                                    //alert(JSON.stringify(output));
                                    initialRequestID = output + 1;
                                    h_initialRequestID = output + 1;
                                    requestID = initialRequestID;
                                    h_requestID = h_initialRequestID;

                                    $('#test_request_id').val(requestID + "A");
                                    $('#h_test_request_id').val(h_requestID + "A");

                                    }
                            });


                }
            });
            }

          

        });

        $.ajax({
            type: "GET",
            url: 'hospital_controller/GetAllHospitals',
            dataType: 'json',
            success: function (output) {
                $('#hospital_datalist').empty();
                $.each(output, function (key, val) {

                    var viewHospital = val['hospitalName'] + " - " + val['location'];
                    //alert(viewHospital);
                    $('#hospital_datalist').append("<option id= '" + val['hospitalId'] + "' value='" + viewHospital + "'>");

                });

            }
        });

        $('#hospital_search_btn').click(function () {

            var hospitalSearch = $('#hospital_search').val();

            var hospitalID = $('#hospital_datalist').find('option[value="' + hospitalSearch + '"]').attr('id');


            $.ajax({
                type: "GET",
                url: 'hospital_controller/GetHospitalById/' + hospitalID,
                dataType: 'json',
                success: function (output) {
                    //alert(JSON.stringify(output));
                    $.each(output, function (key, val) {

                        $('#hospital_ID').text(val['hospitalId']);
                        $('#hospital_name').text(val['hospitalName']);
                        $('#hospital_contact').text(val['contactNo1']);
                        $('#hospital_address').text(val['address']);

                    });

                }
            });

            $.ajax({
                type: "GET",
                url: 'patient_controller/GetHospitalpatientsByHID/' + hospitalID,
                dataType: 'json',
                success: function (output) {
                    $('#h_patient_datalist').empty();
                    $.each(output, function (key, val) {

                        //var viewHospital= val['hospitalName']+" - "+val['location'];
                        //alert(viewHospital);
                        $('#h_patient_datalist').append("<option id= '" + val['hospitalPatientId'] + "' value='" + val['mriPatient']['name'] + "'>");

                    });

                }
            });

            //Reset Values
            $('#h_patient_search').val('');
            $('#h_test_request_type').empty();
            $.ajax({
                type: "GET",
                url: 'lab_tests_controller/getAllLabTests',
                dataType: 'json',
                success: function (output) {
                    //alert(JSON.stringify(output));
                    $.each(output, function (key, val) {

                        $('#h_test_request_type').append('<option value=' + val[0] + '>' + val[1] + '</option>');
                    });
                }
            });

            reset_hospitalRequestForm();

        });

        function reset_hospitalRequestForm() {
            $('#h_test_priority').val('Medium');
            $('#h_due_date').val('');
            $('#h_specimen_id').val('');
            $('#h_comments').val('');
        }
        ;

        $.ajax({
            type: "GET",
            url: 'lab_tests_controller/getAllLabTests',
            dataType: 'json',
            success: function (output) {
                //alert(JSON.stringify(output));
                $.each(output, function (key, val) {

                    $('#h_test_request_type').append('<option value=' + val[0] + '>' + val[1] + '</option>');
                });
            }
        });

        $(function () {
            $('.preview-add-button1').click(function () {
                var form_data = {};
                form_data["patient"] = $('.request-form1 input[name="h_patient_search"]').val();
                form_data["test_request_id"] = $('.request-form1 input[name="h_test_request_id"]').val();
                form_data["test_request_type"] = $('.request-form1 #h_test_request_type option:selected').text();
                form_data["test_priority"] = $('.request-form1 #h_test_priority option:selected').text();
                
                form_data["due_date"] = $('.request-form1 input[name="h_due_date"]').val();
                //form_data["specimen_id"] = $('.request-form1 input[name="h_specimen_id"]').val();
                form_data["comments"] = $('.request-form1 textarea[name="h_comments"]').val();
                form_data["remove-row"] = '<span class="glyphicon glyphicon-remove"></span>';


                var patientSearch = $('#h_patient_search').val();

                var h_patientID = $('#h_patient_datalist').find('option[value="' + patientSearch + '"]').attr('id');



                var type_id = $('.request-form1 #h_test_request_type option:selected').val();
                //alert(type_id);

                var row = $('<tr></tr>');
                $.each(form_data, function (type, value) {
                    if (type == "patient")
                    {
                        $('<td class="input-' + type + '" id="' + h_patientID + '"></td>').html(value).appendTo(row);
                    }
                    else if (type == "test_request_type")
                    {
                        $('<td class="input-' + type + '" id="' + type_id + '"></td>').html(value).appendTo(row);
                    }
                    else
                    {
                        $('<td class="input-' + type + '"></td>').html(value).appendTo(row);
                    }
                });
                $('.preview-table1 > tbody:last').append(row);

                reset_externalRequestForm();

            });
        });

        $('#btn_insert_hospital_requsets').click(function () {

           // alert("hii");
            var count = 0;
            var json = [];

          
            //$("#text" + number + "").val();
            $('#tbl_hospital_requests tbody tr').each(function (i, el) {

                var hospital_id = $('#hospital_ID').text();

                if (hospital_id != '-') {

                    //var patient_id = $.trim($(this).find('td:eq(0)').attr('id'));
                    var patient_id = $.trim($(this).find('td:eq(0)').attr('id'));
                    var request_id = $.trim($(this).find('td:eq(1)').text());
                    var test_type_id = $.trim($(this).find('td:eq(2)').attr('id'));
                    var priority = $.trim($(this).find('td:eq(3)').text());
                    var due_date = $.trim($(this).find('td:eq(4)').text());
                    //var specimen_id = $.trim($(this).find('td:eq(4)').text());
                    var comments = $.trim($(this).find('td:eq(5)').text());

                    var increment = request_id.slice(0, -1);
                    //alert(request_id);
                    // alert(increment);
                    //Kanchana Isert USer 25 06 16
                      var userid =$("#feildUserId").val();
                     //alert(userid);


                    var obj = {};
                    h_requestArray.push(request_id);
                    //alert(patient_id);
                    obj ['RequestType'] = "Hospital Request";
                    obj ['HospitalID'] = hospital_id;
                    obj ['PatientID'] = patient_id;
                    obj ['RequestID'] = request_id;
                    obj ['Increment'] = increment;
                    obj ['TestTypeID'] = test_type_id;
                    obj ['Priority'] = priority;
                    obj ['DueDate'] = due_date;

                    obj ['Comments'] = comments;
                    obj ['InsertUserID'] = userid;
                    //alert("HospitalID: "+hospital_id+"_patient: "+patient_id+"_test: "+test_type_id+"_prio: "+priority+"_due: "+due_date+"_spec: "+specimen_id+"_comment: "+comments);
                    json.push(obj);

                }
                else
                {
                    alert("Select a Hospital!")
                }
                count++;
            });
            var hospitalRequestsJSONObject = {"HospitalPatientRequests": json};
          //  alert(JSON.stringify(hospitalRequestsJSONObject));

            $.ajax({
                type: "POST",
                url: 'new_test_request_controller/InsertNewHospitalRequests',
                data: {'requests': hospitalRequestsJSONObject},
                success: function (output) {
                    alert("Test Request Successfully Added!");
                    $('#HospitalRequestForm').hide();
                    $.each(h_requestArray, function (i, l) {   // new table summary 
                      //  alert('loop');
                        $.ajax({
                            type: "GET",
                            url: 'test_request_progress_controller_1/GetHospitalRequestsBySearch/by_requestID/' + l,
                            dataType: 'json',
                            success: function (output) {

                                // $("#tbl_internal_requests_list tbody").empty();
                                $.each(output, function (key, val) {
                                    var specimenCol = null;
                                    if (val['mriSpecimen'] != null) {
                                        var specimenID = val['mriSpecimen']['specimenId'];
                                        specimenCol = specimenID;
                                    } else {
                                        specimenCol = "<p data-placement='top' data-toggle='tooltip' title='NewSpecimen'><input type='checkbox' autocomplete='off'data-title='New Visit' data-toggle='modal' data-target='#new_specimen'></p>";
                                    }

                                    var rDate = new Date(parseInt(val['testRequestDate']));
                                    var requestDate = rDate.toLocaleDateString();

                                    var dDate = new Date(parseInt(val['testDueDate']));
                                    var dueDate = dDate.toLocaleDateString();
                                   // alert('Due Date'+dueDate);
                                    var statusInt = val['status'];
                                    var status = "";
                                    if (statusInt == "0") {
                                        status = "Pending";
                                    } else {
                                        status = "Resolved";
                                    }
                                    $('#tbl_hospital_requests_list').append("<tr id='" + val['requestId'] + "'>\n\
                                                            <td>" + val['requestId'] + "</td>\n\
                                                            <td>" + val['mriPatient']['name'] + "</td>\n\\n\
                                                            <td>" + val['mriBundle']['mriHospital']['hospitalName'] + "</td>\n\
                                                            <td>" + val['mriLaboratoryTest']['testFullName'] + "</td>\n\
                                                            <td>" + val['testPriority'] + "</td>\n\
                                                            <td>" + requestDate + "</td>\n\
                                                            <td>" + dueDate + "</td>\n\
                                                            <td>" + status + "</td>\n\
                                                            <td>" + specimenCol + "</td>\n\
                                                            </tr>");
                                });

                            }
                        });

                    });


                    //Kanchana  26 6 16 Rest Request ID to next latest one 

                            $.ajax({
                                type: "GET",
                                url: 'new_test_request_controller/GetLastRequestID',
                                dataType: 'json',
                                success: function (output) {
                                    //alert(JSON.stringify(output));
                                    initialRequestID = output + 1;
                                    h_initialRequestID = output + 1;
                                    requestID = initialRequestID;
                                    h_requestID = h_initialRequestID;

                                    $('#test_request_id').val(requestID + "A");
                                    $('#h_test_request_id').val(h_requestID + "A");

                                    }
                            });


                }
            });

        });

        $('#specimen_no').change(function () {
            if ($('#specimen_no option:selected').val() == 1) {
                requestID = initialRequestID;

                if (count1 == 0) {
                    cur1 = "A";
                    count1++;
                } else {
                    cur1 = String.fromCharCode(cur1.charCodeAt(0) + 1);

                }
                requestLetter = cur1;
            }
            else if ($('#specimen_no option:selected').val() == 2) {
                $('#specimen_no').append('<option value=3>Specimen 3</option>');
                requestID = initialRequestID + 1;

                if (count2 == 0) {
                    cur2 = "A";
                    count2++;
                } else {
                    cur2 = String.fromCharCode(cur2.charCodeAt(0) + 1);

                }

                requestLetter = cur2;
            }
            else if ($('#specimen_no option:selected').val() == 3) {
                $('#specimen_no').append('<option value=4>Specimen 4</option>');
                requestID = initialRequestID + 2;

                if (count3 == 0) {
                    cur3 = "A";
                    count3++;
                } else {
                    cur3 = String.fromCharCode(cur3.charCodeAt(0) + 1);

                }
                requestLetter = cur3;
            }
            else if ($('#specimen_no option:selected').val() == 4) {
                $('#specimen_no').append('<option value=5>Specimen 5</option>');
                requestID = initialRequestID + 3;

                if (count4 == 0) {
                    cur4 = "A";
                    count4++;
                } else {
                    cur4 = String.fromCharCode(cur4.charCodeAt(0) + 1);

                }
                requestLetter = cur4;
            }

            else if ($('#specimen_no option:selected').val() == 5) {

                requestID = initialRequestID + 4;

                if (count5 == 0) {
                    cur5 = "A";
                    count5++;
                } else {
                    cur5 = String.fromCharCode(cur5.charCodeAt(0) + 1);

                }
                requestLetter = cur5;
            }
            $('#test_request_id').val(requestID + requestLetter);
            //reset_internalRequestForm();
        });

        $.ajax({
            type: "GET",
            url: 'new_test_request_controller/GetLastRequestID',
            dataType: 'json',
            success: function (output) {
                //alert(JSON.stringify(output));
                initialRequestID = output + 1;
                h_initialRequestID = output + 1;
                requestID = initialRequestID;
                h_requestID = h_initialRequestID;

                $('#test_request_id').val(requestID + "A");
                $('#h_test_request_id').val(h_requestID + "A");

            }
        });

        function reset_internalRequestForm() {


            if ($('#specimen_no option:selected').val() == 1) {
                count1++;
                if (count1 == 0) {
                    cur1 = "A";

                } else {
                    cur1 = String.fromCharCode(cur1.charCodeAt(0) + 1);

                }
                requestLetter = cur1;
            }
            else if ($('#specimen_no option:selected').val() == 2) {
                count2++;
                if (count2 == 0) {
                    cur2 = "A";

                } else {
                    cur2 = String.fromCharCode(cur2.charCodeAt(0) + 1);

                }
                requestLetter = cur2;
            }
            else if ($('#specimen_no option:selected').val() == 3) {

                cur3 = String.fromCharCode(cur3.charCodeAt(0) + 1);
                requestLetter = cur3;

            }
            else if ($('#specimen_no option:selected').val() == 4) {
                cur4 = String.fromCharCode(cur4.charCodeAt(0) + 1);
                requestLetter = cur4;
            }
            else if ($('#specimen_no option:selected').val() == 5) {
                cur5 = String.fromCharCode(cur5.charCodeAt(0) + 1);
                requestLetter = cur5;
            }
            //alert(requestLetter);
            $('#test_request_id').val(requestID + requestLetter);

        }
        ;

        $('#print_tab1').click(function () {
            var docprint = window.open("about:HIS", "_blank");
            var oTable = document.getElementById("tbl_internal_requests");
            var patientName = document.getElementById("patient_name");
            docprint.document.open();
            docprint.document.write('<html><head><title>Test Request Order</title>');
            docprint.document.write('</head><style>.dataTables_length,.dataTables_filter,.dataTables_info,.dataTables_paginate { display: none;}</style>');
            docprint.document.write('<body>');
            docprint.document.write('<div>');
            docprint.document.write('<label><Strong>Patient Name :</Strong>' + patientName.parentNode.innerHTML + '</label>');
            //docprint.document.write(patientName.parentNode.innerHTML);
            docprint.document.write('</div>');
            docprint.document.write('<br>');
            docprint.document.write('<br>');
//            docprint.document.write('<br>');
//            docprint.document.write('<br>');
            docprint.document.write('<div STYLE="width: 100%;">');
            docprint.document.write(oTable.parentNode.innerHTML);
            docprint.document.write('</div>');
            docprint.document.write('</body></html>');
            docprint.document.close();
            docprint.print();
            docprint.close();
        });


        ////////////////////////////
        $('#h_specimen_no').change(function () {
            if ($('#h_specimen_no option:selected').val() == 1) {
                h_requestID = h_initialRequestID;

                if (h_count1 == 0) {
                    h_cur1 = "A";
                    h_count1++;
                } else {
                    h_cur1 = String.fromCharCode(h_cur1.charCodeAt(0) + 1);

                }
                h_requestLetter = h_cur1;
            }
            else if ($('#h_specimen_no option:selected').val() == 2) {

                if ($("#h_specimen_no option[value=3]").length == 0) {
                    $('#h_specimen_no').append('<option value=3>Specimen 3</option>');
                }
                h_requestID = h_initialRequestID + 1;

                if (h_count2 == 0) {
                    h_cur2 = "A";
                    h_count2++;
                } else {
                    h_cur2 = String.fromCharCode(h_cur2.charCodeAt(0) + 1);

                }

                h_requestLetter = h_cur2;
            }
            else if ($('#h_specimen_no option:selected').val() == 3) {
                if ($("#h_specimen_no option[value=4]").length == 0) {
                    $('#h_specimen_no').append('<option value=4>Specimen 4</option>');
                }
                h_requestID = h_initialRequestID + 2;

                if (h_count3 == 0) {
                    h_cur3 = "A";
                    h_count3++;
                } else {
                    h_cur3 = String.fromCharCode(h_cur3.charCodeAt(0) + 1);

                }
                h_requestLetter = h_cur3;
            }
            else if ($('#h_specimen_no option:selected').val() == 4) {
                if ($("#h_specimen_no option[value=5]").length == 0) {
                    $('#h_specimen_no').append('<option value=5>Specimen 5</option>');
                }
                h_requestID = h_initialRequestID + 3;

                if (h_count4 == 0) {
                    h_cur4 = "A";
                    h_count4++;
                } else {
                    h_cur4 = String.fromCharCode(h_cur4.charCodeAt(0) + 1);

                }
                h_requestLetter = h_cur4;
            }

            else if ($('#h_specimen_no option:selected').val() == 5) {

                h_requestID = h_initialRequestID + 4;

                if (h_count5 == 0) {
                    h_cur5 = "A";
                    h_count5++;
                } else {
                    h_cur5 = String.fromCharCode(h_cur5.charCodeAt(0) + 1);

                }
                h_requestLetter = h_cur5;
            }
            $('#h_test_request_id').val(h_requestID + h_requestLetter);
            //reset_internalRequestForm();
        });


        function reset_externalRequestForm() {


            if ($('#h_specimen_no option:selected').val() == 1) {
                h_count1++;
                if (h_count1 == 0) {
                    h_cur1 = "A";

                } else {
                    h_cur1 = String.fromCharCode(h_cur1.charCodeAt(0) + 1);

                }
                h_requestLetter = h_cur1;
            }
            else if ($('#h_specimen_no option:selected').val() == 2) {
                h_count2++;
                if (h_count2 == 0) {
                    h_cur2 = "A";

                } else {
                    h_cur2 = String.fromCharCode(h_cur2.charCodeAt(0) + 1);

                }
                h_requestLetter = h_cur2;
            }
            else if ($('#h_specimen_no option:selected').val() == 3) {

                h_cur3 = String.fromCharCode(h_cur3.charCodeAt(0) + 1);
                h_requestLetter = h_cur3;

            }
            else if ($('#h_specimen_no option:selected').val() == 4) {
                h_cur4 = String.fromCharCode(h_cur4.charCodeAt(0) + 1);
                h_requestLetter = h_cur4;
            }
            else if ($('#h_specimen_no option:selected').val() == 5) {
                h_cur5 = String.fromCharCode(h_cur5.charCodeAt(0) + 1);
                h_requestLetter = h_cur5;
            }
            //alert(requestLetter);
            $('#h_test_request_id').val(h_requestID + h_requestLetter);

        }
        ;



            var currentDate = new Date();
        $('#datetimepicker1').datepicker({
             startDate: '-3d',
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            dateonly: true ,
          dateFormat: 'yyyy-mm-dd'
        });
        $("#datetimepicker1").datepicker( "setDate", currentDate);

        //$( ".selector" ).datepicker( "setDate", new Date());
        $('#datetimepicker2').datepicker({
            startDate: '-0d',
            changeMonth: true,
            changeYear: true,
            dateonly: true,
            dateFormat: 'yyyy-mm-dd'
        });
     $("#datetimepicker2").datepicker( "setDate", currentDate);


         //Add speciman button click event 
        $('#addSpecimen').click(function () {
  
             $('#ReqID').text("");

             //changed Kanchana 26 06 16
             // $('#datetimepicker1').val('');
           // $('#datetimepicker2').val('');
           // $('#pecimenType option:selected').removeAttr("selected");

            $('#stored_location').val('');
            $('#remark').val('');

             $('#SpecimenType option:selected').removeAttr('selected');
          $('SpecimenType:selected', 'select[name="options"]').removeAttr('selected');
          $('select[name="SpecimenType"]').find('option[value="'+selectedTestSepcID+'"]').attr("selected",true);

            var requestIDs = "";
            var testRequstID="";
            $('#tbl_internal_requests_list').find('input[type="checkbox"]:checked').each(function () {
                var row = $(this).closest('tr').attr('id');
                if (requestIDs == "")
                {
                    requestIDs = row;
                } else {
                    requestIDs = requestIDs + ", " + row;
                }
                testRequstID= $(this).attr("data-testrequestid");
                console.log("testRequstID"+testRequstID);
            });  

            $('#tbl_hospital_requests_list').find('input[type="checkbox"]:checked').each(function () {
                var row = $(this).closest('tr').attr('id');
                if (requestIDs == "")
                {
                    requestIDs = row;
                } else {
                    requestIDs = requestIDs + ", " + row;
                }

            });

            $('#ReqID').text(requestIDs);

               if(requestIDs==null||requestIDs==""){
                       $('#ReqID').text("Please Select Test !!!");
               }
        });


        
                //<!-- ____________________ Mafais _______________________________________ -->
        $('#specimen_save').click(function () {
            var json = [];
            var obj = {};

            var ReqID = $('#ReqID').text();
            //alert("ReqID"+ReqID);

          if(ReqID!=""){
            //var SpecimenType = $(' #SpecimenType option:selected').text();
            var SpecimenType = $(' #SpecimenType option:selected').val();
            var received = $('#datetimepicker1').val();
            //var received =  $("#datetimepicker1 input").datepicker("getDate").val();
            var deliver = $('#datetimepicker2').val();
            var stored_location = $('#stored_location').val();


            var stored_or_destroyed = $('input:radio[name=stored_or_destroyed]:checked').val();
            var remark = $('#remark').val();


            obj ['requestID'] = ReqID;

            obj ['specimenTypeId'] = SpecimenType;
            obj ['specimenReceivedDate'] = received;
            obj ['specimenDeliveredDepartmentDate'] = deliver;
            obj ['storedLocation'] = stored_location;
            obj ['storedOrDestroyed'] = stored_or_destroyed;
            obj ['remarks'] = remark;

            var specimenBarcode = null;
            obj ['specimenBarcode'] = specimenBarcode;

            //alert(stored_or_destroyed);

              var specimenCollectedPerson =  '<?php echo $username; 
             ?>';

              //Kanchana Isert USer 25 06 16
             var userid =$("#feildUserId").val();
                   // alert(userid);
            obj ['InsertUserID'] = userid;
            obj ['specimenCollectedPerson'] = specimenCollectedPerson;

            json.push(obj)
            var newSpecimenJSONObject = {"MriSpecimenDetails": json};
          //console.log(JSON.stringify(newSpecimenJSONObject));


            $.ajax({
                type: "POST",
                url: 'test_request_progress_controller/insertSpecimen',
                dataType: 'JSON',
                data: {'mri_specimen': newSpecimenJSONObject},
                success: function (output) {

            //barcode print bring to separate location  9 7 16 Kanchanas
              var printContents = $(".right_contents").html();
             // var originalContents = document.body.innerHTML;
             // document.body.innerHTML = printContents;
             // window.print();
             // document.body.innerHTML = originalContents;
            //  $('#alert_successfull_tab2').show();
        //   alert("Successfully Inserted!");
                   
                    location.reload();
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError);
                }
            });
            }
        });

        //"28/2/2016" 'yy-mm-dd'
        $('#due_date').datepicker({
            dateFormat: 'dd/mm/yyyy',
            changeMonth: true,
            changeYear: true,
            dateonly: true


        }); 

         $("#due_date").datepicker( "setDate", currentDate);

         $('#h_due_date').datepicker({
            dateFormat: 'dd/mm/yyyy',
            changeMonth: true,
            changeYear: true,
            dateonly: true


        });
    
   
        
         
         $('#pdf').click(function(){
         printDiv();
         function printDiv() {
              var printContents = $(".right_contents").html();
              var originalContents = document.body.innerHTML;
              document.body.innerHTML = printContents;
              window.print();
              document.body.innerHTML = originalContents;
         }
        });
         
//___________________________________ Mafais END______________________________________________



    }
    )

</script>

