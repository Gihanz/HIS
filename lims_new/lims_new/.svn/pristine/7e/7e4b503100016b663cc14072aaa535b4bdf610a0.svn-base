<script>
$(document).ready( function () {
    $('#tbl_1').DataTable({
		"dom": 'T<"clear">lfrtip'
	});
} );
</script>
<div class="col-md-12">
	<!-- general form elements -->
	<div class="box box-primary">
		<div class="box-header">
		  <h3 class="box-title">Quick Example</h3>
		</div><!-- /.box-header -->
	<!-- Custom Tabs -->
	<div class="nav-tabs-custom">
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#tab_1" data-toggle="tab">OPD</a></li>
          <li><a href="#tab_2" data-toggle="tab">PCU</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab_1">
				<table class="table table-hover" id="tbl_1">
					<thead>
					<tr>
						<th>Action</th>
						<th>Request ID</th>
						<th>Test ID</th>
						<th>Patient ID</th>
						<th>Lab Name</th>
					   <!-- <th>WCOP ID</th>-->
						<th>Comment</th>
						<th>Priority</th>
						<th>Status</th>
						<th>Req.Date</th>
						<th>Due Date</th>
						<th>Req.person</th>
						<!--<th>Sample center</th>-->
					</tr>
					</thead>
					<tbody>
					<?php
					date_default_timezone_set("Asia/Colombo");
					foreach ($Requests as $value) {
						$action = "";
						switch ($value->status) {
							case "Sample Required":
								$action = anchor(base_url().'specimen_info/index/ReqID/'.$value->labTestRequest_ID.'/TestID/'.$value->ftest_ID->test_ID.'/PID/'.$value->fpatient_ID->patientID, '<i class="text-primary"> Add Sample Details');
								break;
							case "Sample Collected":
								$action = anchor(base_url().'test_results/index/ReqID/'.$value->labTestRequest_ID.'/TestID/'.$value->ftest_ID->test_ID.'/PID/'.$value->fpatient_ID->patientID, '<i class="text-warning"> Add Results');
								break;
							case "Report Issued":
								$action .= anchor(base_url().'report_view/index/ReqID/'.$value->labTestRequest_ID.'/TestID/'.$value->ftest_ID->test_ID.'/PID/'.$value->fpatient_ID->patientID, '<i class="text-success"> View Report', array('target' => '_blank'));                            
								$action .= " & ";
								$action .= anchor(base_url().'specimen_info/index/ReqID/'.$value->labTestRequest_ID.'/TestID/'.$value->ftest_ID->test_ID.'/PID/'.$value->fpatient_ID->patientID.'/status/complete', '<i class="text-success"> View Sample Details');
								break;
							default:
								break;
						}
						?>
						<tr id="<?php echo $value->ftest_ID->test_ID; ?>">
							<td><?php echo $action;?></td>
							<td><?php echo $value->labTestRequest_ID; ?></td>
							<td><?php echo $value->ftest_ID->test_IDName.$value->ftest_ID->test_ID; ?></td>
							<td><?php echo $value->fpatient_ID->patientID; ?></td>
							<td><?php echo $value->flab_ID->lab_Name; ?></td>
							<td><?php echo $value->comment; ?></td>
							<td><?php echo $value->priority; ?></td>
							<td><?php echo $value->status; ?></td>
							<td><?php echo $value->test_RequestDate; ?></td>
							<td><?php echo $value->test_DueDate; ?></td>
							<td><?php echo $value->ftest_RequestPerson->userName; ?></td>
						</tr>
					<?php
					}
					?>
					</tbody>
			 </table>
			</div><!-- /.tab-pane -->
			<div class="tab-pane" id="tab_2">
				<table class="table table-hover">
				<tbody>
					<tr>
						<th>Action</th>
						<th>Request ID</th>
						<th>Test ID</th>
						<th>Patient ID</th>
						<th>Lab Name</th>
					   <!-- <th>WCOP ID</th>-->
						<th>Comment</th>
						<th>Priority</th>
						<th>Status</th>
						<th>Req.Date</th>
						<th>Due Date</th>
						<th>Req.person</th>
						<!--<th>Sample center</th>-->
					</tr>
					<?php
					date_default_timezone_set("Asia/Colombo");
					foreach ($Requests as $value) {
						$action = "";
						switch ($value->status) {
							case "Sample Required":
								$action = anchor(base_url().'specimen_info/index/ReqID/'.$value->labTestRequest_ID.'/TestID/'.$value->ftest_ID->test_ID.'/PID/'.$value->fpatient_ID->patientID, '<i class="text-primary"> Add Sample Details');
								break;
							case "Sample Collected":
								$action = anchor(base_url().'test_results/index/ReqID/'.$value->labTestRequest_ID.'/TestID/'.$value->ftest_ID->test_ID.'/PID/'.$value->fpatient_ID->patientID, '<i class="text-warning"> Add Results');
								break;
							case "Report Issued":
								$action .= anchor(base_url().'report_view/index/ReqID/'.$value->labTestRequest_ID.'/TestID/'.$value->ftest_ID->test_ID.'/PID/'.$value->fpatient_ID->patientID, '<i class="text-success"> View Report', array('target' => '_blank'));                            
								$action .= " & ";
								$action .= anchor(base_url().'specimen_info/index/ReqID/'.$value->labTestRequest_ID.'/TestID/'.$value->ftest_ID->test_ID.'/PID/'.$value->fpatient_ID->patientID.'/status/complete', '<i class="text-success"> View Sample Details');
								break;
							default:
								break;
						}
						?>
						<tr id="<?php echo $value->ftest_ID->test_ID; ?>">
							<td><?php echo $action;?></td>
							<td><?php echo $value->labTestRequest_ID; ?></td>
							<td><?php echo $value->ftest_ID->test_IDName.$value->ftest_ID->test_ID; ?></td>
							<td><?php echo $value->fpatient_ID->patientID; ?></td>
							<td><?php echo $value->flab_ID->lab_Name; ?></td>
							<!--<td><?php /*echo $value->wardCOP_ID; */?></td>-->
							<td><?php echo $value->comment; ?></td>
							<td><?php echo $value->priority; ?></td>
							<td><?php echo $value->status; ?></td>
							<td><?php echo date("Y-m-d ", $value->test_RequestDate/1000); ?></td>
							<td><?php echo date("Y-m-d ", $value->test_DueDate/1000); ?></td>
							<td><?php echo $value->ftest_RequestPerson->userName; ?></td>
							<!--<td><?php /*echo $value->fsample_CenterID->sampleCenter_ID; */?></td>-->
						</tr>

					<?php
					}

					?>
				</tbody>
				</table>
			</div><!-- /.tab-pane -->
		</div><!-- /.tab-content -->
	</div><!-- nav-tabs-custom -->
</div>