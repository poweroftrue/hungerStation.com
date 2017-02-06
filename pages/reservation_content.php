<?php
//$category_id = $_GET['id'];
//$query_result = $obj_app->select_category_info_by_id($category_id);
//$category_product_info = mysqli_fetch_assoc($query_result);
?>

<section class="foods_menu_top_area" style="background: url(assets/front_end/images/new/category.jpg) no-repeat scroll center center / cover  rgba(0, 0, 0, 0);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="bread_top_box">
                    <h2>Reservation</h2>
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
                        <li class="active"><a href="reservation.php">Reservation </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact_p_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="" method="post">
                    <div class="input_form">
                        <div class="input_left">
                            <div class="contact_box_left">
                                <h4>Book a table</h4>
                                <div class="multi_line"></div>
                            </div>
                            <input type="date" name="date" placeholder="Date *" required name="date"/>
                            <input  type="time" name="time" placeholder="Time *" required name="time"/>
                            <input  type="text" name="location" placeholder="Location *" required name="location"/>
                            <input  type="number" name="person" placeholder="Number of Person *" required name="number"/>
                        </div>
                        <div class="input_left">
                            <div class="contact_box_left">
                                <h4>Contact Details</h4>
                                <div class="multi_line"></div>
                            </div>
                            <input type="text" name="name" placeholder="Name *" required name="name"/>
                            <input  type="email" name="email_address" placeholder="Your Email *" required name="email"/>
                            <input  type="number" name="phone_number" placeholder="Phone *" required name="phone"/>
                            <input type="text" name="message" placeholder="Message"/>
                        </div>
                    </div>
                    <div class="submit_btn form-group submitRow">
                        <input type="submit" name="btn" value="Make a Reservation" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
