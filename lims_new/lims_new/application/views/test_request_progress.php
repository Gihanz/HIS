
<link href="<?php echo base_url('assets'); ?>/css/printCSS.css" rel="stylesheet" type="text/css" media="print"/>
<style>
    .datepicker{z-index:1151 !important;}
</style>
<?php include 'includes/edit_delete_button.php'; //Set Edit Delete Button Privilages matches with edit and delete variables?>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Request Progress</h3>
        </div> 
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Internal Patient</a></li>
                <li><a href="#tab_2" data-toggle="tab">Hospital Patient</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="panel panel-default">
                        <div class="panel-heading clickable">
                            Advance Search          
                        </div>
                        <div class="panel-body" >
                            <form class="form-horizontal" role="form" method="POST">
                                <div class="col-sm-12"> 

                                    <div class="form-group col-lg-6 input-group">
                                        <div class="input-group-btn search-panel">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span id="search_concept">Filter by</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#by_name">By Patient Name</a></li>
                                                <li><a href="#by_nic">By Patient NIC</a></li>
                                                <li><a href="#by_id">By Patient ID</a></li>
                                                <li><a href="#by_requestID">By Request ID</a></li>
                                                <li><a href="#by_Priority">By Priority</a></li>
                                                <li><a href="#by_TestType">By Test Type</a></li>
                                                <li><a href="#by_status">By Status</a></li>
                                            </ul>
                                        </div>

                                        <input type="text" class="form-control" id="request_search" placeholder="Search Request" name="request_search" list="request_datalist" autocomplete="off"/>
                                        <datalist id="request_datalist"></datalist>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-add" id="request_search_btn">Search</button>
                                        </span>
                                    </div>
                                    <!--                                    <div class="row col-sm-12">  
                                                                            <p></p> 
                                                                        </div>-->
                                    <div class="form-group col-lg-6 input-group">
                                        <div class="input-group-btn search-panel1">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span id="search_concept1">Filter by</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#by_dueDate">By Due Date</a></li>
                                                <li><a href="#by_requestDate">By Request Date</a></li>

                                            </ul>
                                        </div>

                                        <input type="date" class="form-control" id="request_search1"  name="request_search1"  autocomplete="off"/>

                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-add" id="patient_search_btn">Search</button>
                                        </span>
                                    </div>
                                </div>


                            </form>   
                        </div>

                    </div>
                    <div class="input-group-btn " >
                        <input type="text" id="system-search" name="q" class="form-control input-mm col-md-8" placeholder="Filter Table by" style="width: 95%"/>
                        <button class="btn btn-info btn-mm" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button> 
                    </div>
                    
                    <!--                    <body onload="makeTableScroll();">
                                            <div class="scrollingTable">-->
                  <!--  <table id="tbl_internal_requests" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%"> -->
                  <table id="tbl_internal_requests" class="table table-bordered table-striped dataTable table-list-search" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="width: 10%">Request ID</th>
                                <th style="width: 20%">Patient Name</th>
                                <th style="width: 20%">Test Type</th>
                                <th style="width: 10%">Priority</th>
                                <th style="width: 10%">Request Date</th>
                                <th style="width: 10%">Due Date</th>
                                <th style="width: 10%">Status</th>
                                <th style="width: 10%">Specimen ID</th>
                                <th style="width: 20%">Add Result</th>
                                <th style="width: 20%;<?php echo $edit ?>">Edit</th>
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
                                 <th></th>
                                <th>
                        <p data-placement='top' data-toggle='tooltip' title='Edit'>
                            <button class='btn btn-primary btn-xs btn_new_visit' id="addSpecimen" data-title='New Visit' data-toggle='modal' data-target='#viewAddSpecimen'  >
                                <span class='glyphicon glyphicon-ok-circle'></span>   Add Specimen

                            </button>
                        </p>
                        </th>
                        <th <?php echo 'style="'.$edit.'"'; ?>  ></th>


                        </tr>
                        </tfoot>
                    </table>
                    <!--                        </div>
                                        </body>-->
                </div>
                <div class="tab-pane" id="tab_2">
                    <div class="panel panel-default">
                        <div class="panel-heading clickable">
                            Advance Search          
                        </div>
                        <div class="panel-body" >
                            <form class="form-horizontal" role="form" method="POST">
                                <div class="col-sm-12"> 

                                    <div class="form-group col-lg-6 input-group">
                                        <div class="input-group-btn search-panel">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span id="search_concept">Filter by</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#by_name">By Patient Name</a></li>
                                                <li><a href="#by_nic">By Patient NIC</a></li>
                                                <li><a href="#by_id">By Patient ID</a></li>
                                                <li><a href="#by_requestID">By Request ID</a></li>
                                                <li><a href="#by_Priority">By Priority</a></li>
                                                <li><a href="#by_TestType">By Test Type</a></li>
                                                <li><a href="#by_status">By Status</a></li>
                                            </ul>
                                        </div>

                                        <input type="text" class="form-control" id="request_search" placeholder="Search Request" name="request_search" list="request_datalist" autocomplete="off"/>
                                        <datalist id="request_datalist"></datalist>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-add" id="request_search_btn">Search</button>
                                        </span>
                                    </div>
                                    <!--                                    <div class="row col-sm-12">  
                                                                            <p></p> 
                                                                        </div>-->
                                    <div class="form-group col-lg-6 input-group">
                                        <div class="input-group-btn search-panel1">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span id="search_concept1">Filter by</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#by_dueDate">By Due Date</a></li>
                                                <li><a href="#by_requestDate">By Request Date</a></li>

                                            </ul>
                                        </div>

                                        <input type="date" class="form-control" id="request_search1"  name="request_search1"  autocomplete="off"/>

                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-add" id="patient_search_btn">Search</button>
                                        </span>
                                    </div>
                                </div>


                            </form>   
                        </div>

                    </div>
                       <div class="input-group-btn " >
                        <input type="text" id="system-search_hospital" name="q" class="form-control input-mm col-md-8" placeholder="Filter Table by" style="width: 95%"/>
                        <button class="btn btn-info btn-mm" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button> 
                    </div>
                    <table id="tbl_hospital_requests" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Patient Name</th>
                                <th>Hospital</th>
                                <th>Test Type</th>
                                <th>Priority</th>
                                <th>Request Date</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Specimen ID</th>
                                <th>Add Result</th>
                                 <th <?php echo "style='".$edit."'" ?> >Edit</th>
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
                                <th></th>
                                <th>
                        <p data-placement='top' data-toggle='tooltip' title='Edit'>
                            <button class='btn btn-primary btn-xs btn_new_visit' id='addHospitalSpecimen' data-title='New Visit' data-toggle='modal' data-target='#viewAddSpecimen'>
                            <!-- onclick='myFunction()'-->
                                <span class='glyphicon glyphicon-ok-circle'></span>   Add Specimen
                            </button>
                        </p>
                        </th>
                        <th <?php echo 'style="'.$edit.'"'; ?> ></th>


                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ____________________ Mafais _______________________________________ -->

