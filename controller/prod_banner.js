
smotik_app.service("productbannerService", ['$q', '$http', function ($q, $http) {
        this.getProdBanner = function (send_data) {
            var q = $q.defer();
            $http.post('model/solutions_model.php', send_data).success(function (response) {
                q.resolve(response);
            }).error(function (error) {
                q.reject(error);
            });
            return q.promise;
        };
    }]);
smotik_app.directive("solutionImage", function () {
    return {
        restrict: "E",
        scope: {
            prodsection: "@"
        },
        controller: function ($scope, productbannerService,$log) {
            var section = $scope.prodsection;
            var send_data = {
                getbanner: "get",
                section: section
            };
            productbannerService.getProdBanner(JSON.stringify(send_data)).then(
                    function (response) {
                       
                        $scope.image_url = response;
                        
                    },
                    function (error) {
                        console.log(error);
                    });
        },
        templateUrl: "view/pages/prod_image.html"
    };
});