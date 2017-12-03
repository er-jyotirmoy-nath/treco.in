$(document).ready(function(){
            $.post("model/account_login.php",{checklogin:"check"}).done(function(response){
                var responsedata = JSON.parse(response);
                console.log(responsedata.status);
                if(responsedata.error === 'true' && responsedata.status === 'failure'){
                    //window.location.replace("login.html");
                    console.log("notloggedin");
                    document.location = "login.html";
                }
                else{
                    
                }
            });
        });