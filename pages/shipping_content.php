<?php
$customer_id = $_SESSION['customer_id'];
$query_result = $obj_checkout->select_customer_info_by_id($customer_id);
$customer_info = mysqli_fetch_assoc($query_result);
extract($customer_info);

if (isset($_POST['btn'])) {

    $obj_checkout->save_shipping_info($_POST);
}
?>

<section class="checkout_area">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body text-center">
                            <h3>Dear <?php echo $_SESSION['customer_name']; ?>, Please provide your shipping information. <br/>Press "Save Shipping Info" button if  billing & shipping address are same. Thanks !</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="checkout_left">
                    <h2 style="text-align: center;">Please provide shipping information</h2>
                    <div class="dotted_line"></div>
                    <form action="" method="post">
                        <div class="shipping_form">
                            <div class="c_name_box">
                                <div class="c_name_box_left">
                                    <p>First Name <span>*</span></p>
                                    <input type="text" name="first_name">
                                </div>
                                <div class="c_name_box_right">
                                    <p>Last Name <span>*</span></p>
                                    <input type="text" name="last_name">
                                </div>
                            </div>
                            <div class="company_name">
                                <p>Full Name  <span>*</span></p>
                                <input type="text" name="full_name" value="<?php echo $first_name . ' ' . $last_name; ?>" class="form-control">
                            </div>
                            <div class="company_name">
                                <p>Email Address <span>*</span></p>
                                <input type="email" name="email_address" value="<?php echo $email_address; ?>" class="form-control">
                            </div>
                            <div class="company_name">
                                <p>Phone Number <span>*</span></p>
                                <input type="number" name="phone_number" value="<?php echo $phone_number; ?>" class="form-control" >
                            </div>
                            <div class="c_address">
                                <p>Address <span>*</span></p>
                                <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            </div>
                            <div class="s_order">
                                <input type="submit" name="btn" class="btn btn-primary btn-block" value="Save Shipping Info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>