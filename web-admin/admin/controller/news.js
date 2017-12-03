myapp.factory('NewsService', ['$http', function ($http) {
        return {
            set_news: function (send_data) {
                return $http.post("php/news_class.php", send_data, {
                    transformRequest: angular.identity,
                    headers: {
                        "Content-Type": undefined,
                        "Process-Data": false
                    }
                });

            },
            get_news: function (get_data) {
                return $http.post("php/news_class.php", get_data);
            }
        };
    }])
myapp.controller("newsCtrl", ['$scope', '$http', 'NewsService','$state','$log', function ($scope, $http, NewsService,$state,$log) {
        $scope.news_item = "";
        $scope.newsDetails = {};
        $scope.btntext = "Submit";
        $scope.btndis = false;
        console.log("Get News Called");
        var getdata = {
            getnews: "get"
        };
        $scope.gridOptions = {
            enableSorting: true,
            enableFiltering: true,
            paginationPageSizes: [25, 50, 75],
            paginationPageSize: 25,
            columnDefs: [
                {field: 'id'},         
                {field: 'title'},                
                {name: "Edit",
                    cellTemplate: "<div style=\"text-align:center;\"><a href=\"\"  ng-click='grid.appScope.getDetails(row.entity.id)'><i class='fa fa-edit'></i> View</a></div>",
                    enableFiltering: false
                },{
                    name: "Delete",
                    cellTemplate: "<div style=\"text-align:center;\"><a href=\"\"  ng-click='grid.appScope.delete_rec(row.entity.id)'><i class='fa fa-remove'></i> Delete</a></div>",
                    enableFiltering: false
                }],
            onRegisterApi: function (gridApi) {
                $scope.grid1Api = gridApi;
            }
        };
        NewsService.get_news(JSON.stringify(getdata)).success(function (response) {
            console.log(response);
            $scope.news_item = response;
            $scope.gridOptions.data = response;
        });
        $scope.save_news = function () {
            $scope.btntext = "Working...";
            $scope.btndis = true;
            var headline = $scope.news_title;
            var image = $scope.news_image;
            var visibility = $scope.news_vis;
            var content = $scope.tinymceModel;
            var fd = new FormData();
            fd.append('headline', headline);
            fd.append('content', content);
            fd.append('image', image);
            fd.append('visibility', visibility);
            NewsService.set_news(fd).success(function (response) {
                $scope.btntext = "Submit";
                $state.reload();
            });
        };
        $scope.delete_rec = function (id) {
            var fd2 = new FormData();
            fd2.append("delete_news", "delete_news");
            fd2.append("news_id", id);
            NewsService.set_news(fd2).success(function (response) {
                $state.reload();
                alert(response);
            });
        };
        $scope.getDetails = function(id){
            var fd2 = new FormData();
            fd2.append("getnewsdetails","getnewsdetails");
            fd2.append("news_id",id);
            NewsService.set_news(fd2).success(function(response){
                $scope.newsDetails = response[0];
                console.log($scope.newsDetails);
            }).error(function(error){
                $log.error(error);
            });
            
        };
    }]);