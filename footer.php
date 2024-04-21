<?php
    wp_footer();
    ?>



<footer class= 'footer'>

<div class= 'row0 w-100'>
    <div class= 'line0' ></div>

    <div class= 'nrj_logo'>
<?php if(function_exists('the_custom_logo')){the_custom_logo();} ?>
</div>

<div class="mx-auto p4 w-100">

<div class="container">
  <nav class="navbar navbar-expand">
    <div class="container-fluid mt-4 ">

      <?php 
wp_nav_menu(
    array(
        'menu' => 'footer',
        'container' =>'',
        'theme_location' => 'footer',
        'items_wrap' => '<ul id="" 
        class="
        d-flex 
        flex-wrap
        navbar-nav
        ">%3$s</ul>'
          
    )
)
?>
      
    </div>
  </nav>
</div>



</div>
</div>

</div>

</footer>

