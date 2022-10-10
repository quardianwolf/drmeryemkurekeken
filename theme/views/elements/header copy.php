<?php
  $headerPhone = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->phone))));
?>

<header class="tm-header3">
  <div class="tm-site-header">
    <div class="tm-header-info-wrap">
      <div class="container tm-header-info">
        <a href="tel:+90<?=$headerPhone;?>"><i class="fa fa-phone"></i><?=$site_data->phone;?></a>
        <a href="mailto:<?=$site_data->phone;?>"><i class="fa fa-envelope"></i><?=$site_data->email;?></a>
      </div>
    </div>
    <div class="tm-header-menu">
      <div class="container tm-header-menu-container">
        <div class="tm-site-branding">
          <a href="<?=site_url();?>" class="tm-logo-link">
            <img src="<?=theme('images/logo.png');?>" alt="" class="tm-logo" />
            <img src="<?=theme('images/logo-mini.png');?>" alt="" class="tm-logo-mini" />
          </a>
        </div>
        <nav class="tm-primary-nav">
          <div class="m-menu-btn"><span></span><span></span><span></span><span></span><span></span></div>
          <?=$menu;?>
        </nav>
      </div><!-- .tm-header-menu-container -->
    </div><!-- .tm-header-menu -->
  </div><!-- .tm-site-header -->
</header>
