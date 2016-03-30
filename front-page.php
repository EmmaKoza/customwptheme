<?php get_header();  ?>

<div class="main">
  <div class="container">

  <a class="burgerWrapper" href="##">
    <div class="burger"></div>
  </a>

   <div class="form-container">
     <?php $selector = get_field('form_selector') ?>
     <?php echo $selector ?>
    </div>


    <ul class="products clearfix">
      <?php $photoRoll = new WP_Query(array(
          'post_type'=> 'product'
         )); ?>
      <?php if($photoRoll-> have_posts()): ?>
      <?php while($photoRoll-> have_posts()): ?> 
        <?php $photoRoll -> the_post(); ?>
        <li class="item">
          <div class="productInfo">
            <h2>
              <?php the_title() ?>
            </h2>
            <?php the_content() ?>  
          </div>
          <?php while(has_sub_field('image')): ?>
            <?php $productPicture = get_sub_field('pic'); ?>
            <?php $imageClass = get_sub_field('class_selector'); ?>
            <img src= "<?php echo $productPicture ?>" alt="" class="productPicture <?php echo $imageClass ?>">
          <?php endwhile ?>
        </li>
    
      <?php endwhile ?>
      <?php wp_reset_postdata(); ?>
      <?php endif ?>
   </ul>  


  </div> <!-- /.container -->

  <?php get_sidebar(); ?>
</div> <!-- /.main -->

<?php get_footer(); ?>