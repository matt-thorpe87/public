<?php 
$form = get_field('add_form_shortcode');
$heading = get_field('blog_form_heading');
$content = get_field('blog_form_content');
$colour = get_field('blog_form_colour');

// colour selector
if (!empty($colour)) {
    $classColour = ' qld__body--' . $colour;
}

if(!empty($form)) :
?>

<section class="qld__body <?php echo esc_attr($classColour); ?> qld__subscription">
    <div class="container-fluid">
        <div class="qld__subscription__container">
            <!-- content -->
            <div class="qld__sub__form-content">
                <div class="qld__subscription__form__content">
                    <h2 class="qld__display-xl"><?php echo esc_attr($heading); ?></h2>
                    <div class="qld__abstract"><?php echo esc_attr($content); ?></div>
                </div>
            </div>
             <!-- form -->
             <div class="qld__blog__form qld__sub__form-content">
                <div class="qld__subscription__form"><?php echo do_shortcode($form); ?></div>                
            </div>
        </div>
    </div>
</section>
<?php 
endif 
?>
