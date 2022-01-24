<?php
/* Template Name: Service listing */

get_header(); ?>

    <!-- career page -->
    <div id="fullpage" class="znt-index">
<?php
while (have_posts()) : the_post();
    ?>

    <section class="section service-listing-wrapper" id="section0">
        <?php
        $banner_bg = get_template_directory_uri() . '/assets/images/banner/heading/banner1.jpg';
        $banner_bg2 = get_template_directory_uri() . '/assets/images/banner/heading/banner2.jpg';
        $banner_img_url = get_field('banner_bg_image');
        if (!empty($banner_img_url)) {
            $banner_bg = $banner_img_url['url'];
        }
        ?>
        <div class="title-banner halfbanner" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo $banner_bg; ?>">
            <div class="container-fluid">
                <div class="heading-contents">
                    <div class="heading-title wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <h1>Our additional Products & services</h1>
                    </div>
                    <div class="heading-paragraph wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <p>These dummy text are for display purposes only to show the volume of content that will be placed on this particular page. contents are for display purpose"</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ptb-50">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="section-title">
                            <div class="main-title text-center">
                                <h2>Services<span class="mg-l">We Offer</span></h2>
                            </div>
                            <div class="section-paragraph mx-w830 text-center margin-center mt-20">
                                Solar is not just a phase- it's an aggressively growing alternatives as more and more people realize that they can save money every month by using solar panels.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contents-about offer-sliderContents">
                    <div class="row">
                        <?php for ($i=1; $i <=6 ; $i++) { ?>
                        <div class="col-md-4">
                            <div class="service-listing-single mb-4">
                                <div class="card-slider">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner1.jpg" alt="">
                                    <div class="content-servicesSlider">
                                        <h3>Live clean & Green</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus soluta tenetur, ratione eos tempore aliquid. </p>
                                    </div>
                                </div>
                            </div>
                        </div><!--close col-->
                        <?php } ?>

                    </div><!--row close-->
                </div>
            </div>
        </div>
    </section>


<?php endwhile; // end of the loop.
?>
<?php get_footer(); ?>