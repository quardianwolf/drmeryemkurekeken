<link rel="canonical" href="<?= base_url(); ?>" />
<base href="<?= base_url(); ?>" />

<?php if ($GLOBALS['settings']['compress'] == "offline") : ?>
  
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
  <!--CSS FILES --> 
  <link href="<?= theme('css/style.css'); ?>" rel="stylesheet" />
  <link href="<?= theme('css/responsive'); ?>" rel="stylesheet" />
  <link href="<?= theme('css/jquery.mCustomScrollbar.min.css'); ?>" rel="stylesheet" />
  <link href="<?= theme('css/owl.carousel.min.css'); ?>" rel="stylesheet" />
  <link href="<?= theme('css/owl.theme.default.min.css'); ?>" rel="stylesheet" />


  <link href="<?= theme('css/jquery.fancybox.css'); ?>" rel="stylesheet">
  


  <noscript>
    <link href="<?= theme('css/styleNoJS.css'); ?>" rel="stylesheet" type="text/css" />
  </noscript>
  
<?php else : ?>

  <link rel="stylesheet" href="<?= theme('dist/client_all_styles.min.css'); ?>" />

<?php endif; ?>