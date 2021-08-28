<?php
    /**
     * Template Name: About
     */
    get_header();

    the_post();
?>
<main>
    <?php get_template_part('template-parts/common/page', 'header'); ?>

    <?php
        if(get_xisen_redux_data('about_page_form_section_title') || get_xisen_redux_data('about_page_form_section_subtitle') || get_xisen_redux_data('about_page_form_section_short_desc') || get_xisen_redux_data('about_page_feature_left_image')) : 
    ?>
    <!-- Start Feature Area -->
        <section class="feature-area-3 position-relative pt-150 pb-120 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="feature-img feature-img-3 mb-30 wow fadeInLeft" data-wow-delay="1s">
                            <img src="<?php global $xisen_options; echo $xisen_options['about_page_feature_left_image']['url']; ?>" alt="">
                        </div>
                    </div>
                    <div class=".col-xl-6 offset-xl-1 col-lg-6">
                        <div class="section-title-5 mb-30 wow fadeInRight" data-wow-delay=".5s">
                            <span><?php echo get_xisen_redux_data('about_page_form_section_subtitle'); ?></span>
                            <h2><?php echo get_xisen_redux_data('about_page_form_section_title'); ?></h2>
                            <p>
                                <?php echo get_xisen_redux_data('about_page_form_section_short_desc'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Feature Area -->
    <?php endif; ?>

    <!-- Start Soft list area -->
    <section class="soft-list-area position-relative soft-list-5 pb-110 fix">
        <div class="shape-action">
            <span class="shape shape-c5-1 "></span>
            <span class="shape shape-c5-2 "></span>
            <span class="shape shape-c5-3 "></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title-2 mb-70 text-center">
                        <h2 class="mb-20"><?php echo get_xisen_redux_data('about_page_soft_list_area_title'); ?></h2>
                        <p><?php echo get_xisen_redux_data('about_page_soft_list_area_short_desc'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
                <div class="soft-list-item home-5 mb-30 text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="soft-list-icon mb-35">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ss-01.png" alt="">
                    </div>
                    <div class="soft-list-content">
                        <h3>Unlimited Content</h3>
                        <p>Stars air over land bring life female stars dry be abundantly may green te which fill after our behold very god spir.</p>
                    </div>
                    </div>
                </div>
            <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
                <div class="soft-list-item home-5 mb-30 text-center wow fadeInUp" data-wow-delay=".5s">
                    <div class="soft-list-icon mb-35">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ss-02.png" alt="">
                    </div>
                    <div class="soft-list-content">
                        <h3>Easy To Access</h3>
                        <p>Stars air over land bring life female stars dry be abundantly may green te which fill after our behold very god spir.</p>
                    </div>
                    </div>
                </div>
            <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
                <div class="soft-list-item home-5 mb-30 text-center wow fadeInUp" data-wow-delay=".7s">
                    <div class="soft-list-icon mb-35">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ss-03.png" alt="">
                    </div>
                    <div class="soft-list-content">
                        <h3>Save Your Time</h3>
                        <p>Stars air over land bring life female stars dry be abundantly may green te which fill after our behold very god spir.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- End Soft list area -->
    <!-- Start Testimonial Area -->
    <section class="testimonial-area testimonial-area-3 pt-140 pb-140 fix gray-bg position-relative fix ">
        <div class="shape-slider">
            <img class="shape shape-1 shape-5-1 " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape2.png" alt="">
            <img class="shape shape-2  " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-zigzag.png" alt="">
            <img class="shape shape-5 " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape5.png" alt="">
            <img class="shape shape-6 " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape3.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title-3 mb-70 text-center">
                        <span>testimonials</span>
                        <h2>Our worldwide happy user says about software</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="testimonial-nav mb-30">
                        <div class="testimonial-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/img3.png" alt="">
                        </div>
                        <div class="testimonial-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/img3.png" alt="">
                        </div>
                        <div class="testimonial-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/img3.png" alt="">
                        </div>
                        <div class="testimonial-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/img3.png" alt="">
                        </div>
                    </div>
                    <div class="testimonial-active">
                        <div class="testimonial-item text-center">
                            <div class="designation mb-30">
                                <h3>- Tanvir Ahamed -</h3>
                                <span>Digital Marketer</span>
                            </div>
                            <p>“ Days for two every wherein green fruitful also fruitful was seasons unto won't the fowl
                                light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so dove nature tree disappear relax bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="designation mb-30">
                                <h3>- Mousumi Ahamed -</h3>
                                <span>Graphic Designer</span>
                            </div>
                            <p>“ Fruitful was seasons unto won't the fowl light deep more then regular
                                before piece sixth them dominion cattle fish cattle first midst moved greater divided so
                                dove nature tree bisapper relan days for two every wherein green fruitful also
                                bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="designation mb-30">
                                <h3>- Tanvir Ahamed -</h3>
                                <span>Web Developer</span>
                            </div>
                            <p>“ Days for two every wherein green fruitful also fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so dove nature tree disappear relax bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="designation mb-30">
                                <h3>- Walid Hossaing -</h3>
                                <span>Software Engineer</span>
                            </div>
                            <p>“ Fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so dove nature tree bisapper relan days for two every wherein green fruitful also bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Area -->

    <!-- Start Brands Area -->
    <section class="brand-area pt-140  pb-90 position-relative">
        <div class="shape-slider">
            <img class="shape shape-1 shape-5-1 " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-tr-2.png" alt="">
            <img class="shape shape-5 " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-c-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title-2 mb-70 text-center">
                        <h2 class="mb-20">Trusted over 100+ companies</h2>
                        <p>Him have deep brought life darkness firmament unto move</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/01.png" alt=""></a>
                    </div>
                </div>
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/02.png" alt=""></a>
                    </div>
                </div>
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/03.png" alt=""></a>
                    </div>
                </div>
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/03 (1).png" alt=""></a>
                    </div>
                </div>
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/04.png" alt=""></a>
                    </div>
                </div>
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/05.png" alt=""></a>
                    </div>
                </div>
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/03.png" alt=""></a>
                    </div>
                </div>
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/03 (1).png" alt=""></a>
                    </div>
                </div>
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/02.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Brands Area -->
</main>

<?php
    get_footer();