<html>
    <head>
        <link rel='stylesheet' href='http://multisite-dev.local/wp-content/themes/csds-generic/style.css'>
        <style>
            * { margin: 0rem; padding: .5rem; background-color: #09549f }
            h2.pdfcrowd-source-title { color: #fff;}


        </style>
    </head>
    <?php
    // get url of logo 
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    ?>
    <body>
        <div style='text-align: center'>
            <img src="<?php echo $logo[0]; ?>">
            <h2 class="pdfcrowd-source-title"></h2>      
        </div>
    </body>
</html>