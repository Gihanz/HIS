<!--**
 * Created by PhpStorm.
 * User: Dushyantha
 * Date: 6/14/15
 * Time: 11:37 AM
 *-->
<style>
.well{
    margin-right: -10px !important;
    margin-left: -10px !important;
    border-radius: 0px;
}
</style>
<?php
$uri_values = $this->uri->uri_to_assoc(3);
$testId = $uri_values['testId'];
$reqId = $uri_values['req_id'];
?>
<div class="col-md-8 col-md-offset-2">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Test Results</h3>
        </div><!-- /.box-header -->
        <form class="form-horizontal" id="parentFieldForm" role="form" action="">
        <div class="box-body">

            <div id="main-dynamic-content"></div>

            <div id="message"></div>
            <div id="message2"></div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div><!-- /.box -->
</div>


<script type="text/javascript">
    // magic.js
    $(document).ready(function() {

        getParentFields();

        // process the form
        $('#parentFieldForm').submit(function(e) {
            //post data
            var parentPostData = {reqId:'<?php echo $testId; ?>',fields:[]}; // Array for parent field inputs
            var subPostData = {reqId:'<?php echo $testId; ?>',fields:[]}; // Array for sub field inputs
            var parentSuccess = false;
            var subSuccess = false;

            $(this).find('input[type=text],select').each(function() {
                if($(this).data('type') == "0") { // Parent Field
                    var field = {"id":$(this).data('id'),"value":$(this).val(),"test":$(this).data('test')};
                    parentPostData.fields.push(field);
                } else if($(this).data('type') == "1") {
                    var field = {"id":$(this).data('id'),"value":$(this).val(),"parent":$(this).data('parent')};
                    subPostData.fields.push(field);
                }
            });

            var parentFormURL = "<?php echo base_url('mri_test_results/add_parent_results'); ?>";
            $.ajax(
                {
                    url : parentFormURL,
                    type: "POST",
                    data : parentPostData ,
                    success:function(data, textStatus, jqXHR)
                    {
                        $.post( "<?php echo base_url('mri_test_results/update_request_table'); ?>", { id: "<?php echo $testId; ?>"})
                            .done(function( data ) {
                                //
                            });
                        $('#parentFieldForm').find('input[type=text]').each(function() {
                            $(this).attr("disabled", "disabled");
                        });
                        parentSuccess = true;
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                        //
                    }
                });

            var subFormURL = "<?php echo base_url('mri_test_results/add_sub_results'); ?>";
            $.ajax(
                {
                    url : subFormURL,
                    type: "POST",
                    data : subPostData,
                    success:function(data, textStatus, jqXHR)
                    {
                        subSuccess = true;
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                        //if fails
                    }
                });
            // Should change later :: Dushyantha
            $('#message').html('<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Successfully added results</div>');

            e.preventDefault(); //STOP default action
        });

        function getParentFields() {
            $.ajax(
                {
                    url : '<?php echo base_url('mri_test_results/get_parent_fields'); ?>',
                    type: 'POST',
                    data : {"req_id":'<?php echo $reqId; ?>'},
                    dataType: 'JSON',
                    success:function(data, textStatus, jqXHR)
                    {
                        if(data.success==true) {
                            obj = data.parent_fields;
                            jQuery.each(obj, function(x, val) {
                                console.log(val);
                                var fieldId = val.testParentFieldId;
                                var fieldName = val.testParentFieldName;
                                var testId = val.mriLaboratoryTest.laboratoryTestId;
                                var content = '';
                                content += ('<div class="form-group">');
                                content += ('<label class="control-label col-sm-4" for="email">'+fieldName+'</label>');
                                content += ('<div class="col-sm-8">');
                                content += ('<input type="text" class="form-control" name="'+fieldName.replace(/\s/g, '')+'" data-type="0" data-test="'+testId+'" data-id="'+fieldId+'">');
                                content += ('</div>');
                                content += ('</div>');
                                $('#main-dynamic-content').append(content);

                                getSubFieldData(fieldId);
                            });
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                        //if fails
                    }
                });
        }

        // process the form
        $('#subFieldForm').submit(function(e) {

            var postData = {reqId:'<?php echo $testId; ?>',fields:[]};
            $(this).find('input[type=text],select').each(function() {
                var field = {"id":$(this).data('id'),"value":$(this).val(),"parent":$(this).data('parent')};
                postData.fields.push(field);
            });
            console.log(postData);
            var formURL = $(this).attr("action");
            $.ajax(
                {
                    url : formURL,
                    type: "POST",
                    data : postData,
                    success:function(data, textStatus, jqXHR)
                    {
                        $('#message2').html('<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Successfully added results</div>');
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                        //if fails
                    }
                });
            e.preventDefault(); //STOP default action
        });
    });

    function getSubFieldData(id) {
        $.ajax(
            {
                url : "<?php echo base_url('mri_test_results/get_sub_fields'); ?>",
                type: "POST",
                data : {"parent":id},
                dataType: 'JSON',
                async: false,
                success:function(data, textStatus, jqXHR)
                {
                    if(data.length>0){
                        for(var i=0;i<data.length;i++){
                            var content = '<div class="form-group well">';
                            content += '<label class="control-label col-sm-4">'+data[i][1]+'</label>';
                            content += '<div class="col-sm-8">';
                            content += '<input type="text" data-id="'+ data[i][0] +'" data-type="1" data-parent="'+ data[i][2] +'" name="sub_value['+i+']" class="form-control">';
                            content += '</div></div>';
                            $('#main-dynamic-content').append(content);
                        }
                    } else {
                        //$('#main-dynamic-content').append('<h4>No sub fields available</h4>');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    //
                }
            });
    }

</script>
