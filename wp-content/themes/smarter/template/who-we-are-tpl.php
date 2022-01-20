<?php
/* Template Name: Who We Are*/ 

get_header();?>

<!-- About Us page -->
<div id="fullpage" class="znt-index">
    <section class="section" id="section0" >
        <div class="title-banner halfbanner" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo get_template_directory_uri();?>/assets/images/banner/heading/banner1.jpg">
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
        <div class="about-contents ptb-50">
            <div class="container-fluid">
                <div class="contents-about">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cnt-abt text-center wow pulse">
                                <?php the_field( 'description' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
<?php get_footer(); ?>
