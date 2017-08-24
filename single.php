<?php get_header(); ?>

		<section id="page-head" class="head-wrap">
			<div class="section-padding overlay text-center">
				<div class="container">
					<div class="heading-txt">
						<h1>Our Blog</h1>
						<p>Home <span>/ Blog</span></p>
					</div><!-- /.heading-txt -->
				</div><!-- /.container -->
			</div>
		</section><!-- #page-head -->

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post-container">
					<?php 
						if(have_posts()) : while(have_posts()) : the_post();
					 ?>
						<div class="single-post">
							<div class="item-md4-head">
								<div class="date text-center">
									<span><?php the_time('j'); ?></span>
									<?php the_time('M'); ?>
								</div>
								<h5 class="entry-title"><a href="#"><?php the_title(); ?></a></h5>
								<p class="entry-meta">
									<a href="<?php the_author_link(); ?>"><i class="fa fa-user"></i><?php the_author(); ?></a> <span>|</span>
									<a href="#"><i class="fa fa-comments"></i> 05 Comments</a> <span>|</span>
									<a href="#"><i class="fa fa-heart-o"></i> 155</a>
								</p>
							</div><!-- /.item-md4-head -->

							<div class="thumbnail-img">
								<?php the_post_thumbnail(); ?>
							</div><!-- /.thumbnail-img -->

							<div class="share-post">
								<span>Share This Post</span>
								<p class="share">
									<a href="#" class="facebook">
										<em class="one"><i class="fa fa-facebook"></i></em>
										<em class="two">0</em>
									</a>
									<a href="#" class="twitter">
										<em class="one"><i class="fa fa-twitter"></i></em>
										<em class="two">0</em>
									</a>
									<a href="#" class="google-plus">
										<em class="one"><i class="fa fa-google-plus"></i></em>
										<em class="two">0</em>
									</a>
									<a href="#" class="linkedin">
										<em class="one"><i class="fa fa-linkedin"></i></em>
										<em class="two">0</em>
									</a>
									<a href="#" class="pinterest">
										<em class="one"><i class="fa fa-pinterest-p"></i></em>
										<em class="two">0</em>
									</a>
								</p>
							</div>

							<?php the_content(); ?>

							<?php 
								if ( comments_open() || get_comments_number() ) {
									comments_template();
								}
							 ?>
							 
						</div><!-- /.single-post -->
					<?php endwhile; endif; ?>
					</div><!-- /.post-container -->
				</div><!-- /.col-md-8 -->


				<div class="col-md-4">
					<div class="sidebar">

						<!-- Search Bar -->
						<div class="widget blog-search-bar">
							<h2 class="rounded">Search</h2>

							<form class="form-search" method="get" id="s" action="/">
								<div class="input-append">
									<input class="form-control input-medium search-query" type="text" name="s" placeholder="Search" required>
									<button class="add-on" type="submit"><i class="fa fa-search"></i></button>
								</div><!-- /.input-append -->
							</form><!-- /.form-search -->
						</div><!-- /.blog-search-bar -->
						<!-- Search Bar End -->

						<!-- Blog Categories -->
						<div class="widget blog-categories">
							<div class="catagorie-list">
								<h2 class="rounded">Categories</h2>
								<ul class="cat-list">
									<li><a href="#">Web Design <span class="pull-right">333</span></a></li>
									<li><a href="#">WordPress Themes <span class="pull-right">245</span></a></li>
									<li><a href="#">Graphic Design <span class="pull-right">450</span></a></li>
									<li><a href="#">PSD Template <span class="pull-right">300</span></a></li>
								</ul><!-- /.cat-list -->
							</div><!-- /.catagorie-list -->
						</div><!-- /.blog-categories -->
						<!-- Blog Categories End -->

						<!-- Popular-post -->
						<div class="popular-post">
							<div class="widget">
								<h2 class="rounded">Latest Posts</h2>

								<div class="latest-post">
									<div class="inner-item clearfix">
										<div class="post-img">
											<a href="single.html"><img class="img-responsive" src="images/post/small01.jpg" alt="Post Iamge"></a>
										</div><!-- /.auther-img -->
											
										<div class="post-details">
											<p class="message">
												<a href="single.html">Ssively administratdologies with sca able infomediaries. Assertively</a>
											</p>
											<p class="entry-meta">
												<a href="#">2 Comments</a> <span>at</span>
												<a href="#"> 2:05 am</a>
											</p>
										</div><!-- /.post-details -->
									</div><!-- /.inner-item -->
									
									<div class="inner-item">
										<div class="post-img">
											<a href="single.html"><img class="img-responsive" src="images/post/small02.jpg" alt="Post Iamge"></a>
										</div><!-- /.auther-img -->
										
										<div class="post-details">
											<p class="message">
												<a href="single.html">Ssively administratdologies with sca able infomediaries. Assertively</a>
											</p>
											<p class="entry-meta">
												<a href="#">2 Comments</a> <span>at</span>
												<a href="#"> 2:05 am</a>
											</p>
										</div><!-- /.post-details -->
									</div><!-- /.inner-item -->

									<div class="inner-item">
										<div class="post-img">
											<a href="single.html"><img class="img-responsive" src="images/post/small03.jpg" alt="Post Iamge"></a>
										</div><!-- /.auther-img -->
										
										<div class="post-details">
											<p class="message">
												<a href="single.html">Ssively administratdologies with sca able infomediaries. Assertively</a>
											</p>
											<p class="entry-meta">
												<a href="#">2 Comments</a> <span>at</span>
												<a href="#"> 2:05 am</a>
											</p>
										</div><!-- /.post-details -->
									</div><!-- /.inner-item -->
								</div><!-- /.latest-post -->
							</div><!-- /.widget -->
						</div><!-- /.popular-post -->
						<!-- Popular-post End -->
					

						<!-- Tag Widget -->
						<div class="widget">
							<div class="tag-clouds">
								<h2 class="rounded">Tag Clouds</h2>

								<div class="tag-list">
									<a href="#">Design</a>
									<a href="#">Development</a>
									<a href="#">SEO</a>
									<a href="#">Graphic</a>
									<a href="#">WordPress</a>
									<a href="#">Art</a>
									<a href="#">Social Media</a>
									<a href="#">Photoshop</a>
									
								</div><!-- /.tag-list -->
							</div><!-- /.tag-clouds -->
						</div>
						<!-- end Tag Widget -->

					</div><!-- /.sidebar -->
				</div><!-- /.col-md-4 -->

			</div><!-- /.row -->
		</div><!-- /.container -->

<?php get_footer(); ?>