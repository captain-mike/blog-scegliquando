<?php

register_post_type( 'professione',
// CPT Options
    array(
        'labels' => array(
            'name' => __( 'Professioni' ),
            'singular_name' => __( 'Professione' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'profession'),
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
    )
);