<div class="modal-header">
    <h3 class="modal-title">
        Please Give us your Details
    </h3>
</div>
<div class="modal-body">
    
    <style type="text/css">
    	.red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
	padding: 10px 40px 60px;
	margin: 10px 0px 60px;
	border: 1px solid GREY;
	}
    </style>

    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                   
    				<div class="form-group">
						<input type="text" class="form-control" id="name" ng-model="contact_name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" ng-model="contact_email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" ng-model="contact_mobile" placeholder="Mobile Number" required>
					</div>
					<ul class="fa-ul">
						<li ng-repeat="item in selectedproducts"><i class="fa-li fa fa-check-square" style="    color: #fed136;"></i>
							{{item.prod_name}}
						</li>
					
					 
					  
					</ul>
        <span class="pull-left">{{res_message}}</span>    
        <button type="button" id="submit" name="submit" ng-click="sendresponse()" class="btn btn-primary pull-right">Submit Form</button>

        </form>
    </div>

</div>
<div class="modal-footer">
   
</div>
