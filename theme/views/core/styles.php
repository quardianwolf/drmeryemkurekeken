<link rel="canonical" href="<?= base_url(); ?>" />
<base href="<?= base_url(); ?>" />

<?php if ($GLOBALS['settings']['compress'] == "offline") : ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="<?= theme('css/plugins/swiper.min.css'); ?>">
  <link rel="stylesheet" href="<?= theme('css/plugins/fancybox.min.css'); ?>">
  <link rel="stylesheet" href="<?= theme('css/style.css'); ?>">


  

  <script src="https://cdn.tailwindcss.com"></script>

<?php else : ?>

  <link rel="stylesheet" href="<?= theme('dist/client_all_styles.min.css'); ?>" />

<?php endif; ?>