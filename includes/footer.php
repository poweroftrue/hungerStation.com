<?php
$query_result = $obj_app->select_all_published_sub_category_info();
?>

<footer class="entire_footer_area">
    <div class="footer_top_area">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="footer_top_left">
                        <a href=""><i class="fa fa-envelope"></i>signup newsletter</a>
                        <input type="text" placeholder=""/>
                        <input type="submit" value="submit"/>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="footer_top_right">
                        <ul id="payment">
                            <li><a href="">
                                    <img src="assets/front_end/images/new/pay1.png" alt="" />
                                </a></li>
                            <li><a href="">
                                    <img src="assets/front_end/images/new/pay2.png" alt="" />
                                </a></li>
                            <li><a href="">
                                    <img src="assets/front_end/images/new/pay3.png" alt="" />
                                </a></li>
                            <li><a href="">
                                    <img src="assets/front_end/images/new/pay4.png" alt="" />
                                </a></li>
                            <li><a href="">
                                    <img src="assets/front_end/images/new/pay5.png" alt="" />
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single_widget">
                        <h5>Our Menu</h5>
                        <div class="wid_line"></div>
                        <ul class="widget_nav">
                            <?php while ($sub_category_info = mysqli_fetch_assoc($query_result)) { ?>
                                <li><a href="sub_category.php?id=<?php echo $sub_category_info['sub_category_id']; ?>"><?php echo $sub_category_info['sub_category_name']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single_widget">
                        <h5>Opening Hours</h5>
                        <div class="wid_line"></div>
                        <ul class="widget_nav">
                            <li><a>Saturday - 11:00 to 19:00 </a></li>
                            <li><a>Sunday - 09:00 to 22:00</a></li>
                            <li><a>Monday - 09:00 to 22:00</a></li>
                            <li><a>Tuesday - 09:00 to 22:00</a></li>
                            <li><a>Wednesday - 09:00 to 22:00</a></li>
                            <li><a>Thursday - 09:00 to 22:00</a></li>
                            <li><a>Friday - 11:00 to 19:00</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single_widget">
                        <h5>service</h5>
                        <div class="wid_line"></div>
                        <ul class="widget_nav">
                            <li><a href="reservation.php">Reservation</a></li>
                            <li><a href="shop.php">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single_widget">
                        <h5>contact Info</h5>
                        <div class="wid_line"></div>
                        <address>
                            Address : 90/1, 1st floor, Bazar road,<br>
                            Middle Badda, Badda, Dhaka-1212.<br>
                            Phone : +880 1611 78 78 08<br>
                            Email : nejum.islam@gmail.com
                        </address>
                        <ul class="wid_social">
                            <li><a class="fa fa-facebook" target="blank" href="http://www.facebook.com/nejum.islam"></a></li>
                            <li><a class="fa fa-twitter" href=""></a></li>
                            <li><a class="fa fa-google-plus" href=""></a></li>
                            <li><a class="fa fa-pinterest" href=""></a></li>
                            <li><a class="fa fa-rss" href=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer_bottom">
                            <p >Copyright &copy; 2016 <a href="index.php">nfood</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer_bottom">
                            <p >built by  <a class="fa fa-facebook-square" target="blank" href="http://www.facebook.com/nejum.islam">   Nejum Islam</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>