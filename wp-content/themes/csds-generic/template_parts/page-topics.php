<?php get_header(); 



$args = array(
    'post-type' => 'Topic'
);

$topic = New WP_Query($args);

print_r($topic);

if($topic->have_posts()) : while ($topic->have_posts()) : $topic->the_post(); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></2>


<?php get_footer(); ?>

