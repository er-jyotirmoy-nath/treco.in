<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">About Us</div>

        <div class="panel-options">
            <a data-target="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh" ng-click="refresh()"></i></a>
            
        </div>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" id="aboutus_frm" name="aboutus_frm" method="post">
            <label>Subtitle:</label>
            <input type="text" class="form-control" id="about_text" name="about_text" ng-model="about_text" required>
            <br>
            
            <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel" required></textarea>
            <br>
            <button type="submit" class="btn btn-primary" id="save_btn" ng-click="save_content()" ng-disabled="btndis || aboutus_frm.$invalid" >{{btntext}}</button>

            <span id="text-success" id="about_res"></span>
        </form>
    </div>
</div>