<div class="modal fade" id="viewAddSpecimen" tabindex="-1" role="dialog" aria-labelledby="addSpecimen" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Add Specimen Details</h4>
            </div>
            <div class="modal-body">
                <row class="col-md-12">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label id="ReqID" name="ReqID" class="form-control " data-toggle="tooltip" data-placement="top" title="" data-original-title="labTestRequest ID"> </label>                

                    </div>
                     
                          
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">            
                        <select id="SpecimenType" name="SpecimenType" class="form-control" data-toggle="tooltip" data-placement="top"  data-original-title="Select SpecimenType" required="">
                            <option selected="selected" value="">Select a Type</option> 
                            <?php foreach ($specimen_types as $item): ?>
                                <option value="<?php echo $item->specimenTypeId; ?>"><?php echo $item->specimenName; ?></option>
                            <?php endforeach; ?>                                 
                        </select>
                    </div>
                </row>
                <row class="col-md-12">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">        
                        <input  type="text" placeholder="collected date" id="datetimepicker1" name="collected_date" class="form-control"  data-date-format="yyyy-mm-dd">

                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input  type="text" placeholder="delevere department date date" id="datetimepicker2" name="DeparmentDeleveredDate" class="form-control"  data-date-format="yyyy-mm-dd">

                    </div>
                </row>
                <row class="col-md-12">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input id="stored_location" name="stored_location" type="text" class="form-control" placeholder="Location"  value="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Stored or Destroyed Location">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 radio">
                        <label>
                            <input type="radio" checked name="stored_or_destroyed" value="Accepted" required="" <?php ?>>
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
                        
                                <div class="form-group " id="<?php $specimen_maxID[0]; ?>" name="<?php echo $specimen_maxID[0]; ?>">              
                                    <?php $specBarcodeID = $specimen_maxID[0]+1; ?>
                                     
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
                 <!--   <div class="form-group ">
                            <button type="button" id="pdf" class="btn btn-primary col-md-offset-9"  value="">Print </button>
                        </div>-->
                       
                </row>
