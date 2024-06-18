
<?php

function custom_breadcrumbs() {
    global $post;
    echo '<ul class="qld__link-list qld__link-list--inline">';
    if (!is_front_page()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">Home</a></li>';
        if (is_category() ) {
            echo '<li>';
            single_cat_title();
            echo '</li>';
        } elseif(is_single()) {
            echo '<li>';
            $cat = get_the_category();
            if(!empty($cat)){
            echo '<a href=" ' . esc_url(get_category_link( $cat[0]->term_id)) . '">';
            echo $cat[0]->name;
            echo '</a></li>';
            echo '<li>';
            the_title();
            echo '</li>';
            }
        } elseif (is_page()) {
            if ($post->post_parent) {
                $anc = get_post_ancestors($post->ID);
                $anc = array_reverse($anc);
                foreach ($anc as $ancestor) {
                    $output = '<li><a href="';
                    $output .= get_permalink($ancestor);
                    $output .= '">';
                    $output .= get_the_title($ancestor);
                    $output .= '</a></li>';
                    echo $output;
                }
            }
            echo '<li>';
            echo the_title();
            echo '</li>';
        } elseif (is_home()){
            echo '<li>';
            echo get_the_title( get_option('page_for_posts', true) );
            echo '</li>';

        }
    }
    echo '</ul>';
}

?>
