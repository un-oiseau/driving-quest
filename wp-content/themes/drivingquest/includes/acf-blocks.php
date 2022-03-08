<?php

add_action('acf/init', 'ocs_acf_init_block_types');
function ocs_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'ed-programs',
            'title'             => __('Ed Programs'),
            'render_template'   => 'includes/acf-blocks/ed-programs.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Ed Programs' ),
        ));

        acf_register_block_type(array(
            'name'              => 'enter-workforce',
            'title'             => __('Enter Workforce'),	
            'render_template'   => 'includes/acf-blocks/enter-workforce.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Enter Workforce' ),
        ));

        acf_register_block_type(array(
            'name'              => 'find-school',
            'title'             => __('Find School'),
            'render_template'   => 'includes/acf-blocks/find-school.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Find School' ),
        ));

        acf_register_block_type(array(
            'name'              => 'get-licence',
            'title'             => __('Get Licence'),
            'render_template'   => 'includes/acf-blocks/get-licence.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Get Licence' ),
        ));

        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero Block'),
            'render_template'   => 'includes/acf-blocks/hero.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Hero Block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'student-reviews',
            'title'             => __('Student Reviews'),
            'render_template'   => 'includes/acf-blocks/student-reviews.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Student Reviews' ),
        ));

        acf_register_block_type(array(
            'name'              => 'submit-request',
            'title'             => __('Submit Request'),
            'render_template'   => 'includes/acf-blocks/submit-request.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Submit Request' ),
        ));
     
    }
}

?>
