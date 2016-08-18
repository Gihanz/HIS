<?php
$array = $this->uri->uri_to_assoc(3);
?>

<script>
$('document').ready(function(){
	//$('.combobox').combobox({bsVersion: '2'});

	var reqID = <?php echo $array['ReqID']; ?>;
	var TestID = <?php echo $array['TestID']; ?>;
	var PID = <?php echo $array['PID']; ?>;



	function GetPara(name) {
		var GetReqID = new RegExp('[\?%&]' + name + '=([^%&#]*)').exec(window.location.href);
		if (GetReqID == null) {
			return null;
		} else {
			return GetReqID[1] || 0;
		}
	}

	function GetReport() {

		$.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>report_view/getAllReport',
			data: { 'ID': reqID},
			dataType: 'json',
			success: function (output) { 
				var count = 1;
				 var count1 = 2;
				  var count2 = 7;
				$.each(output, function (key, val) {
					var dob= new Date(val['fTestRequest_ID']['fpatient_ID']['patientDateOfBirth']);
					
					$('#tbdy').append('<tr id=' + count + '><td colspan="7" style="width:179px;">' + val['fParentF_ID']['parent_FieldName'] + '</td><td colspan="7" style="width:179px;">'+count1+'-'+count2+'</td><td colspan="7" style="width:179px;">'+val['mainResult']+'</td></tr>');
					$("#fname").text(val['fTestRequest_ID']['fpatient_ID']['patientFullName']);
					$("#PID").text(val['fTestRequest_ID']['fpatient_ID']['patientID']);
					$("#DOB").text(dob.toDateString());
					$("#gender").text(val['fTestRequest_ID']['fpatient_ID']['patientGender']);
					$("#TestName").text(val['fTestRequest_ID']['ftest_ID']['test_Name']+" "+"REPORT");
					count++;
					count1=count1+4;
					count2=count2+6;
					
				});

			}
		});
	}
	$('#Print').click(function(){
		var docprint = window.open("about:blank", "_blank");
		var oTable = document.getElementById("panel");
		docprint.document.open();
		docprint.document.write('<html><head><title>HIS - Print</title><link href="css/bootstrap.min.css" rel="stylesheet"><link href="css/bootstrap.css" rel="stylesheet"><link href="css/style.css" rel="stylesheet"><link href="css/font-awesome.min.css" rel="stylesheet"><link href="css/bootstrap-combobox.css" rel="stylesheet">');
		docprint.document.write('<style>.dataTables_length,.dataTables_filter,.dataTables_info,.dataTables_paginate { display: none;}</style>');
		docprint.document.write('</head><body><center>');
		docprint.document.write('<div STYLE="width: 60%;">');
		docprint.document.write(oTable.parentNode.innerHTML);
		docprint.document.write('</div>');
		docprint.document.write('</center></body></html>');
		docprint.document.close();
		docprint.print();
		docprint.close();
	});



	$('#Email').click(function(){
		var address=$('#Email_Address').val();
		if(address==''||address==null){
			alert('enter an email address');
		}
		else{
			$.ajax({
				type: "POST",
				url: 'Ajax_calls/Add_sub_Feild_ranges',
				data: {'email': address},
				success: function(output) {
					alert('suddessfully send');
					//$('#save_Range').prop('disabled', true);
				}
			});
		}
	});

	GetReport();




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
			  <div class="text-center"><h3 class="box-title"><strong>BASE HOSPITAL HOMAGAMA</strong></h3></div>
			  <div class="box-tools pull-right">
				<button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
			  </div>
			</div>
			<div class="box-body">
			<div class="col-sm-4">
				<div class="panel panel-primary" style="width: 125%; border-color:#ffffff">

					<div class="panel-body">
						<div class="form-group">
							<label for="PID" class="col-sm-2 control-label" style="width:120px; font-size:12px">Patient
								ID</label>
							<label id="PID" type="text"></label>
							<br><br>
							<label for="fname" class="col-sm-2 control-label" style="width:120px; font-size:12px">Patient
								Name</label>
							<label id="fname" type="text"></label>
							<br><br>
							<label for="DOB" class="col-sm-2 control-label" style="width:120px; font-size:12px">DOB</label>
							<label id="DOB" type="text"></label>
							<br><br>
							<label for="gender" class="col-sm-2 control-label"
								   style="width:120px; font-size:12px">Gender</label>
							<label id="gender" type="text"></label>
							<br><br>
						</div>

					</div>
				</div> <!---Patient Details Panel close ---->

			</div>

			<div class="col-sm-4">
				<div class="panel panel-primary" style="width: 125%; position: absolute; left: 150px; border-color:#ffffff" >

					<div class="panel-body">
						<div class="form-group">
							<label for="ref" class="col-sm-2 control-label" style="width:120px; font-size:12px">Reference
								No</label>
							<label id="ref" type="text">F/57/14</label>
							<br><br>
							<label for="fname" class="col-sm-2 control-label" style="width:120px; font-size:12px">Date
							</label>
							<label id="fname" type="text">26/07/2014</label>
							<br><br>
							<label for="DOB" class="col-sm-2 control-label" style="width:120px; font-size:12px">Ref By</label>
							<label id="DOB" type="text">Dr. C.K.Pathirana</label>
							<br><br>

						</div>

					</div>
				</div> <!---Patient Details Panel close ---->

			</div>

			<table id="tbl" class="table table-bordered  table-hover" border='0' width='50%' align='center'
				   style="border-collapse:collapse " cellspacing='3' cellpadding='5'>
				<tr>
					<th colspan="7" bgcolor="black"
						style="width:179px; text-align:center; color: #797979;background-color:#D8D8D8;  font-size:12px">
						Parameter
					</th>
					<th colspan="7" bgcolor="black"
						style="width:179px; text-align:center; color: #797979;background-color:#D8D8D8;  font-size:12px">
						Reference Range
					</th>
					<th colspan="7" bgcolor="black"
						style="width:179px; text-align:center; color: #797979;background-color:#D8D8D8;  font-size:12px">
						Result
					</th>

					<!--<th colspan="7" bgcolor="black" style="color: #797979;background-color:#D8D8D8;  font-size:12px">Specimen</th> -->
				</tr>

				<tbody id='tbdy'>


				</tbody>


			</table>
			<div class="box-body">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Email Address:</label>
						 <div class="col-sm-6">
						  <input id="Email_Address" type="email" class="form-control" placeholder="Email Address">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="box-footer">
			<button id="Print" type="button" class="btn btn-primary">Print</button>
			<button id="Email" type="button" class="btn btn-primary">Send as a E-Mail</button>
			<button id="PDF" type="button" class="btn btn-primary">Convert to PDF</button>
		</div>
	</div>
</div>