<div class="col-md-offset-2 col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h4 class="text-center">Report Type :
                <?php
                    $single = $report_data[0][0];
                    $patient = $single->mriTestRequest->mriPatient;
                    if(isset($report_data)){
                        echo $single->mriTestParentFields->mriLaboratoryTest->testFullName;
                    }
                ?>
            </h4>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-sm-4">Patient</label>
                        <label class="col-sm-8"><?php echo $patient->name; ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4">Date of Birth</label>
                        <label class="col-sm-8"><?php echo date('m/d/Y', $patient->birthday); ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4">Patient</label>
                        <label class="col-sm-8"><?php echo $patient->name; ?></label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-sm-4">Lab Name</label>
                        <label class="col-sm-8"><?php echo $single->mriTestRequest->mriLaboratoryTest->mriLaboratory->laboratoryName; ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4">Hospital</label>
                        <label class="col-sm-8"></label>
                    </div>
                </div>
            </div><br/>
            <table class="table">
                <tbody>
                <tr>
                    <th></th>
                    <th>Result</th>
                    <th>Unit</th>
                    <th>Flag</th>
                </tr>
            <?php
            if(isset($report_data)){
                $distinct = array();
                foreach($report_data as $row) {
                    if(!in_array($row[0]->mriTestParentFields->testParentFieldId,$distinct)){
                    ?>
                    <tr>
                        <td><?php echo $row[0]->mriTestParentFields->testParentFieldName;?></td>
                        <td><?php echo $row[0]->parentResultValue;?></td>
                        <td><?php echo $row[1]->unit;?></td>
                        <td>
                            <?php
                                echo getFlag($report_data,$row);
                            ?>
                        </td>
                    </tr>
                    <?php
                        $distinct[] = $row[0]->mriTestParentFields->testParentFieldId;
                    }
                }
            }
            //Clean & Merge
            //echo json_encode($report_data).'<br/>';
            $_report_data = json_decode(json_encode($report_data),true);
            for($i=0;$i<count($_report_data);$i++) {
                unset($_report_data[$i][0]['mriTestParentFields']['mriLaboratoryTest']['mriLaboratory']);
                $tempPatientData = $_report_data[$i][0]['mriTestRequest']['mriPatient'];
                unset($_report_data[$i][0]['mriTestRequest']);
                $tempLabData = $_report_data[$i][0]['mriTestParentFields']['mriLaboratoryTest'];
                unset($_report_data[$i][0]['mriTestParentFields']['mriLaboratoryTest']);
                $_report_data[$i][0] = array_merge($_report_data[$i][0]['mriTestParentFields'],$tempLabData,$tempPatientData);
                $_report_data[$i]= array_merge($_report_data[$i][0],$_report_data[$i][1]);
            }
            //echo json_encode($_report_data);
            ?>
                </tbody>
            </table>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <?php
            $uri_values = $this->uri->uri_to_assoc(3);
            $reqId = $uri_values['req_id'];
            ?>
            <a class="btn btn-primary" href="<?php echo base_url('mri_test_report/pdfGenerate/req_id/').'/'.$reqId;?>">Print</a>
        </div>
    </div><!-- /.box -->


</div>

<?php
function getFlag($table,$row) {
    $gender = $row[0]->mriTestRequest->mriPatient->sex;
    $val = $row[0]->parentResultValue;
    $gen = "";
    if($gender=='M') {
        $gen = "male";
    }elseif($gender=='F') {
        $gen = "female";
    }
    $range = getRangeData($table,$row[0]->mriTestParentFields->testParentFieldId,$gen);
    if($range!=false){
        if($val>$range->maxVal){
            return "High";
        } elseif($val<$range->minVal){
            return "Low";
        } elseif($val==0 || $val==null) {
            return "Result Error";
        } else {
            return "Normal";
        }
    }
}

function getRangeData($table,$parent,$type) {
    foreach($table as $row){
        if($row[1]->ftestParentFieldId==$parent && strtolower($row[1]->gender)==$type){
            return $row[1];
        }
    }
    return false;
}
?>



