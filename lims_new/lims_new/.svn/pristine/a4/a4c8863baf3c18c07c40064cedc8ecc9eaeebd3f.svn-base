<section class="content">
    <form class="form-horizontal" id="specimen_frm" role="form" action="<?php echo base_url(); ?>mri_specimen_barcode_generate" method="POST">   
        <div class="box box-primary"> 

            <div class="box-header with-border">
                <h3 class="box-title">Specimen Barcode Generate</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div><!-- /.box-header -->


            <div class="box-body">       
                <div class="box box-solid">
                    <div class="box-header with-border"> <div class="col-md-2">
  <label for="ReqIDRange" class="col-sm-4 control-label">ReqID Range </label></div> 
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Start  ReqID eg:1A" id="reqIDStart" name="reqIDStart"> 

                        </div> 

                        <div class="col-md-3">
                            <input type="text" class="form-control"  placeholder=" End Req ID eg:3A" id="reqIDEnd" name="reqIDEnd">  
                        </div> 

                        <div class="col-md-3">
                            <button  class="btn btn-info" type="submit" id="btn_search"><i class="fa fa-search"></i>Search</button>    
                            <button  class="btn btn-info" type="clear" id="clearButton"><i class="fa fa-clear"></i>Clear</button>          
                        </div> 
                        <div class="col-md-1"> </div>                   

                    </div>

                    <div class="box-body">
                        <div class="right_content">          
                            <?php
                            if (isset($specimens)) {
                            ?> 
                                <?php
                                foreach ($specimens as $value) {
                                ?> 


                                    <div class="form-group " id="<?php 
                                     if ($value->mriSpecimen!= null) {
                                    echo $value->mriSpecimen->specimenId;
                                    }else {
                                      echo ""; 
                                    }
                                     ?>" name="<?php 
                                    if ($value->mriSpecimen!= null) {
                                    echo $value->mriSpecimen->specimenId; 
                                  }else {
                                     echo ""; 
                                  }
                                    ?>">              
                                        <div class="col-sm-2"> 
        



         <!-- <Img src = "<?php $specIDS = $value->specimenId;
                            $ReqIDs = $value->mriTestRequest->mriPatient->name;
                            $code = $specIDS . $ReqIDs;
                            echo SITE_URL(); ?>/mri_specimen_barcode_generate/barcode/<?php echo $code; ?>" > -->
                                            <Img src = "<?php
                                            if ($value->mriSpecimen != null) {
                                                $specIDS = $value->mriSpecimen->specimenId;
                                                $ReqIDs = $value->mriPatient->name;
                                                $codes = str_replace(' ', '', $ReqIDs);
                                                //change 29 03 16
                                               // $code = $specIDS . '_' . $codes;
                                                $code = $specIDS;
                                                /* $url = SITE_URL();?>/mri_specimen_barcode_generate/barcode/<?php echo $code ; */
                                                echo SITE_URL();
                                                ?>/mri_specimen_barcode_generate/barcode/<?php
                                         echo $code;
                                         //  $NewUrl = urldecode($url);
                                         //  echo $NewUrl;
                                     }
                                     ?>" >

                      <!-- <img src="<?php echo base_url(); ?>assets/img/barcode.jpg" style="width:200px;"/>
                      <div class="form-group ">
                      <label style="position: absolute; left: 99px;"><?php echo $value->specimenId ?></label><br />
                     <label style="position: absolute; left: 50px;"><?php echo $value->mriTestRequest->mriPatient->name ?></label> -->
                                        </div>

                                    </div> 


                                    <?php
                                }
                                ?>
    <?php
}
?>   
                        </div>             
                        
                    <div class="box-footer">
                        <div class="form-group ">
                            <button type="button" id="pdf" class="btn btn-primary col-md-offset-9"  value="">Print </button>
                        </div>
                    </div><!-- /.box-footer-->           


                    </div><!-- /.box-body -->



                </div><!-- /.box -->

            </div><!-- ./ row main --> 
    </form> 
</section>

<script xmlns="http://www.w3.org/1999/html">
 $('document').ready(function() { 

    $("#clearButton").click(function() {  

     // $baseurl = <?php echo base_url();?>  
      
      window.location.href = '<?php echo base_url();?>Mri_specimen_barcode_generate';
      return false;
   
    }); 
    $("#btn_search").click(function() {       
   
     $('div#barcode_box').hide();
    
    });
//$('div#hidden').hide();btn_search
  
     $('#pdf').click(function(){
         printDiv();
         function printDiv() {
              var printContents = $(".right_content").html();
              var originalContents = document.body.innerHTML;
              document.body.innerHTML = printContents;
              window.print();
              document.body.innerHTML = originalContents;
         }
    });
});
</script>