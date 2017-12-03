<div class="page-content container" ng-controller="loginCtrl">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-wrapper">
                <div class="box">
                    <div class="content-wrap">
                        <h6>Sign In</h6>
                        <form name="loginfrm" >
                            <input class="form-control" type="text" placeholder="User Name" ng-model="user.username" name="username" required="required">
                            <input class="form-control" type="password" placeholder="Password" ng-model="user.password" name="password" required="required">
                            <div class="action">
                                <button class="btn btn-primary signup" ng-disabled="loginfrm.$invalid" ng-click="login(user)">Login</button>
                            </div> 
                        </form>
                    </div>
                </div>

                <div class="already">

                </div>
            </div>
        </div>
    </div>
</div>