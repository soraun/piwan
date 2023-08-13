<?php

function featured_product_metaboxes() {
    add_meta_box('featured-product-details', 'Featured Product Link', 'render_featured_product_metabox', 'featured_product', 'normal', 'high');
}
add_action('add_meta_boxes', 'featured_product_metaboxes');


function render_featured_product_metabox($post) {
    wp_nonce_field(basename(__FILE__), 'featured_product_nonce');
    $link = get_post_meta($post->ID, '_featured_product_link', true);
    ?>
    <p>
        <label for="featured-product-link">Link:</label>
        <input type="text" name="featured_product_link" id="featured-product-link" value="<?php echo esc_attr($link); ?>" style="width: 100%;">
    </p>
    <?php
}

function save_featured_product_metabox($post_id) {
    if (!isset($_POST['featured_product_nonce']) || !wp_verify_nonce($_POST['featured_product_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    if ('featured_product' !== $_POST['post_type']) {
        return $post_id;
    }

    update_post_meta($post_id, '_featured_product_link', esc_url_raw($_POST['featured_product_link']));
}
add_action('save_post', 'save_featured_product_metabox');
