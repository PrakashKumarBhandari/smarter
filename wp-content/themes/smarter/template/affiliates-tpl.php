<?php
/* Template Name: Affiliates */ 

get_header();?>
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
                        <h1><?php the_field( 'banner_heading' ); ?></h1>
                    </div>
                    <div class="heading-paragraph wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <p><?php the_field( 'short_detail' ); ?></p>
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
                                    <h2><?php the_field( 'heading' ); ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="description-abt wow fadeInUp">
                            <?php the_field( 'detail' ); ?>
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
                    <h2><?php the_field( 'builder_block_heading' ); ?></h2>
                </div>
                <div class="section-paragraph mx-w830 text-center margin-center mt-20"><?php the_field( 'sub_heading' ); ?></div>
            </div>
        </div>
        <div class="offer-sliderContents">
            <div class="owl-carousel services-slider blur-slider owl-theme"> <!-- adding class blur-slider will give blur effect on the  owl carousel -->
                <?php
                // Check rows exists.
                if ( have_rows( 'feature_list' ) ) :
                // Loop through rows.
                while ( have_rows( 'feature_list' ) ) :
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
                                <a href="<?php the_sub_field( 'link_url' ); ?>">Click Here</a>
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
    $affiliate_banner_bg = get_template_directory_uri().'/assets/images/banner/heading/banner1.jpg';
    $banner_img_url = get_field( 'bg_image' );
    if ( ! empty( $banner_img_url ) ) {
        $affiliate_banner_bg = $banner_img_url['url'];
    }
    ?>
    <section class="section fullcover" id="section2" style="background-image: url(<?php echo $affiliate_banner_bg;?>);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7  wow fadeInRight" >
                        <div class="section-title">
                            <div class="main-title">
                                <h2><span class="primary-color font-weight-bold"><?php the_field('block_heading');?></span></h2>
                                <div class="section-paragraph mx-w830 mt-20"><?php the_field('referal_short_details');?></div>
                            </div>
                        </div>
                        <div class="responsibility-contents">                                
                            <?php
                            if ( have_rows( 'features' ) ) :
                            while ( have_rows( 'features' ) ) :
                            the_row();
                            ?>  
                            <div class="respon_contentList">
                                <div class="respon_contentTitle">
                                    <h3 class="color-black"><?php the_sub_field( 'title' ); ?></h3>
                                    <p><?php the_sub_field( 'detail' ); ?></p>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            endif;
                            ?>
                            
                        </div>
                    </div>
                </div><!-- row close -->
            </div>
    </section>        
        <?php endwhile; // end of the loop. 
    ?>
<?php get_footer(); ?>
