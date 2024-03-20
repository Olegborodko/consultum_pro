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
    Your reliable partner in writing a
    <span>business plan</span>
    <?php el_lets_start('Lets start', '#') ?>
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
<section class="how-it-works">
  <div class="custom-containder">
    <div class="title">
      <div class="text">How it works</div>
      <div class="plan">Your business plan in <span>4 easy steps</span></div>
    </div>
    <div class="description">
      <span>ConsultumPro</span> team will work closely with you and provide essential guidance from the beginning to the
      end of the process.
    </div>
    <div class="space"></div>
    <div class="steps-block">
      <div class="step">
        <div class="after-img">
          <img src="<?= $img_src ?>/step_1.svg" alt="step 1">
        </div>
        <div class="desc">
          Fill out and submit our online form
        </div>
      </div>
      <div class="step">
        <div class="after-img">
          <img src="<?= $img_src ?>/step_2.svg" alt="step 2">
        </div>
        <div class="desc">
          Expert will be in touch to discuss the particulars of your business plan.
        </div>
      </div>
      <div class="step">
        <div class="after-img">
          <img src="<?= $img_src ?>/step_3.svg" alt="step 3">
        </div>
        <div class="desc">
          We will issue a draft of your business days within 10-15 days.
        </div>
      </div>
      <div class="step">
        <div class="after-img">
          <img src="<?= $img_src ?>/step_4.svg" alt="step 4">
        </div>
        <div class="desc">
          After carefully considering your clients and making all necessary revisions, we will issue the final version
          of your business plan.
        </div>
      </div>
    </div>
    <div class="bottom-block">
      <?php el_btn("#", "Our online form"); ?>
    </div>
  </div>
</section>
<section class="testimonials">
  <div class="custom-containder">
    <div class="testimonials-part-1">
      <div class="left">
        <h2>Testimonials</h2>
        <div class="desc">
          Our clients are our top priority. We do absolutely everything within our power to exceed our clients’
          expectations
          in every conceivable way.
        </div>
      </div>
      <div class="right">
        <div class="excellent-review">
          <div class="div-2">
            <div class="div-3">Excellent</div>
            <img loading="lazy" src="<?= $img_src ?>/stars.svg" class="img" />
          </div>
          <div class="div-4">
            <div class="div-5">Based on</div>
            <div class="div-6">2,156 reviews</div>
          </div>
          <img loading="lazy" src="<?= $img_src ?>/google.svg" class="img-2" />
        </div>
      </div>
    </div>
    <div class="testimonials-part-2">
      <?php
      for ($x = 0; $x <= 3; $x++) {
        el_testimonials_box();
      }
      ?>
    </div>
  </div>
</section>
<section class="frequently-asked">
  <div class="custom-containder inside-block">
    <div class="desc">
      <h2>Frequently Asked Questions</h2>
      <img src="<?= $img_src ?>/faq.png" alt="faq" />
    </div>
    <div class="faq">
      <?php
      $faq_data = array();
      $faq_data[0]['title'] = 'How do i create an online business plan?';
      $faq_data[0]['text'] = 'Utilize online tools, templates, and guides for crafting a business plan on the web, or enlist the services of our skilled team at ConsultumPro. Our expert business plan writers will leverage their experience, knowledge, and abilities to develop a personalized and professional online business plan tailored specifically for your needs.';

      $faq_data[1]['title'] = 'What is the best format for a business plan?';
      $faq_data[1]['text'] = 'text';

      $faq_data[2]['title'] = 'What is the typical timeframe for creating a comprehensive business plan, and how do you organize the work process?';
      $faq_data[2]['text'] = 'text';

      $faq_data[3]['title'] = 'How can your company assist me in developing an effective business plan for my venture?';
      $faq_data[3]['text'] = 'text';
      ?>

      <div class="accordion" id="accordionExample">
        <?php
        $uniqueId = uniqid();
        $expanded = true;

        foreach ($faq_data as $key => $value) {
          ?>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo<?= $key ?><?= $uniqueId ?>">
              <button class="accordion-button <?php echo $expanded ? '' : 'collapsed' ?>" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseTwo<?= $key ?><?= $uniqueId ?>"
                aria-expanded="<?php echo $expanded ? 'true' : 'false' ?>"
                aria-controls="collapseTwo<?= $key ?><?= $uniqueId ?>">
                <?= $value['title'] ?>
              </button>
            </h2>
            <div id="collapseTwo<?= $key ?><?= $uniqueId ?>"
              class="accordion-collapse collapse <?php echo $expanded ? 'show' : '' ?>"
              aria-labelledby="headingTwo<?= $key ?><?= $uniqueId ?>" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <?= $value['text'] ?>
              </div>
            </div>
          </div>


          <?php
          $expanded = false;
        }
        ?>

      </div>
    </div>
  </div>
</section>
<section class="any-questions">
  <div class="any-questions-block">
    <div class="get-in">
      <h2>Any questions?</h2>
      <div>Get in Touch!</div>
    </div>
    <div class="form">
      <?php echo do_shortcode('[contact-form-7 id="f9a6808" title="home_page"]'); ?>
    </div>
    <div>
</section>
<?php
// get_footer();
?>