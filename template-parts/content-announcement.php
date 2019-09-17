<?php if ( get_field( 'announcement_heading', 'options' ) ) : ?>

	<div class="row expanded no-gutter announcement align-space">
		
		<div class="callout text-center">
			<div class="column small-12 small-centered">
				<h2><?php echo get_field( 'announcement_heading', 'options' ); ?></h2>
				<div><?php echo get_field( 'announcement_text', 'options' ); ?>
				</div>
				<a href="<?php echo get_field( 'announcement_button_url', 'options' ); ?>" class="button primary"><?php echo get_field( 'announcement_button_text', 'options' ); ?></a>
			</div>
		</div>
	</div><!--.announcement-->

<?php endif; ?>