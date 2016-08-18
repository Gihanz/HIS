<script>
    $(document).ready(function(){
        //Dropdown Loading Functions
        getAllCategories();
        $('#category').change(function(){
           SubGetCategories();
        });
        $('#SubCategory').change(function(){
            GetSpecimenType();
        });
        $('#Specimen_Type').change(function(){
            GetSpecimenRetentionType();
        });

        $('#Addtest').click(function(e) {
            var new_val = $('#TestName').val();

            var TestName = []
            TestName.push('TN');
            TestName.push(new_val);
            TestName.push($("#category").children(":selected").attr("id"));
            TestName.push($("#SubCategory").children(":selected").attr("id"));
            TestName.push('1');
            if (new_val != '')
            {
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url(); ?>new_test_controller/testName',
                    data: {'TestName': TestName},
                    success: function(output) {

                        $("#category").attr('disabled','disabled');
                        $("#SubCategory").attr('disabled','disabled');
                        $("#Specimen_Type").attr('disabled','disabled');
                        $("#Specimen").attr('disabled','disabled');
                        $("#TestName").attr('disabled','disabled');
                        $("#myAlertSuccess").show();
                    }
                });
            }

            else{
                $("#myAlertError").show();
            }

        });
    });
    function getAllCategories(){
        $.ajax({
            url: '<?php echo base_url(); ?>new_test_controller/GetAllCategories',
            dataType: 'JSON',
            success: function(cat) {
                $("#category").append('<option value="Select category" >select category</option>');
                $.each(cat, function(key, val) {
                    $('#category').append($('<option ID=' + val['category_ID'] + '>').text(val['category_Name']).attr('category_Name', val['category_Name']));
                });
            },
            async: false
        });
    }
    function SubGetCategories()
    {
        $('#SubCategory').empty();
        var caID =$("#category").children(":selected").attr("id");
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>new_test_controller/GetAllSubCategoriesByCategoryID',
            dataType: 'JSON',
            data: {'CategoryID': caID},
            success: function(cat) {
                $.each(cat, function(key, val) {
                    $('#SubCategory').append($('<option ID=' + val['sub_CategoryID'] + '>').text(val['sub_CategoryName']).attr('sub_CategoryName', val['sub_CategoryName']));

                });
                GetSpecimenType();
            },
            async: false
        });
    }
    function GetSpecimenType()
    {
        $('#Specimen_Type').empty();
        var caID =$("#category").children(":selected").attr("id");
        var SubID =$("#SubCategory").children(":selected").attr("id");
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>new_test_controller/GetSpecimenTypesByIDs',
            dataType: 'JSON',
            data: {'CategoryID': caID, 'SubCategoryID': SubID},
            success: function(cat) {
                $.each(cat, function(key, val) {

                    $('#Specimen_Type').append($('<option ID=' + val['specimenType_ID'] + '>').text(val['specimen_TypeName']).attr('specimenType', val['specimen_TypeName']));

                });
                GetSpecimenRetentionType();
            },
            async: false
        });
    }
    function GetSpecimenRetentionType()
    {
        $('#Specimen').empty();
        var caID =$("#category").children(":selected").attr("id");
        var SubID =$("#SubCategory").children(":selected").attr("id");

        $.ajax({
            type:"POST",
            url: '<?php echo base_url(); ?>new_test_controller/GetSpecimenRetTyeps',
            dataType:'JSON',
            data: { 'CategoryID': caID,'SubCategoryID': SubID},
            success: function(cat) {
                alert(JSON.stringify(cat));
                $.each(cat,function(key,val) {

                    $('#Specimen').append($('<option ID='+val['retention_TypeID']+'>').text(val['retention_TypeName']).attr('specimenRetType', val['retention_TypeName']));

                });
            },
            async: false
        });

    }

</script>
<div class="col-md-8 col-md-offset-2">
	<div class="box box-info">
		<div class="box-header">
		  <h3 class="box-title">Add a new Laboratory Test</h3>
		</div>
		<form class="form-horizontal" role="form">
		<div class="box-body">
            <div id="myAlertSuccess" class="alert alert-success alert-dismissable" style="display: none"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Success!</strong></div>
            <div id="myAlertError" class="alert alert-danger alert-dismissable" style="display: none"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong> Error ! </strong></div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="category">Test Category:</label>
				<div class="col-sm-8">
					<select name="category" id="category" class="form-control">
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="email">Test Sub Category:</label>
				<div class="col-sm-8">
					<select id="SubCategory" name="SubCategory" class="form-control"></select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="email">Specimen Type:</label>
				<div class="col-sm-8">
					<select id="Specimen_Type" name="Specimen_Type" class="form-control"></select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="email">Specimen Retention Type:</label>
				<div class="col-sm-8">
					<select id="Specimen" name="Specimen" class="form-control"></select>
				</div>
			</div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email">Test Category:</label>
                <div class="col-sm-8">
                    <input class="form-control" id="TestName" placeholder="Test Name" name="TestName"/>
                </div>
            </div>
		</div>
            <div class="box-footer">
                <button type="button" id="Addtest" class="btn btn-primary">Save Test Details</button>
            </div>
		</form>
	</div>
</div>