<?php
/*
 * Template Name: Home
 * Description: _
 */
get_header();

$img_src = get_template_directory_uri() . "/assets/img/";
?>

<section class="banner">
  <div class="text">
    <?php el_lets_start() ?>
    Your reliable partner in writing a
    <span>business plan</span>
  </div>
  <div class="buttom">
    <div class="custom-containder buttom-block">
      <?php el_phone_block(); ?>
      <div class="google-r-block">
        <img src="<?= $img_src ?>/google.svg"><br>
        <span>Reviews</span><img class="stars" src="<?= $img_src ?>/stars.svg">
      </div>
      <div class="reviews-block">
        <img class="stars" src="<?= $img_src ?>/stars.svg"><br>
        <span>2,156 reviews</span>
      </div>
      <div class="trustpilot-block">
        <img src="<?= $img_src ?>/trust.svg"><br>
        <span>2,156 reviews</span>
      </div>
      <div class="excellent-block">
        <span>Excellent</span><br>
        <img src="<?= $img_src ?>/green_starts.svg">
      </div>
      <?php el_social(); ?>
    </div>
  </div>
</section>
<section class="five-section">
  <div class="custom-containder five-block">
    <div class="five-block-left">
      <div class="div-2">Excellent</div>
      <img loading="lazy" src="<?= $img_src ?>/green_starts.svg" class="img" />
      <div class="div-3">
        <div class="div-4">Based on</div>
        <div class="div-5">2,156 reviews</div>
      </div>
      <img loading="lazy" src="<?= $img_src ?>/trust_black.svg" class="img-2" />
    </div>
    <?php el_box_review(
      "Professional and Timely Service",
      "The company impresses with its high efficiency and professionalism. They assisted me with writing a business plan and visa processing faster than I expected. I highly recommend their services",
      "Darrell Steward",
      "17 hour ago"
    );
    ?>
    <?php el_box_review(
      "Professional and Timely Service",
      "The company impresses with its high efficiency and professionalism. They assisted me with writing a business plan and visa processing faster than I expected. I highly recommend their services",
      "Darrell Steward",
      "17 hour ago"
    );
    ?>
    <?php el_box_review(
      "Professional and Timely Service",
      "The company impresses with its high efficiency and professionalism. They assisted me with writing a business plan and visa processing faster than I expected. I highly recommend their services",
      "Darrell Steward",
      "17 hour ago"
    );
    ?>
    <?php el_box_review(
      "Professional and Timely Service",
      "The company impresses with its high efficiency and professionalism. They assisted me with writing a business plan and visa processing faster than I expected. I highly recommend their services",
      "Darrell Steward",
      "17 hour ago"
    );
    ?>
    <?php el_box_review(
      "Professional and Timely Service",
      "The company impresses with its high efficiency and professionalism. They assisted me with writing a business plan and visa processing faster than I expected. I highly recommend their services",
      "Darrell Steward",
      "17 hour ago"
    );
    ?>
  </div>
</section>
<section class="business-plans">
  <div class="custom-containder business-plans-block">
    <h2>Business plans by <span>Visa Types</span></h2>
    <div class="box">
      <div class="box-plan">
        <a href="#">EB-1 Business Plan</a>
        <a href="#">E2 Treaty Investor Visa Business Plan</a>
        <a href="#">EB-2 NIW Business Plan</a>
      </div>
      <div class="box-plan">
        <a href="#">E1 Treaty Trader Visa Business Plan</a>
        <a href="#">L1 Visa Business Plan</a>
        <a href="#">EB-5 Business Plan</a>
      </div>
    </div>
  </div>
</section>
<section class="industry-plans">
  <div class="custom-containder">
    <h2>Our Business Plans by <span>Industry</span></h2>
    <div class="industry-plans-block">
      <?php el_industry_box(
        "Cannabis business plan",
        "Our Cannabis business plan model covers all aspects needed for fundraising and getting a license.",
        "#",
        "image_industry1.png"
      );
      ?>
      <?php el_industry_box(
        "Ecommerce Business Plan",
        "Supports in developing an operationally efficient ecommerce business.",
        "#",
        "image_industry2.png"
      );
      ?>
      <?php el_industry_box(
        "Mobile App Business Plan",
        "Suitable for new mobile app projects and covers preparing operational guidelines.",
        "#",
        "image_industry3.png"
      );
      ?>
      <?php el_industry_box(
        "Real Estate Business Plan",
        "Suitable for real estate projects, private equity funds, property management companies, real estate developers and agents.",
        "#",
        "image_industry4.png"
      );
      ?>
      <?php el_industry_box(
        "Online Boutique Business Plan",
        "Suitable for the online fashion industry.",
        "#",
        "image_industry5.png"
      );
      ?>
      <?php el_industry_box(
        "Restaurant Business Plan",
        "Suitable for restaurant/bar/cafe business concepts.",
        "#",
        "image_industry6.png"
      );
      ?>
      <?php el_industry_box(
        "Food Delivery Business Plan",
        "Suitable for food delivery or general delivery concepts.",
        "#",
        "image_industry7.png"
      );
      ?>
      <?php el_industry_box(
        "Daycare Business Plan",
        "Suitable for day care and caregiver type businesses.",
        "#",
        "image_industry8.png"
      );
      ?>
    </div>
  </div>
</section>
<section class="immigration-busines">
  <h2>
    <div>Immigration business plan <span>sample</span></div>
  </h2>
  <div class="immigration-block">
    <a class="i-box g-arrow-left-top-hover">
      <div class="g-arrow-left-top"></div>
      <div class="title">
        <div>
          EB-2 visa
        </div>
      </div>
    </a>
    <a class="i-box i-box-small g-arrow-left-top-hover">
    <div class="g-arrow-left-top"></div>
      <div class="title">
        <div>
          E2 visa
        </div>
      </div>
    </a>
    <a class="i-box g-arrow-left-top-hover">
    <div class="g-arrow-left-top"></div>
      <div class="title">
        <div>
          E2 visa
        </div>
      </div>
    </a>
  </div>
</section>

<?php
get_footer();
?>