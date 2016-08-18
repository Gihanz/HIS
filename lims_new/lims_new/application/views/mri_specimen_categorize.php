
<section class="content">

  <div class="row col-md-12">

    <form class="form-horizontal" role="form">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Specimen Categorize</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div><!-- /.box-header -->
          

        <div class="box-body">
          
            <div class="box box-solid">
              <div class="box-header with-border">
                <div class="input-group margin">
<!--                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Catagorize By <span class="fa fa-caret-down"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">By Deparment</a></li>
                        <li><a href="#">By Labs</a></li>
                        <li class="divider"></li>
                       <li><a href="#">By Test Type</a></li>
                        <li><a href="#">By Sample Type</a></li>
                      </ul>
                    </div> /btn-group -->
                    
                    <div class="input-group-btn " >
                        <input type="text" id="system-search" name="q" class="form-control input-mm col-md-8" placeholder="Filter Table by" style="width: 95%"/>
                        <button class="btn btn-info btn-mm" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button> 
                    </div>
                    
                  </div>
              </div>
              <div class="box-body">
                
               
                <div class="row">
                  <table class="table table-bordered table-striped dataTable table-list-search" id="tbl_1">
          <thead>
          <tr>
           <th>Test RequestId</th> 
            <th>Specimen ID</th>
            <th>Specimen CollectedPerson</th>
            <th>Specimen ReceivedDate</th>
             <th>Stored Location</th>
            <th>Stored status</th>
             <!-- <th>WCOP ID</th>-->
            <th>Delivered DepartmentDate</th>
            
            <!--<th>Sample center</th>-->
          </tr>
          </thead>
          <tbody>
          <?php
          date_default_timezone_set("Asia/Colombo");
          foreach ($Specimens as $value) {            
            ?>
<!-- requestId -->
            <!-- <tr id="<?php echo $value->mriTestRequest->testRequestId; ?>">
              <td><?php echo $value->mriTestRequest->testRequestId; ?></td> 
             
              -->
            <tr id="<?php echo $value->mriSpecimen->specimenId; ?>">
               <td><?php echo $value->requestId;  echo $value->testRequestId ;?></td> 
              <td><?php echo $value->mriSpecimen->specimenId; ?></td>
              <td><?php echo $value->mriSpecimen->specimenCollectedPerson; ?></td>
              <td><?php echo date("Y-m-d ", $value->mriSpecimen->specimenReceivedDate/1000); ?></td>
              <td><?php echo $value->mriSpecimen->storedLocation; ?></td>
              <td><?php echo $value->mriSpecimen->storedOrDestroyed; ?></td>
               <td><?php echo date("Y-m-d ", $value->mriSpecimen->specimenDeliveredDepartmentDate/1000); ?></td>

            </tr>
          <?php
          }
          ?>
          </tbody>
       </table>
      </div><!-- /.tab-pane -->




        </div><!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div><!-- /.box-footer-->
      </div> 
            
          
      

        </div><!-- /.box-body -->

           
         
      </div><!-- /.box -->
    </form> 
  </div><!-- ./ row main -->
</section>


<script type="text/javascript">	
$(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

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
});	


 
function myFunction() {
    document.getElementById("myTable").deleteRow(1);

}
 


</script>	