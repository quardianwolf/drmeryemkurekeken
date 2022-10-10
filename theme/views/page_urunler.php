<?php $this->load->view($theme.'views/core/open'); ?>
<?php $this->load->view($theme.'views/elements/header'); ?>
<?php $this->load->view($theme.'views/elements/banner'); ?>

<?php if((isset($article)) AND ($article == TRUE)): ?>

  <main id="main">
    <div class="container">
      <article class="product-page">
        <h2 class="entry-title"><?=$article->title;?></h2>
        <?php if((isset($article->media)) AND ($article->media == TRUE)): ?>
          <?php foreach ($article->media as $w): ?>
            <div class="product-image">
              <img class="wp-post-image" src="<?=site_url($w->path.$w->file_name);?>" alt="<?=$w->caption;?>">
              <span><?=$w->caption;?></span>
            </div><!-- .image -->
          <?php endforeach;  // foreach ($article->media as $w) ?>
        <?php endif; //if((isset($article->media)) AND ($article->media == TRUE)):  ?>
        <div class="row">
          <div class="col-lg-12">
            <div class="entry-content">
              <?=$article->content;?>
            </div>
          </div>
        </div>
      </article>
    </div>
  </main>

<?php else: ?>

  <?php $page_list = $this->publish->get_sub_pages($lang_in_use,$page_data->id_page,'0','ibs'); ?>
  <?php if((isset($page_list)) AND ($page_list == TRUE)): ?>

    <?php if(count($page_list) == 1 ):?>
      <?php header('Location: ' . base_url($link_p[$lang_in_use.'/'.$page_list[0]->id_page])); ?>
    <?php endif; //if(count($page_list) == 1 ):?>

    <section class="section p-t-40 p-b-120">
      <div class="container">
        <div class="row gutter-xl">
          <?php foreach ($page_list as $w): ?>
            <div class="col-md-6">
              <article class="media media-project m-b-50">
                <figure class="media__img">
                  <img src="<?=site_url($w->path.$w->file_name);?>" alt="<?=$w->title;?>" />
                </figure>
                <div class="bg-overlay"></div>
                <span class="line"></span>
                <span class="line line--bottom"></span>
                <div class="media__body">
                  <h3 class="title">
                    <a href="<?=site_url($link_p[$lang_in_use.'/'.$w->id_page]);?>"><?=$w->title;?></a>
                  </h3>
                  <div class="address"><?=$w->subtitle;?></div>
                </div>
              </article>
            </div>
          <?php endforeach;  // foreach ($page_list as $w) ?>
        </div>
      </div>
    </section>
  <?php else: ?>

    <?php $article_list = $this->publish->get_articles($lang_in_use,$page_data->id_page,null,'0','logical_date','asc','ibs'); ?>
    <?php if((isset($article_list)) AND ($article_list == TRUE)): ?>
      <section class="section mt-5">
        <div class="container">
          <div class="section-heading text-center">
            <h4 class="sub-title"><?=$page_data->subtitle;?><h4>
            <h2 class="section-title" style=" font-size: 45px; "><?=$page_data->title;?></h2>
          </div>
        </div>
      </section>
      <section class="section p-t-40 p-b-120">
        <div class="container">
          <div class="row gutter-xl">
            <?php foreach ($article_list as $w): ?>
              <div class="col-md-6">
                <div class="box">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <img src="<?=site_url($w->path.$w->file_name);?>" alt="">
                    </div><!-- .col-md-6 -->
                    <div class="col-md-6">
                      <div class="inner">
                        <h3><?=$w->title;?></h3>
                        <a href="<?=site_url($link_a[$lang_in_use.'/'.$w->id_page.'/'.$w->id_article]);?>" class="link-to">
                          <?=translate('devamini_oku',$lang_in_use,'Devamını Oku');?>
                        </a>
                      </div><!-- .inner -->
                    </div><!-- .col-md-6 -->
                  </div><!-- .row -->
                </div>
              </div>
            <?php endforeach;  // foreach ($article_list as $w) ?>
          </div>
        </div>
      </section>
    <?php endif; //if((isset($article_list)) AND ($article_list == TRUE)):  ?>
  <?php endif; //if((isset($page_list)) AND ($page_list == TRUE)):  ?>
<?php endif; //if((isset($article)) AND ($article == TRUE)):  ?>

<?php $this->load->view($theme.'views/elements/footer'); ?>
<?php $this->load->view($theme.'views/core/scripts'); ?>
<?php $this->load->view($theme.'views/core/close'); ?>
