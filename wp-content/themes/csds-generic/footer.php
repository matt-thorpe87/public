

<!--FOOTER -->
<footer class="qld__footer qld__footer--dark-alt" role="contentinfo">

    <div class="container-fluid">
        <div class="row qld__footer__row">
            <div class="col-xs-12 qld__footer__column">
                <div class="qld__footer__title">
                    <h4 class="qld__footer__heading">Queensland Design System</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-lg-3 qld__footer__column">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-xs-6 col-lg-12">
                        <h4 class="qld__footer__heading">Footer header 1</h4>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'footer_column_one',
                                'container' => 'null',
                                'menu_class' => 'qld__link-list',
                                'add_a_class' => 'qld__footer__clickable__link'
                            ))?>

                            <p class="qld__footer__cta-content">
                                CTA Lead Text
                            </p>
                            <p class="qld__footer__cta-content">
                                CTA Contact Text
                            </p>
                        </div>
                        <div class="col-xs-6 col-lg-12 ">
                            <a href="" class="qld__btn qld__btn--secondary">Feedback</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-lg-2 qld__footer__column">
                <nav class="qld__footer__navigation" aria-label="footer">
                    <h4 class="qld__footer__heading">Footer header 2</h4>
                    <?php wp_nav_menu(array(
                      'theme_location' => 'footer_column_two',
                      'container' => 'null',
                      'menu_class' => 'qld__link-list',
                      'add_a_class' => 'qld__footer__clickable__link'
                      ));?>

                    <!-- <ul class="qld__link-list">
                     
                        <li>
                            <a class="qld__footer__clickable__link" href="https://www.health.qld.gov.au/global/copyright-statement">Copyright</a>
                        </li>
                        <li>
                            <a class="qld__footer__clickable__link" href="https://www.health.qld.gov.au/global/disclaimer">Disclaimer</a>
                        </li>
                        <li>
                            <a class="qld__footer__clickable__link" href="https://www.health.qld.gov.au/global/privacy">Privacy</a>
                        </li>
                        <li>
                            <a class="qld__footer__clickable__link" href="https://www.health.qld.gov.au/system-governance/contact-us/access-info">Right to information</a>
                        </li>
                        <li>
                            <a class="qld__footer__clickable__link" href="https://www.qld.gov.au/help/accessibility/">Accessibility</a>
                        </li>
                        <li>
                            <a class="qld__footer__clickable__link" href="https://smartjobs.qld.gov.au/jobtools/jncustomsearch.jobsearch?in_organid&#x3D;14904">Jobs</a>
                        </li>
                        <li>
                            <a class="qld__footer__clickable__link" href="https://www.qld.gov.au/languages/">Other languages</a>
                        </li>
                    </ul> -->
                </nav>
            </div>

            <div class="col-xs-12 col-lg-2 qld__footer__column">
                <nav class="qld__footer__social" aria-label="social media links">
                    <h4 class="qld__footer__heading">Footer header 3</h4>
                    
                    <?php wp_nav_menu(array(
                          'theme_location' => 'footer_column_three',
                          'container' => 'null',
                          'menu_class' => 'qld__link-list',
                          'add_a_class' => 'qld__footer__clickable__link'
                      ))?>

                    <!-- <ul class="qld__link-list">
                        <li>
                            <a class="qld__footer__clickable__link" href="https://www.facebook.com/QLDHealth">
                                <svg aria-hidden="true" focusable="false" width="32" height="20" viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"><title>Facebook icon</title><path d="M3.85156 20.5H7.52344V11.5547H10.375L10.8438 8H7.52344V5.53906C7.52344 4.99219 7.60156 4.5625 7.83594 4.28906C8.07031 3.97656 8.57812 3.82031 9.28125 3.82031H11.1562V0.65625C10.4531 0.578125 9.51562 0.5 8.42188 0.5C7.01562 0.5 5.92188 0.929688 5.10156 1.75C4.24219 2.57031 3.85156 3.70312 3.85156 5.1875V8H0.84375V11.5547H3.85156V20.5Z" fill="currentColor"/></svg>
                                <span class="qld__footer__social__label">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a class="qld__footer__clickable__link" href="https://twitter.com/qldhealthnews">

                                <svg aria-hidden="true" focusable="false" width="32" height="20" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"><title>Twitter icon</title><path d="M17.9297 4.4375C18.7109 3.85156 19.4141 3.14844 20 2.28906C19.2188 2.64062 18.4375 2.875 17.6562 2.95312C18.5156 2.40625 19.1406 1.66406 19.4531 0.6875C18.6328 1.15625 17.7734 1.50781 16.8359 1.66406C16.4453 1.27344 15.9766 0.960938 15.4688 0.726562C14.9609 0.492188 14.4141 0.375 13.8281 0.375C13.0859 0.375 12.4219 0.570312 11.7969 0.921875C11.1719 1.3125 10.6641 1.82031 10.3125 2.44531C9.92188 3.07031 9.76562 3.77344 9.76562 4.47656C9.76562 4.78906 9.76562 5.10156 9.84375 5.41406C8.16406 5.33594 6.60156 4.94531 5.11719 4.16406C3.63281 3.42188 2.42188 2.40625 1.40625 1.11719C1.01562 1.78125 0.820312 2.48438 0.820312 3.1875C0.820312 3.89062 0.976562 4.55469 1.32812 5.14062C1.64062 5.76562 2.10938 6.23438 2.65625 6.625C1.99219 6.625 1.36719 6.42969 0.820312 6.07812V6.15625C0.820312 7.13281 1.13281 7.99219 1.75781 8.73438C2.38281 9.51562 3.16406 9.98438 4.10156 10.1797C3.71094 10.2578 3.35938 10.2969 3.00781 10.2969C2.77344 10.2969 2.5 10.2969 2.26562 10.2578C2.5 11.0781 2.96875 11.7422 3.67188 12.2891C4.375 12.8359 5.15625 13.0703 6.09375 13.0703C4.57031 14.2422 2.85156 14.8281 0.976562 14.8281C0.585938 14.8281 0.273438 14.8281 0 14.7891C1.875 16.0391 3.98438 16.625 6.28906 16.625C8.67188 16.625 10.7812 16.0391 12.6562 14.7891C14.3359 13.6953 15.6641 12.25 16.6016 10.375C17.5 8.65625 17.9688 6.82031 17.9688 4.94531C17.9688 4.71094 17.9297 4.55469 17.9297 4.4375Z" fill="currentColor"/></svg>
                                <span class="qld__footer__social__label">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a class="qld__footer__clickable__link" href="http://www.linkedin.com/company/queensland-health">

                                <svg aria-hidden="true" focusable="false" width="32" height="20" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"><title>Linkedin icon</title><path d="M4.15625 18.25V6.57031H0.523438V18.25H4.15625ZM2.35938 4.96875C2.90625 4.96875 3.41406 4.77344 3.84375 4.34375C4.23438 3.95312 4.46875 3.44531 4.46875 2.85938C4.46875 2.3125 4.23438 1.80469 3.84375 1.375C3.41406 0.984375 2.90625 0.75 2.35938 0.75C1.77344 0.75 1.26562 0.984375 0.875 1.375C0.445312 1.80469 0.25 2.3125 0.25 2.85938C0.25 3.44531 0.445312 3.95312 0.875 4.34375C1.26562 4.77344 1.77344 4.96875 2.35938 4.96875ZM17.75 18.25V11.8438C17.75 10.0469 17.4766 8.71875 16.9688 7.85938C16.2656 6.80469 15.0938 6.25781 13.4141 6.25781C12.5547 6.25781 11.8516 6.49219 11.2266 6.88281C10.6406 7.23438 10.2109 7.66406 9.97656 8.17188H9.9375V6.57031H6.46094V18.25H10.0547V12.4688C10.0547 11.5703 10.1719 10.8672 10.4453 10.3984C10.7578 9.77344 11.3438 9.46094 12.2031 9.46094C13.0234 9.46094 13.5703 9.8125 13.8828 10.5156C14.0391 10.9453 14.1172 11.6094 14.1172 12.5469V18.25H17.75Z" fill="currentColor"/></svg>
                                <span class="qld__footer__social__label">LinkedIn</span>
                            </a>
                        </li>
                        <li>
                            <a class="qld__footer__clickable__link" href="http://www.youtube.com/user/HealthierQueensland">
                                <svg aria-hidden="true" focusable="false" width="32" height="20" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"><title>Youtube icon</title><path d="M21.2344 2.34375C21.3906 3.04688 21.5469 4.14062 21.625 5.54688L21.6641 7.5L21.625 9.45312C21.5469 10.9375 21.3906 11.9922 21.2344 12.6953C21.0781 13.1641 20.8438 13.5547 20.5312 13.8672C20.1797 14.2188 19.7891 14.4531 19.3203 14.5703C18.6172 14.7656 17.0547 14.8828 14.5547 14.9609L11 15L7.44531 14.9609C4.94531 14.8828 3.34375 14.7656 2.67969 14.5703C2.21094 14.4531 1.78125 14.2188 1.46875 13.8672C1.11719 13.5547 0.882812 13.1641 0.765625 12.6953C0.570312 11.9922 0.453125 10.9375 0.375 9.45312L0.335938 7.5C0.335938 6.95312 0.335938 6.28906 0.375 5.54688C0.453125 4.14062 0.570312 3.04688 0.765625 2.34375C0.882812 1.875 1.11719 1.48438 1.46875 1.13281C1.78125 0.820312 2.21094 0.585938 2.67969 0.429688C3.34375 0.273438 4.94531 0.117188 7.44531 0.0390625L11 0L14.5547 0.0390625C17.0547 0.117188 18.6172 0.273438 19.3203 0.429688C19.7891 0.585938 20.1797 0.820312 20.5312 1.13281C20.8438 1.48438 21.0781 1.875 21.2344 2.34375ZM8.8125 10.7031L14.3984 7.5L8.8125 4.33594V10.7031Z" fill="currentColor"/></svg>

                                <span class="qld__footer__social__label">Youtube</span>
                            </a>
                        </li>
                        <li>
                            <a class="qld__footer__clickable__link" href="https://www.instagram.com/queenslandhealth/">
                              <svg aria-hidden="true" focusable="false" width="32" height="20" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"><title>Instagram icon</title><path d="M9 5.00781C9.78125 5.00781 10.5234 5.24219 11.2266 5.63281C11.9297 6.02344 12.4766 6.57031 12.8672 7.27344C13.2578 7.97656 13.4922 8.71875 13.4922 9.5C13.4922 10.3203 13.2578 11.0625 12.8672 11.7656C12.4766 12.4688 11.9297 13.0156 11.2266 13.4062C10.5234 13.7969 9.78125 13.9922 9 13.9922C8.17969 13.9922 7.4375 13.7969 6.73438 13.4062C6.03125 13.0156 5.48438 12.4688 5.09375 11.7656C4.70312 11.0625 4.50781 10.3203 4.50781 9.5C4.50781 8.71875 4.70312 7.97656 5.09375 7.27344C5.48438 6.57031 6.03125 6.02344 6.73438 5.63281C7.4375 5.24219 8.17969 5.00781 9 5.00781ZM9 12.4297C9.78125 12.4297 10.4844 12.1562 11.0703 11.5703C11.6172 11.0234 11.9297 10.3203 11.9297 9.5C11.9297 8.71875 11.6172 8.01562 11.0703 7.42969C10.4844 6.88281 9.78125 6.57031 9 6.57031C8.17969 6.57031 7.47656 6.88281 6.92969 7.42969C6.34375 8.01562 6.07031 8.71875 6.07031 9.5C6.07031 10.3203 6.34375 11.0234 6.92969 11.5703C7.47656 12.1562 8.17969 12.4297 9 12.4297ZM14.7422 4.8125C14.7422 4.53906 14.625 4.30469 14.4297 4.07031C14.1953 3.875 13.9609 3.75781 13.6875 3.75781C13.375 3.75781 13.1406 3.875 12.9453 4.07031C12.7109 4.30469 12.6328 4.53906 12.6328 4.8125C12.6328 5.125 12.7109 5.35938 12.9453 5.55469C13.1406 5.78906 13.375 5.86719 13.6875 5.86719C13.9609 5.86719 14.1953 5.78906 14.3906 5.55469C14.5859 5.35938 14.7031 5.125 14.7422 4.8125ZM17.7109 5.86719C17.7109 6.60938 17.75 7.82031 17.75 9.5C17.75 11.2188 17.7109 12.4297 17.6719 13.1719C17.6328 13.9141 17.5156 14.5391 17.3594 15.0859C17.125 15.75 16.7344 16.3359 16.2656 16.8047C15.7969 17.2734 15.2109 17.625 14.5859 17.8594C14.0391 18.0547 13.375 18.1719 12.6328 18.2109C11.8906 18.25 10.6797 18.25 9 18.25C7.28125 18.25 6.07031 18.25 5.32812 18.2109C4.58594 18.1719 3.96094 18.0547 3.41406 17.8203C2.75 17.625 2.16406 17.2734 1.69531 16.8047C1.22656 16.3359 0.875 15.75 0.640625 15.0859C0.445312 14.5391 0.328125 13.9141 0.289062 13.1719C0.25 12.4297 0.25 11.2188 0.25 9.5C0.25 7.82031 0.25 6.60938 0.289062 5.86719C0.328125 5.125 0.445312 4.46094 0.640625 3.91406C0.875 3.28906 1.22656 2.70312 1.69531 2.23438C2.16406 1.76562 2.75 1.375 3.41406 1.14062C3.96094 0.984375 4.58594 0.867188 5.32812 0.828125C6.07031 0.789062 7.28125 0.75 9 0.75C10.6797 0.75 11.8906 0.789062 12.6328 0.828125C13.375 0.867188 14.0391 0.984375 14.5859 1.14062C15.2109 1.375 15.7969 1.76562 16.2656 2.23438C16.7344 2.70312 17.125 3.28906 17.3594 3.91406C17.5156 4.46094 17.6328 5.125 17.7109 5.86719ZM15.8359 14.6562C15.9922 14.2266 16.0703 13.5234 16.1484 12.5469C16.1484 12 16.1875 11.1797 16.1875 10.125V8.875C16.1875 7.82031 16.1484 7 16.1484 6.45312C16.0703 5.47656 15.9922 4.77344 15.8359 4.34375C15.5234 3.5625 14.9375 2.97656 14.1562 2.66406C13.7266 2.50781 13.0234 2.42969 12.0469 2.35156C11.4609 2.35156 10.6406 2.3125 9.625 2.3125H8.375C7.32031 2.3125 6.5 2.35156 5.95312 2.35156C4.97656 2.42969 4.27344 2.50781 3.84375 2.66406C3.02344 2.97656 2.47656 3.5625 2.16406 4.34375C2.00781 4.77344 1.89062 5.47656 1.85156 6.45312C1.8125 7.03906 1.8125 7.85938 1.8125 8.875V10.125C1.8125 11.1797 1.8125 12 1.85156 12.5469C1.89062 13.5234 2.00781 14.2266 2.16406 14.6562C2.47656 15.4766 3.0625 16.0234 3.84375 16.3359C4.27344 16.4922 4.97656 16.6094 5.95312 16.6484C6.5 16.6875 7.32031 16.6875 8.375 16.6875H9.625C10.6797 16.6875 11.5 16.6875 12.0469 16.6484C13.0234 16.6094 13.7266 16.4922 14.1562 16.3359C14.9375 16.0234 15.5234 15.4375 15.8359 14.6562Z" fill="currentColor"/></svg>
                                <span class="qld__footer__social__label">Instagram</span>
                            </a>
                        </li>
                    </ul> -->
                </nav>
            </div>

            <div class="col-xs-12 qld__footer__column">
                <div class="">

                    <p class="qld__footer__acknowledgements">
                        Queensland Government acknowledges the Traditional Owners of the land and pays respect to Elders past, present and future.
                    </p>

                    <p>
                        © The State of Queensland 1995-2022 (Organisation) Queensland Government
                    </p>


                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
