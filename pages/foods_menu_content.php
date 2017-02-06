<?php
$query_result = $obj_app->select_all_published_product();
$product_info = mysqli_fetch_assoc($query_result);
$sub_category_query_result = $obj_app->select_all_published_sub_category_info();
?>


<section class="foods_menu_top_area" style="background: url(assets/front_end/images/new/foods_menu.jpg) no-repeat scroll center center / cover  rgba(0, 0, 0, 0);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="bread_top_box">
                    <h2>OUR Menu</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="breadcumb_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="bread_box">
                    <ul class="breadcumb">
                        <li><a href="index.php">home <span>|</span></a></li>
                        <li><a href="shop.php">Shop <span>|</span></a></li>
                        <li class="active"><a href="foods_menu.php">Our Menu <span>|</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="main_category_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="main_category_left">
                    <div class="panel-group" id="home-accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#home-accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Our Menu
                                        <span class="floatright"><i class="fa fa-minus"></i></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul id="c_tab1">
                                        <?php
                                        while ($sub_category_info = mysqli_fetch_assoc($sub_category_query_result)) {
                                            extract($sub_category_info);
                                            ?>
                                            <li><a href="sub_category.php?id=<?php echo $sub_category_id; ?>"><?php echo $sub_category_name; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="main_category_right">
                    <div class="row">
                        <?php
                        while ($product_info = mysqli_fetch_assoc($query_result)) {
                            extract($product_info);
                            ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="main_cat_item">
                                    <div class="item">
                                        <div class="item-img">
                                            <img src="assets/<?php echo $product_image; ?>" alt="" class="img-responsive" style="height: 250px; width: 100%;"/>
                                        </div>
                                        <div class="item-sub">
                                            <a href="product_details.php?id=<?php echo $product_id; ?>"><h5><?php echo $product_name; ?></h5></a>
                                            <p><big>৳</big> <?php echo $product_price; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="pagi_line"></div>
                            <div class="pagi_ul">
                                <ul id="pagination">
                                    <li><a href="">Previous</a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li><a href="">5 ...</a></li>
                                    <li><a href="">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>       