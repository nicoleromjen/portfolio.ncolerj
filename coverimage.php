<?php /*Template Name: Cover Image */ 

$image = get_field('cover_image');
$picture = $image['sizes']['custom_size'];
$embed =get_field ('vid_cv');
?>


<?php
get_header();
?>

<div class= 'page-container d-flex justify-content-center'>
 
<section class= 'page content-wrap'>

<style>
body {
  background-image: url('<?php echo $picture; ?>');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
  
}
</style>

  <div class='container'>
<div class= 'all_posts'>

<div class= 'transparent'>
 
</div>

<a id="section-1"></a>
<div class= 'p-5'>
</div>


  <div class= 'about'>
    
  <?php if (have_posts()) :
while ( have_posts() ) : the_post() ?>

<?php $infoLoop = new WP_Query(array(
'post_type' => 'info',
'posts_per_page' => -1
));
?>

<div class= 'FINDME'>
<?php 
if(have_rows('about')):
while(have_rows('about')): the_row();  
$about = get_field('about');
$my_name_is = get_sub_field('my_name_is');
$about_me = get_sub_field('about_me');
$profile = get_sub_field('profile');
$profile_pic = $profile['sizes']['my_custom_size'];
the_content(); 
?>

<div class='now row g-0 text-center.text-wrap d-flex justify-content-center'>

<div class= 'col-6 col-md-4'>

   <div class="center">
    <img src="<?php echo $profile_pic ?>" class="img-fluid" alt="...">
    </div>

</div>
<div class='col'>
  <div class = 'texti'>
  <h5>Hi! My name is</h5>
    <h1 class="nam"><?php echo $my_name_is ?></h1>
    <div class='yeye text-break'>
<p> <?php echo $about_me ?></p>
</div>
</div>

<div class= 'videocv w-auto'>
  <?php echo $embed;?>


</div>
</div>
</div>

</div>

<?php endwhile; ?>
  <?php endif; ?>


<?php wp_reset_postdata() ?>
</div>

  <?php endwhile; ?>
  <?php endif; ?>
</div>

<a id="section-2"></a>
<div class= 'p-5'>
</div>

<div class='nono'>  
<h1 class= 'exp'> Experience</h1>

<div class='row one d-flex justify-content-center'>

<div class='row wan'>

    <div class="accordion" id="accordionExample">
<?php if (have_posts()) :?>
  <?php while ( have_posts() ) : the_post(); ?>
<?php 
$ExpLoop = new WP_Query(array(
'post_type'=> 'heart',
'posts_per_page' => -1
));
?>
<div class="accordion-item border-0">
    <h2 class="accordion-header">
      <button class="accordion-button border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       <h1>Projects</h1>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex flex-wrap">
  <?php if($ExpLoop ->have_posts()): ?>
<?php while ($ExpLoop ->have_posts()): $ExpLoop ->the_post()?>
<?php
$Tit = get_field('work_title');
$Pho = get_field('work_image');
$Des = get_field('work_description');
$Dat = get_field('date');
?>
      <div class="card border-0 m-1" style="width: 17rem;">
  <img src="<?php echo esc_url($Pho['url']); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $Tit ?></h5>
    <h6 class="card-date"><?php echo $Dat ?></h6>
    <p class="card-text"><?php echo $Des ?></p>
  </div>
</div>
<?php endwhile; ?>
  <?php endif; ?>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata() ?>
  <?php endwhile; ?>
  <?php endif; ?>



  <div class= 'row two'>
  

<?php if (have_posts()) :?>
  <?php while ( have_posts() ) : the_post(); ?>
<?php 
$ExpLoop = new WP_Query(array(
'post_type'=> 'photo',
'posts_per_page' => -1
));
?>
<div class="accordion-item border-0">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       <h1>Photography</h1>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex flex-wrap">
  <?php if($ExpLoop ->have_posts()): ?>
<?php while ($ExpLoop ->have_posts()): $ExpLoop ->the_post()?>
<?php
$Tit = get_field('work_title');
$Pho = get_field('work_image');
$Dat = get_field('date');
$Des = get_field('work_description');
?>
 <div class="card border-0 m-1" style="width: 17rem;">
  <img src="<?php echo esc_url($Pho['url']); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $Tit ?></h5>
    <h6 class="card-date"><?php echo $Dat ?></h6>
    <p class="card-text"><?php echo $Des ?></p>
  </div>
</div>
<?php endwhile; ?>
  <?php endif; ?>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata() ?>
  <?php endwhile; ?>
  <?php endif; ?>
  
  </div>


  <div class= 'row three'>

<?php if (have_posts()) :?>
  <?php while ( have_posts() ) : the_post(); ?>
<?php 
$ExpLoop = new WP_Query(array(
'post_type'=> 'logo',
'posts_per_page' => -1
));
?>
<div class="accordion-item border-0">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       <h1>Logo Design</h1>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex flex-wrap">
  <?php if($ExpLoop ->have_posts()): ?>
<?php while ($ExpLoop ->have_posts()): $ExpLoop ->the_post()?>
<?php
$Tit = get_field('work_title');
$Pho = get_field('work_image');
$Dat = get_field('date');
$Des = get_field('work_description');
?>
 <div class="card border-0 m-1" style="width: 17rem;">
  <img src="<?php echo esc_url($Pho['url']); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $Tit ?></h5>
    <h6 class="card-date"><?php echo $Dat ?></h6>
    <p class="card-text"><?php echo $Des ?></p>
  </div>
</div>
<?php endwhile; ?>
  <?php endif; ?>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata() ?>
  <?php endwhile; ?>
  <?php endif; ?>

  </div>




  <div class= 'row four'>

<?php if (have_posts()) :?>
  <?php while ( have_posts() ) : the_post(); ?>
<?php 
$ExpLoop = new WP_Query(array(
'post_type'=> 'video',
'posts_per_page' => -1
));
?>
<div class="accordion-item border-0">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
       <h1>Videos</h1>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex flex-wrap">
  <?php if($ExpLoop ->have_posts()): ?>
<?php while ($ExpLoop ->have_posts()): $ExpLoop ->the_post()?>
<?php
$Tit = get_field('work_title');
$Vid = get_field('video_projects');
$Dat = get_field('date');
$Des = get_field('work_description');
?>

      <div class="card border-0 m-1" style="width: auto">

<div class= 'provid'>

      <?php echo $Vid;?>
</div>

  <div class="card-body">
    <h5 class="card-title"><?php echo $Tit ?></h5>
    <h6 class="card-date"><?php echo $Dat ?></h6>
    <p class="card-text"><?php echo $Des ?></p>
  </div>
</div>
<?php endwhile; ?>
  <?php endif; ?>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata() ?>
  <?php endwhile; ?>
  <?php endif; ?>

  </div>

  </div>

  </div>

  </div>

  <a id="section-3"></a>




</div>
</div>
</section>

<?php get_footer() ?>

</div>