<!--FOOTER -->

<?php
$footer_colour = get_field('footer_colour', 'option');
$className = ' qld__footer--' . $footer_colour;

?>
<footer class="qld__footer <?php echo esc_attr($className); ?>" role="contentinfo">

    <div class="container-fluid">
        <div class="row qld__footer__row">
            <div class="col-xs-12 qld__footer__column">
                <div class="qld__footer__title">
                    <h4 class="qld__footer__heading"><?php echo get_bloginfo('name'); ?></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row qld__footer__row">
            <div class="col-xs-12 col-lg-3 qld__footer__column">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-xs-6 col-lg-12">
                            
                            <?php
                            $contact_header = get_field('contact_header', 'option');
                            if (!empty($contact_header)){
                            ?> <h4 class="qld__footer__heading"> <?php
                            echo $contact_header; ?> </h4> <?php }
                            ?>
                        
                            <?php
                            $contact_sub = get_field('contact_header_sub', 'option'); 
                            if (!empty($contact_sub)){
                            ?> <p class="qld__footer__cta-content"> <?php
                            echo $contact_sub; ?> </p> <?php }
                            ?>

                        </div>
                        <div class="col-xs-6 col-lg-12 ">
                            <?php
                            $link = get_field('contact_button', 'option');
                            if ($link):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                <a href="<?php echo esc_attr($link_url) ?>" target="<?php echo esc_attr($link_target) ?>"
                                    class="qld__btn qld__btn--secondary">
                                    <?php if ($link_title) {
                                        echo esc_attr($link_title);
                                    } ?>
                                </a>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- footer menu 1 -->
            <?php if (has_nav_menu('footer_column_one')) { ?>
                <div class="col-xs-12 col-lg-2 qld__footer__column">
                    <nav class="qld__footer__navigation" aria-label="footer">
                        <?php
                        
                        $col_one = get_field('col_one_header', 'option');
                        if (!empty($col_one)) {
                            ?> <h4 class="qld__footer__heading"> <?php echo $col_one; ?> </h4> <?php
                        } ?>
                        <?php

                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer_column_one',
                                'container' => 'null',
                                'menu_class' => 'qld__link-list',
                                'add_a_class' => 'qld__footer__clickable__link'
                            )
                        ); ?>

                    </nav>
                </div>
            <?php } ?>
            <!-- Footer menu 2 -->
            <?php if (has_nav_menu('footer_column_two')) {
                ?>
                <div class="col-xs-12 col-lg-2 qld__footer__column">
                    <nav class="qld__footer__navigation" aria-label="footer">
                        <?php
                        $col_two = get_field('col_two_header', 'option');
                        if (!empty($col_two)) {
                            ?> <h4 class="qld__footer__heading"> <?php echo $col_two; ?> </h4> <?php
                        }
                        ?>

                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'footer_column_two',
                                'container' => 'null',
                                'menu_class' => 'qld__link-list',
                                'add_a_class' => 'qld__footer__clickable__link'
                            )
                        ) ?>
                    </nav>
                </div>
            <?php } ?>
            <!-- social media menu -->
            <?php
            $socials = get_field('social_media_links', 'option');
            if (!empty($socials)) {
                ?>
                <div class="col-xs-12 col-lg-2 qld__footer__column">
                    <nav class="qld__footer__social qld__footer__navigation" aria-label="social media links">
                        <?php
                        $social_header = get_field('social_header', 'option');
                        if (!empty($social_header)) { ?>
                        <h4 class="qld__footer__heading">
                        <?php echo $social_header; ?> </h4> <?php }
                        ?>
                        <?php if (have_rows('social_media_links', 'option')): ?>
                            <ul class="qld__link-list" id="menu-social-media">
                                <?php
                                while (have_rows('social_media_links', 'option')):
                                    the_row();
                                    $social_title = get_sub_field('title');
                                    $social_url = get_sub_field('url');
                                    $social_icon = get_sub_field('icon'); ?>
                                    <li><a class="qld__footer__clickable__link" href="<?php echo $social_url; ?>" target="_blank"><i
                                                class="fa-brands <?php echo $social_icon; ?>"></i><span><?php echo $social_title; ?></span></a>
                                    </li>
                                <?php endwhile ?>

                            </ul>
                        <?php endif ?>
                    </nav>
                </div>
            <?php } ?>
            <!-- Acknowledgement of country, copyright -->
            <div class="col-xs-12 qld__footer__column">
                <div class="qld__footer__last">

                    <?php
                    $acknowledgement = get_field('acknowledgement', 'option');
                    if (!empty ($acknowledgement)) { ?>
                        <p class="qld__footer__acknowledgements">
                        <?php echo $acknowledgement; ?> </p> <?php 
                    } ?>

                    <?php $copyright = get_field('copyright', 'option');
                    if(!empty($copyright)){ ?>
                    <p class="qld__footer__copyright"> 
                    <?php echo $copyright; ?> </p> <?php } ?>
                  
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script>
document.getElementById('download-pdf').onclick = function () {
    const element = document.getElementById('pdf-content');
    const siteTitle = document.title || 'Default Site Title';

    const opt = {
        margin:       10,
        filename:     document.title || 'document.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2, logging: true, dpi: 192, letterRendering: true },
        jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
    };

    html2pdf()
        .from(element)
        .set(opt)
        .toPdf()
        .get('pdf')
        .then(function (pdf) {
            const totalPages = pdf.internal.getNumberOfPages();

            // Add header and footer to each page
            for (let i = 1; i <= totalPages; i++) {
                pdf.setPage(i);
                pdf.setFontSize(10);
                
                // Header: Site title
                pdf.text(siteTitle, pdf.internal.pageSize.getWidth() / 2, 10, { align: 'center' });

                // Footer: Page number
                const pageHeight = pdf.internal.pageSize.getHeight();
                pdf.text(`Page ${i} of ${totalPages}`, pdf.internal.pageSize.getWidth() / 2, pageHeight - 5, { align: 'center' });
            }
            pdf.save(document.title || 'document.pdf');
        })
        .catch(function (error) {
            console.error('Error generating PDF:', error);
        });
};
</script>

</body>
</html>