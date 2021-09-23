/**
 * Header file linkup
 */

<?php get_header(); ?>

    <!-- slider -->
    <section class="ic-slider swiper-container ic-mb">
        <div class="ic-slider-bg" style="background-image:url('assets/images/slider/slider.jpg')" data-swiper-parallax="-23%"></div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="ic-slider-caption">
                    <div class="ic-slide-title" data-swiper-parallax="-300">Special Design</div>
                    <div class="ic-slide-subtitle" data-swiper-parallax="-200">jewellery collection</div>
                    <div class="ic-slide-desc" data-swiper-parallax="-100">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitmod tempor incididunt ut labore et dolore magna aliqua</p>
                        <a href="products.php" class="ic-primary-btn">
                            <span>Shop now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ic-slider-caption">
                    <div class="ic-slide-title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">Second Title</div>
                    <div class="ic-slide-subtitle" data-swiper-parallax="-200">Second Subtitle</div>
                    <div class="ic-slide-desc" data-swiper-parallax="-100">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec.</p>
                        <a href="products.php" class="ic-primary-btn">
                            <span>Shop now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ic-slider-caption">
                    <div class="ic-slide-title" data-swiper-parallax="-300">Another title of jewellery collection</div>
                    <div class="ic-slide-subtitle" data-swiper-parallax="-200">Another subtitle</div>
                    <div class="ic-slide-desc" data-swiper-parallax="-100">
                        <p>Facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
                        <a href="products.php" class="ic-primary-btn">
                            <span>Shop now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
    </section>
    <!-- slider /end -->

    <!-- home intro -->
    <section class="ic-home-intro">
        <div class="container">
            <div class="row">
                <h2 class="hidden">Hidden title</h2>
                <div class="col-md-6">
                    <div class="ic-card ic-mcol">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/home/earring.jpg" alt="Earring">
                        <div class="ic-card-caption">
                            <h3>EARRINGS</h3>
                            <p>This is the season to shine! gorgeous collection of statement earrings, chandelier earrings and studs.</p>
                            <a href="single-product.php" class="ic-secondary-btn">
                                <span>Shop now</span>
                            </a>
                        </div>
                    </div>
                    <div class="ic-card">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/home/necklaces.jpg" alt="Earring">
                        <div class="ic-card-caption">
                            <h3>NECKLACES</h3>
                            <p>From statement necklaces and luxe chains to dainty pendants and charms, give every outfit standout appeal.</p>
                            <a href="single-product.php" class="ic-primary-btn">
                                <span>Shop now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ic-card ic-long">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/home/design-for-love.jpg" alt="Earring">
                        <div class="ic-card-caption">
                            <h3>Design for love</h3>
                            <p>From statement necklaces and luxe chains to dainty pendants and charms, give every outfit standout appeal.</p>
                            <a href="single-product.php" class="ic-tertiary-btn">
                                <span>Shop now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home intro /end -->

    <!-- products -->
    <section class="ic-products">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ic-lead">
                        <h2>New products</h2>
                    </div>
                </div>
                <div class="ic-flex-row">
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p1.jpg" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="single-product.php">Couple match ring</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p2.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="#">PELLENTE CUM BRACELET</a></h3>
                            <p>$499.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p3.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="#">Mauris Risus Earing</a></h3>
                            <p>$250.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p4.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="single-product.php">Couple Match Ring</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p5.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="#">NACKLESS PELLENTESQUE</a></h3>
                            <p>$259.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p6.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="#">Lovely earrings</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p7.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="#">Marriage ring</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p8.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="#">Stylish Dimond Earring</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-center ic-more">
                    <a href="products.php" class="ic-primary-btn"><span>View more</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- products /end -->

    <!-- fullwidth -->
    <section class="ic-fullwidth ic-mb">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="ic-fig">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/home/melody.png" alt="Melodious sale">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="ic-fw-caption">
                        <h2>Melodious <span>sale</span></h2>
                        <h3>Treat yourself better</h3>
                        <h4>With luxerious jewellery</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <a href="single-product.php" class="ic-primary-btn"><span>Shop now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fullwidth /end -->

    <!-- popular products -->
    <section class="ic-selective-products ic-products">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ic-lead">
                        <h2>Popular products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ic-flex-row ic-pp-slide">
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p1.jpg" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="single-product.php">Couple match ring</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p2.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="single-product.php">Couple match ring</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p3.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="single-product.php">Couple match ring</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p4.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="single-product.php">Couple match ring</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p5.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="single-product.php">Couple match ring</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p6.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="single-product.php">Couple match ring</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-product">
                        <div class="ic-product-thumb">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/products/p7.png" alt="product">
                        </div>
                        <div class="ic-caption">
                            <h3><a href="single-product.php">Couple match ring</a></h3>
                            <p>$599.00</p>
                            <div class="ic-rating">
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star active"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                                <span><i class="icofont icofont-star"></i></span>
                            </div>
                            <div class="ic-add-to-cart">
                                <a href="single-product.php" class="ic-primary-btn"><span>Add to cart</span></a>
                            </div>
                        </div>
                        <div class="ic-product-info">
                            <ul>
                                <li><a href="#"><span>Quick view</span></a></li>
                                <li><a href="#"><span>Wishlist</span></a></li>
                                <li><a href="#"><span>Compare</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular products /end -->

    <!-- testimonial -->
    <section class="ic-testimonial-wrapper ic-mb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ic-testimonial">

                        <div class="ic-single-testimonial">
                            <p>“Perfection is achieved, not when there is nothing more to add, but when there is nothing left to take away.”</p>
                            <div class="ic-divider">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic-lead-bg.png" alt="divider">
                            </div>
                            <h2>ANTOINE DE SAINT EXUPery</h2>
                        </div>
                        <div class="ic-single-testimonial">
                            <p>“Perfection is achieved, not when there is nothing more to add, but when there is nothing left to take away.”</p>
                            <div class="ic-divider">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic-lead-bg.png" alt="divider">
                            </div>
                            <h2>ANTOINE DE SAINT EXUPery</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial /end -->

    <!-- latest blog -->
    <section class="ic-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ic-lead">
                        <h2>Latest blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="ic-single-blog">
                        <div class="ic-blog-fig">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/blog/1.jpg" alt="Blog figure">
                            <div class="ic-blog-detail">
                                <a href="blog-detail.php"><i class="icofont icofont-plus"></i></a>
                            </div>
                        </div>
                        <div class="ic-blog-caption">
                            <div class="ic-publish-date">
                                <h3>16 <span>January</span></h3>
                            </div>
                            <div class="ic-blog-desc">
                                <h4><a href="blog-detail.php">Trendy Jewelry Pieces Worth the Splurge</a></h4>
                                <div class="ic-meta">
                                    <span>Post by <a href="#">Admin</a></span>
                                    <span>/</span>
                                    <span><a href="#">Comments 10</a></span>
                                </div>
                                <div class="ic-excerpt">
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumillo . . . . </p>
                                    <a href="blog-detail.php" class="ic-btn-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="ic-single-blog">
                        <div class="ic-blog-fig">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/blog/2.jpg" alt="Blog figure">
                            <div class="ic-blog-detail">
                                <a href="blog-detail.php"><i class="icofont icofont-plus"></i></a>
                            </div>
                        </div>
                        <div class="ic-blog-caption">
                            <div class="ic-publish-date">
                                <h3>30 <span>January</span></h3>
                            </div>
                            <div class="ic-blog-desc">
                                <h4><a href="blog-detail.php">Trendy Jewelry Pieces Worth the Splurge</a></h4>
                                <div class="ic-meta">
                                    <span>Post by <a href="#">Admin</a></span>
                                    <span>/</span>
                                    <span><a href="#">Comments 10</a></span>
                                </div>
                                <div class="ic-excerpt">
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumillo . . . . </p>
                                    <a href="blog-detail.php" class="ic-btn-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest blog /end -->

    <!-- clients -->
    <section class="ic-clients-wrapper">
        <div class="ic-clients">
            <div class="ic-single-client">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/c1.png" alt="client">
                </a>
            </div>
            <div class="ic-single-client">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/c2.png" alt="client">
                </a>
            </div>
            <div class="ic-single-client">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/c3.png" alt="client">
                </a>
            </div>
            <div class="ic-single-client">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/c4.png" alt="client">
                </a>
            </div>
            <div class="ic-single-client">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/c5.png" alt="client">
                </a>
            </div>
            <div class="ic-single-client">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/c6.png" alt="client">
                </a>
            </div>
            <div class="ic-single-client">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/c1.png" alt="client">
                </a>
            </div>
            <div class="ic-single-client">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/c2.png" alt="client">
                </a>
            </div>
        </div>
    </section>
    <!-- clients /end -->

    <!-- subscribe  -->
    <section class="ic-sbuscribe-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="ic-subscribe-fig">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/subscribe-bg.png" alt="subscribe figure">
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="ic-subscribe-form">
                        <div class="ic-subscribe-caption">
                            <h2>NEWSLETTER</h2>
                            <p>There Are Many Variations Of Passage Ipsum Available, But The Suffered Alte Ration In Some There Are Many Variat</p>
                        </div>
                        <form action="#">
                            <input type="email" placeholder="Your email address">
                            <button type="submit" class="ic-primary-btn"><span>Send now</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe /end -->

/**
 * Footer file linkup
 */    
<?php get_footer(); ?>