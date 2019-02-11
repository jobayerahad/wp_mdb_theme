<?php include 'inc/header-2.php';?>

<main class="text-center py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<section class="my-5">  <!-- Section: Blog v.4 -->
					<div class="row">   <!-- Grid row -->
						<?php if(have_posts()) : while(have_posts()) : the_post();?>
						<div class="col-md-9">  <!-- Grid column -->

							<div class="card card-cascade wider reverse">    <!-- Card -->
								<div class="view view-cascade overlay"> <!-- Card image -->
									<?php if(has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
										<a href="#!">
											<div class="mask rgba-white-slight"></div>
										</a>
								</div>
								<div class="card-body card-body-cascade text-center"> <!-- Card content -->
									<h2 class="font-weight-bold"><?php the_title(); ?></h2> <!-- Title -->
									<p>Written by <!-- Data -->
										<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
											<strong><?php the_author(); ?></strong>
										</a>, <?php the_date(); ?> at <?php the_time(); ?>
									</p>  
									<div class="social-counters">   <!-- Social shares -->
										<a class="btn btn-indigo" target="blank" href="http://www.facebook.com/sharer?u=<?php the_permalink(); ?>">  <!-- Facebook -->
											<i class="fab fa-facebook-f pr-2"></i>
											<span class="clearfix d-none d-md-inline-block">Facebook</span>
										</a>
										<a class="btn btn-cyan" target="blank" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>">  <!-- Twitter -->
											<i class="fab fa-twitter pr-2"></i>
											<span class="clearfix d-none d-md-inline-block">Twitter</span>
										</a>
										<a class="btn btn-deep-orange" target="blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">   <!-- Google+ -->
											<i class="fab fa-google-plus-g pr-2"></i>
											<span class="clearfix d-none d-md-inline-block">Google+</span>
										</a>
									</div>  <!-- Social shares -->
								</div>    <!-- Card content -->
							</div>  <!-- Card -->

							<div class="mt-5 text-justify">  <!-- Excerpt -->
								<p><?php the_content(); ?></p>
							</div>

							<!-- About Author -->
							<div class="card">
								<div class="card-header font-weight-bold">
									<span>About author</span>
								</div>
								<!--Card content-->
								<div class="card-body">
									<div class="media d-block d-md-flex mt-3">
									<?php echo get_avatar(get_the_author_meta('ID')); ?>
										<div class="media-body text-center text-md-left ml-md-3 ml-0">
											<h5 class="mt-0 font-weight-bold"><?php the_author(); ?></h5>
											<?php the_author_meta('description'); ?>
										</div>
									</div>
								</div>
							</div>
							<!-- About Author -->

							<?php comments_template();  ?>
						</div>  <!-- Grid column -->
						<?php endwhile; endif; ?> 
  
						<div class="col-md-3">    <!-- Grid column -->
							<?php echo dynamic_sidebar('sidebar-blog') ?>
						</div>    <!-- Grid column -->
					
					</div>	<!-- Grid row -->
            </section>  <!-- Section: Blog v.4 -->
			
			</div>
    	</div>
  	</div>
</main>

<?php get_footer(); ?>