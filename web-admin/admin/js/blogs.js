/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#blog_frm").submit(function(e){
    e.preventDefault();
    $("#save_btn").html('<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i> Saving..');
    $("#save_btn").prop("disabled", true);
    var formdata = new FormData(this);
    var about_content = tinymce.get('tinymce_full').getContent();
    var entry_type = $("#ent_type").val();
    var blog_id = $("#blog_id").val();
    var blogs_vis = ($("#blogs_vis").is(":checked"))?"1":"0";
    formdata.append('text_blog',about_content);
    formdata.append('entry_type',entry_type);
    formdata.append('blog_id',blog_id);
    formdata.append('blogs_vis',blogs_vis);
     $.ajax({
        url: "blogs_man_class.php",
        type: "POST",
        data: formdata,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
                
        	console.log(response);
                $("#blogs_res").html(response);
        	$("#blog_frm")[0].reset();
                $("#tinymce_full").html('');
                $("#save_btn").html('Save');
                $("#save_btn").prop("disabled", false);
        	//get_clients_data();
        },
        error: function () {}
    });
});


var get_blogs_data = function(){
    $('#example').DataTable().fnDestroy();
    $.get("blogs_man_class.php",{load_blogs:"get"}).done(function(response){
        $("#blogs_data_table").html(response);
        $('#example').dataTable();
    });
};

$(document.body).on("click","#del_blog",function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $.post("blogs_man_class.php",{blog_id:id,del_blog:"delete"}).done(function(response){
        if(response.indexOf("Done") !== -1){
                  get_blogs_data();  
           }
    });
});