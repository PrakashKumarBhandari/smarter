<?php
/* Template Name: Affiliates */ 

get_header();?>

<!-- /Affiliated -->
<div id="fullpage" class="znt-index">
    <?php
    while (have_posts()) : the_post();
    ?>

        <section class="section" id="section0">
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
                            <h1>Affiliates</h1>
                        </div>
                        <div class="heading-paragraph wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <p>When business wonder if solar is right for them, some of thier first question are, "Will solar affect my power quality?" and "Will solar be able to handle my high voltage equipment?"</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-contents ptb-50">
                <div class="container-fluid">
                    <div class="contents-about">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-title wow fadeInDown">
                                    <div class="main-title">
                                        <h2><span>Our</span> Affiliates</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="description-abt wow fadeInUp">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.  <br><br>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php /* ?>
            <section class="section" id="section1">
                 <!-- Swiper -->
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
            </section>
        </section>
<?php */ ?>
        <section class="section " id="section1">
            <div class="container-fluid">
                <div class="section-title">
                    <div class="main-title text-center">
                        <h2><span class="mg-l">Builder & Integrator </span>Program</h2>
                    </div>
                    <div class="section-paragraph mx-w830 text-center margin-center mt-20">It is a long established fact that a reader will be distracted by the readable content of a page when looking .</div>
                </div>
            </div>
            <div class="offer-sliderContents">
                <div class="owl-carousel services-slider owl-theme affiliate-slider"><!-- add class affiliate-slider for right opacity-->
                    <div class="item cardSlider-services">
                        <div class="card-slider">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner1.jpg" alt="">
                            <div class="content-servicesSlider">
                                <h3>Live clean & Green</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus soluta tenetur, ratione eos tempore aliquid. </p>
                                <div class="button-cnt">
                                    <button>Click Here</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item cardSlider-services">
                        <div class="card-slider">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner1.jpg" alt="">
                            <div class="content-servicesSlider">
                                <h3>Live clean & Green</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus soluta tenetur, ratione eos tempore aliquid. </p>
                                <div class="button-cnt">
                                    <button>Click Here</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item cardSlider-services">
                        <div class="card-slider">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner1.jpg" alt="">
                            <div class="content-servicesSlider">
                                <h3>Live clean & Green</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus soluta tenetur, ratione eos tempore aliquid. </p>
                                <div class="button-cnt">
                                    <button>Click Here</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item cardSlider-services">
                        <div class="card-slider">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner1.jpg" alt="">
                            <div class="content-servicesSlider">
                                <h3>Live clean & Green</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus soluta tenetur, ratione eos tempore aliquid. </p>
                                <div class="button-cnt">
                                    <button>Click Here</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section fullcover" id="section1" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/banner/banner-bg1.jpg">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7  wow fadeInRight" >
                            <div class="section-title">
                                <div class="main-title">
                                    <h2><span class="primary-color font-weight-bold">Customer Referals</span></h2>
                                    <div class="section-paragraph mx-w830 mt-20">When you need ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit is Dolore ratione deserunt sunt laborum voluptatem voluptatum incidunt magnam, alias illum molestias similique doloremque vel architecto dignissimos eius mollitia excepturi asperiores eligendi?</div>
                                </div>
                            </div>
                            <div class="responsibility-contents">
                                <div class="respon_contentList">
                                    <div class="respon_contentTitle">
                                        <h3 class="color-black">Temporary title goes Here</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ratione deserunt sunt laborum voluptatem voluptatum incidunt magnam, alias illum molestias similique doloremque vel architecto dignissimos eius mollitia excepturi asperiores eligendi?</p>
                                    </div>
                                </div>
                                    <div class="respon_contentList">
                                        <div class="respon_contentTitle">
                                            <h3 class="color-black">Temporary title goes Here</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ratione deserunt sunt laborum voluptatem voluptatum incidunt magnam, alias illum molestias similique doloremque vel architecto dignissimos eius mollitia excepturi asperiores eligendi?</p>
                                        </div>
                                </div>
                                    <div class="respon_contentList">
                                        <div class="respon_contentTitle">
                                            <h3 class="color-black">Temporary title goes Here</h3>
                                            <p>Alias illum molestias similique doloremque vel architecto dignissimos eius mollitia excepturi asperiores.</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row close -->
                </div>
        </section>

        
        <?php endwhile; // end of the loop. 
    ?>


<?php get_footer(); ?>
