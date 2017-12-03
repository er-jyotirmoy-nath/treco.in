

myapp.factory("loginService",function($http,$window){
    return {
        login:function(send_data,scope){
            console.log(send_data);
            var $promise = $http.post("model/account_login.php",send_data);
            $promise.success(function(response){
                if(response.error == "false" && response.status == "ok"){
                    sessionStorage.setItem('userToken',response.token)
                    sessionStorage.setItem('showmenu',true);
                    $window.location.href = ('/web-admin/admin/');
                }
            });
        }
    };
});

myapp.controller("loginCtrl",["$scope","$http","loginService",function($scope,$http,loginService){
        $scope.login_stat = "";
        sessionStorage.setItem('showmenu',false);
        $scope.login = function(user){
            loginService.login(JSON.stringify(user),$scope);
        };
}]);