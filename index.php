<?php get_header(); ?>

<!--Main Layout-->
<main class="text-center py-5">

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post();?>
        <!-- News jumbotron -->
        <div class="jumbotron text-center hoverable p-4">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 offset-md-1 mx-3 my-3">

            <!-- Featured image -->
            <div class="view overlay">
            <?php if(has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-7 text-md-left ml-3 mt-3">

            <!-- Excerpt -->

            <h4 class="h4 mb-4"><?php the_title(); ?></h4>

            <?php the_excerpt(); ?></p>
            <p class="font-weight-normal">by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><strong><?php the_author(); ?></strong></a>, <?php the_date(); ?> at <?php the_time(); ?></p>

            <a class="btn btn-success" href="<?php the_permalink(); ?>">Read more</a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        </div>
        <!-- News jumbotron -->
        <?php endwhile; ?>
        <?php else : ?>
        <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>

      </div>
    </div>
  </div>
</main>
<!--Main Layout-->

<?php the_posts_pagination( array(
            'mid_size' => 1,
            'prev_text' => __( '&laquo; Previous', 'textdomain' ),
            'next_text' => __( 'Next &raquo;', 'textdomain' ),
        ) ); ?>

<?php get_footer() ?>
