<?php $this->load->view($theme.'views/core/open'); ?>
<?php $this->load->view($theme.'views/elements/header'); ?>
<?php $this->load->view($theme.'views/elements/banner'); ?>


<?php if ((isset($article)) and ($article == TRUE)) : ?>

<main id="uygulamalar" class="caro3">
<div class="mad-content mad-img-section no-pb mad-section--stretched mad-colorizer--scheme-color-4">
      <div class="container">
        <div class="mad-entities with-date type-2 content-element-12">
          <!--================ Entity ================-->
          <article class="mad-entity mad-entity-single content-element-8">
          <?php if ((isset($article->media)) and ($article->media == TRUE)) : ?>
          <?php foreach ($article->media as $w) : ?>
            <div class="mad-entity-media">
              <a href="#"><img src="<?= site_url($w->path . $w->file_name); ?>" alt=""></a>
            </div>
            <div class="mad-entity-content">
              <div class="mad-entity-header">                 
                <div class="mad-dropcap style-2 color-2 mad-text-medium content-element-4">
                  <h2 class="entry-title"><?= $article->title; ?></h2>
                  <p>
                  <?= $article->content; ?>
                  </p>
                </div>        
              </div>              
              </div>
              <?php endforeach;  // foreach ($article->media as $w) ?>
             <?php endif; //if((isset($article->media)) AND ($article->media == TRUE)):?>
            </div>
          </article>         
        </div>        
      </div>
    </div>
</main>

<?php else : ?>

<?php $page_list = $this->publish->get_sub_pages($lang_in_use, $page_data->id_page, '0', 'ibs'); ?>
<?php if ((isset($page_list)) and ($page_list == TRUE)) : ?>

  <?php if (count($page_list) == 1) : ?>
    <?php header('Location: ' . base_url($link_p[$lang_in_use . '/' . $page_list[0]->id_page])); ?>
  <?php endif; ?>

  <section class="caro">
    <div class="container mad-img-section no-pb mad-section--stretched mad-colorizer--scheme-color-4 ">
      <div class="row gutter-xl">
      <div class="mad-colorizer-bg-color">
        <span class="mad-img-texture12 bg-move"></span>
      </div>
        <?php foreach ($page_list as $w) : ?>
          <div class="col-md-4 ">
            <article class="media media-project m-b-50 mad-section--stretched mad-colorizer--scheme-a">
              <figure class="media__img">
                <img src="<?= site_url($w->path . $w->file_name); ?>" alt="<?= $w->title; ?>" />
              </figure>
              <div class="bg-overlay"></div>
              <span class="line"></span>
              <span class="line line--bottom"></span>
              <div class="media__body">
                <h3 class="title">
                  <a href="<?= site_url($link_p[$lang_in_use . '/' . $w->id_page]); ?>"><?= $w->title; ?></a>
                </h3>
                <div class="address"><?= $w->subtitle; ?></div>
              </div>
            </article>
          </div>
        <?php endforeach;  // foreach ($page_list as $w) 
        ?>
      </div>
    </div>
  </section>
  
<?php else : ?>

  <?php $article_list = $this->publish->get_articles($lang_in_use, $page_data->id_page, null, '0', 'logical_date', 'asc', 'ibs'); ?>
  <?php if ((isset($article_list)) and ($article_list == TRUE)) : ?>
    <section class="section mt-5">
      <div class="container ">
        <div class="section-heading text-center">
          <h4 class="sub-title"><?= $page_data->subtitle; ?><h4>
              <h2 class="section-title" style=" font-size: 45px; "><?= $page_data->title; ?></h2>
        </div>
      </div>
    </section>
    <section class="caro2">
      <div class="container">
        <div class="mad-section mad-img-section no-pb mad-section--stretched mad-colorizer--scheme-color-4">
        <div class="row gutter-xl">
          <?php foreach ($article_list as $w) : ?>
            <div class="col-md-4">
              <div class="box">
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <img src="<?= site_url($w->path . $w->file_name); ?>" alt="">
                  </div><!-- .col-md-6 -->
                  <div class="col-md-6">
                    <div class="inner">
                      <h3><?= $w->title; ?></h3>
                      <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>" class="link-to">
                        <?= translate('devamini_oku', $lang_in_use, 'Devamını Oku'); ?>
                      </a>
                    </div><!-- .inner -->
                  </div><!-- .col-md-6 -->
                </div><!-- .row -->
              </div>
            </div>
          <?php endforeach;  ?>
        </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>
<?php endif; ?>


<?php $this->load->view($theme.'views/elements/footer'); ?>
<?php $this->load->view($theme.'views/core/scripts'); ?>
<?php $this->load->view($theme.'views/core/close'); ?>