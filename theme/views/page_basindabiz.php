<?php $this->load->view($theme . 'views/core/open'); ?>
<?php $this->load->view($theme . 'views/elements/header'); ?>
<?php $this->load->view($theme . 'views/elements/banner'); ?>

<?php if ((isset($article)) and ($article == TRUE)) : ?>
<section id="basindabiz" class="basinda_biz">
    <div class="orb-wrapper">
            <div id="orb-dynamic-content" class="transition-fade">
                <div class="orb-page-frame orb-blog-4">
                    <div class="orb-content">
                        <div class="orb-grid">
                            <div class="orb-g-40 orb-sm-100">
                                <div class="rb-object-frame">
                                <iframe width="800" height="480" src="<?= $article->subtitle; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
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

</section>
    
<?php else : ?>

    <?php $page_list = $this->publish->get_sub_pages($lang_in_use, $page_data->id_page, '0', 'ibs'); ?>
    <?php if ((isset($page_list)) and ($page_list == TRUE)) : ?>

        <?php if (count($page_list) == 1) : ?>
            <?php header('Location: ' . base_url($link_p[$lang_in_use . '/' . $page_list[0]->id_page])); ?>
        <?php endif; ?>



    <?php else : ?>

        <?php $article_list = $this->publish->get_articles($lang_in_use, $page_data->id_page, null, '0', 'logical_date', 'asc', 'ibs'); ?>
        <?php if ((isset($article_list)) and ($article_list == TRUE)) : ?>
            <section id="tedaviler" class="tedavilerr">
                <div class="orb-wrapper">
                    <div id="orb-dynamic-content" class="transition-fade">
                        <div class="orb-scroll-frame">
                            <div class="orb-blog-list">
                                <div class="orb-grid orb-padding-grid">
                                    <?php foreach ($article_list as $w) : ?>
                                        <div class="orb-g-33 orb-md-50 orb-sm-100">
                                            <div >
                                            <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>" class="orb-blog-card">
                                            <iframe width="560" height="315" src="<?= $w->subtitle; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

                                                </iframe>
                                                <div class="orb-photo-frame orb-active">
                                                
                                                </div>
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