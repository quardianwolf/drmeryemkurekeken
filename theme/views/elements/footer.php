<?php
$facebook = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->facebook))));
?>
<?php
$instagram = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->instagram))));
?>
<?php
$twitter = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->twitter))));
?>


<footer id="mad-footer" class="mad-footer footer-4">
  <div class="container">
    <div class="mad-footer-main">
      <div class="row justify-content-between">
        <div class="col-xl-4 col-sm-6">
          <section class="mad-widget">
            <h6 class="mad-widget-title">Hakkımızda</h6>
            <div class="content-element-4">
              <p>
                <?= $about[0]->summary; ?>
              </p>
            </div>
          </section>
        </div>
        <div class="col-xl-1 col-sm-2">
        </div>
        <div class="col-xl-3 col-sm-3">
          <section class="mad-widget">
            <h6 class="mad-widget-title">Menü</h6>
            <ul class="mad-vr-list">
              <li><a href="#about">Hakkımda</a></li>
              <li><a href="#tedavi">Tedaviler</a></li>
              <li><a href="#news">Haberler</a></li>
              <li><a href="#randevu">İletişim</a></li>
            </ul>
          </section>
        </div>
        <div class="col-xl-4 col-sm-12">
          <section class="mad-widget">
            <h6 class="mad-widget-title">Sosyal Medyada Biz!</h6>
            <div class="mad-social-icons size-2">
              <ul>
                <li>
                  <a href="<?= $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="<?= $instagram; ?>"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="<?= $twitter; ?>"><i class="fab fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    </div>
    <div class="mad-footer-bottom justify-content-center">
      <p class="copyrights align-center">Copyright © 2022 <a href="/">DR. MERYEM KÜREK EKEN</a> TÜM HAKLARI SAKLIDIR.</p>
    </div>
  </div>
  
</footer>