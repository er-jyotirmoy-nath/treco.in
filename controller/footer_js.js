var contact_app = angular.module('footermodule',[]);

contact_app.factory('footerService', ['$http', function($http){
	return {
		manage_footer: function(data){
			return $http.post('model/footer_manage_class.php', data, {
				tranformRequest:angular.identity,
				headers:{
					"Content-Type":undefined,
					"Process-Data":false
				}
			});
		},
		manage_address: function(data){
			return $http.post('web-admin/admin/php/contactus_class.php', data, {
				tranformRequest:angular.identity,
				headers:{
					"Content-Type":undefined,
					"Process-Data":false
				}
			});
		}
	};
}]);

contact_app.controller('footerCtrl', ['$scope','footerService', function($scope,footerService){
	var get_data = {"getdata":'yes'};
	 footerService.manage_footer(JSON.stringify(get_data)).success(function(response){
		var get_about_us = response.substr(0,350)+"....";
		$scope.about_message = get_about_us;
	});
	var fs2 = new FormData();
	fs2.append("getdata","getdata");
	footerService.manage_address(fs2).success(function(response){
		
		$scope.conemail = response[0].emailid;
		$scope.comnumber = response[0].phonenumber;
		$scope.conwebsite = response[0].website;
		$scope.confacebook = response[0].facebook;
		$scope.conlinkedin = response[0].linkedin;
		$scope.contweeter =  response[0].twitter;
		$scope.congogleplus = response[0].googleplus;
		$scope.conaddress = response[0].address;
	});
}]);

contact_app.directive('smFooter', function(){
	// Runs during compile
	return {
		// name: '',
		// priority: 1,
		// terminal: true,
		// scope: {}, // {} = isolate, true = child, false/undefined = no change
		// controller: function($scope, $element, $attrs, $transclude) {},
		// require: 'ngModel', // Array = multiple requires, ? = optional, ^ = check parent elements
		// restrict: 'A', // E = Element, A = Attribute, C = Class, M = Comment
		// template: '',
		// templateUrl: '',
		// replace: true,
		// transclude: true,
		// compile: function(tElement, tAttrs, function transclude(function(scope, cloneLinkingFn){ return function linking(scope, elm, attrs){}})),
		
	};
});