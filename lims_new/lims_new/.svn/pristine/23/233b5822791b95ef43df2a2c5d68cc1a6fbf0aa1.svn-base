
<!DOCTYPE html>
<html>
<head>
    <title>HIS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <meta content="width=320px, initial-scale=1, user-scalable=yes" name="viewport" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <!-- Add custom CSS here -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-combobox.css" rel="stylesheet">
    <link href='css/overlaypopup.css' rel='stylesheet' type='text/css'>

    <!--link href="css/font-awesome.css" rel="stylesheet"-->
    <!-- JavaScript -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-combobox.js"></script>
    <script type="text/javascript" src="css/custom.js"></script>


    <!-- Custom JavaScript for the Menu Toggle SubCategory -->
    <script>
        $('document').ready(function(){
                                     
           //Variable to store testName//
           var testName='';
           var testID;
          $("#category").removeAttr('disabled');
            $("#SubCategory").removeAttr('disabled');
            $("#Specimen_Type").removeAttr('disabled');
            $("#Specimen").removeAttr('disabled');
            $("#TestName").removeAttr('disabled');
            
            $("#AddNewCategoryBtn").removeAttr('disabled');
            $("#AddNewSubCategoryBtn").removeAttr('disabled');
            $("#AddNewSpecimenBtn").removeAttr('disabled');
            $("#AddNewSpecimenRetBtn").removeAttr('disabled');
            $("#Addtest").removeAttr('disabled');
            
            
           $('#category').empty();
            $('#newcate_text').val(''); 
            $('#SubCategory').empty();
            $('#newSubCategory_text').val('');
            $('#Specimen_Type').empty();
            $('#neSpecimen_text').val('');
            $('#SpecimenRet_text').val('');
            $('#Duration_text').val('');
            $('#Specimen').empty();
            
            
            $('.combobox').combobox({bsVersion: '2'});
            $('#AddCate').hide();
            $('#AddSubCategory').hide();
            $('#AddSpecimen_div').hide();
            $('#SpecimenRet_div').hide();
            $("#btn_save").hide();
            //$('#tbl').hide();
            $('#adR').hide();


            $('#newcate_text').attr('readonly',false);
            $('#CatBtn').prop('disabled', false);
            $('#newSubCategory_text').attr('readonly',false);
            $('#SubCategoryBtn').prop('disabled', false);
            $('#neSpecimen_text').attr('readonly',false);
            $('#SpecimenBtn').prop('disabled', false);
            $('#SpecimenRet_text').attr('readonly',false);
            $('#duration_text').attr('readonly',false);
            $('#SpecimenRetBtn').prop('disabled', false);
            $('#btn_save').prop('disabled', false);
            $('#save_Range').prop('disabled', false);

            $("#myAlertSuccess").hide();
            $("#myAlertError").hide();
            
            
            
            
            $("#category").val("Select category");

            function removeSuccess(){
                if($("#myAlertSuccess").is(":visible")){
                    setInterval(function() {
                        $("#myAlertSuccess").hide();
                    }, 3000);
                }
            }
            function removeError(){
                if($("#myAlertError").is(":visible")){
                    setInterval(function() {
                        $("#myAlertError").hide();
                    }, 3000);
                }
            }


//Category ID from option -- >
            var idx=0;
            $("#category").change(function() {
                 $('#SubCategory').empty();
                 idx = $(this).children(":selected").attr("id");
                 SubGetCategories();
                 GetSpecimenRetentionType();
            });
//sub Category ID from option -- >           
            var Subcat=0;
            $("#SubCategory").change(function() {                 
                 Subcat = $(this).children(":selected").attr("id");
                 
                 GetSpecimenType();
                 GetSpecimenRetentionType();
            });
            
//sub Cspecimen Type from option -- > 
            var speci=0;
            $("#Specimen_Type").change(function() {                 
                 speci = $(this).children(":selected").attr("id");


                    });

                    function getCategories()
                    {
                        
                        $.ajax({
                            url: 'lab/NewTestController/GetAllCategories',
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

                          var caID =$("#category").children(":selected").attr("id");  
                        $.ajax({
                            type: "POST",
                            url: 'lab/NewTestController/GetAllSubCategoriesByCategoryID',
                            dataType: 'JSON',
                            data: {'CategoryID': caID},
                            success: function(cat) {
                                $.each(cat, function(key, val) {
                                    $('#SubCategory').append($('<option ID=' + val['sub_CategoryID'] + '>').text(val['sub_CategoryName']).attr('sub_CategoryName', val['sub_CategoryName']));

                                });
                            },
                            async: false
                        });


                    }

                    function GetSpecimenType()
                    {

                            var caID =$("#category").children(":selected").attr("id");
                            var SubID =$("#SubCategory").children(":selected").attr("id");
                        $.ajax({
                            type: "POST",
                            url: 'lab/NewTestController/GetSpecimenTypesByIDs',
                            dataType: 'JSON',
                            data: {'CategoryID': caID, 'SubCategoryID': SubID},
                            success: function(cat) {
                                $.each(cat, function(key, val) {

                                    $('#Specimen_Type').append($('<option ID=' + val['specimenType_ID'] + '>').text(val['specimen_TypeName']).attr('specimenType', val['specimen_TypeName']));

                                });
                            },
                            async: false
                        });
                    }
        
                function GetSpecimenRetentionType()
                {
                    var caID =$("#category").children(":selected").attr("id");
                    var SubID =$("#SubCategory").children(":selected").attr("id");

                     $.ajax({ 
                        type:"POST",
                         url: 'lab/NewTestController/GetSpecimenRetTyeps',
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
                
                
              ///Get TestID by testNAme
                function GetIDByTestName()
                {
                    testName = $('#TestName').val();

                    $.ajax({
                        url: 'http://localhost:8080/HIS_API/rest/TestNames/getTestID/' + testName + '',
                        success: function(cat) {
                            $.each(cat, function(key, val) {

                                //alert(val);

                            });
                        },
                        async: false
                    });
                }




                var rangeid;

                //insert new data

                // insert a new category     
                $('#CatBtn').click(function() {
                    var new_val = $('#newcate_text').val();
                    var cate = []
                    cate.push(new_val);
                    cate.push('TC');

                    if (new_val != '')
                    {
                        $.ajax({
                            type: "POST",
                            url: 'lab/NewTestController/addCategory',
                            data: {'addCategory': cate},
                            success: function(output) {
                                $('#category').empty();
                                getCategories();
                                $('#newcate_text').val('');
                                $("#myAlertSuccess").show();
                                removeSuccess();
                            }



                        });
                    }
                    if (new_val == ''){
                        $("#myAlertError").show();
                        removeError();
                    }


                });

                // insert a new sub category    
                $('#SubCategoryBtn').click(function() {
                    
                    
                     var caID =$("#category").children(":selected").attr("id");
                      
                    var new_val = $('#newSubCategory_text').val();
                    var subcate = []
                    subcate.push('SC');
                    subcate.push(new_val);
                    subcate.push(caID);

                    if (new_val != '')
                    {
                        $.ajax({
                            type: "POST",
                            url: 'lab/NewTestController/addSubCategory',
                            data: {'addSubCategory': subcate},
                            success: function(output) {


                                $('#SubCategory').empty();
                                SubGetCategories();
                                $('#newSubCategory_text').val('');
                                $("#myAlertSuccess").show();
                                removeSuccess();
                            }



                        });
                    }
                    if (new_val == ''){
                        $("#myAlertError").show();
                        removeError();
                    }



                });

                $('#SpecimenBtn').click(function() {
                    
                     var caID =$("#category").children(":selected").attr("id");
                     var SubID =$("#SubCategory").children(":selected").attr("id");
                    if (idx == '' && Subcat == '')
                    {
                        //alert('Please select the relevant category and Sub Category')
                        $("#myAlertError").show();
                        removeError();
                    }
                    else {
                        var new_val = $('#neSpecimen_text').val();
                        var speciType = []
                        speciType.push(new_val);
                        speciType.push(caID);
                        speciType.push(SubID);
                        if (new_val != '')
                        {
                            $.ajax({
                                type: "POST",
                                url: 'lab/NewTestController/AddSpecimenType',
                                data: {'speciType': speciType},
                                success: function(output) {
                                    $('#Specimen_Type').empty();
                                    GetSpecimenType();
                                    $('#neSpecimen_text').val('');
                                    $("#myAlertSuccess").show();
                                    removeSuccess();
                                }
                            });
                        }
                        else{
                            $("#myAlertError").show();
                            removeError();
                        }
                    }

                });

                $('#SpecimenRetBtn').click(function() {
                    
                    var caID =$("#category").children(":selected").attr("id");
                    var SubID =$("#SubCategory").children(":selected").attr("id");
                     
                    if (idx == '' && Subcat == '')
                    {
                        alert('Please select the relevant category and Sub Category');
                        $("#myAlertError").show();
                        removeError();
                    }
                    else {
                        var new_val = $('#SpecimenRet_text').val();
                        var duration = $('#Duration_text').val();
                        var speciRetType = []
                        speciRetType.push(new_val);
                        speciRetType.push(duration);
                        speciRetType.push(caID);
                        speciRetType.push(SubID);
                        if (new_val != '')
                        {
                            $.ajax({
                                type: "POST",
                                url: 'lab/NewTestController/SpecimenRetentionType',
                                data: {'speciRetType': speciRetType},
                                success: function(output) {
                                    $('#Specimen').empty();
                                    $('#Specimen').empty();
                                    GetSpecimenRetentionType();
                                    $('#SpecimenRet_text').val('');
                                    $('#Duration_text').val('');
                                    $("#myAlertSuccess").show();
                                    removeSuccess();
                                }
                            });
                        }

                        else{
                            $("#myAlertError").show();
                            removeError();
                        }
                    }
                });


                $('#Addtest').click(function() {


                    var new_val = $('#TestName').val();

                    var TestName = []
                    TestName.push('TN');
                    TestName.push(new_val);
                    TestName.push(idx);
                    TestName.push(Subcat);
                    TestName.push('1');
                    if (new_val != '')
                    {
                        $.ajax({
                            type: "POST",
                            url: 'lab/NewTestController/testName',
                            data: {'TestName': TestName},
                            success: function(output) {

                                $("#category").attr('disabled','disabled');
                                $("#SubCategory").attr('disabled','disabled');
                                $("#Specimen_Type").attr('disabled','disabled');
                                $("#Specimen").attr('disabled','disabled');
                                $("#TestName").attr('disabled','disabled');
                                $("#AddNewCategoryBtn").attr('disabled','disabled');
                                $("#AddNewSubCategoryBtn").attr('disabled','disabled');
                                $("#AddNewSpecimenBtn").attr('disabled','disabled');
                                $("#AddNewSpecimenRetBtn").attr('disabled','disabled');
                                $("#Addtest").attr('disabled','disabled');
                                $("#myAlertSuccess").show();
                                removeSuccess();
                            }
                        });
                    }

                    else{
                        $("#myAlertError").show();
                        removeError();
                    }

                });


                var catname;
                var subcatname;
                $('#category').change(function() {
                    catname = $(this).val();
                });
                $('#SubCategory').change(function() {
                    subcatname = $(this).val();
                });
                $('#btn_save').click(function() {

                    var  MaxParentiD;
                    $.ajax({
                        type: "GET",
                        url: 'lab/NewTestController/GetMaxParentID',
                        async:false,
                        dataType: 'JSON',
                        success: function(output) {
                            MaxParentiD=parseInt(output)+1;
                        }
                    });

                    var MaxTestID=0;
                    $.ajax({
                        type: "GET",
                        url: 'lab/NewTestController/getMaxTestNameID',
                        async:false,
                        dataType: 'JSON',
                        success: function(output) {
                            MaxTestID=parseInt(output);

                        }
                    });

                    var count=MaxParentiD;
                    var json = [];

                    var mainResult;

                    $('#bill_table tbody tr').each(function(i, el){
                        if(count!=0){
                            var val = $.trim($(this).find('#txt'+ count +'').val());

                            var obj = {};

                            obj['parent_FieldName'] = val;
                            obj['fTest_NameID'] = MaxTestID;
                            json.push(obj);
                        }
                        count++;
                    });
                    var myJSONObject = {"parentfileds":json};
                    $.ajax({
                        type: "POST",
                        url: 'lab/NewTestController/AddParentFields',
                        data: {'results':myJSONObject},
                        success: function(output) {
                            $("#myAlertSuccess").show();
                            removeSuccess();
                        }
                    });



                });


                var fdName;
                var fdName2;
                var fdName3;
                var Gender;
                $('#gender-1').change(function() {
                    Gender = $(this).val();

                })

                var Gender2;
                $('#gender-2').change(function() {
                    Gender2 = $(this).val();

                });


                $('#save_Range').click(function() {

                    //alert(JSON.stringify(myJSONObject));
                    var Gender=$('#gender-1 option:selected').text();
                    var Min_Age = $('#minAge').val();
                    var Max_Age = $('#maxAge').val();
                    var unit = $('#unit').val();
                    var Min_Val = $('#minVal').val();
                    var Max_Val = $('#maxVal').val();

                    var data = []
                    data.push(Gender);
                    data.push(Min_Age);
                    data.push(Max_Age);
                    data.push(unit);
                    data.push(Min_Val);
                    data.push(Max_Val);
                    data.push(fdName);
                     alert(data);
                    if (Gender != '' || Min_Age != '' || Max_Age != '' || unit != '' || Min_Val != '' || Max_Val != '')
                    {
                        $.ajax({
                            type: "POST",
                            url: 'lab/NewTestController/Add_ranges',
                            data: {'range': data},
                            success: function(output) {
                                //$('#save_Range').prop('disabled', true);
                                $('#rangeSpan'+fdName).show();
                                
                            }
                        });
                    }
                });


                $('#btn_save2').click(function() {
  
                    var json = [];
                   $('#bill_table2 tr').each(function (i) {
                        
                            var $tds = $(this).find('td'),
                            inputName = $tds.eq(0).text();

                            var obj = {};

                            obj['subtest_FieldName'] = inputName;
                            obj['fPar_Test_FieldID'] = fdName3;
                            json.push(obj);
                        
                       
                    });
                    
                    var myJSONObject = {"subfields":json};
                    $.ajax({
                        type: "POST",
                        url: 'lab/NewTestController/addSubFiedls',
                        data: {'results':myJSONObject},
                        success: function(output) {
                            alert("Sub Fields Added");
                        }
                    });


                });
                
            $('#btn_save_range').click(function() {

                var Gender_2=$('#gender-2 option:selected').text();
                var minage2 = $('#minage2').val();
                var maxage2 = $('#maxage2').val();
                var unit2 = $('#unit2').val();
                var minVal2 = $('#minVal2').val();
                var maxVal2 = $('#maxVal2').val();
                var Max_Val = $('#maxVal').val();

                var data4 = []
                data4.push(Gender_2);
                data4.push(minage2);
                data4.push(maxage2);
                data4.push(unit2);
                data4.push(minVal2);
                data4.push(maxVal2);
                data4.push(fdName2.substr(2));
                
                
                 alert(data4);  
                 if (Gender_2 != '' || minage2 != '' || maxage2 != '' || unit2 != '' || minVal2 != '' || maxVal2 != ''||Max_Val != '')
                 {
                     $.ajax({
                         type: "POST",
                         url: 'lab/NewTestController/AddSubFieldRanges',
                         data: {'data4': data4},
                         success: function(output) {
                         $('#adR').hide();
                     //$('#save_Range').prop('disabled', true);
                     }
                     });
                 }
            });




                var itemCount = 0;
                var objs = [];
                var temp_objs = [];

                $("#add_button").click(function() {


                    var no = /^[0-9]+$/;
                    if($("#name").val().match(no))
                    {
                        $.ajax({
                            type: "GET",
                            url: 'lab/NewTestController/GetMaxParentID',
                            async:false,
                            dataType: 'JSON',
                            success: function(output) {
                                itemCount=parseInt(output)+1;
                                $("#btn_save").show();

                            }
                        });


                        for(var c=1;c<=$("#name").val();c++){

                            var html = "";

                            var obj = {
                                "ROW_ID": itemCount,
                                "NAME": $("#name").val()

                            }

                            // add object
                            objs.push(obj);



                            html = "<tr id='tr" + itemCount + "'><td style='width:500px !important;'><input id='txt" + itemCount + "' type='text' class='form-control'> </td> <td><a href='#Add_Range' class='ss' id='" + itemCount + "'data-toggle='modal'> <button id='rg" + itemCount + "' value='" + obj['NAME'] + "'  class='btn btn-info' title='Add Ranges' data-toggle='tooltip' data-placement='right  ' >Add Ranges</button></a> </td> <td><a href='#AddSub' class='AddSub' id='"+itemCount+ "' data-toggle='modal'> <button id='rg2" + itemCount + "' value='" + obj['NAME'] + "'  class='btn btn-info' title='Add Sub Fields' data-toggle='tooltip' data-placement='right  ' >Add Sub Fields</button></a></td><td style='width:50px !important;'><input class='btn btn-danger' type='button'  id='" + itemCount + "' value='remove'></td> </tr>";

                            $("#bill_table").append(html)
                            itemCount++;
                            // The remove button click
                            $("#" + itemCount).click(function() {
                                var buttonId = $(this).attr("id");

                                //write the logic for removing from the array
                                $("#tr" + buttonId).remove();
                            });
                            $("#rg" + itemCount).click(function() {
                                //fdName = $(this).attr("value");
                                fdName = $("#rg" + itemCount).val();
                               // $('#save_Range').prop('disabled', false);

                            });
                            $(".ss").click(function() {
                                fdName = $(this).attr("Id");

                                /*fdName = $("#rg" + itemCount).val();
                                 $('#save_Range').prop('disabled', false);*/

                            });
                            $(".AddSub").click(function() {
                                fdName3 = $(this).attr("Id");

                                /*fdName = $("#rg" + itemCount).val();
                                 $('#save_Range').prop('disabled', false);*/

                            });
                        }
                    }
                    else
                    {
                        alert("Please the Requied row Count");
                        return false;
                    }

                });

                var itemCount1 = 0;
                var objs1 = [];
                var temp_objs1 = [];

                $("#add_button2").click(function() {

                    var MaxSubID=0;
                    $.ajax({
                            type: "GET",
                            url: 'lab/NewTestController/GetMaxSubFieldID',
                            async:false,
                            dataType: 'JSON',
                            success: function(output) {
                                MaxSubID=parseInt(output)+1;
                                alert(MaxSubID);

                            }
                        });




                    var html = "";

                    var obj1 = {
                        "ROW_ID": MaxSubID,
                        "NAME": $("#name2").val()

                    }

                    // add object
                    objs1.push(obj1);

                    MaxSubID++;
                    // dynamically create rows in the table/////
                    //<a href="#Add_Range" data-toggle="modal"><button class="btn btn-info" title="hello world" data-toggle="tooltip" data-placement="right  " >Add Range</button></a>
                    //html = "<tr id='tr"+ itemCount + "'><td style='width:500px !important;'>"+ obj['NAME'] + "</td> <td><a href='#Add_Range' data-toggle='modal'> <button id='rg" + itemCount + "'  class='btn btn-info' title='Add Ranges' data-toggle='tooltip' data-placement='right  ' >Add Ranges</button></a> </td> <td><input class='btn btn-info' type='button' value='Add Sub Fields'> </td><td style='width:50px !important;'><input class='btn btn-success' type='button'  id='" + itemCount + "' value='remove'></td> </tr>";
//<button id='rg2" + itemCount + "' value='"+obj1['NAME'] +"'  class='btn btn-success' title='Add Ranges' data-placement='right  ' >Add Ranges</button>
                    html = "<tr id='tr2" + MaxSubID + "'><td style='width:500px !important;'>" + obj1['NAME'] + "</td> <td><input class='btn btn-info show-popup' type='button' value='Add Ranges'  id='AR"+MaxSubID+"'  value1='" + obj1['NAME'] + "'  ></td><td style='width:50px !important;'><input class='btn btn-danger' type='button'  id='" + MaxSubID + "' value='remove'></td> </tr>";

                    //add to the table
                    $("#bill_table2").append(html)

                    // The remove button click
                    $("#" + MaxSubID).click(function() {
                        var buttonId = $(this).attr("id");

                        //write the logic for removing from the array
                        $("#tr2" + buttonId).remove();
                    });
                    $("#AR" + MaxSubID).click(function() {
                        fdName2 = $(this).attr("Id");
                        //$('#save_Range').prop('disabled', false);
                        $('#adR').show();

                    });


                });

                getCategories();



            });



    </script>

    <script type="text/javascript">
        function toggle_div_fun(id) {

            var divelement = document.getElementById(id);

            if (divelement.style.display == 'none')
                divelement.style.display = 'block';
            else
                divelement.style.display = 'none';
        }
    </script>

    <!--J Query to add Test Fields-->


</head>
<body>
    <div id="page-wrapper">
        <br><br>
   <div class="row pull-left" STYLE="position:absolute;">
        <div class="col-lg-4 pull-left" style="width: 79%;">
            <div class="panel panel-default" style="width:1141px;">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Add a new Laboratory Test

                </div> 
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-area-chart"></div>

                    <div class="panel-body">     
        
        
        
        
        
        
        
        
        
       
                    <div id="myAlertSuccess" class="alert alert-success "><strong>Success!</strong></div>
                    <div id="myAlertError" class="alert alert-danger"><strong> Error ! </strong></div>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="Category" class="col-sm-4 control-label">Test Category</label>
                                <div class="col-sm-5">
                                    <select id="category" class="form-control">
                                        
                                        
                                    </select> 
                                </div>
                                <div class="col-sm-1">
                                    <button id="AddNewCategoryBtn" onclick="toggle_div_fun('AddCate');" type="button" class="btn btn-info">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                </div>
                                <!-- Add  new Category div-------->
                                <div id="AddCate" class="col-sm-4">
                                    <div id="newCategory" class="col-sm-8">
                                        <input id="newcate_text" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;">
                                    </div>
                                    <div  class="col-sm-1">
                                        <button id="CatBtn" type="button" class="btn btn-success" style="width: 75px;">Add</button>
                                    </div>
                                </div>

                                <!--End of Add  new Category div-------->

                            </div>
                            <div class="form-group">
                                <label for="SubCategory" class="col-sm-4 control-label">Test Sub Category</label>
                                <div class="col-sm-5">
                                    <select id="SubCategory" class="form-control">
                                       
                                    </select>
                                </div>
                                <div class="col-sm-1">
                                    <button id="AddNewSubCategoryBtn" onclick="toggle_div_fun('AddSubCategory');" type="button" class="btn btn-info">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                </div>
                                <!-- Add  new sub Category div-------->
                                <div id="AddSubCategory" class="col-sm-4 ">
                                    <div id="newSubCategory" class="col-sm-8">
                                        <input id="newSubCategory_text" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;">
                                    </div>
                                    <div  class="col-sm-1">
                                        <button id="SubCategoryBtn" type="button" class="btn btn-success" style="width: 75px;">Add</button>
                                    </div>
                                </div>
                                <!--End of Add  new sub Category div-------->

                            </div>
                            <div class="form-group">
                                <label for="TestName" class="col-sm-4 control-label">Test Name</label>
                                <div class="col-sm-5">
                                    <input id="TestName" type="text" class="form-control" placeholder="Text input">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Specimen_Type" class="col-sm-4 control-label">Specimen Type</label>
                                <div class="col-sm-5">
                                    <select id="Specimen_Type" class="form-control">
                                        <option selected="selected" value="">Select Specimen Type</option>
                                        <!--option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option-->
                                    </select>
                                </div>
                                <div class="col-sm-1">
                                    <button id="AddNewSpecimenBtn" onclick="toggle_div_fun('AddSpecimen_div');" type="button" class="btn btn-info">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                </div>

                                <!-- Add  new sub Specimen div-------->
                                <div id="AddSpecimen_div" class="col-sm-4 ">
                                    <div id="newSpecimen" class="col-sm-8">
                                        <input id="neSpecimen_text" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;">
                                    </div>
                                    <div  class="col-sm-1">
                                        <button id="SpecimenBtn" type="button" class="btn btn-success" style="width: 75px;">Add</button>
                                    </div>
                                </div>
                                <!--End of Add  new Specimen div-------->


                            </div>
                            <div class="form-group">
                                <label for="Specimen" class="col-sm-4 control-label">Specimen Retention Type</label>
                                <div class="col-sm-5">
                                    <select id="Specimen" class="form-control">
                                        <option selected="selected" value="">Select Specimen Retention Type</option>
                                        <!--option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option-->
                                    </select>
                                </div>
                                <div class="col-sm-1">
                                    <button id="AddNewSpecimenRetBtn" onclick="toggle_div_fun('SpecimenRet_div');" type="button" class="btn btn-info">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                </div>

                                <!-- Add  new sub Specimen div-------->
                                <div id="SpecimenRet_div" class="col-sm-4 ">

                                    <div id="newSpecimenRet" class="form-group col-sm-8">
                                        <input id="SpecimenRet_text" type="text" class="form-control col-sm-4" placeholder="Spec.ret. type" style="max-width:150px !important;">
                                    </div>


                                    <div id="newSpecimenRet" class="form-group col-sm-8">               
                                        <input id="Duration_text" type="text" class="form-control col-sm-4" placeholder="Duration" style="max-width:150px !important;">
                                    </div>


                                    <div  class="col-sm-1">
                                        <button id="SpecimenRetBtn" type="button" class="btn btn-success" style="width: 75px;">Add</button>
                                    </div>
                                </div>
                                <!-- end of Add  new sub Specimen div-------->

                                <!--Adding test details -->

                            </div>


                        </form>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div id="TestAddBtn" style="margin-left: 360px;" ">
                                    <button id="Addtest" type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-save"></span>
                                        Save Test Details</button>
                                </div>
                            </div>
                        </form>





                        <!--all test Names drop down-->
                        <br>                       
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="testnamelble" class="col-sm-4 control-label">Test Name</label>
                                <div class="col-sm-5">
                                    <label id="testnamelble" class="col-sm-3 control-label"></label>
                                </div>
                            </div>
                        </form>


                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">

                                    <table id="tbl" class="table table-striped  table-hover"  border='0' width='50%' align='center'  style="border-collapse:collapse " cellspacing='3' cellpadding='5'>
                                        <th colspan="7" bgcolor="black" style="color: #797979">Test Fields</th>
                                        <tr>

                                            <td> Name : </td>
                                            <td><input name="name" type="text" id="name" style="width:350px !important;" class="form-control" size="20"/></td>

                                            <td>
                                                <!--add button-->
                                                <button id="add_button" type="button" class="btn btn-info">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                    Add Rows</button>
                                            </td>




                                    </table>
                                    <div id="billing_items_div">

                                        <!--empty table for fields insertion-->
                                        <table class="table table-striped  table-hover"  border='1' id='bill_table'  width='50%' align='center'  style='border-collapse:collapse' cellspacing='3' cellpadding='5'>

                                        </table>


                                        <div id="Add_Range" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content ">
                                                    <div class="modal-header" style="background-color: #428BCA;color: #FFFFFF;">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                        <h4 class="modal-title">New Range Details</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div style="margin-left: 5%">
                                                            <div class="form-group" >
                                                                <label class="col-sm-3 control-label" for="gender-1">Gender</label>
                                                                <div class="col-sm-3">
                                                                    <select id="gender-1" class="col-sm-3 form-control">
                                                                        <option selected="selected" value="">Select Gender</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="unit" class="col-sm-3 control-label">Unit</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" id="unit" placeholder="Unit" name="UNIT">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="minAge" class="col-sm-3 control-label">Min Age</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" id="minAge" placeholder="Min Age" name="minAge">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="maxAge" class="col-sm-3 control-label">Max Age</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" id="maxAge" placeholder="Max Value" name="maxAge">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="minVal" class="col-sm-3 control-label">Min Value</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" id="minVal" placeholder="Min Value" name="minVal">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="maxVal" class="col-sm-3 control-label">Max Value</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" id="maxVal" placeholder="Max Value" name="maxVal">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button id="save_Range" type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div id="AddSub" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                        <h4 class="modal-title">Add Sub Fields</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table>
                                                            <td>

                                                                <table id="tbl2" class="table table-striped  table-hover"  border='0' width='50%' align='center'  style="border-collapse:collapse " cellspacing='3' cellpadding='5'>
                                                                    <th colspan="7" bgcolor="black" style="color: #797979">Test Fields</th>
                                                                    <tr>

                                                                        <td> Name : </td>
                                                                        <td><input name="name" type="text" id="name2" style="width:350px !important;" class="form-control" size="20"/></td>



                                                                        <td><input name="add_button" type="button" id="add_button2" class="btn btn-info" size="20" value="Add" /></td>


                                                                </table>
                                                                <div id="billing_items_div2">


                                                                    <table class="table table-striped  table-hover"  border='1' id='bill_table2'  width='50%' align='center'  style='border-collapse:collapse' cellspacing='3' cellpadding='5'>

                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </table>
                                                    </div>

                                                    <div id="adR" style="margin-left: 10%">
                                                        <div class="form-group" >
                                                            <label class="col-sm-3 control-label" for="gender-2">Gender</label>
                                                            <div class="col-sm-3">
                                                                <select id="gender-2" class="col-sm-2 form-control">
                                                                    <option selected="selected" value="">Select Gender</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="age" class="col-sm-3 control-label">Min Age</label>
                                                            <div class="col-sm-3">
                                                                <input type="text" class="form-control" id="minage2" placeholder="MinAge" name="minAGE">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="age" class="col-sm-3 control-label">Max Age</label>
                                                            <div class="col-sm-3">
                                                                <input type="text" class="form-control" id="maxage2" placeholder="Max Age" name="maxAGE">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="unit" class="col-sm-3 control-label">Unit</label>
                                                            <div class="col-sm-3">
                                                                <input type="text" class="form-control" id="unit2" placeholder="Unit" name="UNIT">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="minVal" class="col-sm-3 control-label">Min Value</label>
                                                            <div class="col-sm-3">
                                                                <input type="text" class="form-control" id="minVal2" placeholder="Min Value" name="minVal">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="maxVal" class="col-sm-3 control-label">Max Value</label>
                                                            <div class="col-sm-3">
                                                                <input type="text" class="form-control" id="maxVal2" placeholder="Max Value" name="maxVal">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="maxVal" class="col-sm-3 control-label"></label>
                                                            <div class="col-sm-3">
                                                                <button id="btn_save_range" type="button" class="btn btn-primary">Save ranges</button>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button id="btn_save2" type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!---Pop up window for add ranges -->
                                    <!--<div id="newSpecimen" class="col-sm-8">
                                        <input id="neSpecimen_text" type="text" class="form-control" placeholder="Text input" style="max-width:202px !important;">
                                    </div>-->
                                    <!---End of Pop up window for add ranges -->

                                    <!-- save button-->
                                    <button id="btn_save" type="button" class="btn btn-success" style="margin-left:905px;">
                                        <span class="glyphicon glyphicon-save"></span>
                                        Save Test Fields</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.row -->
</body>
</html>
