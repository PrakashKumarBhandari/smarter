<?php
/* Template Name: Commercial Solar */

get_header(); ?>

<!-- career page -->
<div id="fullpage" class="znt-index">
    <?php
    while (have_posts()) : the_post();
    ?>

<?php endwhile; // end of the loop. 
?>
<?php get_footer(); ?>