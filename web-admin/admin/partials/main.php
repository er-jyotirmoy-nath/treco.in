
<div class="row">
    <div class="col-md-6">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">About Us</div>

                <div class="panel-options">
                    <a href="#/aboutus_man" data-rel="collapse"><i class="glyphicon glyphicon-edit"></i></a>
                </div>
            </div>
            <div class="panel-body" ng-bind-html="aboutcontent.content">

            </div>
        </div>

        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Main Logo</div>

                <div class="panel-options">
                    <a href="#/" data-rel="collapse"><i class="glyphicon glyphicon-edit"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <form id="logo_frm">
                    <img src="images/logo_1.png" style="width: 100px;"/><br>
                    <label >Select Logo</label>
                    <input type="file" class="btn btn-default" id="main_logo" file-model="main_logo"  required="required" name="main_logo">
                    <br>
                    <input type="button" class="btn btn-default" ng-click="save_logo()" value="Upload Logo" />
                    <br><small>* Please rename the new logo image to logo_1.png.</small>
                </form>


            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="content-box-header">
                    <div class="panel-title">News and Events</div>

                    <div class="panel-options">
                        <a href="#/news_man" data-rel="collapse"><i class="glyphicon glyphicon-edit"></i></a>
                    </div>
                </div>
                <div class="content-box-large box-with-header">
                    <table class="table table-bordered">
                        <thead>
                        <td>Id</td>
                        <td>Title</td>
                        <td>Content</td>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in newscontent| limitTo:4">
                                <td>{{item.id}}</td>
                                <td>{{item.title}}</td>
                                <td ng-bind-html="item.content"></td>

                            </tr>
                        </tbody>
                    </table>

                    <a href="#/news_man">View More..</a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="content-box-header">
                    <div class="panel-title">Clients</div>

                    <div class="panel-options">
                        <a href="#/clients_man" data-rel="collapse"><i class="glyphicon glyphicon-edit"></i></a>
                    </div>
                </div>
                <div class="content-box-large box-with-header">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in clientscontent| limitTo:4">
                                <td>{{item.id}}</td>
                                <td>{{item.name}}</td>
                                <td> <a ng-click="openLightboxModal($index)">
                                        <img ng-src="{{item.image_url}}" style="width: 50px;height: 50px;" class="img-thumbnail">
                                    </a></td>
                            </tr>

                        </tbody>
                    </table>        
                    <a href="#/clients_man">View More..</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 panel-warning">
        <div class="content-box-header panel-heading">
            <div class="panel-title ">Products and Solutions</div>

            <div class="panel-options">
                <a href="#/products" data-rel="collapse"><i class="glyphicon glyphicon-edit"></i></a>

            </div>
        </div>
        <div class="content-box-large box-with-header">
            <table class="table table-bordered">
                <thead>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Image</th>
                </thead>
                <tbody>
                    <tr ng-repeat="item in productscontents| limitTo:4">
                        <td>{{item.name}}</td>
                        <td>{{item.section}}</td>
                        <td ng-bind-html="item.description"></td>
                        <td><img ng-src="{{item.carousel_1}}" style="width: 50px;height: 50px;"></td>
                    </tr>
                </tbody>
            </table>
            <br /><br />
        </div>
    </div>
</div>


