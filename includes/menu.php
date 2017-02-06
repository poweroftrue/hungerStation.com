<?php
$query_result = $obj_app->select_all_published_category_info_menu();
$sub_category_query_result = $obj_app->select_all_published_sub_category_info();
?>

<section class="nav_area">
    <div class="container">
        <div class="nav_left floatleft">     


            <a href="foods_menu.php">OUR MENU<i class="fa fa-bars"></i></a>
            <div class="cat_mega_menu">
                <?php while ($sub_category_info = mysqli_fetch_assoc($sub_category_query_result)) { ?>
                    <div>
                        <ul class="cat_nav">
                            <li><a href="sub_category.php?id=<?php echo $sub_category_info['sub_category_id']; ?>"><?php echo $sub_category_info['sub_category_name']; ?></a></li>
                            <div class="cat_menu_line"></div>
                        </ul>
                    </div>
                <?php } ?>
            </div>

        </div>
        <div class="nav_center">
            <nav class="mainmenu">
                <ul id="nav">
                    <li class=""><a href="index.php">Home</a> </li>
                    <li class=""><a href="reservation.php">Reservation</a> </li>
                    <li class=""><a href="shop.php">Shop</a> </li>

                    <?php while ($category_info = mysqli_fetch_assoc($query_result)) { ?>
                        <li><a href="category.php?id=<?php echo $category_info['category_id']; ?>"><?php echo $category_info['category_name']; ?></a></li>
                    <?php } ?>
                    <li class=""><a href="gallery.php">Gallery</a> </li>
                    <li class=""><a href="journal.php">Journal</a> </li>
                    <li class=""><a href="contact.php">Contact</a> </li>

                </ul>
            </nav>
        </div>
        <div class="nav_right floatright">
            <a href="cart_view.php"><img src="assets/front_end/images/new/bag.png" alt="Bag" />cart</a>

            <!-- MOBILE ONLY CONTENT -->
            <div class="only-for-mobile">
                <ul class="ofm">
                    <li class="m_nav"><i class="fa fa-bars"></i> Navigation</li>
                </ul>

                <!-- MOBILE MENU -->
                <div class="mobi-menu">
                    <div id='cssmenu'>
                        <ul>
                            <li class='has-sub'>
                                <a href='index.php'><span>Home</span></a>
                            </li>
                            <li class='has-sub'>
                                <a href='foods_menu.php'><span>menu</span></a>
                                <ul>
                                    <?php while ($sub_category_info = mysqli_fetch_assoc($sub_category_query_result)) { ?>
                                        <li class='has-sub'>
                                        <li><a href="sub_category.php?id=<?php echo $sub_category_info['sub_category_id']; ?>"><?php echo $sub_category_info['sub_category_name']; ?></a></li>
                                </li>
                            <?php } ?>
                        </ul>
                        </li>

                        <?php while ($category_info = mysqli_fetch_assoc($query_result)) { ?>
                            <li><a href="blog.html"><?php echo $category_info['category_name']; ?></a></li>
        <!--                        <li><a href='category-2.html'><span><?php // echo $category_info['category_name'];      ?></span></a></li>-->
                        <?php } ?>
                        <li>
                            <a href='cart.html'><span>cart</span></a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- MOBILE ONLY CONTENT -->
        </div>
</section>