  <?php require_once 'model/solutions_model.php'; ?>   
<div class="inner-hght">
    
    <solution-image prodsection="entrance"></solution-image>
        </div>

        <div class="container srv" >
            <div class="row" ng-controller="entranceCtrl">

                <?php $new_page->getEntrancePage('entrance'); ?>
                <?php
                if (!empty($_SESSION["selectedprods"]) && isset($_SESSION["selectedprods"])) {
                    # code...
                    foreach ( $_SESSION["selectedprods"] as $items) {
                        # code...
                        echo "<a href=\"\" class=\"btn btn-xl\" style=\"margin-top:5px;\" >".$items."</a>&nbsp;&nbsp;";
                    }
                }
                 ?>
                <product-listing  products="products" filter="filter_prod"></product-listing>

            </div>
        </div>

        <p>&nbsp;</p>