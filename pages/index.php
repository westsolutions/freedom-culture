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
        <div class="hero-text-content">
            <h1 class="hero-title">
                <small>
                    It’s time for a
                </small>
                <br>
                <span class="text-uppercase">Decentralized Revolution</span>
            </h1>
            <div class="hero-title-text">
                A revolution for our <strong>freedom</strong>. Are you one of us?
            </div>
        </div>
    </div>

    <div class="hero-play">
        <svg class="button-label" width="134" height="51">
            <use xlink:href="#watch-online"></use>
        </svg>

        <script src="https://fast.wistia.com/embed/medias/6tzfwyk5hd.jsonp" async></script>
        <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
        <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;cursor:pointer;">
          <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
            <div class="wistia_embed popover=true popoverContent=html wistia_async_6tzfwyk5hd videoFoam=true" style="height:100%;position:relative;width:100%">
              <div class="wistia_swatch" style="height:100%;left:0;opacity:1;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                <span class="hero-play-btn" style="height:75px; width:75px;">
                  <svg width="36" height="36">
                      <use xlink:href="#play"></use>
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- <a href="#" class="hero-play-btn js--play-video">
            <svg width="36" height="36">
                <use xlink:href="#play"></use>
            </svg>
        </a> -->
    </div>
</section>
<!-- hero -->
<!-- .content-block -->
<section class="content-block">
    <div class="container">
        <div class="d-flex flex-column justify-content-center">
            <div class="content-title">
                <h2>
                    <small>
                        Our <strong>mission</strong> is to profilerate
                    </small>
                    <br>
                    freedom culture
                </h2>
            </div>
            <div class="content-block-text">
                <h3>FREEDOM CULTURE</h3>
                <span class="name">Noun</span>
                <div class="quote-text">
                    <p>
                        A collective state of being that empowers and encourages all individuals to contribute their
                        unique gifts to the world
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .content-block -->

<!-- content-icon -->
<section class="content-icons">
    <div class="container">
        <h2>WHAT WE STAND FOR</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 p-0">
                <div class="icon-block">
                    <div class="img-block">
                        <img src="<?= asset('images/structural-flourishing.svg') ?>" alt="" width="100%">
                    </div>
                    <h4>
                        Structural<br>Flourishing
                    </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-0">
                <div class="icon-block">
                    <div class="img-block">
                        <img src="<?= asset('images/decentralized-power.svg') ?>" alt="" width="100%">
                    </div>
                    <h4>
                        Decentralized<br>Power
                    </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-0">
                <div class="icon-block">
                    <div class="img-block">
                        <img src="<?= asset('images/tribe-and-community.svg') ?>" alt="" width="100%">
                    </div>
                    <h4>
                        Tribe and<br>Community
                    </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-0">
                <div class="icon-block">
                    <div class="img-block">
                        <img src="<?= asset('images/self-reliance.svg') ?>" alt="" width="100%">
                    </div>
                    <h4>
                        Regenerative<br/>Solutions
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content-icon -->
<!-- content-items -->
<section class="content-items">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="item-text bg-block-primary">
                    <div class="text-left-block">
                        <h2><span>We</span> Unite Influencers</h2>
                        <div class="text-content">

                            <p>
                                Through the curation of invite only mastermind experiences, to the development of decentralized tools for the use of the greater community, we create powerful experiences for our tribe to connect, rally and build trust both physically and digitally.
                            </p>
                        </div>
                        <a href="/mastermind" class="btn btn-outline-primary">
                            Explore Our Mastermind
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="d-lg-block d-none item-img"
                     style="background-image:linear-gradient(to right, #747a9d 0%,  #747a9d 25%,transparent 25%, transparent 100%) , url(<?= asset('images/community.png') ?>)">
                </div>
                <div class="d-lg-none d-block item-img" style="background-image:url(<?= asset('images/community.png') ?>)">
                </div>
            </div>
            <div class="col-lg-6 order-lg-3 order-3">
                <div class="d-lg-block d-none item-img"
                     style="background-image:linear-gradient(to left, #DCAA26 0%, #DCAA26 18%,transparent 18%, transparent 100%), url(<?= asset('images/media.jpg') ?>)">
                </div>
                <div class="d-lg-none d-block item-img"
                     style="background-image: url(<?= asset('images/media.jpg') ?>)">
                </div>
            </div>
            <div class="col-lg-6 order-lg-4 order-4">
                <div class="item-text bg-block-secondary border-secondary-1">
                    <div class="text-right-block">
                        <h2><span>We</span> Tell Stories</h2>
                        <div class="text-content">
                          <p>
                              By leveraging the presence of powerful influencers at our gatherings, we support creatives to tell engaging stories that shift the narrative on social media to be more constructive and thought-provoking as well as providing a decentralized distribution network as a catalyst for shifting culture.
                          </p>
                        </div>
                        <a href="http://bit.ly/FCStorytellers " class="btn btn-outline-secondary">
                          Hire Our Crew
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-5 order-6">
                <div class="item-text bg-block-primary">
                    <div class="text-left-block">
                        <h2><span>We</span> Empower Educators</h2>
                        <div class="text-content">
                            <p>
                                We are committed to spreading the deeper wisdom of our tribe by supporting the launches of online courses and in person mentorships to financially support our individual projects within a collective container.
                            </p>
                        </div>
                        <a href="http://bit.ly/FCBecomeATeacher" class="btn btn-outline-primary">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-6 order-5">
                <div class="d-lg-block d-none item-img"
                     style="background-image:linear-gradient(to right, #747a9d 0%,  #747a9d 8%,transparent 8%, transparent 100%) , url(<?= asset('images/teaching.jpg') ?>)">
                </div>
                <div class="d-lg-none d-block item-img"
                     style="background-image: url(<?= asset('images/teaching.jpg') ?>)">
                </div>
            </div>
            <div class="col-lg-6 order-lg-7 order-7">
                <div class="d-lg-block d-none item-img bg-right"
                     style="background-image:linear-gradient(to left, #DCAA26 0%, #DCAA26 6%,transparent 6%, transparent 100%), url(<?= asset('images/incubator.jpg') ?>)">
                </div>
                <div class="d-lg-none d-block item-img bg-right"
                     style="background-image:url(<?= asset('images/incubator.jpg') ?>)">
                </div>
            </div>
            <div class="col-lg-6 order-lg-8 order-8">
                <div class="item-text bg-block-secondary border-secondary-2">
                    <div class="text-right-block">
                        <h2><span>We</span> Incubate Ideas</h2>
                        <div class="text-content">
                            <p>
                                We fund, mentor and support philanthropreneurs & their teams that align the ROI of Return on Investment with the other ROI - Ripple of Impact. We have carefully crafted a streamlined incubator process that focuses on launching collaborative projects for structural flourishing.
                            </p>
                        </div>
                        <a href="http://bit.ly/FCIncubator" class="btn btn-outline-secondary">
                            Share Your Idea
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content-items -->
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
        <div class="social-network-content">
            <h3>Join the movement</h3>
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