<!--                 <div class="pull-right">
                    <button id="print_tab1" type="button" class="btn btn-xs btn-labeled btn-success">
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
<!--Modal for Edit Test-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
    <form id="test_prog_edit_form">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading"> Edit Test </h4>
                 <input type="hidden" class="form-control" id="test_request_id_edit" name="test_request_id_edit" readonly="">
                             <input type="hidden"   class="form-control" id="patient_type" name="patient_type">
            </div>
            <div class="modal-body col-sm-12">
                <div class="row col-sm-12 form-horizontal"  >                                    
                    <div class="form-group">
                        <label for="label_request_id" class="col-sm-3 control-label">Request ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="request_id_edit" name="request_id_edit" readonly="">
                        </div>
                    </div>
                           <div class="form-group">
                        <label for="label_patient_name" class="col-sm-3 control-label">Patient Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="patient_name_edit" name="patient_name_edit" readonly="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="test_request_type_edit" class="col-sm-3 control-label">Test Type</label>
                        <div class="col-sm-9">
                                <div class='input-group' >                              <select id="test_request_type_edit"     class="form-control" name="test_request_type_edit">

                                                            </select>   </div>
                                                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="priority_edit" class="col-sm-3 control-label">Priority</label>
                        <div class="col-sm-6">
                            <div class='input-group' >
                                        <select id="test_priority_edit" class="form-control">
                                                                <option>High</option>
                                                                <option selected="selected">Medium</option>
                                                                <option>Low</option>
                                                            </select>  
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="due_date_edit" class="col-sm-3 control-label">Due Date</label>
                <div class="col-sm-6">
                            <div class='input-group' >
                                    <input  type="text" placeholder="collected date" id="due_date_edit" name="due_date_edit" class="form-control"  data-date-format="yyyy-mm-dd"  >
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                            </div>
                        </div>
                    </div>
                 <!--   <div class="form-group">
                        <label for="status_edit" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="status_edit" name="status_edit">
                        </div>
                    </div>  -->
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" id = "btn_test_update" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content --> 
        </form>
    </div>
    <!-- /.modal-dialog --> 
</div>
 <!-- <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->
