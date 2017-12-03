myapp.factory("testimonialService",function($http){
    return {
        serviceTestimonial:function(send_data){
            console.log(send_data);
            return $http.post("php/testimonial_man.php",send_data);
        }
    };
});

myapp.controller("testimonialCtrl",["$scope","$http","testimonialService","$state",function($scope,$http,testimonialService,$state){
    var send_data = {get_data:"get"};
    $scope.btntext = "Submit";
        $scope.btndis = false;
    testimonialService.serviceTestimonial(JSON.stringify(send_data)).success(function(response){
        $scope.testimonials = response;
        console.clear();
        console.log(response);
        $scope.gridOptions.data = response;
        //console.log(response);
    });
    

    $scope.gridOptions = {
		enableSorting: true,
		enableFiltering: true,
		paginationPageSizes: [25, 50, 75],
		paginationPageSize: 25,
		columnDefs: [
		  {field: 'id'},
		  {field: 'person'},
		  {field: 'designation'},
		  {name: "View",
		  cellTemplate: "<div style=\"text-align:center;\"><a href=\"\" ng-click='grid.appScope.getDetials(row.entity)'><i class='fa fa-edit'></i> View</a></div>",
		  enableFiltering: false
		},{
		  name:"Delete",
		  cellTemplate:"<div style=\"text-align:center;\"><a href=\"\" ng-click=\"grid.appScope.delete_rec(row.entity.id)\"><span class=\"glyphicon glyphicon-trash\"></span></a></div>",
		  enableFiltering:false
		}],
		onRegisterApi: function(gridApi) {
		  $scope.grid1Api = gridApi;
		}
	  };


      $scope.getDetials = function(details){
          $scope.testimonialdetails = details;
      };

    $scope.save_testimonial = function(){
        $scope.btntext = "Working...";
        $scope.btndis = true;
        var pname =  $scope.pname;
        var pdesignation = $scope.pdesignation;
        var ptestimonial = $scope.ptestimonial;
        var tvisible = $scope.tvisible;
        var save_send_data = {
            pname:pname,
            pdesignation:pdesignation,
            ptestimonial:ptestimonial,
            tvisible:tvisible
        };
        testimonialService.serviceTestimonial(JSON.stringify(save_send_data)).success(function(response){
            $state.reload();
        //console.log(response);
    });
    };
    
    $scope.delete_rec = function(id){
       var del_data = {id:id,delete_test:"delete"};
        //console.log(fd);
        testimonialService.serviceTestimonial(del_data).success(function(response){
            $state.reload();
        });
    };
    
}]);