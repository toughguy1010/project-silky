<?php get_header(); ?>
<?php
do_action('homepage')

?>
<!-- Content start -->
<div class="wrap-content">
        <!-- Carousel start -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img-respon">

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev  " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
            <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon " aria-hidden="true"></span>
                  <span class="visually-hidden ">Next</span>
                </button>
        </div>
        <!-- Carousel end -->

        <!--About start -->
        <div class="about">
            <div class="about-tittle">ACHELOIS - Romanticizing your life
            </div>
            <p class="about-desc ">Achelois is a high-end women's fashion brand founded in August 2020 in Hanoi, Vietnam.
                <br> At the moment, Achelois has three main product lines: Nightwear; Ready to wear and Exclusive.<br> At Achelois, we pay close attention into every step in the product making process. The perfection in choosing materials, patterns and
                colors is the reason why Achelois can satisfy the most demanding customers. Achelois believes that every girl possesses a hidden beauty, and our mission is to bring out that charm. It is the high personalization in each collection that
                makes the customers trust and accompany Achelois during this whole time.</p>
        </div>
        <!-- About end -->

        <!-- Product start -->
        <div class="product">
            <div alt="" class="prev-btn"></div>
            <div class="product-content">
                <div class="product-info">
                    <div class="product-title">new arrivals</div>
                    <div class="product-desc">Featuring new shirt styles & highlight boyish charm inspiration</div>
                    <div class="product-info-btn">shop now</div>
                </div>
                <div class="product-img">
                    <img src="<?php echo get_template_directory_uri() . '/assest/img/img-product1.png'; ?>"  class="product-img-respon" />
                    <img src="<?php echo get_template_directory_uri() . '/assest/img/img-product-2.png'; ?>" class="product-img-respon" />
                    <img src="<?php echo get_template_directory_uri() . '/assest/img/img-product-3.png'; ?>" class="product-img-respon" />
                    <img src="<?php echo get_template_directory_uri() . '/assest/img/img-product-4.png'; ?>" class="product-img-respon" />
                    <img src="<?php echo get_template_directory_uri() . '/assest/img/img-product-5.png'; ?>" class="product-img-respon" />
                    <img src="<?php echo get_template_directory_uri() . '/assest/img/product-img-6.png'; ?>" class="product-img-respon" />
                </div>
            </div>
            <div class="next-btn"></div>
        </div>
        <!-- Product end -->

        <!-- Collection start -->
        <ul class="collection  me-3 ms-3">
            <li class="collection-item ">
                <div class="item-content">
                    <div class="tittle-content">ready to wear</div>
                    <div class="tittle-desc">At Achelois, we pay close attention into every step in the product making process. The perfection in choosing materials, patterns and colors is the reason why Achelois can satisfy the most demanding customers. </div>
                </div>
                <img src="<?php echo get_template_directory_uri() . '/assest/img/img-collection-1.png'; ?>" class="item-img" />
            </li>
            <li class="collection-item ms-4 me-4">
                <div class="item-content">
                    <div class="tittle-content">night wear</div>
                    <div class="tittle-desc">At Achelois, we pay close attention into every step in the product making process. The perfection in choosing materials, patterns and colors is the reason why Achelois can satisfy the most demanding customers.</div>
                </div>
                <img src="<?php echo get_template_directory_uri() . '/assest/img/img-collection-2.png'; ?>" class="item-img" />
            </li>
            <li class="collection-item ">
                <div class="item-content">
                    <div class="tittle-content">exclusive</div>
                    <div class="tittle-desc">At Achelois, we pay close attention into every step in the product making process. The perfection in choosing materials, patterns and colors is the reason why Achelois can satisfy the most demanding customers.</div>
                </div>
                <img src="<?php echo get_template_directory_uri() . '/assest/img/img-collection-3.png'; ?>" class="item-img" />
            </li>
        </ul>
        <!-- Collection  end -->
</div>
    <!-- Content end -->


<?php 
 get_footer();
?>