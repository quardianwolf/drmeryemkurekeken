<?php $this->load->view($theme . 'views/core/open'); ?>
<?php $this->load->view($theme . 'views/elements/header'); ?>
<?php $this->load->view($theme . 'views/elements/banner'); ?>

<?php if ((isset($article)) and ($article == TRUE)) : ?>

  <div class="orb-wrapper">
		<div id="orb-dynamic-content" class="transition-fade">
			<div class="orb-page-frame orb-blog-4">
				<div class="orb-content">
					<div class="orb-grid">
						<div class="orb-g-40 orb-sm-100">
							<div class="rb-object-frame">
								<div class="orb-photo-frame orb-obj-1">
                <?php if ((isset($article->media)) and ($article->media == TRUE)) : ?>
                <?php foreach ($article->media as $w) : ?>
									<img src="<?= site_url($w->path . $w->file_name); ?>" alt="photo">
                  <?php endforeach;  // foreach ($article->media as $w)  ?>
                   <?php endif; //if((isset($article->media)) AND ($article->media == TRUE)):   ?>
								</div>
								<div class="orb-deco"></div>
							</div>
						</div>
						<div class="orb-g-60 orb-sm-100">
							<div class="orb-blog-frame">
								<div class="orb-post-text">
									<h2><?= $article->title; ?></h2>
									<p><?= $article->content; ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <?php else : ?>

  <?php $page_list = $this->publish->get_sub_pages($lang_in_use, $page_data->id_page, '0', 'ibs'); ?>
  <?php if ((isset($page_list)) and ($page_list == TRUE)) : ?>

    <?php if (count($page_list) == 1) : ?>
      <?php header('Location: ' . base_url($link_p[$lang_in_use . '/' . $page_list[0]->id_page])); ?>
    <?php endif; ?>

   
    
  <?php else : ?>

    <?php $article_list = $this->publish->get_articles($lang_in_use, $page_data->id_page, null, '0', 'logical_date', 'asc', 'ibs'); ?>
    <?php if ((isset($article_list)) and ($article_list == TRUE)) : ?>
      <section id="tedaviler" class="tedaviler">
        <div class="orb-wrapper">
          <div id="orb-dynamic-content" class="transition-fade">
            <div class="orb-scroll-frame">
              <div class="orb-blog-list">
                <div class="orb-grid orb-padding-grid">
                <?php foreach ($article_list as $w) : ?>
                  <div class="orb-g-20 orb-md-50 orb-sm-100">
                    <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>" class="orb-blog-card">
                      <div class="orb-photo-frame orb-active">
                        <img src="<?= site_url($w->path . $w->file_name); ?>" alt="photo">
                      </div>
                      <div class="orb-post-text">
                        <h2><?= $w->title; ?></h2>
                        <p><?= $w->summary; ?></p>
                      </div>
                    </a>
                  </div>	
                  <?php endforeach;  ?>			
                </div>
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