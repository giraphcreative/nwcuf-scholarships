<?php


// init cmb2
require_once( 'cmb2/init.php' );



// add metabox(es)
function page_metaboxes( $meta_boxes ) {


    // showcase metabox
    $left_metabox = new_cmb2_box( array(
        'id' => 'left_metabox',
        'title' => 'Left Column',
        'object_types' => array( 'page', 'product' ), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => false, // Show field names on the left
    ));

    $left_metabox->add_field( array(
        'name' => 'Left Column Content',
        'description' => 'Enter text or ads for the left column.',
        'id'   => CMB_PREFIX . 'left_content',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

}
add_filter( 'cmb2_init', 'page_metaboxes' );



// get CMB value
function get_cmb_value( $field ) {
    return get_post_meta( get_the_ID(), CMB_PREFIX . $field, 1 );
}


// get CMB value
function has_cmb_value( $field ) {
    $cval = get_cmb_value( $field );
    return ( !empty( $cval ) ? true : false );
}


// get CMB value
function show_cmb_value( $field ) {
    print get_cmb_value( $field );
}


// get CMB value
function show_cmb_wysiwyg_value( $field ) {
    print apply_filters( 'the_content', get_cmb_value( $field ) );
}


function cmb2_metabox_show_on_template( $display, $meta_box ) {
    if ( isset( $meta_box['show_on']['key'] ) && isset( $meta_box['show_on']['value'] ) ) :
        if( 'template' !== $meta_box['show_on']['key'] )
            return $display;

        // Get the current ID
        if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
        elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];
        if( !isset( $post_id ) ) return false;

        $template_name = get_page_template_slug( $post_id );
        if ( !empty( $template_name ) ) $template_name = substr($template_name, 0, -4);

        // If value isn't an array, turn it into one
        $meta_box['show_on']['value'] = !is_array( $meta_box['show_on']['value'] ) ? array( $meta_box['show_on']['value'] ) : $meta_box['show_on']['value'];

        // See if there's a match
        return in_array( $template_name, $meta_box['show_on']['value'] );
    else:
        return $display;
    endif;
}
add_filter( 'cmb2_show_on', 'cmb2_metabox_show_on_template', 10, 2 );


function cmb2_taxonomy_meta_initiate() {

    require_once( 'cmb2-taxonomy/Taxonomy_MetaData_CMB2.php' );

    /**
     * Semi-standard CMB2 metabox/fields array
     */
    $meta_box = array(
        'id'         => 'cat_options',
        // 'key' and 'value' should be exactly as follows
        'show_on'    => array( 'key' => 'options-page', 'value' => array( 'unknown', ), ),
        'show_names' => true, // Show field names on the left
        'fields'     => array(
            array(
                'name' => 'Icon',
                'desc' => 'Select a product category icon',
                'id'   => 'icon',
                'type' => 'file',
            ),
            array(
                'name' => 'Color',
                'description' => 'Select a background color for the header.',
                'id'   => 'color',
                'type' => 'select',
                'default' => 'teal',
                'options' => array(
                    'teal' => 'Teal',
                    'river' => 'River',
                    'navy' => 'Navy',
                    'forest' => 'Forest',
                    'lime' => 'Lime',
                    'orange' => 'Orange',
                    'grey-light' => 'Grey - Light',
                    'grey-dark' => 'Grey - Dark',
                )
            ),
            array(
                'name'    => 'Left Text/Ad',
                'id'      => 'left',
                'type'    => 'wysiwyg',
                'options' => array( 'textarea_rows' => 5, ),
            ),
            array(
                'name'    => 'Right Text',
                'id'      => 'right',
                'type'    => 'wysiwyg',
                'options' => array( 'textarea_rows' => 10, ),
            ),
        )
    );

    /**
     * Instantiate our taxonomy meta class
     */
    $cats = new Taxonomy_MetaData_CMB2( 'product_cat', $meta_box, __( 'Category Settings', 'taxonomy-metadata' ) );

}
cmb2_taxonomy_meta_initiate();




?>