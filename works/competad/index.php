<?php
session_start();
require 'config/db.php';
// Session ahndler
include 'session_handler.php';
$head_title = "Blaise-Scientific Trading";
?>

<!-- Head -->
<?php include_once 'layout/head.php'; ?>

<!-- Body -->
<body>

  <!--========== HEADER ==========-->
  <?php include_once 'layout/navigation.php' ?>
  <!--========== END HEADER ==========-->

  <!--========== SWIPER SLIDER ==========-->
  <div class="s-swiper js__swiper-slider">
    <!-- Swiper Wrapper -->
    <div class="swiper-wrapper">
      <div class="s-promo-block-v4 g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/banner_water_testing_renal_dialysis.jpg');">
        <div class="container g-ver-center--xs">
          <div class="row">
            <div class="col-md-7">
              <div class="g-margin-b-50--xs">
                <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-60--md g-color--white">Sensor Technology</h1>
                <p class="g-font-size-18--xs g-font-size-22--sm g-color--white-opacity">Palintest’s sensor technology is a unique and simple method for disinfection control and heavy metals determination.</p>
              </div>
              <a href="index.php" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="s-promo-block-v4 g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/lead-newscard-01-compressed.jpg');">
        <div class="container g-text-right--xs g-ver-center--xs">
          <div class="row">
            <div class="col-md-7 col-md-offset-5">
              <div class="g-margin-b-50--xs">
                <h2 class="g-font-size-32--xs g-font-size-45--sm g-font-size-55--md g-color--white">Electrochemical Meters</h2>
                <p class="g-font-size-18--xs g-font-size-22--sm g-color--white-opacity">Electrochemistry is the study of the relationship between electricity and chemical reactions.</p>
              </div>
              <a href="index.php" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="s-promo-block-v4 g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/Kemio-insert-sensor-webres.jpg');">
        <div class="container g-text-right--xs g-ver-center--xs">
          <div class="row">
            <div class="col-md-7 col-md-offset-5">
              <div class="g-margin-b-50--xs">
                <h2 class="g-font-size-32--xs g-font-size-45--sm g-font-size-55--md g-color--white">Photometry & Nephelometry</h2>
                <p class="g-font-size-18--xs g-font-size-22--sm g-color--white-opacity">Photometric or colorimetric analysis is an incredibly powerful yet simple-to-use technique.</p>
              </div>
              <a href="index.php" class="text-uppercase s-btn s-btn--md  g-radius--50 g-padding-x-50--xs">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Swiper Wrapper -->

    <!-- Pagination -->
    <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--bc s-swiper__pagination-v1--white js__swiper-pagination"></div>
  </div>
  <!--========== END SWIPER SLIDER ==========-->

  <!--========== PAGE CONTENT ==========-->

  <!-- About -->
  <div class="g-promo-section">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
      <div class="g-text-center--xs g-margin-b-100--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
          Welcome to Blaise-Scientific Technologies</p>
        <h2 class="g-font-size-32--xs g-font-size-36--md">BST INC. improves lives through the design, implementation and
          management of clean, smart, sustainable technology.</h2>
      </div>
      <div class="row">
        <div class="col-md-6 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
          <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
            ABOUT</p>
          <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
            <h2 class="g-font-size-32--xs g-font-size-36--md">Blaise-Scientific <span class="text-nowrap">Technologies
                Inc.</span></h2>
          </div>
        </div>
        <div class="col-md-6">
          <p class="g-font-size-18--xs">We are a local company engaged in the distribution of laboratory equipment and
            supplies primarily for Water and Environmental Analysis. Exclusive Distributor of Palintest, Ltd. in the
            Philippines.</p>
          <br>
          <a href="#" class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs">Read
            More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End About -->

  <!-- Product Categories -->
  <?php require_once('layout/section_product_category.php') ?>
  <!-- End Product Categories -->

  <!-- Features -->
  <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="row g-margin-b-60--xs g-margin-b-70--md">
      <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
        <div class="clearfix">
          <div class="g-media g-width-30--xs">
            <div class="wow fadeInDown animated" data-wow-duration=".3" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
              <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
            </div>
          </div>
          <div class="g-media__body g-padding-x-20--xs">
            <h3 class="g-font-size-18--xs">Lorem, ipsum dolor.</h3>
            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
        <div class="clearfix">
          <div class="g-media g-width-30--xs">
            <div class="wow fadeInDown animated" data-wow-duration=".3" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
              <i class="g-font-size-28--xs g-color--primary ti-settings"></i>
            </div>
          </div>
          <div class="g-media__body g-padding-x-20--xs">
            <h3 class="g-font-size-18--xs">Lorem ipsum dolor sit.</h3>
            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="clearfix">
          <div class="g-media g-width-30--xs">
            <div class="wow fadeInDown animated" data-wow-duration=".3" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
              <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i>
            </div>
          </div>
          <div class="g-media__body g-padding-x-20--xs">
            <h3 class="g-font-size-18--xs">Lorem, ipsum.</h3>
            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- // end row  -->
  </div>
  <!-- End Features -->

  <!-- Clients -->
  <div class="g-bg-color--sky-light">
    <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
      <!-- Swiper Clients -->
      <div class="s-swiper js__swiper-clients">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
              <img class="s-clients-v1" src="img/clients/01-dark.png" alt="Clients Logo">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
              <img class="s-clients-v1" src="img/clients/02-dark.png" alt="Clients Logo">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
              <img class="s-clients-v1" src="img/clients/03-dark.png" alt="Clients Logo">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
              <img class="s-clients-v1" src="img/clients/04-dark.png" alt="Clients Logo">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
              <img class="s-clients-v1" src="img/clients/05-dark.png" alt="Clients Logo">
            </div>
          </div>
        </div>
      </div>
      <!-- End Swiper Clients -->
    </div>
  </div>
  <!-- End Clients -->


  <!-- Testimonials -->
  <div class="js__parallax-window" style="background: url(img/1920x1080/04.jpg) 50% 0 no-repeat fixed;">
    <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
      <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">
        Testimonials</p>
      <div class="s-swiper js__swiper-testimonials">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper g-margin-b-50--xs">
          <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
            <div class="g-padding-x-20--xs g-padding-x-50--lg">
              <div class="g-margin-b-40--xs">
                <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" I have purchased many great
                    templates over the years but this product and this company have taken it to the next level.
                    Exceptional customizability. "</i></p>
              </div>
              <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs">
              </div>
              <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Jake
                Richardson / Google</h4>
            </div>
          </div>
          <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
            <div class="g-padding-x-20--xs g-padding-x-50--lg">
              <div class="g-margin-b-40--xs">
                <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" I have purchased many great
                    templates over the years but this product and this company have taken it to the next level.
                    Exceptional customizability. "</i></p>
              </div>
              <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs">
              </div>
              <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Jake
                Richardson / Google</h4>
            </div>
          </div>
          <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
            <div class="g-padding-x-20--xs g-padding-x-50--lg">
              <div class="g-margin-b-40--xs">
                <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" I have purchased many great
                    templates over the years but this product and this company have taken it to the next level.
                    Exceptional customizability. "</i></p>
              </div>
              <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs">
              </div>
              <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Jake
                Richardson / Google</h4>
            </div>
          </div>
        </div>
        <!-- End Swipper Wrapper -->

        <!-- Arrows -->
        <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
        <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
        <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
        <!-- End Arrows -->
      </div>
    </div>
  </div>
  <!-- End Testimonials -->

  <!-- Feedback Form -->
  <div id="js__scroll-to-appointment" class="g-bg-color--sky-light g-padding-y-80--xs g-padding-y-125--sm">
    <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3">
      <div class="row">
        <!-- Form -->
        <div class="col-md-8 js__form-eqaul-height-v1" style="height: 598px;">
          <div class="g-padding-x-40--xs g-padding-y-50--xs">
            <h2 class="g-font-size-24--xs g-color--primary g-margin-b-50--xs">Make an Appointment</h2>
            <form>
              <div class="row g-margin-b-30--xs g-margin-b-50--md">
                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                  <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Full Name">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Phone Number">
                </div>
              </div>
              <div class="row g-margin-b-50--xs g-margin-b-50--md">
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                  <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Department">
                </div>
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                  <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Doctor">
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* DD/MM/YY">
                </div>
              </div>
              <div class="g-margin-b-50--xs">
                <textarea class="form-control s-form-v4__input g-padding-l-0--xs" rows="5" placeholder="* What ails you?"></textarea>
              </div>
              <div class="g-text-center--xs">
                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- End Form -->

        <!-- Contacts -->
        <div class="col-md-4 g-bg-color--primary-ltr js__form-eqaul-height-v1" style="height: 598px;">
          <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs">
            <h2 class="g-font-size-24--xs g-color--white g-margin-b-50--xs">Contact Us</h2>
            <ul class="list-unstyled g-margin-b-70--xs">
              <li class="clearfix g-color--white g-margin-b-40--xs">
                <div class="g-media g-width-40--xs g-margin-t-5--xs">
                  <i class="g-font-size-20--xs g-color--white-opacity-light ti-location-pin"></i>
                </div>
                <div class="g-media__body">
                  277 Bedford Avenue, <br> Brooklyn, NY 11211, New York
                </div>
              </li>
              <li class="clearfix g-color--white g-margin-b-40--xs">
                <div class="g-media g-width-40--xs g-margin-t-5--xs">
                  <i class="g-font-size-20--xs g-color--white-opacity-light ti-headphone-alt"></i>
                </div>
                <div class="g-media__body">
                  + (1) 001 389 3720
                </div>
              </li>
              <li class="clearfix g-color--white g-margin-b-40--xs">
                <div class="g-media g-width-40--xs g-margin-t-5--xs">
                  <i class="g-font-size-20--xs g-color--white-opacity-light ti-email"></i>
                </div>
                <div class="g-media__body">
                  support@keenthemes.com
                </div>
              </li>
            </ul>
            <ul class="list-inline g-ul-li-lr-15--xs">
              <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-facebook"></i></a></li>
              <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-twitter"></i></a></li>
              <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-instagram"></i></a></li>
            </ul>
            <i class="g-font-size-150--xs g-color--white-opacity-lightest ti-comments" style="position: absolute; bottom: -1.25rem; right: -1.25rem;"></i>
          </div>
        </div>
        <!-- End Contacts -->
      </div>
    </div>
  </div>
  <!-- End Feedback Form -->

  <!-- Google Map -->
  <!-- <section class="s-google-map">
    <div id="js__google-container" class="s-google-container g-height-400--xs"></div>
  </section> -->
  <!-- End Google Map -->
  <!--========== END PAGE CONTENT ==========-->

  <?php include_once 'layout/footer.php' ?>
  <?php include_once 'layout/scripts.php' ?>

</body>
<!-- End Body -->

</html>