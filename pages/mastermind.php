<?php partial('head') ?>

<body id="window-top">
<?php partial('tag-manager') ?>
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
                        We are building a powerful tribe via a
                    </small>
                    <br>
                    <span class="text-uppercase">private mastermind</span>
                </h1>
            </div>
        </div>
    </div>
    <div class="hero-play">
        <svg class="button-label" width="134" height="51">
            <use xlink:href="#watch-online"></use>
        </svg>
        <a href="http://www.youtube.com/watch?v=NCDv-oHymUg" class="hero-play-btn js--play-video">
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
            <div class="content-banner-data-block">
                <p>
                    February 23 – March 3
                </p>
            </div>
            <div class="banner-logo-block text-uppercase">
                <div class="banner-logo-text">
                    <p>
                        Powered by:
                    </p>
                </div>
                <div class="banner-logo">
                    <img src="<?= asset('images/banner-logo.png') ?>" alt="">
                </div>
            </div>
            <div class="banner-btn-content">
                <a href="http://bit.ly/FCMastermindApplication" class="btn btn-secondary">
                    Apply To Join Our Next Mastermind
                </a>
            </div>
        </div>
    </div>
</section>
<!--content-baner-->
<section class="content-img-section" style="background:url('<?= asset('images/content-img.png') ?>')">
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
                <a href="http://bit.ly/FCMastermindApplication" class="btn btn-outline-primary">
                    Apply To Join Our Next Mastermind
                </a>
            </div>
        </div>
        <div class="social-network-content">
            <div class="d-flex justify-content-center">
                <?php partial('social'); ?>
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
<?php partial('footer'); ?>

<?php partial('svg'); ?>
<?php partial('scroll-to-top'); ?>
<script src="<?= asset('scripts/main.js') ?>"></script>
</body>
</html>
