<?php 

/*
Template name: Blog
*/

get_header(); ?>

<main class="main" role="main">
    <section class="qld__body qld__body--alt qld__body--breadcrumb">
    <div class="container-fluid">
        <nav class="qld__breadcrumbs" aria-label="breadcrumb">
        <?php custom_breadcrumbs(); ?>
        </nav>
    </div>
    </section>

<!-- Start Our Stories Section -->
    <section class="qld__body qld__body--alt qld__card--wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="qld__card-intro col-xs-12 qld__card-intro--sm">
                    <h1 class="capitalised" data-action="tag-paramater">
                        Our stories
                    </h1>
                </div>
            </div>
            <div class="row">
            <?php 
                $posts_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'post_status' => 'publish',
                    'post__not_in' => array( get_the_ID() ),
                    'order' => 'DESC',
                    
                );
                $posts = new WP_Query( $posts_args );
                if($posts->have_posts() ) :
                ?>
                <ul class="qld__card-list qld__card-list--matchheight">
                <?php while ($posts->have_posts()): $posts->the_post(); 
                      $image_id = get_post_thumbnail_id();
                      $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE); 
                      ?>
                    <li class="col-xs-12 col-md-6">
                        <div class="qld__card qld__card--multi-click qld__card--image">
                            <a href="<?php echo the_permalink(); ?>"
                                class="qld__card__image-link"
                                aria-label="Atherton Hospital redevelopment reaches new heights">
                                <div
                                class="qld__responsive-media-img--bg"
                                style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"
                                alt="<?php echo $image_alt; ?>"
                                ></div>
                            </a>
                            <div class="qld__card__inner">
                                <div class="qld__card__content">
                                    <div class="qld__card__content-inner">
                                        <p class="qld__card__date"><?php echo get_the_date() ?></p>
                                        <h3 class="qld__card__title">
                                            <a
                                                class="qld__card--clickable__link"
                                                href="<?php echo the_permalink(); ?>"
                                                ><?php echo the_title(); ?></a
                                            >
                                        </h3>
                                        <p class="qld__card__description"><?php echo the_excerpt(); ?></p>
                                    </div>
                                </div>
                                <div class="qld__card__footer">
                                    <hr class="qld__horizontal-rule" />
                                    <div class="qld__card__footer-inner">
                                        <?php 
                                        $post_id = get_the_id();
                                        $post_categories = get_the_category( $post_id, array( 'fields' => 'all' ) );
                                        $cats = array();
                                        
                                        if( $post_categories ){ // Always Check before loop! ?>
                                        <ul class="qld__card__tags qld__tag-list">
                                            <?php
                                            foreach($post_categories as $c){
                                                $cats[] = array( 'name' => $c->name, 'slug' => $c->slug );
                                            ?>
                                            <li>
                                                <a
                                                class="qld__tag qld__tag--link"
                                                href="<?php echo get_category_link($c->term_id); ?>"
                                                ><?php echo $c->name ;?></a
                                                >
                                            </li>
                                            <?php }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                
            </div>
        </div>
    </section>

<!-- Start Latest Articles -->
    <section class="qld__body qld__card--wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="qld__card-intro col-xs-12 qld__card-intro--no-top-p">
                    <h2>Latest articles</h2>
                </div>
            </div>
            <div class="row">
            <?php 
                $latest_args = array(
                    'post_type' => array(
                        'post',
                        'topics',
                    ),
                    'posts_per_page' => 9,
                    'post_status' => 'publish',
                    'order' => 'DESC',
                );
                $latest = new WP_Query( $latest_args );
                if($latest->have_posts() ) :
                ?>
                <ul class="qld__card-list qld__card-list--matchheight">
                    <?php while ($latest->have_posts()): $latest->the_post(); 
                        $image_id_latest = get_post_thumbnail_id();
                        $image_alt_latest = get_post_meta($image_id_latest, '_wp_attachment_image_alt', TRUE); 
                        ?>
                        <li class="col-xs-12 col-md-6 col-lg-4">
                            <div class="qld__card qld__card__multi-action qld__card--image">
                                <a class="qld__card__image-link" href="<?php echo the_permalink(); ?>">
                                    <div class="qld__responsive-media-img--bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')" alt="<?php echo $image_alt_latest ?>"></div>
                                </a>
                                <div class="qld__card__inner">
                                    <div class="qld__card__content">
                                        <div class="qld__card__content-inner">
                                            <p class="qld__card__date"><?php echo get_the_date() ?></p>
                                            <h3 class="qld__card__title">
                                            <a class="qld__card--clickable__link" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>   
                                            </h3>
                                            <p class="qld__card__description"><?php echo the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                    <div class="qld__card__footer">
                                        <hr class="qld__horizontal-rule">
                                        <div class="qld__card__footer-inner">
                                            <?php 
                                                $post_id_latest = get_the_id();
                                                $post_categories_latest = get_the_category( $post_id_latest, array( 'fields' => 'all' ) );
                                                $cat_latest = array();
                                                if( $post_categories_latest ){
                                             ?>
                                            <ul class="qld__card__tags qld__tag-list">
                                                <?php 
                                                foreach ($post_categories_latest as $p) {
                                                    $cat_latest[] = array( 'name' => $p->name, 'slug' => $p->slug );
                                                ?>
                                                <li>
                                                    <a class="qld__tag qld__tag--link" href="<?php echo get_category_link($p->term_id); ?>"><?php echo $p->name; ?></a>
                                                </li>
                                                <?php 
                                                }
                                            }
                                            ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    <div class="qld__search-pagination__list"><?php  the_posts_pagination(); ?></div>

                </ul>

                <?php endif; ?>
            </div>

            
            <div class="row">
                <!-- <div class="qld__card-list__footer centered col-xs-12"> -->
                    <!-- <nav class="text-center hidden-print qld__search-pagination" aria-label="pagination">
                        <h2 class="sr-only">Pagination</h2>
                        <ul class="qld__search-pagination__list"> -->
                                        <!-- Start the pagination functions after the loop. -->
                <div class="nav-previous alignleft qld__search-pagination_link"><?php echo next_posts_link( 'Older posts' ); ?></div>
                <div class="nav-next alignright qld__search-pagination_link"><?php  echo previous_posts_link( 'Newer posts' ); ?></div>
                <!-- End the pagination functions after the loop. -->
                                <!-- <li class="num active">
                                    
                                        <a class="qld__search-pagination_link" href="?&amp;start_rank&#x3D;1">1</a></li>

                                </li>
                            

                                <li class="num">
                                    
                                        <a class="qld__search-pagination_link" href="?&amp;start_rank&#x3D;4">2</a></li>

                                </li>
                            

                                <li class="num">
                                    
                                        <a class="qld__search-pagination_link" href="?&amp;start_rank&#x3D;7">3</a></li>

                                </li>
                            

                                <li class="num">
                                    
                                        <a class="qld__search-pagination_link" href="?&amp;start_rank&#x3D;10">4</a></li>

                                </li>
                            

                                <li class="num">
                                    
                                        <a class="qld__search-pagination_link" href="?&amp;start_rank&#x3D;13">5</a></li>

                                </li>
                            
                                    <li class="ellipsis">
                                        <span>
                                            <i class="fa fa-ellipsis-h"></i>
                                        </span>
                                    </li>

                                <li class="last">
                                    
                                        <a class="qld__search-pagination_link" href="?&amp;start_rank&#x3D;22">8</a></li>

                                </li>
                            

                                <li class="next">
                                    

                                        <a class="qld__search-pagination_link" href="?&amp;start_rank&#x3D;4" rel="next" aria-label="Next page of results">
                                            <span>Next</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" focusable="false" width="16" height="16" role="img"><path fill="currentColor" d="M443.7 266.8l-165.9 176C274.5 446.3 269.1 448 265.5 448c-3.986 0-7.988-1.375-11.16-4.156c-6.773-5.938-7.275-16.06-1.118-22.59L393.9 272H16.59c-9.171 0-16.59-7.155-16.59-15.1S7.421 240 16.59 240h377.3l-140.7-149.3c-6.157-6.531-5.655-16.66 1.118-22.59c6.789-5.906 17.27-5.469 23.45 1.094l165.9 176C449.4 251.3 449.4 260.7 443.7 266.8z"/></svg>
                                        </a>
                                </li> -->
                            
                        </ul>
                    </nav>
                </div>
            </div>
                
        </div>
    </section>
    <!-- subscription form -->
    <?php 
$index_form = get_field('add_index_form_shortcode');
$index_heading = get_field('blog_index_form_heading');
$index_content = get_field('blog_index_form_content');
$index_colour = get_field('blog_index_form_colour');

// colour selector
if (!empty($index_colour)) {
    $index_classColour = ' qld__body--' . $index_colour;
}

if(!empty($index_form)) :
?>

<section class="qld__body <?php echo esc_attr($index_classColour); ?> qld__subscription">
    <div class="container-fluid">
        <div class="qld__subscription__container">
            <!-- content -->
            <div class="qld__sub__form-content">
                <div class="qld__subscription__form__content">
                    <h2 class="qld__display-xl"><?php echo esc_attr($index_heading); ?></h2>
                    <div class="qld__abstract"><?php echo esc_attr($index_content); ?></div>
                </div>
            </div>
             <!-- form -->
             <div class="qld__blog__form qld__sub__form-content">
                <div class="qld__subscription__form"><?php echo do_shortcode($index_form); ?></div>                
            </div>
        </div>
    </div>
</section>
<?php 
 endif 
?>
</main>

<?php
get_footer();

?>
