<?php
get_header();

if (have_posts()) :
    echo '<h1>Featured Products</h1>';
    echo '<div class="featured-products-list">';

    while (have_posts()) : the_post();
        echo '<div class="featured-product">';
        echo '<a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a>';
        echo '</div>';
    endwhile;

    echo '</div>';

    the_posts_pagination();

else :
    echo '<p>No featured products found.</p>';
endif;

get_footer();
?>
