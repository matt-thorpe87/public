
<?php

function custom_breadcrumbs() {
    global $post;
    echo '<ul class="qld__link-list qld__link-list--inline">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">Home</a></li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo '</li><li>';
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
        }
    }
    echo '</ul>';
}

?>
