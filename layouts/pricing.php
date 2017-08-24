<section id="pricing" class="pricing-section">
	<div class="section-padding">
		<div class="container">
			
			<div class="section-head wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
				<h2 class="section-title">
					Our Pricing Plan
				</h2>
				<p class="section-description">
					Phosfluorescently visualize resource maximizing quality vectorAuthoritativelyPhosfluorescently visualize resource maximizing quality vectorAuthoritatively
				</p>
			</div><!-- /.section-head -->

			<div class="section-content text-center">
				<div class="row">



					<div class="col-md-3 col-sm-6">
						<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
							<div class="item-head">
								<h4 class="title"><?php echo cs_get_option('p_package'); ?></h4>

								<div class="currency-price-time">
									<span class="currency"><sub><?php echo cs_get_option('p_currency'); ?></sub></span> 
									<span class="number"><?php echo cs_get_option('p_price'); ?></span>
									<span class="duration"><sup>/<?php echo cs_get_option('p_duration'); ?></sup></span>
								</div>
							</div>

							<div class="item-list text-left">
								<ul>


	<?php 
		$prices = cs_get_option('price_group');
		foreach ($prices as $value) {
			if (isset($value['p_check'])) { ?>
				<li class="fa fa-check"><?php echo $value['p_text']; ?></li>
		<?php	}else{ ?>
				<li class="fa fa-remove"><?php echo $value['p_text']; ?></li>
		<?php	}
		}

	 ?>

								</ul>
							</div>
							<div class="link">
								<a href="#" class="btn btn-default">Buy Now</a>
							</div>
						</div><!-- /.item-md3 -->
					</div><!-- /.col-md-3 -->
					
					

				</div><!-- /.row -->
			</div><!-- /.section-content -->
		</div><!-- /.container -->
	</div><!-- /.pricing-section -->
</section><!-- /#pricing -->