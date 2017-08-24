
<section id="team" class="team-section dark-bg">
	<div class="section-padding">
		<div class="container">
			
			<div class="section-head">
				<h2 class="section-title">
					Meet Our Team
				</h2>
				<p class="section-description">
					Phosfluorescently visualize resource maximizing quality vectorAuthoritativelyPhosfluorescently visualize resource maximizing quality vectorAuthoritatively
				</p>
			</div><!-- /.section-head -->


			<div class="section-content">
				<div class="row">
				<?php 
					$teams = cs_get_option('team_group');
					foreach ($teams as $team_key => $team_value) { ?>
						<div class="col-md-3 col-sm-6">
						<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
							<div class="team-img">
								<img src="<?php echo $team_value['team_g_image']; ?>" alt="Team image">
								<div class="overlay" style="background-color: <?php echo $team_value['team_g_color']; ?>"></div>
								<div class="social-icon">
									<a href="<?php echo $team_value['team_g_f']; ?>"><i class="fa fa-facebook"></i></a>
									<a href="<?php echo $team_value['team_g_t']; ?>"><i class="fa fa-twitter"></i></a>
									<a href="<?php echo $team_value['team_g_g']; ?>"><i class="fa fa-google-plus"></i></a>
								</div>
							</div><!-- /.icon -->

							<div class="member-info">
								<h4 class="name item-title">
									<a href="#"><?php echo $team_value['team_g_name']; ?></a>
								</h4>
								<div class="designation">
									<?php echo $team_value['team_g_desig']; ?>
								</div><!-- /.item-title -->
								<p><?php echo $team_value['team_g_des']; ?></p>
							</div><!-- /.item-info -->
						</div><!-- /.item-md3 -->
					</div><!-- /.col-md-3 -->
				<?php	}
				 ?>
					
					
				</div><!-- /.row -->
			</div><!-- /.section-content -->
		</div><!-- /.container -->
	</div><!-- /.team-section -->
</section><!-- /#team -->