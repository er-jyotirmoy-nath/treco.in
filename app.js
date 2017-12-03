var smotik_app = angular.module('smotik_app', [
    'ngSanitize',
     'ui.bootstrap',
     'footermodule',
     'solution_module',
     'design_home',
     'contactus_module',
     'footerModule',
     'blogmodule']);

smotik_app.factory('productService', ['$http', function($http) {

    return {

        save_products: function(save_data) {

            return $http.post("web-admin/admin/php/products_class.php", save_data, {

                transformRequest: angular.identity,

                headers: {

                    "Content-Type": undefined,

                    "Process-Data": false

                }

            });

        }

    };

}]);

smotik_app.factory('solutioncontactService', ['$http', function($http) {

    return {};

}]);

smotik_app.controller('submitresponseCtrl', ['$scope', '$http', function($scope, $http) {}]);

smotik_app.controller('entranceCtrl', ['$scope', 'productService', function($scope, productService) {

    $scope.filter_prod = 'entrance';

    var fd2 = new FormData();

    fd2.append("get_products", "get_products");

    productService.save_products(fd2).success(function(response) {

        console.log(response);

        $scope.products = response;

    });

}]);

smotik_app.controller('securityCtrl', ['$scope', 'productService', function($scope, productService) {

    $scope.filter_prod = 'security';

    var fd2 = new FormData();

    fd2.append("get_products", "get_products");

    productService.save_products(fd2).success(function(response) {

        console.log(response);

        $scope.products = response;

    });

}]);

smotik_app.controller('musicCtrl', ['$scope', 'productService', function($scope, productService) {

    $scope.filter_prod = 'music';

    var fd2 = new FormData();

    fd2.append("get_products", "get_products");

    productService.save_products(fd2).success(function(response) {

        console.log(response);

        $scope.products = response;

    });

}]);

smotik_app.controller('hospitalityCtrl', ['$scope', 'productService', function($scope, productService) {

    $scope.filter_prod = 'hospitality';

    var fd2 = new FormData();

    fd2.append("get_products", "get_products");

    productService.save_products(fd2).success(function(response) {

        console.log(response);

        $scope.products = response;

    });

}]);

smotik_app.controller('conferanceCtrl', ['$scope', 'productService', function($scope, productService) {

    $scope.filter_prod = 'conference';

    var fd2 = new FormData();

    fd2.append("get_products", "get_products");

    productService.save_products(fd2).success(function(response) {

        console.log(response);

        $scope.products = response;

    });

}]);

smotik_app.controller('smartsolCtrl', ['$scope', 'productService', function($scope, productService) {

    $scope.filter_prod = 'smartsol';

    var fd2 = new FormData();

    fd2.append("get_products", "get_products");

    productService.save_products(fd2).success(function(response) {

        console.log(response);

        $scope.products = response;

    });

}]);

smotik_app.controller('smartCtrl', ['$scope', 'productService', function($scope, productService) {

    $scope.filter_prod = 'smarthome';

    var fd2 = new FormData();

    fd2.append("get_products", "get_products");

    productService.save_products(fd2).success(function(response) {

        console.log(response);

        $scope.products = response;

    });

}]);



smotik_app.directive('productListing', function() {

    // Runs during compile

    return {

        restrict: 'E',

        scope: {

            filter: "=",

            products: "="

        },

        templateUrl: 'view/pages/product_tmp.html'

    };

});





