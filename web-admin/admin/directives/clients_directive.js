myapp.directive("clientDetails",function() {
    return {
        restrict:"E",
        scope:{
            clientdetails:"="
        },
        template:`<h3>Client Details</h3>
        <label>Id:</label> {{clientdetails.id}}<br>
        <label>Name: </label>  {{clientdetails.name}}<br>
        <label >Image: </label> <br><img ng-src="{{clientdetails.image_url}}" alt="">`
    };
});