<script>
    $('document').ready(function () {

         var activeSystemClass = $('.list-group-item.active');

  $('#system-search_hospital').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });                                                                                           
    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });                                                                                                                                                                                                                                                                                                                                                                                                                                               

    	 <?php   $username  = $this->session->userdata('name');?>;
    	 
   //     $('#tbl_internal_requests').dataTable();
    //  $('#tbl_hospital_requests').dataTable();

 /*$('#test_prog_edit_form').validate({
        rules: {
            due_date_edit: {
                minlength: 2,
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        },
        success: function (element) {
            element.text('OK!').addClass('valid')
                .closest('.control-group').removeClass('error').addClass('success');
        }
    }); */


        
        var searchParam = "";


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
        $('.panel div.clickable').click();


        $('.search-panel .dropdown-menu').find('a').click(function (e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#", "");
            searchParam = param;
            //alert(searchParam);
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);

            $('#request_datalist').empty();
            $('#request_search').val('');

            if (param == "by_name") {
                $.ajax({
                    type: "GET",
                    url: 'patient_controller/GetAllInternalPatients1',
                    dataType: 'json',
                    success: function (output) {
                        $.each(output, function (key, val) {
                            $('#request_datalist').append("<option id= '" + val['mriPatient']['patientId'] + "' value='" + val['mriPatient']['name'] + "'>");
                        });
                    }
                });
            } else if (param == "by_nic") {
                $.ajax({
                    type: "GET",
                    url: 'patient_controller/GetAllExternalPatients',
                    dataType: 'json',
                    success: function (output) {
                        $.each(output, function (key, val) {
                            $('#request_datalist').append("<option id= '" + val['mriPatient']['patientId'] + "' value='" + val['mriPatient']['nic'] + "'>");
                        });
                    }
                });
            } else if (param == "by_id") {
                $.ajax({
                    type: "GET",
                    url: 'patient_controller/GetAllExternalPatients',
                    dataType: 'json',
                    success: function (output) {
                        $.each(output, function (key, val) {
                            $('#request_datalist').append("<option id= '" + val['mriPatient']['patientId'] + "' value='" + val['mriPatient']['patientId'] + "'>");
                        });
                    }
                });
            } else if (param == "by_requestID") {
                $.ajax({
                    type: "GET",
                    url: 'test_request_progress_controller_1/GetInternalRequests',
                    dataType: 'json',
                    success: function (output) {

                        $.each(output, function (key, val) {

                            $('#request_datalist').append("<option id= '" + val['requestId'] + "' value='" + val['requestId'] + "'>");
                        });
                    }
                });
            } else if (param == "by_Priority") {
                $('#request_datalist').append("<option id= 'High' value='High'>");
                $('#request_datalist').append("<option id= 'Medium' value='Medium'>");
                $('#request_datalist').append("<option id= 'Low' value='Low'>");


            } else if (param == "by_TestType") {
                $.ajax({
                    type: "GET",
                    url: 'lab_tests_controller/getAllLabTests',
                    dataType: 'json',
                    success: function (output) {

                        $.each(output, function (key, val) {

                            $('#request_datalist').append("<option id= '" + val[0] + "' value='" + val[1] + "'>");
                        });
                    }
                });

            } else if (param == "by_status") {

                $('#request_datalist').append("<option id= 'Pending' value='Pending'>");
                $('#request_datalist').append("<option id= 'Resolved' value='Resolved'>");
            }


        });

