<script xmlns="http://www.w3.org/1999/html">
 $('document').ready(function() {

  $('#datetimepicker1').datepicker({
            changeMonth: true,
            changeYear: true,
            dateonly: true,
            dateFormat: 'yyyy-mm-dd'
        });
  $('#datetimepicker2').datepicker({
            changeMonth: true,
            changeYear: true,
            dateonly: true,
            dateFormat: 'yyyy-mm-dd'
        });

    $("#clearButton").click(function() {  
      $baseurl = <?php echo base_url();?>  
      alert();   
      window.location.href = '<?php echo base_url();?>Mri_specimen_info_add_bulk';
      return false;
   
    });

   /* $("#clearButton").click(function() {       
      window.location.href = 'http://localhost/lims_new_my/Specimen_info_add_bulk';
      return false;
   
    });*/

    $("#btn_search").click(function() {       
     $('div#barcode_box').hide();
   
    });
//$('div#hidden').hide();btn_search

});
</script>

<section class="content">

  <div class="row col-md-12">

    <form class="form-horizontal" id="specimen_frm" role="form" action="<?php echo base_url();?>Mri_specimen_info_add_bulk" method="POST">   
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Sample Details Add</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div><!-- /.box-header -->
          

        <div class="box-body">       
            <div class="box box-solid">
              <div class="box-header with-border">
              
                <div class="col-md-4">
                  <input type="text" class="form-control" placeholder="Search By ReqID" id="reqIDStart" name="reqIDStart"> 
                  
                </div> 
               
                <div class="col-md-4">
                  <input type="text" class="form-control"  placeholder="ReqID End" id="reqIDEnd" name="reqIDEnd"> 
                </div> 
              
                <div class="col-md-4">
                  <button  class="btn btn-info" type="submit" id="btn_search"><i class="fa fa-search"></i>Search</button>    
                  <button  class="btn btn-info" type="clear" id="clearButton"><i class="fa fa-clear"></i>Clear</button>          
                </div> 
                <div class="col-md-1"> </div>
 </form>                     
               
              </div>
              <div class="box-body">
                <?php 
                  if(isset($specimens) ){
                ?> 
                <?php 
                 foreach ($specimens as $value) {
                  $count=0;
                 ?> 

                <table class="table table-bordered">
                  <tr>
                    <td><label id="ReqID" name="ReqID" class="form-control" data-toggle="tooltip" data-placement="top" title="" data-original-title="labTestRequest ID"><?php echo $value->labTestRequest_ID;  ?> </label></td>
                    <td><select id="SpecimenType" name="SpecimenType" class="form-control" required="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select SpecimenType">
                           <option selected="selected" value="">Select a Type</option>
                           <?php foreach ($specimen_types as $item): ?>
                               <option value="<?php echo $item->specimenType_ID; ?>"><?php echo $item->specimen_TypeName; ?></option>
                           <?php endforeach; ?>
                       </select>
                    </td>
                    <td style="width: 240px">
                      <select id="retentionType" name="retentionType" class="form-control" required="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select RetentionType">
                           <option selected="selected" value="">Select a Type</option>
                           <?php foreach ($specimen_retension_types as $item): ?>
                               <option value="<?php echo $item->retention_TypeID; ?>"><?php echo $item->retention_TypeName; ?></option>
                           <?php endforeach; ?>
                      </select>
                    </td>
                    <td><input id="stored_location" name="stored_location" type="text" class="form-control" placeholder="Location"  value="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Stored or Destroyed Location"></td>
                    <td>
                      <div class="radio">
                          <label>
                           <input type="radio"  name="stored_or_destroyed" value="stored" required="" <?php ?>>
                           Stored
                          </label>
                          <label>
                           <input type="radio"  name="stored_or_destroyed" value="destroyed" required="" <?php ?>>
                           Destroyed
                           </label>
                        </div>
                    </td>  
                  </tr>
                  <tr>
                    <td>
                      <input  type="text" placeholder="collected date" id="datetimepicker1" name="collected_date" class="form-control"  value="">
                    </td>
                    <td>
                      <input  type="text" placeholder="delevere department date date" id="datetimepicker2" name="DeparmentDeleveredDate" class="form-control"  value=""/>
                    </td>
                    <td style="width: 240px"><textarea id="remarks" name="remarks" class="form-control" rows="3" cols="100" placeholder="add Remarks"></textarea></td>
                    <td><button type="submit" id="btn_add<?php echo $count;?>" class="btn btn-primary"  value="">Add </button></td>
                    
                  </tr>

                </table>

                <div class="row">
                  <div class="col-md-12">
                    
                <?php
                $count++;               
                    } 
                ?>
                <?php               
                    } 
                ?>

                <div class="row">
                   <div id="response" style="display: none;"></div>
               </div>

              </div><!-- /.box-body -->
              <div class="box-footer">
                Footer
              </div><!-- /.box-footer-->
            </div> 
          
          
            <div class="box" id="barcode_box">
              <div class="box-header with-border">
                <h3 class="box-title">Barcode Generate</h3>
              </div>
              <div class="box-body">
                <?php for ($i=0; $i <1; $i++) {
                 
                 ?>
                    <div class="form-group">              
                      <div class="col-sm-2"> 
                        <img src="<?php echo base_url(); ?>assets/images/barcode.jpg" style="width:200px;"/>
                        <label style="position: absolute; left: 99px;"><?php echo 12+$i?></label>
                      </div>
                    </div>
                <?php } ?>
              </div><!-- /.box-body -->
              <div class="box-footer">
                <div class="form-group ">
                  <button type="button" class="btn btn-primary col-md-offset-9"  value="">Print </button>
                </div>
              </div><!-- /.box-footer-->
            </div> 
         

        </div><!-- /.box-body -->

           
         
      </div><!-- /.box -->
    </form> 
  </div><!-- ./ row main -->
</section>

<script type="text/javascript" src="<?php echo base_url('assets/plugins/print/jQuery.print.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {

      $("#btn_add0").click(function(e){ 
        alert();
        var post_data = $("#specimen_frm").serialize();
         $.ajax({
          type: "POST",
           url: '<?php echo base_url(); ?>mri_specimen_info_add_bulk/addSpecimen',
           data: post_data,
           dataType: 'JSON',
           success: function(output) {
              $("#response").html("Specimen details saved successfully.");
              $("#response").addClass("alert alert-success");
              $("#response").show();
           },
           error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError);
            }

          });
        });

    });
</script>
