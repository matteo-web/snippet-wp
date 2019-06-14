// Shortcode Box Personalizzato
function custom_box( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'title' => 'Stai organizzando un viaggio in Calabria?',
			'subtitle' => 'Dai un\'occhiata alla mia guida in pdf!',
			'button_title' => 'Scopri di più',
			'url_title' => '/guida-turistica-calabria-in-pdf/'
		),
		$atts
	);
	
	return '<div class="box">'.'<h2>'. $atts['title'] . '<h2>'.
             '<h3>'. $atts['subtitle'] . '<h3>'.
		'<a href="'. $atts['url_title'] .'">'. $atts['button_title'] .'</a>' .
	 '</div>';

}
add_shortcode( 'custom-box', 'custom_box' );
