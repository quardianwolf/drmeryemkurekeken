<?php $page = $this->publish->get_page($lang_in_use,'6','ibs'); ?>
<?php $page = $page[0]; ?>

<?php $article_list = $this->publish->get_articles($lang_in_use,$page->id_page,null,'0','logical_date','asc','ibs'); ?>

<section class="pt-5 pt-xl-7 pt-xxl-8">
  <div class="container-fluid">
    <div class="row justify-content-center pb-5">
      <div class="col-lg-10">
        <div class="text-center mb-5 mb-lg-6">
          <h2 class="fs-2 fs-sm-3"> <?=$page->subtitle;?></h2>
          <hr class="hr-ornate">
        </div>
        <div class="row">
          <div class="accordion mt-4">
            <?php $run=0; foreach ($article_list as $w): ?>
              <h5 class="title <?=$run==0 ? 'active' : null;?>">
                <span class="fa fa-plus mr-1 text-800"></span> <?=$w->title;?>
              </h5>
              <div class="content pl-5 <?=$run==0 ? 'active' : null;?>">
                <?=$w->content;?>
              </div>
            <?php $run++; endforeach;  // foreach ($article_list as $w) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>