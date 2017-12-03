var contentapp = angular.module("blogmodule",[]);
contentapp.factory("blognewsService",['$http','$q',function($http,$q){
    var factory = {};
    factory.getNewsBlogs = function(send_data){
        var q = $q.defer();
        $http.post("model/blognews.php",send_data).success(function(response){
            q.resolve(response);
        }).error(function(error){
            q.reject(error);
        });
        return q.promise;
    };
    return factory;

}]);


contentapp.controller("blogdetailsCtrl",['$scope','blognewsService',function($scope,blognewsService){
    var url = window.location.search;
    var searcstr = url.split('?');
    var searchparam = searcstr[1];
    if(searchparam !== undefined){
        if(searchparam.indexOf("news_id") !== -1){
            var checkid = searchparam.split('=');
            var id = checkid[1];
            var send_data = {get_det:"news",id:id};
            blognewsService.getNewsBlogs(JSON.stringify(send_data)).then(function(response){
                $scope.pagecontent = response[0];
            },function(error){
                console.log(error);
            });
        }
        else if(searchparam.indexOf("blog_id") !== -1){
            var checkid = searchparam.split('=');
            var id = checkid[1];
            var send_data = {get_det:"blogs",id:id};
            blognewsService.getNewsBlogs(JSON.stringify(send_data)).then(function(response){
                $scope.pagecontent = response[0];
            },function(error){
                console.log(error);
            });
    }
}
    else{
        window.location.replace('index.php');
    }
    
}]);