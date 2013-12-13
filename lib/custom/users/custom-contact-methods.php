<?php
// Register User Contact Methods
function custom_user_contact_methods( $user_contact_method ) {

	$user_contact_method['facebook'] = __( 'Facebook Username', 'atkore' );
	$user_contact_method['twitter'] = __( 'Twitter Username', 'atkore' );
	$user_contact_method['skype'] = __( 'Skype Username', 'atkore' );

	return $user_contact_method; ;

}

// Hook into the 'user_contactmethods' filter
add_filter( 'user_contactmethods', 'custom_user_contact_methods' );
