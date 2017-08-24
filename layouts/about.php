<section id="about">
	<div class="about-section section-padding">
		<div class="container">
			<div class="section-head">
				<h2 class="section-title">
					<?php echo cs_get_option('about_sec_title'); ?>
				</h2>
				<p class="section-description">
					<?php echo cs_get_option('about_sec_des'); ?>
				</p>
			</div><!-- /.section-head -->
			<div class="section-content">
				<div class="row">

					<div class="col-lg-4">
						<div class="item-md4 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
							<h3><?php echo cs_get_option('about_sec_s_title'); ?></h3>
							<p class="item-description"><?php echo cs_get_option('about_sec_s_des'); ?></p>
						<?php 
							$hell = cs_get_option('about_f_group');
							foreach ($hell as $hello_key => $hello_value) { ?>
								<div class="inner-item">
									<div class="icon">
										<i class="<?php echo $hello_value['about_f_icon']; ?>"></i>
									</div><!-- /.icon -->
									<div class="item-info">
										<h4 class="item-title">
											<a href="#"><?php echo $hello_value['about_f_title']; ?></a>
										</h4><!-- /.item-title -->
										<p><?php echo $hello_value['about_f_des']; ?></p>
									</div><!-- /.item-info -->
								</div><!-- /.inner-item -->
						<?php	} ?>						
						</div><!-- /.item-md4 -->
					</div><!-- /.col-md-3 -->
				<?php 
					$spartan = cs_get_option('about_s_group');
					foreach ($spartan as $xpart_key => $xpart_value) { ?>
						<div class="col-lg-4">
							<div class="item-md4 main-blog wow fadeInUp" data-wow-duration=".5s" data-wow-delay="1.2s">
								<div class="post-img">
									<img src="<?php echo $xpart_value['about_s_image']; ?>" alt="post Image">
								</div>
								<div class="item-info">
									<h4 class="item-title">
										<a href="#"><?php echo $xpart_value['about_s_title'] ?></a>
									</h4><!-- /.item-title -->
									<p><?php echo $xpart_value['about_s_des']; ?></p>
								</div><!-- /.item-info -->
								<a href="<?php echo $xpart_value['about_s_link']; ?>" class="btn btn-default"><?php echo $xpart_value['about_s_button']; ?></a>
							</div><!-- /.item-md4 -->
						</div><!-- /.col-md-3 -->
				<?php	} ?>
				</div><!-- /.row -->
			</div><!-- /.section-content -->
		</div><!-- /.container -->
	</div><!-- /.about-section -->
</section><!-- /#about -->