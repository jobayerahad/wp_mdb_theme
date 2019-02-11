<?php include 'inc/header-2.php';?>

<main class="text-center py-5">
	<div class="container">
        <section class="my-5">  <!-- Section: Blog v.4 -->
            
                <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    <div class="card card-cascade wider reverse">    <!-- Card -->
                        <div class="view view-cascade overlay"> <!-- Card image -->
                            <?php if(has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                        </div>
                        <div class="card-body card-body-cascade text-center"> <!-- Card content -->
                            <h2 class="font-weight-bold"><?php the_title(); ?></h2> <!-- Title -->
                        </div>    <!-- Card content -->
                    </div>  <!-- Card -->

                    <div class="mt-5" align="justify">  <!-- Excerpt -->
                            <p><?php the_content(); ?></p>
                    </div>
                <?php endwhile; endif; ?> 
            
        </section>  <!-- Section: Blog v.4 -->
  	</div>
</main>

<?php get_footer(); ?>