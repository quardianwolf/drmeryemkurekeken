<?php $page = $this->publish->get_page($lang_in_use,'5','ibs'); ?>
<?php $page = $page[0]; ?>

<?php $gallery = $this->publish->get_articles($lang_in_use,$page->id_page,null,'0','logical_date','asc','isl'); ?>

<section class="pt-5 pt-xl-7 pt-xxl-8">
  <div class="container-fluid">
    <div class="row justify-content-center pb-5">
      <div class="col-lg-10">
        <div class="text-center mb-5 mb-lg-6">
          <h2 class="fs-2 fs-sm-3"> <?=$page->title;?></h2>
          <hr class="hr-ornate">
        </div>
        <div class="row">
          <?php if((isset($gallery)) AND ($gallery == TRUE)): ?>
            <?php $run=0; foreach ($gallery as $w): ?>
              <a class="col-12 col-md-4 p-2 galeri-item" href="<?=site_url($w->path.$w->file_name);?>" data-fancybox="image">
                <div class="lazy bg" data-src="<?=site_url($w->path.$w->file_name);?>"></div>
              </a>
            <?php $run++; endforeach;  // foreach ($gallery as $w) ?>
          <?php endif; //if((isset($gallery)) AND ($gallery == TRUE)):  ?>
        </div>
      </div>
    </div>
  </div>
</section>