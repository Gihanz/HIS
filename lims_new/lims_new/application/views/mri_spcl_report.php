5<?php
/**
 * Created by PhpStorm.
 * User: Dushyantha
 * Date: 11/14/15
 * Time: 2:14 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    
    <style type="text/css">
       .table>tbody>tr>td{
        border-top: 0px !important;
       }     
    </style>
</head>
<body role="document">
<div class="container">
    <div class="col-md-12">
        <div class="row text-center">
         <!-- HARDCORDERD Kanchana 22 05 16  <img src="<?php //echo $_SERVER["DOCUMENT_ROOT"].'/Others/PRi/lims_new/assets/img/mri_logo.png';?>" style="padding: 10px;width:200px;height: auto;"> -->

             
            <h4 class="text-center">Report Type :
             <?php
                if(!isset($results) && !count($results)>0){
                    echo "results not found";
                    exit(1);
               }
                echo $results[0]->test_full_name;
                ?>
            </h4>
        </div>
        <div class="row">
            <table class='table '>
                <tr>
                    <td style="width: 100%;">
                        <table class="table">
                            <tr>
                                <td>
                                    <label class="">MRI ID</label>
                                </td>
                                <td>
                                    <label class=""><?php echo $results[0]->test_request_id; ?></label>
                                </td>
                                <td>
                                    <label class="">Recieve Date</label>
                                </td>
                                <td>
                                    <label class=""><?php echo date('m/d/Y', $results[0]->test_request_date); ?></label>
                                </td>
                                 <td>
                                    <label class="">Report Date</label>
                                </td>
                                <td>
                                    <label class=""><?php echo $results[0]->test_request_date; ?></label>
                                </td>
                            </tr>
                             
                            
                        </table>
                        <table class="table">
                            <tr>
                                <td>
                                    <label class="">Name</label>
                                </td>
                                <td>
                                    <label class=""><?php echo $results[0]->name; ?></label>
                                </td>
                                <td>
                                    <label class="">Age</label>
                                </td>
                                <td>
                                    <label class=""><?php echo $results[0]->age; ?></label>
                                </td>
                                <td>
                                    <label class="">Gender</label>
                                </td>
                                <td>
                                    <label class=""><?php echo $results[0]->sex; ?></label>
                                </td>
                            </tr>

                         </table>
                        <table class="table">
                            <tr>
                                <td><label class="">Hospital</label></td>
                                <td><label class=""><?php echo $results[0]->hospital_name; ?></label></td>
                                <td><label class="">Ward</label></td>
                                <td><label class=""><?php echo $results[0]->ward; ?></label></td>
                                <td><label class="">BHTNo</label></td>
                                <td><label class=""><?php echo $results[0]->bht_no; ?></label></td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td><label class="">Specimen</label></td>
                                <td><label class=""><?php echo $results[0]->specimen_name; ?></label></td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td><label class="">Investigation</label></td>
                                <td><label class="">Result</label></td>
                                <td><label class=""><?php echo $results[0]->test_full_name; ?></label></td>                                
                                <td><label class=""><?php echo $results[0]->result_value; ?></label></td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td><label class="">Comments</label></td>
                                <td><label class=""><?php echo $results[0]->result_comment; ?></label></td>
                            </tr>                                
                        </table>
                    </td>
                     
                </tr>
            </table>
        </div>
        
    </div>
</div>
</body>
</html>