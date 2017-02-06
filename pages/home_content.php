<?php
$published_slider_result = $obj_app->select_all_published_slider();
$query_result = $obj_app->select_all_published_product();
$breakfast_query_result = $obj_app->select_all_published_breakfast();
$meals_query_result = $obj_app->select_all_published_meals();
$desserts_query_result = $obj_app->select_all_published_desserts();
$beverages_query_result = $obj_app->select_all_published_beverages();
$burgers_query_result = $obj_app->select_all_published_burgers();
$soups_query_result = $obj_app->select_all_published_soups();
$appetizers_query_result = $obj_app->select_all_published_appetizers();
?>

<!-- HOME SLIDER -->
<div class="slider-wrap">
    <div class="fullwidthbanner-container" >
        <div class="fullwidthbanner">
            <ul>
                <?php
                while ($slider_info = mysqli_fetch_assoc($published_slider_result)) {
                    extract($slider_info);
                    ?>
                    <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                        <img src="assets/<?php echo $slider_image; ?>" alt="slide" >

                        <div class="tp-caption large_black sfr" data-x="120" data-y="160" data-speed="1100" data-start="1100" data-easing="easeInOutBack" 
                             style="font-size: 70px; font-weight: 700; text-transform: uppercase; color: #ffffff;font-family: cabin;text-shadow:0px 0px 3px #000;">
                                 <?php echo $slider_text; ?>
                        </div>
                        <div class="tp-caption large_black sfr" data-x="120" data-y="230" data-speed="1100" data-start="1400" data-easing="easeInOutBack"
                             style="font-family: 'Montserrat', sans-serif; font-size: 20px; font-weight: 700; line-height:80px;text-transform: uppercase; color: #ffffff; text-shadow: 0 0 3px #fff">
                                 <?php echo $slider_offer; ?>
                        </div>
                        <div class="tp-caption large_black sfr carousel-caption-inner" data-x="120" data-y="280" data-speed="1100" data-start="1400" data-easing="easeInOutBack"
                             style="">
                            <img src="assets/front_end/images/new/sep-b.png" alt="" />
                        </div>
                        <div class="tp-caption lfb carousel-caption-inner" data-x="120" data-y="310" data-speed="1300" data-start="1700" data-easing="easeInOutBack" 
                             style="font-family: cabin Sans; font-size: 15px; font-weight: bold; text-transform: uppercase; color: #ffffff;">
                                 <?php echo $slider_description; ?>
                        </div>
                        <div class="tp-caption large_black lft" data-x="720" data-y="0" data-speed="1300" data-start="1700" data-easing="easeInOutBack" 
                             style="">
                            <img src="assets/front_end/images/--offer-tag.png" alt="" />
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<!-- HOME SLIDER -->

<div class="call_to_action_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="call_to_action">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single_call_action" id="p">
                                <img src="assets/front_end/images/new/phone.png" alt=""  />
                                <p>+88 01611 78 78 08<br>
                                    Daily 08.00 to 22.00</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single_call_action " id="e">
                                <h3 class="fa fa-envelope-o"></h3>
                                <big>order@nfood.com</big>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single_call_action">
                                <img src="assets/front_end/images/new/world.png" alt="" />
                                <p>Fast delivery across <br>
                                    City</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single_call_action">
                                <img src="assets/front_end/images/new/discount.png" alt="" />
                                <p>10% discount on order<br>
                                    over <big>৳</big> 2000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="promotion_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="promo_inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="promotion_left">
                                <div class="promotion_top">
                                    <div class="images_box">
                                        <img src="assets/front_end/images/new/promo_img1.jpg" alt="" />
                                    </div>
                                    <div class="promo_text">
                                        <h5>Breakfast</h5>
                                        <div class="p_line"></div>
                                        <a href="foods_menu.php">More   <i class="fa fa-caret-right" ></i></a>
                                    </div>
                                    <div class="hover_images">
                                        <img src="assets/front_end/images/new/promo_img11.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="promotion_bottom">
                                    <div class="images_box">
                                        <img src="assets/front_end/images/new/promo_img2.jpg" alt="" />
                                    </div>
                                    <div class="promo_text_bottom">
                                        <h5>Meals</h5>
                                        <div class="p_line"></div>
                                        <a href="foods_menu.php">More  <i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <div class="hover_images_bottom hover_images">
                                        <img src="assets/front_end/images/new/promo_img22.jpg" alt="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="promotion_right">
                                <div class="promotion_bottom promotion_bottom_t">
                                    <div class="images_box">
                                        <img src="assets/front_end/images/new/promo_img3.jpg" alt="" />
                                    </div>
                                    <div class="promo_text promo_text_t">
                                        <h5>Soups & Salads</h5>
                                        <div class="p_line"></div>
                                        <a href="foods_menu.php">More  <i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <div class="hover_images_bottom hover_images">
                                        <img src="assets/front_end/images/new/promo_img33.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="promotion_top promotion_bottom_b">
                                    <div class="images_box">
                                        <img src="assets/front_end/images/new/promo_img4.jpg" alt="" />
                                    </div>
                                    <div class="promo_text_bottom promo_text_b">
                                        <h5>Appetizers</h5>
                                        <div class="p_line"></div>
                                        <a href="foods_menu.php">More  <i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <div class="hover_images">
                                        <img src="assets/front_end/images/new/promo_img44.jpg" alt="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="trending_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="trending_box">
                    <h2>Foods</h2>
                    <div class="multi_line"></div>
                    <div role="tabpanel">           
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#breakfast" aria-controls="home" role="tab" data-toggle="tab">Breakfast  <span>x</span></a></li>
                            <li role="presentation"><a href="#meals" aria-controls="profile" role="tab" data-toggle="tab">Meals <span>x</span></a></li>
                            <li role="presentation"><a href="#desserts" aria-controls="messages" role="tab" data-toggle="tab"> Desserts <span>x</span></a></li>
                            <li role="presentation"><a href="#beverages" aria-controls="settings" role="tab" data-toggle="tab">Beverages </a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="breakfast">
                                <div id="owl-example" class="owl-carousel">
                                    <?php
                                    while ($breakfast_product_info = mysqli_fetch_assoc($breakfast_query_result)) {
                                        extract($breakfast_product_info);
                                        ?>
                                        <div class="item">
                                            <div class="item-img">
                                                <img src="assets/<?php echo $product_image; ?>" alt="" class="img-responsive" style="height: 251px; width: 351px;"/>
                                            </div>
                                            <div class="item-sub">
                                                <a href="product_details.php?id=<?php echo $product_id; ?>"><h5><?php echo $product_name; ?></h5></a>
                                                <p><big>৳</big> <?php echo $product_price; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="meals">
                                <div id="owl-example-two" class="owl-carousel">
                                    <?php
                                    while ($meals_product_info = mysqli_fetch_assoc($meals_query_result)) {
                                        extract($meals_product_info);
                                        ?>
                                        <div class="item">
                                            <div class="item-img">
                                                <img src="assets/<?php echo $product_image; ?>" alt="" class="img-responsive" style="height: 251px; width: 351px;"/>
                                            </div>
                                            <div class="item-sub">
                                                <a href="product_details.php?id=<?php echo $product_id; ?>"><h5><?php echo $product_name; ?></h5></a>
                                                <p><big>৳</big> <?php echo $product_price; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="desserts">
                                <div id="owl-example-three" class="owl-carousel">
                                    <?php
                                    while ($desserts_product_info = mysqli_fetch_assoc($desserts_query_result)) {
                                        extract($desserts_product_info);
                                        ?>
                                        <div class="item">
                                            <div class="item-img">
                                                <img src="assets/<?php echo $product_image; ?>" alt="" class="img-responsive" style="height: 251px; width: 351px;"/>
                                            </div>
                                            <div class="item-sub">
                                                <a href="product_details.php?id=<?php echo $product_id; ?>"><h5><?php echo $product_name; ?></h5></a>
                                                <p><big>৳</big> <?php echo $product_price; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="beverages">
                                <div id="owl-example-four" class="owl-carousel">
                                    <?php
                                    while ($beverages_product_info = mysqli_fetch_assoc($beverages_query_result)) {
                                        extract($beverages_product_info);
                                        ?>
                                        <div class="item">
                                            <div class="item-img">
                                                <img src="assets/<?php echo $product_image; ?>" alt="" class="img-responsive" style="height: 251px; width: 351px;"/>
                                            </div>
                                            <div class="item-sub">
                                                <a href="product_details.php?id=<?php echo $product_id; ?>"><h5><?php echo $product_name; ?></h5></a>
                                                <p><big>৳</big> <?php echo $product_price; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="t_to_b_slider_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="t_to_b_slider">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single_t_to_b_slider">
                                <h3>Burgers & Sandwiches</h3>
                                <div class="multi_line"></div>
                                <div class="single_t_to_b">
                                    <div class="slider8">
                                        <?php
                                        while ($burgers_product_info = mysqli_fetch_assoc($burgers_query_result)) {
                                            extract($burgers_product_info);
                                            ?>
                                            <div class="slide">
                                                <div class="t_to_b_content">
                                                    <div class="t_to_b_img">
                                                        <img src="assets/<?php echo $product_image; ?>" alt="" class="img-responsive" style="height: 79px; width: 100px;"/>
                                                    </div>
                                                    <div class="t_to_b_text">
                                                        <a href="product_details.php?id=<?php echo $product_id; ?>"><p><?php echo $product_name; ?></p></a>
                                                        <div class="t_to_b_dollr"><span><big>৳</big> <?php echo $product_price; ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single_t_to_b_slider">
                                <h3>Soups & Salads</h3>
                                <div class="multi_line"></div>
                                <div class="single_t_to_b">
                                    <div class="slider9">
                                        <?php
                                        while ($soups_product_info = mysqli_fetch_assoc($soups_query_result)) {
                                            extract($soups_product_info);
                                            ?>
                                            <div class="slide">
                                                <div class="t_to_b_content">
                                                    <div class="t_to_b_img">
                                                        <img src="assets/<?php echo $product_image; ?>" alt="" class="img-responsive" style="height: 79px; width: 100px;"/>
                                                    </div>
                                                    <div class="t_to_b_text">
                                                        <a href="product_details.php?id=<?php echo $product_id; ?>"><p><?php echo $product_name; ?></p></a>
                                                        <div class="t_to_b_dollr"><span><big>৳</big> <?php echo $product_price; ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single_t_to_b_slider">
                                <h3>Appetizers</h3>
                                <div class="multi_line"></div>
                                <div class="single_t_to_b">
                                    <div class="slider10">
                                        <?php
                                        while ($appetizers_product_info = mysqli_fetch_assoc($appetizers_query_result)) {
                                            extract($appetizers_product_info);
                                            ?>
                                            <div class="slide">
                                                <div class="t_to_b_content">
                                                    <div class="t_to_b_img">
                                                        <img src="assets/<?php echo $product_image; ?>" alt="" class="img-responsive" style="height: 79px; width: 100px;"/>
                                                    </div>
                                                    <div class="t_to_b_text">
                                                        <a href="product_details.php?id=<?php echo $product_id; ?>"><p><?php echo $product_name; ?></p></a>
                                                        <div class="t_to_b_dollr"><span><big>৳</big> <?php echo $product_price; ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fresh_blog_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="fresh_blog">
                    <h2>fresh from the JOURNAL</h2>
                    <div class="multi_line"></div>

                    <div id="blog-caro" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <div class="fresh_blog_text">
                                            <h2><span>_</span> 13</h2>
                                            <div class="months">
                                                <div class="month_right">
                                                    <p>April 2015 </p>
                                                    <span><i class="fa fa-comment-o"></i>12</span>
                                                </div>
                                                <div class="fresh_blog_bottom_text">
                                                    <h4>trendy cloth designs made from<br> our team</h4>
                                                    <p>Trendy Collection</p>
                                                    <div class="view_post">
                                                        <a class="" href="">view post
                                                            <i class="fa fa-long-arrow-right"></i> 
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                  
                                        <div class="fresh_blog_img">
                                            <img src="assets/front_end/images/new/journal1.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="fresh_blog_text">
                                            <h2><span>_</span> 11</h2>
                                            <div class="months">
                                                <div class="month_right">
                                                    <p>April 2015 </p>
                                                    <span><i class="fa fa-comment-o"></i>12</span>
                                                </div>
                                                <div class="fresh_blog_bottom_text">
                                                    <h4>trendy cloth designs made from<br> our team</h4>
                                                    <p>Trendy Collection</p>
                                                    <div class="view_post">
                                                        <a class="" href="">view post
                                                            <i class="fa fa-long-arrow-right"></i> 
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fresh_blog_img">
                                            <img src="assets/front_end/images/new/journal2.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#blog-caro" role="button" data-slide="prev">
                            <i class='fa fa-angle-left'></i>
                        </a>
                        <a class="right carousel-control" href="#blog-caro" role="button" data-slide="next">
                            <i class='fa fa-angle-right'></i>
                        </a>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="textimonial_box">
                    <img src="assets/front_end/images/msg.png" alt="" />
                    <h2>lovely clients comment</h2>
                    <div class="multi_line"></div>

                    <div id="testi_carosel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#testi_carosel" data-slide-to="0" class="active"></li>
                            <li data-target="#testi_carosel" data-slide-to="1"></li>
                            <li data-target="#testi_carosel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p>It’s really Awesome Theme & specialy made for brand online shopping, so this theme uniqe elements use to create your dream website and help to promote your Product.</p>
                                <div class="client_box">
                                    <img src="assets/front_end/images/client_qoute.png" alt="" />
                                    <div class="client_box_text">
                                        <h4>SAN MICHLE</h4>
                                        <p>DIRECTOR OF EXAMPLE LTD</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <p>It’s really Awesome Theme & specialy made for brand online shopping, so this theme uniqe elements use to create your dream website and help to promote your Product.</p>
                                <div class="client_box">
                                    <img src="assets/front_end/images/client_qoute.png" alt="" />
                                    <div class="client_box_text">
                                        <h4>SAN MICHLE</h4>
                                        <p>DIRECTOR OF EXAMPLE LTD</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <p>It’s really Awesome Theme & specialy made for brand online shopping, so this theme uniqe elements use to create your dream website and help to promote your Product.</p>
                                <div class="client_box">
                                    <img src="assets/front_end/images/client_qoute.png" alt="" />
                                    <div class="client_box_text">
                                        <h4>SAN MICHLE</h4>
                                        <p>DIRECTOR OF EXAMPLE LTD</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="branding_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="branding_box">
                    <div class="branding_box_heading">
                        <h2>Our Chef</h2>
                        <div class="dotted_line"></div>
                    </div>
                    <div id="branding_caro" class="owl-carousel">
                        <div>
                            <img src="assets/front_end/images/new/chef1.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef2.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef3.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef4.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef5.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef6.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef7.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef8.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef9.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef10.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef11.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef12.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef13.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef14.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                        <div>
                            <img src="assets/front_end/images/new/chef15.jpg" alt="" class="responsive" style="width: 120px; height: 63px;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>