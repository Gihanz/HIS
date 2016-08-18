<?php
$array = $this->uri->uri_to_assoc(3);
?>
<!-- Custom JavaScript for the Menu Toggle -->
<script>
    $('document').ready(function() {

        if ($("#myAlertError").is(":visible")) {

            setInterval(function() {
                $("#myAlertError").hide();
            }, 1000);
        }

      

        //$('.combobox').combobox({bsVersion: '3'});




    });


</script>
<style>
.form-horizontal .control-label{
  text-align:left;
}
</style>
<div class="col-md-12">
    <div class="box box-solid box-primary">
        <div class="box-header">
            <h3 class="box-title">Specimen Types</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!--Add New Specimen type-->
        <div class="box-body">
            <div class="row">
                <div class="col-md-6"> 
                <form id="form_ur" class="form-horizontal" role="form" method="POST">
                    <div class="box box-solid box-info">
                        <div class="box-header">
                            <h3 class="box-title">Add New Specimn Types</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body" id="patient_panel">
                            <!--form class="form-horizontal" role="form"-->
                             
                            <div class="form-group">
                                <label for="Fullname" class="col-sm-4 control-label">Specimen Name</label>
                                <div class="col-sm-8">
                                    <input id="test_type_name" name="test_type_name" type="text" class="form-control" placeholder="Text input" value="<?php  ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                 </div>
                                <div class="col-sm-3">
                                 <button id="btn_save_specType" name="btn_save_specType" class="btn btn-info btn-md" text="">Submit</button>
                                </div>
                            </div>
                             
                            <!--/form-->
                        </div><!-- /.box-body -->
                    </div>
                    </form>
                </div>
            </div>
            <!--View Specimen Types-->
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-solid box-info">
                        <div class="box-header">
                            <h3 class="box-title">View Specimn Types</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body" id="patient_panel">
                            <table class="table table-bordered table-striped dataTable" id="tbl_1">
                                <thead>
                                    <tr>                                        
                                        <th>Specimen ID</th>
                                        <th>Specimen Name</th>
                                        <th>Actions</th>                                      
                                    </tr>
                                  </thead>
                                  <!--tbody>
                                        <?php
                                            if(isset($SpecimensType)){
                                        ?>
                                            <?php                                          
                                                date_default_timezone_set("Asia/Colombo");
                                                foreach ($SpecimensType as $value) {            
                                            ?>                                        
                                                <tr  data-toggle="modal" id="<?php echo $value->specimenTypeId; ?>" data-target="#updateSpecimenType"> 

                                                    <td ><div><?php echo $value->specimenTypeId; ?></div></td>
                                                    <td><?php echo $value->specimenName; ?></td>                                          
                                                    <!--td><p data-placement="top" data-toggle="tooltip" title="" data-original-title="Update">
                                                        <button id="specUpdate" class="btn btn-success btn-xs" data-title="UpdateSpecimenType" data-toggle="modal" data-target="#updateSpecimenType">
                                                        <span class="glyphicons glyphicons-circle-arrow-top">Update</span>
                                                        </button></p>
                                                    </td--><!--?php
                                                    echo "<td><p data-placement='top' data-toggle='tooltip' title='updateSpecimenType'><button class='btn btn-primary btn-xs btn_edit' data-title='updateSpecimenType' data-toggle='modal' data-target='#updateSpecimenType' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>";
                                                    ?>
                                                </tr>
                                            <?php
                                             }
                                            ?>
                                        <?php
                                         }
                                        ?>
                                </tbody-->
                                 <tbody>
                            <?php
                            foreach ($SpecimensType as $value) {

                                $specimenTypeId = $value->specimenTypeId;
                                $specimenName = $value->specimenName;
                                
                                echo " <tr id='$specimenTypeId'>";
                                echo " <td > " . $specimenTypeId . "</td>";
                                echo " <td > " . $specimenName . "</td>";

                                echo "<td><p data-placement='top' data-toggle='tooltip' title='updateSpecimenType'><button class='btn btn-primary btn-xs btn_edit' data-title='updateSpecimenType' data-toggle='modal' data-target='#updateSpecimenType' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>";
                            }
                            ?>

                        </tbody>
                           </table>
                        </div><!-- /.box-body -->
                    </div>
                </div>
            </div>       
           
 
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
<!--Update Specimen Type Pop Up-->
<div class="modal fade" id="updateSpecimenType" tabindex="-1" role="dialog" aria-labelledby="addSpecimenType" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Add Specimen Details</h4>
            </div>
            <!--div class="modal-body">
            <row class="col-md-12">
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                 <div id="specTypeID" class="modal-body"></div>
                    <!- <label id="specTypeID" name="specTypeID" class="form-control " data-toggle="tooltip" data-placement="top" title="" data-original-title="labTestRequest ID"> </label>                 -->
                 
                <!--/div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12">            
                    <select id="SpecimenType" name="SpecimenType" class="form-control" data-toggle="tooltip" data-placement="top"  data-original-title="Select SpecimenType" required="">
                       <option selected="selected" value="">Select a Type</option> 
                       <?php foreach ($specimen_types as $item): ?>
                           <option value="<?php echo $item->specimenTypeId; ?>"><?php echo $item->specimenName; ?></option>
                       <?php endforeach; ?>                                 
                    </select>
                </div>
            </row-->
            <div class="modal-body col-sm-12">
                <div class="row col-sm-12 form-horizontal"  >                                    
                    <div class="form-group">
                        <label for="specimen_id_edit" class="col-sm-3 control-label">Specimen ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="specimen_id_edit" name="specimen_id_edit" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="specimen_name_edit" class="col-sm-3 control-label">Specimen Type</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="specimen_name_edit" name="specimen_name_edit">
                        </div>
                    </div>                  
                </div>
            </div>
             

            <div class="modal-footer ">
                <button type="button" id ="specimen_save" name="specimen_save" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Save</button>
            </div>

            </div>
        <!-- /.modal-content --> 
        </div>
      <!-- /.modal-dialog --> 
