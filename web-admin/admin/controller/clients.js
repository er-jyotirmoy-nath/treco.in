myapp.controller("clientsCtrl", ["$scope", "$http", "$location","$state", function ($scope, $http, $location, $state) {
	
        $scope.btntext = "Submit";
        $scope.btndis = false;
        $scope.clients = "";
        var get_clients = {get_clients: "get"};
		//$scope.gridOptions.data = [];
		$scope.gridOptions = {
		enableSorting: true,
		enableFiltering: true,
		paginationPageSizes: [25, 50, 75],
		paginationPageSize: 25,
		columnDefs: [
		  {field: 'id'},
		  {field: 'name'},
		  {name:"image",cellTemplate:"<img ng-src=\"{{row.entity.image_url}}\" style=\"width:50px;\"/>", enableFiltering: false},
		  {name: "Edit",
		  cellTemplate: "<div style=\"text-align:center;\"><a href=\"\" ng-click='grid.appScope.getDetials(row.entity)'><i class='fa fa-edit'></i> View</a></div>",
		  enableFiltering: false
		},{
		  name:"Delete",
		  cellTemplate:"<div style=\"text-align:center;\"><a href=\"\" ng-click=\"grid.appScope.delete_client(row.entity.id)\"><span class=\"glyphicon glyphicon-trash\"></span></a></div>",
		  enableFiltering:false
		}],
		onRegisterApi: function(gridApi) {
		  $scope.grid1Api = gridApi;
		}
	  };
        $http.post("php/clients_get.php", JSON.stringify(get_clients)).success(function (response) {
            console.log(response);
			
            $scope.clients = response;
			$scope.gridOptions.data = response;
        });

		
        $scope.save_client = function () {
            $scope.btntext = "Working...";
            $scope.btndis = true;
            var clientname = $scope.client_name;
            var clientimage = $scope.client_image;
            var clientvis = $scope.client_vis;
            var fd = new FormData();
            fd.append('client_name', clientname);
            fd.append('client_image', clientimage);
            fd.append('client_vis', clientvis);
            $http.post("php/clients_class_man.php", fd, {
                transformRequest: angular.identity,
                headers: {'Content-Type': undefined, 'Process-Data': false}
            }).success(function (response) {
                console.log(response);
                $scope.btntext = "Submit";
                $scope.btndis = false;
                $("#set_clients")[0].reset();
                $state.reload();
            });
        };

        $scope.getDetials = function(details){
            $scope.clientdetails = details;
        };

        $scope.delete_client = function (id) {
            var id = id;
            var delete_id = {delete_id: id};
            $http.post("php/clients_get.php", JSON.stringify(delete_id)).success(function (response) {
                console.log(response);
                $state.reload();
            });

        };

        $scope.refresh = function () {
            var get_clients = {get_clients: "get"};
            $http.post("php/clients_get.php", JSON.stringify(get_clients)).success(function (response) {
                console.log(response);
                $scope.clients = response;
            });
        };

    }]);