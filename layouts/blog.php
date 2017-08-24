<section id="blog" class="blog-section">
	<div class="section-padding">
		<div class="container">
			
			<div class="section-head wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
				<h2 class="section-title">
					Our Blog
				</h2>
				<p class="section-description">
					Phosfluorescently visualize resource maximizing quality vectorAuthoritativelyPhosfluorescently visualize resource maximizing quality vectorAuthoritatively
				</p>
			</div><!-- /.section-head -->

			<div class="section-content">
				<div class="row">
				<?php 
					query_posts(array(
						'post_type' => 'post'
					));
					if(have_posts()) : while (have_posts()) : the_post();
				 ?>
					<div class="col-md-4">
						<div class="item-md4 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
							<div class="item-md4-head">
								<div class="date text-center">
									<span><?php the_time('j'); ?></span>
									<?php the_time('M'); ?>
								</div>
								<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
								<p class="entry-meta">
									<a href="<?php the_author_link(); ?>"><i class="fa fa-user"></i><?php the_author(); ?></a> <span>|</span>
									<a href="#"><i class="fa fa-comments"></i> 05 Comments</a> <span>|</span>
									<a href="#"><?php echo get_simple_likes_button(get_the_ID()); ?></a>
								</p>
							</div><!-- /.item-md4-head -->

							<div class="thumbnail-img">
								<?php echo the_post_thumbnail(); ?>
							</div><!-- /.thumbnail-img -->
							<div class="entry-content">
								<?php echo wp_trim_words(get_the_content(), 30); ?>
							</div>
							<div class="link">
								<a href="<?php the_permalink(); ?>" class="btn btn-default">Read More</a>
							</div>
						</div><!-- /.item-md4 -->
					</div><!-- /.col-md-4 -->
				<?php endwhile; endif; ?>
				</div><!-- /.row -->
			</div><!-- /.section-content -->
		</div><!-- /.container -->
	</div><!-- /.blog-section -->
</section><!-- /#blog -->