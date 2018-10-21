<?php partial('head') ?>

<body id="window-top">
<?php partial('nav') ?>

<!-- hero -->
<section class="hero"
         style="background-image:linear-gradient(to top, rgba(0, 0, 0, 0), #0e1121) , url('<?= asset('images/hero-bg.png') ?>')">
    <div class="container">
        <div class="d-flex justify-content-end">
            <div class="menu-button js--toggle-menu">
                <svg width="29" height="21">
                    <use xlink:href="#burger"></use>
                </svg>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a class="logo-img" href="/">
                <img src="<?= asset('images/logo.png') ?>" alt="">
            </a>
        </div>
        <div class="hero-content">
            <div class="hero-text-content">
                <h1 class="hero-title">
                    <small>
                        Please Do Not Share:
                    </small>
                    <br>
                    <span class="text-uppercase">
                        This is a private invitation specifically for you
                    </span>
                </h1>

            </div>
        </div>
    </div>
    <div class="hero-play">
        <svg class="button-label" width="134" height="51">
            <use xlink:href="#watch-online"></use>
        </svg>
        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="hero-play-btn js--play-video">
            <svg width="36" height="36">
                <use xlink:href="#play"></use>
            </svg>
        </a>
    </div>
</section>
<!-- hero -->
<!--.content-banner-->
<section class="content-banner" style="background:#747a9d url('<?= asset('images/content-banner.png') ?>')  ">
    <div class="container">
        <div class="content-banner-wrapper">
            <div class="content-banner-title">
                <h2 class="text-center">
                    Costa Rica
                    <mark>&amp;</mark>
                    Envision Festival
                    <mark>2019</mark>
                </h2>
            </div>
            <div class="content-banner-data-block ">
                <p>
                    February 23 – March 3
                </p>
            </div>
            <div class="banner-logo-block">
                <div class="banner-logo-text text-uppercase">
                    <p>
                        Powered by:
                    </p>
                </div>
                <div class="banner-logo">
                    <img src="<?= asset('images/banner-logo.png') ?>" alt="">
                </div>
            </div>
            <div class="banner-btn-content">
                <a href="#" class="btn btn-secondary">
                    Apply To Join Our Next Mastermind
                </a>
            </div>
        </div>
    </div>
</section>
<!--content-baner-->
<!--.video-->
<section class="video">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12 col-md-6">
                <div class="video-block video-bg-gr-primary">
                    <div class="video-block-content">
                        <div class="video-block-title">
                            <h3>
                                About the
                                <mark>Event</mark>
                            </h3>
                        </div>
                        <div class="video-content">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/hN_q-_nGv4U"
                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="video-block video-bg-primary">
                    <div class="video-block-content">
                        <div class="video-block-title">
                            <h3>
                                Sponsorship
                                <mark>Opportunities</mark>
                            </h3>
                        </div>
                        <div class="video-content">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/hN_q-_nGv4U"
                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--video-->
<section class="event-detail">
    <a href="#" class="event-detail-content">
        Event
        <mark>Details <i class="fas fa-arrow-right"></i></mark>
    </a>
</section>
<!-- ask-network-content -->
<section class="ask-network-content">
    <div class="container">
        <div class="ask-title">
            <h2 class="text-uppercase">
                <small class="text-lowercase">again we ask,</small>
                <br>
                Are you one of us?
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="ask-network-block-btn">
                <a href="#" class="btn btn-outline-primary">
                    Apply To Join Our Next Mastermind
                </a>
            </div>
        </div>
        <div class="social-network-content">
            <h3>Join the movement</h3>
            <div class="d-flex justify-content-center">
                <ul class="d-flex social-network-icons">
                    <li>
                        <a href="#" class="social-network-block">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-network-block">
                            <i class="fab fa-twitter"></i>
                        </a>
                    <li>
                        <a href="#" class="social-network-block">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-network-block">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-network-block">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-network-block">
                            <i class="fab fa-medium-m"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="logo-buttom">
            <div class="d-flex justify-content-center">
                <img src="<?= asset('images/logo-botton.png') ?>" alt="" width="100%">
            </div>
        </div>
    </div>
</section>
<!-- ask-network-content -->

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-text-left text-lg-left text-center">
                    <strong>&copy; 2018 Freedom Culture</strong>
                    <a href="mailto:info@freedomculture.com" class="line-left">
                        info&#64;freedomculture.com
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer-text-right">
                    <ul class="d-flex justify-content-lg-end justify-content-center m-0 p-0">
                        <li>
                            <a href="#">
                                Terms &amp; Conditions
                            </a>
                        </li>
                        <li>
                            <a href="#" class="line-left">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php partial('svg'); ?>
<?php partial('scroll-to-top'); ?>
<script src="<?= asset('scripts/main.js') ?>"></script>
</body>
</html>
