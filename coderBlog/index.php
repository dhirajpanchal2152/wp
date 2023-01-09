<?php
/*
*  Main template 
*
*/
   get_header();   // include a header part
?>
<?php the_title();

the_content();
the_post_thumbnail(); 
dynamic_sidebar( 'primary' );
?>
    <!-- <div class="content">
   

    </div> -->
 <?php get_footer();?> <!-- // include a footer Part -->
    