</div>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/print/jQuery.print.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        //<!--model for insert new specimen type-->

        $('#btn_save_specType').click(function () {

            var json = [];
            var obj = {};

            var test_type_name = $('#test_type_name').val();                
            obj ['specimenName'] = test_type_name;

            json.push(obj)
            var newSpecimenTypeJSONObject = {"NewMriSpecimenType": json};
            //alert(JSON.stringify(newSpecimenTypeJSONObject));
            alert("Successfully Inserted!");
               
            $.ajax({
                type: "POST",
                url: 'mri_specimen_type/insertSpecimenType',
                data: {'specimenType': newSpecimenTypeJSONObject}, 
                success: function (output) {
                    //alert("Successfully Inserted!");
                    document.getElementById("form_ur").reset();
                    location.reload();
                }
            });
        });
/*
         $('#specUpdate').click(function () {
            var aa = $('input[id="addHousemate"]').val();
            alert(aa);

            $("#specTypeID").text($(this).closest('tr').children('td.aa').text());
        });*/

         /*$(function(){
                $('#updateSpecimenType').modal({
                    keyboard: true,
                    backdrop: "static",
                    show:false,

                }).on('show', function(){ //subscribe to show method
                      var getIdFromRow = $(event.target).closest('tr').data('id'); //get the id from tr
                    //make your ajax call populate items or what even you need
                    $(this).find('#specTypeID').html($('<b> Order Id selected: ' + getIdFromRow  + '</b>'))
                });
            });*/
            $('.btn_edit').click(function () {
            var row_id = $(this).closest('tr').attr('id');
            var test_type_name = $(this).closest("tr").find('td:eq(1)').text();

            $('#specimen_id_edit').val(row_id);
            $('#specimen_name_edit').val(test_type_name);
            
            
        });
        
        //  <!--Model for edit specimen type-->
                 
                $('#specimen_save').click(function () {
                    // alert("TEST!");
                var json = [];
                var obj = {};

                var specimenTypeId = $('#specimen_id_edit').val();
                var test_type_name = $('#specimen_name_edit').val();
           
                obj ['specimenTypeId'] = specimenTypeId;
                obj ['specimenName'] = test_type_name;
               
                //json.push(obj)
                var updatedSpecimenTypeJSONObject = {obj};
                //alert(JSON.stringify(updatedSpecimenTypeJSONObject));

                $.ajax({
                    type: "POST",
                    url: 'mri_specimen_type/UpdateSpecimenType',
                    data: {'specimenType': updatedSpecimenTypeJSONObject}, success: function (output) {
                        alert("Successfully Updated!");
                        document.getElementById("form_ur").reset();
                        location.reload();
                    }
                });
          
        });


    });
</script>









