<link rel="canonical" href="<?= base_url(); ?>" />
<base href="<?= base_url(); ?>" />

<?php if ($GLOBALS['settings']['compress'] == "offline") : ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Judson:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp" rel="stylesheet" />
  <link rel="stylesheet" href="<?= theme('css/fontawesome-all.min.css'); ?>">
  <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="<?= theme('vendors/owl-carousel/assets/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?= theme('vendors/arcticmodal/jquery.arcticmodal-0.3.css'); ?>">
  <link rel="stylesheet" href="<?= theme('css/fontawesome-all.min.css'); ?>">
  <link rel="stylesheet" href="<?= theme('css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="<?= theme('css/style.css'); ?>">
  <link rel="stylesheet" href="<?= theme('css/animate.css'); ?>">
  <link rel="stylesheet" href="<?= theme('css/animate.min.css'); ?>">
  <link rel="stylesheet" href="<?= theme('css/responsive.css'); ?>">
  <link rel="stylesheet" href="<?= theme('css/magnificpopup.css'); ?>">
  <link rel="stylesheet" href="<?= theme('css/custom.css'); ?>">
  <link rel="stylesheet" href="<?= theme('css/tupbebek.css'); ?>">


  <script src="https://cdn.tailwindcss.com"></script>

<?php else : ?>

  <link rel="stylesheet" href="<?= theme('dist/client_all_styles.min.css'); ?>" />

<?php endif; ?>