angular.module('footerModule', []).
directive('socialButtons',  function(){
	// Runs during compile
	return {
		scope: {
			confacebook:"=",
			contweeter:"=",
			congogleplus:"=",
			conlinkedin:"="
		},
		restrict: 'E', // E = Element, A = Attribute, C = Class, M = Comment
		templateUrl: 'view/pages/footer-tmpl.html',
		link: function($scope, iElm, iAttrs, controller) {
			
		}
	};
});