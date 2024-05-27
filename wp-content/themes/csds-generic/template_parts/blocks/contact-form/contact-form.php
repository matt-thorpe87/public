<?php

/**
 * Contact Form Block template.
 *
 * @param array $block The block settings and attributes.
 */

//  Load values and assign defaults
$heading = get_field('heading');
$subheading = get_field('subheading');
$hours = get_field('contact_hours');
$phone = get_field('phone_number');
$fax = get_field('fax');
$email = get_field('email');
$street = get_field('street_address');
$postal = get_field('postal_address');
$form = get_field('contact_form_shortcode');
$layout = get_field('column_layout');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "color" values.
$className = 'qld__contact-details';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if ($layout == 'two') {
    $layoutClass = 'qld__contact-details__row';
} else {
    $layoutClass = 'qld__contact-details__col';
}
if ($layout == 'two') {
    $layoutInner = 'qld__contact-details__col qld__contact-details__row-layout';
} else {
    $layoutInner = 'qld__contact-details__row ';
}
?>
<section class="qld__contact" <?php echo esc_attr($anchor); ?>>
    <div class="container-fluid <?php echo esc_attr($layoutClass); ?>">
        <div class="<?php echo esc_attr($className); ?>" id="contact-details-">
            <div class="<?php echo esc_attr($layoutInner); ?> ">
                <div class="qld__contact-details__col qld__contact-details__first">
                    <h2 id="contact-details" class="qld__contact-details__heading"><?php echo $heading; ?></h2>
                    <p>
                        <strong><?php echo $subheading; ?></strong>
                    </p>
                    <p><?php echo $hours; ?></p>
                </div>
                <div class="qld__contact-details__col qld__contact-details__col--no-wrap">
                    <p>
                        <svg class="svg-inline--fa fa-phone-alt fa-w-16 qld__contact-details__icon text-error"
                            width="16" height="16" aria-hidden="true" focusable="false" data-prefix="fal"
                            data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M493.09 351.3L384.7 304.8a31.36 31.36 0 0 0-36.5 8.9l-44.1 53.9A350 350 0 0 1 144.5 208l53.9-44.1a31.35 31.35 0 0 0 8.9-36.49l-46.5-108.5A31.33 31.33 0 0 0 125 .81L24.2 24.11A31.05 31.05 0 0 0 0 54.51C0 307.8 205.3 512 457.49 512A31.23 31.23 0 0 0 488 487.7L511.19 387a31.21 31.21 0 0 0-18.1-35.7zM456.89 480C222.4 479.7 32.3 289.7 32.1 55.21l99.6-23 46 107.39-72.8 59.5C153.3 302.3 209.4 358.6 313 407.2l59.5-72.8 107.39 46z">
                            </path>
                        </svg>
                        <a href="tel:000">In&nbsp;an&nbsp;emergency&nbsp;call&nbsp;000</a>
                    </p>
                    <?php if (!empty($phone)) { ?>
                        <p class="order-first">
                            <svg class="svg-inline--fa fa-phone-alt fa-w-16 qld__contact-details__icon text-success"
                                width="16" height="16" aria-hidden="true" focusable="false" data-prefix="fal"
                                data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M493.09 351.3L384.7 304.8a31.36 31.36 0 0 0-36.5 8.9l-44.1 53.9A350 350 0 0 1 144.5 208l53.9-44.1a31.35 31.35 0 0 0 8.9-36.49l-46.5-108.5A31.33 31.33 0 0 0 125 .81L24.2 24.11A31.05 31.05 0 0 0 0 54.51C0 307.8 205.3 512 457.49 512A31.23 31.23 0 0 0 488 487.7L511.19 387a31.21 31.21 0 0 0-18.1-35.7zM456.89 480C222.4 479.7 32.3 289.7 32.1 55.21l99.6-23 46 107.39-72.8 59.5C153.3 302.3 209.4 358.6 313 407.2l59.5-72.8 107.39 46z">
                                </path>
                            </svg>
                            <strong>Phone</strong>
                            <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                        </p>
                    <?php } ?>
                    <?php if (!empty($fax)) { ?>
                        <p class="order-first">
                            <svg class="svg-inline--fa fa-fax fa-w-16 qld__contact-details__icon text-success" width="16"
                                height="16" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="fax"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M392 304h16a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zm0 128h16a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zM80 128H48a48 48 0 0 0-48 48v288a48 48 0 0 0 48 48h32a48 48 0 0 0 48-48V176a48 48 0 0 0-48-48zm16 336a16 16 0 0 1-16 16H48a16 16 0 0 1-16-16V176a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16zm296-96h16a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zm-128 64h16a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zm0-64h16a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zm216-205.06v-53.69a32 32 0 0 0-9.38-22.63L393.38 9.38A32 32 0 0 0 370.75 0H208a48 48 0 0 0-48 48v416a48 48 0 0 0 48 48h256a48 48 0 0 0 48-48V208a47.87 47.87 0 0 0-32-45.06zM384 45.25L434.75 96H384zM192 48a16 16 0 0 1 16-16h144v64a32 32 0 0 0 32 32h64v64H192zm288 416a16 16 0 0 1-16 16H208a16 16 0 0 1-16-16V224h288zm-152-32h16a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zm0-64h16a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zm0-64h16a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zm-64 0h16a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8z">
                                </path>
                            </svg>
                            <strong>Fax</strong>
                            <span><?php echo $fax; ?></span>
                        </p>
                    <?php } ?>
                    <?php if (!empty($email)) { ?>
                        <p>
                            <svg class="svg-inline--fa fa-envelope fa-w-16 qld__contact-details__icon text-success"
                                width="16" height="16" aria-hidden="true" focusable="false" data-prefix="fal"
                                data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z">
                                </path>
                            </svg>
                            <strong>Email</strong>
                            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                        </p>
                    <?php } ?>
                </div>
                <div class="qld__contact-details__col">
                    <?php if (!empty($street)) { ?>
                        <div class="qld__contact-details__col">
                            <p>
                                <strong>Street address</strong>
                            </p>
                            <p>
                                <?php echo $street; ?>
                            </p>
                        </div>
                    <?php } ?>

                </div>
                <div class="qld__contact-details__col">

                    <?php if (!empty($postal)) { ?>

                        <div class="qld__contact-details__col">
                            <p>
                                <strong>Postal address</strong>
                            </p>
                            <p>
                                <?php echo $postal; ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <?php echo do_shortcode($form); ?>
        </div>
    </div>
</section>