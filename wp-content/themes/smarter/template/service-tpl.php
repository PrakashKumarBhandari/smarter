<?php
/* Template Name: Service */

get_header(); ?>

<!-- career page -->
<div id="fullpage" class="znt-index">
    <?php
    while (have_posts()) : the_post();

        $banner_bg = get_template_directory_uri().'/assets/images/banner/heading/banner1.jpg';
        $banner_img_url = get_field( 'banner_bg_image' );
        if ( ! empty( $banner_img_url ) ) {
            $banner_bg = $banner_img_url['url'];
        }
    ?>
        <section class="section" id="section0">
            <div class="title-banner halfbanner" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo $banner_bg; ?>">
                <div class="container-fluid">
                    <div class="heading-contents">
                        <div class="heading-title wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                            <h1><?php the_field( 'banner_title' ); ?></h1>
                        </div>
                        <div class="heading-paragraph wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <p><?php the_field( 'banner_sub_heading' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-contents ptb-50">
                <div class="container-fluid">
                    <div class="contents-about">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title wow fadeInDown">
                                    <div class="main-title">
                                        <h2><?php the_field( 'block_heading' ); ?></h2>
                                        <p><?php the_field( 'sub_heading' ); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="trust-list wow fadeInUp">
                                    <ul>
                                        <?php
                                        // Check rows exists.
                                        if ( have_rows( 'features' ) ) :
                                        // Loop through rows.
                                        while ( have_rows( 'features' ) ) :
                                        the_row();

                                        $icon_img = get_template_directory_uri().'/assets/images/icons/Retrofitting.png';
                                        $smarter_right = get_sub_field( 'feature_image' );
                                        if ( ! empty( $smarter_right ) ) {
                                            $icon_img = $smarter_right['url'];
                                        }
                                        ?> 
                                        <li>
                                            <div class="card-trust">
                                                <div class="img-trust">
                                                    <img src="<?php echo $icon_img;?>" alt="">
                                                </div>
                                                <div class="cnt-trust">
                                                    <label><?php the_sub_field( 'heading' ); ?></label>
                                                    <p><?php the_sub_field( 'short_detail' ); ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                        endwhile;
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section " id="section1">
            <div class="container-fluid">
                <div class="section-title">
                    <div class="main-title text-center">
                        <h2><?php the_field( 'service_heading' ); ?></h2>
                    </div>
                    <div class="section-paragraph mx-w830 text-center margin-center mt-20"><?php the_field( 'short_detail' ); ?></div>
                </div>
            </div>
            <div class="offer-sliderContents">
                <div class="owl-carousel services-slider blur-slider owl-theme"> <!-- adding class blur-slider will give blur effect on the  owl carousel -->
                    <?php
                    // Check rows exists.
                    if ( have_rows( 'offers' ) ) :
                    // Loop through rows.
                    while ( have_rows( 'offers' ) ) :
                    the_row();

                    $service_img = get_template_directory_uri().'/assets/images/banner/banner1.jpg';
                    $smarter_right = get_sub_field( 'image' );
                    if ( ! empty( $smarter_right ) ) {
                        $service_img = $smarter_right['url'];
                    }
                    ?>     
                    <div class="item cardSlider-services">
                        <div class="card-slider">
                            <img src="<?php echo $service_img; ?>" alt="">
                            <div class="content-servicesSlider">
                                <h3><?php the_sub_field( 'title' ); ?></h3>
                                <p><?php the_sub_field( 'short_deatil' ); ?></p>
                                <div class="button-cnt">
                                    <a href="<?php the_sub_field( 'link' ); ?>">Click Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>

        <?php 
        $testimonial_banner_bg = get_template_directory_uri().'/assets/images/banner/heading/banner1.jpg';
        $banner_img_url = get_field( 'bg_image' );
        if ( ! empty( $banner_img_url ) ) {
            $testimonial_banner_bg = $banner_img_url['url'];
        }
        ?>
        <section class="section " id="section2" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo $testimonial_banner_bg; ?>">
            <div class="container-fluid">
                <div class="section-title">
                    <div class="main-title text-center">
                        <h2 class="text-white"><?php the_field( 'heading' ); ?></h2>
                    </div>
                </div>
                <div class="offer-sliderContents">
                    <div class="owl-carousel wht-theysay owl-theme">
                        <?php
                        global $post;
                        $testimonials = get_posts( array(
                            'offset' => 0,
                            'posts_per_page' =>-1,
                            'post_type'      => 'testimonials'
                        ));

                        if ( $testimonials ) {
                        foreach ( $testimonials as $post ) : 
                        setup_postdata( $post ); ?>    
                        <div class="item">
                            <div class="card-quote">
                                <div class="icon-quote">
                                    <svg viewBox="0 0 476 403" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M164.45 183.27H100.496C92.882 183.27 86.409 180.606 81.079 175.276C75.752 169.946 73.085 163.475 73.085 155.859V146.727C73.085 126.55 80.224 109.326 94.501 95.0489C108.777 80.7769 126.004 73.6379 146.179 73.6379H164.45C169.398 73.6379 173.679 71.8289 177.297 68.2139C180.913 64.5969 182.721 60.3159 182.721 55.3669V18.8189C182.721 13.8709 180.912 9.58593 177.297 5.96893C173.68 2.35693 169.399 0.544922 164.45 0.544922H146.179C126.382 0.544922 107.495 4.40293 89.506 12.1079C71.519 19.8179 55.961 30.2399 42.826 43.3749C29.692 56.5039 19.273 72.0629 11.564 90.0519C3.855 108.039 0 126.931 0 146.726V347.717C0 362.952 5.327 375.888 15.986 386.551C26.646 397.208 39.592 402.536 54.818 402.536H164.457C179.682 402.536 192.624 397.208 203.285 386.551C213.942 375.888 219.272 362.952 219.272 347.717V238.088C219.272 222.856 213.942 209.92 203.278 199.256C192.622 188.6 179.675 183.27 164.45 183.27Z" fill="#292929"/>
                                        <path d="M459.103 199.256C448.447 188.6 435.504 183.27 420.275 183.27H356.322C348.712 183.27 342.233 180.606 336.912 175.276C331.58 169.946 328.918 163.475 328.918 155.859V146.727C328.918 126.55 336.057 109.326 350.327 95.0489C364.598 80.7769 381.824 73.6379 402.009 73.6379H420.276C425.225 73.6379 429.509 71.8289 433.124 68.2139C436.737 64.5969 438.552 60.3159 438.552 55.3669V18.8189C438.552 13.8709 436.738 9.58593 433.124 5.96893C429.51 2.35693 425.226 0.544922 420.276 0.544922H402.009C382.201 0.544922 363.318 4.40293 345.324 12.1079C327.34 19.8179 311.787 30.2399 298.652 43.3749C285.517 56.5039 275.093 72.0629 267.387 90.0519C259.68 108.039 255.82 126.931 255.82 146.726V347.717C255.82 362.952 261.152 375.888 271.808 386.551C282.465 397.208 295.408 402.536 310.636 402.536H420.269C435.498 402.536 448.44 397.208 459.096 386.551C469.76 375.888 475.081 362.952 475.081 347.717V238.088C475.082 222.855 469.76 209.92 459.103 199.256Z" fill="#292929"/>
                                    </svg>
                                </div>
                                <div class="cntqoute">
                                <?php echo wp_trim_words(get_the_content(),1000);  ?>
                                </div>
                            </div>
                            <div class="clt-say">
                                <div class="name-say"><?php the_title(); ?></div>
                                <div class="position-clt"><?php  the_field( 'designation' ); ?></div>
                            </div>
                        </div>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>
            </div>
            
        </section>
    <?php endwhile; // end of the loop. 
    ?>
    <?php get_footer(); ?>