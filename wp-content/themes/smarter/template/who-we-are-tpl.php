<?php
/* Template Name: Who We Are*/

get_header(); ?>

<!-- About Us page -->
<div id="fullpage" class="znt-index">
<?php
    while (have_posts()) : the_post();
    
    $banner_bg = get_template_directory_uri().'/assets/images/banner/heading/banner1.jpg';
    $banner_img_url = get_field( 'banner_image' );
    if ( ! empty( $banner_img_url ) ) {
        $banner_bg = $banner_img_url['url'];
    }

    ?>
    <section class="section" id="section0">
        <div class="title-banner halfbanner banner-30"
             style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo $banner_bg; ?>">
            <div class="container-fluid">
                <div class="heading-contents">
                    <div class="heading-title wow fadeInDown">
                        <h1><?php the_field( 'title' ); ?></h1>
                    </div>
                    <div class="heading-paragraph wow fadeInUp">
                        <p><?php the_field( 'sub_heading' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-contents-custom">
            <div class="custom-abt-img">
                <?php 
                $images = get_field('image_left_side');
                $counter = 1;
                $size = 'full'; 
                if( $images ): 
                    echo '<div class="abt-images">';
                    foreach( $images as $image_id ): 
                        echo wp_get_attachment_image( $image_id, $size,false,array('class'=>'missionImage-'.$counter)); 
                        if($counter == 2){ echo '</div><div class="abt-images">'; }                    
                        $counter++;
                    endforeach;   
                    echo "</div>";  
                endif; 
                ?>
            </div>
            <div class="container-fluid">
                <div class="contents-about">
                    <div class="row">
                        <div class="col-md-6">
                           
                        </div>
                        <div class="col-md-6">
                            <div class="wow fadeInDown">
                                <div class="section-title pt-d">
                                    <div class="main-title">
                                        <h2><?php the_field( 'heading' ); ?></h2>
                                    </div>
                                </div>
                                <div class="cnt-abt wow pulse">
                                    <?php the_field( 'details' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
      $block_bg_image = get_template_directory_uri().'/assets/images/others/image2.jpg';
      $bg_image = get_field( 'banner_image' );
      if ( ! empty( $bg_image ) ) {
          $block_bg_image = $bg_image['url'];
      }
    ?>
    <section class="section fullcover" id="section1"
             style="background-image: url(<?php echo $block_bg_image; ?>">
        <div class="overall-section">
            <div class="container-fluid">
                <div class="overall-contents">
                    <div class="col-md-7 wow fadeInLeft">
                        <div class="section-title">
                            <div class="main-title">
                                <h2><?php the_field( 'why_smarter_heading' ); ?></h2>
                                <div class="section-paragraph mx-w830 color-wht mt-20"><?php the_field( 'why_smarter_sub_heading' ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="list-whyChose">
                            <ul>
                                <?php
                                $counter_faq = 1;
                                if ( have_rows( 'why_features_who' ) ) :
                                while ( have_rows( 'why_features_who' ) ) :
                                the_row();
                                ?>    
                                <li><?php the_sub_field('feature_lists');?></li>
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
    </section>
    <?php endwhile; // end of the loop. ?>
    <?php get_footer(); ?>