<?php
/*
 Template Name: Home
 *
*/
?>
<?php get_header(); ?>
    <header class="site-header bg-color-white">
        <div class="layout-wrap">
            <h1 class="logo">
                <a href="/" class="block">Cash Chiropractic</a>
            </h1>
        </div>
    </header>
    <section id="hero" class="hero bg-color-primary" data-bg-url="<?php echo get_template_directory_uri(); ?>/library/images/family.jpg"></section>
    <section class="tagline color-white bg-color-primary">
        <div class="layout-wrap">
            <h2>No insurance? No problem. We've got your back.</h2>
        </div>
    </section>
    <section class="secondary">
        <div class="layout-wrap">
            <section class="item center-text">
                <i class="icon-bubble color-white bg-color-primary inline-block"></i>
                <p class="color-dark item-body">Introducing Cash Chiropractic &ndash; a simple solution for obtaining effective, natural pain relief that's easy on your wallet. With over 30 years of experience, Cash Chiropractic has your back.</p>
            </section>
            <section class="item center-text">
                <i class="icon-heart color-white bg-color-primary inline-block"></i>
                <p class="color-dark item-body">Founded by Dr. Tracy Standridge, Cash Chiropractic's mission is to help people feel better quickly and easily, without the hassles and ever-increasing expenses of health insurance premiums and co-payments.</p>
            </section>
            <section class="item center-text">
                <i class="icon-cash color-white bg-color-primary inline-block"></i>
                <p class="color-dark item-body">If you're experiencing physical pain in your neck, back or extremities, and either don't have major medical insurance or you'd just prefer to pay in cash, Cash Chiropractic is for you.</p>
            </section>
        </div>
    </section>
    <footer class="site-footer bg-color-light">
        <div class="layout-wrap">
            <section class="contact">
                <div class="method">
                    <p class="color-med">To learn more about Cash Chiropractic, please call us today at:</p>
                    <a href="tel:19182727432" class="phone color-primary bold">918.272.7432</a>
                </div>
                <div class="method">
                    <a href="https://www.google.com/maps/place/12707+East+86th+St+N,+Owasso,+OK+74055/@36.2790032,-95.8319746,17z/data=!3m1!4b1!4m2!3m1!1s0x87b6f0bc3acebd89:0xaad09313289ecc0" target="_blank" class="icon-pin-map color-primary inline-block"></a>
                    <address class="postal-address color-med inline-block">
                        12707 E 86th Street N, Ste. A<br />Owasso, OK 74055
                    </address>
                </div>
                <div class="method">
                    <a href="https://www.facebook.com/CashChiro" target="_blank" class="btn-share icon-facebook inline-block color-light bg-color-primary"></a><a href="https://twitter.com/CashChiro" target="_blank" class="btn-share icon-twitter inline-block color-light bg-color-primary"></a>
                </div>
            </section>
            <section class="hours">
                <p class="allcaps color-primary bold">Hours</p>
                <ul class="color-med">
                    <li class="time-block">
                        <p class="label bold">Monday-Thursday</p>
                        <span class="value">9am - 12:30pm &amp; 2:30pm - 6pm</span>
                    </li>
                    <li class="time-block">
                        <p class="label bold">Friday</p>
                        <span class="value">7am - 9am &amp; 3pm - 7pm</span>
                    </li>
                    <li class="time-block">
                        <p class="label bold">Saturday</p>
                        <span class="value">8am - 10am</span>
                    </li>
                    <li class="time-block">
                        <p class="label bold">Sunday</p>
                        <span class="value">Closed</span>
                    </li>
                </ul>
            </section>
            <hr class="bg-color-med" />
            <p class="redirect inline-block color-med">Please visit the <a href="http://standridgechiropractic.com" target="_blank" class="color-primary">Standridge Clinic</a> website to learn more about our comprehensive chiropractic services.</p>&nbsp;<p class="legal inline-block color-med">&copy; 2015 Cash Chiropractic. All Rights Reserved.</p>
        </div>
    </footer>
<?php get_footer(); ?>