/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    get_entrance_content();
    get_usecase_data();
});

$("#entrance_frm").submit(function (e) {
    e.preventDefault();
    $("#save_btn").html('<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i> Saving..');
    $("#save_btn").prop("disabled", true);
    var entrance_text = $('#entrance_text').val();
    var entrance_about = tinymce.get('tinymce_full').getContent();

    $.ajax({
        url: "entrance_class.php",
        method: "POST",
        data: {entrance_text: entrance_text, entrance_about: entrance_about, set_content: "save"},
        beforeSend: function () {},
        afterSend: function () {},
        success: function (response) {
            if (response.indexOf("Done") !== -1) {
                $("#entrance_res").html(response);
                $("#save_btn").html('Save');
                $("#save_btn").prop("disabled", false);
            }
        }
    });
});


var get_entrance_content = function(){
    $.get("entrance_class.php",{get_content:"get"}).done(function(response){
        console.log(response);
        var data = JSON.parse(response);
        console.log(data);
        $('#entrance_text').val(data.subtitle);
        $("#tinymce_full").html(data.content);
    });
}

$("#set_usecases").submit(function(e){
    e.preventDefault();
    $("#case_save_btn").html('<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i> Saving..');
    $("#case_save_btn").prop("disabled", true);
    var formdata = new FormData(this);
    var entrance_usecase_content = $("#entrance_usecase_content").val();
    var company_name = $("#company_name").val();
    var case_vis = ($("#case_vis").is(":checked"))?"1":"0";
    formdata.append('entrance_usecase_content',entrance_usecase_content);
    formdata.append('company_name',company_name);
    formdata.append('case_vis',case_vis);
    formdata.append('entry_type',"save");
     $.ajax({
        url: "entrance_class.php",
        type: "POST",
        data: formdata,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
                console.log(response);
                $("#set_usecases")[0].reset();
                $("#case_save_btn").html('Save');
                $("#case_save_btn").prop("disabled", false);
                $("#entrance_case_res").html(response);
        	get_usecase_data();
        },
        error: function () {}
    });
});

var get_usecase_data = function(){
    $('#example').DataTable().fnDestroy();
    $.get("entrance_class.php",{load_usecases:"get"}).done(function(response){
        $("#usecase_data_table").html(response);
        $('#example').dataTable();
    });
};