<?php
/* Template Name: Commercial Solar */

get_header(); ?>

<!-- career page -->
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
                <div class="title-banner halfbanner" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo $banner_bg; ?>">
                    <div class="container-fluid">
                        <div class="heading-contents">
                            <div class="heading-title wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                <h1><?php the_field( 'banner_title' ); ?></h1>
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
                            <h2><?php the_field( 'solution_heading' ); ?></h2>
                        </div>
                        <div class="section-paragraph mx-w830 text-center margin-center mt-20"><?php the_field( 'solution_short_detail' ); ?></div>
                    </div>
                </div>
                <div class="offer-sliderContents">
                    <div class="owl-carousel services-slider blur-slider owl-theme"> <!-- adding class blur-slider will give blur effect on the  owl carousel -->
                        <?php                        
                        $args = array(
                            'post_type' => 'solutions',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'posts_per_page' => -1
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                        ?>
                        <div class="item cardSlider-services">
                            <div class="card-slider">
                                <?php 
                                    if ( has_post_thumbnail(get_the_ID() ) ) {
                                        echo get_the_post_thumbnail( get_the_ID(), 'slider_medium' );
                                    }
                                ?>
                                <div class="content-servicesSlider">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo wp_trim_words( get_the_excerpt(), 15, '' ); ?></p>
                                    <div class="button-cnt">
                                        <a href="<?php the_permalink(); ?>">Click Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </section>
            
            <?php 
            $section_image_bg = get_template_directory_uri().'/assets/images/banner/heading/banner1.jpg';
            $img_url = get_field( 'section_bg_image' );
            if ( ! empty( $img_url ) ) {
                $section_image_bg = $img_url['url'];
            }
            ?>
            <section class="section fullcover" id="section1" style="background-image: url(<?php echo $section_image_bg;?>);">
            	<div class="bg-overlay-black">
	        		<div class="container-fluid">
			            <div class="row">
                            <?php 
                            $left_block = get_field('left_block');
                            ?>
			                <div class="col-md-6 wow fadeInLeft">
			                    <div class="padding-black">
			                    	<div class="section-title">
			                    	    <div class="main-title">
			                    	        <h2><span class="color-ylw font-weight-bold"><?php echo $left_block['block_heading']; ?></span></h2>
			                    	        <div class="section-paragraph mx-w830 color-wht mt-20"><?php echo $left_block['short_detail']; ?> </div>
			                    	    </div>
			                    	</div>
			                    	<div class="responsibility-contents">
                                        <?php 
                                        $repeaters = $left_block['feature'];
                                        foreach($repeaters as $repeater) {
                                        ?>
                                        <div class="respon_contentList">
			                    	        <div class="respon_contentTitle">
			                    	            <h3><?php echo $repeater["title"];?></h3>
			                    	            <p class="color-wht"><?php echo $repeater["detail"];?></p>
			                    	        </div>
			                    	    </div>
                                        <?php
                                        }
                                        ?>   			                    	   
			                    	</div>
			                    </div>
			                </div><!-- column close -->
                            <?php 
                            $right_block = get_field('right_block');
                            ?>
			                <div class="col-md-6 wow fadeInRight">
			                    <div class="padding-black">
			                    	<div class="section-title">
			                    	    <div class="main-title">
			                    	        <h2><span class="color-ylw font-weight-bold"><?php echo $right_block['block_heading']; ?></span></h2>
			                    	        <div class="section-paragraph mx-w830 color-wht mt-20"><?php echo $right_block['short_detail']; ?></div>
			                    	    </div>
			                    	</div>
			                    	<div class="responsibility-contents">                        
			                    	    <?php 
                                        $right_repeaters = $right_block['feature'];
                                        if(isset($right_repeaters)){
                                        foreach($right_repeaters as $repeater) {
                                        ?>
                                        <div class="respon_contentList">
			                    	        <div class="respon_contentTitle">
			                    	            <h3><?php echo $repeater["title"];?></h3>
			                    	            <p class="color-wht"><?php echo $repeater["detail"];?></p>
			                    	        </div>
			                    	    </div>
                                        <?php
                                        }}
                                        ?>   
			                    	</div>
			                    </div>
			                </div><!-- column close -->
			            </div><!-- row close -->
			        </div>
            	</div>
            </section>
            <!-- close on one section -->
            <?php 
            
            $final_block = get_field('block');
             

            $section_last_bg = get_template_directory_uri().'/assets/images/others/image5c.png';
            $last_img_url = get_field( 'final_section_bg_image' );
            if ( ! empty( $last_img_url ) ) {
                 $section_last_bg = $last_img_url['url'];
            }
            ?>
            <section class="section fullcover" id="section1" style="background-image: url(<?php echo $section_last_bg;?>">
                    <div class="container-fluid">
                        <div class="row">
                        	<div class="col-md-5"></div>
                            <div class="col-md-7  wow fadeInRight" >
                                <div class="section-title">
                                    <div class="main-title">
                                        <h2><span class="primary-color font-weight-bold"><?php echo $final_block['block_heading']; ?></span></h2>
                                        <div class="section-paragraph mx-w830 mt-20"><?php echo $final_block['short_detail']; ?></div>
                                    </div>
                                </div>
                                <div class="responsibility-contents">                                    
                                    <?php 
                                    $final_block_repeaters = $final_block['feature'];
                                    if(isset($final_block_repeaters)){
                                    foreach($final_block_repeaters as $repeater) {
                                    ?>
                                    <div class="respon_contentList">
                                        <div class="respon_contentTitle">
                                            <h3 class="color-black"><?php echo $repeater["title"];?></h3>
                                            <p><?php echo $repeater["detail"];?></p>
                                        </div>
                                    </div>
                                    <?php
                                    }}
                                    ?>  
                                </div>
                            </div>
                        </div><!-- row close -->
                    </div>
            </section>

<?php endwhile; // end of the loop. 
?>
<?php get_footer(); ?>