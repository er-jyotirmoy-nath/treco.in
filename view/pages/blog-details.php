<div class="container inner-hght" ng-controller="blogdetailsCtrl">

<h2 class="page-header" ng-bind-html="pagecontent.title"> </h2>

<div class="row">

<div class="col-lg-8">

<p><i class="fa fa-clock-o"></i> Posted on May 01, 2017 at 10:30 AM</p>

<hr>

<img class="img-responsive" ng-src="web-admin/admin/{{pagecontent.image_url}}" alt="">

<hr>

<p ng-bind-html="pagecontent.content"></p>

<hr>




<hr>

</div>

<div class="col-md-4">

<div class="well">
<h4>Blog Categories</h4>
<div class="row">
<div class="col-lg-12">
<ul class="list-unstyled">
<!--<li><a href="#">Category name will be here</a></li>-->
</ul>
</div>
                        
</div>
</div>



</div>
</div>

</div>
<p>&nbsp;</p>