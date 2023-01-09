<?php
/**
 * Heaer Navigation
 * @package coderblog
     */
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   <?php
   if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
  }
   ?><?php
    wp_nav_menu( 
      array( 
        'container'      => 'div',
		    'container_class'=> '',
        'menu_class'     => 'nav',
		    'menu_id'        => '',
        'add_li_class'=>'px-3',
       ) 
    );
    ?>
</nav>
<?php

