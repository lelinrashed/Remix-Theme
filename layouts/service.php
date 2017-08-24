<section id="services" class="service-section">
    <div class="section-padding">
        <div class="container"> 

        	<div class="section-head wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
				<h2 class="section-title">
					<?php echo cs_get_option('service_sec_title'); ?>
				</h2>
				<p class="section-description">
					<?php echo cs_get_option('service_sec_des'); ?>
				</p>
			</div><!-- /.section-head -->


            <div class="section-content">
               <div class="row">

				<?php 
					$service_details = cs_get_option('Service_section_group');
					foreach ($service_details as $key => $value) {
					
				 ?>
               		<div class="col-md-3 col-sm-6">
               			<div class="item-md3 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".9s">
               				<div class="icon"><i class="<?php echo $value['service_group_icon']; ?>"></i></div>
               				<div class="item-info">
								<h4 class="item-title">
									<a href="#"><?php echo $value['service_group_title']; ?></a>
								</h4><!-- /.item-title -->
								<p><?php echo $value['service_group_des']; ?></p>
							</div>
               			</div><!-- /.item-md3 -->
               		</div><!-- /.col-md-3 -->

               	<?php } ?>

               </div>
            </div><!-- /.section-content --> 
        </div> 
    </div><!-- /.section-padding -->
</section><!-- /#services -->