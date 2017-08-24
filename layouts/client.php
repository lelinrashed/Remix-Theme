<section id="client" class="client-section dark-bg">
	<div class="section-padding">
		<div class="container">
			
			<div class="section-head">
				<h2 class="section-title">
					Happy Clients &amp; Sponsor
				</h2>
			</div><!-- /.section-head -->

			<div class="section-content">
				<div class="row">

					<div class="col-md-6">
						<div id="clients-slider-container">
							<div class="parallax">
					<?php 
						$slider = cs_get_option('client_group');

					 ?>
								<div id="client-slider" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
					<?php 
						for ($i=0; $i < count($slider); $i++) { ?>
							<li data-target="#client-slider" data-slide-to="<?php echo $i; ?>" class="<?php echo (!$i ? 'active'  : ''); ?>"></li>
					<?php	}
					 ?>	 
									    
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner" role="listbox">
									<?php 
										$i = 0;
										$slider = cs_get_option('client_group');
										foreach ($slider as $c_key => $c_value) { ?>
											<div class="item <?php echo (!$i ? 'active'  : ''); ?>">
										    	<div class="reviewer-img">
										    		<img src="<?php echo $c_value['client_image']; ?>" alt="Clients Iamge">
										    	</div>
										        <div class="ss-text">
													<p><?php echo $c_value['Client_des'] ?></p>
													<a href="#" class="name"><?php echo $c_value['client_name']; ?></a>
													<a href="#" class="designation"><?php echo $c_value['client_desig']; ?></a>
												</div><!-- /.tweet-text -->
										    </div><!-- /.item -->
									<?php 
										$i = 1;
										}
									 ?>

									</div><!-- /.carousel-inner -->	
								</div><!-- /#client-slider -->
							</div><!-- /.services-overlay -->
						</div><!-- #clients-slider-container -->
					</div><!-- /.col-md-6 -->

					<!-- <div class="angle-line"></div> -->

					<div class="col-md-6">
						<div class="row">
							<div class="client-wrap">
								<div class="col-sm-4">
									<div class="single-client">
										<img src="<?php echo get_template_directory_uri()?>/images/clients/02.png" alt="Clients Image">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-client">
										<img src="<?php echo get_template_directory_uri()?>/images/clients/03.png" alt="Clients Image">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-client">
										<img src="<?php echo get_template_directory_uri()?>/images/clients/04.png" alt="Clients Image">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-client">
										<img src="<?php echo get_template_directory_uri()?>/images/clients/07.png" alt="Clients Image">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-client">
										<img src="<?php echo get_template_directory_uri()?>/images/clients/06.png" alt="Clients Image">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-client">
										<img src="<?php echo get_template_directory_uri()?>/images/clients/07.png" alt="Clients Image">
									</div>
								</div>
							</div><!-- /.client-wrap -->
						</div>
					</div><!-- /.col-md-4 -->

				</div><!-- /.row -->
			</div><!-- /.section-content -->
		</div><!-- /.container -->
	</div>
</section><!-- /#client -->