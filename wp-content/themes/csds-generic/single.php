<?php get_header(); ?>
<main class="main" role="main">

    <!-- MAIN BODY -->
    <main class="main" role="main">
      <section class="qld__body qld__body--breadcrumb">
        <div class="container-fluid">
          <nav class="qld__breadcrumbs" aria-label="breadcrumb">
          <?php custom_breadcrumbs(); ?>
          </nav>
        </div>
      </section>

      <!--CONTENT-->
      <section class="qld__body">
        <div class="container-fluid">
          <article class="qld__news-article">
            <div class="row">
              <div class="qld__news-article__main col-md-8 col-xs-12">
                <div class="qld__news-article__header">
                  <h1><?php the_title()  ?></h1>
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
                    <div class="qld__tag qld__tag--large">
                      Read time will display here.
                    </div>
                  </div>
                </div>
                <hr />
                <div class="qld__news-article__body">
                  <div class="qld__news-article__hero">
                    <?php    
                      $image_id = get_post_thumbnail_id();
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
                  <div class="qld__news-article__content">
                  <p><?php the_content();?></p>
                  </div>
                </div>
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
"
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
                    </ul>
                  </div>
                </div>
              </div>

              <!-- related sidebar -->
              <aside
                class="qld__news-article__aside col-md-4 col-lg-3 col-lg-offset-1 col-xs-12"
              >
                <?php 
                $terms = get_the_terms( get_the_ID(), 'category' );
                $term_list = wp_list_pluck( $terms, 'slug' );
                $related_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'post_status' => 'publish',
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
                <h3>Related content</h3>
                <h3
                  class="qld__news-article__aside__sub-heading qld__display-md"
                >
                  <i class="far fa-newspaper"></i>News
                </h3>
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
                <?php endif; ?>
                <h3
                  class="qld__news-article__aside__sub-heading qld__display-md"
                >
                  <i class="far fa-newspaper"></i>Featured News
                </h3>
                <ul class="qld__card-list qld__card-list--matchheight">
                  <li class="col-xs-12">
                    <div class="qld__card qld__card__action">
                      <div class="qld__card__inner">
                        <div class="qld__card__content">
                          <div class="qld__card__content-inner">
                            <h4 class="qld__card__title">
                              <a
                                class="qld__card--clickable__link"
                                href="https://cairns-hinterland.health.qld.gov.au/about-us/news/mareeba-stroke-first-aid"
                                >Mareeba stroke averted</a
                              >
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-xs-12">
                    <div class="qld__card qld__card__action">
                      <div class="qld__card__inner">
                        <div class="qld__card__content">
                          <div class="qld__card__content-inner">
                            <h4 class="qld__card__title">
                              <a
                                class="qld__card--clickable__link"
                                href="https://cairns-hinterland.health.qld.gov.au/about-us/news/lessons-learned-from-cyclone-yasi-10-years-on"
                                >Lessons learned from Cyclone Yasi, 10 years
                                on</a
                              >
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
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