$.ajax({
            type: "GET",
            url: 'test_request_progress_controller_1/GetHospitalRequests',
            dataType: 'json',
            success: function (output) {

                //$('#hospital_datalist').empty();
                $.each(output, function (key, val) {
                    var specimenCol = null;
                    if (val['mriSpecimen'] != null) {
                        var specimenID = val['mriSpecimen']['specimenId'];
                        specimenCol = specimenID;
                    } else {
                        specimenCol = "<p data-placement='top' data-toggle='tooltip' title='NewSpecimen'><input type='checkbox' autocomplete='off'data-title='New Visit' data-toggle='modal' data-target='#new_specimen'></p>";
                    }
                    // var requestDate = new Date(parseInt(val['testRequestDate'].substr(6)));

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
                    
                    var report = "<a style='margin-right:2px;' class='btn btn-success btn-xs btn_new_visit' href='<?php  echo SITE_URL(); ?>/lims_new/mri_test_results/index/req_id/" + val['requestId'] + "/testId/" + val['testRequestId'] + "'><span class='glyphicon glyphicon-plus'></span></a>";
                    
                    if (statusInt == "1") {
                        report += "<a class='btn btn-success btn-xs btn_new_visit' href='<?php  echo SITE_URL(); ?>/lims_new/mri_test_report/index/req_id/" + val['requestId'] + "/type/" + 0 + "'><span class='glyphicon glyphicon-list-alt'></span></a>";
                    }

                  var editButton=  "<p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs btn_edit' data-title='Edit'   data-requestId='"+val['requestId'] +"' data-testId='"+ val['testRequestId'] +"' data-labTestType='"+ val['mriLaboratoryTest']['laboratoryTestId'] +"' data-testPriority='"+ val['testPriority'] +"' data-testDueDate='"+ dueDate +"' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p>";

                    $('#tbl_hospital_requests').append("<tr id='" + val['requestId'] + "' ><td>" + val['requestId'] + "("+ val['testRequestId']+")</td>\n\
                                                            <td>" + val['mriHospitalPatient']['mriPatient']['name'] + "</td>\n\
                                                            <td>" + val['mriHospitalPatient']['mriHospital']['hospitalName'] + " - " + val['mriHospitalPatient']['mriHospital']['location'] + "</td>\n\
                                                            <td>" + val['mriLaboratoryTest']['testFullName'] + "</td>\n\
                                                            <td>" + val['testPriority'] + "</td>\n\
                                                            <td>" + requestDate + "</td>\n\
                                                            <td>" + dueDate + "</td>\n\
                                                            <td>" + status + "</td>\n\
                                                            <td>" + specimenCol + "</td>\n\
                                                            <td>"+report+"</td>\n\
                                                            <td <?php echo "style='".$edit."';" ?> >" + editButton + "</td> </tr>");
                });

            }
        });
                                                    
                                                    
        $.ajax({
            type: "GET",
            url: 'test_request_progress_controller_1/GetInternalRequests',
            dataType: 'json',
            success: function (output) {

                $("#tbl_internal_requests tbody").empty();
                $.each(output, function (key, val) {
                    var specimenCol = null;
                    if (val['mriSpecimen'] != null) {
                        var specimenID = val['mriSpecimen']['specimenId'];
                        specimenCol = specimenID;
                    } else {
                        specimenCol = "<p data-placement='top' data-toggle='tooltip' title='NewSpecimen'><input type='checkbox' autocomplete='off'data-title='New Visit' data-toggle='modal' data-target='#new_specimen'></p>";
                    }
                    //var jsonRequestDate = val['testRequestDate'];
                    var rDate = new Date(parseInt(val['testRequestDate']));
                    var requestDate = rDate.toLocaleDateString();

                    var statusInt = val['status'];
                    var status = "";
                    if (statusInt == "0") {
                        status = "Pending";
                    } 
                    else if (statusInt == "1") {
                        status = "Verify Pending";
                    }
                     else if (statusInt == "2") {
                        status = "Print Pending";
                    } else if (statusInt == "3") {
                        status = "Re Eveluate";
                    }
                    else {
                        status = "Resolved";
                    }
                    
                    var report = "<a style='margin-right:2px;' class='btn btn-success btn-xs btn_new_visit' href='<?php  echo SITE_URL(); ?>/lims_new/mri_test_results/index/req_id/" + val['requestId'] + "/testId/" + val['testRequestId'] + "'><span class='glyphicon glyphicon-plus'></span></a>";
                    
                    if (statusInt == "1") {
                        report += "<a class='btn btn-success btn-xs btn_new_visit' href='<?php  echo SITE_URL(); ?>/lims_new/mri_test_report/index/req_id/" + val['requestId'] + "/type/" + 0 + "'><span class='glyphicon glyphicon-list-alt'></span></a>";
                    } 

                    var dDate = new Date(parseInt(val['testDueDate']));
                    var dueDate = dDate.toLocaleDateString();

                      var editButton=  "<p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs btn_edit' data-title='Edit'   data-requestId='"+val['requestId'] +"' data-testId='"+ val['testRequestId'] +"' data-labTestType='"+ val['mriLaboratoryTest']['laboratoryTestId'] +"' data-testPriority='"+ val['testPriority'] +"' data-testDueDate='"+ dueDate +"' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p>";

                    $('#tbl_internal_requests').append("<tr id='" + val['requestId'] + "'><td>" + val['requestId'] +"("+ val['testRequestId']+")</td>\n\
                                                            <td>" + val['mriPatient']['name'] + "</td>\n\
                                                            <td>" + val['mriLaboratoryTest']['testFullName'] + "</td>\n\
                                                            <td>" + val['testPriority'] + "</td>\n\
                                                            <td>" + requestDate + "</td>\n\
                                                            <td>" + dueDate + "</td>\n\
                                                            <td>" + status + "</td>\n\
                                                            <td>" + specimenCol + "</td>\n\
                                                            <td>"+report+"</td>\n\
                                                            <td <?php echo "style='".$edit."';" ?> >" + editButton + "</td> </tr>");
                });

            }
        });



        $('#request_search').keypress(function (e) {
            var key = e.which;

            if (key == 13)   //the enter key code
            {

                e.preventDefault();
                AdvansedSerch1(e);

            }
        });

        function AdvansedSerch1(e){

                var requestVal = $(e.target).val();
                var requestID = $('#request_datalist').find('option[value="' + requestVal + '"]').attr('id');
                alert("serch"+requestID);

                $.ajax({
                    type: "GET",
                    url: 'test_request_progress_controller_1/GetInternalRequestsBySearch/' + searchParam + '/' + requestID,
                    dataType: 'json',
                    success: function (output) {
                        alert("success");
                        $("#tbl_internal_requests tbody").empty();
                        $.each(output, function (key, val) {
                            var specimenCol = null;
                            if (val['mriSpecimen'] != null) {
                                var specimenID = val['mriSpecimen']['specimenId'];
                                specimenCol = specimenID;
                            } else {
                                specimenCol = "<p data-placement='top' data-toggle='tooltip' title='NewSpecimen'><input type='checkbox' autocomplete='off'data-title='New Visit' data-toggle='modal' data-target='#new_specimen'></p>";
                            }
                            //var jsonRequestDate = val['testRequestDate'];
                            var rDate = new Date(parseInt(val['testRequestDate']));
                            var requestDate = rDate.toLocaleDateString();

                            var dDate = new Date(parseInt(val['testDueDate']));
                            var dueDate = dDate.toLocaleDateString();
                            $('#tbl_internal_requests').append("<tr id='" + val['requestId'] + "'><td>" + val['requestId'] + "("+ val['testRequestId']+")</td>\n\
                                                            <td>" + val['mriPatient']['name'] + "</td>\n\
                                                            <td>" + val['mriLaboratoryTest']['testFullName'] + "</td>\n\
                                                            <td>" + val['testPriority'] + "</td>\n\
                                                            <td>" + requestDate + "</td>\n\
                                                            <td>" + dueDate + "</td>\n\
                                                            <td>" + val['status'] + "</td>\n\
                                                            <td>" + specimenCol + "</td>\n\
                                                            <td><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-success btn-xs btn_new_visit' data-title='New Visit' data-toggle='modal' data-target='#new_visit' ><span class='glyphicon glyphicon-plus'></span></button></p></td></tr>");
                            
                        });

                    }
                });
        }

        $('.search-panel1 .dropdown-menu').find('a').click(function (e) {
            //alert("Hii");
            e.preventDefault();
            var param = $(this).attr("href").replace("#", "");
            searchParam = param;
            //alert(searchParam);
            var concept = $(this).text();
            $('.search-panel1 span#search_concept1').text(concept);
            $('.input-group #search_param').val(param);

            //alert(searchParam)

        });

        $('#request_search1').change(function () {

            var requestID = $('#request_search1').val();
            //alert(date);
            $.ajax({
                type: "GET",
                url: 'test_request_progress_controller_1/GetInternalRequestsBySearch/' + searchParam + '/' + requestID,
                dataType: 'json',
                success: function (output) {

                    $("#tbl_internal_requests tbody").empty();
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
                        $('#tbl_internal_requests').append("<tr id='" + val['requestId'] + "'><td>" + val['requestId'] +"("+ val['testRequestId']+")</td>\n\
                                                            <td>" + val['mriPatient']['name'] + "</td>\n\
                                                            <td>" + val['mriLaboratoryTest']['testFullName'] + "</td>\n\
                                                            <td>" + val['testPriority'] + "</td>\n\
                                                            <td>" + requestDate + "</td>\n\
                                                            <td>" + dueDate + "</td>\n\
                                                            <td>" + val['status'] + "</td>\n\
                                                            <td>" + specimenCol + "</td>\n\
                                                            <td><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-success btn-xs btn_new_visit' data-title='New Visit' data-toggle='modal' data-target='#new_visit' ><span class='glyphicon glyphicon-plus'></span></button></p></td></tr>");
                    });

                }
            });
        });

        $('#specimen_save').click(function () {
            var json = [];
            var obj = {};



            var ReqID = $('#ReqID').text();
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
             //Kanchana Isert USer 25 06 16
             var userid =$("#feildUserId").val();
            //alert(userid);
            obj ['InsertUserID'] = userid;
            //alert(stored_or_destroyed);

               var specimenCollectedPerson =  '<?php echo $username;  ?>';
            obj ['specimenCollectedPerson'] = specimenCollectedPerson;


            json.push(obj)
            var newSpecimenJSONObject = {"MriSpecimenDetails": json};
            //alert(JSON.stringify(newSpecimenJSONObject));


            $.ajax({
                type: "POST",
                url: 'test_request_progress_controller/insertSpecimen',
                dataType: 'JSON',
                data: {'mri_specimen': newSpecimenJSONObject},
                success: function (output) {
                    alert("Successfully Inserted!");
                    location.reload();
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError);
                }
            });
        });

   var currentDate = new Date();
        $('#datetimepicker1').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            dateonly: true
        });
  $("#datetimepicker1").datepicker( "setDate", currentDate);

        $('#datetimepicker2').datepicker({
            changeMonth: true,
            changeYear: true,
            dateonly: true,
            dateFormat: 'yyyy-mm-dd'
        });
  $("#datetimepicker2").datepicker( "setDate", currentDate);
  

        $('#addSpecimen').click(function () {
            var requestIDs = "";
            
             $('#ReqID').val('');
           //  $('#datetimepicker1').val('');
          //  $('#datetimepicker2').val('');
            $('#stored_location').val('');
            $('#pecimenType option:selected').removeAttr("selected");
            $('#remark').val('');


            $('#tbl_internal_requests').find('input[type="checkbox"]:checked').each(function () {
                var row = $(this).closest('tr').attr('id');
                if (requestIDs == "")
                {
                    requestIDs = row;
                } else {
                    requestIDs = requestIDs + ", " + row;
                }

            });
            $('#ReqID').text(requestIDs);
        });

          $('#addHospitalSpecimen').click(function () {

            var requestIDs = "";
             $('#ReqID').val('');
           //  $('#datetimepicker1').val('');
           // $('#datetimepicker2').val('');
            $('#stored_location').val('');
            $('#pecimenType option:selected').removeAttr("selected");
            $('#remark').val('');


            $('#tbl_hospital_requests').find('input[type="checkbox"]:checked').each(function () {
                var row = $(this).closest('tr').attr('id');
                if (requestIDs == "")
                {
                    requestIDs = row;
                } else {
                    requestIDs = requestIDs + ", " + row;
                }

            });

            $('#ReqID').text(requestIDs);
        });
        
        $(document).on('click', '#print_tab1', function(){ 
            var docprint = window.open("about:HIS", "_blank");
            var oTable = document.getElementById("right_contents"); 
            var img1 = document.getElementById("img_1");
            var img2 = document.getElementById("img_2");
            var img3 = document.getElementById("img_3");
            var img4 = document.getElementById("img_4");
            
            docprint.document.open();
            docprint.document.write('<html><head><title>Test Request Order</title>');
            docprint.document.write('</head><style>.dataTables_length,.dataTables_filter,.dataTables_info,.dataTables_paginate { display: none;}</style>');
            docprint.document.write('<body onLoad="self.print()">');
            docprint.document.write('<div><div>');
            //docprint.document.write("<img src=\"http://localhost/Others/PRi/lims_new/index.php/test_request_progress_controller/barcode/15\">");
            //docprint.document.write(patientName.parentNode.innerHTML);
            //docprint.document.write(oTable.parentNode.innerHTML);
            docprint.document.write(img1.innerHTML);
            docprint.document.write(img2.innerHTML);
             docprint.document.write('<div></div>');
            docprint.document.write(img3.innerHTML);
            docprint.document.write(img4.innerHTML);
            
            docprint.document.write('</div></div>');
            docprint.document.write('</body></html>');
            docprint.document.close();
            docprint.print();
            docprint.close();
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

        //TEST Request EDIT Kanchana
        $('#due_date_edit').datepicker({
            dateFormat: 'dd/mm/yyyy',
            changeMonth: true,
            changeYear: true,
            dateonly: true


        }); 

                $.ajax({
            type: "GET",
            url: 'lab_tests_controller/getAllLabTests',
            dataType: 'json',
            success: function (output) {
                //alert(JSON.stringify(output));
                $.each(output, function (key, val) {

                    $('#test_request_type_edit').append('<option value=' + val[0] + '>' + val[1] + '</option>');
                });
            }
        });

    })

