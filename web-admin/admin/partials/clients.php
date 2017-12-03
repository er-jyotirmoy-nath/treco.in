<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Add Clients</div>


            </div>
            <div class="panel-body">
                <div id="rootwizard">

                    <form class="form-horizontal" role="form" method="post" id="set_clients" name="set_clients">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Clients Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="client_name" name="client_name" ng-model="client_name"
                                       placeholder="Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" class="btn btn-default" id="client_image" name="client_image" file-model="client_image" required>
                                <p class="help-block" id="client_res" required>

                                </p>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label> <input type="checkbox" name="client_vis" id="client_vis" ng-true-value="'1'" ng-false-value="'0'" ng-model="client_vis"> Visible
                                    </label>
                                </div>

                            </div>
                        </div>
                        <button type="submit" ng-click="save_client()" ng-disabled="set_clients.$invalid || btndis" class="btn btn-primary"><i class="fa fa-save"></i>
                            {{btntext}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Clients</div>
    </div>
    <div class="panel-body">
    <div ui-grid="gridOptions" ui-grid-pagination="" class="myGrid"></div>
        <p>
        
        <hr>
        <client-details clientdetails="clientdetails" ng-show="clientdetails.id"></client-details>
        </p>
    </div>
</div>