<?php 

/**
 * Tag List Block template.
 *
 * @param array $block The block settings and attributes.
 */

   //  Load values and assign defaults
 $heading = get_field('tag_list_header');
 $content = get_field('tag_list_content');
 $colour = get_field('tag_colour');
 $tag = get_field('tags');
 $size = get_field('tag_size');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id='. esc_attr($block['anchor']);
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

// Alignment
if (!empty($block['align'])) {
    $className .= ' qld__' . $block['align'];
}

// Tag colour style
if(!empty($colour)){
    $className .= ' qld__tag-' . $colour;
}

// Tag size
if(!empty($size)){
    $tag_size = 'qld__tag--' . $size;
}
?>
<section class="qld__tag-list-section">
        <?php if (!empty($heading)){
            ?> <h2 class="tag__list__title"> <?php echo $heading; ?> </h2> <?php
        } ?>
        <?php if (!empty($content)) { ?>
            <p class="tag__list__content"> <?php echo $content; ?> </p> <?php
        } ?>
        <div class="qld__tab_panel" <?php echo esc_attr($anchor); ?> >
            <ul class="qld__tag-list <?php echo esc_attr($className); ?>">
                <?php if(have_rows('tags')) {
                    while(have_rows('tags')) {
                        the_row();
                        $text = get_sub_field('tag_text');
                        $link = get_sub_field('tag_link');
                        ?>
                        <li>
                            <?php if(!empty($link)){
                                $link_url = $link['url'];
                                $link_target = $link['target'] ? $link['target'] : '_self'; 
                                $link_title = $link['title']; ?>
                                <a href="<?php echo esc_url($link_url); ?>"
                                    target="<?php echo esc_attr($link_target); ?>"
                                    class="qld__tag qld__tag--link <?php echo esc_attr($tag_size); ?>">
                                    <?php 
                                    if($text){ 
                                        echo esc_attr($text);
                                    } else {
                                        echo esc_attr($link_title);
                                    } ?>
                                </a>

                            <?php } else { ?>
                                <p class="qld__tag qld__tag--link <?php echo esc_attr($tag_size); ?>"><?php echo esc_attr($text); ?></p>
                            <?php } ?>
                        </li>
                    <?php
                    }
                }
                ?>

            </ul>
        </div>
</section>