// Edit button Click event
$(document).on('click','.btn_edit',function(){
    //alert('button edit');
    $('#test_request_id_edit').val($(this).data('testid'));
    $('#patient_name_edit').val($(this).closest("tr").find('td:eq(1)').text());
      $('#request_id_edit').val($(this).data('requestid'));
  //  $('#test_request_type_edit').val($(this).data('labtesttype'));
    $('#test_priority_edit').val($(this).data('testpriority'));
    $('#due_date_edit').val($(this).data('testduedate'));

         $('#test_request_type_edit option:selected').removeAttr('selected');
          $('test_request_type_edit:selected', 'select[name="options"]').removeAttr('selected');
          $('select[name="test_request_type_edit"]').find('option[value="'+$(this).data('labtesttype')+'"]').attr("selected",true);
      
});

//Edit Popup Update Window
      $('#btn_test_update').click(function () {

                var json = [];
                var obj = {};
                 var test_request_id = $('#test_request_id_edit').val();
                var request_id = $('#request_id_edit').val();
                var test_request_type = null;
                var test_priority = null;

        test_priority = $('#test_priority_edit').val();
                   
        test_request_type = $('#test_request_type_edit').val();


                var due_date = $('#due_date_edit').val();

                 obj ['testRequestId'] = test_request_id;
                  //  obj ['requestId'] = request_id;
                    obj ['mriLaboratoryTest'] = test_request_type;
                    obj ['testPriority'] = test_priority;
                    obj ['testDueDate'] = due_date;


                json.push(obj)
                var testRequestJSONObject = {"testrequest": json};
                 // alert(JSON.stringify(testRequestJSONObject));
                    console.log(test_request_type);
                          $.ajax({
                    type: "POST",
                    url: 'test_request_progress_controller/UpdateTestRequest',
                    data: {'testrequest': testRequestJSONObject}, success: function (output) {
                     alert("Successfully Updated");
                        // window.setTimeout("alert('Successfully Updated');", 1);
                         window.setTimeout('location.reload()', 500);
                    }
                });   
                

        
       

           
        });

  
