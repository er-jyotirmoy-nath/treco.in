var myapp = angular.module('smotikapp', ['ui.router', 'ngSanitize', 'ui.tinymce', 'ui.bootstrap', 'bootstrapLightbox','ui.utils',"ui.grid", "ui.grid.pagination"]);

myapp.config(function ($urlRouterProvider, $stateProvider) {
        
    $urlRouterProvider.otherwise('/dashboard');

    $stateProvider.
            state("dashboard", {url: "/dashboard", templateUrl: "partials/main.php", controller: "mainCtrl"})
            .state("news_man", {url: "/news_man", templateUrl: "partials/news.php", controller: "newsCtrl"})
            .state("blogs_man", {url: "/blogs_man", templateUrl: "partials/blogs.php", controller: "blogCtrl"})
            .state("blogs_edit", {url: "/blog_edit", templateUrl: "partials/blog_edit.php", controller: "blogeditCtrl"})
            .state("edit_blog", {url: "/edit_blog/{blog_id}", templateUrl: "partials/blogs.php", controller: "editblogCtrl"})
            .state("clients_man", {url: "/clients_man", templateUrl: "partials/clients.php", controller: "clientsCtrl"})
            .state("community_man", {url: "/community_man", templateUrl: "partials/customerservice.php", controller: "communityCtrl"})
            .state("testimonials_man", {url: "/testimonials_man", templateUrl: "partials/testimonials.php", controller: "testimonialCtrl"})
            .state("products", {url: "/products", templateUrl: "partials/products.php", controller: "productsCtrl"})
            .state("banners_man", {url: "/banners_man", templateUrl: "partials/banners.php", controller: "bannerCtrl"})
            .state("contactus_man", {url: "/contactus_man", templateUrl: "partials/contactus.php", controller: "contactCtrl"})
            .state("aboutus_man", {url: "/aboutus_man", templateUrl: "partials/aboutus.php", controller: "aboutusCtrl"})
            .state("solutions_page_man", {url: "/solutions_page_man", templateUrl: "partials/solutions_man.php", controller: "solutionCtrl"})
            .state("login", {url: '/login', templateUrl: "partials/tpl/login.tpl.php", controller: "loginCtrl"})

});

var myctrl = myapp.controller("trecoCtrl", ['$rootScope','$scope', '$location', 'checkuserloginService', function ($rootScope,$scope, $location, checkuserloginService) {
        $rootScope.location = $location;
        console.log($location.path());
        $scope.logout = function () {
            checkuserloginService.userlogout().success(function (response) {
                if (response.error == "false" && response.status == "logout") {
                    sessionStorage.setItem('showmenu',false);
                    sessionStorage.removeItem('userToken')
                   $location.path('/login');
                }
            });
        };
    }]);


//resolve:{checklogin:myctrl.checklogin}
myapp.run(function ($rootScope, $location, checkuserloginService,$state) {
    var routepermissions = ["/dashboard","/login","/news_man", "/blogs_man", "/blog_edit", "/clients_man", "/testimonials_man", "/products", "/banners_man", "/aboutus_man", "/entrance_man"];
    

    $rootScope.$on("$stateChangeStart", function (event,toState) {
        
        if($location.path() === '/login'){
            
            if(sessionStorage.getItem('userToken')){
                $state.transitionTo('dashboard');
                event.preventDefault();
                //$location.path('/dasboard');
            }
            
        }
        if (routepermissions.indexOf($location.path()) !== -1) {
            console.log($location.path);
            checkuserloginService.checklogin().then(
                    function (response) {
                        
                        if (response.error === "true" && response.status === "failure") {
                            //Here authentication will be implemented
                            //var usertoken = response.userid;
                            //sessionStorage.setItem('usertoken',usertoken); 
                            $state.transitionTo('login');
                            
                            //$location.path('/login');
                        }
                       
                    },
                    function (error) {
                        console.log(error);
                    });

        }
        else{
           
        }
    });
});










