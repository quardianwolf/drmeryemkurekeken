</div>
<footer class="main-footer">
  <div class="shape-layer" style="background-image: url(<?= theme('images/shape-3.png'); ?>);"></div>
  <div class="footer-top">
    <div class="container">
      <div class="widget-section">
        <div class="row clearfix">
          <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
            <div class="logo-widget footer-widget">
              <figure class="footer-logo">
                <a href="<?= site_url(); ?>"><img src="<?= theme('images/logo.png'); ?>" alt="" /></a>
              </figure>
              <div class="text">
                <p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads.</p>
                <p>Protect yourself and others from infec- tion by washing your hands or using an</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
            <div class="links-widget service footer-widget">
              <div class="widget-title">
                <h3><?= $urunler->title; ?></h3>
              </div>
              <div class="widget-content">
                <ul class="list clearfix">
                  <?php foreach ($urunler_c as $w) : ?>
                    <li>
                      <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>">
                        <?= $w->title; ?>
                      </a>
                    </li>
                  <?php endforeach; //($menuler_c as $w): */
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
            <div class="links-widget region footer-widget">
              <div class="widget-title">
                <h3><?= translate('hizli_menu', $lang_in_use, 'Hızlı Menü'); ?></h3>
              </div>
              <div class="widget-content">
                <ul class="list clearfix">
                  <?php foreach ($menuler_c as $w) : ?>
                    <li>
                      <a href="<?= site_url($link_p[$lang_in_use . '/' . $w->id_page]); ?>">
                        <?= $w->title; ?>
                      </a>
                    </li>
                  <?php endforeach; //($menuler_c as $w): */
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <?php
          $headerPhone = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->phone))));
          ?>

          <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
            <div class="contact-widget footer-widget">
              <div class="widget-title">
                <h3>Contacts</h3>
              </div>
              <ul class="info-list clearfix">
                <li><i class="fas fa-map-marker-alt"></i><?= $site_data->address; ?></li>
                <li><i class="fas fa-microphone"></i><a href="tel:+90<?= $headerPhone; ?>"><?= $site_data->phone; ?></a></li>
                <li><i class="fas fa-envelope"></i><a href="mailto:<?= $site_data->email; ?>"><?= $site_data->email; ?></a></li>
              </ul>
              <?php /* 
              <ul class="social-links clearfix">
                <li>
                  <a href="index.html"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="index.html"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="index.html"><i class="fab fa-vimeo-v"></i></a>
                </li>
                <li>
                  <a href="index.html"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
              */ ?>1
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="bottom-inner row">
        <div class="col-md-6">
          <div class="copyright">
            <p>© 2020 Her hakkı saklıdır</p>
          </div>
        </div>
        <div class="col-md-6 text-right">
          <ul class="footer-nav">
            <li><a href="index.html">Kullanım Şartları</a></li>
            <li><a href="index.html">Gizlilik Politikası</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>