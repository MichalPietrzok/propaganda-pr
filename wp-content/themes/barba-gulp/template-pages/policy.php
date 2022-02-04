<?php /* Template Name: Policy */
get_header();
?>

<div class="main-info" data-barba="container" data-barba-namespace="policy">
  <section class="policy">
    <div class="policy__container container">
      <div class="policy__wrap row">
        <div class="policy__content col-12 no-gutters">
          <h1 class="policy__title"><?= get_the_title() ?></h1>
          <div class="policy__info"><?= get_the_content() ?></div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>