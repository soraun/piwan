<?php
get_header();

while (have_posts()) : the_post();

    $title = get_the_title();
    $description = get_the_content();
    $link = get_post_meta(get_the_ID(), '_featured_product_link', true);

    echo '<div class="featured-product-single">';

    the_post_thumbnail('medium');

    echo '<h1 style="color: green">' . esc_html($title) . '</h1>';
    echo '<p>' . esc_html($description) . '</p>';

    if (!empty($link)) {
        echo '<a href="' . esc_url($link) . '">Check Link</a>';
    }

    echo '</div>';

endwhile;


get_footer();
?>
