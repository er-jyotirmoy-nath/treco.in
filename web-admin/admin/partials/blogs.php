<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Manage Blog</div>

        <div class="panel-options">

        </div>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" name="blog_frm" id="blog_frm" method="post">
            <label>Blog Title:</label>
            <input type="text" class="form-control" id="blog_title" required="required" name="blog_title" ng-model="blog_title">
            <br>

            <label >Blog Image</label>

            <input type="file" class="btn btn-default" id="blog_image" required="required" name="blog_image" file-model="blog_image">
            <img ng-src="{{img_src}}" style="width:50px;height:50px;"/>
            <br>
            <div class="checkbox">
                <label> <input type="checkbox" name="blogs_vis" ng-model="blogs_vis" id="blogs_vis" ng-true-value="'1'" ng-false-value="'0'" > Visible
                </label>
            </div>
            <br>
            <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel_blog"></textarea>

            <br>
            <input type="hidden" name="blog_id" id="blog_id" ng-model="blog_id" />
            <input type="hidden" name="ent_type" id="ent_type" value="save" />
            <button type="submit" ng-click="save_blog()" class="btn btn-primary" ng-disabled="btndis || blog_frm.$invalid" id="save_btn" >{{btntext}}</button>

            <span class="text-success" id="blogs_res"></span>
        </form>
    </div>
</div>
