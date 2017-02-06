<?php
$category_id = $_GET['id'];
$query_result = $obj_app->select_category_info_by_id($category_id);
$category_product_info = mysqli_fetch_assoc($query_result);

$query_result1 = $obj_app->select_all_published_product();
$product_info = mysqli_fetch_assoc($query_result1)


?>

<section class="foods_menu_top_area" style="background: url(assets/<?php echo $product_info['product_image']; ?>) no-repeat scroll center center / cover  rgba(0, 0, 0, 0);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="bread_top_box">
                    <h2><?php echo $category_product_info['category_name']; ?></h2>
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
                        <li class="active"><a href=""><?php echo $category_product_info['category_name']; ?> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="main_category_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="main_category_right cat-2">
                    <div class="row">
                        <?php while ($product_info = mysqli_fetch_assoc($query_result1)) { ?>
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="main_cat_item">
                                    <div class="item">
                                        <div class="item-img">
                                            <img src="assets/<?php echo $product_info['product_image']; ?>" alt="" style="height: 250px; width: 350px; " />
                                            <div class="tr-add-cart">
                                                <ul>
                                                    <li><a class="tr_text" href="product_details.php?id=<?php echo $product_info['product_id']; ?>">Product Details</a></li>
                                                    <li><a class="fa fa-search tr_search" href="product_details.php?id=<?php echo $product_info['product_id']; ?>"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="item-sub">
                                            <a href="product_details.php?id=<?php echo $product_info['product_id']; ?>"><h5><?php echo $product_info['product_name']; ?></h5></a>
                                            <p>BDT <?php echo $product_info['product_price']; ?></p>
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