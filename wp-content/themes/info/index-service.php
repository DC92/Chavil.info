<?php
	$elitepress_lite_options=theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), $elitepress_lite_options );

	$a = get_posts (array ( 
		'name' => 'service', 
		'post_type' => 'post',
		'post_status' => 'publish'
	));
?>

<div class="service-section">
	<div class="container">
		<!-- Service Section -->
		<div class="service-section">
			<div class="container">
				<!-- Section Title -->
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="section-info">
							<h3 class="section-title"><?php echo $a[0]->post_title; ?></h3>
							<p class="section-description"><?php echo $a[0]->post_content; ?></p>
						</div>
					</div>		
				</div>
				<!-- /Section Title -->

				<!-- Service Area -->
				<div class="row">
					<?php for ($i=1; $i<=4; $i++) {
						$a = get_posts (array ( 
							'name' => 'service'.$i, 
							'post_type' => 'post',
							'post_status' => 'publish'
						));
					?>
						<div class="col-md-6 col-sm-6">
							<div class="media service-area">
								<div class="service-box"><i class="fa fa<?php echo $i; ?>"></i></div>
								<div class="media-body">
									<h4><a href="#"><?php echo $a[0]->post_title; ?></a></h4>
									<p><?php echo str_replace ("\n", "<br/>", $a[0]->post_content); ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<!-- /Service Area -->
			</div>
		</div>
		<!-- /Service Section -->
	</div>
</div>
<div class="clearfix"></div>		