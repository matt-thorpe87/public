<?php get_header(); ?>
<main class="main" role="main">

<section class="qld__body qld__body--breadcrumb">
    <div class="container-fluid">
        <nav class="qld__breadcrumbs" aria-label="breadcrumb">
        <?php custom_breadcrumbs(); ?>
        </nav>
    </div>
</section>

<section class="qld__body ">
    <div class="container-fluid">
        <div class="qld__not__found__heading">
            <h1><?php esc_html_e('Sorry! We can\'t find that.', '_themename') ?></h1>
        </div>
        <div class="qld__not__found__content">
        <p><?php esc_html_e("The information you were looking for can't be found on our website. We're constantly updating our website, and it may have been moved or removed.", "_themename") ?></p>
            <h3>Here's a few suggestions that might help:</h3></br>
            <ul>
                <li>Go to our <a href="/">home</a> page and look for links to the information you want.</li>
                <li>Use the links at the top of this page to browse the website structure.</li>
                <li>Search using the Search box in the top right corner of the page.</li>
                <li>Click the Back button on your browser and try another link from the previous page.</li>
                <li>If you typed the page address in the address bar, check the spelling.</li>
                <li>If you still can't find what you're looking for, contact us.</li>
            </ul>
        </div>
    </div>
</section>


</main>
<?php
get_footer();

?>
