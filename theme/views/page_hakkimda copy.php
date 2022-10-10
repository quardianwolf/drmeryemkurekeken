<?php $this->load->view($theme.'views/core/open'); ?>
<?php $this->load->view($theme.'views/elements/header'); ?>
<?php $this->load->view($theme.'views/elements/banner'); ?>

<?php $article = $this->publish->get_articles($lang_in_use,$page_data->id_page,null,'0','logical_date','asc','ibs'); ?>
<?php $article = $article[0]; ?>
<?php $article->media = $this->publish->get_media($article->id_article); ?>

<?php $isl = []; ?>
<?php if((isset($article->media)) AND ($article->media == TRUE)): ?>
  <?php foreach ($article->media as $w): ?>
    <?php if ($w->usage == 'isl'): ?>
      <?php array_push($isl, $w); ?>
    <?php endif; ?>
  <?php endforeach;  // foreach ($article->media as $w) ?>
<?php endif; //if((isset($article->media)) AND ($article->media == TRUE)):  ?>

<?php if((isset($article)) AND ($article == TRUE)): ?>
  <section class="about-area pb-160 bg-transparent">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-thumb-wrap">
            <div class="about-thumb-small">
              <img src="<?=theme('images/about-02.jpg');?>" alt="" />
            </div>
            <div class="about-thumb-big">
              <img src="<?=theme('images/about-01.jpg');?>" alt="" />
            </div>
            <div class="about-thumb-shape-big">
              <img src="<?=theme('images/plus-icon-big.png');?>" alt="" />
            </div>
            <div class="about-thumb-shape-small">
              <img src="<?=theme('images/plus-icon.png');?>" alt="" />
            </div>
            <div class="about-thumb-shape-circle">
              <img src="<?=theme('images/circle-shpae.png');?>" alt="" />
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <div class="section-heading">
              <h4 class="sub-title"><?=$article->title;?><h4>
              <h2 class="section-title"><?=$article->subtitle;?></h2>
              <p><?=strip_tags($article->summary);?></p>
            </div>
            <div class="about-list">
              <div class="single-item d-flex align-items-center">
                <div class="icon">
                  <i class="fas fa-check"></i>
                </div>
                <span>
                  <?=translate('hakkimizda_title_1',$lang_in_use,'100+ Uzman Doktor');?>
                </span>
              </div>
              <div class="single-item d-flex align-items-center">
                <div class="icon">
                  <i class="fas fa-check"></i>
                </div>
                <span>
                  <?=translate('hakkimizda_title_2',$lang_in_use,'Anında İşlem ve Randevu');?>
                </span>
              </div>
              <div class="single-item d-flex align-items-center mt-20">
                <div class="icon">
                  <i class="fas fa-check"></i>
                </div>
                <span>
                  <?=translate('hakkimizda_title_3',$lang_in_use,'Bilimsel Dergilerden');?>
                </span>
              </div>
              <div class="single-item d-flex align-items-center mt-20">
                <div class="icon">
                  <i class="fas fa-check"></i>
                </div>
                <span>
                  <?=translate('hakkimizda_title_4',$lang_in_use,'Tıp ve Aletler');?>
               </span>
              </div>
            </div>
            <?php /*
            <div class="about-founder d-flex align-items-center">
              <div class="founder-detals d-flex align-items-center">
                <div class="thumb">
                  <img src="<?=site_url($article->path.$article->file_name);?>" alt="" />
                </div>
                <div class="content">
                  <h4 class="name">
                    Jemilin D. William
                  </h4>
                  <span class="designation">
                    kurucu
                  </span>
                </div>
              </div>
            </div>
            */ ?>
          </div>
        </div>
        <div class="col-md-12">
          <div class="about-text">
            <?=$article->content;?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; //if((isset($article)) AND ($article == TRUE)):  ?>

<?php $this->load->view($theme.'views/elements/footer'); ?>
<?php $this->load->view($theme.'views/core/scripts'); ?>
<?php $this->load->view($theme.'views/core/close'); ?>
