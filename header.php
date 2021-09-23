<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head();?>
</head>
<body <?php body_class();?>>
<!-- joyous main -->
<main>
    <div class="ic-overlay"></div>
    <!-- header -->
    <header>
        <div class="ic-top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-6 col-xxs-12">
                        <div class="ic-quick-contact">
                            <span><i class="icofont icofont-phone"></i></span>
                            <span>(Call 11.00 am to 7.30 pm)</span><a href="tel:01770823204">+880 1770 823 204</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2 col-xs-6 col-xxs-12">
                        <div class="ic-user-access" id="icua">
                            <span><i class="icofont icofont-ui-user"></i></span>
                            <ul>
                                <li><a data-toggle="modal" data-target="#iclogin">Login</a>
                                    <a class="hidden" id="tologin"></a>
                                    <a class="hidden" id="toregister"></a>
                                    <div class="modal fade" id="iclogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-body" id="">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="ic-account">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <h3>Customer Login</h3>
                                                        <p>If you have an account with us, please Login</p>
                                                        <form action="#" id="ic-login">
                                                            <input type="email" placeholder="Your Email Address">
                                                            <input type="password" placeholder="Password">
                                                            <div class="ic-remember-pw">
                                                                <div class="ic-remeber ic-check tnc">
                                                                    <label for="remember-me">
                                                                        <input id="remember-me" type="checkbox">
                                                                        Remember me
                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div>
                                                                <div class="ic-forgot-pw">
                                                                    <a href="#">Forgot your password?</a>
                                                                </div>
                                                            </div>
                                                            <div class="ic-form-btn">
                                                                <button class="ic-primary-btn"><span>Login</span></button>
                                                            </div>
                                                            <div class="ic-form-footer">
                                                                <h4>New customer</h4>
                                                                <p>It's quick and easy to create an account shop faster and save your order to account.</p>
                                                            </div>
                                                            <div class="ic-form-btn ic-create">
                                                                <a href="#toregister" class="ic-primary-btn"><span>Create an account</span></a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>Or</li>
                                <li><a data-toggle="modal" data-target="#icregister">Register</a>
                                    <div class="modal fade" id="icregister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-body" id="">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="ic-account">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <h3>Create an account</h3>
                                                        <p>Sign up for a free account at dels</p>
                                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="ic-reigister">
                                                            <input name="name" type="text" placeholder="Full Name">
                                                            <input name="email" type="email" placeholder="Your Email Address">
                                                            <input name="password" type="password" placeholder="Password">
                                                            <input name="conpassword" type="password" placeholder="Confirm Password">
                                                            <div class="ic-remember-pw">
                                                                <div class="ic-remeber ic-check tnc">
                                                                    <label for="ic-newsletter">
                                                                        <input id="ic-newsletter" type="checkbox">
                                                                        Sign up for our Newsletter
                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ic-form-btn">
                                                                <button name="submit" class="ic-primary-btn"><span>Create an account</span></button>
                                                            </div>

                                                            <div class="ic-signup-footer">
                                                                <p>Already have an account? <a href="#">Login Here</a></p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ic-middle-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6 ic-mcol">
                        <div class="ic-logo">
                            <a href="<?php bloginfo('home');?>"><?php if(function_exists('the_custom_logo')){the_custom_logo();}?></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-6 col-xs-6 ic-mcol">
                        <div class="ic-shopinfo wishlist">
                            <a href="#">
                      <span class="ic-w-icon">
                        <i class="icofont icofont-heart-alt"></i>
                      </span>
                                <span>Wishlist</span>
                            </a>
                        </div>
                        <div class="ic-shopinfo card">
                            <a href="#">
                      <span class="ic-w-icon">
                        <i class="icofont icofont-cart"></i>
                      </span>
                                <span>Your cart - <span class="ic-price">$000.00</span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="ic-nav">
            <div class="container">
                <div class="row">
                    <div class="ic-nav-search">
                        <nav>
                            <!-- header nav menu goes here -->
                            <?php 
                                wp_nav_menu(array(
                                    'theme_location'    => 'headermenu',
                                    'menu_id'           => 'menu',
                                    'container'         => ' '
                                ));
                            ?>
                            <div class="ic-search-form">

                            </div>
                        </nav>
                        <div class="ic-search-form">
                            <span class="ic-search-btn"></span>
                            <form action="#">
                                <input type="search" placeholder="Search here what you want">
                                <button type="submit"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header /end -->