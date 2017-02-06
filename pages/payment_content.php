<?php
if (isset($_POST['btn'])) { 
    $obj_checkout->save_order_info($_POST);
}
?>

<section class="checkout_area">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body text-center">
                            <h3>Dear <?php echo $_SESSION['customer_name']; ?>, Please provide payment information. Thanks !</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="checkout_left">
                    <h2 style="text-align: center;">Please select your payment method</h2>
                    <div class="dotted_line"></div>
                    <form action="" method="post">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <td>Cash On Delivery</td>
                                <td><input type="radio" name="payment_type" value="cash_on_delivery" checked></td>
                            </tr>
                            <tr>
                                <td>bKash</td>
                                <td><input type="radio" name="payment_type" value="bkash"></td>
                            </tr>
                            <tr>
                                <td>Rocket</td>
                                <td><input type="radio" name="payment_type" value="rocket"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" name="btn" value="Confirm Order" class="btn btn-primary btn-block"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>