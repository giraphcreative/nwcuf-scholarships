<?php

get_header();

?>

	<div id="content" class="wrap group" role="main">
		<div class="sidebar">
			<img src="<?php bloginfo( 'template_url' ) ?>/img/sidebar-arrow.png">
			<?php
			show_cmb_value( 'left_content' );
			?>
		</div>
		<div class="right-column">
			<?php 
			// do post loop
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 
					the_content();
				endwhile;
			endif;
			?>
		</div>
	</div><!-- #content -->
<?php

get_footer();

?>