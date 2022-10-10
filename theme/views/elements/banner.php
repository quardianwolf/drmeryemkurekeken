<?php if ((isset($article)) and ($article->title == TRUE)) : ?>

<div class="upper-box">
  <div class="mad-breadcrumb with-bg-img with-overlay" data-bg-image-src="images/1920x512_bg3.jpg">
    <div class="container wide">
      <h1 class="mad-page-title">
      <?php echo $page_data->title; ?>
      </h1>
      <nav class="mad-breadcrumb-path">
        <span><a href="/" class="mad-link">Ana Sayfa</a></span> /
        <span><?= $article->title; ?></span>
      </nav>
    </div>
  </div>
</div>
<?php else: ?>
  <div class="upper-box">
  <div class="mad-breadcrumb with-bg-img with-overlay" data-bg-image-src="images/1920x512_bg3.jpg">
    <div class="container wide">
      <h1 class="mad-page-title">
        <?php echo $page_data->title; ?>
      </h1>
      <nav class="mad-breadcrumb-path">
        <span><a href="/" class="mad-link">Ana Sayfa</a></span> 
      </nav>
    </div>
  </div>
</div>
<?php endif; ?>