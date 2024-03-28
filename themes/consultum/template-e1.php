<?php
/*
 * Template Name: E1
 * Description: _
 */
get_header();

$img_src = get_template_directory_uri() . "/assets/img/";
?>

<section class="banner-e1">
  <h1>E1 Visa Business Plan</h1>
  <div class="desc">Get a compliant with USCIS requirements from</div>
  <div class="btn">GET A FREE CONSULTATION</div>
  <div class="approval-rate">
    <span class="first">
      Our approval rate is
    </span>
    <a href="#" class="last">
      above 95%
    </a>
  </div>
  <div class="breadcrumbs">
    <a href="#" class="home">Home</a>
    <div class="slash">/</div>
    <div class="page">E1 Visa Business Plan</div>
  </div>
</section>
<section class="what-is-e1">
  <div class="custom-containder">
    <h2>
      What is <span>E1 Visa Business Plan?</span>
    </h2>
    <div class="desc">
      The E1 treaty trader visa is an exchange Entry Permit that enables outsiders to go to the U.S. for the
      commencement
      of business using E1 visa. This Entry Permit grants them access to things like administration, products, and
      anything that is a commodity.
      <br><br>
      This nonimmigrant Entry Permit is an ideal choice for entrepreneurs and representatives of the entrepreneurs who
      must venture into global import or product selling.
      <br><br>
      The E1 visa treaty trader permits candidates from a country that has marked a deal of trade and route with the
      U.S.,
      and is aware of the global trade arrangement. On the other hand, the nation ought to be articulated as a trade
      country according to the regulations in the United States.
      <br><br>
      Assuming you have workers, they are likewise qualified for the US E1 treaty trader visa. You should go through the
      rundown of trade nations to see whether your nation is applicable for an E1 settlement trader visa or not. There
      is
      a significant exchange necessary for the Treaty dealer Entry Permit E1. This sum is set for exchange that
      incorporates trading products, banking around the world, interchanges, and things like protection and travel
      industry. You can likewise rely on trading the global administrations. There are no lines for any monetary worth
      or
      the exchanges you make.
    </div>
  </div>
  <div class="pdf-block">
    <div class="custom-containder">
      <div class="pdf-inside">
        <a href="" class="pdf-link"><img class="pdf-img" src="<?= $img_src ?>/PDF.webp" alt="pdf"><span>Illustrative
            sample business plan for E1 Visa Business Plan</span><img class="upload-img"
            src="<?= $img_src ?>/download.webp" alt="upload"></a>
      </div>
    </div>
  </div>
</section>
<section class="why-select-us">
  <div class="custom-containder">
    <div class="top">
      <h2>Why select us?</h2>
      <div class="delivering-box">
        <div class="text">
          Delivering expertise nurtured across a multitude of visas and businesses.
        </div>
        <div class="visas">+2,500 visas</div>
      </div>
    </div>
    <div class="boxes">
    <?php el_why_select_us_box("Built for USCIS", "Each document is presented in the manner preferred by USCIS, based on our vast experience.", $img_src."/wh1.webp") ?>
    <?php el_why_select_us_box("Visa Approval", "We have a long track record of achieving visa approvals. We know what works, and what doesn't.", $img_src."/wh2.webp") ?>
    <?php el_why_select_us_box("RFE's Experience", "Your application got rejected by USCIS. We know exactly how to respond to USCIS.", $img_src."/wh3.webp") ?>
    <?php el_why_select_us_box("Application Focus", "The final business plan is updated in order to be consistent with your visa application.", $img_src."/wh4.webp") ?>
    <?php el_why_select_us_box("Non Generic", "Individuality is key for visa applications. We produce each document from scratch.", $img_src."/wh5.webp") ?>
    <?php el_why_select_us_box("User Friendly", "Easy to read, easy to understand for immigration officers - no matter how intricate your industry is.", $img_src."/wh6.webp") ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>