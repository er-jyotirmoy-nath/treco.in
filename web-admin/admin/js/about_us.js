$("#aboutus_frm").submit(function (e) {
    e.preventDefault();
    $("#save_btn").html('<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i> Saving..');
    $("#save_btn").prop("disabled", true);
    var subtitle = $('#about_text').val();
    var about_content = tinymce.get('tinymce_full').getContent();
    
    $.ajax({
        url: "aboutus_class.php",
        method: "POST",
        data: {subtitle: subtitle, about_content: about_content, set_content: "save"},
        beforeSend: function () {},
        afterSend: function () {},
        success: function (response) {
            if (response.indexOf("Done") !== -1) {
                $("#about_res").html(response);
                $("#save_btn").html('Save');
                $("#save_btn").prop("disabled", false);
            }
        }
    });
});

$(document).ready(function(){
    get_about_content();
});

var get_about_content = function(){
    $.get("aboutus_class.php",{get_content:"get"}).done(function(response){
        console.log(response);
        var data = JSON.parse(response);
        console.log(data);
        $('#about_text').val(data.subtitle);
        $("#tinymce_full").html(data.content);
    });
}