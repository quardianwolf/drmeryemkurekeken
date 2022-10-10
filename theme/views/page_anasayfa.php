<?php $this->load->view($theme . 'views/core/open'); ?>
<?php $this->load->view($theme . 'views/elements/header'); ?>


<section id="hero" class="hero">
  <?php if ((isset($slider)) and ($slider == TRUE)) : ?>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php $run = 0;
        foreach ($slider as $w) : ?>
          <div class="swiper-slide">
            <div class="slide-item" style="background-image: url('<?= site_url($w->path . $w->file_name); ?>')">
              <div class="content">
                <span class="title"><?php echo $w->title; ?></span>
                <p><?php echo $w->description; ?></p>
                <a href="<?php echo $w->button_link; ?>"><?php echo $w->button; ?></a>
              </div>
            </div>
          </div>
        <?php $run++;
        endforeach; ?>
      </div>
      <div class="swiper-button-next "></div>
      <div class="swiper-button-prev "></div>
    </div>
  <?php endif; ?>
</section>

<section id="about" class="about">
  <div class="mad-section mad-img-section no-pb mad-section--stretched mad-colorizer--scheme-color-4">
    <div class="mad-texture-holder">
      <span class="mad-img-texture11 bg-move" style="transform: translate(20px, -10px) scale(1) opacity=0.1;"></span>
    </div>
    <div class="mad-colorizer-bg-color" style="left: -64px; right: -64px;">
      <span class="mad-img-texture17 bg-move" style="transform: translate(20px, -10px) scale(1);"></span>
      <span class="mad-img-texture19 bg-move2" style="transform: translate(-20px, 10px) scale(1);"></span>
    </div>
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-xxl-6 col-xl-6">
          <div class="mad-img-container">
            <div class="mad-img"><img src="<?= site_url($about[0]->path . $about[0]->file_name); ?>" alt="" style="
              margin-left: auto;
              display: block;
            "> </div>
          </div>
        </div>
        <div class="col-xxl-5 col-xl-6">
          <div class="row justify-content-start align-items-center h-100">
            <div class="col-xl-10">
              <div class="mad-img-content mobile-top">
                <div class="mad-pre-title"><?= $about[0]->subtitle; ?></div>
                <h2 class="mad-title">
                <?= $about[0]->title; ?>
                </h2>
                <div class="mad-text-medium content-element-6">
                  <p>
                    <?= $about[0]->summary; ?>
                  </p>
                </div>
                <a href="https://drmeryemkurekeken.com/tr/dr-meryem-kurek-eken" class="btn style-2 btn-big">Daha Fazla Bilgi Al</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="tedavi" class="tedavi">
  <?php if ((isset($uygulamalar)) and ($uygulamalar == TRUE)) : ?>
    <div class="mad-section mad-section--stretched mad-colorizer--scheme-a">
      <!-- <div class="mad-colorizer-bg-color">
        <span class="mad-img-texture18 bg-move"></span>
      </div> -->
      <div class="container">
        <div class="mad-title-wrap">
          <h2 class="mad-title">Tedavilerimiz</h2>
        </div>
        <div class="mad-entities type-2">
          <div class="row">
            <?php $run = 0;
            foreach ($uygulamalar as $w) : ?>
              <div class="mad-col col-md-3">
                <article class="mad-entity">
                  <div class="mad-entity-media">
                    <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>">
                      <img src="<?= theme('images/shape.png'); ?>" class="back">
                      <img src="<?= site_url($w->path . $w->file_name); ?>" class="front" />
                    </a>
                  </div>
                  <div class="mad-entity-content">
                    <div class="mad-entity-header">
                      <h4 class="mad-entity-title mb-2">
                        <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>"><?= $w->title; ?></a>
                      </h4>
                      <div class="mad-entity-summary">
                        <?= $w->content; ?>
                      </div>
                      <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>" class="mad-text-link">Daha Fazla Bilgi Al</a>
                    </div>
                  </div>
                </article>
              </div>
            <?php $run++;
              if (
                $run == 8
              ) break;
            endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>


