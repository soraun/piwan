<?php

function featured_products_carousel_shortcode($atts) {
    ob_start();

    $query_args = array(
        'post_type' => 'featured_product',
        'posts_per_page' => -1,
    );
    $featured_products = new WP_Query($query_args);

    if ($featured_products->have_posts()) :
        ?>
        <div class="featured-products-carousel owl-carousel">
            <?php while ($featured_products->have_posts()) : $featured_products->the_post(); ?>
                <?php
                $link = get_permalink(get_the_ID(), );
                ?>
                <div class="featured-product-item">
                    <a href="<?php echo esc_url($link); ?>">
                        <img src="<?php the_post_thumbnail(); ?>
                        <h3><?php the_title() ?></h3>
                    </a>
                    <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                    <a href="<?php echo esc_url($link); ?>">
                    <span>Read More...!</span>
                    </a>

                </div>
            <?php endwhile; ?>
        </div>
        <?php
    endif;

    wp_reset_postdata();

    return ob_get_clean();
}
add_shortcode('featured_products_carousel', 'featured_products_carousel_shortcode');
