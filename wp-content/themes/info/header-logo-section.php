<!-- Logo goes here -->
	<div class="container">
		<div class="row"><?php $elitepress_lite_options=theme_data_setup(); 
		$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), $elitepress_lite_options );
		if($current_options['logo_section_settings']==true) { ?>
			<div class="site-logo" style="margin:0 auto">
				<h1>
					<?php if($current_options['upload_image_logo']!='') { ?>
						<a href="http://www.entreprises.gouv.fr/services-a-la-personne">
							<img style='float:right' src="<?=$current_options['upload_image_logo']?>" /></a>
					<?php } ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php if($current_options['text_title'] ==true) { ?>
							<div style="padding:10%" class="elegent_title_head"><?=get_bloginfo()?></div>
						<?php } else { ?> 
						<img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/logo5.png" class="img-responsive"/>
						<?php } ?>
					</a>
				</h1>
			</div>
		</div>
	<?php } ?>	
	</div>
<!-- /Logo goes here -->