<section id="testimonial" class="testimonial">
  <div class="mad-section mad-section--stretched mad-colorizer--scheme-color-3 with-texture9">
  <button type="button"  onclick="document.getElementById('yorum').style.height = '600px';" class="testimonials-continue">Yorumun Devamını Oku</button> 
    <div class="mad-colorizer-bg-color" style="left: -64px; right: -64px;"></div>
    <div class="row justify-content-center">
      <div class="col-xl-8">
        <!--================ Testimonials ================-->
        <div class="mad-testimonials style-2 align-center with-quotes-color-2">
          <div class="mad-grid mad-grid--cols-2 owl-carousel no-nav dots-center dots-color-3">
            <!-- owl item -->

            <?php $run = 0;
            foreach ($yorumlar as $w) : ?>                     
              <div class="mad-grid-item">         
                <div class="mad-testimonial" >
                  <div  id="yorum" style="width: 100%; height: 200px;" class="mad-testimonial-info">
                  <div class="mad-author">
                    <div class="mad-author-info">
                      <span id="yazar" class="mad-author-name"><?= $w->title; ?></span>
                    </div>                   
                  </div>
                    <blockquote >
                      <p class="">
                        <?= $w->summary; ?>
                      </p>
                    </blockquote>
                  </div>
                </div>
              </div>
            <?php $run++;
              if (
                $run == 5
              ) break;
            endforeach; ?>
          </div>
        </div>
      </div>
    </div>
</section>

<section id="hizmet" class="hizmetanasayfa">
  <div class="container">
    <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 lg:px-8">
      <div class="rounded-2xl bg-gray-50 px-6 py-16 sm:p-16">
        <div class="mx-auto max-w-xl lg:max-w-none">
          <div class="text-center">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Hesaplama Araçları</h2>
          </div>
          <div class="mx-auto mt-12 grid max-w-sm grid-cols-1 gap-y-10 gap-x-8 sm:max-w-none lg:grid-cols-3">
            <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
              <div class="sm:flex-shrink-0">
                <div class="flow-root">
                  <img class="mx-auto h-32 w-auto" src="/public/theme/assets/images/gebelik.png" alt="">
                </div>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-6 lg:mt-6 lg:ml-0">
                <a href="http://drmeryemkurekeken.com/tr/hesaplamalar/gebelik-hesaplama">
                <h3 class="text-sm font-medium text-gray-900">Gebelik Hesaplama</h3>
                </a>
                <p class="mt-2 text-sm text-gray-500">Ne Zaman Doğum Yapacağını Hesaplamak İster Misin?</p>
              </div>
            </div>

            <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
              <div class="sm:flex-shrink-0">
                <div class="flow-root">
                  <img class="mx-auto h-48 w-auto" src="/public/theme/assets/images/yuzde.png" alt="">
                </div>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-6 lg:mt-6 lg:ml-0">
                <a href="http://drmeryemkurekeken.com/tr/hesaplamalar/tup-bebek-basari-hesaplama">
                <h3 class="text-sm font-medium text-gray-900">Tüp Bebek Başarı Hesaplama</h3>
                </a>
                <p class="mt-2 text-sm text-gray-500">Tüp Bebek Tedaviziniz Ne Kadar Başarılı Olabilir?</p>
              </div>
            </div>

            <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
              <div class="sm:flex-shrink-0">
                <div class="flow-root">
                  <img class="mx-auto h-32 w-auto" src="/public/theme/assets/images/yumurtlama.png" alt="">
                </div>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-6 lg:mt-6 lg:ml-0">
                <a href="http://drmeryemkurekeken.com/tr/hesaplamalar/yumurtlama-hesaplama">
                <h3 class="text-sm font-medium text-gray-900">Yumurtlama Hesaplama</h3>
                </a>
                <p class="mt-2 text-sm text-gray-500">Çocuk Yapmak İçin En Uygun Zamanı Bulmak İster Misin?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="news" class="haberler">
  <?php if ((isset($haberler)) and ($haberler == TRUE)) : ?>
    <div class="container">
      <div class="mad-section">
        <div class="mad-title-wrap">
          <div class="mad-title-row">
            <div class="mad-title-wrap mb-0">
              <h2 class="mad-title mb-0">Blog</h2>
            </div>
          </div>
        </div>
        <div class="mad-entities type-2 item-col-3">
          <?php $run = 0;
          foreach ($haberler as $w) : ?>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>">
                    <div style="background-image: url(<?= site_url($w->path . $w->file_name); ?>);" class="mad-entity-media-image"></div>
                  </a>
                </div>
                <div class="mad-entity-content">
                  <div class="mad-entity-header">
                    <h4 class="mad-entity-title" style="margin-bottom: 0">
                      <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>"><?= $w->title; ?></a>
                    </h4>
                    <p style="margin-bottom: 10px; font-size: 15px"><?= $w->subtitle; ?></p>
                    <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>" class="mad-text-link"> Devamını Oku </a>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
          <?php $run++;
          endforeach; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>


<?php $this->load->view($theme . 'views/elements/footer'); ?>
<?php $this->load->view($theme . 'views/core/scripts'); ?>
<?php $this->load->view($theme . 'views/core/close'); ?>