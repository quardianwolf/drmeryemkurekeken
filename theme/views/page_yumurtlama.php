<?php $this->load->view($theme . 'views/core/open'); ?>
<?php $this->load->view($theme . 'views/elements/header'); ?>
<?php $this->load->view($theme . 'views/elements/banner'); ?>



<section>
    <main id="uygulamalar" class="caro3 ">
        <div class="mad-content">
        <div class="container-fluid">
            <div class="row pt-5 pb-5">
            <main id="main" class="col-xxl-9 col-lg-8">
                <div class="mad-entities with-date type-2">
                <div class="mad-col">
                    <h1 class="mad-entity-title pb-3" >
                        <?= $yumurtlama[0]->title; ?>
                    </h1>
                    <article class="mad-entity">     
                        <div class="mad-entity-media">
                            <img src="<?= site_url($yumurtlama[0]->path . $yumurtlama[0]->file_name); ?>" alt="" style="height: 180px; width: auto;">
                        </div>                 
                    <div class="mad-entity-content">
                        <div class="mad-entity-header">
                        <div class="mad-entity-content-final">
                            <p >
                            <?= $yumurtlama[0]->summary; ?>
                            </p>
                        </div>
                        </div>
                    </div>
                    </article>
                  </div>               
                  </div>
          </main>
          <?php $article_list = $this->publish->get_articles($lang_in_use, $page_data->id_page, null, '0', 'logical_date', 'asc', 'ibs'); ?>
          <?php if ((isset($article_list)) and ($article_list == TRUE)) : ?>

            <aside id="sidebar" class="col-xxl-3 col-lg-4 mad-sidebar">
              <div class="mad-widget">
                <h6 class="mad-widget-title">Hesaplama Araçları</h6>
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
         
</section>
         
          


<?php $this->load->view($theme . 'views/elements/footer'); ?>
<?php $this->load->view($theme . 'views/core/scripts'); ?>
<?php $this->load->view($theme . 'views/core/close'); ?>