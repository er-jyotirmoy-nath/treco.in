var app = angular.module('design_home', []);

app.factory('designhomeService', ['$http', function($http){
	return {
		send_lead_info:function(fd){
			return $http.post("model/designhome_model.php", fd, {
				tranformRequest:angular.identity,
				headers:{"Content-Type":undefined,"Process-Data":false}
			});
		}
	};
}])

//Add this file to app.js
app.controller('designhomeCtrl', ['$scope','designhomeService', function($scope,designhomeService){
	$scope.buttonmsg = "Send Request";
	$scope.save_home_det = function(smotik){
		$scope.buttonmsg = '<i class="fa fa-spinner fa-pulse  fa-fw"></i> Working';
		designhomeService.send_lead_info(JSON.stringify(smotik)).success(function(response){
			alert(response);
			$("#designhomefrm")[0].reset();
			$scope.buttonmsg = "Send Request";
		});
	};
}]);