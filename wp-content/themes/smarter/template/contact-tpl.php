<?php
/* Template Name: Contact Us */ 

get_header();?>
<?php
while ( have_posts() ) : the_post(); 

	$banner_image_url = get_template_directory_uri().'/assets/images/banner/heading/banner1.jpg';
	$banner_image     = get_field( 'banner_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
<!-- Contact Us page -->
<div id="fullpage" class="znt-index">
    <section class="section" id="section0" >
        <div class="title-banner halfbanner" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo $banner_image_url;?>">
            <div class="container-fluid">
                <div class="heading-contents">
                    <div class="heading-title contact_heading wow fadeInDown">
                        <h1><?php the_field( 'banner_heading' ); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form ptb-50">
            <div class="container-fluid">
                <div class="form-contents">
                    <div class="row">
                        <div class="col-md-7">
                           <div class="left-contactForm">
                               <div class="wrap-contactTitle">
                                    <?php
                                    $form_block = get_field('contact_form_block');
                                    if( $form_block ): ?>
                                    <div class="form-titleHeading">
                                        <h3><?php echo $form_block['form_heading']; ?> </h3>
                                    </div>
                                    <div class="form-paragraphHeading">
                                        <p><?php echo $form_block['fshort_detail']; ?></p>
                                    </div>
                                    <?php
                                    endif;
                                    ?>
                               </div>
                               <div class="contact-formInput">
                                    <?php echo do_shortcode('[contact-form-7 id="434" title="Contact Page"]'); ?>
                               </div>
                               
                           </div>
                        </div>
                        <div class="col-md-5">
                            <div class="right-cntDetails">
                                <?php
                                $contact = get_field('contact_detail_block');
                                if( $contact ): ?>
                                <div class="wrap-conactinfo">
                                    <div class="form-titleHeading">
                                        <h3 class="color-white "><?php echo $contact['heading']; ?> </h3>
                                    </div>
                                    <div class="form-paragraphHeading">
                                        <p class="color-white "><?php echo esc_attr( $contact['short_detail'] ); ?></p>
                                    </div>
                                </div>
                                <div class="cnt-infoList">
                                    <div class="card-contactInfo">
                                        <ul>
                                            <li>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/Retrofitting.png" alt="">
                                            </li>
                                            <li>
                                                <div class="list-location">
                                                    <label>Our Location:</label>
                                                    <p><?php echo esc_attr( $contact['locations'] ); ?></p>
                                                </div>
                                            </li> 
                                        </ul>
                                        <div class="line-btn">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="card-contactInfo">
                                        <ul>
                                            <li>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/Retrofitting.png" alt="">
                                            </li>
                                            <li>
                                                <div class="list-location">
                                                    <label>Contact Us:</label>
                                                    <p>Phone: <?php echo esc_attr( $contact['phone'] ); ?> <br> Email: <?php echo esc_attr( $contact['email'] ); ?></p>
                                                    
                                                </div>
                                            </li> 
                                        </ul>
                                        <div class="line-btn">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="card-contactInfo">
                                        <ul>
                                            <li>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/Retrofitting.png" alt="">
                                            </li>
                                            <li>
                                                <div class="list-location">
                                                    <label>Hours of Operration:</label>
                                                    <p><?php echo  $contact['operations_hours']; ?></p>
                                                </div>
                                            </li> 
                                        </ul>
                                    </div>
                                </div>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section1">
        <div class="location-map">
            <div class="container-fluid">
                <div class="map-include">
                 <?php the_field( 'contact_us_map' ); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; // end of the loop. ?>   
<?php get_footer(); ?>
