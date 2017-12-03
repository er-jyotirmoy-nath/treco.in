
<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Blogs</div>
    </div>
    <div class="panel-body">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody >
              <tr ng-repeat="blog in blogs">
                <td>{{blog.id}}</td>
                <td>{{blog.title}}</td>
                <td><img ng-src={{blog.image_url}} style="width:50px;height:50px"/></td>
                <td>{{blog.date_blog}}</td>
                <td><a ui-sref="edit_blog({blog_id:blog.id})" class="glyphicon glyphicon-edit"></a></td>
                <td><button class="btn btn-primary" ng-click="delete_blog(blog.id)" ><span class="glyphicon glyphicon-trash"></span></button></td>
              </tr>

            </tbody>
        </table>
    </div>
</div>
