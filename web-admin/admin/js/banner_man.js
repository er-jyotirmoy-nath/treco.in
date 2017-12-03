$("#upload_data").on('submit', (function (e) {
    e.preventDefault();
    if($("#banner_image").val() == "" || $("#banner_title").val()==""){
    	alert("Please select a banner and set the title");
    	return false;
    }
    $.ajax({
        url: "banner_man_class.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
            $("#upload_res").html(response);
        	console.log(response);
        	$("#upload_data")[0].reset();
        	get_banner_details();
        },
        error: function () {}
    });
}));

$(document).ready(function(){
	get_banner_details();
});

var get_banner_details = function(){
	$('#example').DataTable().fnDestroy();
	$.get('banner_man_class.php',{load_data:"get"}).done(function(response){
		$('#table_data').html(response);
		$('#example').dataTable();
	});
};

$(document.body).on("click","#del_banner",function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $.post("banner_man_class.php",{id:id,delete_ban:"delete"}).done(function(response){
        if(response.indexOf("Done") !== -1){
                  get_banner_details();  
           }
    });
});