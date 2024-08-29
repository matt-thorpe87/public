
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
                $post_type = get_post_type();
                $id        = get_the_ID();
                $taxonomy  = current( get_object_taxonomies( $post_type, 'objects' ) )->name ?? false;

                $primary_term_id = function_exists( 'tsf' ) ? tsf()->data()->plugin()->post()->get_primary_term( $id, $taxonomy ) : 0;
                $primary_term_id = $primary_term_id ?: ( get_the_terms( $id, $taxonomy )[0]->term_id ?? null );

                if ( $primary_term_id ) {
                    $term = get_term( $primary_term_id, $taxonomy );
                }
            echo '<a href=" ' . esc_url(get_category_link( $term->term_id)) . '">';
            
            echo $term->name;
            echo '</a></li>';
            echo '<li>';
            the_title();
            echo '</li>';
            } else{
                
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
