<?php
/*  Commercial Solar */

get_header(); ?>

<!-- career page -->
<div id="fullpage" class="znt-index">
    <?php
    while (have_posts()) : the_post();
    ?>
            <section class="section" id="section0">
                <?php
                $banner_bg = get_template_directory_uri() . '/assets/images/solar.png';
                $banner_bg2 = get_template_directory_uri() . '/assets/images/solar.png';
                $banner_img_url = get_field('banner_bg_image');
                if (!empty($banner_img_url)) {
                    $banner_bg = $banner_img_url['url'];
                }
                ?>
                <div class="title-banner halfbanner" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo $banner_bg; ?>">
                    <div class="container-fluid">
                        <div class="heading-contents">
                            <div class="heading-title wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                <h1>Commercial Solar</h1>
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
                                            <h2><span>Commercial </span> Solar</h2>
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
            <section class="section " id="section1">
                <div class="container-fluid">
                    <div class="section-title">
                        <div class="main-title text-center">
                            <h2><span class="mg-l">Our </span>Solution</h2>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner2.jpg" alt="">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner3.jpg" alt="">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner4.jpg" alt="">
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
            <section class="section fullcover" id="section1" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/banner/heading/banner2.jpg">
            	<div class="bg-overlay-black">
	        		<div class="container-fluid">
			            <div class="row">
			                <div class="col-md-6 wow fadeInLeft">
			                    <div class="padding-black">
			                    	<div class="section-title">
			                    	    <div class="main-title">
			                    	        <h2><span class="color-ylw font-weight-bold">Title Goes here</span></h2>
			                    	        <div class="section-paragraph mx-w830 color-wht mt-20">Solar is not just a phase – it’s an aggressively growing alternative as more and more people realize that they can save money every month by using solar panels. </div>
			                    	    </div>
			                    	</div>
			                    	<div class="responsibility-contents">                        
			                    	    <div class="respon_contentList">
			                    	        <div class="respon_contentTitle">
			                    	            <h3>Temporary title goes Here.</h3>
			                    	            <p class="color-wht">When you need your company to have a new website or if you venture on updating your old webpage with a new look and functionality, the choices are versatile. Assuming that your will go the east way and choose a theme for your WordPress website, the overall number of characteristics that you will need to keep in mind.</p>
			                    	        </div>
			                    	    </div>
			                    	   <div class="respon_contentList">
			                    	        <div class="respon_contentTitle">
			                    	            <h3>Temporary title goes Here.</h3>
			                    	            <p class="color-wht">Assuming that you will go the way and choose a themes for your WordPress website,  the overall number of characteristics that you will need to keep in mind.</p>
			                    	        </div>
			                    	    </div>
			                    	    <div class="respon_contentList">
			                    	        <div class="respon_contentTitle">
			                    	            <h3>Temporary title goes Here.</h3>
			                    	            <p class="color-wht">Assuming that you will go the way and choose a themes for your WordPress website,  the overall number of characteristics that you will need to keep in mind.</p>
			                    	        </div>
			                    	    </div>
			                    	</div>
			                    </div>
			                </div><!-- column close -->
			                <div class="col-md-6 wow fadeInRight">
			                    <div class="padding-black">
			                    	<div class="section-title">
			                    	    <div class="main-title">
			                    	        <h2><span class="color-ylw font-weight-bold">Title Goes here</span></h2>
			                    	        <div class="section-paragraph mx-w830 color-wht mt-20">Solar is not just a phase – it’s an aggressively growing alternative as more and more people realize that they can save money every month by using solar panels. </div>
			                    	    </div>
			                    	</div>
			                    	<div class="responsibility-contents">                        
			                    	    <div class="respon_contentList">
			                    	        <div class="respon_contentTitle">
			                    	            <h3>Temporary title goes Here.</h3>
			                    	            <p class="color-wht">When you need your company to have a new website or if you venture on updating your old webpage with a new look and functionality, the choices are versatile. Assuming that your will go the east way and choose a theme for your WordPress website, the overall number of characteristics that you will need to keep in mind.</p>
			                    	        </div>
			                    	    </div>
			                    	   <div class="respon_contentList">
			                    	        <div class="respon_contentTitle">
			                    	            <h3>Temporary title goes Here.</h3>
			                    	            <p class="color-wht">Assuming that you will go the way and choose a themes for your WordPress website,  the overall number of characteristics that you will need to keep in mind.</p>
			                    	        </div>
			                    	    </div>
			                    	    <div class="respon_contentList">
			                    	        <div class="respon_contentTitle">
			                    	            <h3>Temporary title goes Here.</h3>
			                    	            <p class="color-wht">Assuming that you will go the way and choose a themes for your WordPress website,  the overall number of characteristics that you will need to keep in mind.</p>
			                    	        </div>
			                    	    </div>
			                    	</div>
			                    </div>
			                </div><!-- column close -->
			            </div><!-- row close -->
			        </div>
            	</div>
            </section>
            <!-- close on one section -->
            <section class="section fullcover" id="section1" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/others/image5c.png">

                    <div class="container-fluid">
                        <div class="row">
                        	<div class="col-md-5"></div>
                            <div class="col-md-7  wow fadeInRight" >
                                <div class="section-title">
                                    <div class="main-title">
                                        <h2><span class="primary-color font-weight-bold">Temporary title goes Here</span></h2>
                                        <div class="section-paragraph mx-w830 mt-20">When you need ipsum dolor sit , consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit is Dolore ratione deserunt sunt laborum voluptatem voluptatum incidunt magnam, alias illum molestias similique doloremque vel architecto dignissimos eius mollitia excepturi asperiores eligendi?</div>
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