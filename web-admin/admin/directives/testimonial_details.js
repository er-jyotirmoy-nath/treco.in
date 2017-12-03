myapp.directive("testimonialDetails",function(){
    return{
        restrict:"E",
        scope:{
            testimonialdetails:"="
        },
        template:`<h3>Testimonial Details</h3>
        <label>Id:</label> {{testimonialdetails.id}}<br>
        <label>Person:</label> {{testimonialdetails.person}}<br>
        <label>Designation:</label> {{testimonialdetails.designation}}<br>
        <label>Testimonial:</label><br>
        <p ng-bind-html="testimonialdetails.testimonial"></p>`
    };
    
});