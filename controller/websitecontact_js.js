var contact = angular.module('contactus_module', []);
contact.service("webcontactService", ['$http','$q', function ($http,$q) {
        this.send_message = function (smotik) {
            var q = $q.defer();
            $http.post("model/contactus_model.php", smotik).success(function (response) {
                q.resolve(response);
            }).error(function(error){
                q.reject(error);
            });

            return q.promise;
        };
    }]);
contact.controller('websitecontactCtrl', ['$scope', 'webcontactService', '$q', function ($scope, webcontactService, $q) {
        $scope.webcontactmsg = false;
        $scope.disablebutton = false;
        $scope.output = "";
        $scope.sendbutton = "Send Message";
        $scope.send_web_contact = function (smotik) {
            $scope.sendbutton = "Working...";
            $scope.disablebutton = true;
            webcontactService.send_message(smotik).then(function(response){
                console.log(response);
                $scope.webcontactmsg = true;
                $scope.sendbutton = "Send Message";
                $scope.smotik={};
                $scope.disablebutton = false;
            },
            function(data){
                console.log(data);
            });
        };

    }]);