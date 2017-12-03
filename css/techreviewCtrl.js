function awaitingReviewCtrl(techreview) {
    v.push('await');
    var await_review = {get_wait_list: "get"};
    $.when(techreview.techreviewService(JSON.stringify(await_review))).then(
            function (response) {
                $("#app_wait").html(response);
                $('#example').DataTable();
                //v.pop();
                v.pop();
                //console.log(v);
                //$("#loading").hide();
            },
            function (error) {
                console.log(error);
            }
    );



}

function ongoingReviewCtrl(techreview) {
    v.push('current');
    var await_review = {get_current_list: "get"};
    $.when(techreview.techreviewService(JSON.stringify(await_review))).then(
            function (response) {
                $("#app_current").html(response);
                $('#example2').DataTable();
                //v.pop();
                //$("#loading").hide();
                v.pop();
                //console.log(v);
            },
            function (error) {
                console.log(error);
            }
    );
    
}

function completedReviewCtrl(techreview) {
    v.push('completed');
    var await_review = {get_done_list: "get"};
    $.when(techreview.techreviewService(JSON.stringify(await_review))).then(
            function (response) {
                $("#app_done").html(response);
                $('#example3').DataTable();
                //v.pop();
                v.pop();
                //console.log(v);
                $("#loading").hide();
            },
            function (error) {
                console.log(error);
            }
    );
}

function completedReviewCountCtrl(techreview){
    v.push('completedcount');
    var send_request = {get_done_count:"get"};
    $.when(techreview.techreviewService(JSON.stringify(send_request))).then(
            function(response){$("#sac").html(response);},
            function(error){console.log(error);}
            );
}

function averageStartTImeCtrl(techreview){
    v.push('avgtostart');
    var send_request = {get_avg_start:"get"};
    $.when(techreview.techreviewService(JSON.stringify(send_request))).then(
            function(response){response = (response==='...')?"...":Math.floor(response);$("#sot").html(response);},
            function(error){console.log(error);}
            );
}

function avarageCompleteTimeCtrl(techreview){
    v.push('avgtocomplete');
    var send_request = {get_avg_complete:"get"};
    $.when(techreview.techreviewService(JSON.stringify(send_request))).then(
            function(response){response = (response==='...')?"...":Math.floor(response);$("#ar").html(response);},
            function(error){console.log(error);}
    );
}

function checkloginCtrl(techreview){
    var send_request = {check_login:"get"};
    var techreview1 = new Techreview();
    $.when(techreview1.techreviewService(JSON.stringify(send_request))).then(
            function(response){
                var loginresponse = JSON.parse(response);
                if(loginresponse.error === "false" && loginresponse.status==="ok"){
                    
                }
                else{
                    window.location.assign('main.php');
                }
            },
            function(error){console.log();}
    );
    
    
}

function getNotesCtrl(id,modal,techreview){
    var send_request = {get_notes:"get",appid:id};
    var output = $.when(techreview.techreviewService(JSON.stringify(send_request))).then(
            function(response){
                newresponse = JSON.parse(response);
                modal.find("#app_note").val(newresponse.NOTES);
                },
            function(error){console.log(error);}
    );
    console.log(output);
    //return output;
}

function updateSteplistCtrl(step,id,techreview){
    $("#loading").show();
    $('#example').dataTable().fnDestroy();
    $('#example2').dataTable().fnDestroy();
    $('#example3').dataTable().fnDestroy();
    var send_request = {update_step:"set",sample_number:id,step:step};
    $.when(techreview.techreviewService(JSON.stringify(send_request))).then(
            function(response){
                awaitingReviewCtrl();
                ongoingReviewCtrl();
                completedReviewCtrl();
                avarageCompleteTimeCtrl();
                completedReviewCountCtrl();
                averageStartTImeCtrl();
                $('#example').DataTable();
                $("#loading").hide();
            },
            function(error){console.log(error);}
    );
}


