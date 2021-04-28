<?php 
function init_splidejs() { 
if (is_front_page()) { ?>
<script>
	document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '.splide' ).mount();
	} );
</script>

<?php } ?>

<?php
	
}

add_action('wp_footer', 'init_splidejs');
