<?php partial('head') ?>

<body>
  <?php partial('nav') ?>

  <!-- hero -->
  <section class="hero" style="background-image: url('<?= asset('images/hero-bg.png') ?>')">
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
                <small class="text-lowercase">
                  It’s time for a
                </small>
                <br>
                Decentralized Revolution
            </h1>
            <div class="hero-title-text">
              A revolution for our <strong>freedom</strong>. Are you one of us?
            </div>
        </div>
    </div>
    <div class="play-btn-block">
      <div class="hero-play">
        <svg class="button-label" width="89" height="34">
          <use xlink:href="#watch-online"></use>
        </svg>
        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="hero-play-btn js--play-video">
          <img src="<?= asset('images/play.svg') ?>" alt=""/>
        </a>
      </div>
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
            A collective state of being that empowers and encourages all individuals to contribute their unique gifts to the world
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
    <h2>Our Core Values</h2>
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
            Self<br>reliance
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
            <h2><span>We</span> Create Media</h2>
            <div class="text-content">
              <p>
                We support creatives to make engaging content that changes the narrative on social media to being constructive and thought-provoking.
              </p>
            </div>
            <a href="#" class="btn btn-outline-primary">
              Hire our crew
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-lg-2 order-1">
        <div class="d-lg-block d-none item-img" style="background-image:linear-gradient(to right, #747a9d 0%,  #747a9d 25%,transparent 25%, transparent 100%) , url(<?= asset('images/media.png') ?>)">
        </div>
        <div class="d-lg-none d-block item-img" style="background-image:url(<?= asset('images/media.png') ?>)">
        </div>
      </div>
      <div class="col-lg-6 order-lg-3 order-3">
        <div class="d-lg-block d-none item-img" style="background-image:linear-gradient(to left, #DCAA26 0%, #DCAA26 18%,transparent 18%, transparent 100%), url(<?= asset('images/community.png') ?>)">
        </div>
        <div class="d-lg-none d-block item-img" style="background-image: url(<?= asset('images/community.png') ?>)">
        </div>
      </div>
      <div class="col-lg-6 order-lg-4 order-4">
        <div class="item-text bg-block-secondary border-secondary-1">
          <div class="text-right-block">
            <h2><span>We</span> Unite Influencers</h2>
            <div class="text-content">
              <p>
                We realize the dynamics of the media landscape have shifted the power from one which people are informed and so we assemble powerful networks to change the cultural narrative of our world.
              </p>
            </div>
            <a href="#" class="btn btn-outline-secondary">
              Join our crew
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
                We are committed to spreading wisdomaround decentralized solutions by buildinga powerful mentorship platform availableboth online and off as well as gatherings that promote community, growth and self-reliance.
              </p>
            </div>
            <a href="#" class="btn btn-outline-primary">
              Learn More
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-lg-6 order-5">
        <div class="d-lg-block d-none item-img" style="background-image:linear-gradient(to right, #747a9d 0%,  #747a9d 8%,transparent 8%, transparent 100%) , url(<?= asset('images/teaching.png') ?>)">
        </div>
        <div class="d-lg-none d-block item-img" style="background-image: url(<?= asset('images/teaching.png') ?>)">
        </div>
      </div>
      <div class="col-lg-6 order-lg-7 order-7">
        <div class="d-lg-block d-none item-img bg-right" style="background-image:linear-gradient(to left, #DCAA26 0%, #DCAA26 6%,transparent 6%, transparent 100%), url(<?= asset('images/incubator.png') ?>)">
        </div>
        <div class="d-lg-none d-block item-img bg-right" style="background-image:url(<?= asset('images/incubator.png') ?>)">
        </div>
      </div>
      <div class="col-lg-6 order-lg-8 order-8">
        <div class="item-text bg-block-secondary border-secondary-2">
          <div class="text-right-block">
            <h2><span>We</span> Incubate Ideas</h2>
            <div class="text-content">
              <p>
                We fund, mentor and support entrepreneurs who align the ROI of Return on Investment with the other ROI - Ripple of Impact that focuses on decentralized solutions for structuralflourishing.
              </p>
            </div>
            <a href="#" class="btn btn-outline-secondary">
              Learn more
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
      <small class="text-lowercase">again we ask,</small><br>
      Are you one of us?
    </h2>
  </div> 
</div>
<div class="container">
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

<?php partial('svg') ?>
<script src="<?= asset('scripts/main.js') ?>"></script>
</body>
</html>
