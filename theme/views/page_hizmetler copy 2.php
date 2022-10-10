
<!--================ End of Breadcrumb ================-->
<div class="mad-content">
  <div class="container">
    <div class="mad-entities with-date type-2 content-element-12">
      <!--================ Entity ================-->
      <article class="mad-entity mad-entity-single content-element-8">
      <?php if ((isset($article->media)) and ($article->media == TRUE)) : ?>
      <?php foreach ($article->media as $w) : ?>
        <div class="mad-entity-media">
          <a href="#"><img src="<?= site_url($w->path . $w->file_name); ?>" alt=""></a>
        </div>
        <?php endforeach; ?>
        <?php endif;  ?>
        <div class="mad-entity-content">    
          <h2><?= $article->title; ?></h2> 
          <div class="mad-entity-header">
            <div class="mad-dropcap style-2 color-2 mad-text-medium content-element-4">
              <p>
              <?= $article->summary; ?>
              </p>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</div>




<div class="mad-content">
        <div class="container-fluid">
          <div class="row hr-size-2 vr-size-2">
            <main id="main" class="col-xxl-9 col-lg-8">
              <div class="mad-entities with-date type-2">
                <div class="mad-col">
                  <!--================ Entity ================-->
                  <article class="mad-entity">
                  <?php if ((isset($article->media)) and ($article->media == TRUE)) : ?>
                    <?php foreach ($article->media as $w) : ?>
                    <div class="mad-entity-media">
                      <a href="blog_single_sidebar.html"><img src="<?= site_url($w->path . $w->file_name); ?>" alt=""></a>
                    </div>
                    <?php endforeach; ?>
                     <?php endif;  ?>
                    <div class="mad-entity-content">
                      <div class="mad-entity-header">
                        <h3 class="mad-entity-title">
                          <a href="<?= site_url($link_p[$lang_in_use . '/' . $w->id_page]); ?>"><?= $article->title; ?></a>
                        </h3>
                        <p>
                        <?= $article->summary; ?>
                        </p>
                      </div>
                    </div>
                  </article>
                  <!--================ End of Entity ================-->
                </div>
            </main>
            <aside id="sidebar" class="col-xxl-3 col-lg-4 mad-sidebar">
              <div class="mad-widget">
                <form class="mad-search-form one-line">
                  <input type="text" placeholder="Search">
                  <button class="btn"><i class="material-icons">search</i></button>
                </form>
              </div>
              <div class="mad-widget">
                <h6 class="mad-widget-title">Categories</h6>
                <ul class="mad-vr-list">
                  <li>
                    <a href="blog_classic_sidebar.html"> News (5) </a>
                  </li>
                  <li>
                    <a href="blog_classic_sidebar.html"> Quotes (2) </a>
                  </li>
                  <li>
                    <a href="blog_classic_sidebar.html"> Sights (7) </a>
                  </li>
                  <li>
                    <a href="blog_classic_sidebar.html"> Tips (3) </a>
                  </li>
                  <li>
                    <a href="blog_classic_sidebar.html"> Videos & Audios (4) </a>
                  </li>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>