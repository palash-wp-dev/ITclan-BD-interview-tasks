<?php include_once('header.php'); ?>

    <!-- banner -->
    <section class="ic-banner checkout">
        <div class="ic-inner-page-header">
            <div class="ic-page-title">
                <h2>Checkout</h2>
            </div>
            <div class="ic-breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li> ></li>
                    <li><a href="products.php">Shop</a></li>
                    <li> ></li>
                    <li><a href="products.php">Product</a></li>
                    <li> ></li>
                    <li><a href="view-cart.php">View cart</a></li>
                    <li> ></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- banner /end -->

    <!-- checkout -->
    <section class="ic-checkout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ic-warning">
                        <i class="icofont icofont-warning-alt"></i>
                        <span>Returning customer? <a href="#">Click here to login</a></span>
                    </div>
                    <div class="ic-warning-desc">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                    </div>
                </div>
                <div class="ic-access-form">
                    <form action="#">
                        <div class="col-sm-6">
                            <input type="text" placeholder="Username or Email Id">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Password">
                        </div>
                        <div class="col-xs-12">
                            <button class="ic-primary-btn">
                                <span>Login</span>
                            </button>
                            <div class="ic-check">
                                <label for="remember">
                                    <input type="checkbox" id="remember">
                                    <span>Remember me</span>
                                    <i class="input-helper"></i>
                                </label>
                            </div>
                            <div class="ic-lost-pw">
                                <a href="#" class="ic-lp">Lost your password?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12">
                    <div class="ic-warning ic-coupon">
                        <i class="icofont icofont-warning-alt"></i>
                        <span>Have a coupon? <a role="button" data-toggle="collapse" href="#icCoupon" aria-expanded="false" aria-controls="icCoupon">Click here to enter your code</a></span>
                    </div>
                    <div class="collapse" id="icCoupon">
                        <form action="#">
                            <input type="text" placeholder="Enter coupon code">
                            <button type="submit" class="ic-primary-btn"><span>Apply coupon</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout /end -->

    <!-- checkout info -->
    <section class="ic-checkout-info">
        <div class="container">
            <div class="row">
                <form action="#">
                    <div class="col-md-8">
                        <div class="ic-ci-title">
                            <h3>Billing address</h3>
                        </div>
                        <div class="row">
                            <div class="ic-billing-form">
                                <div class="col-sm-6">
                                    <label for="fname">First name <span>*</span></label>
                                    <input type="text" id="fname">
                                </div>
                                <div class="col-sm-6">
                                    <label for="lname">Last name <span>*</span></label>
                                    <input type="text" id="lname">
                                </div>
                                <div class="col-xs-12">
                                    <label for="cname">Company name</label>
                                    <input type="text" id="cname">
                                </div>
                                <div class="col-sm-6 ic-clear">
                                    <label for="email">Email address <span>*</span></label>
                                    <input type="text" id="email">
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone">Phone <span>*</span></label>
                                    <input type="text" id="phone">
                                </div>
                                <div class="col-xs-12">
                                    <label for="iccountry">Country <span>*</span></label>
                                    <select name="iccountry" id="iccountry">
                                        <option value="bd">Bangladesh</option>
                                        <option value="usa">United State</option>
                                        <option value="china">China</option>
                                        <option value="japan">Japan</option>
                                        <option value="australia">Australia</option>
                                    </select>
                                </div>
                                <div class="col-xs-12">
                                    <label for="address">Address <span>*</span></label>
                                    <input type="text" id="address" placeholder="Street address">
                                    <input type="text" placeholder="Appartment, Suit, Unit etc(Optional)">
                                </div>
                                <div class="col-xs-12">
                                    <label for="toc">Town or city <span>*</span></label>
                                    <input type="text" id="toc">
                                </div>
                                <div class="col-sm-6 ic-clear">
                                    <label for="district">District <span>*</span></label>
                                    <select name="district" id="district">
                                        <option value="dka">Dhaka</option>
                                        <option value="ctg">Chittagong</option>
                                        <option value="slt">Sylhet</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="pc">Post code / ZIP <span>*</span></label>
                                    <input type="text" id="pc">
                                </div>
                                <div class="col-xs-12">
                                    <div class="ic-check">
                                        <label for="caccount">
                                            <input type="checkbox" id="caccount">
                                            <span>Create an account</span>
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="ic-check checkbox">
                                        <label for="shipaddress" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <input type="checkbox" id="shipaddress">
                                            <span>Ship to a different address?</span>
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <div id="collapseOne" aria-expanded="false" class="collapse">
                                        <div class="col-xs-12 ic-xtra-address">
                                            <label for="xaddress">Address <span>*</span></label>
                                            <input type="text" id="xaddress" placeholder="Street address">
                                            <input type="text" placeholder="Appartment, Suit, Unit etc(Optional)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <label for="ordernotes">Order notes</label>
                                    <textarea name="ordernotes" id="ordernotes" cols="30" rows="5" placeholder="Notes about your order and delivery"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ic-ci-title">
                            <h3>Your order</h3>
                        </div>
                        <div class="ic-order-total">
                            <div class="ic-ot-col">
                                <div class="ic-ot-left">
                                    <strong>Products</strong>
                                </div>
                                <div class="ic-otl-right">
                                    <strong>Total</strong>
                                </div>
                            </div>
                            <div class="ic-ot-col">
                                <div class="ic-ot-left">
                                    <span>Pellente olive earing</span>
                                    <small>Ring x 2</small>
                                </div>
                                <div class="ic-otl-right">
                                    <span>$1198.00</span>
                                </div>
                            </div>
                            <div class="ic-ot-col">
                                <div class="ic-ot-left">
                                    <span>Pellente olive earing</span>
                                    <small>Ring x 1</small>
                                </div>
                                <div class="ic-otl-right">
                                    <span>%599.00</span>
                                </div>
                            </div>
                            <div class="ic-ot-col">
                                <div class="ic-ot-left">
                                    <strong>Sub - total</strong>
                                </div>
                                <div class="ic-otl-right">
                                    <span>$797.00</span>
                                </div>
                            </div>
                            <div class="ic-ot-col">
                                <div class="ic-ot-left">
                                    <strong>Shipping Charge</strong>
                                </div>
                                <div class="ic-otl-right">
                                    <span>9.99</span>
                                </div>
                            </div>
                            <div class="ic-ot-col">
                                <div class="ic-ot-left">
                                    <strong>Total</strong>
                                </div>
                                <div class="ic-otl-right">
                                    <span>$1806.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="ic-payment-method">
                            <div class="ic-sp-method">
                                <div class="ic-check">
                                    <label>
                                        <input type="radio" name="payment">
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="ic-payment-detail">
                                    <h4>Cheque Payment</h4>
                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / Country, Store Postcode.</p>
                                </div>
                            </div>
                            <div class="ic-sp-method">
                                <div class="ic-check">
                                    <label>
                                        <input type="radio" name="payment">
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="ic-payment-detail">
                                    <span>payPal <img src="assets/images/payment.png" alt=""> <a href="#">What is payPal?</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="ic-check tnc">
                            <label for="tandc">
                                <input type="checkbox" id="tandc">
                                <span>I've read and accept the terms &amp; conditions <span>*</span></span>
                                <i class="input-helper"></i>
                            </label>
                        </div>
                        <div class="ic-order-btn">
                            <button class="ic-primary-btn"><span>place order</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- checkout info /end-->


<?php include_once('footer.php'); ?>