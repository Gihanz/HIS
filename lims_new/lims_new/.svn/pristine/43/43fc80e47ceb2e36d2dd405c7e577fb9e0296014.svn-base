<?php
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
    <link href="<?php echo base_url('assets/css/report.css'); ?>" rel="stylesheet" type="text/css" />
</head>
<body role="document">
<div class="container">
    <div class="col-md-12">
        <div class="row text-center">
            <img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/Others/PRi/lims_new/assets/img/mri_logo.png';?>" style="padding: 10px;width:200px;height: auto;">
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
            <table class='table borderless table-condensed'>
                <tr>
                    <td style="width: 50%;">
                        <table class="table">
                            <tr>
                                <td>
                                    <label class="col-sm-5">Patient</label>
                                </td>
                                <td>
                                    <label class="col-sm-7"><?php echo $results[0]->name; ?></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="col-sm-6">Date of Birth</label>
                                </td>
                                <td>
                                    <label class="col-sm-6"><?php echo date('m/d/Y', $results[0]->birthday); ?></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="col-sm-5">Patient</label>
                                </td>
                                <td>
                                    <label class="col-sm-7"><?php echo $results[0]->name; ?></label>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 50%;">
                        <table class="table">
                            <tr>
                                <td>
                                    <label class="col-sm-5">Lab Name</label>
                                </td>
                                <td>
                                    <label class="col-sm-7"><?php echo $results[0]->laboratory_name; ?></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="col-sm-5">Hospital</label>
                                </td>
                                <td>
                                    <label class="col-sm-7"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tbody>
                    <tr>
                        <th></th>
                        <th>Result</th>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $results[0]->test_full_name; ?>
                        </td>
                        <td>
                            <?php if($results[0]->result_value==1) {echo'Positive';} else { echo 'Negative'; } ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>