<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php
    wp_head();
    ?>
</head>
<body>


    <header class= "header sticky-top">
    <div class= 'line1' ></div>

    <div class= 'nrj_logo'>
<?php if(function_exists('the_custom_logo')){the_custom_logo();} ?>
</div>

<div class="d-flex p3 w-100 justify-content-end">

<nav class="navbar navbar-expand-lg">

<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>  
</button>
<div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
<div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Close</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">


        <div id='navigation' class='nav-bar'>

<?php 
    wp_nav_menu(
array(
'menu' => 'primary',
'container' =>'',
'theme_location' => 'primary',
'items_wrap' => '<ul id="" 
class="
navbar-nav 
me-auto 
mb-2 
mb-lg-0
d-flex 
">%3$s</ul>'
));?>

</div>

      </div>
 
    </div>
    
  </div>
</nav>

</div>

</div>


</header>
