<?php
/*Template Name: product
Template Post Type: post, page, product
*/
?>
  <?php
get_header(); 
?>


<?php woocommerce_content(); ?>

<section class="product container">
   <h2 class="product__name">PRODUCTS OF YOUR HAPPINESS</h2>


    <!-- <ul class="product__list">
      <li class="product__item">
        <div class="product__box">
      <a class="product__link"  alt="product" href="<?php the_permalink()?>">
      </a>
      <a class="product__title" href="<?php the_permalink()?>"><?php the_title(); ?>
      <p class= "product__title--data"><?php echo get_the_date(); ?></p>
      </a>
    </div>
  </li>
 </ul>  -->
</section>

<?php 

get_footer();
