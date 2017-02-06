<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'logout') {
        $obj_checkout->customer_logout();
    }
}
?>

<div class="header_top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="header_top_left">
                    <ul class="wid_social">
                        <li><a class="fa fa-phone" href="" >   +880 1611 78 78 08</a></li>
                        <li><a class="fa fa-envelope-o" href="">   nejum.islam@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="header_top_right floatright">
                    <ul class="wid_social">
                        <li><a class="fa fa-facebook" target="blank" href="http://www.facebook.com/nejum.islam"></a></li>
                        <li><a class="fa fa-twitter" href=""></a></li>
                        <li><a class="fa fa-google-plus" href=""></a></li>
                        <li><a class="fa fa-pinterest" href=""></a></li>
                        <li><a class="fa fa-rss" href=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="header_top_right floatright">
                    <?php if (isset($_SESSION['customer_id'])) { ?>
                        <p><a href="?status=logout">Logout</a></p>
                    <?php } else { ?>
                        <p><a href="checkout.php">login / register</a></p>
                    <?php } ?>
                    <nav class="currency alignleft">
                        <ul>
                            <li><a href="">BDT</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="top-flag alignleft">
                        <img src="assets/front_end/images/new/flag.jpg" alt="Flags" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="header_center">
                    <a href="index.php"><img src="assets/front_end/images/new/NFoodlogo.jpg" alt="Site Logo"/></a>
                </div>
            </div>
        </div>
    </div>
</div>