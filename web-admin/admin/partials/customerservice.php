<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Add Smotik Communities</div>

                <div class="panel-options">
                </div>
            </div>
            <div class="panel-body">
                <div id="rootwizard">

                    <form class="form-horizontal" role="form" method="post" name="set_communities">
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="control-label">Comunity Description</label><br>
                            
                             <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel" required="required"></textarea>

                            
                        </div>

                <button type="button" class="btn btn-primary" ng-click="save_comm()" ng-disabled="set_communities.$invalid"><i class="fa fa-save"></i>
                            Save</button>
                            </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Community Images </div>
    </div>
    <div class="panel-body">

        <form class="form-inline" role="form">
                            
                                <fieldset>
                                    <div class="form-group col-sm-3">
                                        <label class="sr-only" for="exampleInputEmail2">Community Images</label>
                                        <input type="file"  file-model="comm_image_1"  required="required" >
                                    </div>
                                    
                                   
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </fieldset>
                                
                            </form>

    </div>
</div>