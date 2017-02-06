<?php
$query_result1 = $obj_app->select_all_published_product();
$published_slider_result = $obj_app->select_all_published_slider();
?>

<section class="foods_menu_top_area" style="background: url(assets/front_end/images/new/gallery.jpg) no-repeat scroll center center / cover  rgba(0, 0, 0, 0);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="bread_top_box">                    
                    <h2>Gallery</h2>
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
                        <li class="active"><a href="gallery.php">Gallery</a></li>
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
                        <?php while ($slider_info = mysqli_fetch_assoc($published_slider_result)) { ?>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="main_cat_item">
                                    <div class="item">
                                        <div class="item-img">
                                            <img src="assets/<?php echo $slider_info['slider_image']; ?>" alt="" style="height: 300px; width: 550px; " />
                                        </div>
                                        <div class="item-sub">
                                            <a href=""><h5><?php echo $slider_info['slider_name']; ?></h5></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php while ($product_info = mysqli_fetch_assoc($query_result1)) { ?>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="main_cat_item">
                                    <div class="item">
                                        <div class="item-img">
                                            <img src="assets/<?php echo $product_info['product_image']; ?>" alt="" style="height: 300px; width: 550px; " />
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