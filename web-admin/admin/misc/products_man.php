<!DOCTYPE html>
<html>
    <head>
        <title>Smotik Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- jQuery UI -->
        <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <?php include_once 'header_man.php'; ?>
            </div>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-2">
                    <?php include_once('sidebar.php'); ?>
                </div>
                <div class="col-md-10">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <div class="panel-title">Add Products</div>

                                    <div class="panel-options">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="rootwizard">

                                        <form class="form-horizontal" role="form" method="post" id="set_usecases">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Section</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="select_section" name="select_section">
                                                        <option>Select Section</option>
                                                        <option value="section1">Section 1</option>
                                                        <option value="section2">Section 2</option>
                                                        <option value="section3">Section 3</option>
                                                        <option value="section4">Section 4</option>
                                                        
                                                    </select><br>
                                                    <span class="text-info" id="selected_section"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Product</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="company_name" name="prod_name"
                                                           placeholder="Name" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Carousel Image</label>
                                                <div class="col-md-10">

                                                    <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">
                                                    <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">
                                                    <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">

                                                    <p class="help-block" id="entrance_case_res">

                                                    </p>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Product Use</label>
                                                <div class="col-md-10">

                                                    <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">
                                                    <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">
                                                    <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">
                                                    <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">


                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea id="tinymce_full" id="entrance_usecase_content" name="entrance_usecase_content" required="required"></textarea>

                                                </div>
                                            </div>   
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" name="case_vis" checked id="case_vis" value="1"> Visible
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" id="case_save_btn"><i class="fa fa-save"></i>
                                                Submit</button>
                                            <p class="help-block" id="entrance_case_res">

                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title">Cases</div>
                        </div>
                        <div class="panel-body">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody id="usecase_data_table">


                                </tbody>
                            </table>
                        </div>
                    </div>







                </div>
            </div>
        </div>

        <footer>
            <div class="container">

                <div class="copy text-center">
                    Copyright 2014 <a href='#'>Website</a>
                </div>

            </div>
        </footer>

        <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link> 

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- jQuery UI -->
        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
        <script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

        <script src="vendors/ckeditor/ckeditor.js"></script>
        <script src="vendors/ckeditor/adapters/jquery.js"></script>

        <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

        <script src="vendors/datatables/dataTables.bootstrap.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/editors.js"></script>

        <!-- Custom Scripts -->
        <script src="js/entrance_man.js"></script>
        <script>
            $("#select_section").change(function(){
                var val = $(this).val();
                switch(val):{
                    case "":
                        break;
                        case:
                        break;
                        case:
                        break;
                        case:
                        break;
                        case:
                        break;
                    }
                $("#selected_section").html($(this).val());
            });
        </script>
    </body>
</html>