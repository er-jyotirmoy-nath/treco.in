<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Security Management</div>

        <div class="panel-options">
            <a data-target="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh" ng-click="refresh()"></i></a>

        </div>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" id="solution_frm" name="solution_frm" method="post">

            <div class="input-group col-lg-6">
                <select ng-model="section_type" class="form-control">
                    <option value="" selected="selected">Select Section</option>
                <option value="entrance" >Entrance Management</option>
                <option value="security">Safety and Security Management</option>
                <option value="smarthome">Smart Home Management</option>
                <option value="music">Music Zoning</option>
                <option value="hospitality">Hospitality Solutions</option>
                <option value="conference">Conference Room Automation Solutions & Systems</option>
                <option value="smartsol">Smart Solutions</option>
                <option value="customerservice">Customer Services</option>
            </select>
                <div class="input-group-btn">
                    <button class="btn btn-default" type="button" ng-click="get_response()">
                        Search
                    </button>
                </div>
            </div><br>
            <label>Subtitle:</label>
            <input type="text" class="form-control" id="solution_text" ng-model="solution_text" name="solution_text" required>
            <br>
            <label >{{section_type | uppercase}} Banner Image</label>
            <input type="file" class="btn btn-default" id="section_image" file-model="section_image"  required="required" name="news_image">
            <br>
            <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel" required></textarea>
            <br>
            <button type="submit" class="btn btn-primary" id="save_btn" ng-click="save_content()" ng-disabled="solution_frm.$invalid || btndis" >
                {{btntext}}</button>

            <span id="text-success" id="solution_res"></span>
        </form>
    </div>
</div>