</script>
<!--
<div class="row">                                        
                                        <div class="col-sm-2">  <Img src = "http://localhost/Others/PRi/lims_new/assets/img/user2-160x160.jpg"/>
                                aaa             <Img src = "<?php
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
-->
 
 <!--
                                   <div class="row">                                        
                                        <div class="col-sm-6" id="img_1">  
                                            <Img src = "<?php 
                                                echo BASE_URL('/assets/img/barcode.jpg')                                                     
                                                 ?>" >
                                            <p style="text-align: center"><?php echo $specBarcodeID ?></p>    
                                        </div>
<!--                                        <div class="col-sm-6" id="img_2"> 
                                            <Img src = "<?php 
                                                echo BASE_URL('/assets/img/barcode.jpg')                                                     
                                                 ?>" >
                                                 
                                        </div> -->
                                    </div> 
                                    <div class="row">                                        
<!--                                        <div class="col-sm-6" id="img_3"> 
                                            <Img src = "<?php 
                                                echo BASE_URL('/assets/img/barcode.jpg')                                                     
                                                 ?>" >
                                                
                                        </div>-->
<!--                                        <div class="col-sm-6" id="img_4"> 
                                            <Img src = "<?php 
                                                echo BASE_URL('/assets/img/barcode.jpg')                                                     
                                                 ?>" >
                                                
                                        </div> -->
                                    </div> 
