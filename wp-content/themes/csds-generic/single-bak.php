<?php get_header(); ?>
<main class="main" role="main">
  <?php 
  include 'inc/posts-banner.php';
  ?>
    <!-- MAIN BODY -->
      <!--CONTENT-->
      <section class="qld__body">
        <div class="container-fluid">
          <article class="qld__news-article">
            <div class="row">
              <div class="qld__news-article__main col-md-8 col-xs-12">
                <div class="qld__news-article__header">
                  <?php if ($display == 'no') : ?>
                  <h1><?php the_title(); endif;  ?></h1>
                  <?php $meta = get_field('show_post_meta'); ?>
                  <?php if ($meta == 'yes') : ?>
                  <p class="qld__news-article__published-date">
                    <strong>Published: </strong><?php echo get_the_date() ?>
                  </p>

                  <div class="qld__news-article__utility">
                    <button
                      class="qld__btn qld__btn--icon-trail qld__news-article__share-btn qld__open-modal"
                      data-modaltarget="qld__share-model"
                    >
                      Share<i class="far fa-share-alt"></i>
                    </button>
                    <div
                      id="qld__share-model"
                      class="qld__modal qld__news-article__share-modal"
                      tabindex="-1"
                    >
                      <div class="qld__modal__underlay"></div>
                      <div class="qld__modal__body">
                        <div class="qld__modal__body__header">
                          <h2 class="qld__modal__body__heading qld__display-md">
                            Share this article
                          </h2>
                        </div>
                        <div class="qld__modal__body__content">
                          <p>Share this article on your networks</p>
                          <ul class="qld__news-article__share-list">
                            <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&text=<?php the_title(); ?>" alt="Facebook" target="_blank"
                          ><span class="sr-only">Share via Facebook</span
                                ><i class="fab fa-facebook-f" style="color: #ffffff;";></i
                              ></a>
                            </li>
                            <li>
                              <a
                              href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"
                                target="_blank"
                                data-action="close"
                                ><span class="sr-only">Share via Linkedin</span
                                ><i class="fab fa-linkedin-in" style="color: #ffffff;";></i
                              ></a>
                            </li>
                            <li>
                              <a
                              href="https://www.x.com/share?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"
                                target="_blank"
                                data-action="close"
                                ><span class="sr-only">Share via X (Twitter)</span
                                ><i class="fab fa-x-twitter" style="color: #ffffff;";></i
                              ></a>
                            </li>
                            <li>
                                <a
                                href="mailto:?subject=<?php the_title(); ?>&body=View This Page <?php the_permalink(); ?>"
                                target="_blank"
                                data-action="close"
                                ><span class="sr-only">Share via Email</span
                                ><i class="far fa-envelope" style="color: #ffffff;"></i
                                ></a>
                            </li>
                          </ul>
                          <p>Or copy link</p>
                          <p class="qld__news-article__copy-link">
                            <i class="far fa-link"></i
                            ><span
                              tabindex="0"
                              aria-label="Press enter or space to copy link"
                              role="button"
                              aria-pressed="false"
                              ><?php echo get_permalink() ?></span
                            ><span class="qld__copied-to-clipboard"></span>
                          </p>
                        </div>
                        <button
                          class="qld__modal__close qld__btn"
                          data-action="close"
                        >
                          <span class="sr-only"> Close modal </span>
                          <i class="fal fa-times"></i>
                        </button>
                      </div>
                    </div>
              
                  </div>
                  <?php endif; ?>
                </div>
                <hr />
                <div class="qld__news-article__body">
                  <?php 
                  $image_id = get_post_thumbnail_id();
                  if (!empty($image_id)){ ?>
                  <div class="qld__news-article__hero">
                    <?php    
                      $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                      $image_title = get_the_title($image_id);
                      $size = 'my-size'; // Defaults to 'thumbnail' if omitted.
                      $image_caption = get_the_post_thumbnail_caption();

                      $image_src = wp_get_attachment_image_src($image_id, $size)[0];
                      ?>
                    <img
                      class="qld__news-article__hero__image"
                      src="<?php echo $image_src; ?>"
                      alt="<?php echo $image_alt ?>"
                    />
                    <?php if($image_caption){ ?>
                        <p class="qld__news-article__hero__caption">
                        <?php echo $image_caption ?>
                        </p><?php
                    } ?>
                   
                  </div>
                  <?php } ?>
                  <div class="qld__news-article__content">
                  <p><?php the_content();?></p>
                  </div>
                </div>
                <?php 
                $show_form = get_field('show_subscription_form');
                $blog_sub = 'template_parts/blog_form';
                if ( $show_form == 'yes') :
                get_template_part( $blog_sub );
                endif;
                ?>
                <?php if ($meta == 'yes') : ?>
                  <hr />

                <div class="qld__news-article__footer">
                  <div class="qld__news-article__footer__tags">
                    <h2 class="qld__display-sm">
                      This page is tagged in the following topics
                    </h2>
                    <?php 
                    $post_id = get_the_id();
                    $post_categories = get_the_category( $post_id, array( 'fields' => 'all' ) );
                    $cats = array();
                    
                    if( $post_categories ){ // Always Check before loop! ?>
                        <ul class="qld__tag-list mt-1 mb-2">
                        <?php
                        foreach($post_categories as $c){
                            $cats[] = array( 'name' => $c->name, 'slug' => $c->slug );
                            // Or we can just print it directly ?>
                            <li>
                                <a
                                class="qld__tag qld__tag--large qld__tag--link"
                                href="<?php echo get_category_link($c->term_id); ?>"
                                ><?php echo $c->name ;?></a
                                >
                            </li><?php
                                }	
                            }
                            ?>
                        </ul>
                  </div>
                  <p class="qld__news-article__updated-date">
                    <strong>Last updated:</strong> <?php echo get_the_modified_date() ?>
                  </p>
                  <div class="qld__news-article__footer__share">
                    <h2 class="qld__display-md">Share</h2>
                    <ul class="qld__news-article__share-list">
                      <li>
                        <a
                          href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&text=<?php the_title(); ?>" alt="Facebook"
                          target="_blank"
                          ><span class="sr-only">Share via Facebook</span
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                      </li>
                      <li>
                      <a
                        href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"
                        target="_blank"
                        data-action="close"
                        ><span class="sr-only">Share via Linkedin</span
                          ><i class="fab fa-linkedin-in"></i
                        ></a>
                      </li>
                      <li>
                        <a
                        href="https://www.x.com/share?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"
                        target="_blank"
                        data-action="close"
                        ><span class="sr-only">Share via X (Twitter)</span
                        ><i class="fab fa-x-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a
                        href="mailto:?subject=<?php the_title(); ?>&body=View This Page <?php the_permalink(); ?>"
                        target="_blank"
                        data-action="close"
                        ><span class="sr-only">Share via Email</span
                        ><i class="far fa-envelope"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <?php endif; ?>
              </div>

              <!-- related sidebar -->
              <aside
                class="qld__news-article__aside col-md-4 col-lg-3 col-lg-offset-1 col-xs-12"
              >
              <h3>Related content</h3>
              <h3
                  class="qld__news-article__aside__sub-heading qld__display-md"
                >
                  <i class="far fa-newspaper"></i>News
                </h3>
                <?php 
                $terms = get_the_terms( get_the_ID(), 'category' );
                $term_list = wp_list_pluck( $terms, 'slug' );
                $related_args = array(
                    'post_type' => 'any',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'post__not_in' => array( get_the_ID() ),
                    'order' => 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => $term_list,
                        )
                    )
                );
                $related = new WP_Query( $related_args );
                if($related->have_posts() ) :
                ?>
                
                <ul class="qld__card-list qld__card-list--matchheight">
                    <?php
                    while ($related->have_posts()): $related->the_post();
                    ?>
                    <li class="col-xs-12">
                        <div class="qld__card qld__card__action">
                        <div class="qld__card__inner">
                            <div class="qld__card__content">
                            <div class="qld__card__content-inner">
                                <h4 class="qld__card__title">
                                <a
                                    class="qld__card--clickable__link"
                                    href="<?php the_permalink(); ?>"
                                    ><?php the_title() ?></a
                                >
                                </h4>
                            </div>
                            </div>
                        </div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php else: 
                ?> <h3
                class="qld__news-article__aside__sub-heading qld__display-xs"
              >No related News found</h3> <?php
                endif; ?>
                <?php 
                // $terms_featured = get_the_terms( get_the_ID(), 'category' );
                // $term_list_featured = wp_list_pluck( $terms, 'slug' );
                $featured_args = array(
                    'post_type' => 'any',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'post__not_in' => array( get_the_ID() ),
                    'order' => 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'featured',
                        )
                    )
                );?>
                <h3
                  class="qld__news-article__aside__sub-heading qld__display-md"
                >
                  <i class="far fa-newspaper"></i>Featured
                </h3><?php
                $featured = new WP_Query( $featured_args );
                if($featured->have_posts() ) :
                ?>
                
                <ul class="qld__card-list qld__card-list--matchheight">
                    <?php
                    while ($featured->have_posts()): $featured->the_post();
                    ?>
                    <li class="col-xs-12">
                        <div class="qld__card qld__card__action">
                        <div class="qld__card__inner">
                            <div class="qld__card__content">
                            <div class="qld__card__content-inner">
                                <h4 class="qld__card__title">
                                <a
                                    class="qld__card--clickable__link"
                                    href="<?php the_permalink(); ?>"
                                    ><?php the_title() ?></a
                                >
                                </h4>
                            </div>
                            </div>
                        </div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php
                else: ?>
                <h3
                class="qld__news-article__aside__sub-heading qld__display-xs"
              >No Featured posts found</h3>
                <?php
              endif; ?>

              </aside>
            </div>
          </article>
        </div>
      </section>
    </main>
    <!-- END MAIN BODY -->




</main>
<?php
get_footer();

?>
