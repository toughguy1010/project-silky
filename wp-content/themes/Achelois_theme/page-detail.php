<?php get_header(); ?>
<?php do_action('wp_detail')?>

        <!-- Content start -->
        <div class="wrapper-content">
            <div class="product-section">
                <div class="product">
                    <div class="product-img">
                    <img src="<?php echo get_template_directory_uri() . '/assest/img/detail-product-img.png'; ?>"  class="product-img-respon" />
                      
                    <!-- <img src="<?php echo get_template_directory_uri() . './assets/img/detail-product-img.png'; ?>"  class="product-img-respon" /> -->
                        <!-- <img src="./assets/img/detail-product-img.png" class="product-img-respon"></img> -->
                        <div class="scrolling-btn">
                            <div class="arrow-btn arrow-up"></div>
                            <div class="line"></div>
                            <div class="arrow-btn arrow-down"></div>
                        </div>
                    </div>
                </div>
                <div class="product-content">
                    <div class="product-title">
                        <div class="product-name">Balthus painter's jacket</div>
                        <span class="product-sub-name">
                            Light Cotton Canvas</span>
                    </div>
                    <div class="product-price">$205</div>
                    <div class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
                    <div class="product-color">
                        <div class="color">
                            <div class="color-title">Color:</div>
                            <div class="color-name ms-2">Black</div>
                        </div>
                        <ul class="color-menu">
                            <li class="color-item white-item-color"></li>
                            <li class="color-item cream-item-color"></li>
                            <li class="color-item black-item-color"></li>
                            <li class="color-item blue-item-color"></li>
                            <li class="color-item pink-item-color"></li>
                        </ul>
                    </div>
                    <div class="product-size">
                        <div class="size">
                            <div class="size-title">Size: XS</div>
                            <div class="size-guide">
                                <ul class="size-menu">
                                    <li class="size-item active-size-item">XS</li>
                                    <li class="size-item">S</li>
                                    <li class="size-item">M</li>
                                    <li class="size-item">L</li>
                                    <li class="size-item">XL</li>
                                </ul>
                                <div class="guide-btn">Size Guide</div>
                            </div>
                        </div>
                    </div>
                    <div class="add-to-cart-btn">ADD TO CART</div>
                    <div class="custom">CUSTOMSIZE</div>
                    <div class="material">
                        <span>Fabric: 75% Lambswool, 25% Caregora<br>Treatment: Dry clean only</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content end -->
        <!-- suggestion start -->
        <div class="suggestion">
            <div class="suggest-title">You may like
            </div>
            <div class="suggest-product">
                <div class="product-item ">
                    <div class="item-img img4"></div>
                    <div class="suggest-desc">
                        <div class="product-tittle">
                            BALTHUS PAINTER'S JACKET - FRAMBOISE
                        </div>
                        <div class="suggest-price">
                            $145.00</div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="item-img img5"></div>
                    <div class="suggest-desc">
                        <div class="product-tittle">
                            BALTHUS PAINTER'S JACKET - FRAMBOISE
                        </div>
                        <div class="suggest-price">
                            $145.00</div>
                    </div>
                </div>
                <div class="product-item ">
                    <div class="item-img img6"></div>
                    <div class="suggest-desc">
                        <div class="product-tittle">
                            BALTHUS PAINTER'S JACKET - FRAMBOISE
                        </div>
                        <div class="suggest-price">
                            $145.00</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- suggestion end -->

<?php 
 get_footer();
?>