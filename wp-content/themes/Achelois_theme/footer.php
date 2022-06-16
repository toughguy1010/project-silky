
    <!-- Footer start -->
    <div class="footer">
        <div class="footer-line">
        <img src="<?php echo get_template_directory_uri() . '/assest/img/footer-line.png'; ?>" class="footer-line-respon" />

        </div>
        <div class="footer-content">
            <ul class="address-content">
                <li class="address-content-item mb-2 ">
                    ACHELIOS - Romanticizing your lifedwqdqwd
                </li>
                <li class="address-content-item mb-2">
                    85 Nguyen Hy Quang, Dong Da, Ha Noi.
                </li>
                <li class="address-content-item mb-2">
                    +84 818888672
                </li>
                <li class="address-content-item mb-2">
                    hello.acheloisvn@gmail.com
                </li>
                <li class="address-content-item mb-1 hide-element">
                    hello.acheloisvn@gmail.com
                </li>
                <li class="address-content-item mb-2">
                    2022 ® Achelois
                </li>
            </ul>
            <ul class="service-content">
                <li class="service-content-item mb-2">Customer care</li>
                <li class="service-content-item mb-2">Shipping & delivery</li>
                <li class="service-content-item mb-2">Exchange policy</li>
                <li class="service-content-item mb-2">Terms & conditions</li>
                <li class="service-content-item mb-1">Stockists</li>
                <li class="service-content-item mb-2">Privacy & cookies policy</li>
            </ul>
            <ul class="contact-content">
                <li class="contact-content-item mb-2">Become part of the ACHELOIS community</li>
                <li class="contact-content-item mb-2">Receive first access to the very best of ACHELOIS products,</li>
                <li class="contact-content-item mb-2">inspiration and services</li>
                <li class="contact-content-item mb-2 hide-element">inspiration and services</li>
                <li class="contact-content-item d-flex justify-content-between mb-2 ">
                    <div class=""> Email Address*</div>
                    <div class="">OK</div>
                </li>
                <li class="contact-content-item line   "></li>
            </ul>
        </div>
        <div class="social">
            <a href="" class="facebook-link ">
                <i class="fa-brands fa-facebook-f me-2"></i>
            </a>
            <a href="" class="instagram-link">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </div>

    <!-- Footer end -->
<?php
wp_footer();
?>
</div>
</body>
<script>
    // btnLanguae listener
    var btnLanguae = document.querySelector(".language").addEventListener("mouseover", mouseOver);
    var btnLanguae = document.querySelector(".language").addEventListener("mouseout", mouseOut);
    var vieLanguage = document.querySelector(".vie-language")
    var dropDownLangue = document.querySelector(".droplanguagebtn")



    function mouseOver() {
        vieLanguage.style.display = "block";
        dropDownLangue.style.transform = "rotate(-135deg)";
    }


    function mouseOut() {
        dropDownLangue.style.transform = "rotate(45deg)";
        vieLanguage.style.display = "none";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>