<?php require_once 'model/solutions_model.php'; ?>   
<div class="inner-hght">
            <solution-image prodsection="security"></solution-image>
        </div>

        <div class="container srv" ng-controller="securityCtrl">
            <div class="row">
                <?php $new_page->getEntrancePage('security'); ?>
                 <?php
                if (!empty($_SESSION["selectedprods"]) && isset($_SESSION["selectedprods"])) {
                    # code...
                    foreach ( $_SESSION["selectedprods"] as $items) {
                        # code...
                        echo "<a href=\"\" class=\"btn btn-xl\" style=\"margin-top:5px;\" >".$items."</a>&nbsp;&nbsp;";
                    }
                }
                 ?>
            <product-listing filter="filter_prod" products="products"></product-listing>
            </div>
        </div>

        <p>&nbsp;</p>