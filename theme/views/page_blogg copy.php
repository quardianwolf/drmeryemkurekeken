<?php $this->load->view($theme . 'views/core/open'); ?>
<?php $this->load->view($theme . 'views/elements/header'); ?>
<?php $this->load->view($theme . 'views/elements/banner'); ?>

<?php if ((isset($article)) and ($article == TRUE)) : ?>
  <main id="uygulamalar" class="caro3 ">
    <div class="mad-content">
      <div class="container-fluid">
        <div class="row pt-5 pb-5">
          <main id="main" class="col-xxl-9 col-lg-8">
            <div class="mad-entities with-date type-2">
              <div class="mad-col">
                <h1 class="mad-entity-title pb-3" style="font-size:35px">
                  <?= $article->title; ?>
                </h1>
                <!--================ Entity ================-->
                <article class="mad-entity">
                  <?php if ((isset($article->media)) and ($article->media == TRUE)) : ?>
                    <?php foreach ($article->media as $w) : ?>
                      <div class="mad-entity-media">
                        <img src="<?= site_url($w->path . $w->file_name); ?>" alt="" style="height: 180px; width: auto;">
                      </div>
                    <?php endforeach; ?>
                  <?php endif;  ?>
                  <div class="mad-entity-content">
                    <div class="mad-entity-header">
                      <div class="mad-entity-content-final">
                        <p >
                          <?= $article->content; ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
          </main>

          <?php $article_list = $this->publish->get_articles($lang_in_use, $page_data->id_page, null, '0', 'logical_date', 'asc', 'ibs'); ?>
          <?php if ((isset($article_list)) and ($article_list == TRUE)) : ?>

            <aside id="sidebar" class="col-xxl-3 col-lg-4 mad-sidebar">
              <div class="mad-widget">
                <h6 class="mad-widget-title">Blog Yazıları</h6>
                <ul class="mad-vr-list">
                  <?php $run = 0;
                  foreach ($article_list as $w) : ?>
                    <li>
                      <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>"><?= $w->title; ?></a>
                    </li>
                  <?php endforeach;  ?>
                </ul>
              </div>
            </aside>
          <?php endif; ?>
        </div>
      </div>
    </div>

  <?php else : ?>

    <?php $page_list = $this->publish->get_sub_pages($lang_in_use, $page_data->id_page, '0', 'ibs'); ?>
    <?php if ((isset($page_list)) and ($page_list == TRUE)) : ?>
      <?php if (count($page_list) == 1) : ?>
        <?php header('Location: ' . base_url($link_p[$lang_in_use . '/' . $page_list[0]->id_page])); ?>
      <?php endif; ?>

      <section class="caro2 pt-3 pb-3">
        <div class="container">
          <div class="mad-section mad-section--stretched mad-colorizer--scheme-a">
            <div class="mad-entities type-2">
              <div class="row item-col-3">
                <?php $run = 0;
                foreach ($page_list as $w) : ?>
                  <div class="mad-col">
                    <article class="mad-entity">
                      <div class="mad-entity-media">
                        <a href="<?= site_url($link_p[$lang_in_use . '/' . $w->id_page]); ?>">
                          <div style="background-image: url(<?= site_url($w->path . $w->file_name); ?>);" class="mad-entity-media-image"></div>
                        </a>
                      </div>
                      <div class="mad-entity-content">
                        <div class="mad-entity-header">
                          <h4 class="mad-entity-title mb-2">
                            <a href="<?= site_url($link_p[$lang_in_use . '/' . $w->id_page]); ?>"><?= $w->title; ?></a>
                          </h4>
                          <a href="<?= site_url($link_p[$lang_in_use . '/' . $w->id_page]); ?>" class="mad-text-link">Daha Fazla Bilgi Al</a>
                        </div>
                      </div>
                    </article>
                  </div>
                <?php $run++;
                endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </section>

    <?php else : ?>

      <?php $article_list = $this->publish->get_articles($lang_in_use, $page_data->id_page, null, '0', 'logical_date', 'asc', 'ibs'); ?>
      <?php if ((isset($article_list)) and ($article_list == TRUE)) : ?>
        <section class="caro2 pt-3 pb-3">
          <div class="container">
            <div class="mad-section mad-section--stretched mad-colorizer--scheme-a">
              <div class="mad-entities type-2">
                <div class="row item-col-4">
                  <?php $run = 0;
                  foreach ($article_list as $w) : ?>
                    <div class="mad-col col-md-3">
                      <article class="mad-entity">
                        <div class="mad-entity-media">
                          <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>">
                            <img src="<?= theme('images/shape.png'); ?>"  class="back" > 
                            <img src="<?= site_url($w->path . $w->file_name); ?>" class="front"/>
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
                  endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php endif; ?>
    <?php endif; ?>
  <?php endif; ?>


  <?php $this->load->view($theme . 'views/elements/footer'); ?>
  <?php $this->load->view($theme . 'views/core/scripts'); ?>
  <?php $this->load->view($theme . 'views/core/close'); ?>