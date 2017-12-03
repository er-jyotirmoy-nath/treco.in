/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#set_clients").on('submit', (function (e) {
    e.preventDefault();
    if($("#client_name").val() == "" || $("#client_image").val()==""){
    	alert("Please select a client image and set the name");
    	return false;
    }
    $.ajax({
        url: "clients_class_man.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
            $("#client_res").html(response);
        	console.log(response);
        	$("#set_clients")[0].reset();
        	get_clients_data();
        },
        error: function () {}
    });
}));

$(document).ready(function(){
    get_clients_data();
});
var get_clients_data = function(){
    $('#example').DataTable().fnDestroy();
    $.get("clients_class_man.php",{load_clients:"get"}).done(function(response){
        $("#clients_data_table").html(response);
        $('#example').dataTable();
    });
};