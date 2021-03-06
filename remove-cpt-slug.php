<?php
function remove_cpt_slug( $post_link, $post, $leavename ) {

    if ( in_array( $post->post_type, array( 'corsi' ) )
        || 'publish' == $post->post_status )
        $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
        return $post_link;
}
add_filter( 'post_type_link', 'sh_remove_cpt_slug', 10, 3 );

function parse_request( $query ) {

    // Only loop the main query
    if ( ! $query->is_main_query() ) {
        return;
    }

    // Only loop our very specific rewrite rule match
    if ( 2 != count( $query->query )
        || ! isset( $query->query['page'] ) )
        return;

    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'corsi' ) );
    }
}
add_action( 'pre_get_posts', 'sh_parse_request' );


