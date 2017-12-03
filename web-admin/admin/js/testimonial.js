$("#testimonial_frm").submit(function(e){
    e.preventDefault();
   
    var serializedata = $(this).serialize();
    $.post("testimonial_man.php",serializedata).done(function(response){
        $("#testi_save").html(response);
        load_testiminials();
    });
});

$(document).ready(function(){
    load_testiminials();
});

var load_testiminials = function(){
    $('#example').DataTable().fnDestroy();
    $.get("testimonial_man.php",{load_testimonial:"get"}).done(function(response){
        $("#testimonial_table").html(response);
        $('#example').dataTable();
    });
};

$(document.body).on("click","#del_testimonial",function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $.post('testimonial_man.php',{id:id,delete_test:"delete"}).done(function(response){
        if(response.indexOf("Done") !== -1){
            load_testiminials();
        }
    });
});