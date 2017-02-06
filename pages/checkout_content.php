<?php
if (isset($_POST['btn'])) {
    $obj_checkout->save_customer_info($_POST);
}
?>

<section class="checkout_area">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body text-center">
                            <h3>You have to login or registere first to complete checkout !</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="checkout_left">
                    <h2 style="text-align: center;">login</h2>
                    <div class="dotted_line"></div>
                    <div class="checkout_form">
                        <form class="form-horizontal" action="" method="post">  
                            <div class="form-group">
                                <label class="control-label col-lg-3">Email Address</label>
                                <div class="col-lg-9">
                                    <input type="email" name="email_address" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Password</label>
                                <div class="col-lg-9">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-9">
                                    <input type="submit" name="btn" class="btn btn-primary btn-block" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr/>
                    <h2 style="text-align: center;">or sign up here</h2>
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
                                <p>First Name  <span>*</span></p>
                                <input type="text" name="first_name" class="form-control" >
                            </div>
                            <div class="company_name">
                                <p>Last Name <span>*</span></p>
                                <input type="text" name="last_name" class="form-control" >
                            </div>
                            <div class="company_name">
                                <p>Email Address <span>*</span></p>
                                <input type="email" name="email_address" class="form-control" >
                            </div>
                            <div class="company_name">
                                <p>Password <span>*</span></p>
                                <input type="password" name="password" class="form-control" >
                            </div>
                            <div class="company_name">
                                <p>Phone Number <span>*</span></p>
                                <input type="number" name="phone_number" class="form-control"  >
                            </div>
                            <div class="c_address">
                                <p>Address <span>*</span></p>
                                <textarea name="address" class="form-control" ></textarea>
                            </div>
                            <div class="s_order">
                                <input type="submit" name="btn" class="btn btn-primary btn-block" value="Registration">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>